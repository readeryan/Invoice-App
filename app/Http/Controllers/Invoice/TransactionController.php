<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use App\Models\FruitCategory;
use App\Models\FruitItem;
use App\Models\Invoice;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class TransactionController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view("invoice.display")->with(compact("invoices"));
    }
    public function create()
    {
        $categories = FruitCategory::all();
        return view("invoice.show")->with(compact("categories"));
    }
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'customer-name' => 'required|string',
            'category.*' => 'required',
            'qty.*' => 'required',
            'price.*' => 'required',
        ], [
            'error' => 'There was an issue with your submission. Please check the form and try again.'
        ]);
        $invoice = new Invoice();
        $invoice->customer_name =  $request->input("customer-name");
        $total = 0;
        $invoice->save();

        for ($i = 0; $i < count($request->input('category')); $i++) {
            $fruitItemId = $request->input('item')[$i];
            $quantity = $request->input('qty')[$i];
            $price = $request->input('price')[$i];

            // Create a transaction
            $transaction = new Transaction([
                'item_quantity' => $quantity,
                'item_amount' => $quantity * $price,
            ]);

            // Associate the transaction with the invoice
            $invoice->transactions()->save($transaction);

            // Associate the transaction with the fruit item
            $fruitItem = FruitItem::find($fruitItemId);
            $fruitItem->transaction()->save($transaction);

            // Update the total
            $total += $quantity * $price;
        }
        $invoice->total_transaction = $total;
        $invoice->save();

        notify()->success('Invoice Successfully Created ⚡️');

        return redirect()->route("invoice");
    }

    public function edit($id)
    {

        $invoice = Invoice::find($id);

        return view("invoice.edit")->with(compact("invoice"));
    }

    public function update(Request $request, $id)
    {
        $invoice = Invoice::find($id);

        // Update the invoice details
        $invoice->customer_name = $request->input('customer-name');
        $invoice->save();

        // Clear existing transactions associated with the invoice
        $invoice->transactions()->delete();

        // Initialize total amount
        $total = 0;

        // Create new transactions and calculate total
        for ($i = 0; $i < count($request->input('category')); $i++) {
            $fruitItemId = $request->input('item')[$i];
            $quantity = $request->input('qty')[$i];
            $price = $request->input('price')[$i];

            // Create a new transaction
            $transaction = new Transaction([
                'item_quantity' => $quantity,
                'item_amount' => $quantity * $price,
            ]);

            // Associate the transaction with the invoice and the fruit item
            $invoice->transactions()->save($transaction);

            $fruitItem = FruitItem::find($fruitItemId);
            $fruitItem->transaction()->save($transaction);

            // Update the total
            $total += $quantity * $price;
        }
        // Update the invoice's total_transaction amount
        $invoice->total_transaction = $total;

        $invoice->save();

        notify()->success('Invoice Successfully Updated ⚡️');


        return redirect()->route("invoice.display");
    }

    public function delete($id)
    {
        $invoices = Invoice::all();
        $invoice = $invoices->find($id);
        $invoice->delete();

        return redirect()->route("invoice.display");
    }
    public function deleteTransaction($id, $transaction_id)
    {
        $invoice = Invoice::find($id);
        $transaction = Transaction::find($transaction_id);

        // Ensure that the transaction is associated with the given invoice
        if ($transaction->invoice_id !== $invoice->id) {
            abort(404); // Return a 404 Not Found response if the transaction does not belong to the invoice.
        }

        $transaction->delete();

        // Recalculate the total_transaction for the invoice
        $total = $invoice->transactions->sum('item_amount');
        $invoice->total_transaction = $total;
        $invoice->save();

        return redirect()->route("invoice.edit", ['id' => $invoice->id]);
    }

    public function printPdf($id) {
        $invoice = Invoice::find($id);
        
        // return view("layouts.print")->with(compact('invoice'));
        $pdf = PDF::loadView('layouts.print', ['invoice'=>$invoice]);
        return $pdf->download('user-invoice-'.$id.'.pdf');
    }
}
