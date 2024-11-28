<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    @section('title', 'Book')
    
    <div class="min-h-screen flex items-center justify-center bg-gray-50 p-6">
        <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-md ">
          <!-- Header -->
          <div class="text-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Book Now</h2>
          </div>
          <form action="/submit-booking" method="POST" class="space-y-4 shadow-xl">
            <!-- Name -->
            <div>
              <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
              <input
                type="text"
                id="name"
                name="name"
                class="w-full mt-1 p-3 border border-gray-200 rounded-md bg-gray-50 focus:ring-blue-400 focus:border-blue-400"
                value="{{ $name }}"
                required
              />
            </div>
      
            <!-- Email -->
            <div>
              <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                class="w-full mt-1 p-3 border border-gray-200 rounded-md bg-gray-50 focus:ring-blue-400 focus:border-blue-400"
                value="{{ $email }}"
                required
              />
            </div>
      
            <!-- Date -->
            <div>
              <label for="date" class="block text-sm font-medium text-gray-600">Date</label>
              <input
                type="date"
                id="date"
                name="date"
                class="w-full mt-1 p-3 border border-gray-200 rounded-md bg-gray-50 focus:ring-slate-900"
                required
              />
            </div>
      
            <!-- Time -->
            <div>
              <label for="time" class="block text-sm font-medium text-gray-600">Time</label>
              <input
                type="time"
                id="time"
                name="time"
                class="w-full mt-1 p-3 border border-gray-200 rounded-md bg-gray-50 focus:ring-blue-400 focus:border-blue-400"
                required
              />
            </div>
      
            <!-- Notes -->
            <div>
              <label for="message" class="block text-sm font-medium text-gray-600">Notes</label>
              <textarea
                id="message"
                name="message"
                rows="4"
                class="w-full mt-1 p-3 border border-gray-200 rounded-md bg-gray-50 focus:ring-blue-400 focus:border-blue-400"
                placeholder="Additional information (optional)"
              ></textarea>
            </div>

            <div>
                <label for="design" class="block text-sm font-medium text-gray-600">Cake Design Reference</label>
                <input
                  type="file"
                  id="design"
                  name="design"
                  accept="image/*"
                  class="w-full mt-1 p-3 border border-gray-200 rounded-md bg-gray-50 focus:ring-blue-400 focus:border-blue-400"
                />
                <p class="text-xs text-gray-500 mt-1">Supported formats: JPG, PNG, GIF (Max: 5MB)</p>
              </div>
      
            <!-- Submit Button -->
            <button
              type="submit"
              class="w-full bg-slate-700 text-gray-50 py-3 rounded-md font-medium hover:bg-slate-600 focus:ring-2 focus:ring-blue-400 focus:ring-offset-1"
            >
              Book Now
            </button>
          </form>
        </div>
      </div>
      
      
</div>
