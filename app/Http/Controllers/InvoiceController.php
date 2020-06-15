<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Mail\InvoiceMail;
use App\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class InvoiceController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
            $invoice = Invoice::all();
            return view('invoice.invoice',compact('invoice'));
    }
    public function invoiceAdd(){
            return view('invoice.invoice_add');
    }
    public function invoiceStore(Request $request){
            $post = $request->validate([
                'name' => ['required'],
                'address' => ['required', 'min:5', 'max:60'],
                'email' => ['required'],
                'description' => ['required'],
                'unit' => ['required', 'numeric'],
                'amount' => ['required', 'numeric'],
                'total' => ['required', 'numeric'],
                'total_words' => ['required'],
                'signeture' => ['required'],
            ]);
            $post = new Invoice();
            $post->invoice_date = Carbon::now();
            $post->name = $request->name;
            $post->address = $request->address;
            $post->email = $request->email;
            $post->description = $request->description;
            $post->unit = $request->unit;
            $post->amount = $request->amount;

            $post->description2 = $request->description2;
            $post->unit2 = $request->unit2;
            $post->amount2 = $request->amount2;

            $post->description3 = $request->description3;
            $post->unit3 = $request->unit3;
            $post->amount3 = $request->amount3;

            $post->description4 = $request->description4;
            $post->unit4 = $request->unit4;
            $post->amount4 = $request->amount4;

            $post->description5 = $request->description5;
            $post->unit5 = $request->unit5;
            $post->amount5 = $request->amount5;

            $post->description6 = $request->description6;
            $post->unit6 = $request->unit6;
            $post->amount6 = $request->amount6;

            $post->description7 = $request->description7;
            $post->unit7 = $request->unit7;
            $post->amount7 = $request->amount7;

            $post->total = $request->total;
            $post->total_words = $request->total_words;
            $post->signeture = $request->signeture;
            $post->save();
            Mail::to($post['email'])->send(new InvoiceMail($post));
            session()->flash('success','Successsfully invoice added');
            return Redirect()->route('invoice');

    }
    public function invoiceDelete($id){

            $invoice = Invoice::where('id',$id)->delete();
            session()->flash('danger','Successsfully invoice deleted');
            return back();

    }
    public function invoiceEdit($id){

            $invoice = Invoice::findorfail($id);
            return view('invoice.invoice_edit',compact('invoice'));

    }
    public function invoiceView($id){

            $invoice = Invoice::findorfail($id);
            return view('invoice.invoice_show',compact('invoice'));

    }
    public function invoiceUpdate(Request $request,$id){

            $post = Invoice::findorfail($id);
            $post->icon = $request->icon;
            $post->title = $request->title;
            $post->description = $request->description;
            $post->save();
            session()->flash('success','Successsfully invoice edited');
            return Redirect()->route('invoice');
    }

    public function paymentView(){
        $paymentView = Payment::all();
        return view('payment_view',compact('paymentView'));
    }
}
