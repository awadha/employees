@extends('layouts.dashboard.app')
@section('title')
 @lang("site.dashboard")
@stop
@section('content')
{{--    <div class="content">
        <div class="content-wrapper">
            <section class="content-header">
                <ol class="breadcrumb">
                    <li class="active"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                </ol>
            </section>
            <section class="content">
                <div class="box box-solid">
                    <ul class="test">
                        <li>
                            <a href="{{ route("dashboard.employees.index") }}"><i class="fa fa-users fa-2x"></i>
                            </a>
                            <span>@lang("site.employees")</span>
                        </li>
                        <li>
                            <a href="{{ route("dashboard.employee.getSalary") }}"><i class="fa fa-money fa-2x"></i>
                            </a>
                            <span>@lang("site.salary")</span>
                        </li>
                        <li>
                            <a href="{{ route("dashboard.employee.getOvertime") }}"><i class="fa fa-clock-o fa-2x"></i>
                            </a>
                            <span>@lang("site.le-at")</span>
                        </li>
                        <li>
                            <a href="{{route('dashboard.statistics')}}"><i class="fa fa-pie-chart fa-2x"></i>
                            </a>
                            <span>@lang("site.statistics")</span>
                        </li>
                    </ul>

                    <div class="box-body border-radius-none">
                        <div class="chart" id="line-chart" style="height: 250px;"></div>
                    </div>
                    <!-- /.box-body -->

                </div>

            </section><!-- end of content -->

        </div><!-- end of content wrapper -->
    </div>--}}

    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="{{ route("dashboard.index") }}"><i class="fa fa-home"></i> @lang('site.dashboard')</a> </li>
            </ol>
        </section>
        @php
            $dates =  date('Y / m / d')
        @endphp
        <section class="content">
            <div class="card-container">
                <h3 class="pro-right">@lang("site.dashboard")</h3>
                <h3 class="pro-top-left">@lang("site.today-date"){{ $dates }}</h3>
                <div class="skills">
                    <ul class="test">
                        <li>
                            <a href="{{ route("dashboard.employees.index") }}"><i class="fa fa-users fa-2x"></i>
                            </a>
                            <span>@lang("site.employees")</span>
                        </li>
                        <li>
                            <a href="{{ route("dashboard.employee.getSalary") }}"><i class="fa fa-money fa-2x"></i>
                            </a>
                            <span>@lang("site.salary")</span>
                        </li>
                        <li>
                            <a href="{{ route("dashboard.employee.getOvertime") }}"><i class="fa fa-clock-o fa-2x"></i>
                            </a>
                            <span>@lang("site.le-at")</span>
                        </li>
                        <li>
                            <a href="{{route('dashboard.statistics')}}"><i class="fa fa-pie-chart fa-2x"></i>
                            </a>
                            <span>@lang("site.statistics")</span>
                        </li>
                    </ul>
                    <div class="chart" id="line-chart" style="height: 200px;"></div>
                </div>
            </div>
        </section><!-- end of content -->

    </div><!-- end of content wrapper -->
@endsection

@push('scripts')

    <script>


    </script>

@endpush
