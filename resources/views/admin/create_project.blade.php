@extends('case/indexAdmin')
@section('content')

    <div class="row">

        <div class="col-lg-12">

            <!-- Default Card Example -->
            <div class="card mb-6">
                <div class="card-header">
                    Create Project
                </div>
                @if(session('message'))
                    <span style="color: green">{{ session('message') }}</span>
                @endif
                @if(session('msg1'))
                    <span style="color: red">{{ session('msg1') }}</span>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.storeProject') }}">
                        @csrf
                        <div class="form-group">
                            <label for="inputAddress">Mã Dự Án</label>
                            <input type="text" name="code" class="form-control" id="inputAddress" placeholder="1A3D5HK9">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Tên Dự Án</label>
                            <input type="text" name="name" class="form-control" id="inputAddress2" placeholder="Vincom">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
