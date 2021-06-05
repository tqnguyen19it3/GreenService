<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostServiceModels extends Model
{ 
    // use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	 'post_service_title','post_service_slug','post_service_desc','post_service_content','post_service_img','post_service_metakeyword','post_service_status'
    ];
    protected $primaryKey = 'post_service_id';
 	protected $table = 'tbl_post_service';
}
