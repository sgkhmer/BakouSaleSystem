<?php

namespace App\http\models\backend\Shipment;

use Illuminate\Database\Eloquent\Model;

class ShippingCourier extends Model
{
    protected $table='shipping_courier';
    protected $primaryKey='shipping_courier_id';
    protected $fillable=[
    	'shipping_courier_code',
    	'shipping_courier_name'
    ];
}
