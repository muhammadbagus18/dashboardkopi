<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <!-- Sidebar -->
                <div class="w-64 bg-gray-100 border-r border-gray-200">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-4">Menu</h3>
                        <ul class="space-y-2">
                            <li>
                                <x-nav-link :href="route('product.index')" :active="request()->routeIs('product.index')">
                                    {{ __('Product') }}
                                </x-nav-link>
                            </li>
                            <li>
                                <x-nav-link :href="route('transaction.index')" :active="request()->routeIs('transaction.index')">
                                    {{ __('Transaction') }}
                                </x-nav-link>
                            </li>
                            <li>
                                <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">
                                    {{ __('Users') }}
                                </x-nav-link>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="flex-1 p-4">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <!-- Products Card -->
                                <div class="bg-white shadow-md rounded-lg p-4">
                                    <h3 class="text-lg font-semibold mb-2">Products</h3>
                                    <p>Manage your products here.</p>
                                    <a href="{{ route('product.index') }}" class="text-blue-500 hover:underline">View Products</a>
                                </div>
                                <!-- Transactions Card -->
                                <div class="bg-white shadow-md rounded-lg p-4">
                                    <h3 class="text-lg font-semibold mb-2">Transactions</h3>
                                    <p>Manage your transactions here.</p>
                                    <a href="{{ route('transaction.index') }}" class="text-blue-500 hover:underline">View Transactions</a>
                                </div>
                                <!-- Users Card -->
                                <div class="bg-white shadow-md rounded-lg p-4">
                                    <h3 class="text-lg font-semibold mb-2">Users</h3>
                                    <p>Manage your users here.</p>
                                    <a href="{{ route('users.index') }}" class="text-blue-500 hover:underline">View Users</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
