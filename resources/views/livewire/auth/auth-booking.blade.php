<div>
    @section('title', 'Book')

    <div class="min-h-screen flex items-center justify-center bg-gray-900 p-6">
        <div class="bg-gray-800 shadow-lg rounded-lg p-6 w-full max-w-lg">
            <!-- Header -->
            <div class="text-center mb-6">
                <h2 class="text-xl font-semibold text-gray-100">Book Now</h2>
            </div>

            @if ($product)
                <!-- Compact Product Details -->
                <div class="mb-6 flex items-center gap-4 text-left">
                    <img src="{{ asset('storage/' . $product->image_product) }}" alt="{{ $product->product_name }}"
                        class="w-16 h-16 object-cover rounded-md border border-gray-700 shadow-sm">
                    <div>
                        <h3 class="text-base font-medium text-gray-100">{{ $product->product_name }}</h3>
                        <p class="text-sm text-gray-400 mt-1">₱{{ $product->price }}</p>
                    </div>
                </div>
                @endif



                <form wire:submit.prevent="book" class="space-y-4">
                    @csrf
                    @if (session()->has('success') || session()->has('error'))
                        <div class="relative mb-4 p-4 rounded-lg shadow-md
                    {{ session()->has('success') ? 'bg-green-100 border-l-4 border-green-500' : '' }}
                    {{ session()->has('error') ? 'bg-red-100 border-l-4 border-red-500' : '' }}"
                            role="alert">

                            <p
                                class="text-sm font-medium
                        {{ session()->has('success') ? 'text-green-800' : '' }}
                        {{ session()->has('error') ? 'text-red-800' : '' }}">
                                {{ session('success') ?? session('error') }}
                            </p>

                            <button type="button"
                                class="absolute top-1 right-2 text-gray-600 hover:text-gray-800 focus:outline-none"
                                onclick="this.parentElement.remove();">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    @endif
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-400">Name</label>
                        <input type="text" id="name" wire:model="name"
                            class="w-full mt-1 p-2 border border-gray-700 rounded bg-gray-700 text-gray-200 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $name }}" placeholder="Your full name" required />
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-400">Email</label>
                        <input type="email" id="email" wire:model="email"
                            class="w-full mt-1 p-2 border border-gray-700 rounded bg-gray-700 text-gray-200 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $email }}" placeholder="Your email address" required />
                    </div>

                    <!-- Date -->
                    <div>
                        <label for="date" class="block text-sm font-medium text-gray-400">Date</label>
                        <input type="date" id="date" wire:model="date"
                            class="w-full mt-1 p-2 border border-gray-700 rounded bg-gray-700 text-gray-200 focus:ring-blue-500 focus:border-blue-500"
                            required />
                    </div>

                    <!-- Time -->
                    <div>
                        <label for="time" class="block text-sm font-medium text-gray-400">Time</label>
                        <input type="time" id="time" wire:model="time"
                            class="w-full mt-1 p-2 border border-gray-700 rounded bg-gray-700 text-gray-200 focus:ring-blue-500 focus:border-blue-500"
                            required />
                    </div>

                    <!-- Notes -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-400">Notes</label>
                        <textarea id="message" wire:model="message" rows="3"
                            class="w-full mt-1 p-2 border border-gray-700 rounded bg-gray-700 text-gray-200 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Additional details (optional)"></textarea>
                    </div>

                    <!-- Cake Design Reference -->
                    <div>
                        <label for="design" class="block text-sm font-medium text-gray-400">Cake Design
                            Reference</label>
                        <input type="file" id="design" wire:model="design" accept="image/*"
                            class="w-full mt-1 p-2 border border-gray-700 rounded bg-gray-700 text-gray-200 focus:ring-blue-500 focus:border-blue-500" />
                        <p class="text-xs text-gray-500 mt-1">Supported formats: JPG, PNG, GIF (Max: 5MB)</p>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" wire:click.prevent="book"
                        class="w-full bg-blue-500 text-gray-100 py-2 rounded font-medium hover:bg-blue-600 focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 focus:ring-offset-gray-800">
                        Book Now
                    </button>
                </form>
        </div>
    </div>
</div>
