@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <u>
                <h5 style="color: black; margin-left: 25%">SheBa Web Technology</h5>
            </u>
            <p style="font-weight: bold; color:black; float: right">Invoice Date: {{ $invoice->invoice_date }}</p>
            <p style="font-weight: bold; color:black">Invoice No: {{ $invoice->id }}</p>
            <table style="border: 1px solid black; margin-top:20px; margin-bottom:9px">
                <tr>
                    <td width="550">
                        <span style="font-weight: bold; color:black">Bill To:</span> {{ $invoice->name }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="color:black; font-weight: bold;">Billing company name &amp; address:</span> {{ $invoice->address }}
                    </td>
                </tr>
            </table>
            <table style="border: 1px solid black; margin-bottom:20px">
                <tr>
                    <td width="350" style="font-weight:bold; color:black">
                        Description
                    </td>
                    <td width="100" style="font-weight:bold; color:black">
                        Unit Price
                    </td>
                    <td width="100" style="font-weight:bold; color:black">
                        Amount
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="font-weight: bold; color:black;">1.</span> {{ $invoice->description }}
                    </td>
                    <td>
                        {{ $invoice->unit }}
                    </td>
                    <td>
                        {{ $invoice->amount }}
                    </td>
                </tr>
                @if ($invoice->description2 != Null)
                <tr>
                    <td>
                        <span style="font-weight: bold; color:black;">2.</span> {{ $invoice->description2 }}
                    </td>
                    <td>
                        {{ $invoice->unit2 }}
                    </td>
                    <td>
                        {{ $invoice->amount2 }}
                    </td>
                </tr>
                @endif
                @if ($invoice->description3 != Null)
                <tr>
                    <td>
                        <span style="font-weight: bold; color:black;">3.</span> {{ $invoice->description3 }}
                    </td>
                    <td>
                        {{ $invoice->unit3 }}
                    </td>
                    <td>
                        {{ $invoice->amount3 }}
                    </td>
                </tr>
                @endif
                @if ($invoice->description4 != Null)
                <tr>
                    <td>
                        <span style="font-weight: bold; color:black;">4.</span> {{ $invoice->description4 }}
                    </td>
                    <td>
                        {{ $invoice->unit4 }}
                    </td>
                    <td>
                        {{ $invoice->amount4 }}
                    </td>
                </tr>
                @endif
                @if ($invoice->description5 != Null)
                <tr>
                    <td>
                        <span style="font-weight: bold; color:black;">5.</span> {{ $invoice->description5 }}
                    </td>
                    <td>
                        {{ $invoice->unit5 }}
                    </td>
                    <td>
                        {{ $invoice->amount5 }}
                    </td>
                </tr>
                @endif
                @if ($invoice->description6 != Null)
                <tr>
                    <td>
                        <span style="font-weight: bold; color:black;">6.</span> {{ $invoice->description6 }}
                    </td>
                    <td>
                        {{ $invoice->unit6 }}
                    </td>
                    <td>
                        {{ $invoice->amount6 }}
                    </td>
                </tr>
                @endif
                @if ($invoice->description7 != Null)
                <tr>
                    <td>
                        <span style="font-weight: bold; color:black;">7.</span> {{ $invoice->description7 }}
                    </td>
                    <td>
                        {{ $invoice->unit7 }}
                    </td>
                    <td>
                        {{ $invoice->amount7 }}
                    </td>
                </tr>
                @endif
                <tr style="border-top: 1px solid black">
                    <td style="font-weight:bold; color:black" colspan="2">
                        Total
                    </td>
                    <td style="color:black">
                        {{ $invoice->total }}
                    </td>
                </tr>
            </table>
            <p><span style="font-weight: bold; color:black;">In Words:</span> {{ $invoice->total_words }}</p>
            Thanks,<br>
            {{ $invoice->signeture }}
        </div>
    </div>
</div>

@endsection







