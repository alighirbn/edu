<div class="flex ">
    @can('facility-show')
        <a href="{{ route('facility.show', $url_address) }}" class="my-1 mx-1 view btn btn-success edit">
            {{ __('word.view') }}
        </a>
    @endcan
    @can('facility-update')
        <a href="{{ route('facility.edit', $url_address) }}" class="my-1 mx-1 view btn btn-warning">
            {{ __('word.edit') }}
        </a>
    @endcan
    @can('facility-delete')
        <form action="{{ route('facility.destroy', $url_address) }}" method="post" class="my-1 mx-1">
            @csrf
            @method('DELETE')
            <x-primary-button>
                {{ __('word.delete') }}
            </x-primary-button>
        </form>
    @endcan
</div>
