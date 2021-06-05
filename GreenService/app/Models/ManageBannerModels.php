<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageBannerModels extends Model
{
    // use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	 'slider_name','slider_img','slider_status'
    ];
    protected $primaryKey = 'slider_id';
 	protected $table = 'tbl_manage_slider';
}