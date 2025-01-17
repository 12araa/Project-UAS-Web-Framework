@extends('layouts.adminMain')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $ticketCount ?? 0 }}</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $userCount ?? 0 }}</h3>

                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

<!-- News List -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="ion ion-clipboard mr-1"></i>
                News
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <ul class="todo-list" data-widget="todo-list">
                @forelse ($news as $item)
                    <div>
                        <a href="{{ route('news_show', $item->id) }}">
                            {{ $item->title }}
                        </a>
                        <br/>
                        <small>
                            Created {{ $item->created_at->format('d.m.Y') }}
                        </small>
                    </div>
                @empty
                    <li class="text-center">No news available</li>
                @endforelse
                </ul>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    Event
                </h3>
            </div>
        <!-- /.card-header -->
            <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                    @forelse ($event as $item)
                        <div>
                            <a href="{{ route('event_show', $item->id) }}">
                                {{ $item->title }}
                            </a>
                            <br/>
                            <small>
                                Created {{ $item->created_at->format('d.m.Y') }}
                            </small>
                        </div>
                    @empty
                        <li class="text-center">No event available</li>
                    @endforelse
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

    </section>
    <!-- /.content -->
  </div>

    @endsection
