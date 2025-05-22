@extends('layouts.app')

@section('title', 'Our Kitchen - All Menu')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-cover bg-center py-12" style="background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1920&q=80');">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-400/50 to-blue-600/50"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-3xl md:text-4xl font-bold mb-4 text-white">Daily Home Catering</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto mb-6 text-white">
                Menu Baru Setiap Hari Bersama Home Catering Rantang Emas</p>
            <a href="#menuSection" class="inline-block bg-white text-blue-600 hover:bg-blue-50 font-bold py-3 px-8 rounded-full transition duration-300">
                Pesan Sekarang
            </a>
        </div>
    </div>

    <!-- Menu Content -->
    <main id="menuSection" class="container mx-auto px-4 py-8">
        <!-- Section Title -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Menu Home Catering</h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto mt-4"></div>
        </div>

        <!-- Menu Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="menuGrid">
            <!-- Menu Item 1 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="breakfast"
                data-popular="5" data-price="25000" data-calories="350" data-new="true">
                <a href="{{ url('/product-detail') }}" class="block">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=800&q=80" alt="Nasi Uduk"
                            class="w-full h-48 object-cover">
                        <span class="absolute top-2 right-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full">NEW</span>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-gray-800">Nasi Uduk</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">TRADISIONAL</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">Nasi gurih khas Betawi dengan telur, ayam goreng, tempe orek, dan sambal.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-orange-500">Rp25.000</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Menu Item 2 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="lunch"
                data-popular="5" data-price="35000" data-calories="500" data-new="false">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1502741338009-cac2772e18bc?auto=format&fit=crop&w=800&q=80"
                        alt="Nasi Padang" class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">BESTSELLER</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Nasi Padang</h3>
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-1 rounded-full">PEDAS</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Nasi putih dengan rendang, ayam pop, sayur nangka, dan sambal ijo.</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">Rp35.000</span>
                        <button class="text-orange-500 hover:text-orange-600 bg-orange-50 hover:bg-orange-100 rounded-full p-2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu Item 3 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="dinner"
                data-popular="4" data-price="32000" data-calories="450" data-new="false">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?auto=format&fit=crop&w=800&q=80"
                        alt="Soto Ayam" class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded-full">FAVORIT</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Soto Ayam</h3>
                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">TRADISIONAL</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Soto ayam bening dengan suwiran ayam, telur, kentang, dan koya.</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">Rp32.000</span>
                        <button class="text-orange-500 hover:text-orange-600 bg-orange-50 hover:bg-orange-100 rounded-full p-2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu Item 4 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="salads"
                data-popular="3" data-price="18000" data-calories="200" data-new="true">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1506089676908-3592f7389d4d?auto=format&fit=crop&w=800&q=80"
                        alt="Gado-Gado" class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full">NEW</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Gado-Gado</h3>
                        <span class="bg-brown-100 text-brown-800 text-xs font-semibold px-2 py-1 rounded-full">VEGETARIAN</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Sayuran rebus, tahu, tempe, telur, dan kerupuk dengan bumbu kacang.</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">Rp18.000</span>
                        <button class="text-orange-500 hover:text-orange-600 bg-orange-50 hover:bg-orange-100 rounded-full p-2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Menu Item 1 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="breakfast"
                data-popular="5" data-price="25000" data-calories="350" data-new="true">
                <a href="{{ url('/product-detail') }}" class="block">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=800&q=80" alt="Nasi Uduk"
                            class="w-full h-48 object-cover">
                        <span class="absolute top-2 right-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full">NEW</span>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-gray-800">Nasi Uduk</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">TRADISIONAL</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">Nasi gurih khas Betawi dengan telur, ayam goreng, tempe orek, dan sambal.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-orange-500">Rp25.000</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Menu Item 2 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="lunch"
                data-popular="5" data-price="35000" data-calories="500" data-new="false">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1502741338009-cac2772e18bc?auto=format&fit=crop&w=800&q=80"
                        alt="Nasi Padang" class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">BESTSELLER</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Nasi Padang</h3>
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-1 rounded-full">PEDAS</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Nasi putih dengan rendang, ayam pop, sayur nangka, dan sambal ijo.</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">Rp35.000</span>
                        <button class="text-orange-500 hover:text-orange-600 bg-orange-50 hover:bg-orange-100 rounded-full p-2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu Item 3 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="dinner"
                data-popular="4" data-price="32000" data-calories="450" data-new="false">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?auto=format&fit=crop&w=800&q=80"
                        alt="Soto Ayam" class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded-full">FAVORIT</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Soto Ayam</h3>
                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">TRADISIONAL</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Soto ayam bening dengan suwiran ayam, telur, kentang, dan koya.</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">Rp32.000</span>
                        <button class="text-orange-500 hover:text-orange-600 bg-orange-50 hover:bg-orange-100 rounded-full p-2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu Item 4 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="salads"
                data-popular="3" data-price="18000" data-calories="200" data-new="true">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1506089676908-3592f7389d4d?auto=format&fit=crop&w=800&q=80"
                        alt="Gado-Gado" class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full">NEW</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Gado-Gado</h3>
                        <span class="bg-brown-100 text-brown-800 text-xs font-semibold px-2 py-1 rounded-full">VEGETARIAN</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Sayuran rebus, tahu, tempe, telur, dan kerupuk dengan bumbu kacang.</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">Rp18.000</span>
                        <button class="text-orange-500 hover:text-orange-600 bg-orange-50 hover:bg-orange-100 rounded-full p-2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FAQ Section -->
    @include('layouts.faq')
@endsection

@push('scripts')
    <script>
        // Filter menu by category
        function filterMenu(category) {
            const menuItems = document.querySelectorAll('.menu-item');
            const tabs = document.querySelectorAll('.category-tab');

            // Update active tab
            tabs.forEach(tab => {
                tab.classList.remove('active');
                if (tab.textContent.toLowerCase().includes(category) ||
                    (category === 'all' && tab.textContent === 'All Items')) {
                    tab.classList.add('active');
                }
            });

            // Show/hide menu items
            menuItems.forEach(item => {
                item.style.display = 'none';

                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                    item.classList.add('animate-fadeIn');
                }
            });
        }

        // Search menu items
        function searchMenu() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const menuItems = document.querySelectorAll('.menu-item');

            menuItems.forEach(item => {
                const title = item.querySelector('h3').textContent.toLowerCase();
                const description = item.querySelector('p').textContent.toLowerCase();

                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Sort menu items
        function sortMenu(criteria) {
            const menuGrid = document.getElementById('menuGrid');
            const menuItems = Array.from(document.querySelectorAll('.menu-item'));

            menuItems.sort((a, b) => {
                switch (criteria) {
                    case 'price-low':
                        return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
                    case 'price-high':
                        return parseFloat(b.dataset.price) - parseFloat(a.dataset.price);
                    case 'calories':
                        return parseFloat(a.dataset.calories) - parseFloat(b.dataset.calories);
                    case 'newest':
                        return b.dataset.new === 'true' ? -1 : 1;
                    case 'popular':
                    default:
                        return parseFloat(b.dataset.popular) - parseFloat(a.dataset.popular);
                }
            });

            // Re-append sorted items
            menuItems.forEach(item => {
                menuGrid.appendChild(item);
                item.classList.add('animate-fadeIn');
            });
        }

        // Initialize with all items showing
        window.onload = function() {
            filterMenu('all');
        };
    </script>
@endpush
