<?php 

$data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

for($i =0; $i < count($data); $i++){
  if(gettype($data[$i]) === "string"){
    echo "index ke " . $i . " adalah " . gettype($data[$i]) . " dengan data " . $data[$i] . PHP_EOL;
  } else if($data[$i] < 0) {
      echo "Tidak bisa di validasi sistem" . PHP_EOL;
  }
  else if(gettype($data[$i]) === "integer"){
    echo "index ke " . $i . " adalah " . gettype($data[$i]) . " dengan data " . $data[$i] . PHP_EOL;
  } 
}

?>