@component('mail::message')
<u>
    <h2 style="color: black; margin-left: 30%">SheBa Web Technology</h2>
</u>
<p style="font-weight: bold; color:black; float: right">Invoice Date: {{ $data->payment_date }}</p>
<p style="font-weight: bold; color:black">Invoice No: {{ $data->invoiceno }}</p>
<br>
<p style="font-weight: bold; color:red; font-size: 1.6rem">Paid</p>
<table style="border: 1px solid black; margin-top:20px; margin-bottom:9px">
    <tr>
        <td width="550">
            <span style="font-weight: bold; color:black">Bill To:</span> {{ $data->username }}
        </td>
    </tr>
</table>
<table style="border: 1px solid black; margin-bottom:20px">
    <tr>
        <td width="350" style="font-weight:bold; color:black">
            Total Payment
        </td>
        <td width="350" style="font-weight:bold; color:black">
            Transaction ID
        </td>
    </tr>
    <tr>
        <td>
            {{ ($data->paying_amount)/100 }}
        </td>
        <td>
            {{ $data->blnc_transection }}
        </td>
    </tr>
</table>

@component('mail::button', ['url' => 'http://localhost/laravel_app/office/invoice/invoice/download/'.$data->invoiceno])
Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
