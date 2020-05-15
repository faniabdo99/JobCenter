<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogFile extends Model{
    protected $guarded = [];
    public function getLinkAttribute(){
      return url('storage/app/public/blog/files/')."/".$this->source;
    }
}
