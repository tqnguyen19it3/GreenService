<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAboutUsModels extends Model
{
    // use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'post_about_us_content','post_about_us_img','post_about_us_status','post_about_us_metadesc','post_about_us_metakeyword'
    ];
    protected $primaryKey = 'post_about_us_id';
 	protected $table = 'tbl_post_about_us';
}
