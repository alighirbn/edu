<?php

namespace App\DataTables;

use App\Models\Basic\Building\Building;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Services\DataTable;

class BuildingDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
           // ->addColumn('action', 'building.action')
            return   (new EloquentDataTable($query)) ->addColumn('action','basic.building.action')
            ->rawColumns(['action'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Basic\Building\Building $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Building $model): QueryBuilder
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
                    ->setTableId('building-table')
                    ->language([
                        'sUrl' =>  url('/').'/../lang/'.__( LaravelLocalization::getCurrentLocale() ).'/datatable.json'
                    ])
                    ->columns($this->getColumns())
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
            Column::make('building_reference')->title(__('word.building_reference'))->class('text-center'),
            Column::make('city')->title(__('word.city'))->class('text-center'),
            Column::make('district')->title(__('word.district'))->class('text-center'),
            Column::make('quarter')->title(__('word.quarter'))->class('text-center'),
            Column::make('latitude')->title(__('word.latitude'))->class('text-center'),
            Column::make('longitude')->title(__('word.longitude'))->class('text-center'),
            Column::make('class_count')->title(__('word.class_count'))->class('text-center'),
            Column::make('hall_count')->title(__('word.hall_count'))->class('text-center'),
            Column::make('floor_count')->title(__('word.floor_count'))->class('text-center'),
            
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Building_' . date('YmdHis');
    }
}
