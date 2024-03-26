
@can('user-list')
    <a href="{{ route('user.index') }}">
        {{ __('word.user_search') }}
    </a>
@endcan
@can('user-create')
    <a href="{{ route('user.create')  }}" >
        {{ __('word.user_add') }}
    </a>
@endcan


