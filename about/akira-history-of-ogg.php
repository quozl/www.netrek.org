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

<h2>The Story of Ogg</h2>

<br><p>
Written July 6, 2006 by KMB, 
netrek handles: Akira, Redjac, Sun Tzu, MaTiLdA, Kill The Scums, Fidei Defensor, Ame Damnee. 

<br><p>
While the concept of the suicide attack may have occurred in other games, 
such as Xpilot, Xtrek or Empire, the term "Ogg" was first used in either 
the Baker or Wean Hall computer labs at Carnegie Mellon University 
in the 1990-1991 school year (I do not remember which exact lab or 
whether it was before or after Xmas break that year). 

<p>Myself, Jay Hui and Steve Racunus (sp?) 
were playing netrek in the early hours 
of the morning. Steve was a Fed (F# something) and was scumming against 
a lone Orion player. The server god at the time (Terence Chang, 
who brought netrek to CMU from Berkeley the year before), was 
watching the game and logged in as one of the non-player 
robot slots (the game is 8x8, so the player slots are 0-9,a,b,c,d,e, and f). 

<p>
Since he joined the Orions and was the first "robot" in the game, 
he was "Og". Terence was one of the best players in the game and 
proceeded to terrorize Steve, such that at one point in the middle 
of the quiet computer lab, Steve burst out 
with "Help!! It's 'Oh' 'Gee'!". Followed quickly by additional 
screams of "Help" and the first uttering 
of "It's Ogggg! It's Ogggg! Helllppp!!". 

<p>Given the hilariousness 
of the situation, the term followed Steve and quickly 
was picked up among other netrek players.

<p>
(above formatted by akb4/Retrograde/Xenophile)

<?
echo "</div>\n";
echo getFooter();
?>
