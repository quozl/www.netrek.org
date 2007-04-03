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

<h1>Clue Guides</h1>
<p>
Over the years there have been many essays written about the game of Netrek
by many great players.
In this section you can find a summary of some of the best pieces of advise
that will help you grow as a Netrek player.
</p>

<p>
<blink>This section is still under construction! Request to all old farths:
open up your treasue troves and send in some pearls of wisdom.</blink>
</p>

<h2><a href="ships/">Ship Types</a></h2>
<ul>
<li><a href="ships/#sc">SC - Scout</a><br />
Puny, fast, good for high-speed harassment and bombing.</li>
<li><a href="ships/#dd">DD - Destroyer</a><br />
Ok if you're good at dodging and evading.</li>
<li><a href="ships/#ca">CA - Cruiser</a><br />
The default and most all-round ship.</li>
<li><a href="ships/#bb">BB - Battle Ship</a><br />
Tough, powerful, but tricky to maneuver.</li>
<li><a href="ships/#as">AS - Assault Ship</a><br />
For planet-killing, 3 armies/kill, tough hulls.</li>
<li><a href="ships/#sb">SB - Star Base</a><br />
Only allowed to be run by experienced players.</li>
</ul>

<h2>Skills</h2>
<ul>
<li>Dogfighting<br /></li>
<li>Buddying<br /></li>
</ul>

<h2>Roles</h2>
<ul>
<li>ASW - Anti Scout Warfare<br /></li>
<li>Bombing<br /></li>
<li>Escorting<br /></li>
<li>Ogging<br /></li>
<li>Penetrating<br /></li>
<li>SC Dropping<br /></li>
<li>Taking<br /></li>
</ul>

<h2>Tactics</h2>
<ul>
<li>Base Oggs<br /></li>
<li>LPS - Last Planet Stand<br /></li>
<li>Sliding<br /></li>
<li>Dual Scouts<br /></li>
</ul>

<h2>Strategy</h2>
<ul>
<li><br /></li>
</ul>

<h2>Technical</h2>
<ul>
<li>Keymaps<br /></li>
<li><br /></li>
</ul>

<?
echo "</div>\n";
echo getFooter();
?>
