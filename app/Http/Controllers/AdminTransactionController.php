<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminTransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::orderByDesc('id')->get();
        $viewData = [
            'transactions'=>$transactions
        ];
        return view('admin.transaction.index');
    }


}
