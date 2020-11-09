@extends('layouts.master')

@section('content')
<div class="lg:flex sm:p-5">
    <div class="w-full lg:w-1/2 p-5 lg:m-10 lg:p-10 lg:border-r-2 lg:border-gray-300 bg-white">
        <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
            @csrf
            <div class="lg:flex lg:justify-between">
                <div class="w-full lg:w-1/2 mb-6 mr-2">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="first_name">
                        First Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="first_name" id="first_name"
                        placeholder="John" required>
                    @error('first_name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-full lg:w-1/2 mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="last_name">
                        Last Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="last_name" id="last_name"
                        placeholder="Doe" required>
                    @error('last_name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-bold text-gray-700">
                    Photo
                </label>
                <div class="mt-2 flex items-center">
                    <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100 mr-2">
                        <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </span>
                    <input class="border border-gray-400 p-2 w-full" type="file" name="image" id="image"
                        accept=".jpg, .png, .jpeg" placeholder="Enter your name" required>
                </div>
                @error('image')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                    Email
                </label>

                <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email"
                    placeholder="john.doe@example.com" required>
                @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="programme">
                    Programme
                </label>

                <select class="border border-gray-400 p-2 w-full" name="programme" id="programme" required>
                    <option selected>--- Choose Programme ---</option>
                    <option value="B.Sc. In SWE">B.Sc. In SWE</option>
                    <option value="B.Sc. in CSE">B.Sc. in CSE</option>
                    <option value="B.Sc. in EEE">B.Sc. in EEE</option>
                </select>
                @error('programme')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="lg:flex">
                <div class="w-full lg:w-1/2 mb-6 lg:mr-2">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="batch">
                        Batch
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="batch" id="batch"
                        placeholder="23" required>
                    @error('batch')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-full lg:w-1/2 mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="section">
                        Section
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="section" id="section"
                        placeholder="A" required>
                    @error('section')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="lg:flex">
                <div class="w-full lg:w-1/2 mb-6 mr-2">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="blood_group">
                        Blood Group
                    </label>

                    <select class="border border-gray-400 p-2 w-full" name="blood_group" id="blood_group" required>
                        <option selected>--- Blood Group ---</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                    @error('blood_group')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-full lg:w-1/2 mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="mobile_no">
                        Mobile No
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="mobile_no" id="mobile_no"
                        placeholder="+8801xxxxxxxxx" required>
                    @error('mobile_no')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="current_address">
                    Current_Address
                </label>

                <textarea class="border border-gray-400 p-2 w-2/3 p-4" rows="5" name="current_address"
                    id="current_address" placeholder="1020 Louelda St, Winnipeg, MB R2K 3Z4, Canada"
                    required></textarea>
                @error('current_address')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
    <div class="w-full lg:w-1/2 p-5 lg:m-10 lg:p-10 bg-white mt-2">
        <form method="POST" action="{{route('store-bulk')}}" enctype="multipart/form-data">
            @csrf
            <div class="mx-auto p-10 items-center align-middle">
                <label class="block text-sm font-bold text-gray-700">
                    Import Excel
                </label>
                <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="text-center" onclick="document.getElementById('excel').click()">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                            viewBox="0 0 48 48">
                            <path
                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="mt-1 text-sm text-gray-600">
                            <button type="button"
                                class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                                Upload a file
                            </button>
                        </p>
                        <input type="file" name="excel" id="excel" class="hidden" accept=".xlsx, .csv, .xls">
                    </div>
                </div>
                @error('excel')
                <p class="text-red-500 text-xs mt-2" style="margin-bottom: -26px;">{{ $message }}</p>
                @enderror
                <div class="mt-8">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="p-2 lg:p-8 bg-white lg:mx-10 mb-6">
    <div class="grid">
        <div class="mb-6">
            <a href="{{route("print-id-bulk")}}" target="_blank"
                class="text-white rounded py-2 px-5 float-right flex justify-between --print-button">
                Print All
                <span class="w-6 ml-2">
                    <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Programme
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Mobile No
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Blood Group
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Address
                                </th>
                                <th class="px-6 py-3 bg-gray-50">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($students as $student)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                src="{{asset('students/images/'.$student->image)}}" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm leading-5 font-medium text-gray-900">
                                                {{$student->first_name . " " .$student->last_name}}
                                            </div>
                                            <div class="text-sm leading-5 text-gray-500">
                                                {{$student->email}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="text-sm leading-5 text-gray-900">{{$student->programme}}</div>
                                    <div class="text-sm leading-5 text-gray-500">Batch-{{$student->batch}},
                                        Sec-{{$student->section}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{$student->mobile_no}}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        {{$student->blood_group}}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    {{$student->current_address}}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-center flex justify-center">
                                    <a class="cursor-pointer text-indigo-600 hover:text-indigo-900 mx-2"
                                        onclick="document.querySelector('#modal-view-{{$student->id}}').classList.remove('hidden');document.querySelector('#modal-view-{{$student->id}}').classList.add('fixed');">View</a>
                                    <a class="text-indigo-600 hover:text-indigo-900 mx-2 cursor-pointer"
                                        onclick="document.querySelector('#modal-register-{{$student->id}}').classList.remove('hidden');document.querySelector('#modal-register-{{$student->id}}').classList.add('fixed');">Edit</a>
                                    <a href="{{route('print-id', $student->id)}}" target="_blank"
                                        class="text-indigo-600 hover:text-indigo-900 mx-2">Print</a>
                                    <form method="POST" action="{{route('delete', $student->id)}}"
                                        id="delete-{{$student->id}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="if(confirm('Do you want to delete?'))document.getElementById('delete-{{$student->id}}').submit()"
                                            class="cursor-pointer text-red-600 hover:text-red-900 mx-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @include('view-student')
                            @include('edit-student')
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-2">
                        {{$students->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection