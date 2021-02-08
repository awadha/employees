@extends('layouts.dashboard.app')
@section("title")
@lang("site.employees")
@endsection
@section('content')
    <div class="employee">
        <div class="content-wrapper">
            <section class="content-header">
                <ol class="breadcrumb">
                    <li><a href="{{ route("dashboard.index") }}"><i class="fa fa-home"></i> @lang('site.dashboard')</a> </li>
                    <li class="active"><i class="fa fa-users"></i> @lang('site.employees')</li>
                </ol>
            </section>
            @php
            $dates = date('Y / m / d')
            @endphp
            <section class="content">
               <div class="card-container">
                   <h3 class="pro-right">@lang("site.employees")</h3>
                   <h3 class="pro-top-left">@lang("site.today-date"){{ $dates }}</h3>
                   <div class="skills">
                       @if ($employees->count() > 0)
                           <div class="row">
                               <div class="col-md-6">
                                   <form action="{{ route("dashboard.employees.index") }}" method="get">
                                       @csrf
                                       <div class="form-group">
                                           <input class="form-control" type="search" name="search" placeholder="@lang("site.search")" />
                                       </div>
                                   </form>
                               </div>
                           </div>
                           <div class="row">
                               @foreach ($employees as $employee)
                                   <div class="col-sm-6 col-md-4">
                                       <div class="cards text-center">
                                           <header>
                                               <h3 class="pro-right">@lang("site.number_employee") {{ $employee->number }}</h3>
                                               <img class="img-thumbnail" src="{{ $employee->image_path }}" alt="@lang("site.name")" />
                                           </header>
                                           <div class="box-card">
                                               <h4><span>@lang("site.name") </span> {{ $employee->name }}</h4>
                                               <p>@lang("site.total_salary") <span>{{ $employee->total }}</span></p>
                                               <a class="btn buttons-color" target="_blank" href="{{ route("dashboard.employee.show", $employee->id) }}">@lang("site.moving")</a>
                                           </div>
                                       </div>
                                   </div>
                               @endforeach
                           </div>
                       @else
                           <h4 class="alert alert-info text-center">@lang("site.no_data")</h4>
                       @endif

                       <div class="box-body border-radius-none">
                           <div class="chart" id="line-chart" style="height: 250px;"></div>
                       </div>
                   </div>
               </div>
            </section><!-- end of content -->

        </div><!-- end of content wrapper -->
    </div>

@endsection


