@extends('case/indexAdmin')
@section('content')
    <div class="card mb-6">
        <div class="card-header">
            Create Building
        </div>
        @if(session('message'))
            <span style="color: green">{{ session('message') }}</span>
        @endif
        @if(session('msg1'))
            <span style="color: red">{{ session('msg1') }}</span>
        @endif
        <div class="card-body">
            <form method="post" action="{{ route('admin.buildingStore') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Code</label>
                    <input type="text" name="code" class="form-control" placeholder="ABC12">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Toa Hateco">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Project</label>
                    <select class="form-control" name="project">
                        @foreach($project as $key=>$value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create Building</button>
            </form>
        </div>
    </div>
@endsection
