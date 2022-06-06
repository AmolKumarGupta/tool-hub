<?php
use App\Models\Visit;
global $db;
$visit = (new Visit($db));
// mysqli_fetch_row($visit->count() )[0]
if(mysqli_fetch_row($visit->count() )[0] == 0){
  echo 'no data';
  die();
}
?>