<?php

$data = ['red', 'blue', 'green', 'yellow', 'lime', 'magenta', 'black', 'gold', 'gray', 'tomato'];

function strup($data)
{
    $res = '<div>';

    for ($i = 0; $i < 5; $i++) {

        $rand_keys = array_rand($data, 5);

        foreach ($rand_keys as $key) {

            $color =  randomColor($data, $data[$key]);

            $res .= '<p style="color:' . $color. '; display: inline-block; font-size: 30px">' . $data[$key] . '</p>' . " ";

        }
        $res .= '<br>';
    }

    $res .= '</div>';

    return $res;
}

$res = strup($data);

echo $res;

function randomColor($data, $exceptColor){

    do{
        $randColor = array_rand($data, 1);

        $color = $data[$randColor];

    }while ($data[$randColor] == $exceptColor);

    return $color;

}

?>
