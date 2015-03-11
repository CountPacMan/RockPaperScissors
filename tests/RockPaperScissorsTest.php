<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissorsPlayer1()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "rock";
            $player2 = "scissors";

            //Act
            $result = $test_RockPaperScissors->play($player1, $player2);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_rock_scissorsPlayer2()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player2 = "rock";
            $player1 = "scissors";

            //Act
            $result = $test_RockPaperScissors->play($player1, $player2);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_rock_paperPlayer2()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "rock";
            $player2 = "paper";

            //Act
            $result = $test_RockPaperScissors->play($player1, $player2);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_rock_paperPlayer1()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player2 = "rock";
            $player1 = "paper";

            //Act
            $result = $test_RockPaperScissors->play($player1, $player2);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_rock_rockNobody()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "rock";
            $player2 = "rock";

            //Act
            $result = $test_RockPaperScissors->play($player1, $player2);

            //Assert
            $this->assertEquals("Nobody", $result);
        }

        function test_paper_paperNobody()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "paper";
            $player2 = "paper";

            //Act
            $result = $test_RockPaperScissors->play($player1, $player2);

            //Assert
            $this->assertEquals("Nobody", $result);
        }

        function test_scissors_scissorsNobody()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "scissors";
            $player2 = "scissors";

            //Act
            $result = $test_RockPaperScissors->play($player1, $player2);

            //Assert
            $this->assertEquals("Nobody", $result);
        }

        function test_scissors_paperPlayer1()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player1 = "scissors";
            $player2 = "paper";

            //Act
            $result = $test_RockPaperScissors->play($player1, $player2);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_scissors_paperPlayer2()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $player2 = "scissors";
            $player1 = "paper";

            //Act
            $result = $test_RockPaperScissors->play($player1, $player2);

            //Assert
            $this->assertEquals("Player 2", $result);
        }
    }

?>
