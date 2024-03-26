<table class="table table-striped">
    <thead>
        <th scope="col" width="70%">
            {{ __('word.salary_scales') }}
        </th>
        <th scope="col" width="30%">

            <div style="text-align: left">
                <form action="{{ route('tables.view') }}" method="post">
                    @csrf
                    <input type="hidden" name="table_name" value="salary_scales">
                    <button type="submit" class="btn btn-info w-25 text-dark ">{{ __('word.edit') }}</button>
                </form>
            </div>
        </th>
    </thead>
</table>
<table class="table table-striped">
    <thead>

        <th scope="col" width="30%">{{ __('word.job_grade_id') }}</th>
        <th scope="col" width="30%">{{ __('word.career_stage_id') }}</th>
        <th scope="col" width="30%">{{ __('word.nominal_salary') }}</th>
    </thead>

    @foreach ($salary_scales as $salary_scale)
        <tr>

            <td>{{ $salary_scale->get_job_grade->job_grade }}</td>
            <td>{{ $salary_scale->get_career_stage->career_stage }}</td>
            <td>{{ $salary_scale->salary }}</td>
        </tr>
    @endforeach
</table>
