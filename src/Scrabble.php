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
        {
            $one_point_letters = array("A", "E", "I", "O", "U", "L", "N", "R", "S", "T");
            $two_point_letters = array("D", "G");
            $three_point_letters = array("B", "C", "M", "P");
            $four_point_letters = array("F", "H", "V", "W", "Y");
            $five_point_letters = array("K");
            $eight_point_letters = array("J", "X");
            $ten_point_letters = array("Q", "Z");
            $total_points = 0;

            foreach ($one_point_letters as $letter) {
                if($this->input === $letter) {
                    $total_points = $total_points + 1;
                }
            }

            foreach ($two_point_letters as $letter) {
                if($this->input === $letter) {
                    $total_points = $total_points + 2;
                }
            }

            foreach ($three_point_letters as $letter) {
                if($this->input === $letter) {
                    $total_points = $total_points + 3;
                }
            }
            foreach ($four_point_letters as $letter) {
                if($this->input === $letter) {
                    $total_points = $total_points + 4;
                }
            }
            foreach ($five_point_letters as $letter) {
                if($this->input === $letter) {
                    $total_points = $total_points + 5;
                }
            }
            foreach ($eight_point_letters as $letter) {
                if($this->input === $letter) {
                    $total_points = $total_points + 8;
                }
            }
            foreach ($ten_point_letters as $letter) {
                if($this->input === $letter) {
                    $total_points = $total_points + 10;
                }
            }
            return $total_points;


        }

    }
?>
