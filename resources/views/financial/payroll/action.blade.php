<div class="flex ">
    @can('payroll-show')
        <a href="{{ route('payroll.show', $row->url_address) }}" class="my-1 mx-1 view btn btn-success edit">
            {{ __('word.view') }}
        </a>
    @endcan
</div>
