@extends("layouts.dashboard.app")
@section("title")
@lang("site.le-at")
@endsection
@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <div class="title-top">
                <h4>@lang('site.le-at')</h4>
            </div>

            <ol class="breadcrumb">
                <li><a href="{{ route("dashboard.index") }}"><i class="fa fa-home"></i> @lang('site.dashboard')</a> </li>
                <li><a href="{{ route("dashboard.employees.index") }}"><i class="fa fa-users"></i> @lang('site.employees')</a> </li>
                <li class="active"><i class="fa fa-users"></i> @lang('site.le-at')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-solid">

                <div class="box-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="box-title">@lang("site.le-at")</h3>
                        </div>
                        <div class="col-md-6">
                            <form method="get">
                                <input name="search" type="search" placeholder="بحث"/>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="overtime">
                  @if ($employees->count() > 0)
                        <table class="table text-center">
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

                   {{ $employees->appends(request()->query())->links() }}

                </div>
                <!-- /.box-body -->

            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@stop