@extends('layouts.adminMain')

@section('content')

<div class="content-wrapper">
    <div class="card card-primary px-4 py-4">
        <div class="card-header">
          <h3 class="card-title">Add news</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('news_update', $news->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="inputTitle">Title</label>
              <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $news->title) }}" placeholder="Input Title">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Image input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>

                @if($news->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $news->image) }}" alt="Current Image" class="img-thumbnail" style="max-height: 200px;">
                        <p class="text-muted">Current image</p>
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter ...">{{ old('content', $news->content) }}</textarea>
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
