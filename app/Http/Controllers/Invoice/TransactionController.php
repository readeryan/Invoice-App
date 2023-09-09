<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use App\Models\FruitCategory;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create()
    {
        $categories = FruitCategory::all();
        return view("invoice.show")->with(compact("categories"));
    }
}
