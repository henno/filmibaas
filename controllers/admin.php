<?php

class admin extends Controller
{
    public $requires_auth = true;

    function index()
    {
        //$this->admin = get_all("SELECT * FROM admin");
    }

    function view()
    {
        $admin_id = $this->params[0];
        $this->admin = get_first("SELECT * FROM admin WHERE admin_id = '{$admin_id}'");
    }

    function edit()
    {
        $admin_id = $this->params[0];
        $this->admin = get_first("SELECT * FROM admin WHERE admin_id = '{$admin_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('admin', $data);
    }

    function ajax_delete()
    {
        exit(q("DELETE FROM admin WHERE admin_id = '{$_POST['admin_id']}'") ? 'Ok' : 'Fail');
    }

}