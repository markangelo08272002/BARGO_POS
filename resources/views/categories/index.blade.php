@extends('layouts.main')

@section('content')
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
              </span>
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
                    <div class="text-truncate" data-i18n="Analytics">Dasboard</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                   href="{{ route('products.index') }}"
                    class="menu-link">
                    <div class="text-truncate" data-i18n="CRM">Product</div>
                    <div class="badge rounded-pill bg-label-primary text-uppercase fs-tiny ms-auto">New</div>
                  </a>
                </li>
                <li class="menu-item active">
                  <a
                    href="{{ route('categories.index') }}"
                    class="menu-link">
                    <div class="text-truncate" >Categories</div>
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

<!-- Categories Table -->
<div class="container py-4">
    <a class="btn btn-primary" href="javascript:void(0);" onclick="showCreateModal()">Add New Category</a>
    <br><br>
<div class="card">
                <h5 class="card-header">Categories</h5>
                @if(session('success'))
 <div class="alert alert-success" role="alert"> 
    {{ session('success') }}
</div>
@endif
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>Category Name</th>
                        <th>Short Description</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($categories as $category)
                      <tr>
            <td>{{ $category->category_name }}</td>
            <td>{{ $category->short_description }}</td>
            <td>
              <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a href="javascript:void(0);" onclick="showEditModal({{ $category->id }}, '{{ $category->category_name }}', '{{ $category->short_description }}')" class="dropdown-item"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                              <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="dropdown-item" btn-sm"><i class="bx bx-trash me-1"></i>Delete</button>
                              </form>
                            </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div></div>
</div>

<!-- Create Category Modal -->
<div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="createCategoryModalLabel">Create New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="create_category_name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="create_category_name" name="category_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="create_short_description" class="form-label">Short Description</label>
                        <textarea class="form-control" id="create_short_description" name="short_description" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Category</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Category Modal -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form id="editCategoryForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit_category_name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="edit_category_name" name="category_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_short_description" class="form-label">Short Description</label>
                        <textarea class="form-control" id="edit_short_description" name="short_description" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Function to show the create modal
    function showCreateModal() {
        const modal = new bootstrap.Modal(document.getElementById('createCategoryModal'));
        modal.show();
    }

    // Function to show the edit modal and set form action and field values
    function showEditModal(id, categoryName, shortDescription) {
        const modal = new bootstrap.Modal(document.getElementById('editCategoryModal'));
        modal.show();
        
        // Set form values for editing
        document.getElementById('editCategoryForm').action = '/categories/' + id;
        document.getElementById('edit_category_name').value = categoryName;
        document.getElementById('edit_short_description').value = shortDescription;
    }
</script>

@endsection
