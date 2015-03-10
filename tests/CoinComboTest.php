<?php

    require_once "src/CoinCombo.php";

    class CoinComboTest extends PHPUnit_Framework_TestCase
    {
        // test that gives the correct number of coins that go into the cents
        function test_makeCoinCombo_quarters()
        {
            //Arrange
            $test_CoinCombo = new CoinCombo;
            $cents = 68;

            //Act
            $result = $test_CoinCombo->combine($cents);

            //Assert
            $this->assertEquals([2, 1, 1, 3], $result);
        }
    }
 ?>
