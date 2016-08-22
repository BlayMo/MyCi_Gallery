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
  @Comienzo: 09-08-2016
  @licencia  http://opensource.org/licenses/MIT  MIT License
  @link      https://expresoweb.joomla.com
  @Version   1.0.1

  @mail: expresoweb2015@gmail.com

  PHP7 + Codeigniter 3.1.0 

  Simple Bootstrap Carrousel + Admin CRUD (Backend)

  Script creado el 11-08-2016
 * ******************************************************************** */
defined('BASEPATH') OR exit('No direct script access allowed');


//devuelve la url sin la cadena "public/"
function my_url($param)
{
    $r = site_url($param);
    return str_replace('public/','',$r);    
}



//formatea un numero estilo español
function numero_es($numero)
{    
    return number_format($numero,2,',','.');    
}
//devuelve la fecha local formateada para events
function ahora()
{    
    //gmDate("Y-m-d\TH:i:s\Z")
    //return gmdate(DATE_ISO8601); fecha GMT
    //return date("Y-m-d\TH:i:s\Z",  time()); //fecha local
    return date(DATE_ISO8601,  time()); //fecha local 
}

//comprueba la direccion de envio tecleada por el cliente
function valida_input($data)
{    
    return cleanInput(trim(htmlspecialchars(strip_tags(stripslashes($data)), ENT_QUOTES, 'UTF-8')));
}

//devuelve una fecha como cadena de texto para presentar en pantalla
function fecha_es()
{
    
    $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
   'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
 
   $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
       'Miercoles', 'Jueves', 'Viernes', 'Sabado');
     
   $hora = date('H').':'.date('m').':'.date('s');
    echo $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y').', a '.$hora;

}

function cleanInput($input) {

  $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
  );

    $output = preg_replace($search, '', $input);
    return $output;
  }

function sanitize($input) {
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        //ver manual de php antes de usar esta funcion
        $output = mysqli_real_escape_string($input);
    }
    return $output;
}



