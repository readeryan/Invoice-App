<form method="POST" action="{{$action}}" class="md:grid md:gap-6">
    <h1 name="title">
        {{ $title }}
    </h1>
    @csrf
    <div name="form" class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md">
            @if ($errors->any())
                <div class="text-red-500">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
            @if(session('success'))
                <div class="text-green-400">
                    {{ session('success') }}
                </div>
            @endif
            <div class="grid grid-cols-6 gap-6" id="multi-form-container">
                {{-- Customer Name --}}
                <div class="col-span-6">
                    <label for="customer_name">
                        {{ __("Customer Name") }}
                    </label>
                    <input
                        id="customer_name"
                        name="customer-name"
                        wire:model="customer_name"
                        required
                        type="text"                        
                        placeholder="cust. name"
                    />
                </div>
                {{-- Form Label --}}
                <div class="hidden sm:grid grid-cols-1 col-span-1 sm:grid-cols-7 sm:col-span-6 gap-4 items-center">
                    <h1 class="text-center">
                        {{ __("Category") }}
                    </h1>

                    <h1 class="text-center">
                        {{ __("Fruit") }}
                    </h1>

                    <h1 class="text-center">
                        {{ __("Unit") }}
                    </h1>

                    <h1 class="text-center">
                        {{ __("Price") }}
                    </h1>

                    <h1 class="text-center">
                        {{ __("Quantity") }}
                    </h1>

                    <h1 class="text-center">
                        {{ __("Amount") }}
                    </h1>
                    <h1 class="text-center">
                        {{ __("Action") }}
                    </h1>
                </div>

                @foreach ($formSections as $index => $section)
                <div class="grid grid-cols-1 col-span-1 sm:hidden gap-4 items-center">
                    <h1 class="text-center">
                        {{ __("Category") }}
                    </h1>

                    <h1 class="text-center">
                        {{ __("Fruit") }}
                    </h1>

                    <h1 class="text-center">
                        {{ __("Unit") }}
                    </h1>

                    <h1 class="text-center">
                        {{ __("Price") }}
                    </h1>

                    <h1 class="text-center">
                        {{ __("Quantity") }}
                    </h1>

                    <h1 class="text-center">
                        {{ __("Amount") }}
                    </h1>
                    <h1 class="text-center">
                        {{ __("Action") }}
                    </h1>
                </div>
                    @if ($transactions && sizeof($transactions)>$index)
                        <livewire:input-form :index="$index" :transaction="$transactions[$index]" :wire:key="'form-'.$index">
                    @else
                        <livewire:input-form :index="$index" :wire:key="'form-'.$index">
                    @endif
                @endforeach
                <div class="grid grid-cols-6 col-span-6">
                    <h1 class="col-span-5 text-end">{{__('Total:')}}</h1>
                    <h1 class="text-center">{{ $totalFee }}</h1>
                </div>
            </div>
        </div>
        <div
            class="flex items-center gap-6 justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md"
        >
            <button
                type="button"
                id="add-form-button"
                wire:click.prevent="addFormSection"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
            >
                {{ __("Add") }}
            </button>
            <button
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
            >
                {{ __("Save") }}
            </button>
        </div>
    </div>    
</form>

