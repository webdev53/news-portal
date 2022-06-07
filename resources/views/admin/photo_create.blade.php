@extends('admin.layout.app')

@section('heading', 'Add Photo')

@section('button')

<a href="{{ route('admin_photo_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>

@endsection

@section('main_content')

<div class="section-body">
  <form action="{{ route('admin_photo_store') }}" method="post" enctype="multipart/form-data">
    @csrf
  <div>
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-body">

              <div class="form-group mb-3">
                <label>Photo* </label>
                <div><input type="file" name="photo"></div>
              </div>

              <div class="form-group mb-3">
                <label>Caption* </label>
                <input type="text" class="form-control" name="caption">
              </div>

          </div>
        </div>
      </div>
    </div>
    
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
</div>

@endsection