<?php
namespace Traits;

Trait pageLimit{
  static function allWithLimit($starting){
    $obj = static::make();
    $res = $obj->allWithLimit($starting);
    return static::get($res,static::$arr,static::$tr);
  }

  static function whereWithLimit($col, $oper, $val,$starting){
    $obj = static::make();
    $res = $obj->whereWithLimit($col, $oper,$val,$starting);
    return static::get($res,static::$arr,static::$tr);
  }

  static function orderByWithLimit($col,$opt, $starting){
    $obj = static::make();
    $res = $obj->orderByWithLimit($col,$opt,$starting);
    return static::get($res,static::$arr,static::$tr);
  }
}
?>