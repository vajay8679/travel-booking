@extends('layouts.app')
@push('css')
    <link href="{{ asset('dist/frontend/module/car/css/car.css?_ver='.config('app.asset_version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css") }}"/>
@endpush
@section('content')
    <div class="bravo_search_car">
        <div class="bravo_banner" @if($bg = setting_item("car_page_search_banner")) style="background-image: url({{get_file_url($bg,'full')}})" @endif >
            <div class="container">
                <h1>
                    {{setting_item_with_lang("car_page_search_title")}}
                </h1>
            </div>
        </div>
        <div class="bravo_form_search">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        @include('Car::frontend.layouts.search.form-search')
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            @include('Car::frontend.layouts.search.list-item')
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript" src="{{ asset("libs/ion_rangeslider/js/ion.rangeSlider.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset('js/filter.js?_ver='.config('app.asset_version')) }}"></script>
    <script type="text/javascript" src="{{ asset('module/car/js/car.js?_ver='.config('app.asset_version')) }}"></script>
@endpush
