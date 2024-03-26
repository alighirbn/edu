<x-app-layout>

    <x-slot name="header">

        @include('financial.nav.navigation')

    </x-slot>

    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    @include('financial.financial_default.parts.contract_type')
                    @include('financial.financial_default.parts.assignment_type')
                    @include('financial.financial_default.parts.marital_status')
                    @include('financial.financial_default.parts.children_count')
                    @include('financial.financial_default.parts.danager_provision')
                    @include('financial.financial_default.parts.academic_achievement')
                    @include('financial.financial_default.parts.scientific_title_stage')
                    @include('financial.financial_default.parts.university_service')
                    @include('financial.financial_default.parts.driver_allowance')
                    @include('financial.financial_default.parts.security_guard')
                    @include('financial.financial_default.parts.night_watchman')
                    @include('financial.financial_default.parts.electric_shock')
                    @include('financial.financial_default.parts.agricultural_risk')
                    @include('financial.financial_default.parts.salary_scale')

                </div>
            </div>
        </div>
    </div>



</x-app-layout>
