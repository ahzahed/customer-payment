@extends('layouts.admin')
@section('title','Invoice')
@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Invoice Table</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Total Invoice
                @forelse($invoice as $invoices)
                <span class="badge badge-secondary">
                {{ $loop->count }}
                @break
            </span>
            @empty
            <span class="badge badge-danger">
                No user today
            </span>
                 @endforelse
            </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <a href="{{ url('/invoice/add') }}" class="btn btn-info mb-2">Send Invoice</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Invoice No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Total Amount</th>
                      <th>View</th>
                      @if (Auth::user()->user_type == '1')
                      <th>Delete</th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($invoice as $invoice)
                    <tr>
                      <td>{{$invoice->id}}</td>
                      <td>{{$invoice->name}}</td>
                      <td>{{$invoice->email}}</td>
                      <td>{{$invoice->total}}</td>
                      <td><a href="{{ URL::to('invoice/view/'.$invoice->id) }}" class="btn btn-primary">View</a></td>
                      @if (Auth::user()->user_type == '1')
                      <td><a href="{{ url('invoice/delete/'.$invoice->id) }}" id="delete" class="btn btn-danger">Delete</a></td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->


{{--        Test payment--}}
{{--        <a href="{{ route('payment.process') }}">Pay Now</a>--}}

@endsection
