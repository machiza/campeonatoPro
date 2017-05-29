<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Clube extends Model
{
    protected $table = "clubes";
    protected $fillable = ['name','path'];

    public function setPathAttribute($path){
    		if(!empty($path)) {
    			$name = Carbon::now()->second.$path->getClientOriginalName();
			$this->attributes['path'] = $name;
			\Storage::disk('local')->put($name, \File::get($path));
    		}
	}
}
