<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __("Invoice") }}
            </h2>
            <a
                href="{{ route('invoice') }}"
                class="justify-center inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring focus:ring-green-300 disabled:opacity-25 transition"
                >Create New Invoice</a
            >
        </div>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div>
                <div class="md:grid md:gap-6">
                    <h1 name="title">
                        {{ __("All Invoices") }}
                    </h1>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div
                            class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md"
                        >
                            <ul class="flex flex-col gap-2 bg-gray-100">
                                <li class="grid grid-cols-12 border-b-2 p-4">
                                    <h1
                                        class="text-center capitalize col-span-1"
                                    >
                                        {{ __("No.") }}
                                    </h1>
                                    <h1 class="capitalize col-span-4">
                                        {{ __("Customer Name") }}
                                    </h1>
                                    <h1 class="capitaliz col-span-2">
                                        {{ __("Total Transaction") }}
                                    </h1>
                                    <h1
                                        class="text-center capitalize col-span-2"
                                    >
                                        {{ __("Created At") }}
                                    </h1>
                                    <h1
                                        class="col-span-3 text-center capitalize"
                                    >
                                        {{ __("Actions") }}
                                    </h1>
                                </li>
                                @forelse ($invoices as $key => $invoice)
                                <li
                                    class="grid grid-cols-12 p-4 gap-2 bg-gray-100 even:bg-gray-200"
                                >
                                    <h1
                                        class="text-center capitalize col-span-1"
                                    >
                                        {{ $key + 1 }}{{ __(".") }}
                                    </h1>
                                    <h1 class="capitalize col-span-4">
                                        {{ $invoice->customer_name }}
                                    </h1>
                                    <h1 class="capitalize col-span-2">
                                        {{ $invoice->total_transaction }}
                                    </h1>
                                    <h1
                                        class="text-center capitalize col-span-2"
                                    >
                                        {{ $invoice->created_at }}
                                    </h1>
                                    <a
                                        href="{{ route('invoice.print', ['id'=>$invoice->id]) }}"
                                        class="justify-center inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-[0.5rem] sm:text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring focus:ring-green-300 disabled:opacity-25 transition"
                                    >
                                        {{ __("Print") }}
                                    </a>
                                    <a
                                        href="{{ route('invoice.edit', ['id'=>$invoice->id]) }}"
                                        class="justify-center inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-[0.5rem] sm:text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300 disabled:opacity-25 transition"
                                    >
                                        {{ __("Edit") }}
                                    </a>
                                    <a
                                        href="{{ route('invoice.delete', ['id'=>$invoice->id]) }}"
                                        class="justify-center inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-[0.5rem] sm:text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition"
                                    >
                                        {{ __("Delete") }}
                                    </a>
                                </li>
                                @empty
                                <p class="text-center p-4">Empty</p>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
