<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Mail\ConfirmPayment;
use App\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    //payment
    public function payment(Request $request,$id)
    {
//        $payment = $request->payment;
        $pay = Invoice::where('id',$id)->first();

            return view('stripe',compact('pay'));

    }
    public function stripeCharge(Request $request,$id)
    {
        $data = $request->validate([
            'username' => ['required'],
            'email' => ['required'],
        ]);

        $invoice = Invoice::select('id','total')->where('id',$id)->first();
        $invoiceNo = $invoice->id;
        $amount = $invoice->total;

        // Set your secret key. Remember to switch to your live secret key in production!
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey('sk_test_3YMEwbMESG4wUJMyuWj8rxVF00LgfPi9hS');

        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];

        $charge = \Stripe\Charge::create([
            'amount' => $amount*100,
            'currency' => 'usd',
            'description' => 'SheBa Payment',
            'source' => $token,
        ]);

        $data = new Payment();
        $data['payment_id'] = $charge->payment_method;
        $data['paying_amount'] = $charge->amount;
        $data['blnc_transection'] = $charge->balance_transaction;
        $data['payment_date'] = Carbon::now();
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['invoiceno'] = $invoiceNo;
        $data->save();

        Mail::to($data['email'])->send(new ConfirmPayment($data));

        session()->flash('success', 'Your payment successfully accepted');
        return view('thanks');
    }
}
