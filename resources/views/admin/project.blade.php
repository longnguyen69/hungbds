@extends('case/indexAdmin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Project</h1>
{{--            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i--}}
{{--                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>--}}
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="icon-plus-sign"></i> Create Project</a>
        </div>

        <!-- Content Row -->
{{--        <div class="row">--}}
{{--            @yield('content')--}}
{{--        </div>--}}
    </div>
    <!-- /.container-fluid -->
    <table class="table table-success table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Code</th>
            <th scope="col">Name</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($project as $key->value)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $value->code }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->created_at }}</td>
                <td>
                    <a href="#">Edit</a>
                </td>
            </tr>

        @empty
                <h5>Bạn chưa tạo danh sách</h5>
        @endforelse
        </tbody>
    </table>
@endsection
