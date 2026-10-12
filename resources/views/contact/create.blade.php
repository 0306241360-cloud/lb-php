@extends ('layouts.app')
@section('content')
    <h2>Send contact </h2>
    @if ($errors->any())
        <div class=" alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action ="{{ route('contact.store') }}" method ="POST">
        @csrf
        <div class ="mb-3">
            <label>Name </label>
            <input type ="text" name ="name" class ="form-control" required>
        </div>
        <div class ="mb-3">
            <label>Email </label>
            <input type ="email" name ="email" class ="form-control" required>
        </div>
        <div class ="mb-3">
            <label>Content </label>
            <input type ="text" name ="content" class ="form-control" required>
        </div>
        <button type ="submit" class ="btn btn-success">Save</button>

    </form>
@endsection
