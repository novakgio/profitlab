<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    public function getCategory(){
    	 return $this->hasMany('App\PortfolioCategory','id','portfolio_category_id');
    }
}
