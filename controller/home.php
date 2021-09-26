<?php

class Home extends Controller
{
    public function index()
    {
        $genSetModels = $this->model('general');
        $genSet = $genSetModels->getSettings();
        $menubar = $genSetModels->getMenubar();

        $parameters = [
            'page_url' => Route::parse_url(),
            'title' => '',
            'generalSettings' => $genSet,
            'menubar' => $menubar
        ];

        $this->view('home', $parameters);
    }
}

?>