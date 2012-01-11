<?php

class ApplicationController extends Controller {
  public function index() {
    Log::debug($this->params);
    return $this->render('layouts/vanilla');
  }
}

?>
