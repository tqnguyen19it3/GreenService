<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostNewsModels extends Model
{
    // use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'post_news_title','post_news_slug','post_news_desc','post_news_content','post_news_img','post_news_metakeyword','post_news_status','post_news_views','post_news_date'
    ];
    protected $primaryKey = 'post_news_id';
 	protected $table = 'tbl_post_news';
}
