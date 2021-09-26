<?php 

class Finance extends Controller
{
    public function index()
    {
        $this->view('finance');
    }

    public function accounts()
    {
        $this->view('accounts');
    }
}

?>