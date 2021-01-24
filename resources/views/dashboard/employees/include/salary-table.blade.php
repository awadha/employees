<div class="table-wrapper">
    @if ($employees->count() > 0)
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
            @foreach($employees as $employee)
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
            @endforeach
            <tbody>
        </table>
    @else
        <h4 class="alert alert-info text-center">@lang("site.no_data")</h4>
    @endif

</div>