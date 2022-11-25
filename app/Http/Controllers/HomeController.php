<?php

namespace App\Http\Controllers;

use App\Models\Payment;

class HomeController extends Controller
{
    public function ajax()
    {
        return view('transactions.ajax');
    }

    public function getTransactions()
    {
        $query = Payment::select('payment_id' , 'amount' , 'currency', 'created_at', 'payment_status');
        return datatables($query)->make(true);
    }
}
