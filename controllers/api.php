<?php

/**
 * Created by PhpStorm.
 * User: henno
 * Date: 23.11.15
 * Time: 17:08
 */
class api extends Controller
{
    function movies()
    {
        $movies = get_all("SELECT * FROM movie");
        exit(json_encode($movies));
    }

}