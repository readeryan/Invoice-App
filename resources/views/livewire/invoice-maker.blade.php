<form wire:submit="save" class="md:grid md:gap-6">
    <h1 name="title">
        {{ __("Create Invoice") }}
    </h1>
    @csrf
    <div name="form" class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md">
            <div class="grid grid-cols-6 gap-6" id="multi-form-container">
                <div class="col-span-6">
                    <label for="customer_name">
                        {{ __("Customer Name") }}
                    </label>
                    <input
                        required
                        type="text"
                        wire:model="invoice.customer_name"
                        placeholder="cust. name"
                    />
                </div>
                <div class="grid grid-cols-6 col-span-6 gap-4">
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
                </div>
                <div class="grid grid-cols-6 col-span-6 gap-4">
                    <div>
                        <select
                            name="category"
                            class="mt-1 block w-full"
                            required
                            wire:model="selectedCategory"
                        >
                            <option value="">
                                {{ __("Select Category") }}
                            </option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">
                                {{$category->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <select
                            name="item"
                            class="mt-1 block w-full"
                            required
                            wire:model="selectedItem"
                        >
                            <option value="">
                                {{ __("Select Item") }}
                            </option>
                            @foreach ($fruits as $item)
                            <option value="{{$item->id}}">
                                {{$item->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <input
                            readonly
                            class="mt-1 block w-full"
                            value="{{ $itemUnit }}"
                        />
                    </div>
                    <div>
                        <input
                            readonly
                            class="mt-1 block w-full"
                            value="{{ $itemPrice }}"
                        />
                    </div>
                    <div>
                        <input
                            class="mt-1 block w-full"
                            type="text"
                            wire:model="itemQty"
                            placeholder="Qty"
                        />
                    </div>
                    <div>
                        <input
                            readonly
                            class="mt-1 block w-full"
                            value="{{ $itemAmount }}"
                        />
                    </div>
                </div>
            </div>
        </div>
        <div
            class="flex items-center gap-6 justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md"
        >
            <button
                type="button"
                id="add-form-button"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
            >
                {{ __("Add") }}
            </button>
            <button
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
            >
                {{ __("Insert") }}
            </button>
        </div>
    </div>
</form>
