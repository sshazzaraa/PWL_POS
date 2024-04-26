<?php

namespace App\DataTables;

use App\Models\BarangModel;
use App\Models\Kategori;
use App\Models\KategoriModel;
use App\Models\StokModel;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BarangDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('Edit', function ($row) {
                return '<a class="edit btn btn-primary btn-sm" href="' . route('stok.edit', $row->stok_id) . '">edit</a>';
            })
            ->addColumn('Delete', function ($row) {
                return '<a class="edit btn btn-danger btn-sm" href="' . route('stok.delete', $row->stok_id) . '">delete</a>';
            })
            ->rawColumns(['Edit', 'Delete'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(StokModel $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('table-stok')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('stok_id'),
            Column::make('stok_kode'),
            Column::make('stok_nama'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('Edit')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass(
                    'text-center'
                ),
            Column::computed('Delete')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass(
                    'text-center'
                ),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Stok_' . date('YmdHis');
    }
}
