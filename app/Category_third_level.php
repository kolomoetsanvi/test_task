<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category_third_level extends Model
{
    use SoftDeletes;

    protected $table = 'category_third_level';
    protected $primaryKey = 'id';
    public $incrementing = TRUE;

    public $timestamps = TRUE;
    protected $dates = ['deleted_at'];

    protected $fillable = ['title', 'category_second_level_id']; //разрешает поля к записи
    protected $guarded = ['id']; //поля не доступные к записи

    public function category_second_level(){
        return $this->belongsTo('App\Category_second_level', 'category_second_level_id');
    }
}
