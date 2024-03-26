<div class="flex ">
    @can('payroll_date-show')
        <a href="{{ route('payroll_date.show', $url_address) }}" class="my-1 mx-1 view btn btn-success edit">
            {{ __('word.view') }}
        </a>
    @endcan
    @can('payroll_date-update')
        <a href="{{ route('payroll_date.edit', $url_address) }}" class="my-1 mx-1 view btn btn-warning">
            {{ __('word.edit') }}
        </a>
    @endcan
    @can('payroll_date-delete')
        <form action="{{ route('payroll_date.destroy', $url_address) }}" method="post" class="my-1 mx-1">
            @csrf
            @method('DELETE')
            <x-primary-button>
                {{ __('word.delete') }}
            </x-primary-button>
        </form>
    @endcan
</div>
