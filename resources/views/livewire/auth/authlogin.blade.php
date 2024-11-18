<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <link rel="stylesheet" href="{{ url('CSS/login.css') }}">

    <body>
        <div class="background-overlay"></div>
        <header class="absolute inset-x-0 top-0 z-50 -mt-4">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="{{route('home')}}" class="-m-1.5 p-1.5">
                      <span class="sr-only">Your Company</span>
                      <img class="h-14 w-14 rounded-full" src="{{ url('Picture/lanmar.png') }}" alt="">
                    </a>
                  </div>
                {{-- <div class="hidden lg:flex lg:gap-x-12">
                  <a href="#" class="text-lg font-semibold text-gray-100 ml-80">Product</a>
                  <a href="#" class="text-lg font-semibold text-gray-100 ">Features</a>
                  <a href="#" class="text-lg font-semibold text-gray-100 ">Marketplace</a>
                  <a href="#" class="text-lg font-semibold text-gray-100 ">Company</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                  <a href="#" class="text-lg font-semibold text-indigo-900  ">Log in <span aria-hidden="true">&rarr;</span></a>
                </div>
              </nav> --}}
        </header>
        <div class="wrapper">

            <div class="form-box login">
                <form action="#" >
                    <div class="input-box">
                        <input type="email" wire:model='email' required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <input type="password"  wire:model='password' required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forget">
                        <label> <input type="checkbox">
                            Remember Me </label>
                        <a href="#">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn" wire:click='login'>Log in</button>
                    <div class="login-register">
                        <p>Don't have account?
                            <a href="#" class="register-link">Register</a>
                        </p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <form action="#">
                    <div class="input-box">
                        <input type="text" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <input type="tel" id="phone" name="phone" pattern="(09[0-9]{2}[0-9]{3}[0-9]{4})|(\(0[0-9]{2}\) [0-9]{3}-[0-9]{4})" required />
                        <label>Contact Number</label>
                    </div>
                    <div class="input-box">
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <button typr="submit" class="btn" wire:click='register'>Register</button>
                    <div class="login-register">
                        <p>Already have account?
                            <a href="#" class="login-link">Log In</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
</div>

<script src="{{ url('JS/login.js') }}"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</div>
