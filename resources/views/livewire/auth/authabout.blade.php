<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <link rel="stylesheet" href="{{ url('CSS/about.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <body>

        <div class="overlay"></div>
        <header>
            <img src="{{ url('Picture/lanmar.png') }}" alt="logo" class="bakery-img">
            <nav class="navbar">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{route('product')}}">Product</a>
                <a href="{{route('about')}}">About</a>
                <a href="{{route('contact')}}">Contact</a>
                <span>
            </nav>
            <img src="{{ url('Picture/profile.png') }}" alt="Profile" class="profile-img">
            <div class="online-dot"></div>
        </header>
        <div class="heading">
            <h1>About Us</h1>
        </div>
        <div class="container">
            <section class="about">
                <div class="about-image">
                    <img src="{{ url('Picture/123.jpg') }}" alt="">
                </div>
                <div class="about-content">
                    <h2>Lanmar BakeShoppe</h2>
                    <p><em><b>"Lan"</b></em> means Lani, the first daughter of owner of bakery and second the one is Marianne, which means <em><b>"Mar"</b></em>.</p>
                    <p>A business that dedicated to provide high-quality breads and cakes, designed to meet the costumer wants and needs.</p>
                       <p> Our goal is to build a long-term relationship based on trust, reliability, and mutual success. </p>
                       <p>In terms of balancing cost and profit margin, the business grows, costs for ingredients, labor, and overhead increase, potentially squeezing profit margins. Therefore, I decided to continuously review pricing strategies to reflect rising costs without alienating customers.</p>
                </div>
            </section>
        </div>
        <footer class="footer" id="contact">
            <div class="second-overlay"></div>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100063785664939" class="fab fa-facebook-f"></a>
                <a href="" class="fab fa-instagram"></a>
                <a href="" class="fab fa-twitter"></a>
            </div>
        </footer>

        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </body>
</div>
