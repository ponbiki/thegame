<?php

class Dice
{
    static function rollD($die, $mod)
    {
        $roll['die'] = $die;
        $roll['mod'] = $mod;
        $roll['unmod'] = mt_rand(1, $die);
        $roll['total'] = $roll['unmod'] + $mod;
        if ($roll['unmod'] === 1) {
            $roll['critfail'] = true;
            $roll['critsucc'] = false;
        } elseif ($roll['unmod'] === $die) {
            $roll['critfail'] = false;
            $roll['critsucc'] = true;
        } else {
            $roll['critfail'] = false;
            $roll['critsucc'] = false;
        }
        return $roll;
    }
}

$result = Dice::rollD(20);

echo "<pre>"; print_r($result); echo "</pre>";