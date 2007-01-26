<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require 'nhp.php';

doNhpHeader();

echo getSidebarDownload();
echo getSidebarNews();
//echo getSidebarHints();
echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";
?>


<h1>Welcome to Netrek</h1>
<p>
This is the official home page.
Netrek is a multi-player battle simulation with a Star Trek theme. It
is a team-oriented strategy game with a first person perspective that
progresses in real time over the Internet. As a player, you captain
starships to engage enemy vessels, bomb armies and invade planets in
order to expand your team's space empire. The ultimate goal is to
genocide the enemy race, but the carnage of battles along the way is
ruthlessly fast paced and a lot of fun!
</p>

<h2><a href="about/"><img src="img/icon_about.png" alt="">
The First Online <i>Team</i> Game</a></h2>
What is Netrek? Learn more about this addictive game with its Star Trek
roots and what sets it apart from the rest of the pack.

<h2><a href="downloads/"><img src="img/icon_downloads.png" alt="">
Download Netrek for Free</a></h2>
Since the start Netrek was developed according to the Open Source Model,
like for instance Linux.  Netrek source code and clients are freely
available in this download section. Nearly all common UNIX flavors, Mac,
Linux as well as Windows are supported. Download your client and join
the game!

<h2><a href="beginner/"><img src="img/icon_beginner.png" alt="">
Beginners Section: Get Started!</a></h2>
The step-to-step guides in this section introduce you to the basics
of Netrek. Starting Netrek, logging in, choosing a ship is all
explained. Manouvring, shooting, cloaking, bombing, dogfighting are a
few of many skills that are covered.

<h2><a href="clueguides/"><img src="img/icon_clue.png" alt="">
Clue Guides. Further Reading</a></h2>
In-depth guides covering almost any aspect of Netrek tactics and
strategies. Strongly advised to the more experienced player. And
of course required if you play in one of the professional Leagues.

<h2><a href="servers/"><img src="img/icon_servers2.png" alt="">
Servers</a></h2>
There are a lot of Netrek pick-up servers you can play at around the world.
Use the metaserver to find them. We also list the regular INL servers.

<h2><a href="leagues/"><img src="img/icon_experienced.png" alt="">
Professional Gamers Leagues</a></h2>
Usually three times per year tournament leagues are organised through
which various teams get together to play organized Netrek games. The
main three are the International Netrek League (INL), the European Netrek
League (ENL) and the <a href="leagues/dl/">Draft League</a> (DL).

<h2><a href="people/"><img src="img/icon_people.png" alt="">
Meet the Players</a></h2>
Contact the Netrek Community! Join discussions on our news group or
mailinglists. Play with your friends in organised teams.
Meet players from all over the world at Gatherings.

<h2><a href="links/"><img src="img/icon_chains.png" alt="">
Links</a></h2>
There are a lot more Netrek resources out there on the World Wide Web.
In this section we do a futile attempt to list the most prominent ones.


<?
echo "</div>\n";
echo getFooter();
?>
