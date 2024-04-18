     @extends('layouts.app')

     <!--Page title -->
     @section('title', 'Security')

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
                                             Security
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
                                             <button class="btn btn-white" id="contactsCardsTab" data-bs-toggle="tab"
                                                 data-bs-target="#contactsCardsPane" role="tab"
                                                 aria-controls="contactsCardsPane" aria-selected="false">
                                                 <span class="fe fe-grid"></span>
                                             </button>
                                         </div> <!-- / .nav -->

                                         <!-- Buttons -->
                                         <a href="{{ route('active-tracks.create') }}" class="btn btn-primary ms-2">
                                             Add active track
                                         </a>

                                     </div>
                                 </div> <!-- / .row -->
                                 <div class="row align-items-center">
                                     <div class="col">

                                         <!-- Nav -->
                                         <ul class="nav nav-tabs nav-overflow header-tabs">
                                             <li class="nav-item">
                                                 <a href="{{ route('scouts.index') }}" class="nav-link text-nowrap ">
                                                     Scout <span
                                                         class="badge rounded-pill text-bg-secondary-subtle">823</span>
                                                 </a>
                                             </li>
                                             <li class="nav-item">
                                                 <a href="{{ route('sentinels.index') }}" class="nav-link text-nowrap">
                                                     Sentinel <span
                                                         class="badge rounded-pill text-bg-secondary-subtle">22</span>
                                                 </a>
                                             </li>
                                             <li class="nav-item">
                                                 <a href="{{ route('sentries.index') }}" class="nav-link text-nowrap">
                                                    Sentry <span
                                                         class="badge rounded-pill text-bg-secondary-subtle">22</span>
                                                 </a>
                                             </li>
                                             <li class="nav-item">
                                                 <a href="#" class="nav-link text-nowrap active">
                                                     ActiveTrack <span
                                                         class="badge rounded-pill text-bg-secondary-subtle">231</span>
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

                                                 <!-- Form -->
                                                 <form>
                                                     <div
                                                         class="input-group input-group-flush input-group-merge input-group-reverse">
                                                         <input class="form-control list-search" type="search"
                                                             placeholder="Search">
                                                         <span class="input-group-text">
                                                             <i class="fe fe-search"></i>
                                                         </span>
                                                     </div>
                                                 </form>

                                             </div>
                                             <div class="col-auto me-n3">

                                                 <!-- Select -->
                                                 <form>
                                                     <select class="form-select form-select-sm form-control-flush"
                                                         data-choices='{"searchEnabled": false}'>
                                                         <option>5 per page</option>
                                                         <option selected>10 per page</option>
                                                         <option>All</option>
                                                     </select>
                                                 </form>

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
                                                     <form class="dropdown-menu dropdown-menu-end dropdown-menu-card">
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
                                                                             <small>IP Address </small>

                                                                         </div>
                                                                         <div class="col-auto">

                                                                             <!-- input -->
                                                                             <input class="form-select form-select-sm"
                                                                                 name="item-name"
                                                                                 data-choices='{"searchEnabled": false}'>

                                                                         </div>
                                                                     </div> <!-- / .row -->
                                                                 </div>
                                                                 <div class="list-group-item">
                                                                     <div class="row">
                                                                         <div class="col">

                                                                             <!-- Text -->
                                                                             <small>Email to send report</small>

                                                                         </div>
                                                                         <div class="col-auto">

                                                                             <!-- Select -->
                                                                             <select class="form-select form-select-sm"
                                                                                 name="item-emailToSendReport"
                                                                                 data-choices='{"searchEnabled": false}'>
                                                                                 <option value="*" selected>Any
                                                                                 </option>
                                                                                 <option value="yes">Yes</option>
                                                                                 <option value="no">No</option>
                                                                             </select>

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
                                         <table class="table table-sm table-hover table-nowrap card-table">
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
                                                             data-sort="item-device-count" href="#">Device count
                                                         </a>
                                                     </th>
                                                     <th>
                                                         <a class="list-sort text-body-secondary"
                                                             data-sort="item-severity-to-report-on"
                                                             href="#">Severity to report on</a>
                                                     </th>
                                                     <th>
                                                         <a class="list-sort text-body-secondary"
                                                             data-sort="item-what-devices" href="#">What devices</a>
                                                     </th>

                                                 </tr>
                                             </thead>
                                             <tbody class="list fs-base">
                                                 <tr>
                                                     <td>

                                                         <!-- Checkbox -->
                                                         <div class="form-check">
                                                             <input class="form-check-input list-checkbox"
                                                                 id="listCheckboxOne" type="checkbox">
                                                             <label class="form-check-label"
                                                                 for="listCheckboxOne"></label>
                                                         </div>

                                                     </td>

                                                     <td>

                                                         <!-- Text -->
                                                         <span class="item-device-count">10</span>

                                                     </td>
                                                     <td>

                                                         <!-- Text -->
                                                         <span class="item-what-devices ">Test</span>

                                                     </td>

                                                     <td>

                                                         <!-- Text -->
                                                         <span class="item-email-to-send-report">Dummy device</span>

                                                     </td>
                                                     <td class="text-end">

                                                         <!-- Dropdown -->
                                                         <div class="dropdown">
                                                             <a class="dropdown-ellipses dropdown-toggle" href="#"
                                                                 role="button" data-bs-toggle="dropdown"
                                                                 aria-haspopup="true" aria-expanded="false">
                                                                 <i class="fe fe-more-vertical"></i>
                                                             </a>
                                                             <div class="dropdown-menu dropdown-menu-end">
                                                                 <a href="{{ route('active-tracks.destroy', 1) }}"
                                                                     class="dropdown-item">
                                                                     Delete
                                                                 </a>
                                                                 <a href="{{ route('active-tracks.edit', 1) }}"
                                                                     class="dropdown-item">
                                                                     Edit
                                                                 </a>
                                                                 <a href="{{ route('active-tracks.show', 1) }}"
                                                                     class="dropdown-item">
                                                                     Show
                                                                 </a>
                                                             </div>
                                                         </div>

                                                     </td>
                                                 </tr>
                                             </tbody>
                                         </table>
                                     </div>
                                     <div class="card-footer d-flex justify-content-between">

                                         <!-- Pagination (prev) -->
                                         <ul class="list-pagination-prev pagination pagination-tabs card-pagination">
                                             <li class="page-item">
                                                 <a class="page-link ps-0 pe-4 border-end" href="#">
                                                     <i class="fe fe-arrow-left me-1"></i> Prev
                                                 </a>
                                             </li>
                                         </ul>

                                         <!-- Pagination -->
                                         <ul class="list-pagination pagination pagination-tabs card-pagination"></ul>

                                         <!-- Pagination (next) -->
                                         <ul class="list-pagination-next pagination pagination-tabs card-pagination">
                                             <li class="page-item">
                                                 <a class="page-link ps-4 pe-0 border-start" href="#">
                                                     Next <i class="fe fe-arrow-right ms-1"></i>
                                                 </a>
                                             </li>
                                         </ul>

                                         <!-- Alert -->
                                         <div class="list-alert alert alert-dark alert-dismissible border fade"
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
                                                     <button
                                                         class="btn btn-sm bg-white text-white bg-opacity-20 bg-opacity-15-hover">
                                                         Edit
                                                     </button>

                                                     <!-- Button -->
                                                     <button
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
                             <div class="tab-pane fade" id="contactsCardsPane" role="tabpanel"
                                 aria-labelledby="contactsCardsTab">

                                 <!-- Cards -->
                                 <div data-list='{"valueNames": ["item-name", "item-email", "item-skyline-product"], "page": 9, "pagination": {"paginationClass": "list-pagination"}}'
                                     id="contactsCards">

                                     <!-- Header -->
                                     <div class="row align-items-center mb-4">
                                         <div class="col">

                                             <!-- Form -->
                                             <form>
                                                 <div
                                                     class="input-group input-group-lg input-group-merge input-group-reverse">
                                                     <input class="form-control list-search" type="search"
                                                         placeholder="Search">
                                                     <span class="input-group-text">
                                                         <i class="fe fe-search"></i>
                                                     </span>
                                                 </div>
                                             </form>

                                         </div>
                                         <div class="col-auto me-n3">

                                             <!-- Select -->
                                             <form>
                                                 <select class="form-select form-select-sm form-control-flush"
                                                     data-choices='{"searchEnabled": false}'>
                                                     <option selected>9 per page</option>
                                                     <option>All</option>
                                                 </select>
                                             </form>

                                         </div>
                                         <div class="col-auto">

                                             <!-- Dropdown -->
                                             <div class="dropdown">

                                                 <!-- Toggle -->
                                                 <button class="btn btn-sm btn-white" type="button"
                                                     data-bs-toggle="dropdown" aria-haspopup="true"
                                                     aria-expanded="false">
                                                     <i class="fe fe-sliders me-1"></i> Filter <span
                                                         class="badge bg-primary ms-1 d-none">0</span>
                                                 </button>

                                                 <!-- Menu -->
                                                 <form class="dropdown-menu dropdown-menu-end dropdown-menu-card">
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
                                                                         <small>Name</small>

                                                                     </div>
                                                                     <div class="col-auto">

                                                                         <!-- Select -->
                                                                         <input class="form-control" name="item-name"
                                                                             data-choices='{"searchEnabled": false}'>


                                                                     </div>
                                                                 </div> <!-- / .row -->
                                                             </div>
                                                             <div class="list-group-item">
                                                                 <div class="row">
                                                                     <div class="col">

                                                                         <!-- Text -->
                                                                         <small>IT Asset No </small>

                                                                     </div>
                                                                     <div class="col-auto">

                                                                         <!-- Select -->
                                                                         <select class="form-select form-select-sm"
                                                                             name="item-it-asset-no"
                                                                             data-choices='{"searchEnabled": false}'>
                                                                             <option value="*" selected>Any</option>
                                                                             <option value="1/10">1+</option>
                                                                             <option value="2/10">2+</option>
                                                                             <option value="3/10">3+</option>
                                                                             <option value="4/10">4+</option>
                                                                             <option value="5/10">5+</option>
                                                                             <option value="6/10">6+</option>
                                                                             <option value="7/10">7+</option>
                                                                             <option value="8/10">8+</option>
                                                                             <option value="9/10">9+</option>
                                                                             <option value="10/10">10</option>
                                                                         </select>

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

                                     <!-- Body -->
                                     <div class="list row">
                                         <div class="col-12 col-md-6 col-xl-4">

                                             <!-- Card -->
                                             <div class="card">
                                                 <div class="card-body">

                                                     <!-- Header -->
                                                     <div class="row align-items-center">
                                                         <div class="col">

                                                             <!-- Checkbox -->
                                                             <div class="form-check form-check-circle">
                                                                 <input class="form-check-input list-checkbox"
                                                                     type="checkbox" id="cardsCheckboxOne">
                                                                 <label class="form-check-label"
                                                                     for="cardsCheckboxOne"></label>
                                                             </div>

                                                         </div>
                                                         <div class="col-auto">

                                                             <!-- Dropdown -->
                                                             <div class="dropdown">
                                                                 <a href="#"
                                                                     class="dropdown-ellipses dropdown-toggle"
                                                                     role="button" data-bs-toggle="dropdown"
                                                                     aria-haspopup="true" aria-expanded="false">
                                                                     <i class="fe fe-more-vertical"></i>
                                                                 </a>
                                                                 <div class="dropdown-menu dropdown-menu-end">
                                                                     <a href="{{ route('active-tracks.destroy', 1) }}"
                                                                         class="dropdown-item">
                                                                         Delete
                                                                     </a>
                                                                     <a href="{{ route('active-tracks.edit', 1) }}"
                                                                         class="dropdown-item">
                                                                         Edit
                                                                     </a>
                                                                     <a href="{{ route('active-tracks.show', 1) }}"
                                                                         class="dropdown-item">
                                                                         Show
                                                                     </a>
                                                                 </div>
                                                             </div>

                                                         </div>
                                                     </div> <!-- / .row -->

                                                     <!-- Divider -->
                                                     <hr class="card-divider mb-0">

                                                     <!-- List group -->

                                                     <div class="list-group list-group-flush mb-n3">
                                                         <div class="list-group-item">
                                                             <div class="row">
                                                                 <div class="col">

                                                                     <!-- Text -->
                                                                     <small class="item-ext-no">Device count </small>

                                                                 </div>
                                                                 <div class="col-auto">

                                                                     <!-- Text -->
                                                                     <span
                                                                         class="item-score badge text-bg-danger-subtle">10</span>

                                                                 </div>
                                                             </div> <!-- / .row -->
                                                         </div>

                                                         <div class="list-group-item">
                                                             <div class="row">
                                                                 <div class="col">

                                                                     <!-- Text -->
                                                                     <small> What devices </small>

                                                                 </div>
                                                                 <div class="col-auto">

                                                                     <!-- Text -->
                                                                     <small>Dummy Device</small>

                                                                 </div>
                                                             </div> <!-- / .row -->
                                                         </div>
                                                         <div class="list-group-item">
                                                             <div class="row">
                                                                 <div class="col">

                                                                     <!-- Text -->
                                                                     <small> Severity to report on </small>

                                                                 </div>
                                                                 <div class="col-auto">
                                                                     5 June 2023
                                                                 </div>
                                                             </div> <!-- / .row -->
                                                         </div>
                                                     </div>


                                                 </div>
                                             </div>

                                         </div>
                                     </div>

                                     <!-- Pagination -->
                                     <div class="row g-0">

                                         <!-- Pagination (prev) -->
                                         <ul
                                             class="col list-pagination-prev pagination pagination-tabs justify-content-start">
                                             <li class="page-item">
                                                 <a class="page-link" href="#">
                                                     <i class="fe fe-arrow-left me-1"></i> Prev
                                                 </a>
                                             </li>
                                         </ul>

                                         <!-- Pagination -->
                                         <ul class="col list-pagination pagination pagination-tabs justify-content-center">
                                         </ul>

                                         <!-- Pagination (next) -->
                                         <ul
                                             class="col list-pagination-next pagination pagination-tabs justify-content-end">
                                             <li class="page-item">
                                                 <a class="page-link" href="#">
                                                     Next <i class="fe fe-arrow-right ms-1"></i>
                                                 </a>
                                             </li>
                                         </ul>

                                     </div>

                                     <!-- Alert -->
                                     <div class="list-alert alert alert-dark alert-dismissible border fade"
                                         role="alert">

                                         <!-- Content -->
                                         <div class="row align-items-center">
                                             <div class="col">

                                                 <!-- Checkbox -->
                                                 <div class="form-check">
                                                     <input class="form-check-input" id="cardAlertCheckbox"
                                                         type="checkbox" checked disabled>
                                                     <label class="form-check-label text-white" for="cardAlertCheckbox">
                                                         <span class="list-alert-count">0</span> deal(s)
                                                     </label>
                                                 </div>

                                             </div>
                                             <div class="col-auto me-n3">

                                                 <!-- Button -->
                                                 <button
                                                     class="btn btn-sm bg-white text-white bg-opacity-20 bg-opacity-15-hover">
                                                     Edit
                                                 </button>

                                                 <!-- Button -->
                                                 <button
                                                     class="btn btn-sm bg-white text-white bg-opacity-20 bg-opacity-15-hover">
                                                     Delete
                                                 </button>

                                             </div>
                                         </div> <!-- / .row -->

                                         <!-- Close -->
                                         <button type="button" class="list-alert-close btn-close" aria-label="Close">

                                         </button>

                                     </div>

                                 </div>

                             </div>
                         </div>

                     </div>
                 </div> <!-- / .row -->
             </div>

         </div> <!-- / .main-content -->

     @endsection
