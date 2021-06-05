<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostProjectModels extends Model
{
    // use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	 'post_project_title','post_project_slug','post_project_desc','post_project_content','post_project_img','post_project_metadesc','post_project_metakeyword','post_project_status'
    ];
    protected $primaryKey = 'post_project_id';
 	protected $table = 'tbl_post_project';
}
