@extends('layouts.adminMain')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Gallery</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                <h4 class="card-title">News & Events Gallery</h4>
                </div>
                <div class="card-body">
                <div>
                    <div class="btn-group w-100 mb-2">
                    <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="news"> News </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="event"> Events </a>
                    </div>
                    <div class="mb-2">
                    <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                    <div class="float-right">
                        <select class="custom-select" style="width: auto;" data-sortOrder>
                        <option value="index"> Sort by Position </option>
                        <option value="sortData"> Sort by Date </option>
                        </select>
                        <div class="btn-group">
                        <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                        <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                        </div>
                    </div>
                    </div>
                </div>
                <div>
                    <div class="filter-container p-0 row">
                        @foreach($allImages as $item)
                        <div class="filtr-item col-sm-2" data-category="{{ $item['type'] }}" data-sort="{{ $item['created_at'] }}">
                            <a href="{{ $item['route'] }}" data-toggle="lightbox" data-title="{{ $item['title'] }}">
                                <img src="{{ url('storage/' . $item['image']) }}" class="img-fluid mb-2" alt="{{ $item['title'] }}"/>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@push('scripts')
<script>
$(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        // window.location.href = $(this).attr('href');
    });

    $('.filter-container').filterizr({
        gutterPixels: 3
    });
    $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
    });
});
</script>
@endpush


