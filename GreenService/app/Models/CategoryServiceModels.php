<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryServiceModels extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'cate_service_name', 'cate_service_slug','cate_service_status','cate_service_desc'
    ];
    protected $primaryKey = 'cate_service_id';
 	protected $table = 'tbl_category_service';
}
