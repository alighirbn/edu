<form onclick="return confirm('هل انت متأكد من الحذف؟؟؟')" style="display: inline-block"
    action="{{ route('tables.destroy', $tableValue->id) }}" method="post" class="my-2 mx-2">
    @csrf
    @method('DELETE')
    <input type="hidden" name="table_name" value="{{ $tableName }}">
    <input type="hidden" name="col_name" value="{{ $header }}">
    <input type="hidden" name="row_id" value="{{ $tableValue->id }}">
    <button
        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
        style="background-color: darkred">
        {{ __('word.delete') }}
    </button>
</form>
