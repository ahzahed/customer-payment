@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('invoice.add') }}" method="POST">
                @csrf
                {{--  Customer Name, address  --}}
                <div class="row border border-primary p-2 rounded">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Customer Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="Enter Client Name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Customer Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                name="address" placeholder="Enter Client Address">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Customer Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                placeholder="Enter Client Email Address">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{--  Description 1  --}}
                <div class="row border border-primary p-2 rounded mt-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Description 1</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                                placeholder="Add Description" cols="120" rows="2"></textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Unit</label>
                            <input type="text" class="form-control @error('unit') is-invalid @enderror" name="unit"
                                placeholder="Add Unit">
                            @error('unit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Amount ($)</label>
                            <input type="text" class="form-control @error('amount') is-invalid @enderror" name="amount"
                                placeholder="Add Amount">
                            @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{--  Description 2  --}}
                <div class="row border border-primary p-2 rounded mt-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label><span class="text-dark font-weight-bold">Description 2</span> (Optional)</label>
                            <textarea class="form-control @error('description2') is-invalid @enderror" name="description2"
                                placeholder="Add Description" cols="120" rows="2"></textarea>
                            @error('description2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Unit</label>
                            <input type="text" class="form-control @error('unit2') is-invalid @enderror" name="unit2"
                                placeholder="Add Unit">
                            @error('unit2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Amount ($)</label>
                            <input type="text" class="form-control @error('amount2') is-invalid @enderror" name="amount2"
                                placeholder="Add Amount">
                            @error('amount2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{--  Description 3  --}}
                <div class="row border border-primary p-2 rounded mt-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label><span class="text-dark font-weight-bold">Description 3</span> (Optional)</label>
                            <textarea class="form-control @error('description3') is-invalid @enderror" name="description3"
                                placeholder="Add Description" cols="120" rows="2"></textarea>
                            @error('description3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Unit</label>
                            <input type="text" class="form-control @error('unit3') is-invalid @enderror" name="unit3"
                                placeholder="Add Unit">
                            @error('unit3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Amount ($)</label>
                            <input type="text" class="form-control @error('amount3') is-invalid @enderror" name="amount3"
                                placeholder="Add Amount">
                            @error('amount3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{--  Description 4  --}}
                <div class="row border border-primary p-2 rounded mt-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label><span class="text-dark font-weight-bold">Description 4</span> (Optional)</label>
                            <textarea class="form-control @error('description4') is-invalid @enderror" name="description4"
                                placeholder="Add Description" cols="120" rows="2"></textarea>
                            @error('description4')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Unit</label>
                            <input type="text" class="form-control @error('unit4') is-invalid @enderror" name="unit4"
                                placeholder="Add Unit">
                            @error('unit4')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Amount ($)</label>
                            <input type="text" class="form-control @error('amount4') is-invalid @enderror" name="amount4"
                                placeholder="Add Amount">
                            @error('amount4')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{--  Description 5  --}}
                <div class="row border border-primary p-2 rounded mt-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label><span class="text-dark font-weight-bold">Description 5</span> (Optional)</label>
                            <textarea class="form-control @error('description5') is-invalid @enderror" name="description5"
                                placeholder="Add Description" cols="120" rows="2"></textarea>
                            @error('description5')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Unit</label>
                            <input type="text" class="form-control @error('unit5') is-invalid @enderror" name="unit5"
                                placeholder="Add Unit">
                            @error('unit5')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Amount ($)</label>
                            <input type="text" class="form-control @error('amount5') is-invalid @enderror" name="amount5"
                                placeholder="Add Amount">
                            @error('amount5')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{--  Description 6  --}}
                <div class="row border border-primary p-2 rounded mt-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label><span class="text-dark font-weight-bold">Description 6</span> (Optional)</label>
                            <textarea class="form-control @error('description6') is-invalid @enderror" name="description6"
                                placeholder="Add Description" cols="120" rows="2"></textarea>
                            @error('description6')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Unit</label>
                            <input type="text" class="form-control @error('unit6') is-invalid @enderror" name="unit6"
                                placeholder="Add Unit">
                            @error('unit6')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Amount ($)</label>
                            <input type="text" class="form-control @error('amount6') is-invalid @enderror" name="amount6"
                                placeholder="Add Amount">
                            @error('amount6')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{--  Description 7  --}}
                <div class="row border border-primary p-2 rounded mt-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label><span class="text-dark font-weight-bold">Description 7</span> (Optional)</label>
                            <textarea class="form-control @error('description7') is-invalid @enderror" name="description7"
                                placeholder="Add Description" cols="120" rows="2"></textarea>
                            @error('description7')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Unit</label>
                            <input type="text" class="form-control @error('unit7') is-invalid @enderror" name="unit7"
                                placeholder="Add Unit">
                            @error('unit7')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Amount ($)</label>
                            <input type="text" class="form-control @error('amount7') is-invalid @enderror" name="amount7"
                                placeholder="Add Amount">
                            @error('amount7')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{--  Total Amount and Signeture  --}}
                <div class="row border border-primary p-2 rounded mt-2">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Total Amount ($)</label>
                            <input type="text" class="form-control @error('total') is-invalid @enderror" name="total"
                                placeholder="Add Total Amount">
                            @error('total')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Total Amount In Words</label>
                            <input type="text" class="form-control @error('total_words') is-invalid @enderror"
                                name="total_words" placeholder="Add Total Amount In Words">
                            @error('total_words')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Signature</label>
                            <textarea class="form-control @error('signeture') is-invalid @enderror" name="signeture"
                                placeholder="You signeture" rows="2"></textarea>
                            @error('signeture')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="text-center my-3">
                    <button type="submit" class="btn btn-primary w-50 mb-5">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
