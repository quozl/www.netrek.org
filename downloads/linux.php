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

<h2>The Netrek COW client</h2><br>
<p>
There are a number of Netrek clients available for Linux. COW is the most actively supported and developed. If you are interested in clients besides COW, we've got <a href="./linux-not-cow.php">a page full of them</a>. See the following table for instructions for installing COW on your system. Once installed, run the client by typing "netrek-client-cow" in a terminal window. </p>

<table>
<tr bgcolor="#0066FF"><th>Your distribution<th>Instructions

<tr bgcolor="#333333"><td>Debian Squeeze <td><a href="./linux-cow.php#apt">Use an apt package tool, instructions at (1)</a>
<tr><td>Debian Sid     <td><a href="./linux-cow.php#apt">Use an apt package tool, instructions at (1)</a>
<tr bgcolor="#333333"><td>Ubuntu Jaunty Jackalope &nbsp;&nbsp;<td><a href="./linux-cow.php#apt">Use an apt package tool, instructions at (1)</a>

<tr><td>Debian Etch  <td><a href="./linux-cow.php#cow327">Follow the COW 3.2.7 .deb instructions at (2)</a>
<tr bgcolor="#333333"><td>Debian Lenny <td><a href="./linux-cow.php#cow327">Follow the COW 3.2.7 .deb instructions at (2)</a>
<tr><td>Ubuntu Hardy Heron<td><a href="./linux-cow.php#cow327">Follow the COW 3.2.7 .deb instructions at (2)</a>
<tr bgcolor="#333333"><td>Ubuntu Intrepid Ibex<td><a href="./linux-cow.php#cow327">Follow the COW 3.2.7 .deb instructions at (2)</a>
<tr><td>Not listed above, <br>give me a binary tarball<td><a href="./linux-cow.php#cowtarball">Try directions at (3)</a>
<tr bgcolor="#333333"><td>I want to build from source code<td><a href="./linux-cow.php#sourcebuild">Follow the source build directions at (4)</a>
<tr><td>
</table>


<?
echo "</div>\n";
echo getFooter();
?>
