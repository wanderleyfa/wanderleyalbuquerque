@extends('layouts.app')


@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Contact</h2>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
                        
                        <input type="hidden" name="_method" value="DELETE">

                        @csrf

                        <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </div>
        </div>
    </div>
<br>
<br>
<br>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $contact->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                {{ $contact->Email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $contact->contact }}
            </div>
        </div>
    </div>
</div>
@endsection
