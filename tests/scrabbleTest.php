<?php
  require_once "src/Scrabble.php";

  class ScrabbleTest extends PHPUnit_Framework_TestCase
  {
    function test_one_point_letters()
    {
        //Arrange
        $user_input = "A";
        $test_Scrabble = new Scrabble($user_input);

        //Act
        $result = $test_Scrabble->total_score();
        $desired_result = 1;

        //Assert
        $this->assertEquals($desired_result, $result);

    }

  }





 ?>
