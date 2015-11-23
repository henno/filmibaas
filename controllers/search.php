<?php

class search extends Controller
{

    function index()
    {
        $this->movie_name = $this->params[0];
        $this->movies = get_all("SELECT * FROM movie WHERE movie_name LIKE '%{$this->movie_name}%'");
    }

    function view()
    {
        $movie_id = $this->params[0];
        $this->movie = get_first("SELECT * FROM movie WHERE movie_id = '{$movie_id}'");
    }

    function edit()
    {
        $movie_id = $this->params[0];
        $this->movie = get_first("SELECT * FROM movie WHERE movie_id = '{$movie_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('movie', $data);
    }

    function ajax_delete()
    {
        exit(q("DELETE FROM movie WHERE movie_id = '{$_POST['movie_id']}'") ? 'Ok' : 'Fail');
    }

}