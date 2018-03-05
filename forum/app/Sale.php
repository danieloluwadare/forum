<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
		    protected $fillable = [
		    'User_Id', 'Category_id', 'Order_Id', 'Customer_Name', 'Amount', 'Quantity', 'Status', 'Serial'
		];
}
