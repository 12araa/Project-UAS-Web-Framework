@extends('layouts.adminMain')

@section('content')

<div class="content-wrapper">
    <div class="card card-primary px-4 py-4">
        <div class="card-header">
          <h3 class="card-title">Add news</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('news_store')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
            <div class="form-group">
              <label for="inputTitle">Title</label>
              <input class="form-control" name="title" id="title" type="text" placeholder="Input Title">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Image input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" accept="image/*" name="image" id="image" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea class="form-control" name="content" id="content" rows="10" placeholder="Enter ..."></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          <!-- /.card-body -->
        </form>
      </div>
</div>


@endsection
