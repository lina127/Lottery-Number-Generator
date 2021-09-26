<?php
  $maxNum = $_POST["maxNum"];
  $pick = $_POST["pick"];
  $bonus = $_POST["bonus"];

    $numArray = [];
    $pick = $bonus ? ($pick + 1) : $pick;
    for ($i = 0; $i < $pick; $i++) {

        $loop = true;
        $randNum = rand(1, $maxNum);
        while ($loop) {
            if (!in_array($randNum, $numArray)) {
                array_push($numArray, $randNum);
                $loop = false;
            } else {
                $randNum = rand(1, $maxNum);
            }
        }
    }
    echo json_encode($numArray);
?>
