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
                <ol class="breadcrumb">
                    <li><a href="{{ route("dashboard.index") }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a> </li>
                    <li><a href="{{ route("dashboard.employees.index") }}"><i class="fa fa-users"></i> @lang('site.employees')</a> </li>
                    <li class="active"><i class="fa fa-users"></i> @lang('site.statistics')</li>
                </ol>
            </section>
            <section class="content">
                <div class="card-container">
                    <h3 class="pro-right">@lang("site.statistics")</h3>
                    <h3 class="pro-top-left">@lang("site.today-date"){{ $dates }}</h3>
                    <div class="skills">
                      <div class="row">
                          <div class="flex-wrapper text-center">
                              <div class="col-lg-6 col-md-12 col-sm-12">
                                  <div class="single-chart">
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

                                              <text x="18" y="20.35" class="percentage">{{ $statistics->total_employees}}</text>
                                      </svg>
                                      <p class="text-center title">@lang("site.total-employees")</p>
                                  </div>
                              </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
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

                                                <text x="18" y="20.35" class="percentage">{{ $statistics->total_salaries}}</text>
                                        </svg>
                                        <p class="text-center title">@lang("site.total-salaries-emp")</p>
                                    </div>
                                </div>
                              </div>
                      </div>
                    </div>
                    <!-- /.box-body -->

                </div>

            </section><!-- end of content -->

        </div><!-- end of content wrapper -->
    </div>

@endsection


