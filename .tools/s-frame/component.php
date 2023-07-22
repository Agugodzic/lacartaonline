<?php
namespace component;

class Components{
  private static $components = [
    /*
      'component' => 'route,
       ...

    */
  ];

  public static function addComponent($component,$route) {
    self::$components[$component][$route];
  }

  public static function include($componentName){
    if(self::$components[$componentName]){
      include $components[$componentName]
    };
  }
}

?>