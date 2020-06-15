@component('mail::message')
<u>
    <h2 style="color: black; margin-left: 30%">SheBa Web Technology</h2>
</u>
<p style="font-weight: bold; color:black; float: right">Invoice Date: {{ $item->invoice_date }}</p>
<p style="font-weight: bold; color:black">Invoice No: {{ $item->id }}</p>
<table style="border: 1px solid black; margin-top:20px; margin-bottom:9px">
    <tr>
        <td width="550">
            <span style="font-weight: bold; color:black">Bill To:</span> {{ $item->name }}
        </td>
    </tr>
    <tr>
        <td>
            <span style="color:black; font-weight: bold;">Billing company name &amp; address:</span> {{ $item->address }}
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
            <span style="font-weight: bold; color:black;">1.</span> {{ $item->description }}
        </td>
        <td>
            {{ $item->unit }}
        </td>
        <td>
            {{ $item->amount }}
        </td>
    </tr>
    @if ($item->description2 != Null)
    <tr>
        <td>
            <span style="font-weight: bold; color:black;">2.</span> {{ $item->description2 }}
        </td>
        <td>
            {{ $item->unit2 }}
        </td>
        <td>
            {{ $item->amount2 }}
        </td>
    </tr>
    @endif
    @if ($item->description3 != Null)
    <tr>
        <td>
            <span style="font-weight: bold; color:black;">3.</span> {{ $item->description3 }}
        </td>
        <td>
            {{ $item->unit3 }}
        </td>
        <td>
            {{ $item->amount3 }}
        </td>
    </tr>
    @endif
    @if ($item->description4 != Null)
    <tr>
        <td>
            <span style="font-weight: bold; color:black;">4.</span> {{ $item->description4 }}
        </td>
        <td>
            {{ $item->unit4 }}
        </td>
        <td>
            {{ $item->amount4 }}
        </td>
    </tr>
    @endif
    @if ($item->description5 != Null)
    <tr>
        <td>
            <span style="font-weight: bold; color:black;">5.</span> {{ $item->description5 }}
        </td>
        <td>
            {{ $item->unit5 }}
        </td>
        <td>
            {{ $item->amount5 }}
        </td>
    </tr>
    @endif
    @if ($item->description6 != Null)
    <tr>
        <td>
            <span style="font-weight: bold; color:black;">6.</span> {{ $item->description6 }}
        </td>
        <td>
            {{ $item->unit6 }}
        </td>
        <td>
            {{ $item->amount6 }}
        </td>
    </tr>
    @endif
    @if ($item->description7 != Null)
    <tr>
        <td>
            <span style="font-weight: bold; color:black;">7.</span> {{ $item->description7 }}
        </td>
        <td>
            {{ $item->unit7 }}
        </td>
        <td>
            {{ $item->amount7 }}
        </td>
    </tr>
    @endif
    <tr style="border-top: 1px solid black">
        <td style="font-weight:bold; color:black" colspan="2">
            Total
        </td>
        <td style="color:black">
            {{ $item->total }}
        </td>
    </tr>
</table>
<p><span style="font-weight: bold; color:black;">In Words:</span> {{ $item->total_words }}</p>

@component('mail::button', ['url' => 'http://localhost/laravel_app/office/invoice/payment/process/'.$item->id])
Pay Now
@endcomponent

Thanks,<br>
{{ $item->signeture }}
@endcomponent
