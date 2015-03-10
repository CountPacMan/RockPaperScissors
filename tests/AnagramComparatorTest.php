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

        // test that a word is the same as a single word in the word list
        function test_makeAnagramComparator_singleWordSuccess()
        {
            //Arrange
            $test_AnagramComparator = new AnagramComparator;
            $word = "bread";
            $word_list = ["beard"];

            //Act
            $result = $test_AnagramComparator->testAnagram($word, $word_list);

            //Assert
            $this->assertEquals(["bread", "beard"], $result);
        }

        // test that a word is not the same as a single word in the word list
        function test_makeAnagramComparator_singleWordFail()
        {
            //Arrange
            $test_AnagramComparator = new AnagramComparator;
            $word = "bread";
            $word_list = ["board"];

            //Act
            $result = $test_AnagramComparator->testAnagram($word, $word_list);

            //Assert
            $this->assertEquals(["bread"], $result);
        }

        // test that a word is not the same as a single word in the word list
        function test_makeAnagramComparator_multiWordSuccess()
        {
            //Arrange
            $test_AnagramComparator = new AnagramComparator;
            $word = "bread";
            $word_list = ["beard", "bared", "debar"];

            //Act
            $result = $test_AnagramComparator->testAnagram($word, $word_list);

            //Assert
            $this->assertEquals(["bread", "beard", "bared", "debar"], $result);
        }

        // test that a word is not the same as a single word in the word list
        function test_makeAnagramComparator_multiWordFail()
        {
            //Arrange
            $test_AnagramComparator = new AnagramComparator;
            $word = "bread";
            $word_list = ["beard", "bared", "debarz"];

            //Act
            $result = $test_AnagramComparator->testAnagram($word, $word_list);

            //Assert
            $this->assertEquals(["bread", "beard", "bared"], $result);
        }
    }
 ?>
