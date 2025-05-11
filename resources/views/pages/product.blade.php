@extends('layouts.app')

@section('title', 'Our Kitchen - All Menu')

@section('content')
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-400 to-blue-600 text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Our Delicious Menu</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">Fresh ingredients, authentic flavors, and healthy options
                for every taste</p>
        </div>
    </div>

    <!-- Menu Navigation -->
    <div class="bg-white shadow-sm sticky top-16 z-10">
        <div class="container mx-auto px-4">
            <div class="flex overflow-x-auto py-4 hide-scrollbar">
                <button class="category-tab active px-4 py-2 whitespace-nowrap" onclick="filterMenu('all')">All
                    Items</button>
                <button class="category-tab px-4 py-2 whitespace-nowrap" onclick="filterMenu('breakfast')">Breakfast</button>
                <button class="category-tab px-4 py-2 whitespace-nowrap" onclick="filterMenu('lunch')">Lunch</button>
                <button class="category-tab px-4 py-2 whitespace-nowrap" onclick="filterMenu('dinner')">Dinner</button>
                <button class="category-tab px-4 py-2 whitespace-nowrap" onclick="filterMenu('salads')">Salads</button>
                <button class="category-tab px-4 py-2 whitespace-nowrap"
                    onclick="filterMenu('smoothies')">Smoothies</button>
                <button class="category-tab px-4 py-2 whitespace-nowrap" onclick="filterMenu('desserts')">Desserts</button>
            </div>
        </div>
    </div>

    <!-- Menu Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Search and Filter -->
        <div class="mb-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div class="relative w-full md:w-96">
                    <input type="text" placeholder="Search menu items..."
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent"
                        oninput="searchMenu()" id="searchInput">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-gray-600">Filter:</span>
                    <select
                        class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400"
                        onchange="sortMenu(this.value)">
                        <option value="popular">Most Popular</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="calories">Calories: Low to High</option>
                        <option value="newest">Newest First</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Menu Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="menuGrid">
            <!-- Menu Item 1 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="breakfast"
                data-popular="5" data-price="9.99" data-calories="420" data-new="true">
                <a href="{{ url('/product-detail') }}" class="block">
                    <div class="relative">
                        <img src="{{ asset('images/avocado-toast.jpg') }}" alt="Avocado Toast"
                            class="w-full h-48 object-cover">
                        <span
                            class="absolute top-2 right-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full">NEW</span>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-gray-800">Avocado Toast</h3>
                            <span
                                class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">VEGETARIAN</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">Sourdough bread with smashed avocado, cherry tomatoes, and
                            poached eggs</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-orange-500">$9.99</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Menu Item 2 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="lunch"
                data-popular="4" data-price="12.99" data-calories="480" data-new="false">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Mediterranean Bowl" class="w-full h-48 object-cover">
                    <span
                        class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">BESTSELLER</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Mediterranean Bowl</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded-full">VEGAN</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Quinoa, chickpeas, cucumber, tomatoes, olives, and tahini
                        dressing</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">$12.99</span>
                        <button
                            class="text-orange-500 hover:text-orange-600 bg-orange-50 hover:bg-orange-100 rounded-full p-2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu Item 3 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="dinner"
                data-popular="5" data-price="15.99" data-calories="550" data-new="false">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Grilled Salmon" class="w-full h-48 object-cover">
                    <span
                        class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">SPICY</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Grilled Salmon</h3>
                        <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2 py-1 rounded-full">GLUTEN
                            FREE</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Atlantic salmon with lemon butter sauce, roasted vegetables,
                        and wild rice</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">$15.99</span>
                        <button
                            class="text-orange-500 hover:text-orange-600 bg-orange-50 hover:bg-orange-100 rounded-full p-2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu Item 4 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="salads"
                data-popular="3" data-price="10.49" data-calories="320" data-new="true">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Summer Salad" class="w-full h-48 object-cover">
                    <span
                        class="absolute top-2 right-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full">NEW</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Summer Salad</h3>
                        <span
                            class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">VEGETARIAN</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Mixed greens, strawberries, goat cheese, walnuts, and
                        balsamic vinaigrette</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">$10.49</span>
                        <button
                            class="text-orange-500 hover:text-orange-600 bg-orange-50 hover:bg-orange-100 rounded-full p-2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu Item 5 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="breakfast"
                data-popular="4" data-price="8.99" data-calories="380" data-new="false">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Berry Pancakes" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Berry Pancakes</h3>
                        <span
                            class="bg-pink-100 text-pink-800 text-xs font-semibold px-2 py-1 rounded-full">SEASONAL</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Fluffy buttermilk pancakes with mixed berries and maple syrup
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">$8.99</span>
                        <button
                            class="text-orange-500 hover:text-orange-600 bg-orange-50 hover:bg-orange-100 rounded-full p-2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu Item 6 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="smoothies"
                data-popular="5" data-price="6.99" data-calories="280" data-new="false">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1505576399279-565b52d4ac71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Tropical Smoothie" class="w-full h-48 object-cover">
                    <span
                        class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">BESTSELLER</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Tropical Smoothie</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded-full">VEGAN</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Mango, pineapple, banana, coconut milk, and chia seeds</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">$6.99</span>
                        <button
                            class="text-orange-500 hover:text-orange-600 bg-orange-50 hover:bg-orange-100 rounded-full p-2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu Item 7 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="lunch"
                data-popular="4" data-price="11.99" data-calories="520" data-new="false">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Veggie Burger" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Veggie Burger</h3>
                        <span
                            class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">VEGETARIAN</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">House-made black bean patty with avocado, sprouts, and
                        chipotle mayo</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">$11.99</span>
                        <button
                            class="text-orange-500 hover:text-orange-600 bg-orange-50 hover:bg-orange-100 rounded-full p-2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu Item 8 -->
            <div class="menu-item bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn" data-category="desserts"
                data-popular="3" data-price="7.49" data-calories="410" data-new="true">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Chocolate Avocado Mousse" class="w-full h-48 object-cover">
                    <span
                        class="absolute top-2 right-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full">NEW</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">Chocolate Mousse</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded-full">VEGAN</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Creamy avocado chocolate mousse with raspberry coulis</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-orange-500">$7.49</span>
                        <button
                            class="text-orange-500 hover:text-orange-600 bg-orange-50 hover:bg-orange-100 rounded-full p-2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
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
