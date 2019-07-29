@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">@lang('events.events')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Events</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row bt-row">
                    <div class="col-md-12 right">
                        <a href="javascript:void(0)" class="btn btn-primary btn-sm" >@lang('default.new')</a>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-bordered table-striped table-hover dataTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>@lang('default.name')</th>
                            <th>@lang('events.target')</th>
                            <th>@lang('events.progress')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td>{{$event->id}}</td>
                                <td>{{$event->name}}</td>
                                <td>{{$event->target}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $events->links() }}
                </div>
            </div>
        </section>
    </div>
@endsection
