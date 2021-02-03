@extends('layouts.dashboard.app')
@section("title")
   @lang("site.employee") {{ $employee->name }}
@endsection
@section('content')
    <div class="employee">
        <div class="content-wrapper">
            <section class="content-header">
                <ol class="breadcrumb">
                    <li><a href="{{ route("dashboard.index") }}"><i class="fa fa-home"></i> @lang('site.dashboard')</a> </li>
                    <li><a href="{{ route("dashboard.employees.index") }}"><i class="fa fa-users"></i> @lang('site.employees')</a> </li>
                    <li class="active"><i class="fa fa-user"></i> {{ $employee->name }}</li>
                </ol>
            </section>
            <section class="content">
              <div class="card-container">
                  <span class="pro">@lang("site.number_employee"): {{ $employee->number }}</span>
                            <img  src="{{ $employee->image_path }}" title="{{ $employee->name }}" alt="user"/>
                            <h3 class="title">{{ $employee->name }}</h3>
                            <h6 class="title-block">@lang("site.age") : <span class="span-title">{{ $employee->age }}</span></h6>
                            <h6 class="title-block"><strong>@lang("site.address") : </strong> {{ $employee->address }}</h6>
                            <p class="title-block"> <i class="fa fa-calendar"></i>
                                @lang("site.date_employment") : {{ $employee->date_employment }}</p>
                            <div class="skills">
                                <h3 class="title">@lang("site.salary")</h3>
                                <div class="table-wrapper">
                                    <table class="fl-table">
                                        <thead>
                                        <tr>
                                            <th>@lang("site.name")</th>
                                            <th>@lang("site.salary")</th>
                                            <th>@lang("site.overtime")</th>
                                            <th>@lang("site.overtimeRate")</th>
                                            <th>@lang("site.abbsentDays")</th>
                                            <th>@lang("site.allowances")</th>
                                            <th>@lang("site.abbsentRate")</th>
                                            <th>@lang("site.advance")</th>
                                            <th>@lang('site.delay')</th>
                                            <th>@lang("site.tax")</th>
                                            <th>@lang("site.insurances")</th>
                                            <th>@lang("site.total")</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>{{ $employee->name }}</td>
                                                <td>{{ $employee->salary }} @lang("site.currency")</td>
                                                <td>{{ $employee->overtime }} @lang("site.hour")</td>
                                                <td>{{ $employee->overtimeRate }} @lang("site.currency")</td>
                                                <td>{{ $employee->abbsentDays }} @lang("site.days")</td>
                                                <td>{{ $employee->abbsentRate }} @lang("site.currency")</td>
                                                <td>{{  $employee->allowances }} @lang("site.currency")</td>
                                                <td>{{ $employee->advance }} @lang("site.currency")</td>
                                                <td>{{ $employee->delay }} @lang("site.currency")</td>
                                                <td>{{ $employee->tax }} ريال </td>
                                                <td>{{ $employee->insurances }} ريال </td>
                                                <td>{{ $employee->total }} @lang("site.currency")</td>
                                            </tr>
                                        <tbody>
                                    </table>
                                </div>
                                <h3 class="title">الحضور و الانصراف</h3>
                                <table class="fl-table">
                                    <thead>
                                    <tr>
                                        <th>@lang('site.attendees')</th>
                                        <th>@lang('site.leaving')</th>
                                        <th>@lang("site.late")</th>
                                        <th>@lang('site.leaveEarly')</th>
                                        <th>@lang("site.overtime")</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td> {{ $employee->attendees }} ص</td>
                                        <td>{{ $employee->leaving }} م</td>
                                        <td>{{ $employee->late }} </td>
                                        <td>{{ $employee->leaveEarly }} </td>
                                        <td>{{ $employee->overtime }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </section><!-- end of content -->

        </div><!-- end of content wrapper -->
    </div>

@endsection


