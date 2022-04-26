@extends('layouts.master')

@section('title') @lang('translation.Positive_News') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') News @endslot
        @slot('title') Positive News @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <positive-news></positive-news>
        </div>
    </div>

@endsection
