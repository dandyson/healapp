@extends('layouts.master')

@section('title') @lang('translation.Pomodoro_Timer') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Timers @endslot
        @slot('title') Pomodoro Timer @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            component here
            <example-component></example-component>
        </div>
    </div>

@endsection
