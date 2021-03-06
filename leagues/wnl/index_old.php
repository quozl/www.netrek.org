<?php

require '../../../beta/include/site.php';

auto_include('../beta/include');
set_style(WNL_CSS);
set_title('World Netrek League');

print_doctype();

?>
<!-- $Id$ -->
<html>
  <?php print_head() ?>
  <?php print_body() ?>
    <?php /* print_main_menu() */ ?>
    <?php

    require 'include/wnl.php';
    print_wnl_gfx();

    $side_menu['Archive'] = 'SELECTED';

    ?>

<!-- BEGIN content -->
    <table border="0" cellspacing="0" cellpadding="2">
      <tr>
        <td width="125" nowrap class="std" valign="top">
          <div class="side-menu">
            <?php print_side_menu($side_menu) ?>
          </divx>
        </td>
        <td width="400" class="std">
          <div class="body">
	  	  

	  <h1>WNL</h1>

<p>
The WNL and INL merged after the Spring 2002 season.  This site is a
complete record of all four WNL seasons.  The INL home page is <a
href="http://www.inl.org/">http://www.inl.org/</a>.
</p>

	<h1>WNL Champions</h1>

<p>
<b>Fall 2000:</b> <A HREF="fall2000/roster/#MD">Mixed Tw^H^HDrinks</A><br>
<b>Fall 2001:</b> <A HREF="fall2001/roster/#Evilempire&#32;Strikes&#32;Back">Evilempire Strikes Back</A><br>
<b>Spring 2001:</b> <A HREF="spring2001/roster/#Zero&#32;Wing">Zero Wing</A><br>
<b>Spring 2002:</b> <A HREF="spring2002/roster/#Just&#32;Us">Just Us</A><br>
</p>

          </div>
        </td>
        <td class="std"><img width="175" height="400" src="/images/random/" alt="Splash!"></td>
      </tr>
    </table>
<!-- END content -->
    <?php /* print_tail_menu() */ ?>
    <?php print_copyright('$Id$') ?>
    <?php /* print_trailer() */ ?>
  </body>
</html>

