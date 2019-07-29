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
                            <li class="breadcrumb-item"><a href="#">@lang('default.home')</a></li>
                            <li class="breadcrumb-item">@lang('events.events')</li>
                            <li class="breadcrumb-item active">@lang('events.add_edit_event')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                {{ Form::open(['action' => 'EventsController@store', 'id' => 'events_form']) }}
                {!! Form::hidden('id', old('id')??$event->id??'', ['id' => 'id']) !!}
                <div class="row bt-row">
                    <div class="col-md-12 right">
                        <a href="{{route('events')}}" class="btn btn-default btn-sm">@lang('default.back')</a>
                        <button type="submit" class="btn btn-success btn-sm">@lang('default.save')</button>
                    </div>
                </div>
                <div class="row bt-row">
                    <h3>@lang('events.add_edit_event')</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>@lang('default.name')</label>
                            <input type="text" class="form-control" name="name" id="name"/>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>@lang('events.target')</label>
                        <input type="datetime-local" class="form-control" name="target" id="target"/>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
@endsection
