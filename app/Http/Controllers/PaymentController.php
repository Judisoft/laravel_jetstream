<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function getPaymentProcessor()
    {
        return view('payment');
    }

    public function postPaymentProcessor(Request $request)
    {   
        $validated = $request->validate([
        'payment_method' => 'required',
        'transaction_id' => 'required|unique:payments',
        'amount' => 'required|min:4'
        ],
        [
            'payment_method.required'=> 'Payment method no selected',
            'transaction_id.required' => 'Transaction ID not provided',
            'transaction_id.unique' => 'This transaction ID has already been used',
            'amount.required' => 'Amount not provided'
        ]);
        
        $payment_info = new Payment;
        $payment_info->user_id = auth()->user()->id;
        $payment_info->payment_method = $request->payment_method;
        $payment_info->amount = $request->amount;
        $payment_info->transaction_id = $request->transaction_id;

        $payment_info->save();

        if($payment_info->id)
        {
            return redirect()->back()->with('success', 'Payment Information has been submitted successfully. Thank you!');
        }

        else{
            return redirect()->back()->with('error', 'Try again, something went wrong');
        }
    }
}
