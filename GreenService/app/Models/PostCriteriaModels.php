<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCriteriaModels extends Model
{
    // use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'post_criteria_content','post_criteria_img','post_criteria_status'
    ];
    protected $primaryKey = 'post_criteria_id';
 	protected $table = 'tbl_post_criteria';
}
