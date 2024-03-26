
@can('role-list')
    <a href="{{ route('role.index') }}">
        {{ __('word.role_search') }}
    </a>
@endcan
@can('role-create')
    <a href=" {{ route('role.create') }}" >
        {{ __('word.role_add') }}
    </a>
@endcan
