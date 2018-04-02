<?php
$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("media/docs/productos.xml");

$x=$xmlDoc->getElementsByTagName('id');

for ($i=0; $i<=$x->length-1; $i++) {
  //Process only element nodes
  if ($x->item($i)->nodeType==1) {
    if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      $y=($x->item($i)->parentNode);
    }
  }
}

$product=($y->childNodes);

for ($i=2;$i<$product->length;$i++) {
  //Process only element nodes
  if ($product->item($i)->nodeType==1) {

    //echo("<b>" . $cd->item($i)->nodeName . ":</b> ");
    echo($product->item($i)->childNodes->item(0)->nodeValue),"<br>";
  }
}
?> 