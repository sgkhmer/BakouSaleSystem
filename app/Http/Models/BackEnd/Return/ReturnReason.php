<?php

namespace App\http\models\backend\Return;

use Illuminate\Database\Eloquent\Model;

class ReturnReason extends Model
{
    protected $table = 'return_reason';
    protected $primaryKey='return_reason_id';
    protected $fillable=[
		'language_id',
		'name',
    ];
    public $timestamps = false;
}
