<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transactions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b border-gray-200">ID</th>
                                <th class="py-2 px-4 border-b border-gray-200">Amount</th>
                                <th class="py-2 px-4 border-b border-gray-200">Description</th>
                                <th class="py-2 px-4 border-b border-gray-200">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $transaction->id }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $transaction->amount }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $transaction->description }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $transaction->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
