<?php
error_reporting(7);
require 'includes/autoloader.php';
require 'includes/exceptions.php';
session_start();
lib::setitem('controller',new controller($_GET['u']));

$view = new view();
lib::getitem('controller')->render();
$content = $view->finish();

echo view::show('shell',array('body'=>$content));