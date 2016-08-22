<?php

/* * **********************************************************
 * The MIT License
 *
 * Copyright 2016 Blas Monerris Alcaraz.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.

  --------------- CodeIgniter -----------------------------------

  @package	CodeIgniter
  @author	EllisLab Dev Team
  @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
  @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
  @license	http://opensource.org/licenses/MIT	MIT License
  @link	https://codeigniter.com
  @since	Version 1.0.0
  @filesource

  --------------------- xxxxxx -------------------------

  @Proyecto: MyCi_Proyecto
  @Autor:    Blas Monerris Alcaraz
  @Objeto:   Aprendizaje/Desarrollo
  @Comienzo: 20-08-2016
  @licencia  http://opensource.org/licenses/MIT  MIT License
  @link      https://expresoweb.joomla.com
  @Version   1.0.0

  @mail: expresoweb2015@gmail.com

  PHP7 + Codeigniter 3.1.0 + Bootstrap + Grocery_CRUD 

  Simple Bootstrap Carrousel + Admin CRUD (Backend)

  Script creado el 20-08-2016
 * ******************************************************************** */
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Images_model');       
    }

    public function index()
    {
        $images = $this->Images_model->get_all();

        $data = array(
            'images_data' => $images
        );

        $this->load->view('images/main_view', $data);
    }
    
    public function admin()
    {
        $this->load->library('grocery_CRUD');
        try{
            $crud = new grocery_CRUD();
           
            $crud->set_table('images');
            $crud->set_subject('Foto');           
            $crud->columns('foto','nombre','descripcion');
            $crud->set_field_upload('foto','uploads'); 
            $this->admin_rules($crud);
            
            $output = $crud->render();
            
            $this->load->view('images/main_admin',$output);

        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
                             

    public function admin_rules($crud) 
    {
	$crud->set_rules('descripcion', 'descripcion', 'trim');
        $crud->set_rules('nombre', 'nombre', 'trim|required|alpha_numeric_spaces');
	$crud->set_rules('foto', 'foto', 'trim|required');
	$crud->set_rules('id_image', 'id_image', 'trim');	
    }

}

