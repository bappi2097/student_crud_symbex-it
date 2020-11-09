<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Id Card</title>
    <style>
        .page-break {
            page-break-after: always;
        }

        .main {
            width: 346px;
            height: 214px;
            margin: auto;
            margin-bottom: 30px;
            position: relative;
        }

        .background-image {
            width: 345px;
            height: 212px;
            border-radius: 6px;
            position: relative;
            border: 1px solid gray;
            position: absolute;
        }

        .main-data {
            width: 345px;
            height: 212px;
            position: absolute;
        }

        .right-div,
        .left-div {
            position: absolute;
            float: left;
            width: 172px;
            height: 212px;
        }

        .logo {
            position: absolute;
            margin: 25px 0 0 18px;
        }

        .info {
            position: absolute;
            padding: 0 12px;
            height: 120px;
            margin-top: 70px;
        }

        .capitalize {
            text-transform: capitalize;
        }

        .register-hr {
            border-bottom: 1px solid black;
            width: 80px;
        }

        .back-div {
            padding: 10px;
            position: absolute;
            height: 194px;
            margin-left: 120px;
            width: 208px;
            display:
        }
    </style>
</head>

<body>
    @foreach ($students as $student)
    <div>
        <div class="main">
            <img class="background-image" src="{{public_path('images/Front.jpg')}}" alt="">
            <div class="main-data">
                <div class="left-div" style="font-size:15px; line-height: 1.5;">
                    <img class="logo" src="{{public_path('images/diulogoside.png')}}" width="110" alt="">
                    <div class="info">
                        <span class="capitalize">{{$student->first_name. " " . $student->last_name}}</span><br>
                        <span class="text-md">{{$student->programme}}</span><br>
                        <span class="text-md">ID: {{str_pad($student->id+1, 4, '0', STR_PAD_LEFT)}}</span><br>
                        <span class="text-md">Batch: {{$student->batch}}</span><br>
                        <span class="text-md">Section: {{$student->section}}</span><br>
                    </div>
                </div>
                <div class="right-div" style="padding-left: 50px">
                    <img style="height: 80px; margin-left:15px;; margin-top:25px;"
                        src="{{public_path('students/images/' . $student->image)}}" alt="" width="75">
                    <div class="flex items-center" style="margin-top: 10px;">
                        <span style="position: absulate;">
                            <img src="{{public_path('images/call.png')}}"
                                style="position: absulate; color: black; width: 12px;" alt="">
                        </span>
                        <span class="text-xs ml-2" style="font-size: 13px;">{{$student->mobile_no}}</span>
                    </div>
                    <div class="flex items-center">
                        <span style="position: absulate;">
                            <img src="{{public_path('images/blood-drop.png')}}"
                                style="position: absulate; color: black; width: 12px;" alt="">
                        </span>
                        <span class="text-xs ml-2" style="font-size: 13px;">{{$student->blood_group}}</span>
                    </div>
                    <img class="mx-auto" src="{{public_path('images/sign.png')}}" alt="" width="45"
                        style="margin-left:20px; margin-top: 5px;">
                    <div class="border-b border-black border-b-1 w-full register-hr"></div>
                    <span class="mx-auto text-center block" style="margin-left: 20px;">Register</span>
                </div>
            </div>

        </div>
    </div>
    <div>
        <div class="main">
            <img class="background-image" src="{{public_path('images/Back.jpg')}}" alt="">
            <div class="main-data">
                <div style="display: block;" class="back-div">
                    <p class="" style="font-size: 11px; line-height: 50%;">If found please return to the Register's
                        Office.</p>
                    <p class="" style="color: blue; line-height: 40%;">Daffodil inernational University</p>
                    <div style="position:absolute; display: block;">
                        <div style="display: block; margin-bottom: 4px;">
                            <div style="display: inline-block; background: #e53e3e; padding: 6px;">
                                <img src="{{public_path('images/home.png')}}" style="width: 18px;" alt="">
                            </div>
                            <div
                                style="display: inline-block; background: #e2e8f0; width: 150px; font-size:10px; padding: 3px 5px; ">
                                102, Shukrabad, Mirpur Road Dhaka-1207, Bangladesh
                            </div>
                        </div>
                        <div style="display: block; margin-bottom: 4px;">
                            <div style="display: inline-block; background: #63b3ed; padding: 6px;">
                                <img src="{{public_path('images/call-white.png')}}" style="width: 18px;" alt="">
                            </div>
                            <div
                                style="display: inline-block; background: #e2e8f0; width: 150px; font-size:10px; padding: 3px 5px; ">
                                +88 029138234-5 <br>
                                +88 02 0136694
                            </div>
                        </div>
                        <div style="display: block; margin-bottom: 4px;">
                            <div style="display: inline-block; background: #4b1157; padding: 6px;">
                                <img src="{{public_path('images/global.png')}}" style="width: 18px;" alt="">
                            </div>
                            <div
                                style="display: inline-block; background: #e2e8f0; width: 150px; font-size:10px; padding: 9px 5px; ">
                                www.daffodilvarsity.com
                            </div>
                        </div>
                        <div style="display: block; margin-bottom: 4px;">
                            <div style="display: inline-block; background: #718096; padding: 6px;">
                                <img src="{{public_path('images/email.png')}}" style="width: 18px;" alt="">
                            </div>
                            <div
                                style="display: inline-block; background: #e2e8f0; width: 150px; font-size:10px; padding: 9px 5px; ">
                                info@daffodilvarsity.edu.bd
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (!$loop->last)
    <div class="page-break"></div>
    @endif
    @endforeach
</body>

</html>