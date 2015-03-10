<?php

    require_once "src/AnagramComparator.php";

    class AnagramComparatorTest extends PHPUnit_Framework_TestCase
    {
        // test that a single character word is the same as a single word in the word list
        function test_makeAnagramComparator_singleLetterSuccess()
        {
            //Arrange
            $test_AnagramComparator = new AnagramComparator;
            $word = "a";
            $word_list = ["a"];

            //Act
            $result = $test_AnagramComparator->testAnagram($word, $word_list);

            //Assert
            $this->assertEquals(["a", "a"], $result);
        }

        // test that a single character word is not the same as a single character word in the word list
        function test_makeAnagramComparator_singleLetterFail()
        {
            //Arrange
            $test_AnagramComparator = new AnagramComparator;
            $word = "a";
            $word_list = ["b"];

            //Act
            $result = $test_AnagramComparator->testAnagram($word, $word_list);

            //Assert
            $this->assertEquals(["a"], $result);
        }

    }
 ?>
