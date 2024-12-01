<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @section('title', 'Sign in')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <a href="{{ route('home') }}">
                <img class="mx-auto h-20 w-auto rounded-full" src="{{ url('Picture/lanmar.png') }}" alt="Your Company">
            </a>
            <h2 class="mt-5 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your account</h2>
        </div>

        <div class="mt-10 shadow-xl sm:mx-auto sm:w-full sm:max-w-sm">
            <form wire:submit.prevent="login" class="space-y-6">
                @csrf
                <!-- Display the custom credentials error -->
                <div>
                    @error('credentials')
                        <p class="text-center font-semibold -mt-12 text-base text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">
                        Email or Contact Number
                    </label>
                    <div class="mt-2">
                        <input id="email" wire:model="email" type="text" autocomplete="email" required
                            class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm/6 @error('email') border-red-500 ring-red-300 focus:ring-red-500 @enderror">

                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot
                                password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" wire:model="password" type="password" autocomplete="current-password"
                            required
                            class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm/6 @error('password') border-red-500 ring-red-300 focus:ring-red-500 @enderror">

                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-4 py-3 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Sign in
                    </button>
                </div>
            </form>


            <div class="mt-4">
                <a href="{{ route('register') }}">
                    <button type="button"
                        class="w-full px-4 py-2 font-semibold text-white shadow-sm bg-green-500 rounded-md hover:bg-green-400">
                        Create Account
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
