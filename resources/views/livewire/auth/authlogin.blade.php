<div>
    @section('title', 'Sign in')
    <div class="flex min-h-full flex-col justify-center px-4 sm:px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <a href="{{ route('home') }}">
                <img class="mx-auto h-20 w-auto rounded-full" src="{{ url('Picture/lanmar.png') }}" alt="Your Company">
            </a>
            <h2 class="mt-5 text-center text-lg sm:text-2xl font-bold tracking-tight text-gray-900">
                Sign in to your account
            </h2>
        </div>

        <div class="shadow-xl sm:mx-auto sm:w-full sm:max-w-sm">
            <form wire:submit.prevent="login" class="space-y-6">
                @csrf

                @if ($lockoutTime > 0)
                    <div wire:poll.1000ms="decrementLockoutTime" class="text-center text-gray-900 font-semibold -mt-10">
                        Please wait <span>{{ gmdate('i:s', $lockoutTime) }}</span> before trying again.
                    </div>
                @endif

                @foreach ($errors->all() as $error)
                    <p class="text-center text-sm text-red-600">{{ $error }}</p>
                @endforeach

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">
                        Email or Contact Number
                    </label>
                    <div class="mt-2">
                        <input id="email" wire:model="email" type="text"
                            placeholder="Type your email or contact here" autocomplete="email" required
                            class="block w-full rounded-md px-4 py-3 text-gray-900 shadow-sm placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm @error('email') border-red-500 ring-red-500 @enderror">

                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot
                                password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" wire:model="password" type="password" placeholder="********"
                            autocomplete="current-password"
                            class="block w-full rounded-md px-4 py-3 text-gray-900 shadow-sm placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm @error('password') border-red-500 ring-red-500 @enderror">

                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-4 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600 disabled:opacity-50 disabled:cursor-not-allowed"
                        wire:loading.attr="disabled" @if ($lockoutTime > 0) disabled @endif>
                        <span wire:loading.remove>Sign in</span>
                        <span wire:loading>
                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z">
                                </path>
                            </svg>
                        </span>
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
