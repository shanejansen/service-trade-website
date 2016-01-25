@extends('layouts.base')

@section('base.body')
    <div ng-app="unauthedApp" ng-cloak layout="column" layout-fill>
        <div ng-controller="MainController as main" layout="column" layout-fill>
            <md-content layout="column" flex md-scroll-y>
                <div layout="column"> @yield('main.body')</div>
                <span layout="column" flex></span>
                <div layout="column"> @include('layouts.footer') </div>
            </md-content>
            @section('base.bodyJavaScript')
                <script src="/dist/js/unauthed.js"></script>
            @stop
        </div>
    </div>
@stop