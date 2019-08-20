<?php
function displayFrequency($changes = array(), $starting = 0)
{
    $frequency = $starting;

    if(is_array($changes))
    {
        foreach($changes as $key => $change)
        {
            $result = ($starting + $change);
            $frequency += $change;
            echo "Current frequency  ".$starting.", change of ".$change."; resulting frequency  ".$result.". \n";
            $starting = $result;
        }
    }

    return "The resulting frequency is ".$frequency."\n";
}

$changes = array(
    +1, -2, +3, +1
    //+1, +1, +1
    //+1, +1, -2
    //-1, -2, -3
);
echo displayFrequency( $changes );
?>
