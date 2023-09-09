<?php

namespace App\Http\Livewire;

use App\Models\FruitItem;
use App\Models\Invoice;
use App\Models\Transaction;
use Livewire\Component;

class InvoiceMaker extends Component
{
    public $categories;
    public $selectedItem;
    public $selectedCategory;
    public $itemUnit;
    public $itemPrice;

    public $itemQty;
    public $itemAmount;
    public $totalTransaction;
    public $fruits;

    public Invoice $invoice;
    public Transaction $transaction;

    protected $rules = [
        'invoice.customer_name' => 'required|string',
    ];

    public function mount($categories)
    {
        $this->invoice = new Invoice();
        $this->categories = $categories;
        $this->fruits = FruitItem::all();
    }

    public function updatedSelectedCategory($value)
    {
        $this->fruits = FruitItem::where('fruit_category_id', $value)->get();
    }
    public function updatedSelectedItem($value)
    {
        $item = $this->fruits->find($value);
        $this->itemUnit = $item->unit;
        $this->itemPrice = $item->price;
    }
    public function updatedItemQty($value)
    {
        $this->itemAmount = $value * $this->itemPrice;
    }

    public function save()
    {
        $this->validate();


        $fruitItemId = $this->selectedItem;
        $fruitItem = FruitItem::find($fruitItemId);

        $this->transaction = $fruitItem->transaction()->create([
            'item_quantity' => $this->itemQty,
            'item_amount' => $fruitItem->price * $this->itemQty,
        ]);

        $this->invoice->total_transaction = $this->transaction->item_amount;
        $this->invoice->save();

        if ($fruitItem) {
            $this->invoice->transactions()->save($this->transaction);
        }
    }

    public function render()
    {
        return view('livewire.invoice-maker');
    }
}
