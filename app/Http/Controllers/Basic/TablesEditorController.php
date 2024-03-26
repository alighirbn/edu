<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TablesEditorController extends Controller
{
    public function index($tableName)
    {
        $removeItems = ['failed_jobs', 'migrations', 'model_has_permissions', 'model_has_roles', 'password_reset_tokens', 'permissions', 'personal_access_tokens', 'role_has_permissions'];

        /// get all tables
        if ($tableName == 'show') {
            $tables = DB::select('SHOW TABLES');
            for ($tableIndex = 0; $tableIndex < count($tables); $tableIndex++) {

                if (in_array($tables[$tableIndex]->Tables_in_edu, $removeItems)) {
                    unset($tables[$tableIndex]);
                }
            }
            return view('basic.tables.view', compact(['tables']));
        } else {
            $tables = 'Choose the wanted table';
            return $tables;
        }

    }

    public function view(Request $table)
    {
        $tableName = $table->table_name;
        $tableValues = DB::table($tableName)->get();
        $headers = Schema::getColumnListing($tableName); //// get names of columns
        $removeItems = ['id', 'migrations', 'created_at', 'updated_at'];

        return view('basic.tables.edit', compact(['headers', 'tableName', 'tableValues', 'removeItems']));
    }

    public function store(Request $request)
    {
        $tableName = $request->input('table_name');

        DB::table($tableName)->insert([
            $request->input('col_name') => $request->input('row_value'),

        ]);

        $tableValues = DB::table($tableName)->get();
        $headers = Schema::getColumnListing($tableName); //// get names of columns
        $removeItems = ['id', 'migrations', 'created_at', 'updated_at'];

        return view('basic.tables.edit', compact(['headers', 'tableName', 'tableValues', 'removeItems']));
    }

    public function update(Request $request)
    {
        $tableName = $request->input('table_name');
        DB::table($tableName)->where('id', $request->input('row_id'))->update(array($request->input('col_name') => $request->input('row_value')));
        $tableValues = DB::table($tableName)->get();
        $headers = Schema::getColumnListing($tableName); //// get names of columns
        $removeItems = ['id', 'migrations', 'created_at', 'updated_at'];
        return view('basic.tables.edit', compact(['headers', 'tableName', 'tableValues', 'removeItems']));
    }

    public function create(Request $request)
    {
        $tableName = $request->input('table_name');
        DB::table($tableName)->insert(array($request->input('col_name') => $request->input('row_value')));

        $tableValues = DB::table($tableName)->get();
        $headers = Schema::getColumnListing($tableName); //// get names of columns
        $removeItems = ['id', 'migrations', 'created_at', 'updated_at'];
        return view('basic.tables.edit', compact(['headers', 'tableName', 'tableValues', 'removeItems']));
    }

    public function delete(Request $request)
    {
        $tableName = $request->input('table_name');
        DB::table($tableName)->where('id', $request->input('row_id'))->delete();

        $tableValues = DB::table($tableName)->get();
        $headers = Schema::getColumnListing($tableName); //// get names of columns
        $removeItems = ['id', 'migrations', 'created_at', 'updated_at'];
        return view('basic.tables.edit', compact(['headers', 'tableName', 'tableValues', 'removeItems']));
    }

}
