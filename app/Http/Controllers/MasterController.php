<?php
class MasterController extends BaseController
 {
 public function showIndex()
 {
    return View::make('index');
 }

 public function showSingle($articleId)
 {
 return View::make('single');
 }
}