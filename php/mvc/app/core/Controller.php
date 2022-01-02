<?php

class Controller {

  public function view( $view, $data = [] ) {

    include_once '../app/views/' . $view . '.php';
  }

  public function model( $model ) {

    include_once '../app/models/' . $model . '.php';
    return new $model;
  }
}

?>