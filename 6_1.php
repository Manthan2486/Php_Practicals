<?php

function countNotes($amount) {
    $notes = [100, 50, 20, 10, 5, 2, 1];
    $count = 0;

    foreach ($notes as $note) {
        if ($amount >= $note) {
            $numNotes = intval($amount / $note);
            $count += $numNotes;
            $amount -= $numNotes * $note;
        }
    }

    return $count;
}

$amount = 256;
echo "Minimum number of notes needed for Rs. $amount: " . countNotes($amount);
?>