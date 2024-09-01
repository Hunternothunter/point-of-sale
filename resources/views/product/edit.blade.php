<x-app-layout>
    Edit
    <p>
        Name: {{ $product->product_name }}
    </p>
    <p>
        ID: {{ $product->id }}
    </p>
    <p>Stock: {{ $product->stock }}</p>
    <p>Category: {{ $product->category ? $product->category : 'null'}}</p>
    <p>
        Description: {{ $product->description ? $product->description : 'null'}}
    </p>

    <h1>Edited by: </h1> <p>{{ Auth::user()->firstname }}</p>

    <a href="{{ route('product.index') }}" class="btn btn-outline-primary">Cancel</a>
</x-app-layout>
