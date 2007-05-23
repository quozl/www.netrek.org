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

//echo getSidebarDownload();
//echo getSidebarNews();
echo getSidebarHints();
//echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";
?>


<h1>Users Guide to the INL Server</h1>
<p>
This help file is intended to give the reader everything he/she needs to
know about playing timed games on INL type servers. The reader is assumed
to be familiar with play on an ordinary pickup server, I describe only
the differences here. I've attempted to give both general information and
some of the subtle quirks that might be relevant. I've assumed standard
INL server version 4.08 here; the INL robot version of bronco servers may
have some differences.
</p>

Sections:
<ol style="list-style-type: upper-roman">
<li>Connecting to INL servers.</li>
<li>INL gameplay.</li>
<li>Useful commands.</li>
<li>Random stuff.</li>
<li>Captains commands.</li>
</ol>

<h2>I. Connecting to INL servers</h2>
<p>
INL servers usually accept connections on 4 different ports: a player
port and an observer port for each team, home and away. The first 8 players
to connect to a given player port join the game on that team (home or away);
any additional connections are placed on a wait queue (exactly like a pickup
WQ, except here the two teams have separate queues). Anyone connecting to
an observer port becomes an observer of that team (exactly like observers
in pickup, but you're forced to one team). Only 4 observer slots are
supported; the first 4 connections to either observer port become observers,
any additional connections are refused with the error message "Sorry, you
cannot play xtrek now. Try again later."
</p>

<p>
(Some server configurations can support more players and observers,
but at this time 8 players per team and 4 observers total is the default.)
</p>

<p>
Games on INL servers are usually announced in a form such as
	"game at continuum.real-time.com 4566(4000) 4577(5000)"
</p>

<p>
  This example shows the default INL ports: 4566 for the home players, 4000
for home observers, 4577 for away players, 5000 for away observers. The ports
can be reset to different values by the server god.
</p>

<p>
To connect with a client called "netrek", use a command like
<br /><tt>netrek -h continuum.real-time.com -p 4566</tt><br />
to specify the host and port. If you leave off the port # option, the client
defaults to port 2592 (the standard for pickup servers).
</p>

<p>
A list of public INL servers is kept at the
<a href="http://www.inl.org/">INL web page</a>.
</p>

<h2>II. INL gameplay</h2>
<p>
In between actual games, the server runs in a chaos mode where players
can shoot at the other team and get infinite bases (useful for warmup).
If you'd rather not get hunted down, there's a captain's command called
"confine" which creates a box around each teams' space to keep enemies
out. When the server first comes up, the home team is fed and the away
team rom. Everyone can see all planets in order to pick races. Bombing
is disabled, but you can take planets by beaming enough armies. This
hides the planet from the enemy, which can be annoying if they want to
know what it's resources are.
</p>

<p>
INL servers use a special resource distribution which is duplicated on many
pickup servers. The formula is: the home planet is fuel/repair. To the other
4 core planets are randomly distributed one agri, one repair, and two fuel
resources (completely uncorrelated). An agri is placed on one of the outer
4 planets excluding the corner, it's adjacent planet is fuel. The other
three planets randomly get 2 fuel and one repair (again uncorrelated).
</p>

<p>
The actual game begins when the captains of each team send start commands.
The race of each team is chosen by the captain before the game. When both
captains send start, everyone blows up and is forced to join their new team.
After a 60 second interlude, everyone blows up again and the game is on!
The initial armies per planet is set by the captains (default=17), all
enemy planets are hidden, and all player stats are reset to zero.
</p>

<p>
The length of the game is also set by the captains (default=90 minutes of
regulation time, 30 minutes of overtime). The server sends to ALL a message
announcing the time left at regular intervals (you can get the exact time
left with the 'time' command, see below). The actual game tends to take
somewhat longer, since captains can pause the game to handle connection
problems or call timeouts. When the game is paused enemy ships disappear,
enemy shots are hidden, all objects stop moving, and planets do not grow
armies, but players can still send messages as usual. When your ship
suddenly stops moving, check the ALL board to see if a pause was called.
</p>

<p>
The only differences between the actual play on an INL server as opposed
to a standard vanilla server is that everyone advances in rank at the
guest rate (5x normal) and the rank for an SB is set to Ensign (so you can
get a base immediately). Note that the SB rebuild time of 30 minutes still
applies; losing your base at the wrong time can be unpleasant.
</p>

<p>
At the end of regulation time, everyone blows up and winning conditions
are checked. The victory conditions are that one team has at least 11 planets,
and the opposing team has no more than 8 planets. As an exception, if at any
time one team has no planets, the other team wins instantly (genocide).
</p>

<p>
If neither team has a victory at the end of regulation, the game goes to
a sudden death overtime. The game continues unchanged, except that everyone
has no kills and is now at their homeworld. Any armies on ships at the end
of regulation are placed on the homeworld (or some available planet, if the
homeworld isn't yours). The first team to satisfy the victory conditions at
any moment wins instantly. If there is still no winner at the end of overtime,
the game ends in a tie. (Exception: if the server was compiled with playoff
mode enabled, then there are no ties: additional overtime periods occur with
the winning conditions steadily becoming easier. In practice, in INL playoff
games the overtime length is simply set to 9999 or something, and someone
wins eventually).
</p>

<p>
Note that, except for genocide, you must own 11 planets to win;
10 planets + 3 neutrals isn't enough. The standard OT win is to take one
enemy planet and neutralize another, but more exotic configurations are
possible.
</p>

<h2>III. Useful commands</h2>
<p>
Any message you send to yourself is interpreted as a server command. Most
valid commands are for use by captains to control the server (see the
captain's commands section below), but some can be used by all players.
</p>

<table>
<tr><td>help</td><td>gives list of valid commands.</td></tr>
<tr><td>time</td><td>tells you how much time is left in the current period
	(regulation or overtime).</td></tr>
<tr><td>queue</td><td>tells how many people are on each queue.</td></tr>
<tr><td>reserve</td><td>announce that you want to use the server at a
	particular time, or look at other people's reservations. Very
	unofficial.</td></tr>
<tr><td>team</td><td>tells you if you are on the home or away team.</td></tr>
<tr><td>home/away</td><td>originally intended to allow people to switch
	from one team to the other. Disabled since it confuses the server
	badly.</td></tr>
</table>

<p>
Example:
</p>

<pre>
Fb->Fb  time
God->Fb There are 47.2417 minutes left in regulation time
</pre>


<h2>IV. Random stuff</h2>
<p>
When the game starts, the server sometimes gets confused and lets a
ninth player in on some team (he takes a normal observer slot, but is a
real player). If this happens, just quit out.
</p>

<p>
All sorts of other bad foo can happen at game start, the server occasionally
crashes or people get ghostbusted. The least confusing scenario is if everyone
is alive when the server wants to kill them, and no one connects to the
server while it's moving people around. Do not taunt happy fun server.
</p>

<p>
Some servers have a bug with the ignore feature: if someone you're
ignoring sends you a message, you ghostbust. Beware.
</p>

<p>
The ? command sent to someone gives, among other stats, their non-base
hours. This means after your first base dies, his hours tell you how long
ago it was and thus when the next base will be available. There is no
sbtimer command as on newer bronco servers.
</p>


<h2>V. Captains commands</h2>
<p>
The server can be controlled by a number of commands which are only
usable by the current captain. These are described here. Also, a number
of commands only take effect if both captains send the same command;
these are indicated with a (2).
</p>

<p>
captain		Become captain of your team. Command fails if a non-dead
		member of your team is already captain. If the current
		captain is dead, he stops being captain (send captain again
		to become captain yourself). Observers can be captain
		(and are always considered dead). Being captain enables you
		to use captain only commands.
</p>

<p>
uncaptain	If you're captain, stop being captain.
</p>

<p>
commands for starting up a game:
</p>

<p>
fed/rom/kli/ori/pass	These commands allow you to choose what team you
		want to be. The away team gets first pick; they can select
		a race or pass first pick to the home team. After the away
		team makes a choice, the home team can choose (but only an
		adjacent race, if applicable, and can never pass). If the
		away team had passed, then they get their choice. You can
		change your choice as many times as you want up until the
		opposing team makes their choice (sending pass a second
		time reclaims first race pick).
</p>

<p>
tname string	Sets your team's name to string, max 19 characters.
</p>

<p>
gametime x y 	(2) Requests a game length of x minutes of regulation
		and y minutes of overtime. Minimum 1 minute for each. Set
		when both captains have sent the same request (this is true
		for all (2) commands).
</p>

<p>
army x		(2) Requests setting starting armies to x per planet.
</p>

<p>
newgalaxy	(2) Requests that a new galaxy be built. This returns all
		planets to their proper owners and redetermines their
		resources. This command does not reset any race choices
		previously made. Also used to start a new game after the
		end of another.
</p>

<p>
register	(2) request that the stats be emailed to the INL statboy.
		Only used for official INL games.
</p>

<p>
start		(2) request that the game start.

</p>

<p>
To start a game, each captain must pick a race, set a team name, and send
start.
</p>

<p>

commands during the game:
</p>

<p>
timeout		Toggles request for a timeout (like in football/basketball).
		The timeout happens after 5 minutes have passed, when the
		server otherwise becomes paused, or when all ships are a
		certain minimum distance away from enemy ships. This
		distance starts at the yellow alert distance and decreases
		linearly to zero over the 5 minutes (this was designed to
		minimize the disruption of the game). The default is one
		timeout of 5 minutes per team. The server sends the message
		"Game is paused." at the start and each minute thereafter.
</p>

<p>
pause		(2) stops the game immediately.
</p>

<p>
pausenow	Exactly like pause, but doesn't require both captains;
		intended for when one team is completely busted and
		can't pause. Note that INL rules cover the acceptable use
		of both pause and pausenow for official INL games.
</p>

<p>
continue	(2) resumes play from a pause or timeout. A continue is
		automatically imposed when a timeout expires, or 20 minutes
		after a pause is initiated. A 10 second countdown to the
		ALL board precedes the restarting of play.
</p>

<p>
restart		(2) requests that the game be terminated immediately. This
		is only relevant within a current game. This should be
		followed by newgalaxy to start the next game (also use
		newgalaxy, not restart, when the previous game ended normally).
</p>

<p>
Other commands:
</p>

<p>
free x		If slot x is currently dead, then the server disconnects
		that person's connection opening the slot for the next
		person on the queue. Intended to get rid of ghostbusted
		players so that a sub from the queue can enter. This won't
		work if the ghostbusted player isn't dead; kill him first.
		This can be used to kick out people on your team that you
		don't like, but that's highly antisocial.
		Example: Fb->Fb free 4
</p>

<p>
confine		Toggles confine mode, which is enabled if either captain
		has requested it (only during the warmup time). Puts a
		square barrier around each space at about the frontline
		planets that prevents enemy ships from passing through.
		Ships inside the barrier are teleported back outside. It
		is possible to lock a server by becoming captain, setting
		confine, and orbiting a fuel planet cloaked. Obnoxious
		with a capital O.
</p>

<p>
restrict cmd	Toggle allowing command cmd to be used by anyone, or
		captain only. Almost never used.
</p>



<?
echo "</div>\n";
echo getFooter();
?>
