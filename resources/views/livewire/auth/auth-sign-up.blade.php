<div>
    {{-- Stop trying to control. --}}
    @livewireStyles
    @livewireScripts
    @section('title', 'Sign Up')

    <body class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg p-8">
            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <img src="{{ url('Picture/lanmar.png') }}" alt="Lan-Mar Logo" class="w-20 h-20 rounded-full">
            </div>

            <!-- Title -->
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Sign up for an account</h2>

            <form wire:submit.prevent="register" class="space-y-6">
                @csrf

                <!-- Full Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                    <input type="text" id="name" wire:model="name"
                        class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm/6"
                        required>

                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Address and Contact Number -->
                <div class="flex gap-4">
                    <!-- Email -->
                    <div class="w-1/2">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" wire:model="email"
                            class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm/6"
                            required>

                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Contact Number -->
                    <div class="w-1/2">
                        <label for="contact_number" class="block text-sm font-medium text-gray-700 mb-2">Contact
                            Number</label>
                        <input type="text" id="contact_number" wire:model="contact_number"
                            class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm/6"
                            required>

                        @error('contact_number')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input type="password" id="password" wire:model="password"
                        class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm/6"
                        required>

                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm
                        Password</label>
                    <input type="password" id="password_confirmation" wire:model="password_confirmation"
                        class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm/6"
                        required>

                    @error('password_confirmation')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Register Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Sign Up
                    </button>
                </div>
            </form>
            <!-- Footer Links -->
            <a href=" {{ route('login') }}">
                <p class="mt-6 text-center text-base text-cyan-600">
                    Already have an account?
                </p>
            </a>
        </div>
    </body>

</div>