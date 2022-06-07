@extends('admin.layout.app')

@section('heading', 'Photos')

@section('button')

<a href="{{ route('admin_photo_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>

@endsection

@section('main_content')

<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="example1">
              <thead class="text-center">
                <tr>
                  <th>SL</th>
                  <th>Photo</th>
                  <th>Caption</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody class="text-center">

                @foreach ($photos as $row)
                <tr>
                  <td>{{ $loop->iteration }}</td>                 
                  <td>
                    <img src="{{ asset('uploads/'.$row->photo) }}" style="width:200px;" alt="">
                  </td>
                  <td>{{ $row->caption }}</td>
                  <td class="pt_10 pb_10">
                    <a href="{{ route('admin_photo_edit', $row->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin_photo_delete', $row->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection