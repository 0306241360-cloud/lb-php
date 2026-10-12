@extends ('layouts.app')
@section('content')
    <h2>Add Product </h2>
    @if ($errors->any())
        <div class=" alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action ="{{ route('products.store') }}" method ="POST">
        @csrf
        <div class ="mb-3">
            <label>Name </label>
            <input type ="text" name ="name" class ="form-control" required value ="{{ old ('name') }}">
        </div>
        <div class ="mb-3">
            <label>Price </label>
            <input type ="text" name ="price" class ="form-control" required value ="{{ old ('price') }}">
        </div>
        <div class ="mb-3">
            <label>Quantity </label>
            <input type ="text" name ="quantity" class ="form-control" required value ="{{ old ('quantity') }}">
        </div>
        <button type ="submit" class ="btn btn-success">Save</button>

    </form>
@endsection
