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
The following is from two accounts written by Kevin M Bernatz,
netrek handles: Akira, Redjac, Sun Tzu, MaTiLdA, Kill The Scums,
Fidei Defensor, Ame Damnee with some editing and explanatory material
by akb4/retrograde/xenophile.

<br><p>
While the concept of the suicide attack may have occurred in other games, 
such as Xpilot, Xtrek or Empire, the term "Ogg" was first used in either 
the Baker or Wean Hall computer labs at Carnegie Mellon University 
in I believe, November/December of 1990.


<p> A group of us, which included  
Jay Hui (TheSlug), Byron Sinor (Krang), and Steve Russel (Feakhelek) 
were playing netrek. The three of us were Feds.

<p>Netrek is a sixteen player game, with two teams of eight players. 
Each of the players is identified by their team's letter (F for Feds, 
O for Orions, and so on) followed by a number, 0 through 9 or "a" through "f".
So a Fed player in slot one is F1, a Rom in slot 11 is Rb, etc. Above
the player slots are slots for Robots and Observers, which are numbered from
"g" on up. 

<p>The server god at the time (Terence Chang, 
who brought netrek to CMU from Berkeley the year before), was 
watching the game and logged in as one of the non-player 
robot slots <em>Og</em>. 

<p>At this time, suiciding people with kills *NEVER* happened.  
Dogfighting reigned supreme, and cloaking was used only for planet taking,  
that is until Terence decided to teach us CMU boys alesson. </p> 

<p>Terence was one of the best players in the game and 
proceeded to terrorize Steve, such that at one point in the middle 
of the quiet computer lab, Steve burst out 
with "Help!! It's 'Oh' 'Gee'!". Followed quickly by additional 
screams of "Help" and the first uttering 
of "It's Ogggg! It's Ogggg! Helllppp!!". 

<p>Given the hilariousness 
of the situation, the term followed Steve and quickly 
was picked up among other netrek players.


<p>The two accounts from which the above were assembled 
<a href="./akira-history-of-ogg-sources.php">may be found here.</a>

<?
echo "</div>\n";
echo getFooter();
?>
