<?php
/*
Plugin Name: Google Maps GPS Link
Plugin URI: http://blog.jeffyen.com/2009/03/gmapgpslink/
Description: Given a string with the format: :gps:[Link text]::[V Coordinate]::[H Coordinate], this plugin will do a simple string replacement with a Google Maps URL to the given coordinates.
Version: 1.0
Author: Jeff Yen
Author URI: http://jeffyen.com
*/

/*  Copyright 2009  Jeff Yen  (email : j_yenner@hotmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_filter('the_content', 'gmapgpslink');

function gmapgpslink($content)
  {
  $contentArray = explode(':gps:', $content);
  $gpsArray = explode('::' , $contentArray[1]);
  $gpslink = "<a href='http://maps.google.com/maps?f=q&source=s_q&hl=en&z=14&geocode=&q=" . $gpsArray[1] . ",+" . $gpsArray[2] . "' target='_blank'>" . $gpsArray[0] . "</a>";
  $contentArray[1] = $gpslink;
  return implode($contentArray);
  }

?>
