@extends('layouts.master')

@section('title') @lang('translation.Positive_News') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') News @endslot
        @slot('title') Positive News @endslot
    @endcomponent

    @php
        $routes = [
            'newsFetch' => route('news-fetch'),
        ]   
    @endphp

    <div class="row">
        <div class="col-12">
            <positive-news :routes='@json($routes)'></positive-news>
        </div>
    </div>

@endsection
