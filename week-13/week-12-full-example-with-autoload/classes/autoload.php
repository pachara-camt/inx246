<?php
spl_autoload_register(function ($class_name) {
  // If all classes store in the same directory
  require __DIR__ . '/'. $class_name . '.php';
});
