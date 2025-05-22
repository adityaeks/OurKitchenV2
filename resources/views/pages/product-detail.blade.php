{{-- filepath: c:\laragon\www\ourktichenv2\resources\views\pages\product-detail.blade.php --}}
@extends('layouts.app')

@section('title', 'Our Kitchen - Product Details')

@section('content')
<main class="container mx-auto px-4 py-8">
    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Product Images -->
        <div class="lg:w-1/2">
            <div class="bg-white rounded-xl shadow-md overflow-hidden mb-4">
                <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                     alt="Our Kitchen Special Dish"
                     class="w-full h-80 md:h-96 object-cover product-image">
            </div>
        </div>

        <!-- Product Info -->
        <div class="lg:w-1/2">
            <div class="bg-white rounded-xl shadow-md p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Mediterranean Veggie Bowl</h2>
                        <p class="text-gray-500">Our Signature Dish</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-gray-600 text-sm">(48 reviews)</span>
                    </div>
                </div>

                <div class="mb-6">
                    <span class="text-3xl font-bold text-blue-500">Rp195.000</span>
                    <span class="ml-2 text-gray-400 line-through">Rp239.000</span>
                    <span class="ml-2 bg-blue-100 text-blue-600 text-sm font-semibold px-2 py-1 rounded">20% OFF</span>
                </div>

                <p class="text-gray-700 mb-6">
                    A vibrant bowl packed with fresh vegetables, quinoa, chickpeas, feta cheese, and our signature lemon-tahini dressing. Perfect for a healthy and satisfying meal any time of day.
                </p>

                <div class="flex items-center mb-6">
                    <div class="flex items-center border border-gray-300 rounded-md mr-4">
                        <button class="px-3 py-1 text-gray-600 hover:bg-gray-100" onclick="updateQuantity(-1)">-</button>
                        <span id="quantity" class="px-4 py-1 text-gray-800">1</span>
                        <button class="px-3 py-1 text-gray-600 hover:bg-gray-100" onclick="updateQuantity(1)">+</button>
                    </div>
                    <button class="add-to-cart-btn bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-md font-medium flex items-center">
                        <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                    </button>
                </div>

                <div class="border-t border-gray-200 pt-4">
                    <div class="flex items-center text-gray-600 mt-2">
                        <i class="fas fa-clock mr-2 text-blue-500"></i>
                        <span>Ready in 15-20 minutes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Tabs -->
    <div class="mt-12 bg-white rounded-xl shadow-md overflow-hidden">
        <div class="border-b border-gray-200">
            <nav class="flex -mb-px">
                <button onclick="openTab(event, 'description')" class="tab-button py-4 px-6 text-center border-b-2 font-medium text-sm border-blue-500 text-blue-600">
                    Description
                </button>
            </nav>
        </div>
        <div class="p-6">
            <div id="description" class="tab-content active">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">About This Dish</h3>
                <p class="text-gray-700 mb-4">
                    Our Mediterranean Veggie Bowl is a celebration of fresh, wholesome ingredients inspired by the sunny flavors of the Mediterranean. Each component is carefully selected to create a balanced, nutritious, and delicious meal.
                </p>
                <p class="text-gray-700 mb-4">
                    The base of organic quinoa provides complete protein and fiber, while the rainbow of vegetables delivers essential vitamins and antioxidants. The creamy feta cheese adds a tangy richness, and the lemon-tahini dressing brings everything together with its bright, nutty flavor.
                </p>
                <ul class="list-disc pl-5 text-gray-700 space-y-2">
                    <li>100% plant-based (can be made vegan upon request)</li>
                    <li>Gluten-free and dairy-free options available</li>
                    <li>Packed with 22g of protein per serving</li>
                    <li>Prepared fresh daily with locally-sourced ingredients</li>
                </ul>
            </div>

            <div id="nutrition" class="tab-content">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Nutritional Information</h3>
                <div class="mb-6">
                    <div class="flex justify-between mb-1">
                        <span class="text-gray-700">Calories</span>
                        <span class="font-medium">480 kcal</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-500 h-2 rounded-full" style="width: 60%"></div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-medium text-gray-800 mb-3">Macronutrients</h4>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700">Protein</span>
                                    <span class="font-medium">22g</span>
                                </div>
                                <div class="nutrition-bar bg-blue-400" style="width: 80%"></div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700">Carbohydrates</span>
                                    <span class="font-medium">56g</span>
                                </div>
                                <div class="nutrition-bar bg-green-400" style="width: 70%"></div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-700">Fats</span>
                                    <span class="font-medium">18g</span>
                                </div>
                                <div class="nutrition-bar bg-yellow-400" style="width: 50%"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-800 mb-3">Micronutrients</h4>
                        <div class="grid grid-cols-2 gap-3">
                            <div class="bg-gray-50 p-3 rounded-lg">
                                <div class="text-blue-500 mb-1">
                                    <i class="fas fa-carrot"></i>
                                </div>
                                <div class="text-sm text-gray-700">Vitamin A 120%</div>
                            </div>
                            <div class="bg-gray-50 p-3 rounded-lg">
                                <div class="text-blue-500 mb-1">
                                    <i class="fas fa-lemon"></i>
                                </div>
                                <div class="text-sm text-gray-700">Vitamin C 90%</div>
                            </div>
                            <div class="bg-gray-50 p-3 rounded-lg">
                                <div class="text-blue-500 mb-1">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                <div class="text-sm text-gray-700">Fiber 14g</div>
                            </div>
                            <div class="bg-gray-50 p-3 rounded-lg">
                                <div class="text-blue-500 mb-1">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div class="text-sm text-gray-700">Iron 25%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="reviews" class="tab-content">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Customer Reviews</h3>
                <div class="flex items-center mb-6">
                    <div class="mr-4">
                        <div class="flex items-center">
                            <div class="flex text-yellow-400 mr-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-800 font-medium">4.7</span>
                        </div>
                        <div class="text-gray-500 text-sm">Based on 48 reviews</div>
                    </div>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium">
                        Write a Review
                    </button>
                </div>

                <div class="space-y-6">
                    <div class="border-b border-gray-100 pb-6">
                        <div class="flex justify-between mb-2">
                            <div class="font-medium text-gray-800">Sarah J.</div>
                            <div class="text-gray-500 text-sm">2 days ago</div>
                        </div>
                        <div class="flex text-yellow-400 mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-700">
                            Absolutely delicious! The flavors are so fresh and vibrant. I added grilled chicken which made it even more satisfying. Will definitely order again!
                        </p>
                    </div>

                    <div class="border-b border-gray-100 pb-6">
                        <div class="flex justify-between mb-2">
                            <div class="font-medium text-gray-800">Michael T.</div>
                            <div class="text-gray-500 text-sm">1 week ago</div>
                        </div>
                        <div class="flex text-yellow-400 mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-700">
                            My go-to lunch option! The portion size is perfect and it keeps me full all afternoon. Love that it's healthy but doesn't sacrifice on taste.
                        </p>
                    </div>

                    <div class="pb-2">
                        <div class="flex justify-between mb-2">
                            <div class="font-medium text-gray-800">Emma L.</div>
                            <div class="text-gray-500 text-sm">2 weeks ago</div>
                        </div>
                        <div class="flex text-yellow-400 mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="text-gray-700">
                            Really enjoyed this bowl
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <div class="mt-12">
        <h3 class="text-xl font-bold text-gray-800 mb-6">You Might Also Like</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Product 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                         alt="Harvest Bowl"
                         class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded-full">NEW</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-gray-800 mb-1">Harvest Bowl</h4>
                    <p class="text-gray-600 text-sm mb-2">Seasonal vegetables with farro</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-blue-500">Rp165.000</span>
                        <button class="text-blue-500 hover:text-blue-600">
                            <i class="fas fa-plus-circle text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                     alt="Greek Salad"
                     class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="font-semibold text-gray-800 mb-1">Greek Salad</h4>
                    <p class="text-gray-600 text-sm mb-2">Classic with our twist</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-blue-500">Rp142.000</span>
                        <button class="text-blue-500 hover:text-blue-600">
                            <i class="fas fa-plus-circle text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                         alt="Protein Power Bowl"
                         class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">BESTSELLER</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-gray-800 mb-1">Protein Power Bowl</h4>
                    <p class="text-gray-600 text-sm mb-2">Chicken, quinoa & veggies</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-blue-500">Rp209.000</span>
                        <button class="text-blue-500 hover:text-blue-600">
                            <i class="fas fa-plus-circle text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="https://images.unsplash.com/photo-1543357480-d60d5837bad6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                     alt="Avocado Toast Combo"
                     class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="font-semibold text-gray-800 mb-1">Avocado Toast Combo</h4>
                    <p class="text-gray-600 text-sm mb-2">With poached eggs</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-blue-500">Rp172.000</span>
                        <button class="text-blue-500 hover:text-blue-600">
                            <i class="fas fa-plus-circle text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
