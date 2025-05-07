@extends('layouts.app')

@section('title', 'Home - OurKitchen')

@section('content')

    <!-- Hero Section -->
    <section id="home" class="hero-gradient py-16 md:py-24">
        <div class="container mx-auto px-6 lg:px-16 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Rasakan Makanan Olahan Khas Kami</h1>
                <p class="text-lg text-gray-600 mb-8">Jelajahi cita rasa autentik dari masakan khas kami yang dibuat dengan
                    bahan-bahan segar dan berkualitas tinggi.</p>
                {{-- <div class="flex space-x-4">
                    <button class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition">
                        Shop Collection
                    </button>
                    <button class="border border-blue-600 text-blue-600 px-6 py-3 rounded-full hover:bg-blue-50 transition">
                        Learn More
                    </button>
                </div> --}}
                <div class="mt-8 flex items-center space-x-6">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span class="text-gray-700">Free Shipping</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        <span class="text-gray-700">30-Day Returns</span>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="{{ asset('images/home-cover.jpg') }}" alt="Premium Kitchenware"
                    class="rounded-lg shadow-xl w-full max-w-md">
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    {{-- <section class="py-8 bg-white">
        <div class="container mx-auto px-6 lg:px-16">
            <p class="text-center text-gray-500 mb-6">Trusted by
                professional chefs worldwide</p>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
                <img src="https://via.placeholder.com/120x40?text=Brand+1" alt="Brand 1"
                    class="h-8 opacity-60 hover:opacity-100 transition">
                <img src="https://via.placeholder.com/120x40?text=Brand+2" alt="Brand 2"
                    class="h-8 opacity-60 hover:opacity-100 transition">
                <img src="https://via.placeholder.com/120x40?text=Brand+3" alt="Brand 3"
                    class="h-8 opacity-60 hover:opacity-100 transition">
                <img src="https://via.placeholder.com/120x40?text=Brand+4" alt="Brand 4"
                    class="h-8 opacity-60 hover:opacity-100 transition">
                <img src="https://via.placeholder.com/120x40?text=Brand+5" alt="Brand 5"
                    class="h-8 opacity-60 hover:opacity-100 transition">
            </div>
        </div>
    </section> --}}

    <!-- Featured Products -->
    <section id="products" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Produk Unggulan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Temukan pilihan produk unggulan kami yang akan siap untuk
                    merasakan rasa yang belum pernah ada.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden product-card transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1588515603140-81bd9f7d1db2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            alt="Chef's Knife Set" class="w-full h-64 object-cover">
                        <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                            -20%
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-semibold text-gray-800">Chef's
                                Knife Set</h3>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="text-gray-600">4.8</span>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Professional-grade
                            stainless steel knives</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-500 line-through text-sm">$199.99</span>
                                <span class="text-blue-600 font-bold ml-2">$159.99</span>
                            </div>
                            <button
                                class="add-to-cart bg-blue-100 text-blue-600 p-2 rounded-full hover:bg-blue-200 transition"
                                data-id="1" data-name="Chef's Knife Set" data-price="159.99">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden product-card transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            alt="Non-Stick Cookware Set" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-semibold text-gray-800">Non-Stick
                                Cookware</h3>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="text-gray-600">4.6</span>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">10-piece
                            ceramic coated cookware set</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-blue-600 font-bold">$249.99</span>
                            </div>
                            <button
                                class="add-to-cart bg-blue-100 text-blue-600 p-2 rounded-full hover:bg-blue-200 transition"
                                data-id="2" data-name="Non-Stick Cookware" data-price="249.99">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden product-card transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            alt="Cast Iron Skillet" class="w-full h-64 object-cover">
                        <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                            Best Seller
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-semibold text-gray-800">Cast
                                Iron Skillet</h3>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="text-gray-600">4.9</span>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">12-inch
                            pre-seasoned skillet</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-blue-600 font-bold">$49.99</span>
                            </div>
                            <button
                                class="add-to-cart bg-blue-100 text-blue-600 p-2 rounded-full hover:bg-blue-200 transition"
                                data-id="3" data-name="Cast Iron Skillet" data-price="49.99">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden product-card transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1585238342024-78d80f7c1b9e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            alt="Smart Air Fryer" class="w-full h-64 object-cover">
                        <div class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">
                            New
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-semibold text-gray-800">Smart
                                Air Fryer</h3>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="text-gray-600">4.7</span>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">6.5-quart
                            digital air fryer with app</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-blue-600 font-bold">$129.99</span>
                            </div>
                            <button
                                class="add-to-cart bg-blue-100 text-blue-600 p-2 rounded-full hover:bg-blue-200 transition"
                                data-id="4" data-name="Smart Air Fryer" data-price="129.99">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <button class="border border-blue-600 text-blue-600 px-6 py-3 rounded-full hover:bg-blue-50 transition">
                    View All Products
                </button>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">
                    Pelayanan Usaha Catering Our Kitchen
                </h2>
                <p class="text-gray-500 max-w-2xl mx-auto">
                    Our Kitchen berdiri sejak 2015 dengan visi menghadirkan kuliner berkualitas tinggi, cita rasa autentik,
                    dan layanan prima. Kami didukung tim koki profesional dan staf berpengalaman yang memastikan setiap
                    sajian tiba tepat waktu dan sesuai standar kebersihan.
                </p>
                </br>
                <p class="text-gray-600 max-w-2xl mx-auto mb-4">
                    Usaha Catering Our Kitchen memiliki pelayanan bisnis sebagai berikut:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- 1. Catering Wedding/Acara Pernikahan -->
                <div class="text-center p-6 rounded-lg hover:bg-gray-50 transition">
                    <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-pink-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">
                        Catering Wedding / Pernikahan
                    </h3>
                    <p class="text-gray-600">
                        Layanan prasmanan untuk pernikahan dan acara resmi, dengan menu
                        istimewa yang dapat disesuaikan dengan tema acara Anda.
                    </p>
                </div>

                <!-- 2. Catering Kantor / Instansi -->
                <div class="text-center p-6 rounded-lg hover:bg-gray-50 transition">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-building text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">
                        Catering Kantor / Instansi
                    </h3>
                    <p class="text-gray-600">
                        Menu prasmanan atau nasi kotak untuk rapat, seminar, hingga
                        gathering kantor atau instansi lainnya.
                    </p>
                </div>

                <!-- 3. Catering Perorangan B2C -->
                <div class="text-center p-6 rounded-lg hover:bg-gray-50 transition">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-utensils text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">
                        Catering Perorangan B2C (Menu Hari Ini)
                    </h3>
                    <p class="text-gray-600">
                        Pesan menu harian siap santap, dikemas rapi dan diantar langsung
                        ke rumah atau kantor Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Apa Kata Pelanggan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Berikut ulasan dari beberapa pelanggan yang telah menikmati layanan catering Our Kitchen.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1: Pernikahan -->
                <div class="bg-white p-6 rounded-xl shadow-sm testimonial-card">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6">
                        "Layanan prasmanan untuk pernikahan kami benar‑benar luar biasa. Menu disajikan cantik, rasanya
                        lezat, dan semua tamu merasa puas."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Rina S."
                            class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-semibold text-gray-800">Rina S.</h4>
                            <p class="text-gray-500 text-sm">Pengantin</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2: Kantor/Instansi -->
                <div class="bg-white p-6 rounded-xl shadow-sm testimonial-card">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6">
                        "Catering nasi kotak untuk rapat kantor sangat memuaskan. Pengiriman tepat waktu, porsi pas, dan
                        kualitas makanannya terjaga."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Andi P."
                            class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-semibold text-gray-800">Andi P.</h4>
                            <p class="text-gray-500 text-sm">Manajer HR</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3: Perorangan B2C -->
                <div class="bg-white p-6 rounded-xl shadow-sm testimonial-card">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6">
                        "Menu Hari Ini dari Our Kitchen praktis dan lezat. Pesanan tiba cepat, kemasan rapi, dan rasanya
                        konsisten enak."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/52.jpg" alt="Dewi K."
                            class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-semibold text-gray-800">Dewi K.</h4>
                            <p class="text-gray-500 text-sm">Pelanggan B2C</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
