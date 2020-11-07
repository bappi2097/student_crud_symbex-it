<div class="hidden z-10 inset-0 overflow-y-auto" id="modal-register">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white p-10">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                            Name
                        </label>

                        <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name"
                            placeholder="John Doe" required>
                        @error('name')
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
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                            Password
                        </label>

                        <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password"
                            placeholder="**********" required>
                        @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password_confirmation">
                            Password_Confirmation
                        </label>

                        <input class="border border-gray-400 p-2 w-full" type="password" name="password_confirmation"
                            id="password_confirmation" placeholder="**********" required>
                        @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex">
                        <div class="mr-2">
                            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                                Register
                            </button>
                        </div>
                        <div class="mx-2">
                            <button
                                onclick="document.querySelector('#modal-register').classList.remove('fixed');document.querySelector('#modal-register').classList.add('hidden');"
                                type="button" class="bg-red-400 text-white rounded py-2 px-4 hover:bg-red-500">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>