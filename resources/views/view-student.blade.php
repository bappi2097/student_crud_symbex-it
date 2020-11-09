<div class="hidden z-10 inset-0 overflow-y-auto" id="modal-view-{{$student->id}}">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="w-full">
                <span class="border border-1 border-gray-500 rounded-full bg-gray-300 float-right cursor-pointer m-1"
                    onclick="document.querySelector('#modal-view-{{$student->id}}').classList.remove('fixed');document.querySelector('#modal-view-{{$student->id}}').classList.add('hidden');">
                    <svg class="w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </div>
            <div class="bg-white p-10">
                <div class="border border-1 border-gray-300 mx-auto rounded-md relative"
                    style="width: 346px; height: 216px;">
                    <img class="rounded-md absolute" style="height: 214px;" src="{{asset('images/Front.jpg')}}" alt=""
                        width="346">
                    <div class="rounded-md absolute"
                        style="width: 346px; height: 216px; font-family: Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif;">
                        <div class="flex justify-between mt-6">
                            <div class="px-3">
                                <img class="mx-auto mb-5" src="{{asset('images/diulogoside.png')}}" alt="" width="110">
                                <span
                                    class="text-md capitalize">{{$student->first_name. " " . $student->last_name}}</span><br>
                                <span class="text-md">{{$student->programme}}</span><br>
                                <span class="text-md">ID: {{str_pad($student->id+1, 4, '0', STR_PAD_LEFT)}}</span><br>
                                <span class="text-md">Batch: {{$student->batch}}</span><br>
                                <span class="text-md">Section: {{$student->section}}</span><br>
                            </div>
                            <div class="mx-4">
                                <img class="mx-auto mb-2" style="height: 80px;"
                                    src="{{asset('students/images/' . $student->image)}}" alt="" width="75">
                                <div class="flex items-center">
                                    <span>
                                        <svg class="w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z" />
                                            <path
                                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                        </svg>
                                    </span>
                                    <span class="text-xs ml-2">{{$student->mobile_no}}</span>
                                </div>
                                <div class="flex items-center mt-1">
                                    <span>
                                        <svg class="w-3" id="Layer_1" enable-background="new 0 0 511.866 511.866"
                                            viewBox="0 0 511.866 511.866" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m409.394 248.314-145.677-241.072c-2.754-4.557-7.714-7.316-13.039-7.241-5.323.071-10.21 2.959-12.841 7.588l-137.796 242.509c-16.375 28.819-23.362 53.552-23.362 82.7 0 98.739 80.413 179.068 179.255 179.068s179.255-80.33 179.255-179.068c-.001-34.692-10.313-58.864-25.795-84.484z" />
                                        </svg>
                                    </span>
                                    <span class="text-xs ml-2">{{$student->blood_group}}</span>
                                </div>
                                <img class="mx-auto" src="{{asset('images/sign.png')}}" alt="" width="45">
                                <div class="border-b border-black border-b-1 w-full"></div>
                                <span class="mx-auto text-center block">Register</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 border border-1 border-gray-300 mx-auto rounded-md relative"
                    style="width: 346px; height: 216px;">
                    <img class="rounded-md absolute" style="height: 214px;" src="{{asset('images/Back.jpg')}}" alt=""
                        width="346">
                    <div class="rounded-md absolute"
                        style="width: 346px; height: 216px; font-family: Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif;">
                        <div class="w-2/3 ml-auto py-5 px-1">
                            <p class="text-xs">If found please return to the Register's Office.</p>
                            <p class="text-blue-800 mb-1">Daffodil inernational University</p>
                            <div class="flex justify-center items-center mb-1">
                                <div class="bg-red-600 w-1/6 border-r border-r-2 border-white p-1">
                                    <span class="mx-auto">
                                        <svg class="text-center w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="bg-gray-300 text-xs leading-3 h-8 w-5/6 p-1">
                                    34/4, Shyamoli, Dhaka-120734/4, Shyamoli, Dhaka-1207
                                </div>
                            </div>
                            <div class="flex justify-center items-center mb-1">
                                <div class="bg-blue-400 w-1/6 border-r border-r-2 border-white p-1">
                                    <span class="mx-auto">
                                        <svg class="text-center w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="bg-gray-300 text-xs leading-3 h-8 w-5/6 p-1">
                                    +88 029138234-5 <br>
                                    +88 02 0136694
                                </div>
                            </div>
                            <div class="flex justify-center items-center mb-1">
                                <div class="bg-purple-400 w-1/6 border-r border-r-2 border-white p-1">
                                    <span class="mx-auto">
                                        <svg class="text-center w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="bg-gray-300 text-xs h-8 w-5/6 p-2">
                                    www.daffodilvarsity.com
                                </div>
                            </div>
                            <div class="flex justify-center items-center mb-1">
                                <div class="bg-gray-600 w-1/6 border-r border-r-2 border-white p-1">
                                    <span class="mx-auto">
                                        <svg class="text-center w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="bg-gray-300 text-xs h-8 w-5/6 p-2">
                                    info@daffodilvarsity.edu.bd
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>