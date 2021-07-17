<?php

function encript($string = '', $key)
{

    $arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    $lowerString = strtolower($string);

    for ($i = 0;$i < strlen($lowerString);$i++)
    {

        for ($k = 0;$k < Count($arr);$k++)
        {

            if ($k >= Count($arr) - 1)
            {
                $key = ($key + $k) % (Count($arr) - 1);
            }
            else
            {
                $key = $key;
            }

            if ($lowerString[$i] == $arr[$k])
            {

                if ($k + $key >= (Count($arr) - 1))
                {

                    $cript = ($k + $key) % (Count($arr) - 1);
                    $cript;

                }
                else
                {

                    $cript = $k + $key;

                }

                $letter[$i] = $arr[$cript];
                echo $letter[$i];

            }
            else if ($lowerString[$i] == ' ')
            {

                echo ' ';

            }

        }

    }

}

$string = 'Lorem ipsum';

$key = 0;

encript($string, $key);

