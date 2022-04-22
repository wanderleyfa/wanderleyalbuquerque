@extends('layouts.app')


@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Contact</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <br>
    <br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('contacts.update',$contact->id) }}" method="POST">
    	@csrf
        @method('PUT')


         <div class="row">
		    <div class="col-xs-4 col-sm-4 col-md-4">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" value="{{ $contact->name }}" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-4 col-sm-4 col-md-4">
		        <div class="form-group">
		            <strong>E-mail:</strong>
		            <input type="text" name="email" value="{{ $contact->email }}" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-4 col-sm-4 col-md-4">
		        <div class="form-group">
		            <strong>Contact:</strong>
		            <input type="text" name="contact" value="{{ $contact->contact }}" class="form-control" placeholder="Contact">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
                <br>

		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>

</div>
@endsection
