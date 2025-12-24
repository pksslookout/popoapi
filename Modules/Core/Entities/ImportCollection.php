<?php
namespace Modules\Core\Entities;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ImportCollection implements ToCollection
{
    public function collection(Collection $rows)
    {
    	return $rows;
    }
}