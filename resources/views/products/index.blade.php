@extends ('layouts.app')

@section('content')
    <h2>Product List </h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        
    @endif
    <a href ="{{ route('products.create') }}" class ="btn btn-primary mb-3">Add New </a>

    <table class="table table-bordered ">
        <tr>
            <th>ID </th>
            <th>Name </th>
            <th>Price </th>
            <th>Action </th>
        </tr>
        @foreach ($products as $p)
            <tr>
                <td>{{ $p->id }} </td>
                <td>{{ $p->name }} </td>
                <td>{{ number_format($p->price) }} VND </td>
                <td>
                    <a href ="{{ route('products.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('products.destroy', $p->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are u sure')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

    {{ $products->links() }}
@endsection
