@extends('layouts.app')

<!--Page title -->
@section('title', 'New skyline user')

<!--Page description -->
@section('description', 'A fully featured admin theme which can be used to build CRM, CMS, etc.')

@section('content')
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">

                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Page title -->
                                    <h6 class="header-pretitle">
                                        New skyline user
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Add Skyline User
                                    </h1>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Form -->
                    <form method="POST" action="{{ route('skyline-users.store') }}" class="mb-4" id="skyline-user-form">
                        @csrf
                        <!-- First name -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                First Name
                            </label>

                            <!-- Input -->
                            <input type="text" name="first_name" id="first_name"
                                class="form-control @error('first_name') is-invalid @enderror"
                                placeholder="Enter first name" value="{{ old('first_name')}}">
                                @error('first_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Last name -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Last Name
                            </label>

                            <!-- Input -->
                            <input type="text" name="last_name" id="last_name"
                                class="form-control  @error('last_name') is-invalid @enderror"
                                placeholder="Enter last name" value="{{ old('last_name')}}">
                                @error('last_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- <!-- Gender -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Gender
                            </label>
                            <div class="col-12">
                                <!-- Input -->
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="gender" value="male" checked>
                                    <label class="form-check-label">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="gender" value="female">
                                    <label class="form-check-label">
                                        Female
                                    </label>
                                </div>
                            @error('gender')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>

                        <!-- Date Of Birth -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Date Of Birth
                            </label>

                            <!-- Input -->
                            <input type="date" name="date_of_birth" id="date_of_birth"
                                class="form-control @error('date_of_birth') is-invalid @enderror"
                                placeholder="Enter date of birth" value="{{ old('date_of_birth')}}">
                            @error('date_of_birth')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Address -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Address
                            </label>

                            <!-- textarea -->
                            <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" data-autosize
                                rows="2" placeholder="Enter address">{{ old('address')}}</textarea>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>--}}

                        <!-- Email -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Email
                            </label>

                            <!-- Input -->
                            <input type="text" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" value="{{ old('email')}}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <!-- Password -->
                        {{-- <div class="form-group">
                            <div class="row">
                                <div class="col">

                                    <!-- Label -->
                                    <label class="form-label">
                                        Password
                                    </label>

                                </div>

                            </div> <!-- / .row -->

                            <!-- Input group -->
                            <div class="input-group input-group-merge">
                                <!-- Input -->
                                <input class="form-control  @error('password') is-invalid @enderror" type="password"
                                    name="password" id="password" placeholder="Enter your password" value="{{ old('password')}}">

                                <!-- Icon -->
                                <span class="input-group-text fe fe-eye" id="togglePassword"></span>
                            </div>

                            <div id="custom_password_error" class="text-danger"></div>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div> --}}

                        <!-- Skyline Product -->
                        <div class="form-group">

                            <!-- Label -->
                            <label class="form-label">
                                Skyline Product
                            </label>

                            <!-- Select -->
                            <select name="product" id="product"
                                class="form-control" data-choices >
                                <option value="Skyline Standard" selected>Skyline Standard</option>
                                <option value="Skyline Pro">Skyline Pro</option>
                                <option value="Skyline Power">Skyline Power</option>
                                <option value="Email & Office, App">Email & Office, App</option>
                                <option value="Skyline Email (50GB)">Skyline Email (50GB)</option>
                                <option value="Skyline Email (100GB)">Skyline Email (100GB) </option>
                            </select>
                            @error('product')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Notes  -->
                        <div class="form-group">

                            <!-- Label  -->
                            <label class="form-label">
                                Notes
                            </label>

                            <!-- textarea -->
                            <textarea name="notes" id="notes" class="form-control @error('notes') is-invalid @enderror" data-autosize
                                rows="2" placeholder="Enter notes">{{ old('notes')}}</textarea>
                            @error('notes')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="form-group">

                            <!-- Label -->
                            <label class="form-label">
                                Status
                            </label>

                            <!-- Select -->
                            <select id="status" name="status"
                                class="form-control @error('status') is-invalid @enderror" value="{{ old('status')}}" data-choices>
                                <option value="0">Deactive</option>
                                <option value="1" selected>Active</option>
                                <option value="2">Pending</option>
                                <option value="3">Block</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Divider -->
                        <hr class="mt-5 mb-5">
                        <div class="row">
                            <div class="col-12 col-md-6">

                                <!-- Email verified -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="form-label mb-1">
                                        Email verified
                                    </label>

                                    <!-- Text -->
                                    <small class="form-text text-body-secondary">
                                        If you are available for hire outside of the current situation, you can encourage
                                        others to hire you.
                                    </small>

                                    <!-- Switch -->
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="email_verified_at"
                                            id="email_verified_at">
                                        <label class="form-check-label" for="email_verified_at"></label>
                                    </div>
                                    @error('email_verified_at')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Email verified -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="form-label mb-1">
                                        2FA Status
                                    </label>

                                    <!-- Text -->
                                    <small class="form-text text-body-secondary">
                                        If you are available for hire outside of the current situation, you can encourage
                                        others to hire you.
                                    </small>

                                    <!-- Switch -->
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="is_2fa_status"
                                            id="is_2fa_status">
                                        <label class="form-check-label" for="is_2fa_status"></label>
                                    </div>
                                    @error('is_2fa_status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                            </div>
                        </div>

                        <!-- Divider -->
                        <hr class="mt-5 mb-5">

                        <!-- Buttons -->
                        <button type="submit" class="btn w-100 btn-primary">
                            Create user
                        </button>
                        <button type="reset" class="btn w-100 btn-link text-body-secondary mt-2">
                            Cancel this user
                        </button>

                    </form>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->

@endsection
