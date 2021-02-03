@extends("layouts.dashboard.app")
@section("title")
@lang("site.le-at")
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="{{ route("dashboard.index") }}"><i class="fa fa-home"></i> @lang('site.dashboard')</a> </li>
                <li><a href="{{ route("dashboard.employees.index") }}"><i class="fa fa-users"></i> @lang('site.employees')</a> </li>
                <li class="active"> @lang('site.le-at')</li>
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
                            <form action="{{ route("dashboard.employee.getOvertime") }}" method="get">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" type="search" name="search" placeholder="@lang("site.search")" />
                                </div>
                            </form>
                        </div>
                    </div>
                    @if ($employees->count() > 0)
                        <table class="fl-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang("site.number_employee")</th>
                                <th>@lang("site.name")</th>
                                <th>@lang('site.attendees')</th>
                                <th>@lang('site.leaving')</th>
                                <th>@lang("site.late")</th>
                                <th>@lang('site.leaveEarly')</th>
                                <th>@lang("site.overtime")</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{$employee->id}}</td>
                                    <td>{{ $employee->number }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td> {{ $employee->attendees }} ص</td>
                                    <td>{{ $employee->leaving }} م</td>
                                    <td>{{ $employee->late }} </td>
                                    <td>{{ $employee->leaveEarly }} </td>
                                    <td>{{ $employee->overtime }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4 class="alert alert-info text-center">@lang("site.no_data")</h4>
                    @endif
                            <div class="chart" id="line-chart" style="height: 200px;"></div>
                </div>
            </div>
        </section><!-- end of content -->

    </div><!-- end of content wrapper -->
@stop