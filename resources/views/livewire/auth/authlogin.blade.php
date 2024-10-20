<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <link rel="stylesheet" href="{{ url('CSS/login.css') }}">

    <body>
        <div class="background-overlay"></div>
        <header><img src="{{ url('Picture/lanmar.png') }}" alt="logo" class="bakery-img">
            <nav class="navbar">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{route('product')}}">Product</a>
                <a href="{{route('about')}}">About</a>
                <a href="{{route('contact')}}">Contact</a>
                <span>
                    <a href="{{ route('login') }}">
                        <button class="btnLogin">Log In</button>
                    </a>
                </span>
            </nav>
        </header>
        <div class="wrapper">

            <div class="form-box login">
                <h2>Log In</h2>
                <form action="#">
                    <div class="input-box">
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forget">
                        <label> <input type="checkbox">
                            Remember Me </label>
                        <a href="#">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="login-register">
                        <p>Don't have account?
                            <a href="#" class="register-link">Register</a>
                        </p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <h2>Registration</h2>
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
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forget">
                        <label> <input type="checkbox">
                            I Agree to the terms & condition </label>
                    </div>
                    <button typr="submit" class="btn">Register</button>
                    <div class="login-register">
                        <p>Alread Have Acc?
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
