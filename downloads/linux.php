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
There are a number of Netrek clients available for Linux. COW and Gytha are the most actively supported and developed. If you are interested in clients besides COW, we've got <a href="./linux-not-cow.php">a page full of them</a>. See the following table for instructions for installing COW on your system. Once installed, run the client by typing "netrek-client-cow" in a terminal window. </p>

<table>
<tr bgcolor="#0066FF"><th>Your distribution<th>Instructions

<tr bgcolor="#333333"><td>Debian<td><a href="./linux-cow.php#apt">Install the package from Debian</a>
<tr><td>Ubuntu<td><a href="./linux-cow.php#apt">Install the package from Ubuntu</a>
<tr bgcolor="#333333"><td>Mandriva<td>Install the package from Mandriva
<tr><td>Other<td><a href="./linux-cow.php#cowtarball">A binary tarball</a>
<tr bgcolor="#333333"><td>Other<td><a href="./linux-cow.php#sourcebuild">Build from source code</a>
<tr><td>
</table>


<?php
echo "</div>\n";
echo getFooter();
?>
