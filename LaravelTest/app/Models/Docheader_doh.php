<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer_cus;

class Docheader_doh extends Model
{
    // Add the table name.
    protected $table = 'DOCHEADER_DOH'; 

    protected $primaryKey = 'doh_id';
    protected $keyType = 'int';

    public $incrementing = true;

    // Table doesnt have created_at and updated_at columns
    public $timestamps = false;

    //
    protected $fillable = [
        'doh_id',
        'doh_date',
        'doh_totalamount',
    ];

    protected $visible = [
        'doh_id',
        'doh_date',
        'doh_totalamount',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer_cus::class, 'cus_doh_fk', 'cus_id');
    }
}
