@extends('admin.layout.app')

@section('heading', 'Top Advertisements')

@section('main_content')

<div class="section-body">
  <form action="{{ route('admin_top_ad_update') }}" method="post" enctype="multipart/form-data">
    @csrf
  <div>
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h5>Top Ad Section</h5>
            

              <div class="form-group mb-3">
                <label>Existing Photo - 1</label>
                <div>
                  <img src="{{ asset('uploads/'.$top_ad_data->top_ad_one) }}" style="width:100%;" alt="">
                </div>
              </div>

              <div class="form-group mb-3">
                <label>Photo</label>
                <div>
                  <input type="file" name="top_ad_one">
                </div>
              </div>

              <div class="form-group mb-3">
                <label>URL</label>
                <input type="text" class="form-control" name="top_ad_one_url" value="{{ $top_ad_data->top_ad_one_url }}">
              </div>

              <div class="form-group mb-3">
                <label>Status</label>
                <select name="top_ad_one_status" class="form-control" id="">
                  <option value="Show" @if($top_ad_data->top_ad_one_status == 'Show') selected @endif >Show</option>
                  <option value="Hide" @if($top_ad_data->top_ad_one_status == 'Hide') selected @endif>Hide</option>
                </select>
              </div>
              
              
          
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h5>Top Ad Section</h5>
            

              <div class="form-group mb-3">
                <label>Existing Photo - 2</label>
                <div>
                  <img src="{{ asset('uploads/'.$top_ad_data->top_ad_two) }}" style="width:100%;" alt="">
                </div>
              </div>

              <div class="form-group mb-3">
                <label>Photo</label>
                <div>
                  <input type="file" name="top_ad_two">
                </div>
              </div>

              <div class="form-group mb-3">
                <label>URL</label>
                <input type="text" class="form-control" name="top_ad_two_url" value="{{ $top_ad_data->top_ad_two_url }}">
              </div>

              <div class="form-group mb-3">
                <label>Status</label>
                <select name="top_ad_two_status" class="form-control" id="">
                  <option value="Show" @if($top_ad_data->top_ad_two_status == 'Show') selected @endif >Show</option>
                  <option value="Hide" @if($top_ad_data->top_ad_two_status == 'Hide') selected @endif>Hide</option>
                </select>
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