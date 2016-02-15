<?php

/**
 * The homepage controller.
 *
 * controllers/Home.php
 */
 class Home extends Base_Controller
 {
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $this->data['view'] = 'home';
        $this->render();
    }
 }
 
 /* End of file Home.php */
 /* Location: application/controllers/Home.php */
 
