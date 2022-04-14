@extends('case/indexAdmin')
@section('content')
    <div class="card mb-6">
        <div class="card-header">
{{--            Building List--}}
{{--            <a href="{{ route('admin.createProject') }}"--}}
{{--               class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i--}}
{{--                    class="icon-plus-sign"></i> Create Project</a>--}}
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Building List</h1>

                <a href="{{ route('admin.buildingCreate') }}"
                   class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="icon-plus-sign"></i> Create Building</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-success table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Project</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($index as $key=>$value)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $value->code }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->id_duan }}</td>
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
        </div>
    </div>
@endsection
