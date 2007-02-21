<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require '../nhp.php';

doNhpHeader();

echo getSidebarDownload();
echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>
<h1>Quick Start Guide</h1>
<p>
</p>

<h2>Metaserver Window</h2>
<p>
This will probably be the first window you will see when starting the
client. The window appears after successfull connection to metaserver
that holds list of available netrek servers. Here is how it looks:
</p>

<img src="metaserverwindow.png" alt="">

<p>
There are several types of games played in Netrek Universe. It could be
Bronco, Hockey, Chaos, Dogfight and some others. Most of servers you'll
see these days are either Bronco or Hockey. Bronco is the most popular
type of Netrek, so go on and click on some Bronco server to connect to
the game.
</p>

<p>
In order to <b>join</b> the game to play you should point on one of
the servers and click left mouse button. If you wish to <b>observe</b>
the game instead of playing - click right mouse button. Clicking on one
of yellow links will open your web browser on the link's main site.
</p>

<h2>Login Screen</h2>
<p>
After successfull connection to the server you will see the main game
window. It is divided to four parts initially, but we will get familiar
with each of them in the next topics.
</p>

<p>
You will be asked to supply your username and password to join the game
(or observe the game). The login window is located on the top left of
main screen:
</p>

<img src="loginwindow.png" alt="">

<p>
There are two types of logins on most servers - <b>guest</b> user and
<b>authenticated</b> user. If you type "guest" as your name or push
<i>Ctrl-g</i> you will not be required to supply password. There are
some differences between guest users and authenticated users. The major
difference is that no information is written to the server players
database for guests. So when you disconnect from the game all your
statistics are wiped out.
</p>

<p>
For authenticated users everything is saved to players database, so when
you come next time to the server and supply your name and password you
will start the game with statistics that were saved for you from the
last session.
</p>

<p>
<h2>Joining The Game</h2>
After successfull login you will be presented following window: 
</p>

<img src="joinwindow.png" alt="">

<p>
Top left part of the Team Selection window is called Message Of The Day
or MOTD. This window contains whatever information server administrator
(GOD) decided to display. You can scroll forward and backwards through
the MotD using '<tt>f</tt>' and '<tt>b</tt>' keys. You can also press
'<tt>R</tt>' to reset your player statistics.
</p>

<p>
The top right part of the main screen will contain server settings. These
settings define what type of server it is, whether RSA client is required
to play a game there, how much players are required to start Tournament
mode (T-mode), etc.
</p>

<h2>Team Selection</h2>
<p>
Right below MOTD window you have Team (Race) Selection part:
</p>

<img src="teamselection.png" alt="">

<p>
There exist four races in Netrek - Federation, Romulans, Klingons and
Orions. Each of the races has different ship pictures (though each ship
type has exactly same power and weapons).
The numbers that you see represent the number of players playing per
race. You can only join races which have not been greyed-out. During
T-mode (Tournament mode) you will only be allowed to join one of
the two fighting races.
</p>

<p>
In order to join a team click with left mouse button on the team box
of your choice. To select an alternative ship type, point with your
mouse at the team box and press one of the following keys:
<ul>
	<li>s - Scout (SC). Puny, fast, good for high-speed harassment and bombing.</li>
	<li>d - Destroyer (DD). Ok if you're good at dodging and evading.</li>
	<li>c - Cruiser (CA). The default and most all-round ship.</li>
	<li>b - Battleship (BB). Tough, powerful, but tricky to maneuver.</li>
	<li>a - Assault (AS). For planet-killing, 3 armies/kill, tough hulls.</li>
	<li>o - Starbase (SB). Only allowed to be run by experienced players.</li>
</ul>

If you want to quit - click on the clock box.
</p>

<p>
After each death you will return to this window. Hint: a quick shortcut
to get back to same team in the same ship is to push 'space' button.
</p>

Main Game Windows

Congratulations, Captain. You sucessfully joined Netrek Universe: 

<img src="maingamewindow.png" alt="">

Tactical or Local is the window where you will have most of fun in Netrek.
It is on the top left of the main screen. Your ship is always centered in it

<h2>Galaxy Window</h2>
<p>
Galaxy or Map is the window where you will collect very useful information on
what the hell is happening here.
<p>
This is a picture of the whole galaxy. All planets have fixed location
(though there is a server setting that allows galaxy to rotate). The only resourse
that doesn't change from game to game is the planet name, so try to remember planet
names. This will be very useful.
<p>
<img src="images\galaxy.gif">

<p>
Every planet can be owned by one of four races or can be independent.
The ownership of the planet is defined by armies the planet has. If there are
Romulan armies on it then it is owned by Romulan Empire. The ownership of the planet
can be changed by dropping your armies on enemy planets. 1 army kills 1 enemy army.
When you kill all enemy armies the planet becomes not owned by anyone and thus can
be taken.
<p>
Initially only your team planets are visible (i.e. have resources like fuel/repair/agri
visible when you try to get info on planet). Other planets are grayed out and you can't
get any information on them. In order for planet to become visibile to your team one
of team players should orbit it.
<p>



<h2>Dashboard</h2>
<p>
Dashboard window contains vital ship information and weapons used:
<p>
<img src="images\dashboard.gif">
<p>
The window is divided roughly in two parts - <b>Flags</b> and <b>Gauges</b>

<p>
Let's get familiar with them:
<ul>
<li>Flags from left to right:</li>
	<ul>
	<li>S - shields on</li>
	<li>G/Y/R - flag that shows proxymity alert. G for green, Y - yellow, R - red</li>
	<li>L - you are locked on something (player or planet)</li>
	<li>R - you are repairing</li>

	<li>B - you are bombing</li>
	<li>O - you are orbiting planet</li>
	<li>D - you are docking startbase (or if you are starbase then docking is enabled)</li>
	<li>C - you are cloaked</li>
	<li>W - your weapons are hot</li>
	<li>E - your engine is hot</li>

	<li>P/T - you are pressoring or tractoring somebody</li>
	<li>u/d - you are beaming armies up or down</li>
	</ul>
<li>Gauges:</li>
	<ul>
	<li>Sp - ship speed</li>
	<li>Sh - shields damage points</li>

	<li>Da - hull damage points</li>
	<li>Ar - armies carried</li>
	<li>Wt - weapons temperature</li>
	<li>Et - egnine temperature</li>
	<li>Fu - fuel available</li>
	<li>Kills - number of kills</li>

	</ul>
</ul>



<h2>Message Windows</h2>
<p>
There are roughly 5 types of messages in Netrek:
<ul>
<li>All - such message is seen by everyone in game</li>
<li>Team - this message is seen only by team (race) that it was sent to</li>

<li>Individual - this message is only see by person it was sent to</li>
<li>Phaser - this message is sent from GOD (server) to player that used phaser. The message contains statistics information on damage</li>
<li>Kill - this message is sent by GOD (server) to everyone. Every message contains data on who was killed by whom, what kind of weapon caused death and how much credits were earned</li>
</li>
</ul>
<p>
There are 6 different windows that can be used to see these messages:
<ul>
<li>Review - any message is seen there</li>
<li>All - only messages to everyone are seen there</li>
<li>Team - only team messages are seen there</li>

<li>Individual - only messages sent to you are seen there</li>
<li>Phaser - phaser messages are see there</li>
<li>Kill - only kill messages are seen there</li>
</ul>
<p>
This is how Review window looks:
<p>
<img src="images\messages.gif">
<p>
The default client setup is to show only Review window, so all messages your client receives are displayed there.
It is common to argue about best message window setups. Most veterans tend to play with only one Review
window. This way they know exact time flow of messages (with multiple windows it is impossible to find out what message
arrived before or after any given one).


<h2>Player List</h2>
<p>
Player list window contains information on players in the game. 
<p>
<img src="images\playerlist.gif">
<p>
The window contains both players and observers, but can be configured to display only part of the at a time.

<p>
Today servers allow 32 players to exist in game - half playing, half observing. It is easy to see players from
observers by looking at their player number (letter). Anyone below hexadecimal 'f' (15) will be player, others are
observers.
<p>
The list contains useful information on other players, such as their name and login, statistics, hours spent playing, etc.
You will get familiar with all details after some time of playing.





<?
echo "</div>\n";
echo getFooter();
?>
