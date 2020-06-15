@extends('layouts.admin')
@section('title','ALL Payment')
@section('content')

<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Payment Table</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Total Payments
                @forelse($paymentView as $paymentViews)
                <span class="badge badge-secondary">
                {{ $loop->count }}
                @break
            </span>
            @empty
            <span class="badge badge-danger">
                No Message Today
            </span>
                 @endforelse
            </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Invoice No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Paying Amount</th>
                      <th>Payment ID</th>
                      <th>Blance Transection</th>
                      <th>Payment Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($paymentView as $paymentView)
                    <tr>
                      <td>{{$paymentView->invoiceno}}</td>
                      <td>{{$paymentView->username}}</td>
                      <td>{{$paymentView->email}}</td>
                      <td>$ {{($paymentView->paying_amount)/100}}</td>
                      <td>{{$paymentView->payment_id}}</td>
                      <td>{{$paymentView->blnc_transection}}</td>
                      <td>{{$paymentView->payment_date}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

@endsection
