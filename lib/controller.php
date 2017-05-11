<?php

/**
 * @package   MVC
 * @module    Main
 * @author    Roderic Linguri
 * @copyright 2017 Digices LLC
 * @license   MIT
 */

/** @class Controller **/
abstract class Controller
{
  /** @property Model **/
  protected $model;

  /** @property View **/
  protected $view;

  /** @method Model getter */
  public function model()
  {
    return $this->model;
  } // ./model

  /** @method View getter */
  public function view()
  {
    return $this->view;
  } // ./view

} // ./Controller
