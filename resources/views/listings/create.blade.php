@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing <a href="/dashboard" class="pull-right btn btn-default btn-sm">Go Back</a></div>
                <div class="panel-body">
                    <form action="{{ route('listings.store') }}" method="post">
                        @csrf
                        <div class="form-group"><input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Company Name"></div>
                        <div class="form-group"><input type="text" class="form-control" value="{{ old('website') }}" name="website" placeholder="Company Website"></div>
                        <div class="form-group"><input type="email" class="form-control" value="{{ old('email') }}" name="email" placeholder="Contact Email"></div>
                        <div class="form-group"><input type="text" class="form-control" value="{{ old('phone') }}" name="phone" placeholder="Contact Phone"></div>
                        <div class="form-group"><input type="text" class="form-control" value="{{ old('address') }}" name="address" placeholder="Business Address"></div>
                        <div class="form-group"><textarea name="bio" cols="30" rows="10" class="form-control" placeholder="About This Business">{{ old('bio') }}</textarea></div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection