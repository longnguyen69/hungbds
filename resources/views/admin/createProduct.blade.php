@extends('case/indexAdmin')
@section('content')
    <div class="card mb-6">
        <div class="card-header">
            Create Product
        </div>
        @if(session('message'))
            <span style="color: green">{{ session('message') }}</span>
        @endif
        @if(session('msg1'))
            <span style="color: red">{{ session('msg1') }}</span>
        @endif
        <div class="card-body">
            <form method="post" action="{{ route('admin.productStore') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Code</label>
                    <input type="text" name="code" class="form-control" placeholder="thong tin bds">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="can ho">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Hướng ban công</label>
                    <input type="text" name="view" class="form-control" placeholder="huong ban cong">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Hướng cửa</label>
                    <input type="text" name="huong" class="form-control" placeholder="huong cua">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Furniture</label>
                    <input type="text" name="noithat" class="form-control" placeholder="noi that">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Area</label>
                    <input type="text" name="dientich" class="form-control" placeholder="dien tich">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">bedroom</label>
                    <input type="text" name="sophongngu" class="form-control" placeholder="phong ngu">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Toilet</label>
                    <input type="text" name="sophongtam" class="form-control" placeholder="so phong tam">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">gia</label>
                    <input type="text" name="gia" class="form-control" placeholder="Gia">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tang</label>
                    <input type="text" name="tang" class="form-control" placeholder="Tang">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">dia chi</label>
                    <input type="text" name="diachi" class="form-control" placeholder="dia chi">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tên chủ nhà</label>
                    <input type="text" name="name_chunha" class="form-control" placeholder="Tên chủ nhà">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Số điện thoại chủ nhà</label>
                    <input type="text" name="phone_chunha" class="form-control" placeholder="điện thoại chủ nhà">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Project</label>
                    <select class="form-control" name="toa">
                        @foreach($project as $key=>$value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">loai hinh</label>
                    <select class="form-control" name="type">
                        <option value="chungcu" selected>Chung cu</option>
                        <option value="nhadat">nha dat</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create Product</button>
            </form>
        </div>
    </div>
@endsection
