@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>My Ticket</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('history_index')}}">Home</a></li>
                        <li class="breadcrumb-item active">My Ticket</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-body p-0">
                @if ($tickets->isEmpty())
                    <div class="text-center py-5">
                        <h3>Maaf, tiketmu belum ada.</h3>
                        <p>Silakan booking tiket terlebih dahulu.</p>
                        <a href="{{ route('tickets.index') }}" class="btn btn-primary">
                            Booking Tiket
                        </a>
                    </div>
                @else
                    <!-- Jika tiket tersedia -->
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 30%">
                                    Ticket
                                </th>
                                <th style="width: 8%">
                                    Quantity
                                </th>
                                <th style="width: 15%">
                                    Date
                                </th>
                                <th style="width: 25%">
                                    Total Price
                                </th>
                                <th style="width: 8%" class="text-center">
                                    Status
                                </th>
                                <th style="width: 20%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                            <tr>
                                <td>
                                    <a>
                                        {{ $ticket->id }}
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        {{ $ticket->tickets }}
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        {{ $ticket->date }}
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        {{ $ticket->total_price }}
                                    </a>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-success">Success</span>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ route('ticket.show') }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>

@endsection
