<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use App;

class Category extends Model {
    protected $fillable = [
    	'id',
        'name',
        'parent_id'
    ];
    //protected $dateFormat = 'U';
    protected $table = 'cate';
    protected $createRules = [
        //'icon'  => 'required|email|unique:users,id,:id',
    ];

    protected $updateRules = [
        'latest_accessed_at' => 'date'
    ];
    protected $hidden     = ['deleted_at','created_at', 'updated_at'];
    protected static function boot(){
        parent::boot();
    }
}