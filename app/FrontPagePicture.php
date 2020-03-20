<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class FrontPagePicture extends Model
{
        public function user(){
        return $this->belongsTo(User::class);

    }
    public function product(){
        return $this->belongsTo(ProductType::class);
    }
    public $timestamps = false;

}
