<!-- INCLUDE wnl.h -->
<?php

$side_menu = array(
  'WNL'				=> 'HEADER',
  'Archive'			=> WNL_HOME,
  'sTaTbOy!'			=> 'HEADER',
  'Fall 2000 Stats'		=> '/wnl/statboy/2000_FALL/index.html',
  'Spring 2001 Stats'		=> '/wnl/statboy/2001_SPRING/index.html',
  'Fall 2001 Stats'		=> '/wnl/statboy/2001_FALL/index.html',
  'Spring 2002 Stats'		=> '/wnl/statboy/wnl_2002_SPRING/index.html',
  'Past Seasons'		=> 'HEADER',
  'Fall 2000'			=> '/wnl/fall2000/',
  'Spring 2001'			=> '/wnl/spring2001/',
  'Fall 2001'                   => '/wnl/fall2001/',
  'Spring 2002'                   => '/wnl/spring2002/',
  'Links'			=> 'HEADER',
  'Netrek Home Page'		=> url_by_name('Netrek Continuum'),
  'Draft League'		=> '/dl/'
);


function get_wnllogo() {
  return('<img src="/images/wnl_logo.jpg" alt="World Netrek League" ' .
         'width="484" height="65" />');
}

function print_wnl_gfx() {
  pl('<table bgcolor="#000000" width="100%" border="0" cellspacing="0" cellpadding="5">' .
     '<tr><td align="center">' . get_wnllogo() . '</td></tr></table>');
}

?>
