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


<p><h2>Netrek Variants</h2>
Or, what's all this "server type" stuff?
<br><br>
Netrek has a long development history. Probably the longest of any Internet
based game. Lots of ideas have been tried, and many discarded. 
<br>Several variants remain viable. 


<ul>
<li><b>Bronco</b><br>
Named for the computer it was originally hosted on, Bronco is the basis of 
current netrek. It's the purist's game, incredibly well balanced. Like chess
or basketball, you can play for hundreds of hours (or more...) and 
still have things 
to learn. It's the best place to pick up basic dogfighting skills as well 
as learning to work with a team. Most netrek is Bronco. </li>

<li><b>INL</b><br>
INL stands for "International Netrek League". It's basically Bronco, but with team captains who can choose a scoring system and time limits. It's used for clue games, team versus the world, and league games. There is a <a href="inl_server_guide.php">Users Guide to the INL Server</a>.

<li><b>Base Practice</b><br>
Base Practice servers are, oddly enough, used to learn how to be a good starbase pilot. No rank is needed to get a base, and special robots mass attack ("ogg")the practice bases. 

<li><b>Sturgeon</b><br>
Sturgeon explores several possible alterations to the game. Ships can use kills
to purchase weapon upgrades. The powerful Galaxy Class (GA) ship is available. Most experienced players feel that Sturgeon is a bit too easy for them, 
and teaches new players sloppy habits.</li>

<li><b>Netrek Hockey</b><br>
Netrek Hockey is a cross between Netrek
and, you guessed it, Ice Hockey. The planets are laid out to form a rectangular
<a href="../img/netrek-hockey-rink.jpg">hockey-style rink, including goals</a>. Ships use tractors and pressors to shove a puck around, fighting with phasers and torpedos as needed to get enemies out of the way.
</li>

<li><b>Chaos</b><br>
These servers include various modifications designed to make the game chaotic.
Typically, this will include Galaxy Class ships (GA's), a galaxy which wraps
around, and 3 on 3 T-Mode.

<li><b><a href="http://paradise.netrek.org">Paradise</a></b><br>
Paradise is the most unusual Netrek. Paradise involves extensions to the
game system, so you need a Paradise client in order to play it; the usual
clients won't do. There is no Paradise client for Windows. 
Paradise has planets that move, suns, asteroid fields, 
eight additional ship types, missiles, and more. 
Some players loved it, others hated it; it has not
been actively played in a number of years. As of 2007, noises are being made 
of restarting play. Paradise has its own webpages at <a href="http://paradise.netrek.org">http://paradise.netrek.org</a></li>
</ul>

<p><h2>Kinds of Games</h2>

<br><p>
In addition to the variants of Netrek being played as described above, 
there is also the important distinction of Pick-up, Clue, and 
Established Team games. 
<ul>
<li>A pick-up game is played by whoever happens along. 
<li>A Clue game is played by people who know what they are doing, at least somewhat. There is
<a href="http://groups.google.com/group/netrek-clue-games/">a mailing list to announce Clue games</a>, 
and when people sign in to a server, 
it will ask them a simple question to make sure that they aren't total newbies.
In a typical open Clue game, team captains will choose players at the start
of the game in order to balance the teams so that the game isn't too uneven.
<li>Then there are Established Team games. A bunch of people can form a team together, 
and announce that they challenge the whole world to a game, or schedule one 
or more games against other established teams. 
</ul>

<br><p><h2>Specific Servers</h2>
This page is about types of servers and the games they host; 
there is also <a href="./machines.php">a page that discusses 
specific server machines</a> you might play on. </p>


<?
echo "</div>\n";
echo getFooter();
?>
