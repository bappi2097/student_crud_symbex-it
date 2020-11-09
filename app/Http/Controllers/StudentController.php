<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Exception;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image'],
            'email' => ['required', 'email', 'unique:students'],
            'programme' => ['required', 'string', 'max:255'],
            'batch' => ['required', 'numeric'],
            'section' => ['required', 'string'],
            'blood_group' => ['required', 'string', 'max:3'],
            'mobile_no' => ['required', 'string'],
            'current_address' => ['required']
        ]);

        if ($request->hasfile("image")) {
            $studentImage = uniqid(11) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('students\images'), $studentImage);
        }

        $data = [
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "image" => $studentImage,
            "email" => $request->email,
            "programme" => $request->programme,
            "batch" => $request->batch,
            "section" => $request->section,
            "blood_group" => $request->blood_group,
            "mobile_no" => $request->mobile_no,
            "current_address" => $request->current_address,
        ];

        if (Student::insert($data)) {
            return back()->with('success', 'Student added successfully.');
        } else {
            return back()->with('error', 'Something went Wrong!');
        }
    }

    public function storeBulk(Request $request)
    {
        $this->validate($request, [
            'excel' => ['required', 'file']
        ]);
        $reader = new Xlsx();
        $spreadsheet = $reader->load($request->file('excel'));
        $rows = array();
        $images = $this->getImages($spreadsheet);
        $worksheet = $spreadsheet->getActiveSheet();
        foreach ($worksheet->getRowIterator() as $index => $row) {
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(FALSE);
            $row = [];
            foreach ($cellIterator as $cell) {
                $row[] = $cell->getValue();
            }
            if (empty($row[1])) {
                break;
            }
            $row["index"] = $index;
            $rows[] = $row;
        }
        foreach ($rows as $index => $row) {
            foreach ($images as $image) {
                preg_match_all('!\d+!', $image["cordinate"], $matches);
                if ($row["index"] == (int)implode("", $matches[0])) {
                    $rows[$index] = array_merge($row, $image);
                    break;
                }
            }
        }
        array_splice($rows, 0, 1);
        $i = 0;
        foreach ($rows as $row) {
            if (array_key_exists("image", $row)) {
                $name = uniqid(11) . '.' . $row["extension"];
                file_put_contents("students/images/" . $name, $row["image"]);
            }

            $data = [
                "first_name" => $row[0],
                "last_name" => $row[1],
                "image" => array_key_exists("image", $row) ? $name : null,
                "email" => $row[2],
                "programme" => $row[3],
                "batch" => $row[4],
                "section" => $row[5],
                "blood_group" => $row[6],
                "mobile_no" => $row[7],
                "current_address" => $row[8],
            ];
            try {
                Student::insert($data);
            } catch (Exception $e) {
                $i++;
                continue;
            }
        }
        if ($i > 0) {
            return back()->with('warning', 'Some student not added. Duplicate Data');
        }
        return back()->with('success', 'Student added successfully.');
    }

    public function getImages($spreadsheet)
    {
        $images = [];
        // $i = 0;
        foreach ($spreadsheet->getActiveSheet()->getDrawingCollection() as $drawing) {
            if ($drawing instanceof \PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing) {
                ob_start();
                call_user_func(
                    $drawing->getRenderingFunction(),
                    $drawing->getImageResource()
                );
                $imageContents = ob_get_contents();
                ob_end_clean();
                switch ($drawing->getMimeType()) {
                    case \PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing::MIMETYPE_PNG:
                        $extension = 'png';
                        break;
                    case \PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing::MIMETYPE_GIF:
                        $extension = 'gif';
                        break;
                    case \PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing::MIMETYPE_JPEG:
                        $extension = 'jpg';
                        break;
                }
            } else {
                $zipReader = fopen($drawing->getPath(), 'r');
                $imageContents = '';
                while (!feof($zipReader)) {
                    $imageContents .= fread($zipReader, 1024);
                }
                fclose($zipReader);
                $extension = $drawing->getExtension();
            }
            $images[] = [
                "extension" => $extension,
                "image" => $imageContents,
                "cordinate" => $drawing->getCoordinates()
            ];
        }
        return $images;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:students,email,' . $student->id],
            'programme' => ['required', 'string', 'max:255'],
            'batch' => ['required', 'numeric'],
            'section' => ['required', 'string'],
            'blood_group' => ['required', 'string', 'max:3'],
            'mobile_no' => ['required', 'string'],
            'current_address' => ['required']
        ]);
        $studentImage = null;
        if ($request->hasfile("image")) {
            $studentImage = uniqid(11) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('students\images'), $studentImage);
        }

        $data = [
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "image" => $studentImage ?: $student->image,
            "email" => $request->email,
            "programme" => $request->programme,
            "batch" => $request->batch,
            "section" => $request->section,
            "blood_group" => $request->blood_group,
            "mobile_no" => $request->mobile_no,
            "current_address" => $request->current_address,
        ];

        if ($student->update($data)) {
            return back()->with('success', 'Student updated successfully.');
        } else {
            return back()->with('error', 'Something went Wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        if ($student->delete()) {
            return back()->with('success', 'Student deleted successfully.');
        } else {
            return back()->with('error', 'Something went Wrong!');
        }
    }
}
