<?php
function print_movie_from_nbr(int $i){

    switch ($i) {
        case 3:
            echo "The Three Brothers".PHP_EOL;
            break;
        case 6:
            echo "The Sixth Sense".PHP_EOL;
            break;
        case 23:
            echo "The Number 23".PHP_EOL;
            break;
        case 28:
            echo "28 Days Later".PHP_EOL;
           break;
        default:
           echo "I don't know.".PHP_EOL;
    }
}
