@extends('layouts.admin')

@section('title') {{'Manage Roles'}} @endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">View and Manage Roles and Permissions</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        @can('role-create')
                            <a href="{{ route('admin.roles.create') }}" class="btn btn-success btn-sm">Create New Role</a>
                        @endcan
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-dark table-striped border shadow-lg" style="width:100%">
                            <thead class="text-center mx-auto">
                                <tr>
                                    <th class="fs-5">ID</th>
                                    <th class="fs-5">Role Name</th>
                                    <th class="fs-5">Guard Name</th>
                                    @can('role-edit')
                                    <th class="fs-5 text-center">Role Edit</th>
                                    @endcan
                                    @can('role-delete')
                                    <th class="fs-5 text-center">Role Delete</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->guard_name }}</td>
                                        @can('role-edit')
                                            <td class="text-center">
                                                <a class="btn btn-sm btn-primary" href="{{ route('admin.roles.edit',$role->id) }}"><i class='bx bxs-edit' ></i> Edit</a>
                                            </td>
                                        @endcan
                                        @can('role-delete')
                                            <td class="text-center">
                                                <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this role?')"><i class='bx bxs-trash'></i> Delete</button>
                                                </form>
                                            </td>                                      
                                        @endcan
                                    </tr>
                                @endforeach                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection