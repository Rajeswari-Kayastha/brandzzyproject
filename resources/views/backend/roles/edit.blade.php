@extends('layouts.admin')

@section('title') {{'Edit Role'}} @endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Edit Role</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.roles.index') }}" class="btn btn-success btn-sm">View Roles</a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Role: {{ $role->name }}</h4>
                        <form action="{{ route('admin.roles.update', $id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $role->name }}" />
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                    <div class="form-group">
                                        <strong>Permission:</strong><br/>
                                        <div class="mt-3">
                                            @foreach($permission as $value)
                                                <label style="display: inline-block; margin-right: 10px;">
                                                    <input type="checkbox" name="permission[]" value="{{ $value->id }}" class="name" {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }} />
                                                    {{ $value->name }}
                                                </label>
                                            @endforeach
                                            @error('permission')
                                                <br/>
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary">Update Roles & Permissions</button>
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