@extends('layouts.app')

@section('title', 'Home - OurKitchen')

@section('content')

    <!-- Hero Section -->
    <section id="home" class="hero-gradient py-16 md:py-24">
        <div class="container mx-auto px-6 lg:px-16 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Elevate
                    Your Cooking Experience</h1>
                <p class="text-lg text-gray-600 mb-8">Premium kitchenware
                    designed for home chefs who demand quality, durability,
                    and style in every meal preparation.</p>
                <div class="flex space-x-4">
                    <button class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition">
                        Shop Collection
                    </button>
                    <button class="border border-blue-600 text-blue-600 px-6 py-3 rounded-full hover:bg-blue-50 transition">
                        Learn More
                    </button>
                </div>
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
                <img src="https://images.unsplash.com/photo-1556910638-9a8c8d7a99ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                    alt="Premium Kitchenware" class="rounded-lg shadow-xl w-full max-w-md">
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="py-8 bg-white">
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
    </section>

    <!-- Featured Products -->
    <section id="products" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Featured
                    Products</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Discover our
                    curated selection of premium kitchen essentials that
                    combine functionality with elegant design.</p>
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
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Why Choose
                    OurKitchen</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We're committed
                    to providing the highest quality kitchen products that
                    make cooking enjoyable and efficient.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 rounded-lg hover:bg-gray-50 transition">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Premium
                        Quality</h3>
                    <p class="text-gray-600">All our products are made from
                        high-grade materials that stand the test of time and
                        rigorous daily use.</p>
                </div>

                <div class="text-center p-6 rounded-lg hover:bg-gray-50 transition">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-truck text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Fast
                        Shipping</h3>
                    <p class="text-gray-600">We deliver most orders within
                        2-3 business days with free shipping on all orders
                        over $50.</p>
                </div>

                <div class="text-center p-6 rounded-lg hover:bg-gray-50 transition">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">24/7
                        Support</h3>
                    <p class="text-gray-600">Our customer service team is
                        always ready to help with any questions or concerns
                        you might have.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">What Our
                    Customers Say</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Don't just take
                    our word for it. Here's what our customers have to say
                    about their experience with OurKitchen.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
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
                    <p class="text-gray-700 mb-6">"The chef's knife set is absolutely incredible. The balance and sharpness
                        are perfect, and they've held up beautifully after months of daily use."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah J."
                            class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-semibold text-gray-800">Sarah
                                J.</h4>
                            <p class="text-gray-500 text-sm">Professional
                                Chef</p>
                        </div>
                    </div>
                </div>

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
                    <p class="text-gray-700 mb-6">"I've purchased many kitchen gadgets over the years, but the cast iron
                        skillet from OurKitchen is by far my favorite. It's perfectly seasoned and cooks evenly every time."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael T."
                            class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-semibold text-gray-800">Michael
                                T.</h4>
                            <p class="text-gray-500 text-sm">Home Cook</p>
                        </div>
                    </div>
                </div>

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
                    <p class="text-gray-700 mb-6">"The customer service is outstanding! When I had an issue with my order,
                        they resolved it immediately and went above and beyond to make it right."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Emily R."
                            class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-semibold text-gray-800">Emily
                                R.</h4>
                            <p class="text-gray-500 text-sm">Food
                                Blogger</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-utensils text-2xl text-blue-600 mr-2"></i>
                        <h3 class="text-xl font-bold text-gray-400">Our Kitchen</h3>
                    </div>
                    <p class="text-gray-400 text-sm">Fresh, healthy meals prepared with love and the finest ingredients.</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-400 mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Menu</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">FAQs</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-400 mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2 text-blue-600"></i>
                            <span class="text-sm">123 Food Street, Culinary City</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-2 text-blue-600"></i>
                            <span class="text-sm">(123) 456-7890</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-blue-600"></i>
                            <span class="text-sm">hello@ourkitchen.com</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-400 mb-4">Newsletter</h3>
                    <p class="text-gray-400 text-sm mb-4">Subscribe to get updates on new dishes and special offers.</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email" class="flex-1 px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-blue-500 focus:border-blue-500 text-sm">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-r-lg hover:bg-blue-700 transition text-sm">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2023 Our Kitchen. All rights reserved.</p>
            </div>
        </div>
    </footer>
@endsection
