@extends('admin.layout.app')

@section('heading', 'Add Post')

@section('button')

<a href="{{ route('admin_post_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>

@endsection

@section('main_content')

<div class="section-body">
  <form action="{{ route('admin_post_store') }}" method="post" enctype="multipart/form-data">
    @csrf
  <div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

              <div class="form-group mb-3">
                <label>Post Title *</label>
                <input type="text" class="form-control" name="post_title" value="">
              </div>
              <div class="form-group mb-3">
                <label>Post Detail *</label>
                <textarea name="post_detail" class="form-control snote" id="" cols="30" rows="10"></textarea>
              </div>

              <div class="form-group mb-3">
                <label>Post Photo *</label>
               <div>
                  <input type="file" class="form-control" name="post_photo">
               </div>
              </div>

              <div class="form-group mb-3">
                <label>Select Category *</label>
                <select name="sub_category_id" class="form-control" id="">
                  @foreach($sub_categories as $item)
                    <option value="{{ $item->id }}">{{ $item->sub_category_name }} ({{ $item->rCategory->category_name }})</option>                
                  @endforeach
                </select>
              </div>

              <div class="form-group mb-3">
                <label>Is Sharable?</label>
                <select name="is_share" class="form-control" id="">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>

              <div class="form-group mb-3">
                <label>Is Commentable?</label>
                <select name="is_comment" class="form-control" id="">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
              
              <div class="form-group mb-3">
                <label>Tags</label>
                <input type="text" name="tags" class="form-control" id="">
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