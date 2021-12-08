@extends('layouts.app')
@section('title', 'Danh sách người dùng')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <ion-icon name="home-outline"><a href="#">Home</a></ion-icon>
                        <li class="breadcrumb-item active">Danh sách người dùng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="col-12 card-title">
                                <div class="row">
                                    <div class="col-12 col-md-2">
                                        @can('user-crud')
                                            <a class="btn btn-success" href="{{ route('users.create') }}">Thêm mới</a>
                                        @endcan
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <input type="text" class="form-control " id="search-user">
                                        <ul id="list-user-search" class="list-group"></ul>
                                    </div>
                                </div>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Chức vụ</th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if (count($user->roles) > 0)
                                                    @foreach ($user->roles as $role)
                                                        {{ $role->name . ',' }}
                                                    @endforeach
                                                @else
                                                    {{ 'chưa phân loại' }}
                                                @endif
                                            </td>

                                            <td>
                                                <a href="{{ route('users.update', ['id' => $user->id]) }}"
                                                    class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                <a onclick="return confirm('bạn có muốn xóa {{ $user->name }} không?')"
                                                    href="{{ route('users.delete', ['id' => $user->id]) }}"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
