<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha384-RFYK5sE5J9ddxzS3LknDyT00H5y/cx6IIcOBM/tlT7p9IFi59VL52Lvnb7/57vEy" crossorigin="anonymous">

    <body class="bg-gradient-to-b from-gray-800 via-gray-700 to-gray-500 text-gray-900 font-sans">

        <!-- Header Section -->
        <header class="flex justify-between items-center p-3 bg-opacity-50 bg-transparent shadow-lg">
            <div class="flex items-center space-x-3">
                <img src="{{ url('Picture/lanmar.png') }}" alt="Lanmar BakeShoppe Logo"
                    class="w-12 h-12 rounded-full shadow-lg">
            </div>
            <nav class="flex items-center space-x-5">
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
                        <img class="h-10 w-10 rounded-full" src="{{ url('Picture/roxas.jpg') }}"
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

        <!-- About Us Section -->
        <section class="text-center">
            <h1 class="text-5xl font-extrabold text-gray-100 tracking-tight">About Us</h1>
            <div class="w-32 h-1 bg-teal-500 mx-auto my-6 rounded"></div>

            <!-- About Content -->
            <div
                class="max-w-5xl mx-auto my-10 bg-gray-500 rounded-lg p-10 shadow-2xl text-gray-800 transform transition duration-500 hover:scale-105 hover:shadow-lg">
                <div class="flex flex-col lg:flex-row items-center lg:space-x-8">
                    <!-- Banner Image -->
                    <div class="flex-shrink-0 mb-6 lg:mb-0">
                        <img src="{{ url('Picture/123.jpg') }}" alt="Lanmar BakeShoppe Banner"
                            class="w-full max-w-md rounded-lg border-4 border-teal-500 shadow-lg">
                    </div>

                    <!-- Text Content -->
                    <div class="text-left">
                        <h2 class="text-4xl font-bold text-gray-100">Lan-Mar BakeShoppe</h2>
                        <p class="text-gray-100 italic mt-4">
                            "Lan" refers to Lani, the first daughter of the bakery owner, while "Mar" stands for
                            Marianne, the second daughter.
                        </p>
                        <p class="text-gray-100 mt-4 leading-relaxed">
                            As our business grows, costs for ingredients, labor, and overhead inevitably increase,
                            affecting profit margins. We continuously review pricing strategies to reflect these changes
                            while ensuring quality and affordability for our loyal customers.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission Statement -->
        <section class="text-center mt-20">
            <h2 class="text-4xl font-semibold text-gray-100">Our Goal</h2>
            <div class="w-32 h-1 bg-teal-500 mx-auto my-6 rounded"></div>
            <p class="max-w-2xl mx-auto mt-4 text-xl text-gray-100 leading-relaxed">
                "Our goal is to build a long-term relationship with our customers based on trust,
                reliability, and mutual success."
            </p>
            
        </section>

        <!-- Founder's Message -->
        <section class="text-center mt-12">
            <h2 class="text-4xl font-semibold text-gray-100">A Message from Our Owner</h2>
            <div class="w-32 h-1 bg-teal-500 mx-auto my-6 rounded"></div>
            <p class="max-w-3xl mx-auto mt-4 text-xl text-gray-100 leading-relaxed">
                "Baking is more than a job for us it's a way to share love and happiness with our community. We put our
                hearts into every loaf, every pastry, and every slice, ensuring that every bite brings you comfort and
                joy."
            <p class="max-w-3xl mx-auto mt-4 text-xl text-gray-100 leading-relaxed text-right"> – Elizabeth Lianko</p>
            </p>
            
        </section>

        <!-- Customer Testimonials Section -->
        <section class="text-center mt-20">
            <h2 class="text-4xl font-semibold text-gray-100">What Our Customers Say</h2>
            <div class="w-32 h-1 bg-teal-500 mx-auto my-6 rounded"></div>
            <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
                <blockquote class="bg-gray-500 p-6 rounded-lg shadow-lg text-gray-100">
                    <p class="italic">"The best bakery in town! The quality of their bread is unmatched, and the service
                        always makes me feel like family."</p>
                    <footer class="mt-4 text-right text-gray-100">— Angelo P.</footer>
                </blockquote>
                <blockquote class="bg-gray-500 p-6 rounded-lg shadow-lg text-gray-100">
                    <p class="italic">"Lanmar BakeShoppe’s pastries are simply divine. The flavors are authentic, and I
                        can tell they use fresh, quality ingredients."</p>
                    <footer class="mt-4 text-right text-gray-100">— Clark G.</footer>
                </blockquote>
            </div>
        </section>

        <!-- Footer -->
        <footer class="mt-12 p-6 text-center text-gray-100 bg-inherit">
            <p>&copy; 2024 Lanmar BakeShoppe. All Rights Reserved.</p>
        </footer>

        <script>
            document.addEventListener('click', (event) => {
                const button = document.getElementById('user-menu-button');
                const dropdown = button.nextElementSibling;

                // Toggle dropdown visibility on button click
                button.addEventListener('click', () => {
                    dropdown.classList.toggle('scale-150');
                    dropdown.classList.toggle('hidden');
                });

                // Close dropdown if clicked outside
                if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                    dropdown.classList.add('hidden');
                    dropdown.classList.remove('scale-150');
                }
            });
        </script>
    </body>
</div>
