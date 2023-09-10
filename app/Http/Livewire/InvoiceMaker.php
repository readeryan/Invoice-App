<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InvoiceMaker extends Component
{
    public $formSections = [];
    public $totalFee;
    public $transactions = null;
    public $customer_name;
    public $action;
    public $title;
    public $invoice;

    protected $listeners = ['updateTotal', 'removeFormSection'];


    public function mount($invoice = null, $action, $title)
    {
        $this->action = $action;
        $this->title = $title;
        if ($invoice && sizeof($invoice->transactions) > 0) {
            $this->invoice = $invoice;
            $this->transactions = $invoice->transactions;
            $this->customer_name = $invoice->customer_name;
            foreach ($this->transactions as $key => $value) {
                $this->formSections[] = $value->item_amount;
            }
            $this->totalFee = array_sum($this->formSections);
        } else {
            $this->formSections[] = "";
        }
    }

    public function addFormSection()
    {
        $this->formSections[] = "";
    }

    public function removeFormSection($index)
    {
        // dd($index);
        $this->updateTotal($index);
        unset($this->formSections[$index]);
        $this->formSections = array_values($this->formSections);
        if ($this->transactions) {
            // dd($this->transactions[$index]->id);
            return redirect()->route("invoice.delete.transaction", ['id' => $this->invoice->id, 'transaction_id' => $this->transactions[$index]->id]);
        }
    }

    public function updateTotal($index, $total = 0)
    {
        $this->formSections[$index] = $total;
        $this->totalFee = array_sum($this->formSections);
    }

    public function render()
    {
        return view('livewire.invoice-maker');
    }
}
