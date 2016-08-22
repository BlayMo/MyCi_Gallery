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
?> 

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">
      <title>My Gallery</title>
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <!-- Custom styles for this template -->
      <link href="<?=base_url()?>assets/mygallery.css" rel="stylesheet" charset="utf-8"/>
      
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
     
   </head>
   <body>
      <div class="container-fluid">
         <div class="panel panel-default">
<!--            <div class="panel-heading">
               <h3 class="panel-title" style="text-align: center;">Floristeria Jardin</h3>
            </div>-->
            <div class="panel-body" style="background-image: url(<?=my_url('')?>assets/web/fondo.jpg) ">
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <?php $start = 0;
                        foreach ($images_data as $images)
                            { if($start == 0){$active = 'active';}else { $active = '';} ?>
                        <li data-target="#carousel-example-generic" data-slide-to="<?=$start;?>" class="<?=$active?>"></li>
                     <?php ++$start; } ?> 
                  </ol>
                  <div class="carousel-inner" role="listbox">
                     <?php $start2 = 0;
                        foreach ($images_data as $images)
                            { if($start2 == 0){$active = 'item active';}else { $active = 'item';} ?>
                      <div class="<?=$active;?>">
                          <div class="wrapper">
                                <!--<div class="line">Hola</div>-->
                                 <div class="circle-2">
                                    <!--see!!-->
                                </div>
                                <div class="circle">
                                    &iexcl;&iexcl;hola!!
                                </div>
                            </div>
                          <figure>
                           <img class="slide-image img-rounded myimg" style="" src="<?=my_url('')?>uploads/<?=$images->foto?>" alt="<?php echo $images->descripcion?>">
                          </figure>
                           <div class="carousel-caption lead">
                            <h1><?php echo valida_input($images->nombre)?></h1>
                            <p  style="font-style: normal;color: yellow ;"><?php echo valida_input($images->descripcion)?></p>
<!--                            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>-->
                            <!--<span class="sr-only">Loading...</span>-->
                          </div>
                      </div>
                     <?php ++$start2; } ?>
                  </div>
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>             
<!--             <div class="panel-footer">                
                    <a class="btn btn-danger" href="images/admin" role="button">Admin</a>                 
             </div>-->
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script type="text/javascript">
//          $('.carousel').carousel({ 'cycle',interval: 3000 });
          $('.carousel').carousel();
      </script>
   </body>
</html>

