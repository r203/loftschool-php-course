<?php
require_once './vendor/autoload.php';

use Intervention\Image\AbstractFont;
use Intervention\Image\Constraint;
use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('example.jpg');


$img->text('WWWWWatermark', $img->getWidth() - 10, $img->getHeight() - 10, function(AbstractFont $font) {
  $font->size(38);
  $font->color('#000000');
  $font->align('right');
  $font->valign('bottom');

});

$img->resize(200, null, function(Constraint $constraint) {
  $constraint->aspectRatio();
});

echo $img->response('jpg');