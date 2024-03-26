<h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
    {{ __('word.financial_employee_info') }} {{ __($employee->full_name) }}
</h2>
<div class="d-flex justify-content-around ">
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="job_number" class="w-full mb-1" :value="__('word.job_number')" />
        <p id="job_number" class="w-full h-9 block mt-1" type="text" name="job_number">
            {{ $employee->job_number }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="full_name" class="w-full mb-1" :value="__('word.full_name')" />
        <p id="full_name" class="w-full h-9 block mt-1" type="text" name="full_name">
            {{ $employee->full_name }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="mother_full_name" class="w-full mb-1" :value="__('word.mother_full_name')" />
        <p id="mother_full_name" class="w-full h-9 block mt-1" type="text" name="mother_full_name">
            {{ $employee->mother_full_name }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="status" class="w-full mb-1" :value="__('word.contract_type_id')" />
        <p id="status" class="w-full h-9 block mt-1" type="text" name="status">
            {{ $employee->get_contract_type->contract_type }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="user_id" class="w-full mb-1" :value="__('word.job_title_id')" />
        <p id="user_id" class="w-full h-9 block mt-1" type="text" name="user_id">
            {{ $employee->get_job_title->job_title }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="user_id" class="w-full mb-1" :value="__('word.danager_provision_id')" />
        <p id="user_id" class="w-full h-9 block mt-1" type="text" name="user_id">
            {{ $employee->get_danager_provision->danager_provision }}
        </p>
    </div>


</div>
<div class="d-flex justify-content-around ">
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="job_grade" class="w-full mb-1" :value="__('word.job_grade_id')" />
        <p id="job_grade" class="w-full h-9 block mt-1" type="text" name="job_grade">
            {{ $employee->get_job_grade->job_grade }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="career_stage" class="w-full mb-1" :value="__('word.career_stage_id')" />
        <p id="career_stage" class="w-full h-9 block mt-1" type="text" name="career_stage">
            {{ $employee->get_career_stage->career_stage }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="name" class="w-full mb-1" :value="__('word.facility_name')" />
        <p id="name" class="w-full h-9 block mt-1" type="text" name="name">
            {{ $employee->get_payroll_facility->name }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="main_sections" class="w-full mb-1" :value="__('word.Main_section')" />
        <p id="Main_section" class="w-full h-9 block mt-1" type="text" name="Main_section">
            {{ $employee->get_payroll_facility->get_main_section_id->main_sections }}
        </p>
    </div>

    <div class=" mx-4 my-4 w-full">
        <x-input-label for="name" class="w-full mb-1" :value="__('word.assignment_type_id')" />
        <p id="name" class="w-full h-9 block mt-1" type="text" name="name">
            {{ $employee->get_assignment_type->assignment_type }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="status" class="w-full mb-1" :value="__('word.academic_achievement_id')" />
        <p id="status" class="w-full h-9 block mt-1" type="text" name="status">
            {{ $employee->get_academic_achievement->academic_achievement }}
        </p>
    </div>



</div>
<div class="d-flex justify-content-around ">
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="card_id" class="w-full mb-1" :value="__('word.card_id')" />
        <p id="card_id" class="w-full h-9 block mt-1" type="text" name="card_id">
            {{ $employee->card_id }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="bank_name_id" class="w-full mb-1" :value="__('word.bank_name_id')" />
        <p id="bank_name_id" class="w-full h-9 block mt-1" type="text" name="bank_name_id">
            {{ $employee->bank_name_id }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="bank_account" class="w-full mb-1" :value="__('word.bank_account_id')" />
        <p id="bank_account" class="w-full h-9 block mt-1" type="text" name="bank_account">
            {{ $employee->bank_account }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="iban_code" class="w-full mb-1" :value="__('word.iban_code_id')" />
        <p id="iban_code" class="w-full h-9 block mt-1" type="text" name="iban_code">
            {{ $employee->iban_code }}
        </p>
    </div>

    <div class=" mx-4 my-4 w-full">
        <x-input-label for="university_service" class="w-full mb-1" :value="__('word.university_service_id')" />
        <p id="university_service" class="w-full h-9 block mt-1" type="text" name="university_service">
            {{ $employee->get_university_service->university_service }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="scientific_title_stage" class="w-full mb-1" :value="__('word.scientific_title_stage_id')" />
        <p id="scientific_title_stage" class="w-full h-9 block mt-1" type="text" name="scientific_title_stage">
            {{ $employee->get_scientific_title_stage->scientific_title_stage }}
        </p>
    </div>


</div>

<div class="d-flex justify-content-around ">
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="marital_status" class="w-full mb-1" :value="__('word.marital_status_id')" />
        <p id="marital_status" class="w-full h-9 block mt-1" type="text" name="marital_status">
            {{ $employee->get_marital_status->marital_status }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="children_count" class="w-full mb-1" :value="__('word.children_count_id')" />
        <p id="children_count" class="w-full h-9 block mt-1" type="text" name="children_count">
            {{ $employee->get_children_count->children_count }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="electric_shock" class="w-full mb-1" :value="__('word.electric_shock_id')" />
        <p id="electric_shock" class="w-full h-9 block mt-1" type="text" name="electric_shock">
            {{ $employee->get_electric_shock->electric_shock }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="security_guard" class="w-full mb-1" :value="__('word.security_guard_id')" />
        <p id="security_guard" class="w-full h-9 block mt-1" type="text" name="security_guard">
            {{ $employee->get_security_guard->security_guard }}
        </p>
    </div>
    <div class=" mx-4 my-4 w-full">
        <x-input-label for="night_watchman" class="w-full mb-1" :value="__('word.night_watchman_id')" />
        <p id="night_watchman" class="w-full h-9 block mt-1" type="text" name="night_watchman">
            {{ $employee->get_night_watchman->night_watchman }}
        </p>
    </div>

</div>
