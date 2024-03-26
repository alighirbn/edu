<?php

namespace App\DataTables;

use App\Models\Disengagement;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

use Yajra\DataTables\Html\Column;

use Yajra\DataTables\Services\DataTable;

class DisengagementDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'disengagement.action')
            ->rawColumns(['action'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Disengagement $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Disengagement $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('disengagement-table')
                    ->language([
                        'sUrl' =>  url('/').'/../lang/'.__( LaravelLocalization::getCurrentLocale() ).'/datatable.json'
                    ])
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
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
            Column::make('number_administrative_order')->title(__('word.number_administrative_order'))->class('text-center'),
            Column::make('date_administrative_order')->title(__('word.date_administrative_order'))->class('text-center'),
            Column::make('job_number')->title(__('word.job_number'))->class('text-center'),
            Column::make('name_employee')->title(__('word.full_name'))->class('text-center'),
        //    Column::make('type_book')->title(__('word.type_book'))->class('text-center'),
          //  Column::make('date_separation')->title(__('word.date_separation'))->class('text-center'),
           // Column::make('direct_date')->title(__('word.direct_date'))->class('text-center'),
          //  Column::make('number_issued')->title(__('word.number_issued'))->class('text-center'),
          //  Column::make('date_issued')->title(__('word.date_issued'))->class('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Disengagement_' . date('YmdHis');
    }
}
