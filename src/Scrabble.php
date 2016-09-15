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
            $total_points = 0;
            foreach ($one_point_letters as $letter) {
                if($this->input === $letter) {
                    $total_points = $total_points + 1;
                }
            }
            return $total_points;
    }

  }




 ?>
