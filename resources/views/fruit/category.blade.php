<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Registration Fruit Category") }}
        </h2>
    </x-slot>

    <div>
        <div
            class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 md:flex-row flex-col flex gap-6"
        >
            <div class="w-full">
                <form
                    method="post"
                    action="{{ route('category.store') }}"
                    class="md:grid md:gap-6"
                >
                    @csrf
                    <h1 name="title">
                        {{ __("Create New Fruit Category") }}
                    </h1>

                    <div name="form" class="mt-5 md:mt-0 md:col-span-2">
                        <div
                            class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md"
                        >
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="fruit_category">
                                        {{ __("New Fruit Category") }}
                                    </label>
                                    <input
                                        id="fruit_category"
                                        name="name"
                                        type="text"
                                        class="mt-1 block w-full"
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
                        {{ __("Fruit Category") }}
                    </h1>
                    <div class="mt-5 md:mt-0 md:col-span-2 gap-2 flex flex-col">
                        <ul
                            class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md"
                        >
                            <li
                                class="grid grid-cols-6 gap-2 w-full border-b-2 py-2"
                            >
                                <div
                                    class="item-details grid grid-cols-3 col-span-3"
                                >
                                    <span class="item col-span-2">
                                        {{ __("Name") }}
                                    </span>
                                    <span class="item">
                                        {{ __("Variant") }}
                                    </span>
                                </div>
                                <div
                                    class="actions justify-center flex gap-4 col-span-3"
                                >
                                    <p class="text-center">
                                        {{ __("Actions") }}
                                    </p>
                                </div>
                            </li>
                            @foreach ($categories as $category)
                            <li
                                class="grid grid-cols-6 gap-2 w-full border-b-2 py-2"
                            >
                                <div
                                    class="item-details grid grid-cols-3 col-span-3"
                                >
                                    <span class="item col-span-2">
                                        {{ $category->name }}
                                    </span>
                                    <span class="item ml-4">
                                        {{ $category->item->count() }}
                                    </span>
                                </div>
                                <div
                                    class="actions justify-center flex gap-4 col-span-3"
                                >
                                    <a
                                        class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300 disabled:opacity-25 transition"
                                        href="{{route('category.edit', ['id'=>$category->id])}}"
                                        >edit</a
                                    >
                                    <a
                                        class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition"
                                        href="{{route('category.delete', ['id'=>$category->id])}}"
                                        >delete</a
                                    >
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
