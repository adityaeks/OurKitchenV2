<!-- Mobile Menu -->
<div class="mobile-menu hidden">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold text-gray-800">OurKitchen</h2>
        <button id="close-mobile-menu" class="text-gray-600">
            <i class="fas fa-times text-2xl"></i>
        </button>
    </div>
    <nav class="flex flex-col space-y-4">
        <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 text-lg">Home</a>
        <a href="{{ url('/product1') }}" class="text-gray-700 hover:text-blue-600">Tumpeng & Nasi Liwet</a>
        <a href="{{ url('/product2') }}" class="text-gray-700 hover:text-blue-600">Daily Home Catering</a>
        <a href="{{ url('/product3') }}" class="text-gray-700 hover:text-blue-600">Prasmanan Buffet</a>
        <a href="{{ url('/product4') }}" class="text-gray-700 hover:text-blue-600">Meal Box</a>
        <a href="{{ url('/product5') }}" class="text-gray-700 hover:text-blue-600">Snack Box</a>
    </nav>
    <div class="mt-8">
        <button class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition w-full">
            Shop Now
        </button>
    </div>
</div>

<!-- Header -->
<header class="bg-white shadow-sm sticky top-0 z-40">
    <div class="container mx-auto px-6 lg:px-16 py-4 flex justify-between items-center">
        <div class="flex items-center">
            <button id="mobile-menu-button" class="mr-4 text-gray-600 md:hidden">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <a href="{{ url('/') }}" class="text-2xl font-bold text-gray-800 flex items-center">
                <i class="fas fa-utensils text-blue-600 mr-2"></i>
                OurKitchen
            </a>
        </div>

        <nav class="hidden md:flex space-x-8">
            <a href="{{ url('/product1') }}" class="text-gray-700 hover:text-blue-600">Tumpeng & Nasi Liwet</a>
            <a href="{{ url('/product2') }}" class="text-gray-700 hover:text-blue-600">Daily Home Catering</a>
            <a href="{{ url('/product3') }}" class="text-gray-700 hover:text-blue-600">Prasmanan Buffet</a>
            <a href="{{ url('/product4') }}" class="text-gray-700 hover:text-blue-600">Meal Box</a>
            <a href="{{ url('/product5') }}" class="text-gray-700 hover:text-blue-600">Snack Box</a>
        </nav>

        <div class="flex items-center space-x-4">
            {{-- <button class="text-gray-600 hover:text-blue-600 relative">
                <i class="fas fa-search text-xl"></i>
            </button> --}}
            <button id="cart-button" class="text-gray-600 hover:text-blue-600 relative">
                <i class="fas fa-shopping-cart text-xl"></i>
                <span id="cart-count" class="cart-count hidden">0</span>
            </button>
            <button class="text-gray-600 hover:text-blue-600 relative">
                <i class="fas fa-user text-xl"></i>
            </button>
        </div>
    </div>
</header>
