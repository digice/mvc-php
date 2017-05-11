<?php

/**
 * @package   MVC
 * @module    Main
 * @author    Roderic Linguri
 * @copyright 2017 Digices LLC
 * @license   MIT
 */

/** @class View **/
abstract class View
{
  /** @property string (opening tag) **/
  protected $open;

  /** @property string (closing tag) **/
  protected $close;

  /** @property string (html content) **/
  protected $content;

  /** @method htm
    * @return string (html)
   **/
  public function htm()
  {
    return $this->open.PHP_EOL.$this->content.PHP_EOL.$this->close;
  } // ./htm

  /** @method setter
    * @param  string (content)
    **/
  public function setContent($str)
  {
    $this->content = $str;
  } // ./set content

} // ./View
