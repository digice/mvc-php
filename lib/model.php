<?php

/**
 * @package   MVC
 * @module    Main
 * @author    Roderic Linguri
 * @copyright 2017 Digices LLC
 * @license   MIT
 */

/** @class Model **/
abstract class Model
{
  /** @method assoc
    * @return mixed (associative array)
   **/
  public function assoc()
  {
    $assoc = array();
    foreach ($this as $k=>$v) {
      $assoc[$k] = $v;
    }
    return $assoc;
  } // ./assoc

  /** @method keys
    * @return mixed (array of string)
   **/
  public function keys()
  {
    $keys = array();
    foreach ($this as $k=>$v) {
      array_push($keys,$k);
    }
    return $keys;
  } // ./keys

} // ./Model
