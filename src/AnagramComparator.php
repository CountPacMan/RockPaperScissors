<?php

/*
Anagram Comparator takes a word from the user and compares it to a space seperated list of words elicited from the user. The program lets the user know which, if any, of the words in the list are anagrams of the first word entered.
*/

    class AnagramComparator {

        function testAnagram($word, $word_list) {
            $word_sorted = str_split($word);
            $word_sorted = sort($word_sorted);
            $word_list_sorted = [];
            $final_list = [];
            // push sorted words from $word_list into the sorted array
            foreach ($word_list as $word_test) {
                $word_test = str_split($word_test);
                $word_test = sort($word_test);
                array_push($word_list_sorted, $word_test);
            }

            // push original word into the final list
            array_push($final_list, $word);

            // push words that anagramically match the original word into the final list
            for ($i = 0; $i < count($word_list); $i++) {
                if ($word_sorted == $word_list_sorted[$i]) {
                    array_push($final_list, $word_list[$i]);
                }
            }

            return $final_list;
        }
    }


 ?>
