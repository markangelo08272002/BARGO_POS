@extends('layouts.main')

@section('content')
<!-- Menu -->
<title>Products - Bargo Pos</title>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"></path>
                  </defs>
                  
                </svg>
              <span class="app-brand demo menu-text fw-bold ms-2">
              <img src="{{ asset('assets/img/slsu-logo.png') }}" alt="Logo" class="logo-img" style="width: 200px; height: auto;padding-right: 50px;margin-bottom: 20px">
              
          </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active open">
              <a href="{{ route('dashboard')}}" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
                <span class="badge rounded-pill bg-danger ms-auto">4</span>
              </a>
              <ul class="menu-sub">
                <li class="menu-item ">
                  <a href="{{ route('dashboard')}}" class="menu-link">
                    <div class="text-truncate" data-i18n="Analytics">Dashboard</div>
                  </a>
                </li>
                <li class="menu-item active">
                  <a
                   href="{{ route('products.index') }}"
                    class="menu-link">
                    <div class="text-truncate" data-i18n="CRM">Product</div>
                    <div class="badge rounded-pill bg-label-primary text-uppercase fs-tiny ms-auto">New</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="{{ route('categories.index') }}"
                    class="menu-link">
                    <div class="text-truncate" data-i18n="eCommerce">Categories</div>
                    <div class="badge rounded-pill bg-label-primary text-uppercase fs-tiny ms-auto">Pro</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="{{ route('users') }}"
                    class="menu-link">
                    <div class="text-truncate" data-i18n="Logistics">Users</div>
                    <div class="badge rounded-pill bg-label-primary text-uppercase fs-tiny ms-auto">Pro</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Layouts -->
            

            <!-- Apps & Pages -->
            
          </ul>
        </aside>

<div class="container py-4">
    <a class="btn btn-primary" href="{{ route('products.create') }}">Add New Product</a><br><br>

    <div class="card">
                <h5 class="card-header">Product</h5>
                @if(session('success'))
        <div class="alert alert-success" role="alert"> 
            {{ session('success') }}
        </div>
    @endif
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark">
            <tr>
                <th>Product Name</th>
                <th>Unit</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
       </thead>
        <tbody class="table-border-bottom-0">
            @if(isset($products))
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->unit }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>{{ $product->category->category_name }}</td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                             <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editProductModal"
                               data-id="{{ $product->id }}"
                               data-name="{{ $product->product_name }}"
                               data-unit="{{ $product->unit }}"
                               data-price="{{ $product->price }}"
                               data-quantity="{{ $product->qty }}"
                               data-category-id="{{ $product->category->id }}"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                              <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item" type="submit"><i class="bx bx-trash me-1"></i>Delete</button>
                            </form>

                            </div>
                          </div>
                            </td>
                           </tr>
                      @endforeach
                      @endif
                      </tbody>
                    </table>
                  </div>
                        </div>

                        
                        
                    

<!-- Modal for Editing Product -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Edit Product Form -->
                <form id="editProductForm" action="{{ route('products.update', 'product_id') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="productId" name="product_id">
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="productName" name="product_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <input type="text" class="form-control" id="unit" name="unit" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="qty" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-control" id="category" name="category_id" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Handling Modal Data -->
<script>
    var editProductModal = document.getElementById('editProductModal');
    editProductModal.addEventListener('show.bs.modal', function (event) {
        // Get data attributes from the edit button
        var button = event.relatedTarget; 
        var productId = button.getAttribute('data-id');
        var productName = button.getAttribute('data-name');
        var unit = button.getAttribute('data-unit');
        var price = button.getAttribute('data-price');
        var quantity = button.getAttribute('data-quantity');
        var categoryId = button.getAttribute('data-category-id'); // Add this data attribute for category ID

        // Set the values in the modal form
        var modal = editProductModal.querySelector('.modal-body #productId');
        var nameField = editProductModal.querySelector('.modal-body #productName');
        var unitField = editProductModal.querySelector('.modal-body #unit');
        var priceField = editProductModal.querySelector('.modal-body #price');
        var quantityField = editProductModal.querySelector('.modal-body #quantity');
        var categoryField = editProductModal.querySelector('.modal-body #category');

        modal.value = productId;
        nameField.value = productName;
        unitField.value = unit;
        priceField.value = price;
        quantityField.value = quantity;

        // Set the selected category
        categoryField.value = categoryId; // Set the category ID to the select field

        // Update the form action URL with the product ID
        var formAction = document.getElementById('editProductForm').action;
        document.getElementById('editProductForm').action = formAction.replace('product_id', productId);
    });
</script>

@endsection
