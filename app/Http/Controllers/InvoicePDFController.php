<?php

namespace App\Http\Controllers;

use App\Invoice;
use App;
use Carbon\Carbon;
use Illuminate\Http\Request;
use NumberToWords\NumberToWords;

class InvoicePDFController extends Controller
{
    public function get_user_data($id){
        $get_data = Invoice::where('id',$id)->first();
        return $get_data;
    }

    public function previewPDF($id){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_into_html($id))->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');
        return $pdf->stream();
    }

    function convert_into_html($id)
    {
        $invoice_data = $this->get_user_data($id);
        $numberToWords = new NumberToWords();
        $numberTransformer = $numberToWords->getNumberTransformer('en');

$output =
        '<div style="width: 85%; margin: auto;">
<div>
<a href="https://shebawebtech.com" style="float:left;"><img src="http://localhost/laravel_app/office/invoice/public/logo/sheba.png" alt="" style="float: left; height: 80px; width: 120px;"></a>
    <h2 style="color: black; float:right; margin-top: 38px">SheBa Web Technology</h2>
</div>'.
'<br><br><br><br><br>
<p style="font-weight: bold; color:black;">Invoice Date: '.Carbon::parse($invoice_data->invoice_date)->format('d/m/Y').'</p>
<p style="font-weight: bold; color:black">Invoice No: '. $invoice_data->id .'</p>
<br>
<table style="border: 1px solid black; margin-top:20px; margin-bottom:9px; width: 100%">
    <tr>
        <td width="550">
            <span style="font-weight: bold; color:black">Bill To:</span> '. $invoice_data->name.'
        </td>
    </tr>
    <tr>
        <td>
            <span style="color:black; font-weight: bold;">Billing company name &amp; address: </span>'.$invoice_data->address.'
        </td>
    </tr>
</table>
<br>
<table style="border: 1px solid black; width: 100%">
    <tr style=" text-align: center">
        <td width="350" style="font-weight:bold; color:black; border-bottom: 1px solid black; border-right: 1px solid black">
        Description
        </td>
        <td width="100" style="font-weight:bold; color:black; border-bottom: 1px solid black; border-right: 1px solid black">
        Unit
    </td>
        <td width="100" style="font-weight:bold; color:black; border-bottom: 1px solid black">
        Amount ($)
        </td>
    </tr>
    <tr>
        <td style="border-right: 1px solid black">
            <span style="text-transform: capitalize">'.$invoice_data->description.'</span>
        </td>
        <td style="text-align: center; border-right: 1px solid black;">'.
        $invoice_data->unit.'
        </td>
        <td style=" text-align: center">'.
        $invoice_data->amount.'
        </td>
    </tr>
    <tr>
        <td style="border-right: 1px solid black">
            <span style="text-transform: capitalize">'.$invoice_data->description2.'</span>
        </td>
        <td style="text-align: center; border-right: 1px solid black;">'.
        $invoice_data->unit2.'
        </td>
        <td style=" text-align: center">'.
        $invoice_data->amount2.'
        </td>
    </tr>
    <tr>
        <td style="border-right: 1px solid black">
            <span style="text-transform: capitalize">'.$invoice_data->description3.'</span>
        </td>
        <td style="text-align: center; border-right: 1px solid black;">'.
        $invoice_data->unit3.'
        </td>
        <td style=" text-align: center">'.
        $invoice_data->amount3.'
        </td>
    </tr>
    <tr>
        <td style="border-right: 1px solid black">
            <span style="text-transform: capitalize">'.$invoice_data->description4.'</span>
        </td>
        <td style="text-align: center; border-right: 1px solid black;">'.
        $invoice_data->unit4.'
        </td>
        <td style=" text-align: center">'.
        $invoice_data->amount4.'
        </td>
    </tr>
    <tr>
        <td style="border-right: 1px solid black">
            <span style="text-transform: capitalize">'.$invoice_data->description5.'</span>
        </td>
        <td style="text-align: center; border-right: 1px solid black;">'.
        $invoice_data->unit5.'
        </td>
        <td style=" text-align: center">'.
        $invoice_data->amount5.'
        </td>
    </tr>
    <tr>
        <td style="border-right: 1px solid black">
            <span style="text-transform: capitalize">'.$invoice_data->description6.'</span>
        </td>
        <td style="text-align: center; border-right: 1px solid black;">'.
        $invoice_data->unit6.'
        </td>
        <td style=" text-align: center">'.
        $invoice_data->amount6.'
        </td>
    </tr>
    <tr>
        <td style="border-right: 1px solid black">
            <span style="text-transform: capitalize">'.$invoice_data->description7.'</span>
        </td>
        <td style="text-align: center; border-right: 1px solid black;">'.
        $invoice_data->unit7.'
        </td>
        <td style=" text-align: center">'.
        $invoice_data->amount7.'
        </td>
    </tr>
    <tr>
    <td colspan="3">

</td>
</tr>
    <tr>
        <td style="font-weight:bold; color:black; text-align: center; border-top: 1px solid black; border-right: 1px solid black" colspan="2">
        Total
        </td>
        <td style="color:black; font-weight: bold; text-align: center; border-top: 1px solid black">
            '. $invoice_data->total.'</td>
    </tr>
</table>
<br>

<p style="font-size: 18px">In Words: <span style="text-transform: capitalize">'. $numberTransformer->toWords($invoice_data->total)  .' Only</p>

<br><br>
<span style="font-size: 20px">
Thanking by,<br><br>
Dr. Moinuddin Sarker <br>
CEO <br>
SheBa Web Technology <br>
Mobile no: +1 203-956-7501
</span>

</div>';

        return $output;
    }
}
