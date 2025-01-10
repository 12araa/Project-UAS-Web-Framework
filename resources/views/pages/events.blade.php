@extends('layouts.adminMain')


@push('head-scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    window.confirmDelete = function(id, title) {
        Swal.fire({
            title: 'Delete Confirmation',
            text: `Are you sure you want to delete "${title}"?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(id).click();
            }
        });
    }
});

// Show success message if exists
@if(session('deleted'))
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('deleted') }}'
        });
    });
@endif
</script>
@endpush


@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Events</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Events</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card-tools d-flex justify-content-end pt-3">
            <a href="{{ route('event_create')}}" class="btn btn-primary">
                <i class="fas fa-plus me-2"> </i>
                Add event
            </a>
        </div>

        <div class="card">
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            No
                        </th>
                        <th style="width: 20%">
                            Title
                        </th>
                        <th style="width: 38%">
                            Content
                        </th>
                        <th>
                            Image
                        </th>
                        <th style="width: 10%">
                            Event Date
                        </th>
                        <th style="width: 20%">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($event as $key => $item)
                    <tr>
                        <td>
                            {{ $key + 1 }}
                        </td>
                        <td>
                            <a>
                                {{ $item->title }}
                            </a>
                            <br/>
                            <small>
                                Created {{ $item->created_at->format('d.m.Y') }}
                            </small>
                        </td>
                        <td>
                            <p class="description-preview">
                                {{ Str::limit($item->description, 150, '...') }}
                            </p>
                        </td>
                        <td class="img-thumbnail">
                            <img src="{{ url('storage/' . $item->image) }}" alt="" style="max-width: 200px;">
                        </td>
                        <td>
                            {{ $item->event_date }}
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('event_show', $item->id)}}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('event_edit', $item->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('btndelete{{ $item->id }}', '{{ $item->title }}')">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button>
                            <form action="{{ route('event_destroy', $item->id) }}" method="POST" style="display:none">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="hidden" style="display: none" id="btndelete{{ $item->id }}"></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
</div>
@endsection
