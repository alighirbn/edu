<div class="flex ">
    @can('employee-show')
        <a href="{{ route('employee.show', $url_address) }}" class="my-1 mx-1 view btn btn-success edit">
            {{ __('word.view') }}
        </a>
    @endcan
    @can('employee-update')
        <a href="{{ route('employee.edit', $url_address) }}" class="my-1 mx-1 view btn btn-warning">
            {{ __('word.edit') }}
        </a>
    @endcan
    @can('employee-delete')
        <form action="{{ route('employee.destroy', $url_address) }}" method="post" class="my-1 mx-1">
            @csrf
            @method('DELETE')
            <x-primary-button>
                {{ __('word.delete') }}
            </x-primary-button>
        </form>
    @endcan
</div>
