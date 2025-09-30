<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docline_dli extends Model
{
    // Add the table name.
    protected $table = 'DOCLINE_DLI'; 

    protected $primaryKey = 'dli_id';
    protected $keyType = 'int';

    public $incrementing = true;

    public $timestamps = false;

    //
    protected $fillable = [
        'dli_id',
        'ite_dli_fk',
        'dli_quantity',
        'dli_price',
        'dli_totalamount'

    ];

    protected $visible = [
        'dli_id',
        'ite_dli_fk',
        'dli_quantity',
        'dli_price',
        'dli_totalamount'
    ];

}
