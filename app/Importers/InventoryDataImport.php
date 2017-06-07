<?php namespace App\Importers;

use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Files\ExcelFile;

class InventoryDataImport extends ExcelFile
{
    public function getFile()
    {
        return storage_path('app/service_inventory_normalized_2017-06-07.xlsx');
    }
}