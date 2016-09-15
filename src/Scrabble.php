<?php

    class Scrabble{
        private $input;
        private $points;

        function __construct($user_input)
        {
            $this->input = $user_input;
        }

        function setInput($new_input)
        {
            $this->input = (string) $new_input;
        }

        function getInput()
        {
            return $this->input;
        }

        function setPoints($new_points)
        {
            $this->points = $new_points;
        }

        function getPoints()
        {
            return $this->points;
        }

        function total_score()
        {   $input_array = strtoupper($this->input);
            $input_array = str_split($input_array);
            $one_point_letters = array("A", "E", "I", "O", "U", "L", "N", "R", "S", "T");
            $two_point_letters = array("D", "G");
            $three_point_letters = array("B", "C", "M", "P");
            $four_point_letters = array("F", "H", "V", "W", "Y");
            $five_point_letters = array("K");
            $eight_point_letters = array("J", "X");
            $ten_point_letters = array("Q", "Z");
            $main_array = array($one_point_letters, $two_point_letters, $three_point_letters, $four_point_letters, $five_point_letters, $eight_point_letters, $ten_point_letters);
            $total_points = 0;

            foreach ($input_array as $user_letter){

                foreach ($main_array[0] as $letter) {
                    if($user_letter  === $letter) {
                        $total_points = $total_points + 1;
                    }
                }
                foreach ($main_array[1] as $letter) {
                    if($user_letter === $letter) {
                        $total_points = $total_points + 2;
                    }
                }
                foreach ($main_array[2] as $letter) {
                    if($user_letter === $letter) {
                        $total_points = $total_points + 3;
                    }
                }
                foreach ($main_array[3] as $letter) {
                    if($user_letter === $letter) {
                        $total_points = $total_points + 4;
                    }
                }
                foreach ($main_array[4] as $letter) {
                    if($user_letter === $letter) {
                        $total_points = $total_points + 5;
                    }
                }
                foreach ($main_array[5] as $letter) {
                    if($user_letter === $letter) {
                        $total_points = $total_points + 8;
                    }
                }
                foreach ($main_array[6] as $letter) {
                    if($user_letter === $letter) {
                        $total_points = $total_points + 10;
                    }
                }
            }
            return $total_points;


        }

    }
?>
