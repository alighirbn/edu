<?php

namespace App\DataTables;

use App\Models\ges\Movement_orders;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class Movement_ordersDataTable extends DataTable
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
            ->addColumn('action', 'ges.primarystaff.movementoreders.action')
            ->rawColumns(['action'])
            ->setRowId('id');
    }
 
    

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Movement_order $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Movement_orders $model): QueryBuilder
    {
        return $model->newQuery()->with(['get_user','movement_type','get_movement_to']);
    }

   

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {

                    return $this->builder()
                    ->setTableId('Movement_orders-table')
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
                  ->title(__('action'))
                  ->addClass('text-center'),
            Column::make('movement_order_number')->title(__('number_order'))->class('text-center'),
            Column::make('movement_order_date')->title(__('date_order'))->class('text-center'),
            Column::make('get_user')->title(__('employee_name'))->data('get_user.full_name')->name('get_user.full_name')->class('text-center'),
            Column::make('movement_from')->title(__('movement_from'))->class('text-center'),
            Column::make('get_movement_to')->title(__('movement_to'))->data('get_movement_to.name')->name('get_movement_to.name')->class('text-center'),
            Column::make('movement_type')->title(__('movement_order_type'))->data('movement_type.order_type_name')->name('movement_type.order_type_name')->class('text-center'),
           
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Movement_orders_' . date('YmdHis');
    }
}
