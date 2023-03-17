<?php
$age = 18;
$has_pvc = true;
$ward = 021;

if($has_pvc = false){
    echo "Voter ineligible to vote because user does not have a PVC";
}elseif($age < 18){
    echo "Voter ineligible to vote because user is below 18 years of age";
}elseif($ward != 021 ){
    echo "Voter ineligible to vote because user ward is not 021";
}else {
    echo "Voter eligible to vote.";
}
?>
