@extends('account.layouts.default')

@section('account.content')
	<div class="card mb-3">
		<div class="card-body">
    		<form action="{{ route('account.subscription.team.update') }}" method="post">
    			@csrf
    			@method('patch')
    			<div class="form-group">
    				<label for="name">Team name</label>
    				<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $team->name )}}">

    				@error('name')
    				    <span class="invalid-feedback" role="alert">
    				        <strong>{{ $message }}</strong>
    				    </span>
    				@enderror
    			</div>

    			<button type="submit" class="btn btn-outline-primary">Update</button>

    		</form>
    	</div>
    </div>

    <div class="card">
        <div class="card-body">
            @if($team->users->count())
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Memeber name</th>
                            <th>Memeber email</th>
                            <th>Added</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($team->users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->pivot->created_at->toDateString() }}</td>
                                <td>
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('remove-{{ $user->id }}').submit();">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>You've not added any team memeber yet.</p>
            @endif  

            @foreach($team->users as $user)
                <form action="{{ route('account.subscription.team.member.destroy', $user->id) }}" method="post" id="remove-{{ $user->id }}" class="hidden">
                    @csrf
                    @method('delete')
                </form>
            @endforeach
            <br>
            <form action="{{ route('account.subscription.team.member.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Add a memeber by email</label>
                    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email')}}">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-outline-primary">Add memeber</button>

            </form>  
        </div>
    </div>
@endsection