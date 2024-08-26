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
                            <button type="button" class="btn btn-primary btn-lg"><i data-lucide="plus"></i> New
                                Product</button>
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
                                    <img src="img/products/product-9.png" class="mw-100 mh-100" alt="Apple iPad Pro">
                                </div>
                                <p class="mb-0">
                                    <strong>Apple iPad Pro</strong><br />
                                    <span class="text-muted">Silver</span>
                                </p>
                            </td>
                            <td>$ 1,399.00</td>
                            <td>48</td>
                            <td>Tablets</td>
                            <td>
                                <i class="fa-solid fa-star text-warning"></i> 4.6 <span class="text-muted">out of 55
                                    Reviews</span>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-light">View</button>
                            </td>
                        </tr>
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
                                    <img src="img/products/product-8.png" class="mw-100 mh-100" alt="Apple iPad Pro">
                                </div>
                                <p class="d-inline-block mb-0">
                                    <strong>Apple iPad Pro</strong><br />
                                    <span class="text-muted">Space Gray</span>
                                </p>
                            </td>
                            <td>$ 1,399.00</td>
                            <td>48</td>
                            <td>Tablets</td>
                            <td>
                                <i class="fa-solid fa-star text-warning"></i> 4.3 <span class="text-muted">out of 25
                                    Reviews</span>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-light">View</button>
                            </td>
                        </tr>
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
                                    <img src="img/products/product-4.png" class="mw-100 mh-100"
                                        alt="Apple iPhone 15 Pro Max">
                                </div>
                                <p class="d-inline-block mb-0">
                                    <strong>Apple iPhone 15 Pro Max</strong><br />
                                    <span class="text-muted">Blue Titanium</span>
                                </p>
                            </td>
                            <td>$ 1499.00</td>
                            <td>38</td>
                            <td>Smartphones</td>
                            <td>
                                <i class="fa-solid fa-star text-warning"></i> 4.6 <span class="text-muted">out of 40
                                    Reviews</span>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-light">View</button>
                            </td>
                        </tr>
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
                                    <img src="img/products/product-3.png" class="mw-100 mh-100"
                                        alt="Apple iPhone 15 Pro Max">
                                </div>
                                <p class="d-inline-block mb-0">
                                    <strong>Apple iPhone 15 Pro Max</strong><br />
                                    <span class="text-muted">Natural Titanium</span>
                                </p>
                            </td>
                            <td>$ 1499.00</td>
                            <td>30</td>
                            <td>Smartphones</td>
                            <td>
                                <i class="fa-solid fa-star text-warning"></i> 4.8 <span class="text-muted">out of 50
                                    Reviews</span>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-light">View</button>
                            </td>
                        </tr>
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
                                    <img src="img/products/product-5.png" class="mw-100 mh-100"
                                        alt="Apple iPhone 15 Pro Max">
                                </div>
                                <p class="d-inline-block mb-0">
                                    <strong>Apple iPhone 15 Pro Max</strong><br />
                                    <span class="text-muted">White Titanium</span>
                                </p>
                            </td>
                            <td>$ 1499.00</td>
                            <td>45</td>
                            <td>Smartphones</td>
                            <td>
                                <i class="fa-solid fa-star text-warning"></i> 4.9 <span class="text-muted">out of 60
                                    Reviews</span>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-light">View</button>
                            </td>
                        </tr>
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
                                    <img src="img/products/product-7.png" class="mw-100 mh-100"
                                        alt="Apple MacBook Pro 16\" ">
                                </div>
                                <p class="d-inline-block mb-0 ">
                                    <strong>Apple MacBook Pro 16"</strong><br />
                                    <span class="text-muted">Silver</span>
                                </p>
                            </td>
                            <td>$ 2,399.00</td>
                            <td>55</td>
                            <td>Notebooks</td>
                            <td>
                                <i class="fa-solid fa-star text-warning"></i> 4.7 <span class="text-muted">out of 45
                                    Reviews</span>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-light">View</button>
                            </td>
                        </tr>
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
                                    <img src="img/products/product-6.png" class="mw-100 mh-100"
                                        alt="Apple MacBook Pro 16\" ">
                                </div>
                                <p class="d-inline-block mb-0 ">
                                    <strong>Apple MacBook Pro 16"</strong><br />
                                    <span class="text-muted">Space Black</span>
                                </p>
                            </td>
                            <td>$ 2,399.00</td>
                            <td>50</td>
                            <td>Notebooks</td>
                            <td>
                                <i class="fa-solid fa-star text-warning"></i> 4.4 <span class="text-muted">out of 30
                                    Reviews</span>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-light">View</button>
                            </td>
                        </tr>
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
                                    <img src="img/products/product-11.png" class="mw-100 mh-100"
                                        alt="Apple Watch SE">
                                </div>
                                <p class="d-inline-block mb-0">
                                    <strong>Apple Watch SE</strong><br />
                                    <span class="text-muted">Midnight</span>
                                </p>
                            </td>
                            <td>$ 299.00</td>
                            <td>49</td>
                            <td>Smartwatches</td>
                            <td>
                                <i class="fa-solid fa-star text-warning"></i> 4.7 <span class="text-muted">out of 40
                                    Reviews</span>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-light">View</button>
                            </td>
                        </tr>
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
                                    <img src="img/products/product-12.png" class="mw-100 mh-100"
                                        alt="Apple Watch SE">
                                </div>
                                <p class="d-inline-block mb-0">
                                    <strong>Apple Watch SE</strong><br />
                                    <span class="text-muted">Silver</span>
                                </p>
                            </td>
                            <td>$ 299.00</td>
                            <td>30</td>
                            <td>Smartwatches</td>
                            <td>
                                <i class="fa-solid fa-star text-warning"></i> 4.7 <span class="text-muted">out of 40
                                    Reviews</span>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-light">View</button>
                            </td>
                        </tr>
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
                                    <img src="img/products/product-10.png" class="mw-100 mh-100"
                                        alt="Apple Watch SE">
                                </div>
                                <p class="d-inline-block mb-0">
                                    <strong>Apple Watch SE</strong><br />
                                    <span class="text-muted">Starlight</span>
                                </p>
                            </td>
                            <td>$ 299.00</td>
                            <td>54</td>
                            <td>Smartwatches</td>
                            <td>
                                <i class="fa-solid fa-star text-warning"></i> 4.5 <span class="text-muted">out of 35
                                    Reviews</span>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-light">View</button>
                            </td>
                        </tr>
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
                                    <img src="img/products/product-1.png" class="mw-100 mh-100"
                                        alt="Apple Watch Series 9">
                                </div>
                                <p class="d-inline-block mb-0">
                                    <strong>Apple Watch Series 9</strong><br />
                                    <span class="text-muted">Midnight</span>
                                </p>
                            </td>
                            <td>$ 349.00</td>
                            <td>42</td>
                            <td>Smartwatches</td>
                            <td>
                                <i class="fa-solid fa-star text-warning"></i> 4.2 <span class="text-muted">out of 20
                                    Reviews</span>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-light">View</button>
                            </td>
                        </tr>
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
                                    <img src="img/products/product-2.png" class="mw-100 mh-100"
                                        alt="Apple Watch Series 9">
                                </div>
                                <p class="d-inline-block mb-0">
                                    <strong>Apple Watch Series 9</strong><br />
                                    <span class="text-muted">Starlight</span>
                                </p>
                            </td>
                            <td>$ 349.00</td>
                            <td>54</td>
                            <td>Smartwatches</td>
                            <td>
                                <i class="fa-solid fa-star text-warning"></i> 4.5 <span class="text-muted">out of 35
                                    Reviews</span>
                            </td>
                            <td class="text-end">
                                <button type="button" class="btn btn-light">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
