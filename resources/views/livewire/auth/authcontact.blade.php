<div>
    {{-- Success is as dangerous as failure. --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ url('CSS/contact.css') }}">

    <body>
        <div class="background-overlay"></div>

        <header class="flex justify-between items-center p-3 bg-opacity-50 bg-transparent shadow-lg">
            <div class="flex items-center space-x-3">
                <img src="{{ url('Picture/lanmar.png') }}" alt="Lanmar BakeShoppe Logo"
                    class="w-12 h-12 rounded-full shadow-lg">
            </div>
            <nav class="flex items-center justify-center space-x-5">
                <a href="{{ route('home') }}"
                    class="text-base font-semibold text-white hover:text-gray-900 transition duration-300">Home</a>
                <a href="{{ route('product') }}"
                    class="text-base font-semibold text-white hover:text-gray-900 transition duration-300">Product</a>
                <a href="{{ route('about') }}"
                    class="text-base font-semibold text-white hover:text-gray-900 transition duration-300">About</a>
                <a href="{{ route('contact') }}"
                    class="text-base font-semibold  text-white hover:text-gray-900 transition duration-300">Contact</a>
                <div class="relative ml-3">
                    <button type="button"
                        class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Open user menu</span>
                        <img class="h-10 w-10 rounded-full" src="{{ url('Picture/default.jpg') }}"
                            alt="User Profile Picture">
                    </button>

                    <!-- Profile dropdown -->
                    <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-slate-600 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none transition-all duration-200 ease-out scale-0 group-hover:scale-100"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="{{ route('profile') }}"
                            class="block px-4 py-2 text-lg text-gray-100 hover:bg-gray-900 transition-colors duration-150"
                            role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                        <a href="#"
                            class="block px-4 py-2 text-lg text-gray-100 hover:bg-gray-900 transition-colors duration-150"
                            role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                        <a href="{{ route('login') }}"
                            class="block px-4 py-2 text-lg text-gray-100 hover:bg-gray-900 transition-colors duration-150"
                            role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </div>
                </div>
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
                            <p>+63 93 053 3237</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>angeloarmendi4@gmail.com</p>
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
        </section>

        <div class="footer-overlay"></div>
        <footer class="-mt-20 p-6 text-center text-white z-50">
            <p>&copy; 2024 Lanmar BakeShoppe. All Rights Reserved.</p>
        </footer>

        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </body>
</div>
