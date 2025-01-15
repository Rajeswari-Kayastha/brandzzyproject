@extends('layouts.admin')

@section('title') {{'Create User'}} @endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Create Users</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Create New User
                            <a href="{{ route('admin.users.index') }}" class="float-end btn btn-success btn-sm">View All Users</a>
                        </h4>
                        
                        <form action="{{ route('admin.users.store') }}" method="POST" class="shadow">
                            @csrf
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group mt-3">
                                        <label for="name">User Name:</label>
                                        <input type="text" name="name" placeholder="Enter User Name" class="form-control" />
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group mt-3">
                                        <label for="email">User E-mail Address:</label>
                                        <input type="email" name="email" placeholder="Enter User E-mail" class="form-control" />
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group mt-3">
                                        <label for="password">Create Password:</label>
                                        <input type="password" name="password" placeholder="Create Password" class="form-control" />
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">

                                    <div class="form-group mt-3">
                                        <label for="confirm-password">Confirm Password:</label>
                                        <input type="password" name="confirm-password" placeholder="Confirm Password" class="form-control" />
                                        @error('confirm-password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                    <div class="form-group mt-3">
                                        <label for="roles">Select Role:</label>
                                        <select name="roles[]" class="form-control" multiple>
                                            @foreach ($roles as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>                                    
                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-primary">Create User</button>
                                        <a href="javascript:void(0)" onclick="window.history.back()" class="btn btn-secondary">Back</a>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection