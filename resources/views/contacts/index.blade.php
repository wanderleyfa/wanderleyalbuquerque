@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Contacts</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contacts.create') }}"> Create New Contact</a>

            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Contact</th>
            @auth
            <th width="280px">Action</th>
            @endauth
        </tr>
	    @foreach ($contacts as $contact)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $contact->name }}</td>
	        <td>{{ $contact->email }}</td>
	        <td>{{ $contact->contact }}</td>
	         @auth
            <td>

                <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('contacts.show',$contact->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}">Edit</a>
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

	        </td>
             @endauth
	    </tr>
	    @endforeach
    </table>

    <div >
        {!! $contacts->links() !!}
    </div>
</div>
@endsection