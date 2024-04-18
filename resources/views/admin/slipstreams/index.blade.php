     @extends('layouts.app')

     <!--Page title -->
     @section('title', 'Slipstreams')

     <!--Page description -->
     @section('description', 'A fully featured admin theme which can be used to build CRM, CMS, etc.')

     @section('content')

         <!-- MAIN CONTENT -->
         <div class="main-content">

             <!-- HEADER -->
             <div class="pt-7 pb-8 bg-dark bg-ellipses">
                 <div class="container-fluid">
                     <div class="row justify-content-center">
                         <div class="col"> </div>
                         <div class="col-auto">

                             <!-- Buttons -->
                             <a href="{{ route('slipstreams.create') }}" class="btn btn-primary ms-2">
                                 Add slipstream
                             </a>
                         </div>
                     </div>
                     <div class="row justify-content-center">

                         <div class="col-md-10 col-lg-8 col-xl-6">

                             <!-- Title -->
                             <h1 class="display-3 text-center text-white">
                                 Slipstreams
                             </h1>

                             <!-- Text -->
                             <p class="lead text-center text-body-secondary">
                                 We have plans and prices that fit your business perfectly. Make your client site a success
                                 with our products.
                             </p>


                         </div>
                     </div> <!-- / .row -->
                 </div>
             </div>

             <!-- CONTENT -->
             <div class="container-fluid">
                 <div class="row mt-n7">

                     <div class="col-12 col-lg-4">

                         <!-- Card -->
                         <div class="card">
                             <div class="card-body">

                                 <!-- Header -->
                                 <div class="row align-items-center">
                                     <div class="col">
                                     </div>
                                     <div class="col-auto">

                                         <!-- Dropdown -->
                                         <div class="dropdown">
                                             <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                 data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <i class="fe fe-more-vertical"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-end">
                                                 <a href="{{ route('slipstreams.destroy', 1) }}" class="dropdown-item">
                                                     Delete
                                                 </a>
                                                 <a href="{{ route('slipstreams.edit', 1) }}" class="dropdown-item">
                                                     Edit
                                                 </a>
                                                 <a href="{{ route('slipstreams.show', 1) }}" class="dropdown-item">
                                                     Show
                                                 </a>
                                             </div>
                                         </div>

                                     </div>
                                 </div> <!-- / .row -->
                                 <!-- Title -->
                                 <h2 class="text-uppercase text-center text-body-secondary my-4">
                                    Slipstream
                                 </h2>

                                 <!-- Features -->
                                 <div class="mb-3">
                                     <ul class="list-group list-group-flush">
                                          <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                             <small>Speed</small> <small>100MB, 200MB, 300MB, 400MB, 500MB, 1GB</small>
                                         </li>
                                         <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                             <small>Pop site feed </small> <small>Hop Street</small>
                                         </li>
                                         <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                             <small> Lease Line Provider </small> <small>Dark Fiber</small>
                                         </li>
                                     </ul>
                                 </div>

                                 <!-- Button -->
                                 <a href="#!" class="btn w-100 btn-light">
                                     Start with Basic
                                 </a>

                             </div>
                         </div>

                     </div>
                     <div class="col-12 col-lg-4">

                         <!-- Card -->
                         <div class="card">
                             <div class="card-body">
                                 <!-- Header -->
                                 <div class="row align-items-center">
                                     <div class="col">
                                     </div>
                                     <div class="col-auto">

                                         <!-- Dropdown -->
                                         <div class="dropdown">
                                             <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                 data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <i class="fe fe-more-vertical"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-end">
                                                 <a href="{{ route('slipstreams.destroy', 1) }}" class="dropdown-item">
                                                     Delete
                                                 </a>
                                                 <a href="{{ route('slipstreams.edit', 1) }}" class="dropdown-item">
                                                     Edit
                                                 </a>
                                                 <a href="{{ route('slipstreams.show', 1) }}" class="dropdown-item">
                                                     Show
                                                 </a>
                                             </div>
                                         </div>

                                     </div>
                                 </div> <!-- / .row -->
                                 <!-- Title -->
                                 <h2 class="text-uppercase text-center text-body-secondary my-4">
                                      Lease Line
                                 </h2>
                                 <!-- Features -->
                                 <div class="mb-3">
                                     <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Speed</small> <small>100MB, 200MB, 300MB, 400MB, 500MB, 1GB</small>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small> Provider </small> <small>Virgin, BT, Talk Talk</small>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Router IP </small> <small>111.333.555.58</small>
                                        </li>
                                     </ul>
                                 </div>

                                 <!-- Button -->
                                 <a href="#!" class="btn w-100 btn-primary">
                                     Start with Standard
                                 </a>

                             </div>
                         </div>

                     </div>
                     <div class="col-12 col-lg-4">

                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">

                                <!-- Header -->
                                <div class="row align-items-center">
                                    <div class="col">
                                    </div>
                                    <div class="col-auto">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="{{ route('slipstreams.destroy', 1) }}" class="dropdown-item">
                                                    Delete
                                                </a>
                                                <a href="{{ route('slipstreams.edit', 1) }}" class="dropdown-item">
                                                    Edit
                                                </a>
                                                <a href="{{ route('slipstreams.show', 1) }}" class="dropdown-item">
                                                    Show
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- / .row -->
                                <!-- Title -->
                                <h2 class="text-uppercase text-center text-body-secondary my-4">
                                   Back up
                                </h2>

                                <!-- Features -->
                                <div class="mb-3">
                                    <ul class="list-group list-group-flush">
                                         <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Speed</small> <small>100MB, 200MB, 300MB, 400MB, 500MB, 1GB</small>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small>Pop site feed </small> <small>Hop Street</small>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                            <small> Lease Line Provider </small> <small>Dark Fiber</small>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Button -->
                                <a href="#!" class="btn w-100 btn-light">
                                    Start with Basic
                                </a>

                            </div>
                        </div>

                    </div>
                 </div> <!-- / .row -->

             </div>

         </div> <!-- / .main-content -->

     @endsection
