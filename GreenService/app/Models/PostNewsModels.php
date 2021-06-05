<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostNewsModels extends Model
{
    // use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'cate_news_id','post_news_desc','post_news_content','post_news_img','post_news_metakeyword','post_news_status'
    ];
    protected $primaryKey = 'post_news_id';
 	protected $table = 'tbl_post_news';
}
