<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __("Invoice") }}
            </h2>
            <a
                href="{{ route('invoice.display') }}"
                class="justify-center inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring focus:ring-green-300 disabled:opacity-25 transition"
                >See All Invoices</a
            >
        </div>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div>
                @livewire('invoice-maker', [ 'invoice'=>$invoice,
                'action'=>route('invoice.update', ['id'=>$invoice->id]),
                'title'=>'Edit Invoice' ])
            </div>
        </div>
    </div>
</x-app-layout>
