<?php

namespace App\Http\Livewire;

use App\Models\FruitCategory;
use App\Models\FruitItem;
use Livewire\Component;

class InputForm extends Component
{
    public $categories;
    public $fruits;

    public $selectedItem;
    public $selectedCategory;
    public $itemUnit;
    public $itemPrice;

    public $itemQty;
    public $itemAmount;

    public $index;

    public function mount($index, $transaction = null)
    {
        $this->categories = FruitCategory::all();
        $this->fruits = [];
        $this->itemUnit = null;
        $this->itemPrice = null;
        $this->itemAmount = null;
        $this->index = $index;
        if ($transaction) {
            $fruit = FruitItem::find($transaction->fruit_item_id);
            $this->fruits = FruitItem::where("fruit_category_id", $fruit->fruit_category_id)->get();
            $this->itemUnit = $fruit->unit;
            $this->itemPrice = $fruit->price;
            $this->itemAmount = $transaction->item_amount;
            $this->itemQty = $transaction->item_quantity;

            $this->selectedItem = $fruit->id;
            $this->selectedCategory = $fruit->fruit_category_id;
        }
    }

    public function updatedSelectedCategory($value)
    {
        $this->fruits = FruitItem::where("fruit_category_id", $value)->get();
    }
    public function updatedSelectedItem($value)
    {
        $fruit = $this->fruits->find($value);

        $this->itemUnit = $fruit->unit;
        $this->itemPrice = $fruit->price;
        $this->updatedItemQty();
    }
    public function updatedItemQty()
    {
        $this->itemAmount = $this->itemQty * $this->itemPrice;

        // Emit an event to notify the parent component about the total calculation        
        $this->emitUp('updateTotal', $this->index, $this->itemAmount);
    }

    public function remove()
    {
        // Emit an event to notify the parent component to remove this item
        // if ($this->index > 0)
        $this->emitUp('removeFormSection', $this->index);
    }

    public function render()
    {
        return view('livewire.input-form');
    }
}
