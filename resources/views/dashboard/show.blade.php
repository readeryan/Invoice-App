<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Dashboard") }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <x-form-section submit="updatePassword">
                    <x-slot name="title">
                        {{ __("Create New Fruit Category") }}
                    </x-slot>

                    <x-slot name="form">
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label
                                for="fruit_category"
                                value="{{ __('New Fruit Category') }}"
                            />
                            <x-jet-input
                                id="fruit_category"
                                type="text"
                                class="mt-1 block w-full"
                                wire:model.defer="state.fruit_category"
                            />
                            <x-jet-input-error
                                for="fruit_category"
                                class="mt-2"
                            />
                        </div>
                    </x-slot>

                    <x-slot name="actions">
                        <x-jet-button>
                            {{ __("Insert") }}
                        </x-jet-button>
                    </x-slot>
                </x-form-section>
            </div>
        </div>
    </div>
</x-app-layout>
