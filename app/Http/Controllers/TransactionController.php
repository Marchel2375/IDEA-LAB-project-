<?php

namespace App\Http\Controllers;

use App\transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\CoveredCodeNotExecutedException;

class TransactionController extends Controller
{

    public function cart(){
        $user=Auth::user();
        return view('transaction.cart',compact('user'));

    }

    public function checkout(){
        $user = Auth::user();
        try{
            if(count($user->products)==0){
                return redirect('transaction/cart')->with('status',"There are no items in the cart");
            }
            $transaction = new transaction;
            $transaction->user_id = $user->id;
            $transaction->date = Carbon::now();
            $transaction->save();

            foreach($user->products as $product) {
                $transaction->products()->attach($product->id,['count'=>$product->pivot->count]);
                $product->stock -= $product->pivot->count;
                $product->save();
            }
            $user->products()->detach();



            return redirect('transaction/list')->with('status',"Insert successfully");
        }
        catch(CoveredCodeNotExecutedException $e){
            return redirect('transaction list')->with('failed',"operation failed");
        }
        
    }

    public function list(){
        $user = Auth::user();
        $transactions= transaction::where('user_id','=',$user->id)->get();
        foreach($transactions as $transaction){
            $sum = 0;
            foreach($transaction->products as $product){
                $sum +=$product->pivot->count * $product->price;
            } 
            $grandtotals[$transaction->id] = $sum;
        }
        return view('transaction.list',compact('transactions','grandtotals'));

    }
}
