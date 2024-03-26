<?php

namespace App\DataTables;

use App\Models\Basic\Employee\Employee;
use App\Models\Basic\Facility\Facility;
use App\Models\Movements;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

use function Pest\Laravel\json;

class MovementsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        // ->addColumn('action', 'employee.action')
        return   (new EloquentDataTable($query)) ->addColumn('action','hr.movements.action')
            ->rawColumns(['action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Employee $model): QueryBuilder
    {
        return $model->newQuery()->with(['get_marital_status']);
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('employee-table')
            ->language([
                'sUrl' =>  url('/').'/../lang/'.__( LaravelLocalization::getCurrentLocale() ).'/datatable.json'
            ])
            ->columns(  $this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            /*   ->parameters([
                  'dom' => 'B<"clear">lfrtip',
                  'scrollX' => false,
                  'buttons' => [
                      [
                          'extend'  => 'print',
                          'className'    => 'btn btn-outline-dark'
                     ],
                     [
                          'extend'  => 'reset',
                          'className'    => 'btn btn-outline-dark'
                     ],
                     [
                          'extend'  => 'reload',
                          'className'    => 'btn btn-outline-dark'
                     ],
                      [
                           'extend'  => 'export',
                           'className'    => 'btn btn-outline-dark',
                           'buttons' => [
                                             'csv',
                                             'excel',
                                             'pdf',
                                        ],
                      ],
                      'colvis'
                  ]
              ]) */
            ->selectStyleSingle();
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->title(__('word.action'))
                ->addClass('text-center'),
            Column::make('job_number')->title(__('word.job_number'))->class('text-center'),
            Column::make('full_name')->title(__('word.full_name'))->class('text-center'),
            Column::make('mother_full_name')->title(__('word.mother_full_name'))->class('text-center'),
            Column::make('date_of_birth')->title(__('word.date_of_birth'))->class('text-center'),
            Column::make('appointment_date')->title(__('word.appointment_date'))->class('text-center'),
            Column::make('get_marital_status')->title(__('word.marital_status_id'))->data('get_marital_status.marital_status')->name('get_marital_status.marital_status')->class('text-center'),

        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Employee_' . date('YmdHis');
    }
}
