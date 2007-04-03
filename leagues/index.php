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


<h1>Netrek Leagues and Clue Games</h1>
<p>
Netrek games essentially fall into two categories,
&quot;pickup&quot; and &quot;clue&quot; games. Pickup games are played
on <a href="../servers/">public servers</a> with players that are
rotated in and out as they come and go. Because pickup games are less
organized and cooperative, they are also less competitive. While pickup
play can be fun and exciting, organized clue games bring a whole new
level of enjoyment and competition to Netrek.
</p>

<p>
Clue and League games are typically reserved for veteran
players who have logged hundreds, often thousands of hours on pickup
servers. But newer pickup players are usually encouraged to try a few
clue games and maybe even enter one of the Leagues. However, you should
familiarize yourself with the rules and etiquette before joining up.
</p>

<p>
<h3>Clue</h3>
The best place to start becoming &quot;clued&quot; is to
read, practice, practice, ask, and practice. There are many guides
available at the <a href="../beginner/">Beginner</a> and
<a href="../clueguides/">Clue Guides</a> sections that aim
at helping you improve yourself. 
Once you think you are ready, join <a href="http://groups.google.com/group/netrek-clue-games/">the clue mailing list</a>
and play on a few organized games. 

<p>
<h3>Teams</h3>
Sometimes a bunch of people will band together to form a team. 
Then they'll arrange to play other teams, or call a clue game where
their team takes on the World. <a href="http://groups.google.com/group/netrek-clue-games/">The clue mailing list</a> will tell you where and when to
trash those uppity punks.

<p>
<h3>Leagues</h3>
When there are enough teams around, say five or more, a league is formed 
and there's a season of play. There hasn't been league play in a number
of years, but recently (early 2007) we've had some team on team action, 
and there have been mutterings about starting a new Draft League to 
start bringing more people up to speed on league-style play. 

<p><h3>History</h3>
See the <a href="../about/leagues.php">League History pages</a> 
for information on past  season records, scores, and statistics on
various leagues, including the International Netrek League (INL),
World Netrek League (WNL), European Netrek League (ENL), 
International Netrek Hockey League (INHL), and the Paradise Netrek League. 


<?
echo "</div>\n";
echo getFooter();
?>
