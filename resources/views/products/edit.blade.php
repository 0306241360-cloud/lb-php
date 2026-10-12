@extends ('layouts.app')
@section('content')
    <h2>Edit Product </h2>
    
    @if ($errors->any())
        <div class=" alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action ="{{ route('products.update', $product->id) }}" method ="POST">
        @csrf
        @method ('PUT')

            <div class ="mb -3">
                <label>Name </label>
                    <input type ="text" name="name" value ="{{ old('name' , $product->name) }}" class ="form-control">
            </div>

            <div class ="mb -3">
                <label>Price </label>
                    <input type ="text" name="price" value="{{ old('price' , $product->price) }}" class ="form-control">
            </div>
            <div class ="mb -3">
                <label>Quantity </label>
                    <input type ="text" name="quantity" value ="{{ old('quantity' , $product->quantity) }}" class ="form-control">
            </div>
            <button type="submit" class="btn btn-warning">Update </button>
    </form>
@endsection
