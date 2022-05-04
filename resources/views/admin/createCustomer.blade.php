@extends('case/indexAdmin')
@section('content')
    @if(session('msg'))
        <span style="color: green">{{ session('msg') }}</span>
    @endif
    <div class="card">
        <div class="card-header">
            Create Customer
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('admin.customer.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" name="phone1">
                </div>
                <select class="form-select" aria-label="Default select example" name="type">
                    <option value="1">Người bán</option>
                    <option value="2">Người mua</option>
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
