@extends('layouts.app')


@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
            </div>
        </div>
    </div>


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


    <form action="{{ route('contacts.store') }}" method="POST">
    	@csrf


         <div class="row">
		    <div class="col-xs-4 col-sm-4 col-md-4">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Name">
		        </div>
		    </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
		        <div class="form-group">
		            <strong>E-Mail:</strong>
		            <input type="text" name="email" class="form-control" placeholder="E-Mail">
		        </div>
		    </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
		        <div class="form-group">
		            <strong>Contact:</strong>
		            <input type="text" name="contact" class="form-control" placeholder="Contact">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>

</div>
@endsection
