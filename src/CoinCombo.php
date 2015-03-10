<?php

/*
Coin Combo takes a given amount of cents and shows the smallest number of quarters, dimes, nickels, and pennies needed to make that change.
*/

    class CoinCombo {

        function combine($cents) {
            $combo = [];
            // push appropriate ammount of quarters into first element of combo
            $quarters = intval($cents / 25);
            array_push($combo, $quarters);
            $cents = $cents % 25;
            // push appropriate ammount of dimes into second element of combo
            $dimes = intval($cents / 10);
            array_push($combo, $dimes);
            $cents = $cents % 10;
            // push appropriate ammount of nickles into third element of combo
            $nickles = intval($cents / 5);
            array_push($combo, $nickles);
            $cents = $cents % 5;
            // push appropriate ammount of pennies into fourth element of combo
            $pennies = intval($cents / 1);
            array_push($combo, $pennies);
            $cents = $cents % 1;

            return $combo;
        }
    }
 ?>
