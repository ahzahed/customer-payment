@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ url('invoice/update/'.$invoice->id) }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $invoice->id }}">
                <div class="form-group">
                  <label>Icon</label>
                  <input type="text" class="form-control" value="{{ $invoice->icon }}" name="icon" placeholder="Add icon">
                </div>

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" value="{{ $invoice->title }}" name="title" placeholder="Add Title">
                  </div>

                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" value="{{ $invoice->description }}" name="description" placeholder="Add description">
                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection

