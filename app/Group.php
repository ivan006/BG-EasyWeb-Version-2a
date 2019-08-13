<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

  protected $primaryKey = 'id';
  protected $fillable = [
    'name',
  ];
  // public static function ShowBaseLocation() {
  //   // return "storage/app/public/";
  //   return base_path()."/storage/app/public/";
  // }
  // above is not needed
  public static function ShowAll() {
    // $ShowBaseLocation = Group::ShowBaseLocation();
    // above is not needed
    // $dataNameList = scandir($ShowBaseLocation);
    $dataNameList = Group::all();
    $result = array();
    // dd($dataNameList);
    foreach ($dataNameList as $key => $value) {

      // $dataLocation = $ShowBaseLocation . "/" . $value;
      // above is not needed
      // if (!in_array($value,array(".","..")) && is_dir($dataLocation) )  {
      // above is not needed

            // $url = str_replace($ShowBaseLocation."/", "", $dataLocation);
            // above is not needed
            $result[$value->name]["url"] = route('NetworkC.show', $value->name);
      // }
      // above is not needed
    }

    return $result;
  }

  public static function ShowSignature($argument){

    $var = $argument[0];
    // dd($var);
    return $var;

  }
}
