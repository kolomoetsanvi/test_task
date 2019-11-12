<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category_second_level extends Model
{
    use SoftDeletes;

    protected $table = 'category_second_level';
    protected $primaryKey = 'id';
    public $incrementing = TRUE;

    public $timestamps = TRUE;
    protected $dates = ['deleted_at'];

    protected $fillable = ['title', 'category_first_level_id']; //разрешает поля к записи
    protected $guarded = ['id']; //поля не доступные к записи

    public function category_first_level(){
        return $this->belongsTo('App\Category_first_level', 'category_first_level_id');
    }

    public function category_third_level(){
        return $this->hasMany('App\Category_second_level', 'category_first_level_id');
    }
}
