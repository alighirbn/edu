
@can('employee-list')
    <a href="{{ route('employee.index') }} ">
        {{ __('word.employee_search') }}
    </a>
@endcan

@can('facility-list')
    <a href="{{ route('facility.index')}} "  >
        {{ __('word.facility_search') }}
    </a>
@endcan

@can('building-list')
    <a href="{{route('building.index')}} " >
        {{ __('word.building_search') }}
    </a>
@endcan

