@extends('case/indexAdmin')
@section('content')
    <div class="card mb-6">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Products List</h1>

                <a href="{{ route('admin.productCreate') }}"
                   class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="icon-plus-sign"></i> Create Product</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-success table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Building</th>
                    <th scope="col">Project</th>
                    <th scope="col">Address</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @forelse($products as $key=>$product)
{{--                    {{dd($value->toa)}}--}}
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $product->code }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->id_toa }}</td>
{{--                        <td>{{ $product->building->id }}</td>--}}
                        <td>{{ $product->id_address }}</td>
                        <td>{{ $product->created_at }}</td>
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
