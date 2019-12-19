<?php 

include "vendor/autoload.php";

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('public/foo.jpg')->resize(300, 200);


?>