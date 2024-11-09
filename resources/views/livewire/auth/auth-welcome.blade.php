<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <div class="bg-gray-900">
        <header class="absolute inset-x-0 top-0">
          <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-14 w-14 rounded-full" src="{{ url('Picture/lanmar.png') }}" alt="">
              </a>
            </div>
            <div class="flex lg:hidden">
              <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </button>
            </div>
            <div>
              {{-- <a href="{{route('login')}}" class="text-sm/6 font-semibold text-gray-400">Log in <span aria-hidden="true">&rarr;</span></a> --}}
            </div>
          </nav>
        </header>
      
        <div class="relative isolate px-6 pt-14 lg:px-8">
          <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
          <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56 -mt-40">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
              <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-400 ring-1 ring-white hover:ring-gray-900/20">
                Want to know more?<a href="{{route('about')}}" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span> Read more <span aria-hidden="true">&rarr;</span></a>
              </div>
            </div>
            <div class="text-center">
              <h1 class="text-balance text-5xl font-semibold tracking-tight text-white sm:text-7xl">Lan-Mar BakeShoppe</h1>
              <p class="mt-8 text-pretty text-lg font-medium text-gray-400 sm:text-xl/8">A business that dedicated to provide high-quality breads and cakes, designed to meet the costumer wants and needs.</p>
              <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{route('login')}}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
              </div>
            </div>
          </div>
          <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
        </div>
      </div>

      {{--  --}}
      <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:text-center -mt-20">
            <h2 class="text-base/7 font-semibold text-indigo-600">Our Dear Costumer</h2>
            <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl lg:text-balance">Lan-Mar BakeShoppe offers this for you</p>
          </div>
          <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
              <div class="relative pl-16">
                <dt class="text-base/7 font-semibold text-gray-900">
                  <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-200">
                      <!-- Cake Base -->
                      <rect x="5" y="12" width="14" height="6" rx="1" stroke-linecap="round" stroke-linejoin="round" />
                      <!-- Cake Frosting -->
                      <path d="M5 12c1-1 2 1 3-1s2 1 3-1 2 1 3-1 2 1 3-1 2 1 3-1v6H5v-4z" stroke-linecap="round" stroke-linejoin="round" />
                      <!-- Candle -->
                      <line x1="12" y1="8" x2="12" y2="4" stroke-linecap="round" stroke-linejoin="round" />
                      <!-- Candle Flame -->
                      <path d="M12 3.5c0-.5-.2-1-.5-1s-.5.5-.5 1 .2.5.5.5.5-.5.5-.5z" fill="currentColor" />
                      <!-- Customization Sparkles -->
                      <path d="M7 6l1-1 1 1M17 6l1-1 1 1M9 8l.5-.5.5.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>                  
                  </div>
                  Customization Option
                </dt>
                <dd class="mt-2 text-base/7 text-gray-600">Bring your unique ideas to life with our customization options. Whether it's a special flavor, theme, or design, we’re here to create cakes and bread that match your vision, making every order a personal experience.</dd>
              </div>
              <div class="relative pl-16">
                <dt class="text-base/7 font-semibold text-gray-900">
                  <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-200">
                      <!-- Calendar Body -->
                      <rect x="3" y="5" width="18" height="16" rx="2" stroke-linecap="round" stroke-linejoin="round" />
                      <!-- Calendar Header -->
                      <path d="M8 3v2M16 3v2" stroke-linecap="round" stroke-linejoin="round" />
                      <!-- Calendar Divider Line -->
                      <path d="M3 10h18" stroke-linecap="round" />
                      
                      <!-- Ticket Symbol (Indicates Pre-Order) -->
                      <rect x="8" y="13" width="8" height="4" rx="1" stroke-linecap="round" stroke-linejoin="round" />
                      <circle cx="9" cy="15" r="0.5" fill="currentColor" />
                      <circle cx="15" cy="15" r="0.5" fill="currentColor" />
                  </svg>                  
                  </div>
                  Pre-Order for Events
                </dt>
                <dd class="mt-2 text-base/7 text-gray-600">Make your event planning easier by pre-ordering with us. From weddings to corporate events, we ensure your baked goods are fresh, on time, and exactly how you want them, so you can focus on enjoying the moment.</dd>
              </div>
              <div class="relative pl-16">
                <dt class="text-base/7 font-semibold text-gray-900">
                  <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-gray-300">
                        <!-- Top of Bread/Cake -->
                        <path d="M4 10c0-2.21 2.69-4 6-4s6 1.79 6 4v4H4v-4z" stroke-linecap="round" stroke-linejoin="round" />
                        <!-- Bottom of Bread/Cake -->
                        <path d="M4 14h12c0 2.21-2.69 4-6 4s-6-1.79-6-4z" stroke-linecap="round" stroke-linejoin="round" />
                        <!-- Texture Lines -->
                        <path d="M6 10.5h1M9 10.5h1M12 10.5h1" stroke-linecap="round" />
                      </svg>
                  </div>
                  Quality and Taste
                </dt>
                <dd class="mt-2 text-base/7 text-gray-600">We believe quality is key. That’s why we use only premium ingredients to craft delicious, high-quality products. Each bite is designed to be rich in flavor and satisfy every craving.</dd>
              </div>
              <div class="relative pl-16">
                <dt class="text-base/7 font-semibold text-gray-900">
                  <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-200">
                      <!-- Apple Body -->
                      <path d="M12 14c-2 0-4-1.5-4-3.5S10 7 12 7s4 1.5 4 3.5S14 14 12 14z" stroke-linecap="round" stroke-linejoin="round" />
                      <!-- Apple Leaf -->
                      <path d="M11 5.5c-.5-.5-1.5-1-1.5-1s0 1 1 1.5" stroke-linecap="round" stroke-linejoin="round" />
                      <!-- Nutrition Information Rectangle (Represents a Label or Calorie Information) -->
                      <rect x="15" y="12" width="5" height="7" rx="1" stroke-linecap="round" stroke-linejoin="round" />
                      <!-- Calorie Text Placeholder (Cals) -->
                      <text x="16.5" y="16" font-size="2" fill="currentColor">Cals</text>
                  </svg>                    
                  </div>
                  Nutrition & Calorie Information
                </dt>
                <dd class="mt-2 text-base/7 text-gray-600">Your health matters to us. We provide transparent nutrition and calorie information, helping you make choices that suit your lifestyle, without compromising on taste.</dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
</div>
