# _Scrabble_

####_A basic game of Scrabble 09/14/2016_

#### By _**Meredith Alcorn Anand Angalig**_


## Description

_A game that calculates a total score based on what characters are entered into a form_


## Setup/Installation Requirements

* _If you wish to view the source code locally on your machine please follow the following steps:_

    * _Navigate to the directory in which you want the project to reside_

    * _Enter the following command into your terminal:_
        _git clone https://github.com/anandangalig/scrabble.git_

    * _Navigate to the cloned directory, and execute the following command in the terminal:_
          _composer install_

    * _Navigate to the web directory and start your local host by executing the following command in your terminal:_
          _php -S localhost:8000_

    * _Open up the browser of your choice and go to the following url:_
          _http://localhost:8000/_

    * _If you wish to look at the source code, feel free to browse through the files in the directory_


## Specs

* _User enters [A, E, I, O, U, L, N, R, S, T ]._
 * _IN:  "A"_
 * _OUT: 1_

* _User enters [D, G]._
  * _IN:  "D"_
  * _OUT: 2_

* _User enters [B, C, M, P]._
 * _IN: "B"_
 * _OUT: 3_

* _User enters [F, H, V, W, Y]._
 * _IN: "F"_
 * _OUT: 4_

* _User enters "K"._
  * _IN:  "K"_
  * _OUT: 5_

* _User enters [J, X]._
 * _IN:  "J"_
 * _OUT: 8_

* _User enters [Q, Z]._
  * _IN:  "Q"_
  * _OUT: 10_

* _User enters a two letter word._
  * _IN: "An"_
  * _OUT: 2_

* _User enters full word._
  * _IN: "hand"_
  * _OUT: 8_


## Known Bugs

_None yet_


## Support and Contact Details

_Please feel free to contact us at:_
    _alcornmeredith@gmail.com_
    _anandangalig@gmail.com_

## Technologies Used

* _silex v~2.0_
* _twig v~1.0_
* _phpunit v5.5.*_



### License
_Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:_

_The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software._

_THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE._

Copyright (c) 2016 **_Meredith Alcorn & Anand Angalig_**
