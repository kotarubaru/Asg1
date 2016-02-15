<?php

/**
 * The bot assembly page controller.
 *
 * controllers/Assembly.php
 */
 class Assembly extends Base_Controller
 {
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $page_data = array();
        
        if (!$this->is_logged_in())
        {
            $page_data['assemble_pieces'] = "You must be logged in to assemble a bot.";
        }
        else
        {
            $page_data['assemble_pieces'] = "test";
        }
        
        $this->data['content'] = $this->parser->parse('assembly', $page_data, true);
        $this->render();
    }
 }
 
 /* End of file Assembly.php */
 /* Location: application/controllers/Assembly.php */
 
