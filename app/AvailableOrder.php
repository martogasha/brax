<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailableOrder extends Model
{
    public function picture(){
        return $this->belongsTo(ManageOrders::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function seller(){
        return $this->belongsTo(User::class);
    }
}
