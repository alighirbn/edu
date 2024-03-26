<form style="display: inline-block" action="{{ route('tables.update') }}" method="post" class="my-2 mx-2">
    @csrf
    @method('PATCH')
    <input type="hidden" name="table_name" value="{{ $tableName }}">
    <input type="hidden" name="row_id" value="{{ $tableValue->id }}">
    <input type="hidden" name="col_name" value="{{ $header }}">
    <div class="flex">
        @if (
            $header == 'amount_type_id' or
                $header == 'amount_type_id_retirement' or
                $header == 'amount_type_id_Social_Welfare_Fund' or
                $header == 'amount_type_id_support_fund')
            <select name="row_value" id="select-beast" required class="  w-48">
                <option value="1" {{ $tableValue->$header == '1' ? 'selected' : '' }}>{{ __('مبلغ') }}
                </option>
                <option value="2" {{ $tableValue->$header == '2' ? 'selected' : '' }}>{{ __('نسبة') }}
                </option>
            </select>
        @else
            <input required class="w-40 mt-1" type="text" name="row_value" value="{{ $tableValue->$header }}" />
        @endif


        <button
            class="items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
            style="background-color: #767700">
            {{ __('word.update') }}</button>
    </div>
</form>
