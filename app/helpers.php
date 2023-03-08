<?php 
use Carbon\Carbon;

//calculate date of birth
function calculate_age($date_of_birth=0){
    $years = Carbon::parse($date_of_birth)->age;
    return $years;
}
 
?>
