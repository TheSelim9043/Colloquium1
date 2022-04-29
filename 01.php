<?php

function QuestionNumber1($numbers)
{
     for ($s = 0; $s < sizeof($numbers)-2; $s++)
            {
                if ($numbers[$s] == 1 && $numbers[$s + 1] == 2 && $numbers[$s + 2] == 3)
                    return true;
            }
           return false;
 }

var_dump(QuestionNumber1(array(1,1,2,3,1)));
var_dump(QuestionNumber1(array(1,1,2,4,1)));
var_dump(QuestionNumber1(array(1,1,2,1,2,3)));

