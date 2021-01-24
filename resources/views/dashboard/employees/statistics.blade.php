@extends('layouts.dashboard.app')
@section("title")
    @lang("site.statistics")
 @endsection
@section('content')
    <div class="employee">
        <div class="content-wrapper">
            @php
                $dates =  date('Y / m / d')
            @endphp
            <section class="content-header">

                <div class="title-top">
                    <h4>@lang('site.statistics')</h4>
                </div>

                <ol class="breadcrumb">
                    <li><a href="{{ route("dashboard.index") }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a> </li>
                    <li><a href="{{ route("dashboard.employees.index") }}"><i class="fa fa-users"></i> @lang('site.employees')</a> </li>
                    <li class="active"><i class="fa fa-users"></i> @lang('site.statistics')</li>
                </ol>
            </section>
            <section class="content">

                <div class="box box-solid">

                    <div class="box-header">
                       <div class="row">
                           <div class="col-md-6">
                               <h3 class="box-title">@lang("site.statistics")</h3>
                           </div>
                           <div class="col-md-6">
                               <p class="text-left"><strong>  تارريخ اليوم </strong>{{ $dates }}</p>
                           </div>
                       </div>

                    </div>
                    <div class="box-body border-radius-none">
                      <div class="row">
                          <div class="col-md-12">
                              @foreach ($employees as $employee)
                              <div class="flex-wrapper">
                                  <div class="single-chart">
                                      <span>اجمالي عدد الموظفين</span>
                                      <svg viewBox="0 0 36 36" class="circular-chart orange">
                                          <path class="circle-bg"
                                                d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
                                          />
                                          <path class="circle"
                                                stroke-dasharray="30, 100"
                                                d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
                                          />
                                          <text x="18" y="20.35" class="percentage">{{ $employee->totalEmployees }}</text>
                                      </svg>
                                  </div>

                                  <div class="single-chart">
                                      <svg viewBox="0 0 36 36" class="circular-chart blue">
                                          <path class="circle-bg"
                                                d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
                                          />
                                          <path class="circle"
                                                stroke-dasharray="90, 100"
                                                d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"
                                          />
                                          <text x="18" y="20.35" class="percentage">{{ $employee->totalSalaries }} </text>
                                      </svg>
                                      <p class="text-center">اجمال رواتب الموظفين بالريال</p>
                                  </div>
                              </div>
                              @endforeach

                          </div>
                      </div>
                    </div>
                    <!-- /.box-body -->

                </div>

            </section><!-- end of content -->

        </div><!-- end of content wrapper -->
    </div>

@endsection


