@extends('case/indexUser')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Order</h1>
{{--            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i--}}
{{--                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>--}}
        </div>

        <!-- Content Row -->
        <form method="post" action="#">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Họ và tên khách hàng</label>
                <input type="text" name="name" class="form-control" placeholder="Nguyễn Văn A">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Số điện thoại</label>
                <input type="text" name="phone" class="form-control" placeholder="0987552685">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Giới tính</label>
                <select class="form-control" name="sex">
                    <option value="nam">Nam</option>
                    <option value="nu">Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Sản phẩm</label>
                <select class="form-control" name="product">
                    <option value="nam">None</option>
                    <option value="nu">san pham 2</option>
                </select>
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="exampleFormControlSelect1">Sản phẩm</label>--}}
{{--                <select class="form-control" name="product">--}}
{{--                    @foreach($products as $key=>$product)--}}
{{--                        <option value="{{ $product->id }}">{{ $product->name }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
            <button type="submit" class="btn btn-primary">Create Order</button>
        </form>
    </div>

@endsection
