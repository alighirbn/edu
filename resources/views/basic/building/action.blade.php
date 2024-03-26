<div class="flex ">
    @can('building-show')
        <a href="{{ route('building.show', $url_address) }}" class="my-2 mx-2 view btn btn-success edit">
            {{ __('word.view') }}
        </a>
    @endcan
    @can('building-update')
        <a href="{{ route('building.edit', $url_address) }}" class="my-2 mx-2 view btn btn-warning">
            {{ __('word.edit') }}
        </a>
    @endcan
    @can('building-delete')
        <form action="{{ route('building.destroy', $url_address) }}" method="post" class="my-2 mx-2">
            @csrf
            @method('DELETE')
            <x-primary-button class="ml-4">
                {{ __('word.delete') }}
            </x-primary-button>
        </form>
    @endcan
</div>
