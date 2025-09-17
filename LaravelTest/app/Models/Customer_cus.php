<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer_cus extends Model
{
    // Add the table name.
    protected $table = '"CUSTOMER_CUS"'; 

    protected $primaryKey = 'cus_id';
    protected $keyType = 'int';

    public $incrementing = true;

    // Table doesnt have created_at and updated_at columns
    public $timestamps = false;

    //
    protected $fillable = [
        'cus_id',
        'cus_corporatename',
        'cus_commercialname',
        'cus_taxid',
    ];

    protected $visible = [
        'cus_id',
        'cus_corporatename',
        'cus_commercialname',
        'cus_taxid',
    ];

    // Si usas varias conexiones y esta tabla va en otra (opcional)
    // protected $connection = 'pgsql_reporting';
}
