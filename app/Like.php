<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model{
    protected $guarded = [];
    public function Job(){
      return $this->belongsTo(Job::class , 'item_id')->withDefault([
          'id' => 0,
          'title' => 'Deleted Job',
          'category_id' => 0,
          'company_id' => 0,
          'type' => 'No Data',
          'salary' => 'No Data',
          'experience' => 'No Data',
          'age' => 'No Data',
          'description' => 'No Data',
          'responses' => 0,
          'criteria' => 'No Data',
          'position' => 'No Data',
          'city_id' => 0,
          'address' => 'No Data',
      ]);
    }
}
