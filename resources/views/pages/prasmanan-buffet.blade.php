@extends('layouts.app')

@section('title', 'Our Kitchen - Prasmanan Buffet')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-cover bg-center py-12" style="background-image: url('https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=1920&q=80');">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-400/50 to-blue-600/50"></div>
        <div class="container mx-auto px-6 lg:px-16 text-center relative z-10">
            <h1 class="text-3xl md:text-4xl font-bold mb-4 text-white">Prasmanan Buffet</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto mb-6 text-white">
                Hidangan Lezat untuk Acara Spesial Anda</p>
            <a href="#menuSection" class="inline-block bg-white text-blue-600 hover:bg-blue-50 font-bold py-3 px-8 rounded-full transition duration-300">
                Pesan Sekarang
            </a>
        </div>
    </div>

    <!-- About Section -->
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <!-- Deskripsi -->
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Layanan Prasmanan Buffet Kami</h2>
                    <p class="text-gray-600 mb-4">
                        Kami menyediakan layanan prasmanan buffet untuk berbagai acara seperti pernikahan, ulang tahun, rapat perusahaan, dan acara keluarga. Setiap hidangan kami dibuat dengan bahan-bahan berkualitas tinggi dan dipersiapkan oleh chef profesional.
                    </p>
                    <p class="text-gray-600 mb-4">
                        Layanan kami mencakup setup peralatan, dekorasi meja, dan pelayanan profesional. Kami juga menawarkan berbagai paket menu yang dapat disesuaikan dengan kebutuhan dan budget Anda.
                    </p>
                    <p class="text-gray-600">
                        Dengan pengalaman lebih dari 5 tahun dalam industri catering, kami berkomitmen memberikan pengalaman kuliner terbaik untuk acara spesial Anda.
                    </p>
                </div>
                <!-- Foto -->
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=800&q=80"
                         alt="Prasmanan Buffet"
                         class="rounded-lg shadow-xl w-full h-[400px] object-cover">
                </div>
            </div>
        </div>
    </div>

    <!-- Divider -->
    <div class="container mx-auto px-6 lg:px-16">
        <div class="border-t border-gray-200 my-8"></div>
    </div>

    <!-- Menu Content -->
    <main id="menuSection" class="container mx-auto px-6 lg:px-16 py-8">
        <!-- Section Title -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Paket Prasmanan Buffet</h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto mt-4"></div>
        </div>

        <!-- Menu Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="menuGrid">
            <!-- Menu Item 1 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="basic"
                data-popular="5" data-price="45000" data-calories="350" data-new="true">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=800&q=80" alt="Paket Basic"
                        class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full">POPULAR</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Paket Basic</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Nasi Putih, 2 Lauk Utama, 2 Lauk Pendamping, 2 Sayur, Buah, Minuman</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">Rp45.000/pax</span>
                    </div>
                </div>
            </div>

            <!-- Menu Item 2 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="premium"
                data-popular="4" data-price="65000" data-calories="500" data-new="false">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=800&q=80"
                        alt="Paket Premium" class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">BESTSELLER</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Paket Premium</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Nasi Putih, 3 Lauk Utama, 3 Lauk Pendamping, 3 Sayur, Buah, Dessert, Minuman</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">Rp65.000/pax</span>
                    </div>
                </div>
            </div>

            <!-- Menu Item 3 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="luxury"
                data-popular="3" data-price="85000" data-calories="450" data-new="false">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=800&q=80"
                        alt="Paket Luxury" class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded-full">LUXURY</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Paket Luxury</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Nasi Putih, 4 Lauk Utama, 4 Lauk Pendamping, 4 Sayur, Buah, Dessert, Minuman, Setup Meja</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">Rp85.000/pax</span>
                    </div>
                </div>
            </div>

            <!-- Menu Item 4 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="custom"
                data-popular="2" data-price="100000" data-calories="200" data-new="true">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=800&q=80"
                        alt="Paket Custom" class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full">CUSTOM</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Paket Custom</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Menu sesuai permintaan, Setup Meja Premium, Dekorasi, Pelayanan Profesional</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">Mulai Rp100.000/pax</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Promo Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Promo Spesial</h2>
                <div class="w-24 h-1 bg-blue-500 mx-auto mt-4"></div>
            </div>

            <!-- Promo Banner Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Promo Banner 1 -->
                <div class="relative overflow-hidden rounded-xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=800&q=80"
                         alt="Promo Wedding Package"
                         class="w-full h-[300px] object-cover transform group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 text-white">
                        <span class="bg-red-500 text-white text-sm font-bold px-3 py-1 rounded-full mb-2 inline-block">PROMO</span>
                        <h3 class="text-2xl font-bold mb-2">Paket Pernikahan</h3>
                        <p class="text-sm mb-4">Dapatkan diskon 20% untuk pemesanan minimal 100 pax</p>
                        <a href="#" class="inline-block bg-white text-blue-600 hover:bg-blue-50 font-bold py-2 px-6 rounded-full transition duration-300">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>

                <!-- Promo Banner 2 -->
                <div class="relative overflow-hidden rounded-xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=800&q=80"
                         alt="Promo Corporate Event"
                         class="w-full h-[300px] object-cover transform group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 text-white">
                        <span class="bg-green-500 text-white text-sm font-bold px-3 py-1 rounded-full mb-2 inline-block">SPESIAL</span>
                        <h3 class="text-2xl font-bold mb-2">Paket Corporate Event</h3>
                        <p class="text-sm mb-4">Gratis setup meja untuk pemesanan minimal 50 pax</p>
                        <a href="#" class="inline-block bg-white text-blue-600 hover:bg-blue-50 font-bold py-2 px-6 rounded-full transition duration-300">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>

            <!-- Additional Promo Info -->
            <div class="mt-12 text-center">
                <p class="text-gray-600 mb-4">* Promo berlaku sampai 31 Desember 2024</p>
                <p class="text-gray-600">* Syarat dan ketentuan berlaku</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    @include('layouts.faq')

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

        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('svg');

            // Toggle content
            content.classList.toggle('hidden');

            // Rotate icon
            icon.classList.toggle('rotate-180');
        }
    </script>
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
