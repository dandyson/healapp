@extends('layouts.master')

@section('title') @lang('translation.Meditation_Timer') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Timers @endslot
        @slot('title') Meditation Timer @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <meditation-timer></meditation-timer>
        </div>
    </div>

@endsection
