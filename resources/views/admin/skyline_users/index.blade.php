     @extends('layouts.app')

     <!--Page title -->
     @section('title', 'IT Services - Skyline users')

     <!--Page description -->
     @section('description', 'A fully featured admin theme which can be used to build CRM, CMS, etc.')

     @section('content')

         <!-- MAIN CONTENT -->
         <div class="main-content">
             <div class="container-fluid">
                 <div class="row justify-content-center">
                     <div class="col-12">

                         <!-- Header -->
                         <div class="header">
                             <div class="header-body">
                                 <div class="row align-items-center">
                                     <div class="col">

                                         <!-- Pretitle -->
                                         <h6 class="header-pretitle">
                                             Overview
                                         </h6>

                                         <!-- Title -->
                                         <h1 class="header-title text-truncate">
                                             IT Services
                                         </h1>

                                     </div>
                                     <div class="col-auto">

                                         <!-- Navigation (button group) -->
                                         <div class="nav btn-group d-inline-flex" role="tablist">
                                             <button class="btn btn-white active" id="contactsListTab" data-bs-toggle="tab"
                                                 data-bs-target="#contactsListPane" role="tab"
                                                 aria-controls="contactsListPane" aria-selected="true">
                                                 <span class="fe fe-list"></span>
                                             </button>
                                         </div> <!-- / .nav -->

                                         <!-- Buttons -->
                                         <a href="{{ route('skyline-users.create') }}" class="btn btn-primary ms-2">
                                            Add Skyline User
                                         </a>

                                     </div>
                                 </div> <!-- / .row -->
                                 <div class="row align-items-center">
                                     <div class="col">

                                         <!-- Nav -->
                                         <ul class="nav nav-tabs nav-overflow header-tabs">
                                             <li class="nav-item">
                                                 <a href="#" class="nav-link text-nowrap active">
                                                     Skyline <span
                                                         class="badge rounded-pill text-bg-secondary-subtle" id="all_skyline_users_total">0</span>
                                                 </a>
                                             </li>
                                             {{-- <li class="nav-item">
                                                 <a href="{{ route('vortexes.index') }}" class="nav-link text-nowrap">
                                                    Vortex <span
                                                         class="badge rounded-pill text-bg-secondary-subtle">231</span>
                                                 </a>
                                             </li>
                                             <li class="nav-item">
                                                 <a href="{{ route('data-guards.index') }}" class="nav-link text-nowrap">
                                                    Data Guard <span
                                                         class="badge rounded-pill text-bg-secondary-subtle">22</span>
                                                 </a>
                                             </li> --}}
                                             <li class="nav-item">
                                                 <a href="{{ route('managed-its.index') }}" class="nav-link text-nowrap">
                                                     Managed IT <span
                                                         class="badge rounded-pill text-bg-secondary-subtle">22</span>
                                                 </a>
                                             </li>
                                         </ul>

                                     </div>
                                 </div>
                             </div>
                         </div>

                         <!-- Tab content -->
                         <div class="tab-content">
                             <div class="tab-pane fade show active" id="contactsListPane" role="tabpanel"
                                 aria-labelledby="contactsListTab">

                                 <!-- Card -->
                                 <div class="card"
                                     data-list='{"valueNames": ["item-firstname", "item-surname", "item-email", "item-product"], "page": 10, "pagination": {"paginationClass": "list-pagination"}}'
                                     id="contactsList">
                                     <div class="card-header">
                                         <div class="row align-items-center">
                                             <div class="col">
                                                     <div
                                                         class="input-group input-group-flush input-group-merge input-group-reverse">
                                                         <input class="form-control list-search" type="search"
                                                             placeholder="Search" id="skyline-user-search-filter">
                                                         <span class="input-group-text">
                                                             <i class="fe fe-search"></i>
                                                         </span>
                                                     </div>
                                             </div>
                                             <div class="col-auto me-n3">

                                                 <!-- Select -->
                                                 <select id="page-length-select"
                                                     class="form-select form-select-sm form-control-flush"
                                                     data-choices='{"searchEnabled": false}'>
                                                     <option value="10" selected>10 per page</option>
                                                     <option value="25">25 per page</option>
                                                     <option value="50">50 per page</option>
                                                     <option value="100">100 per page</option>
                                                     <option value="-1">All</option>
                                                 </select>

                                             </div>
                                             <div class="col-auto">

                                                 <!-- Dropdown -->
                                                 <div class="dropdown">

                                                     <!-- Toggle -->
                                                     <button class="btn btn-sm btn-white" type="button"
                                                         data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                         aria-haspopup="true" aria-expanded="false">
                                                         <i class="fe fe-sliders me-1"></i> Filter <span
                                                             class="badge bg-primary ms-1 d-none">0</span>
                                                     </button>

                                                     <!-- Menu -->
                                                     <form method="POST" action="#" class="dropdown-menu dropdown-menu-end dropdown-menu-card"
                                                         id="skyline-users-search-form">
                                                         <div class="card-header">

                                                             <!-- Title -->
                                                             <h4 class="card-header-title">
                                                                 Filters
                                                             </h4>

                                                             <!-- Link -->
                                                             <button class="btn btn-sm btn-link text-reset d-none"
                                                                 type="reset">
                                                                 <small>Clear filters</small>
                                                             </button>

                                                         </div>
                                                         <div class="card-body">

                                                             <!-- List group -->
                                                             <div class="list-group list-group-flush mt-n4 mb-4">
                                                                <div class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col">

                                                                            <!-- Text -->
                                                                            <small>First Name </small>

                                                                        </div>
                                                                        <div class="col-auto">

                                                                            <!-- input -->
                                                                            <input class="form-control" name="first_name"
                                                                                placeholder="Please enter first name">

                                                                        </div>
                                                                    </div> <!-- / .row -->
                                                                </div>
                                                                <div class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col">

                                                                            <!-- Text -->
                                                                            <small>Last Name </small>

                                                                        </div>
                                                                        <div class="col-auto">

                                                                            <!-- input -->
                                                                            <input class="form-control" name="last_name"
                                                                                placeholder="Please enter last name">

                                                                        </div>
                                                                    </div> <!-- / .row -->
                                                                </div>
                                                                <div class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col">

                                                                            <!-- Text -->
                                                                            <small>Email </small>

                                                                        </div>
                                                                        <div class="col-auto">

                                                                            <!-- input -->
                                                                            <input class="form-control" name="email"
                                                                                placeholder="Please enter email">

                                                                        </div>
                                                                    </div> <!-- / .row -->
                                                                </div>
                                                                {{-- <div class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col">

                                                                            <!-- Text -->
                                                                            <small>DOB</small>

                                                                        </div>
                                                                        <div class="col-auto">

                                                                            <!-- input -->
                                                                            <input type="date" class="form-control"
                                                                                name="date_of_birth">

                                                                        </div>
                                                                    </div> <!-- / .row -->
                                                                </div> --}}
                                                                 <div class="list-group-item">
                                                                     <div class="row">
                                                                         <div class="col">

                                                                             <!-- Text -->
                                                                             <small>Start Date</small>

                                                                         </div>
                                                                         <div class="col-auto">

                                                                             <!-- input -->
                                                                             <input type="date" class="form-control"
                                                                                 name="start_date">

                                                                         </div>
                                                                     </div> <!-- / .row -->
                                                                 </div>
                                                                 <div class="list-group-item">
                                                                     <div class="row">
                                                                         <div class="col">

                                                                             <!-- Text -->
                                                                             <small>End Date</small>

                                                                         </div>
                                                                         <div class="col-auto">

                                                                             <!-- input -->
                                                                             <input type="date" class="form-control"
                                                                                 name="end_date">

                                                                         </div>
                                                                     </div> <!-- / .row -->
                                                                 </div>
                                                             </div>

                                                             <!-- Button -->
                                                             <button class="btn w-100 btn-primary" type="submit">
                                                                 Apply filter
                                                             </button>

                                                         </div>
                                                     </form>

                                                 </div>

                                             </div>
                                         </div> <!-- / .row -->
                                     </div>
                                     <div class="table-responsive">
                                         <table id="skyline-users-table"
                                             class="table table-sm table-hover table-nowrap card-table">
                                             <thead>
                                                 <tr>
                                                     <th>

                                                         <!-- Checkbox -->
                                                         <div class="form-check mb-n2">
                                                             <input class="form-check-input list-checkbox-all"
                                                                 id="listCheckboxAll" type="checkbox">
                                                             <label class="form-check-label"
                                                                 for="listCheckboxAll"></label>
                                                         </div>

                                                     </th>
                                                     <th>
                                                         <a class="list-sort text-body-secondary"
                                                             data-sort="item-first_name" href="#">First name</a>
                                                     </th>
                                                     <th>
                                                         <a class="list-sort text-body-secondary"
                                                             data-sort="item-last_name" href="#">Surname name</a>
                                                     </th>
                                                     {{-- <th>
                                                         <a class="list-sort text-body-secondary" data-sort="item-gender"
                                                             href="#">Gender</a>
                                                     </th> --}}

                                                     <th>
                                                         <a class="list-sort text-body-secondary" data-sort="item-email"
                                                             href="#">Email</a>
                                                     </th>
                                                     <th>
                                                         <a class="list-sort text-body-secondary" data-sort="item-product"
                                                             href="#">Skyline Product </a>
                                                     </th>
                                                     <th>
                                                         <a class="list-sort text-body-secondary" data-sort="item-gender"
                                                             href="#">Status</a>
                                                     </th>
                                                     <th>
                                                         <a class="list-sort text-body-secondary"
                                                             data-sort="item-created_at" href="#"> Created At</a>
                                                     </th>
                                                     <th>

                                                     </th>
                                                 </tr>
                                             </thead>
                                             <tbody class="list fs-base">
                                             </tbody>
                                         </table>
                                     </div>
                                     <div class="card-footer d-flex justify-content-between">
                                         <!-- Alert -->
                                         <div id="list-alert-modal"
                                             class="list-alert alert alert-dark alert-dismissible border fade"
                                             role="alert">

                                             <!-- Content -->
                                             <div class="row align-items-center">
                                                 <div class="col">

                                                     <!-- Checkbox -->
                                                     <div class="form-check">
                                                         <input class="form-check-input" id="listAlertCheckbox"
                                                             type="checkbox" checked disabled>
                                                         <label class="form-check-label text-white"
                                                             for="listAlertCheckbox">
                                                             <span class="list-alert-count">0</span> deal(s)
                                                         </label>
                                                     </div>

                                                 </div>
                                                 <div class="col-auto me-n3">
                                                     <!-- Button -->
                                                     <button type="button" name="bulk_delete" id="bulk_delete"
                                                         data-action={{ route('skyline_users.destroy.all') }}
                                                         class="btn btn-sm bg-white text-white bg-opacity-20 bg-opacity-15-hover">
                                                         Delete
                                                     </button>

                                                 </div>
                                             </div> <!-- / .row -->

                                             <!-- Close -->
                                             <button type="button" class="list-alert-close btn-close"
                                                 aria-label="Close"></button>

                                         </div>

                                     </div>
                                 </div>

                             </div>
                         </div>

                     </div>
                 </div> <!-- / .row -->
             </div>

         </div> <!-- / .main-content -->

     @endsection

     @push('footer-js-css')
         <!--Datatable -->
         @include('admin.skyline_users.datatable')
     @endpush
