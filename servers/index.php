<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require '../set_my_root.php';
require '../nhp.php';

doNhpHeader();

echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>

<h1>Netrek Servers</h1>

<p>
This section has three topics:
<p>
<h3<a href="./variants.php">What kinds of Netrek Variants are there?</a></h3>
There are a bunch of flavors of Netrek, from Bronco to Paradise.
This section explains all that, as well as the differences between
Pickup and Clue games. 

<p>
<h3><a href="./machines.php">Individual Servers</a></h3>
OK, so there are a bunch of kinds of Netrek. This section 
discusses what machines host which kinds.


<p>
<h3><a href="./metaservers.php">Metaservers</a></h3>
Metaservers are the servers that show you the list of machines to 
play on when you first start your client. Mostly you don't have
to worry about them, but if you're curious, there are some details
to know.

<p><h3>Your Own Server</h3>
If you are interested in running your own server 
(or helping with server development), you can check out the 
<a href="../developer/">developer pages</a> for additional information. 
</p>







<?php
echo "</div>\n";
echo getFooter();
?>
