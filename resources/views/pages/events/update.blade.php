@extends('layouts.adminMain')

@section('content')

<div class="content-wrapper">
    <div class="card card-primary px-4 py-4">
        <div class="card-header">
          <h3 class="card-title">Add events</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('event_update', $event->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <div class="card-body">
            <div class="form-group">
              <label for="inputTitle">Title</label>
              <input class="form-control" name="title" id="title" type="text" value="{{ old('title', $event->title)}}" placeholder="Input Title">
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

              @if($event->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $event->image) }}" alt="Current Image" class="img-thumbnail" style="max-height: 200px;">
                        <p class="text-muted">Current image</p>
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" id="description" rows="5" placeholder="Enter ...">{{ old('description', $event->description)}}</textarea>
            </div>
            <div class="form-group">
                <label for="event_date">Event Date</label>
                <input type="date" class="form-control" name="event_date" value="{{ old('event_date', $event->event_date)}}" id="event_date">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          <!-- /.card-body -->
        </form>
      </div>
</div>


<style>
    input[type="date"] {
        cursor: pointer;
        position: relative;
    }

    input[type="date"]::-webkit-calendar-picker-indicator {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }
</style>

@endsection
