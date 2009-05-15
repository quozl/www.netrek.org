<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require 'set_my_root.php';
require 'nhp.php';

doNhpHeader();

// echo getSidebarDownload();
echo getSidebarNews();
//echo getSidebarHints();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";
?>


<center><h1>Welcome to Netrek</h1></center>
<p>
This is the official home page.
Netrek is a multi-player battle simulation with a Star Trek theme. As
a player, you captain starships to engage enemy vessels, bomb armies
and invade planets in order to expand your team's space empire. The
ultimate goal is to genocide the enemy race, but the carnage of
battles along the way is ruthlessly fast paced and a lot of fun!
<br><br>
It's a team-oriented game with realtime dogfighting but involving a lot
of ongoing strategy. <br>It costs no money to play, there are no ads, and
it's open source. 
</p>

<div id="getstartedbox">
<center>
<h2>To get started, download a client:</h2><br>
<table>
<tr><td><a href="./files/NetrekXP_2009/netrekinstall2009v1.exe"><img src="./img/dl_icon_win.png" width="25" height="22" alt="Windows" /></a> For Windows, choose <a href="./files/NetrekXP_2009/netrekinstall2009v1.exe"><tt>Netrek XP 2009 v1.0</tt></a>, <br>or for a small download, <a href="../files/NetrekXP_Mod/NetrekXPMod-4.4.0.4.installer.exe"><tt>Netrek XP Mod v4.4.0.4</tt></a>
<tr><td><a href="http://www.netrek.org/files/MacTrek/MacTrek-1.4.0.zip"><img src="./img/dl_icon_macosx.png" width="25" height="22" alt="Mac OS X"></a> For Apple's OS X, grab <a href="http://www.netrek.org/files/MacTrek/MacTrek-1.4.0.zip"><tt>MacTrek-1.4.0.zip</tt></a>
<tr><td><img src="./img/dl_icon_linux.png" width="25" height="22" alt="Linux" />
  For Linux, <a href="./downloads/linux.php">See this page</a>
</table>

<h3>Then, read <a href="./beginner/quickstartguide.php">Netrek in one paragraph</a> or the full <a href="./beginner/newbie.php">Newbie Guide</a> and start playing.</h3> <br>
</center>
</div>

<br><br>
<center><h2>New Utility: Netrek Game On!</h2></center>

<p>There's a brand new utility for Netrek called "Netrek Game On!". It checks the metaservers and lets you know how many players are on line. It's in Java and should run on Windows, Linux, or Macintosh. Under Windows, you can iconize it to the task bar and keep an eye on when to play. Grab the latest version from <a href="http://www.netrek.org/files/Netrek_Game_On/">the files section.</a>

<p><center><h2>Everything Else</h2></center>
<h2><a href="people/"><img src="img/icon_people.png" alt="">
Communicate</a></h2>
Contact the Netrek Community! We've got mailing lists, web forums, an irc
channel, and a Usenet newsgroup. Find out about Gatherings past and future,
as well as ongoing game changes and development.

<h2><a href="clueguides/"><img src="img/icon_clue.png" alt="">
Clue Guides. Further Reading</a></h2>
In-depth guides covering almost any aspect of Netrek tactics and
strategies. Good for newbies, intermediates and even very 
experienced players. 

<h2><a href="downloads/"><img src="img/icon_downloads.png" alt="">
Downloads</a></h2>
Since its start Netrek has been developed as Open Source software.
Netrek clients and source code are freely
available in this download section. Nearly all common UNIX flavors including
Mac OS X and Linux, as well as Windows are supported. 
Download your client and join the game!


<h2><a href="servers/"><img src="img/icon_servers2.png" alt="">
Servers</a></h2>
All about the <a href="./servers/variants.php">different kinds of Netrek</a> (Bronco, INL, Sturgeon, Hockey 
and more) and how the <a href="./servers/metaservers.php">Metaservers</a> show
you what kind of games are happening and <a href="./servers/machines.php">what machines</a> they are happening on. 

<h2><a href="leagues/"><img src="img/icon_experienced.png" alt="">
Leagues and Clue Games</a></h2>
Once you can play well, Clue Games are where it's at. Form a team with
friends and challenge the world. Sometimes there is Netrek league play, 
where five or more teams form and play a season
against each other. Currently there isn't much league action, but you never
know when things will start up again. You can find stats and game recordings
from past league play here, including the International Netrek League (INL),
the World Netrek League (WNL), and the Draft League (DL), as well
as links for others.<br><br>

<h2><a href="about/"><img src="img/icon_about.png" alt="">
The First Internet Team Game</a></h2>
What is Netrek? Learn more about the history of this addictive game 
with its Star Trek roots and what sets it apart from the rest of the pack.

<h2><a href="developer/"><img src="img/icon_wrench.png" alt="">
Develop</a></h2>
Want to code on the original team Internet game? We've got clients,
we've got servers, we've got a network protocol with RSA client
verification, all sitting in version control
repositories and open source for your hacking pleasure. A little web
page help and clue guide editing would be cool, too.

<h2><a href="links/"><img src="img/icon_chains.png" alt="">
Links</a></h2>
There are a lot more Netrek resources out there on the World Wide Web.
In this section we do a futile attempt to list the most prominent ones.


<?
echo "</div>\n";
echo getFooter();
?>
