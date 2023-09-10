<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Registration Fruit Item") }}
        </h2>
    </x-slot>

    <div>
        <div
            class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 xl:flex-row flex-col flex gap-6"
        >
            <div class="w-full">
                <form
                    method="post"
                    action="{{ route('item.update', ['id'=>$item->id]) }}"
                    class="md:grid md:gap-6"
                >
                    @csrf
                    <h1 name="title">
                        {{ __("Create New Fruit Item") }}
                    </h1>

                    <div name="form" class="mt-5 md:mt-0 md:col-span-2">
                        <div
                            class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md"
                        >
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="item_categories">
                                        {{ __("Item Category") }}
                                    </label>
                                    <select
                                        name="category"
                                        id="item_categories"
                                        class="mt-1 block w-full"
                                        required
                                    >
                                        <option value="" disabled>
                                            {{ __("Select Category") }}
                                        </option>
                                        @foreach ($categories as $category) @if
                                        ($category->name ==
                                        $item->category->name)
                                        <option
                                            selected
                                            value="{{$category->id}}"
                                        >
                                            @else
                                        </option>

                                        <option value="{{$category->id}}">
                                            @endif
                                            {{$category->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="item_name">
                                        {{ __("Item Name") }}
                                    </label>
                                    <input
                                        id="item_name"
                                        name="name"
                                        type="text"
                                        class="mt-1 block w-full"
                                        value="{{$item->name}}"
                                        required
                                    />
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="item_unit">
                                        {{ __("Item Unit(Kg/Pcs/Pack)") }}
                                    </label>
                                    <input
                                        id="item_unit"
                                        name="unit"
                                        type="text"
                                        class="mt-1 block w-full"
                                        value="{{$item->unit}}"
                                        required
                                    />
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="item_price">
                                        {{ __("Item Price") }}
                                    </label>
                                    <input
                                        id="item_price"
                                        name="price"
                                        type="text"
                                        class="mt-1 block w-full"
                                        value="{{$item->price}}"
                                        pattern="[0-9]+([.][0-9]+)?"
                                        step="any"
                                        title="Enter a valid number with an optional decimal point"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md gap-6"
                        >
                            <a
                                href="{{ route('item') }}"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                            >
                                {{ __("Back") }}
                            </a>
                            <button
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                            >
                                {{ __("Update") }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
