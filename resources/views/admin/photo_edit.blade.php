@extends('admin.layout.app')

@section('heading', 'Edit Photo')

@section('button')

<a href="{{ route('admin_photo_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>

@endsection

@section('main_content')

<div class="section-body">
  <form action="{{ route('admin_photo_update', $photo_data->id) }}" method="post" enctype="multipart/form-data">
    @csrf
  <div>
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-body">

              <div class="form-group mb-3">
                <label>Existing Photo* </label>
                <div>
                  <img src="{{ asset('uploads/'.$photo_data->photo) }}" style="width:200px;" alt="">
                </div>
              </div>

              <div class="form-group mb-3">
                <label>Change Photo* </label>
                <div><input type="file" name="photo"></div>
              </div>

              <div class="form-group mb-3">
                <label>Caption* </label>
                <input type="text" class="form-control" name="caption" value="{{ $photo_data->caption }}">
              </div>

          </div>
        </div>
      </div>
    </div>
    
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
  </form>
</div>

@endsection