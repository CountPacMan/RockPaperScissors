<?php

    class RockPaperScissors {

        function play($player1, $player2) {
            if ($player1 == "rock" && $player2 == "scissors" || $player2 == "rock" && $player1 == "paper" || $player1 == "scissors" && $player2 == "paper") {
                return "Player 1";
            } else if ($player2 == "rock" && $player1 == "scissors" || $player1 == "rock" && $player2 == "paper" || $player1 == "paper" && $player2 == "scissors") {
                return "Player 2";
            } else if ($player1 == "rock" && $player2 == "rock" || $player1 == "paper" && $player2 == "paper" || $player1 == "scissors" && $player2 == "scissors") {
                return "Nobody";
            }
        }
    }
 ?>
