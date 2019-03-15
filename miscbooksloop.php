<?php
require 'connect.php';
// require 'looptemplater.php';
require 'masterlooper.php';

subcategoryTemplateLoops($conn, 'products', 'books', 4);

?>