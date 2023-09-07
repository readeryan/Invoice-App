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
            <div class="mt-10 sm:mt-0 w-full">
                <form
                    method="post"
                    action="{{ route('item.store') }}"
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
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="item_name">
                                        {{ __("Item Name") }}
                                    </label>
                                    <input
                                        id="item_name"
                                        name="name"
                                        type="text"
                                        class="mt-1 block w-full"
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
                                        pattern="[0-9]+([.][0-9]+)?"
                                        step="any"
                                        title="Enter a valid number with an optional decimal point"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md"
                        >
                            <button
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                            >
                                {{ __("Insert") }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="mt-10 sm:mt-0 w-full">
                <div class="md:grid md:gap-6">
                    <h1 name="title">
                        {{ __("Fruit Item") }}
                    </h1>
                    <div class="mt-5 md:mt-0 md:col-span-2 gap-2 flex flex-col">
                        <ul
                            class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md"
                        >
                            <li
                                class="grid grid-cols-6 gap-2 w-full border-b-2 py-2"
                            >
                                <div
                                    class="item-details grid grid-cols-4 col-span-4"
                                >
                                    <span class="item">
                                        {{ __("Name") }}
                                    </span>
                                    <span class="item">
                                        {{ __("Unit") }}
                                    </span>
                                    <span class="item">
                                        {{ __("Price") }}
                                    </span>
                                    <span class="item">
                                        {{ __("Category") }}
                                    </span>
                                </div>
                                <div class="actions flex gap-4">
                                    <p>{{ __("Actions") }}</p>
                                </div>
                            </li>
                            @forelse ($items as $item)
                            <li
                                class="grid grid-cols-6 gap-2 w-full border-b-2 py-2"
                            >
                                <div
                                    class="item-details grid grid-cols-4 col-span-4"
                                >
                                    <span class="item">
                                        {{ $item->name }}
                                    </span>
                                    <span class="item">
                                        {{ $item->unit }}
                                    </span>
                                    <span class="item">
                                        {{ $item->price }}
                                    </span>
                                    <span class="item">
                                        {{ $item->category->name }}
                                    </span>
                                </div>
                                <div class="actions flex gap-4">
                                    <a
                                        class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300 disabled:opacity-25 transition"
                                        href="{{route('item.edit', ['id'=>$item->id])}}"
                                        >edit</a
                                    >
                                    <a
                                        class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition"
                                        href="{{route('item.delete', ['id'=>$item->id])}}"
                                        >delete</a
                                    >
                                </div>
                            </li>
                            @empty
                            <p>Empty</p>
                            @endforelse
                        </ul>
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
