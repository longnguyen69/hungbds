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
                    <form method="POST" action="{{ route('admin.saveProject',['id'=>$projectOld->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label for="inputAddress">Mã Dự Án</label>
                            <input type="text" name="code" class="form-control" id="inputAddress" value="{{ $projectOld->code }}">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Tên Dự Án</label>
                            <input type="text" name="name" class="form-control" id="inputAddress2" value="{{ $projectOld->name }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
