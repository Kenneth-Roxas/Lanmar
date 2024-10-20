<div>
    {{-- Success is as dangerous as failure. --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ url('CSS/contact.css') }}">

    <body>
        <div class="background-overlay"></div>

        <header><img src="{{ url('Picture/lanmar.png') }}" alt="logo" class="bakery-img">
            <nav class="navbar">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{route('product')}}">Product</a>
                <a href="{{route('about')}}">About</a>
                <a href="{{ route('contact') }}">Contact</a>
                <span>
                    <a href="{{ route('login') }}">
                        <button class="btnLogin">Log In</button>
                    </a>
                </span>
            </nav>
        </header>

        <section class="contact">
            <div class="content">
                <h2>Lanmar Bake Shoppe </h2>
                <p>For Tasty and Quality Breads and Cakes</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Concepcion, Virac, Catanduanes</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+63 970 626 5312</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>roxaskenneth508@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form action="">
                        <h2>Message Us</h2>
                        <div class="inputBox">
                            <input type="text" name="" required>
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="" required>
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="" required>
                            <span>Your Message Here...</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="" value="Send">
                        </div>
                    </form>
                </div>
            </div>
            <footer class="footer" id="contact">
                <div class="second-overlay"></div>
                <div class="share">
                    <a href="https://www.facebook.com/profile.php?id=100063785664939" class="fab fa-facebook-f"></a>
                    <a href="" class="fab fa-instagram"></a>
                    <a href="" class="fab fa-twitter"></a>
                </div>
            </footer>
        </section>

        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </body>
</div>
