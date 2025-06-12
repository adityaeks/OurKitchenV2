@extends('layouts.app')

@section('title', 'Our Kitchen - Semua Menu')

@section('content')
    <main class="container mx-auto px-6 lg:px-16 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Cart Items -->
            <div class="lg:w-2/3">
                <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-bold text-gray-800">Keranjang Anda (2 barang)</h1>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Lanjut Belanja</a>
                    </div>

                    <!-- Cart Items List -->
                    <div class="divide-y divide-gray-200">
                        <!-- Item 2 -->
                        <div class="py-4 cart-item transition duration-300 rounded-lg hover:bg-gray-50 px-3">
                            <div class="flex flex-col md:flex-row gap-4">
                                <div class="w-full md:w-32 h-32 bg-gray-100 rounded-lg overflow-hidden flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1594035910387-fea47794261f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                        alt="Chef's Knife Set" class="w-full h-full object-cover">
                                </div>

                                <div class="flex-1">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3 class="text-lg font-medium text-gray-800">Set Pisau Chef</h3>
                                            <p class="text-gray-500 text-sm">6 pcs, baja tahan karat Jerman</p>
                                        </div>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                    <div class="mt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                        <div class="flex items-center border border-gray-200 rounded-lg w-fit">
                                            <button
                                                class="quantity-btn px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-l-lg">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <span class="px-4 py-1 text-gray-800 font-medium">1</span>
                                            <button
                                                class="quantity-btn px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-r-lg">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>

                                        <div class="text-right">
                                            <span class="text-lg font-bold text-gray-800">Rp159.999</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="py-4 cart-item transition duration-300 rounded-lg hover:bg-gray-50 px-3">
                            <div class="flex flex-col md:flex-row gap-4">
                                <div class="w-full md:w-32 h-32 bg-gray-100 rounded-lg overflow-hidden flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1596178065887-1198b6148b2b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                        alt="Non-Stick Cookware Set" class="w-full h-full object-cover">
                                </div>

                                <div class="flex-1">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3 class="text-lg font-medium text-gray-800">Set Peralatan Masak Anti Lengket</h3>
                                            <p class="text-gray-500 text-sm">10 pcs, kompatibel induksi</p>
                                        </div>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                    <div class="mt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                        <div class="flex items-center border border-gray-200 rounded-lg w-fit">
                                            <button
                                                class="quantity-btn px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-l-lg">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <span class="px-4 py-1 text-gray-800 font-medium">1</span>
                                            <button
                                                class="quantity-btn px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-r-lg">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>

                                        <div class="text-right">
                                            <span class="text-gray-500 line-through mr-2">Rp349.999</span>
                                            <span class="text-lg font-bold text-gray-800">Rp299.999</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shipping Info -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Informasi Pengiriman</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Depan</label>
                            <input type="text"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Belakang</label>
                            <input type="text"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                            <input type="text"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Kontak yang bisa dihubungi</label>
                            <input type="text"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Kota</label>
                            <input type="text"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Negara</label>
                            <select
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                <option>Amerika Serikat</option>
                                <option>Kanada</option>
                                <option>Inggris</option>
                                <option>Australia</option>
                                <option>Jerman</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Provinsi</label>
                            <input type="text"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Kode Pos</label>
                            <input type="text"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-700">Simpan informasi ini untuk pemesanan berikutnya</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="lg:w-1/3">
                <div class="bg-white rounded-xl shadow-sm p-6 sticky top-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-6">Ringkasan Pesanan</h2>

                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Subtotal</span>
                            <span class="font-medium">Rp759.996</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Ongkir</span>
                            <span class="font-medium">Rp9.999</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Pajak</span>
                            <span class="font-medium">Rp60.800</span>
                        </div>
                        <div class="flex justify-between border-t border-gray-200 pt-4">
                            <span class="text-gray-600">Diskon</span>
                            <span class="text-green-600 font-medium">-Rp50.000</span>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-6 py-4 border-t border-b border-gray-200">
                        <span class="text-lg font-bold text-gray-800">Total</span>
                        <span class="text-2xl font-bold text-gray-800">Rp780.795</span>
                    </div>

                    <!-- Payment Methods -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Metode Pembayaran</label>
                        <div class="space-y-2">
                            <div class="flex items-center p-3 border border-gray-200 rounded-lg">
                                <input type="radio" name="payment" id="credit-card" checked
                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                <label for="credit-card" class="ml-3 flex items-center">
                                    <i class="far fa-credit-card text-gray-600 mr-2"></i>
                                    <span class="text-sm font-medium text-gray-700">Midtrans</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Checkout Button -->
                    <button
                        class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg font-medium hover:bg-blue-700 transition flex items-center justify-center">
                        <i class="fas fa-lock mr-2"></i>
                        Lanjut ke Pembayaran
                    </button>
                </div>
            </div>
        </div>
    </main>
@endsection
