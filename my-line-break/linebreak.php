<?php

/*
Plugin Name: My Line Breaker
Plugin URI: http://tekk3.com/
Description: Just a simple line break using [lbreak]
Author: tEkk3
Version: 0.8
Author URI: http://tekk3.com/

Copyright 2012  Gabe Arnold  (email : gabe@tekk3.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
    
*/

/* This is my first plugin, so don't hate me if it sucks! ;) */

function MyLineBreaker() {  
    return '<br />';  
}  
add_shortcode('lbreak', 'MyLineBreaker'); 