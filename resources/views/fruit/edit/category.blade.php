<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Update Fruit Category") }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 flex gap-6">
            <div class="mt-10 sm:mt-0 w-full">
                <form
                    method="post"
                    action="{{ route('category.update', ['id'=>$category->id]) }}"
                    class="md:grid md:gap-6"
                >
                    @csrf
                    <h1 name="title">
                        {{ __("Edit Category") }}
                    </h1>

                    <div name="form" class="mt-5 md:mt-0 md:col-span-2">
                        <div
                            class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md"
                        >
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="fruit_category">
                                        {{ __("Update Fruit Category") }}
                                    </label>
                                    <input
                                        id="fruit_category"
                                        name="name"
                                        type="text"
                                        class="mt-1 block w-full"
                                        value="{{$category->name}}"
                                    />
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md gap-6"
                        >
                            <a
                                href="{{ route('category') }}"
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
