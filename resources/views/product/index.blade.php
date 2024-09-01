<x-app-layout>
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Products</h1>

        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6 col-xl-4 mb-2 mb-md-0">
                        <div class="input-group input-group-search">
                            <input type="text" class="form-control" id="datatables-products-search"
                                placeholder="Search products…">
                            <button class="btn" type="button">
                                <i class="align-middle" data-lucide="search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-8">
                        <div class="text-sm-end">
                            <button type="button" class="btn btn-light btn-lg me-2"><i data-lucide="download"></i>
                                Export</button>
                            <a href="{{ route('product.create') }}" type="button" class="btn btn-primary btn-lg"><i data-lucide="plus"></i> New
                                Product</a>
                        </div>
                    </div>
                </div>
                <table id="datatables-products" class="table w-100">
                    <thead>
                        <tr>
                            <th class="align-middle">
                                <div class="form-check fs-4">
                                    <input class="form-check-input" type="checkbox" id="datatables-products-check-all">
                                    <label class="form-check-label" for="datatables-products-check-all"></label>
                                </div>
                            </th>
                            <th class="align-middle">Item Name</th>
                            <th class="align-middle">Price</th>
                            <th class="align-middle">Stock</th>
                            <th class="align-middle">Category</th>
                            <th class="align-middle" class="align-middle">Rating</th>
                            <th class="align-middle text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <div class="form-check fs-4">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label"></label>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <div
                                        class="p-2 rounded bg-body-tertiary d-flex justify-content-center align-items-center me-2 w-50px h-50px">
                                        <img src="img/products/product-9.png" class="mw-100 mh-100"
                                            alt="Apple iPad Pro">
                                    </div>
                                    <p class="mb-0">
                                        <strong>{{ $product->product_name }}</strong><br />
                                        <span class="text-muted">Silver</span>
                                    </p>
                                </td>
                                <td>$ {{ $product->unitprice }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->category }}</td>
                                <td>
                                    <i class="fa-solid fa-star text-warning"></i> {{ $product->product_review }} <span
                                        class="text-muted">out of {{ $product->sum_review }}
                                        Reviews</span>
                                </td>
                                <td class="text-end d-flex align-items-center gap-1">
                                    <button type="button" class="btn btn-primary btn-edit" data-url="{{ route('product.edit', $product) }}">
                                        <i class="" data-lucide="square-pen"></i>
                                    </button>
                                    <form action="{{ route('product.destroy', $product) }}" method="POST"
                                        class="m-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-delete">
                                            <i class="" data-lucide="trash-2"></i>
                                        </button>
                                    </form>
                                    <button type="button" class="btn btn-light btn-view">
                                        <i class="" data-lucide="eye"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            @if (session('success'))
                Swal.fire({
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    timer: 2000
                });
            @endif

            // Edit button click event
            document.querySelectorAll('.btn-edit').forEach(button => {
                button.addEventListener('click', function() {
                    const editUrl = this.getAttribute('data-url');

                    Swal.fire({
                        title: 'Edit Item',
                        text: 'Are you sure you want to edit this item?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, edit it!',
                        cancelButtonText: 'Cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = editUrl;
                        }
                    });
                });
            });

            // Delete button click event
            document.querySelectorAll('.btn-delete').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent form submission

                    const form = this.closest('form');

                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'Cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Submit the form if confirmed
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
</x-app-layout>
