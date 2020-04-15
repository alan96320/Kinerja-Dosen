<?php

namespace App\Exports;

use App\pelaksanaan;
use Maatwebsite\Excel\Concerns\FromArray;

class PelaksanaanExport implements FromArray
{
    protected $data;
    public function __construct(array $data)
    {
        $this->data = $data;
    }
    public function array(): array
    {
        return $this->data;
    }
}
