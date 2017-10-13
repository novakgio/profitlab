<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Schema;
class Helper extends Model
{
    //

    public static function makeObject($model,$request,$table_name){
        $columns = Schema::getColumnListing($table_name);

        foreach($columns as $column){
            if($column=="picture") continue;
            if(in_array($column,array_keys($request->all()))){
                $model->$column = $request->$column;
                
            }
        }
        return $model;
    }
}
