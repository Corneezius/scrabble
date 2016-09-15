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

    function test_two_point_letters()
    {
        //Arrange
        $user_input = "D";
        $test_Scrabble = new Scrabble($user_input);

        //Act
        $result = $test_Scrabble->total_score();
        $desired_result = 2;

        //Assert
        $this->assertEquals($desired_result, $result);
    }

    function test_three_point_letters()
    {
        //Arrange
        $user_input = "B";
        $test_Scrabble = new Scrabble($user_input);

        //Act
        $result = $test_Scrabble->total_score();
        $desired_result = 3;

        //Assert
        $this->assertEquals($desired_result, $result);

    }
    function test_four_point_letters()
    {
        //Arrange
        $user_input = "F";
        $test_Scrabble = new Scrabble($user_input);

        //Act
        $result = $test_Scrabble->total_score();
        $desired_result = 4;

        //Assert
        $this->assertEquals($desired_result, $result);
    }
    function test_five_point_letters()
    {
        //Arrange
        $user_input = "K";
        $test_Scrabble = new Scrabble($user_input);

        //Act
        $result = $test_Scrabble->total_score();
        $desired_result = 5;

        //Assert
        $this->assertEquals($desired_result, $result);
    }
    function test_eight_point_letters()
    {
        //Arrange
        $user_input = "J";
        $test_Scrabble = new Scrabble($user_input);

        //Act
        $result = $test_Scrabble->total_score();
        $desired_result = 8;

        //Assert
        $this->assertEquals($desired_result, $result);
    }
    function test_ten_point_letters()
    {
        //Arrange
        $user_input = "Q";
        $test_Scrabble = new Scrabble($user_input);

        //Act
        $result = $test_Scrabble->total_score();
        $desired_result = 10;

        //Assert
        $this->assertEquals($desired_result, $result);
    }
    function test_two_letter_words()
    {
        //Arrange
        $user_input = "AN";
        $test_Scrabble = new Scrabble($user_input);

        //Act
        $result = $test_Scrabble->total_score();
        $desired_result = 2;

        //Assert
        $this->assertEquals($desired_result, $result);
    }
    function test_full_words()
    {
        //Arrange
        $user_input = "hand";
        $test_Scrabble = new Scrabble($user_input);

        //Act
        $result = $test_Scrabble->total_score();
        $desired_result = 8;

        //Assert
        $this->assertEquals($desired_result, $result);
    }
  }
 ?>
