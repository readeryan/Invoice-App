<div
    class="grid grid-cols-1 col-span-5 sm:grid-cols-7 sm:col-span-6 gap-4 items-center"
>
    <div>
        <select
            name="category[]"
            class="cursor-pointer mt-1 block w-full"
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
            name="item[]"
            class="cursor-pointer mt-1 block w-full"
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
            name="unit[]"
            readonly
            class="cursor-default mt-1 block w-full"
            value="{{ $itemUnit }}"
        />
    </div>
    <div>
        <input
            name="price[]"
            readonly
            class="cursor-default mt-1 block w-full"
            value="{{ $itemPrice }}"
        />
    </div>
    <div>
        <input
            required
            name="qty[]"
            class="mt-1 block w-full"
            type="number"
            placeholder="Quantity"
            wire:model="itemQty"
            min="1"
        />
    </div>
    <div>
        <input
            name="amount[]"
            readonly
            class="cursor-default mt-1 block w-full"
            value="{{ $itemAmount }}"
        />
    </div>
    <div class="text-center">
        <button
            type="button"
            wire:click.prevent="remove"
            class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition"
        >
            {{ __("Remove") }}
        </button>
    </div>
</div>
