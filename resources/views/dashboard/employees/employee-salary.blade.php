@extends("layouts.dashboard.app")
@section("title")
@lang("site.salary-register")
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="{{ route("dashboard.index") }}"><i class="fa fa-home"></i> @lang('site.dashboard')</a> </li>
                <li><a href="{{ route("dashboard.employees.index") }}"><i class="fa fa-users"></i> @lang('site.employees')</a> </li>
                <li class="active"> @lang("site.salary-register")</li>
            </ol>
        </section>
        @php
            $dates =  date('Y / m / d')
        @endphp
        <section class="content">
            <div class="card-container">
                <h3 class="pro-right">@lang("site.le-at")</h3>
                <h3 class="pro-top-left">@lang("site.today-date"){{ $dates }}</h3>
                <div class="skills">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ route("dashboard.employee.getSalary") }}" method="get">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" type="search" name="search" placeholder="@lang("site.search")" />
                                </div>
                            </form>
                        </div>
                    </div>
                    @if ($employees->count() > 0)
                    @include("dashboard.employees.include.salary-table")
                    @endif
                </div>

            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->
@stop