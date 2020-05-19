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

echo getSidebarDownload();
echo getSidebarHints();
echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>

<br><br>
<center><h2>Quick Start Guide: Once you have a client installed:<h2></center>

<h3><ul>
<li>fire it up, choose a server, log in as guest, choose a team. 
<li>0 thru 9 sets your speed, 
<li>left mouse button is torpedos, middle mouse button (scroll wheel) is phasers, right mouse button sets course. 
<li>"s" to raise or drop your shields.
<li>"mt" to send a message to your teammates, "mA" to send a message to everyone. 
<li>Read messages. This is very important. 
<li>watch your fuel level, and destroy the other team's ships. Don't worry about getting killed; just grab a new ship and jump back in.</h3>
</ul>

<p><p>Netrek is a pretty complicated game, so you might want to 
<a href="./newbie.php">read the newbieguide</a> 
for a step-by-step intro.


<?php
echo "</div>\n";
echo getFooter();
?>
