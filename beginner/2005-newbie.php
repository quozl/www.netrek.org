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

<h1>Netrek Newbie Manual</h1>

<ul>
<PRE class=title >T H E
&nbsp;_&nbsp;&nbsp; _&nbsp;&nbsp; _____&nbsp;&nbsp; _____&nbsp;&nbsp; ____&nbsp;&nbsp;&nbsp; _____&nbsp;&nbsp; _&nbsp; __&nbsp;&nbsp;
| \ | | | ____| |_&nbsp;&nbsp; _| |&nbsp; _ \&nbsp; | ____| | |/ /&nbsp; N E W B I E
|&nbsp; \| | |&nbsp; _|&nbsp;&nbsp;&nbsp;&nbsp; | |&nbsp;&nbsp; | |_) | |&nbsp; _|&nbsp;&nbsp; | ' /&nbsp;&nbsp;&nbsp;
| |\&nbsp; | | |___&nbsp;&nbsp;&nbsp; | |&nbsp;&nbsp; |&nbsp; _ &lt;&nbsp; | |___&nbsp; | . \&nbsp;&nbsp; M A N U A L
|_| \_| |_____|&nbsp;&nbsp; |_|&nbsp;&nbsp; |_| \_\ |_____| |_|\_\</pre>
</ul>

<center>Compiled by</center>

<center>Jonathan Shekter aka KillThemAll! (jshekter@interlog.com),</center>

<center>With material from</center>

<center>&nbsp;Jonathan Ellis aka maniac</center>

<center>Herbert Enderton aka Red Shirt</center>

<center>...and many others.</center>

<center>Revision 1.4, Februari 2004&nbsp;
<hr></center>


<h2>Contents:</h2>
<ol>
<li><a href="#Introduction">Introduction</a> (Shekter)</li>

<li><a href="#Basics">Basic Instructions</a></li>

	<ol>
	<li><a href="#Connecting">Connecting To A Server </a>(Ellis, Shekter)</li>

	<li><a href="#Logins">Logins </a>(Shekter)</li>

	<li><a href="#MOTD">The MOTD, Teams and Ships</a> (Mehlaff, Ellis)</li>

	<li><a href="#GameScreen">The Game Screen</a> (Shekter)</li>

	<li><a href="#Commands">Essential Commands</a> (including messaging) (Shekter, Mehlaff)</li>

	<li><a href="#Twinks">How Not To Be Obviously A Twink</a> (Shekter, Ellis)</li>

	<li><a href="#WhatNow">So What Do I Do Now?</a> (Shekter)</li>
	</ol>

<li><a href="#FinerPoints">Finer Points And Strategy</a></li>

<ol>
<li><a href="#Dogfighting">Dogfighting </a>(Hammond, McCoy)</li>

<li><a href="#Escorting">Escorting</a> (Shekter)</li>

<li><a href="#Ogging">Ogging</a> (Ellis)</li>

<li><a href="#PlanetDefending">Defending a planet</a> (Shekter)</li>

<li><a href="#OpeningBombing">Start-of-game bombing</a> (Shekter)</li>

<li><a href="#ScoutBombing">Scout bombing</a> (Yasuda)</li>

<li><a href="#TakingPlanets">Taking Planets</a> (Markiel)</li>
</ol>

<li><a href="#Misc">Miscellaneous Stuff</a> (Shekter)</li>

<ol>
<li>
<a href="#UdpSpSlip">UDP, Short Packets, and SLIP</a></li>

<li>
<a href="#Ghostbust">Ghostbusts</a></li>
</OL>

<li>
<a href="#Resources">Resources</a></li>

<ol>
<li>
<a href="#FindMore">Where To Find More</a> (Ellis)</li>

</OL>
</OL>

<h2>
<a name="Introduction"></a><b>1. Introduction</b></h2>
According to the FAQ (Frequently Asked Questions) list for the

<p>newsgroup rec.games.netrek,

<p>Netrek is a 16-player graphical real-time battle simulation with a Star
Trek theme. The game is divided into two teams of 8 (or less), who dogfight
each other and attempt to conquer each others planets. There are several
different types of ships, from fast, fragile scouts up to big, slow battleships;
this allows a great deal of variance in play styles.

<p>It is played over the Internet, against real human opponents. If you
do not have a computer on the internet, or connected via SLIP or PPP, you
will not be able to play.

<p>This game has a history and can actually be traced back through various
ancestors to 1972. See the history compiled by Andy McFadden for more detailed
information.

<p>Up to 16 players, often widely separated geographically, connect to
a central serverrunning at some site. There are about 30 public servers
in the world and of these maybe 10 are well known and popular. The individual
players uses a clientprogram to connect to the server of their choice.
Once in the game, the server receives commands from the client (and hence
the player) and sends the positions and status of the other ships, planets,
etc., to all players, several times per second. The net effect of all this
is to create a virtual galaxy where everyone can see each other and interact,
or to put it less academically, everyone plays in the same galaxy to try
to take it over.

<p>This manual is a guide for netrek beginners; it is independant of any
particular client. Clients are highly configurable and vary from one another
in terms of features. Please consult your client manual for details. There
are a lot of very cool things that a client can be configured for, including
macros, RCDs, etc., so its worth reading your client documentation.
<h2>
<a name="Basics"></a><b>2. Basic Instructions</b></h2>

<h3>
<a name="Connecting"></a>2.1 Connecting To A Server</h3>
If you run netrek without any arguments it will just complain at you. It
needs to know which server to connect to. To tell it, use the -hcommand
line option:

<p>&nbsp;netrek -h thiserver.foobar.somewhere.edu

<p>&nbsp;This tells netrek to join the game in progress on that server.

<p>(You can specify the port number, if its not the standard 2592, with
the -p option, should you need to.)

<p>The better way to go about this, however, is to use the metaserver.

<p>The metaserver is a central computer, currently

<p>metaserver.ecst.csuchico.edu, which keeps track of currently running

<p>games on all servers. Type

<p>&nbsp;telnet metaserver.ecst.csuchico.edu 3523

<p>to get details about the different ports. In addition, Most clients
can be run with the -m option, which will cause the client to connect to
the metaserver and display a window with the names and status of servers
with active games, and allow you to select which to join. If you are playing
netrek for the first time, it is strongly recommended that you start the
client with netrek -m.

<p>Netrek will then attempt to connect to the specified server. After connection,
there will be a pause, especially if running over the modem, as the MOTD
(message of the day) is received from the server. This can take up to 30
seconds with a long MOTD over a modem, even longer if the MOTD contains
bitmaps and you load them. When the MOTD has finished loading, the main
Netrek window will be displayed.

<p>&nbsp;
<h3>
<a name="Logins"></a>2.2 Logins</h3>
Everyone who plays netrek has one or more characters.People play under
handles. The point of thisbesides funis to allow to server to track each
persons statistics from game to game. Thus you can have ratings, be promoted
in rank, etc.

<p>When you connect to a server, therefore, you must login. If you dont
wish to use a permanent handle, login as guest. It is a good idea to be
a guest during at least your first few hours playing. Otherwise, think
of a name and type it in. You will then be asked for a password. This prevents
other people from logging in as you and messing up your stats. Think of
one and remember it! You will need it to log in later.

<p>&nbsp;Important note: put the mouse in the tactical (left) window as
you type your name and password or you wont be able to enter anything!

<p>&nbsp;
<h3>
<a name="MOTD"></a>2.3 The MOTD, Teams, And Ships</h3>
With the mouse in the MOTD window, press fand bto move forward and backwards
through it. Whenever you are at the MOTD you can also press Shift-R (capital
R) should you wish to reset your stats. Do read the MOTD:

<p>&nbsp;it will tell you important server-specific information.

<p>&nbsp;The other defining thing about this screen are the team selection
windows. The large numbers indicate how many people are playing on each
team. Often you will not be able to pick an arbitrary team but will be
restricted to some subset. This ensures that the teams are (more or less)
balanced in size.

<p>&nbsp;Click on the team with the next to largest number of players you
will be assigned a cruiser for that team. (The numbers will fluctuate as
ships are killed and are resurrected.) Or, with the mouse in the appropriate
window, press a key to select a ship type and start as that type. The keys
you may press are:

<p>&nbsp;S - Scouts(SC): These are fast fragile little things. Good if
you want to fly around the galaxy at high speed and get shot down by the
first big ship that gets near. They are very good for harassing, and bombing
if there are many undefended planets with very few armies on them. They
are difficult to use to fight, especially for the inexperienced.

<p>&nbsp;Cruising speed: 8 Combat speed: 6 Max. armies: 2

<p>&nbsp;D - Destroyers(DD): These are similar to scouts but they are a
little more tough and they have slightly more powerful weapons. The destroyer
is sometimes erroneously referred to as halfway between the scout and the
cruiser.If this were so, it would have more powerful phasers and be able
to go an extra half warp faster. For the unskilled player, they live up
to their nickname of Ship of Lose.The destroyer is really a specialty ship,
primarily used for taking planets by those who know what theyre doing.

<p>Cruising speed: 7 Combat speed: 5 Max. armies: 5

<p>&nbsp;C - Cruiser(CA): An all-purpose ship, and the default if you dont
select another.

<p>Cruising speed: 6 Combat Speed: 4 Max. armies: 10

<p>&nbsp;B - Battleship(BB): This ship is slow to accelerate and hard to
maneuver. However, it has the most firepower of any normal ship. It is
also very tough. Since it can take a fair amount of damage while still
dishing out a lot, it is very effective for offensive playersbut watch
your fuel, this ship uses a lot of it. The BB or the CA is recommended
for inexperienced players, since its harder to die in them. Since dodging
is tough for the BB, heavy use of tractoring, pressoring, and detting is
important. See the dogfighting section.

<p>&nbsp;Cruising speed: 4 Combat speed: 3 Max. armies: 6

<p>&nbsp;A - Assault Ships(AS): These ships are primarily useful in bombing
and capturing planets (something that beginners should do after mastering
the basics). One of their unique features is that they may carry 3 armies
per kill their captain has. Another is that they are guaranteed to bomb
at least two armies at once. Also, they are very tough to kill because
they can take so much hull damage. This is important when taking planets,
because they can keep dropping while detting. Other ships dont have the
hull to det without putting up their shields (and you cant drop armies
with shields up). They can also cloak cheaply to sneak in and attack planets.

<p>Cruising speed: 8 Combat speed: 4 Max. armies: 20

<p>&nbsp;O (for outpost) - Starbase(SB): These are very powerful and hard
to destroy. New players cannot play these (a rank of Commander is required).
Because they are so powerful, new players should probably avoid getting
in fights with one; it takes several players working together to destroy
one. If you see a hostile base, youre best off running away from it.

<p>&nbsp;Cruising speed: 2 Combat speed: 2 Max. armies: 25

<p>&nbsp;
<h3>
<a name="GameScreen"></a>2.4. The Game Screen</h3>
When you first enter the game, you will see two main windows and several
smaller ones. The large window on the left is the local or tactical window,
where you will do most of your playing. It shows your ship and the immediate
area around it. The window on the right is the map window, which shows
the entire galaxy.

<p>Each planet has a long name which appears on the local window, and a
three letter abbreviation which appears on the map. The color of the planet
indicates its owner, which can be one of four team colors or gray for neutral.
Some of the planets will also have symbols on them. A person symbol means
there are more than 4 armies on that planet (and hence it can be bombed
if its an enemy planet or beamed up from if its a friendly planet). A wrench
symbol means that the planet is a repair planet; while in orbit around
this planet you will repair damage much faster that usual. A gas can (looks
like a sort of little box) means that the planet in question is a fuel
planet, and you can refuel on that planet. This is important, because although
you regenerate fuel automatically if you are not constantly using it, a
fuel planet will fill you up much faster.

<p>&nbsp;Below the tactical display are two little windows. The topmost
of these is the warning window. Important messages will appear here. Below
this is the message-send window where you can compose one-line messages
to send to your teammates.

<p>&nbsp;Below the map window are three scrolling lists. These are, by
default, the All window, the Team window, and the Individual window (the
yourwindow). These show, as you might have guessed, messages to everybody,
messages to just your team and messages to just you in them. Read messages!
This is important.

<p>&nbsp;
<h3>
<a name="Commands"></a>2.5 Essential Commands</h3>
With this in mind, the following is a rip-off with minor changes of the
classic opening screendocumentation, which is part of the MOTD of many
servers. It will tell you the basic commands and should be enough to get
you started playing. Thanks to Eric Mehlhaff (mehlhaff@ocf.Berkeley.EDU)
for writing it.

<p>Mouse Buttons:
<table>
<tr><td>Left</td><td>Fire Photon Torpedoes toward Mouse Cursor</td></tr>

<tr><td>Shift+Left or Middle</td><td>Fire Phaser toward Mouse Cursor</td></tr>

<tr><td>Right</td><td>Change course toward Mouse Cursor</td></tr>
</table>
</p>

<p>
Other Important Commands:
<table>
<tr><td>0-9</td><td>Set Warp Speed 0-9</td></tr>
<tr><td>)</td><td>Set speed to warp 10</td></tr>
<tr><td>!</td><td>Set speed to warp 11</td></tr>
<tr><td>@</td><td>Set speed to warp 12</td></tr>
<tr><td>%</td><td>Set speed as fast as you can go!</td></tr>
<tr><td>c</td><td>Cloak/Uncloak Ship. While cloaked your ship will not show up
on other playerstactical displays. It will show up as a ?? on the Galactic display.</td></tr>
<tr><td>l</td><td>Lock onto object. Sets your course to that object. If its
a planet or a Base, you automatically dock there once you arrive.</td></tr>
<tr><td>t</td><td>Fire torpedo</td></tr>
<tr><td>p</td><td>Fire phasers</td></tr>
<tr><td>T</td><td>Tractor Beam. Pulls target toward you but uses a lot of fuel.
Useful to make sure ships that run away get killed.</td></tr>
<tr><td>y</td><td>Pressor Beam. Just like Tractor, but it pushes target away.
Useful in keeping those over-agressive warships away from you.</td></tr>
<tr><td>s,u</td><td>Raise/lower shields. Your shields consume fuel. Also, your ship
will only repair internal damage while shields are down. But you are
much more vulnerable when your shields are down.</td></tr>
<tr><td>L</td><td>Bring up the Player List Window. So you can see the names behind
the player numbers, as well as their stats.</td></tr>
<tr><td>i,I</td><td>Get information on the player or planet nearest your mouse cursor.
Lower and uppercase report different things, try both.</td></tr>
<tr><td>q</td><td>Quit game quickly</td></tr>
<tr><td>Q</td><td>Quit game, but read the MOTD first</td></tr>
<tr><td>h</td><td>Bring up help window</td></tr>
</table>
</p>

<p>
Lots of commands, huh? And those are just the more common ones!
Notice how difficult it is to reach a lot of these keys, such as orbit,
lock onto, tractor, pressor, etc. Most people use a keymap to make it
easier to reach the important stuff; see the your client manual
for details.
</p>

<p>
How to send Messages:
</p>
<p>
First press "m" or put your mouse cursor in the outgoing message window.
It is the lower of the two thin one-line windows just below the galactic
or tactical window (depending on which client you are using). Type the
letter for who you want to send to:

<table>
<tr><td>0-9, a-j</td><td>Message is sent to player of that number/letter</td></tr>

<tr><td>t</td><td>Send to your own team</td></tr>

<tr><td>A</td><td>Send to All (Everyone!)</td></tr>

<tr><td>F</td><td>Send to Federation</td></tr>

<tr><td>K</td><td>Send to Klingons</td></tr>

<tr><td>R</td><td>Send to Romulans</td></tr>

<tr><td>O</td><td>Send to Orions</td></tr>
</table>
</p>

<p>Use the Esc key to cancel a message before sending it.

<p>Tournament Mode:

Tournament mode starts you when have 4 vs. 4 and the teams are
not diagonally opposite (e.g. Fed vs. Kli is no good). You can get DI (damage
inflicted) only during tournament mode, and more DI leads to promotions.
DI is a composite score based on total planets taken, armies bombed, and
ships killed. During Tournament mode (Tmodelook for the little tamong the
flags, which are on the upper-left of the dashboarddirectly below the tactical
window) you receive no DI for attacking non-warring races, i.e. those races
not represented by a team of 4 or more.

<p>Ratings:

Your rating will be updated only during Tmode. Ratings are derived
from your planet bombing, killing (offense) and getting killed (defense)
rates, normalized with respect to the average of all players. That is,
a rating of 1.00 means you have exactly the average of all the current
players.

<p>Plasmas:

<p>To get plasma torpedoes, get 2 kills, and refit to [DD/CA/BB].
These home in on a target but can be shot down with phasers.

<p>Getting Started:

<p>When you first enter the Game, you may need to press hit the keys
Band Vtwice each. This makes the planets resources show up on the tactical
and Galactic Maps. If you are experiencing a lot of blink(uneven screen
updates), try setting your updates/second to a lower value. Do this in
the options window (O- thats capital ohto bring it up). Click the mouse
button on the updates number until you get the number you want. Lower updates
tend to produce less blink, although they make netrek less playable when
the network is working normally.

<p>Declare peace with everyone (except perhaps the current enemy race).

<p>This way you wont be attacked by neutral planets and robots! Set stay
peaceful when reborn(in the options window again). This way you wont have
to redo your war settings every time you get shot down.

<p>Hints for Beginners:

<p>Watch your fuel. When you run out, your weapons wont fire, you
cant go very fast to run away, and youll be helpless. If you run out of
fuel, go orbit a friendly or neutral fuel planet. Avoid chasing ships,
unless you know they are badly damaged or out of fuel. Its very hard for
you to dodge their fire, and very easy for them to dodge yours. On the
other hand, if you can get someone to chase you, waste them!

<p>Learn who your enemies are. If you shoot at friendly ships, not
only do you waste fuel, but you show everyone that you are a beginner.
And many players will specifically go for beginners just for the easy kill.
Change speeds a lot. It is often useful to use high speed to get into the
action quickly. But at high speeds you will have a hard time dodging enemy
torpedoes.

<p>If youre not in combat, fly around with your shields down. This
enables you to repair a little damage, and you use less fuel that way.
But beware, you are very vulnerable if you are surprised.

<p>Each additional warp halves your turning speed. Slow down to turn.

<p>Watch your galactic map to get the big picture.Pay attention to
cloakers. Enemy ships near you will cause you to go to yellow or red alert.
This can be used to tell if the cloaker by you is an enemy or not.

<p>Torpedoes you det wont hurt your teammates.

<p>Bomb enemy planets with armies on them.

<p>&nbsp;

<p>Strategy and the grand Scheme of things:

<p>Theres more to Netrek than just ships flying around and blowing
each other away. The actual goal of the game is to conquer the galaxy.
As a shorter term goal, a team must conquer the planets of the other team.
This genocides the team, and all its players are forced to quit or change
to a new team. (Note that most if not all current servers restart the galaxy
after one genocide.)

<p>How to Conquer Planets:

<p>You conquer planets by first bombing the armies on enemy planets
down to less than four. Below 4 you cannot bomb them. (Neither can the
other team pick up from them, however.) Here is one time where the AS is
useful: the AS always bombs at least two, so if the planet is at 5 and
you bomb it with an AS, it will always go to three or less! If the planet
is at 6, however, you should first bomb it down to 5 with a normal ship
and then have the AS bomb.

<p>Then you need to get some kills you can only carry armies if you have
killed with your current shipand beam up some armies from one of their
own planets with the z-key (you can only beam up armies if the planet has
more than four armies, so you have to keep your enemies from bombing your
planets!). Once you have armies, orbit the enemys planet and beam them
down with the x-key. Each of your armies destroys one of the enemys armies,
so you will need more armies to capture a planet than the planet currently
has. Usually, as a rule of thumb, it takes 5 armies to capture a planet,
unless of course, it has fewer armies than that on it.

<p>Some planets are more important to capture, too. Fuel planets
are good planets to capture, because capturing them prevents the enemy
from refueling on them. Similarly, repair planets (look for the little
wrench symbol on the planet) repair ships orbiting them much faster than
normal. Agricultural or agriplanetspress ion the planet or bring up the
planet window with Pare most valuable because they generate armies quickly.

<p>Standard Netrek games usually follow a pattern:

<p>The game starts:

<p>The teams have all their planets and usually about 30 armies per planet.
So, the object in this stage is to bomb out as many of the enemiesarmies
as possible, while preventing them from bombing out your own.

<p>The planet capturing stage:

<p>Most of the armies are bombed away, so the players concentrate
on capturing the enemy planets. Its kind of pointless to try to capture
enemy planets while they still have a lot of armies, so this is why players
dont try to capture planets until this stage. If the enemy has lots of
armies, it is very easy for them to simply recapture their planets.

<p>The Desperate wait for armies:

<p>The players have used up most of their armies trying to take planets,
so they are waiting for more to grow on their own planets so they can take
the enemies. What few they do get often end up dying, as the ship that
was carrying them is hunted down by hordes of enemy ships.

<p>The Last Planet Defense:

<p>One of the teams has lost several of its planets. It only has
a few of the ones near its homeworld. They dont have many armies to recapture
their worlds because they dont have many worlds to grow them. But their
worlds are well defended because they come back real close to them when
they die.

<p>This stage can last for hours if the winning team isnt aggressive or
well-enough organized to take those last few worlds.

<p>
<h3>
<a name="Twinks"></a>2.6 How Not To Be Obviously A Twink</h3>
A twink(see section 5.2) is someone who is a netrek loser. Netrek, because
it is a multi-player game, has an etiquette. Specifically, stupidity and
laziness are not tolerated. Below are some comments on how not to get labeled
a as a twink, which is not only embarrassing, but dangerous as players
may kill you whenever they need an easy kill (so that they can carry armies
and hence take planets.)

<p>A twink:

<p>does not read messages. Netrek is a team game. Be part
of the team.

<p>Dies with The Armies. Note that there is a difference
between dying with armies (which happens to everyone) and dying with The
Armies. That is, dying with armies when armies are scarce. Often in a game,
armies are plentiful, or would just get bombed away if not picked up, and
getting killed while carrying happens to everyone. But its a real bummer
when some twink picks up the last two armies which are vitally needed to
take back that critical planet and goes and dies with them. Summary: dont.

<p>does not listen to his teammates. Help your team! People
more experienced then you will try to direct actions and strategy. If you
have a better idea, say so, but dont just ignore the requests of your teammates.
Unfortunately, many players are impatient with newbies (Im one of them
;-), and will not do more than curse at you for your mistakes. If you want
to get more out of them than curses, dont argue with them. They will only
get angrier because a clueless newbiepresumes to correct them! Apologize,
even if it wasnt your fault, and ask what you did wrong. This makes them
feel stupid and then they will often become helpful. Complimenting them
doesnt hurt either. Of course, here Im assuming that the arrogant player
actually knows what hes doing and isnt just a jerk. There are a few clueless
jerks around, too.

<p>calls for help continuously, whenever theres someone chasing
him.

<p>Learn how to defend yourself. If you cant, dont, for example,
fly deep into enemy territory by yourself and then expect your friends
to come to the rescue as soon as someone starts grinding you down. For
one thing, ships do not move all that fast and so by the time they arrive
you will probably be dead. For another thing, there are better things to
do than waste time saving someone who will just get a new ship a few seconds
later anyway, unless you are of some special value to the team, e.g. carrying
armies, are the only player with kills, etc. This does not mean, dont call
for help when defending a planet or taking, for example. But if you are
about to get killed and youre not doing anything special, sorry.

<p>does things or takes resources better done or used by others.

<p>Examples of this are bombing a planet when there is a friendly
assault ship right there that could do it, or taking armies before a more
skilled or better equipped (e.g. youre in a scout and hes not) player who
wants them can beam them up.

<p>explodes near his teammates and kills them. Explosions do considerable
damage. This fact can be used to your advantage, for example when ogging
(killing with a suicide attack) someone. But dont explode over or near
friendly ships. For example, if your are protecting someone, as in escorting
for planet takes, stay a little bit away from the planet so that if/when
you get toasted, you dont kill them too.

<p>pesters others for help instead of reading the manual or figuring
it out online. This last point is extremely important! Read this document
thoroughly, and investigate the FAQ, various WWW sites, and the Netrek
archives (see section 6.1) thoroughly before pestering other players for
help with simple things. Note that this does not mean dont ask questions:
on the contrary, many players are more than happy to explain things to
beginners. But dont ask without trying hard by yourself. Things like how
do you play this game?or asking how do I raise my shieldseight times in
the middle of a game (when you can always press hand find out) are not
appreciated by most players.

<p>plays for himself. Play for your _team_. Theres a lot
of otherwise good players who only want to increase their stats by planet
scumming. Space control. Escort. Scout bomb. I cant emphasise this last
enough; there are few players that I am more happy to have on my team than
one who will join the game, see that their team needs a bomber, and then
goes bombing.
<h3>
<a name="WhatNow"></a>2.7 So What Do I Do Now?</h3>
Scout bomb. This is one of the best things a beginning player can do. It
requires little dogfighting ability, you dont die too often, it gives you
lots of practice maneuvering and dodging torps, and best of all, its very
helpful to your team. I would suggest that anyone new to the game of Netrek
do some scout bombing at first.

<p>Scout bombing is of course, done with a scout; select this ship from
the opening screen. The basic technique is just to go from planet to planet
bombing, but there is some finesse involved. First of all, getting deep
behind enemy lines is omething of a trick; flying at maxwarp through a
dogfight in the hopes of getting past it is a good way to get killed, even
if you are cloaked; scouts are very fragile. You must usually fly far around
enemy ships, often way off into neutral space. At any rate, once you approach
a planet with armies to bomb, the procedure is basically the same: lock
on (press l), shields up as you approach (press sor u), wait till you enter
orbit, then bomb (b). After a while, enemy ships will notice and start
chasing you. This is goodyou are keeping them from helping their team.
You are much more maneuverable than them (unless they are also in an SC)
and also much faster, BUT you are very fragile. The solution is to run
and dodge. Buttorping is good here, though frowned upon in other parts
of the game. Learn to dodge. If you are really good, you can even take
out a ship by suddenly charging at them at high speed and firing everything
youve got. This takes some skill, but Ive defeated many a BB in a scout;
the trick is to get them angry and make them waste fuel first.

<p>&nbsp;Besides bombing, the other duty of a scout bomber is to call call
pick ups as you see them. You are behind the lines and in some sense have
time on your hands, so a SC bomber is ideally placed for reconnaisance
of this type. You can tell when someone picks up by watching the number
of armies on a planet being orbited by them. While the little army symbol(the
little man) on the planet will disappear if they remove all the armies,
more often than not you have to watch the army count by pressing iover
the planet repeatedly as they orbit it. If the armies are going down, they
are picking up. Tell you teammates so they can watch out and or kill them.
There is a handy macro for this in most clients: place the mouse over the
enemy carrier and press Ctrl-9. This sends a message like 4++ @ Romto your
team.

<p>&nbsp;Scout bombing is very helpful, and probably the easiest useful
thing for a beginner to do. It is excellent practice, and actually it is
also one of the most important jobs in a game.
<h2>
<a name="FinerPoints"></a><b>3. Finer Points And Strategy</b></h2>

<h3>
<a name="Dogfighting"></a>3.1 Dogfighting</h3>
Dogfighting is not the point of the game or even a primary objective.

<p>It is a means to an end for two reasons: a) you must have kills to carry
armies and take planets, and b) you often need to stop enemy ships from
doing things, such as taking your planets or bombing your space, or killing
your teams carrier (or you!) when you are trying to take a planet. Killing
them is one good way, although there are others.

<p>&nbsp;The following is from the Netrek archives by John Kirk Hammond
a.k.a.

<p>&nbsp;Lance.

<p>&nbsp;Here is the manual I mentioned. I posted it cause many people
said I should.

<p>&nbsp;I only use a CA, so if you play another ship take any advice with
a grain of salt (actually, take it all with a grain of salt.).

<p>&nbsp;There are, as I see it, 3 major things about successfully dogfighting.

<p>&nbsp;The most important, by far, is intensive use of tractors. The
second is to change speed constantly. The third is to det incoming torps.

<p>&nbsp;Remapping the keyboard in the .xtrekrc file is important. For
those interested, heres mine: keymap: dTeyadllrrqe D I think some of that
was redundant, but it works, so I dont care! :)

<p>I. Tractoring/pressoring

<p>&nbsp;II. Changing speeds

<p>&nbsp;III. Detting

<p>&nbsp;IV. Shields

<p>&nbsp;V. Torps

<p>&nbsp;VI. Phasers

<p>&nbsp;VII. Cloaking

<p>&nbsp;VIII. Plasma

<p>&nbsp;IX. Knowledge is half the battle :)

<p>&nbsp;I. Tractoring/pressoring

<p>&nbsp;

<p>A. Tractors are most useful for holding an opponent in place so that
your torps can catch up to him. By tractoring an opponent, one a) slows
the opponents turning speed down for a short time and b) pulls him in the
direction of your torps. THIS IS MOST IMPORTANT. I can not tell you how
many people have come rushing onto the screen that I have tractored, using
their speed, and pulled them right onto a string of torps.

<p>&nbsp;B. Tractors are also useful for pulling wounded enemies (and full-strength
scouts) into your phaser range so that you can finish them off. However,
see III. Detting for more on that.

<p>&nbsp;C. My favorite method of killing any enemy is to pull up next
to him, speed up to warp 8 or 9, and on the pass launch a volley of torps
and at the same time tractor him. Fire the torps almost perpendicular to
your ship, because at warp 8, they will move outward AND forward, hence
slamming into the opponents ship. I will also det his torps if they look
like they might hurt me. Sometimes, if the torps might not hit him, I pressor
him, and sometimes, just sometimes, his rapid turning pushes him BACK into
the string of torps.

<p>&nbsp;D. In the opposing situation, if an enemy tries this on me, I
turn in his direction and pressor off of him at the same time, which (most
of the time) propels me out of his incoming swath of torps. Pressors are
most useful for maneuvering into and out of positions for battle. I dont
use them extensively in battle but perhaps to keep a phaser-thirsty ship
out of range so that I can torp him, or, in cases where there is a good
BB playing, pressors are a key to survival.

<p>&nbsp;

<p>[JE: T/P can also be very useful to help you dodge torps. The

<p>&nbsp;most obvious way is to just turn away from your opponent

<p>&nbsp;and pressor off him to give you more room to dodge. If you

<p>&nbsp;have a teammate or an enemy off to one side that you can t/p

<p>&nbsp;off of to move you sideways out of the torps, that is even

<p>better. If youre using a teammate as a t/p post, though, make

<p>&nbsp;sure youre not moving him into torps at the same time!]

<p>&nbsp;II.Changing speeds

<p>&nbsp;

<p>A. It is important to change speeds constantly. Many opponents tend
to dodge torps I send at them. However, when involved in a dogfight, and
torps are flying in a perfect line at your ship, slam your hand down around
the 7-8-9 area, and watch as your CA accelerates past the torps (I dogfight
at 4). A while back, I fought with West 11 or 12 times on an abandoned
server. Against that kind of skill, I change speeds maybe, once very 3
or 4 seconds, just to throw him off as to where I am going. That match
ended in a tie or close to it. Those lil matches took over a minute usually.
Learn to be patient. The next entry, B, illustrates that.

<p>&nbsp;[JE: a style enormously helpful to conserving fuel while dogfighting
is to fight at a base speed of warp 2, tractoring, pressoring, and accelerating
as needed when torps are fired. This is most effective in a CA/BB/AS.

<p>&nbsp;Thanks to Erik Lauer for pointing this out.]

<p>&nbsp;B. The other day, I angered an opposing BB so much that he roared
onto the screen firing a plasma and a blob of torps. I calmly turned perpendicular
to his plasma and accelerated. That got me out of the torpsway and out
of the possible turning radius of the plasma. The BB then turned tail and
slowly moved away from me, firing torps all the way. By moving back and
forth and calmly accelerating out of his torps I followed him all the way
up to a fuel planet, never raising my shields or firing a shot. He started
orbiting the fuel planet, and I sped up to 8 or 9 and roared by him, firing
a volley of torps, tractoring him off the planet, detting, and phasering.
Needless to say, he died and I lost my shields. But I was patient.

<p>&nbsp;C. Also, remember to pressor oggers that appear behind you, as
this will keep them from blowing up on you (I tend to tractor them, fire
torps at them, and then pressor them, thus ensuring their death and preserving
most of mine). However, you must be going away from the ogger at at least
warp 7 for this to work, because pressors only really neutralize the oggers
tractor.

<p>&nbsp;D. When you are attempting to catch up to a target, and he is
fleeing at similar speed, you can do 2 things: 1) If there are enemies
in the area who could help him, you must get him quickly, so det torps
sent in your direction. 2) If you and he are alone, if he fires a line
at you, slam the 1-5 warp area and turn a little to the side. This usually
lets you dodge most of them, but he gets those few extra seconds to flee
a little more. However, if he has no help in the area, you might still
have a chance of catching him.

<p>&nbsp;

<p>III. Detting.

<p>&nbsp;

<p>Here is the Netrek concept that will get me in trouble with other good
dogfighters. Most never det in battle. I, however, live on detting. I will
cover detting on the accepted scalefrom A to C.

<p>&nbsp;A.Det when tractoring scouts in and phaser them to death. Scouts
fire dinky 25 pt torps that do 6 pts of damage when you det them. If you
can tractor them and you are moving at sufficient speed, you can crunch
a scout in a CA. As long as you det. This goes for any wounded ship, too.
If a CA is wounded and is sitting stopped, rush at an angle, fire torps
and tractor him in. However, you MUST remember to det torps. If you dont
10 to 1 you will mutual with him.

<p>&nbsp;B.Det torps for wounded ships, planet takers, and SBs. If you
want to be a good escort, stay AHEAD of the planet taker and det any torps
headed for the planet. However, REMEMBER to fire at incoming oggers, and
if you must, mutual with any too close to the planet.

<p>&nbsp;C.Det enemy torps to wound other enemies. This I use only in special
situations. When a cloaker (planet taker) flies over enemy torps, det them.
You will take damage, but so will he. Any planet taker that slows down
cause of wounds is usually dead in any clueful game. Planet taking counts
on the taker to make it to the planet as fast as possible before oggers
overwhelm the escorts.

<p>&nbsp;D.OK, I also det a lot in combat. When I am dodging, I will often
det to open a holein a stream of torps, or det the first few torps in a
string so that I can zoom by. Remember, detting ideally only inflicts 25%
of the damage on your ship, so detting 4 or 5 torps really is nothing in
a CA. I also tend to det whenever I make a pass at an enemy. Granted, at
one inch away those torps might not hit me, but I dont take the chance.
50-130 pts norm on a dogfight, I guess. At one inch, one pass is usually
enough :). Some good players can use my detting against me, but not always.

<p>&nbsp;E.You know those situations where you and an opponent suddenly
zoom on the screen at the same time and right at each other? Usually, you
will ram each other with a blob of torps. However, the best way to survive
is to slam your hand down on the speed of 1-4, turn rapidly to one side,
fire torps, pressor, and DET constantly. About 50% of the time this will
allow me to destroy the incoming ship, but I in turn usually take almost
80-90% damage. However, I survive.

<p>&nbsp;[JE: maxwarping at an enemy is never a good idea, and if you

<p>do find yourself in that situation, keep in mind that it may be

<p>better to mutual than to go to 90% damage and spend a lot of

<p>&nbsp;time repairingif you mutual, you immediately get a new ship.]

<p>&nbsp;F.If you are in a situation where both you and your opponent are
both wounded and he is taking pot shots at your ship, go into repair mode.
When he fires a torp, and you cant dodge it, det it. Repair mode will usually
repair enough shields for a 10 pt det. This way you conserve your fuel.
Once you get enough fuel, start moving and unleash a full string of torps
at the enemy.

<p>&nbsp;G.If you are in a situation when you have enough fuel to kill
a crippled ship but he is right on top of you and his explosion will kill
you, pressor him away before phasering him and killing him (assuming he
has no fuel).

<p>&nbsp;

<p>IV. Shields

<p>&nbsp;

<p>Never keep your shields up all the time. Your hull doesnt repair and
your fuel regenerates slower. Get in the habit of putting shields up ONLY
when you are doing the following:

<p>&nbsp;Approaching an enemy planet for bombing or planet taking.

<p>&nbsp;Within about &frac34; the phaser distance of a CA or -->BB &lt;--.

<p>&nbsp;If torps are going to hit you.

<p>&nbsp;If a cloaker is coming to ogg you and he is within phaser distance
on the galactic.

<p>&nbsp;If friends fire a lot of torps over you and an enemy is in the
vicinity to det them on you.

<p>&nbsp;Its fun to let a SC to get within phaser range: let him lock you
a few times and he (sometimes) get cocky. Once he turns around to engage
you, tractor him in and kill him.

<p>&nbsp;

<p>V. Torps

<p>&nbsp;

<p>A. Though I covered most of this in tractor, PRACTICE, PRACTICE,

<p>&nbsp;PRACTICE. Some people here at Duke who program borgs say my torps
are almost perfect anyway. I have been accused many times of having a blessed
borg.It is because I practiced lots last year (this year I dont play very
much anymore). PRACTICE AIMING THOSE TORPS. Learn to lead your opponent.

<p>&nbsp;B. Dont det your own torps when you are first learning. This is
the lazy mans way of getting another shot. When you are first learning,
and you die cause your first shot missed, you will soon learn to start
aiming better. If, however, you keep detting your torps, you will waste
all your fuel in no time and gain little experience from the situation.

<p>&nbsp;

<p>VI. Phasers

<p>&nbsp;

<p>A. I use phasers when I make a pass at an enemy. Usually it is the difference
that kills him. It is difficult to remember to tractor, torp 8 times, shields
up, det, phaser, and move...but the extra 40 pt phaser sometimes is all
you can get on the guy.

<p>&nbsp;B. I dont suggest attempting to whittle down an enemy with phasers.
The only person Ive ever known to do this effectively against me was Val,
and hes gone...

<p>&nbsp;[JE: youd be surprised how quickly a man who uses both

<p>&nbsp;phasers and torps well can take down someone who only

<p>&nbsp;torps. Learn where your 20 point phaser range is, and

<p>phaser any time he is within that range. If you are doing

<p>&nbsp;less than 20 points you are probably wasting fuel.]

<p>&nbsp;VII. Cloaking

<p>&nbsp;

<p>A. Dont cloak (remember, this is a dogfighters manual).

<p>&nbsp;B. Cloaking is only for dodging outgoing oggers(those coming to
ogg you before you reach your target) or to pass over some interference
dogfighters who are between you and your target.

<p>&nbsp;C. Cloaking is for mainly planet takers and oggers. That is NOT
my forte.

<p>&nbsp;

<p>VIII. Plasma

<p>&nbsp;

<p>A. Never use plasma.

<p>&nbsp;B. However, plasma is useful when there is a solitary planet taker
orbiting a planet and you are racing to it. A plasma and a blob of 8 torps
will usually do the trick.

<p>&nbsp;C. S M A C K !

<p>&nbsp;

<p>IX. Knowledge is half the battle.:)

<p>&nbsp;

<p>A. KNOW YOUR ENEMY. Know what kinds of ships the bitmaps are.

<p>&nbsp;Learn what kind of shields and hull and torps and phasers each
ship has. Learn to add up quickly in your head, Well, 3 torps and a decent
phaser. 120 for the torps, 40 for the phaser. That CA is hurting and wont
be able to flee from me for a bit...

<p>&nbsp;B. Keep track of your shields and your fuel. Make sure you have
enough fuel to get out of there, cause you might get 2 kills, but an ogger
will rip you to shreds when you have an empty tank.

<p>&nbsp;C. Learn to cripple an enemy. When you are rushing to say ogg
a SB hanging around the enemy home planet or especially to take the home
planet, NEVER kill oggers coming to engage the blob of escorts and planet
takers you are moving with. If you do so, you a) waste your own fuel and
shields and momentum, and b) enable the enemy to reappear right next to
your target with full everything. Bad move. Either cloak before you get
to outgoing oggers, or hit them with 4 torps to cripple them &lt;-- This
is possible.

<p>&nbsp;John Kirk Hammond

<p>jhammond@raphael.acpub.duke.edu

<p>&nbsp;
<h3>
<a name="Escorting"></a>3.2 Escorting:</h3>
Escorting a planet taker: a single carrier (of armies) can get killed quite
easily, especially if the opposing team considers that he must be killed
at all costs to save a planet. So unless the planet in question is totally
open, takers need escort to protect them from enemy ships while they beam
down armies, which is a slow process. You will therefore sometimes see
requests for escort (in the team message window.) If you are in the vicinity
and free, help that player make it to their chosen destination. To do this,
it is best to arrive ahead of the carrier, and clear out enemy ships. The
idea is to protect the taker, hence if you kill and damage the ships in
the vicinity it makes it easier for the taker to take. Often, however you
will not be able to kill all the ships nearby. In this case, when your
carrier arrives, you must protect him from enemy fire. The taker is very
vulnerable while dropping armies as his shields will be down. Position
yourself between the taker and the enemy if at all possible, and distract
the enemy ships by engaging them. You can also detonate enemy torps that
would hit your carrier, by pressing the dkey. (The torpedoes in question
must be quite close to your for this to work. Experiment to get a feel
for the maximum rangethe farther away they are, the less damage they do.)
The point of the exercise: keep the carrier alive long enough to take the
planet, at all costs. (Obviously dont escort if you are carrying yourself,
if at all possible. Usually it isnt. Sometimes you may have time to beam
down your armies to a safe location first.) Do NOT fire torpedoes over
the planet where enemies can det themyour teammate will also take damage!
<h3>
<a name="Ogging"></a>3.3 Ogging:</h3>
This is the art of killing a carrier, or potential carrier, by a suicide
run. The basic idea is to cloak before you get on his tactical, run up
to him until youre about half an inch away, then tractor-phaser-torp-torp-torp
until he dies. Ogging is a simple tactic and any dummy can do it. On the
other hand, ogging well is an art, involving exactly when to uncloak, how
fast to go, etc. Two good oggers working together should be able to kill
the target every time. (Obviously this does not apply if the target is
an SB.) When ogging with someone else, it is important that you do not
both come from the same direction. If you do, your target can turn and
shoot at both of you at once. When I do it, I watch what direction my teammate
is coming in and decide which direction the target must run in to reach
his teammates, and attack him from that direction.

<p>Ogging a starbase: Enemy starbases can be very inconvenient. Killing
one requires a coordinated effort. Typically wave after wave of ships gang
up on the starbase and do suicide runs into it, firing everything they
have and then hopefully exploding right over it. However, its harder than
it sounds. Keys to a good ogg are:

<p>&nbsp;&middot;all oggers uncloak at once. If you do not, the base can
pick you off easily one at a time. Thus, if you know youre going to have
a head start on the other oggers using a heavy ship (BB/AS) is a good idea.
Conversely, dont take one if it will make your team wait for you.

<p>&nbsp;&middot;oggers come from different directions, for much the same
reason that ogging a normal ship from the same direction is inefficient.

<p>&nbsp;&middot;the ogg does not take place with a lot of the bases teammates
defending. One defender ~ two oggers, so minimize the defenders. Its not
enough to call an ogg when the base is alone, you also have to watch the
galactic to make sure that the enemy is not heading towards the base, otherwise
by the time your ogg gets there he could have several defenders.

<p>&nbsp;&middot;dont maxwarp directly at the base once you are on his
tactical! It is trivial for a good base to tell you are heading in a straight
line and pick you off with torps or phasers! If you head in at about warp
7 (in a CA) you will be able to dodge torps much more easily. It can also
be a good idea to fly at a point an inch or so to the side of the base
until you get close to him, to throw him off more.

<p>&nbsp;&middot;having an uncloaked CA/BB/AS lobbing torps (plinking)
at the base while the others are ogging can help a lot against a relatively
undefended base. With more defenders, it becomes much less effective. CRITICAL
to this is that you should NOT plink from the side of the base that the
oggers are coming in from. If you do, he can pressor off you to move away
from the oggers (and towards his team) much faster! Get behind the base,
and force him into your oggers! If, when you do this, the base tractors
you, you have two options. You can reverse direction, tractor him, fire,
and try to do as much damage as you can, finishing by exploding on him.
Or, you can slam on the maxwarp while firing torps at him. The latter is
more effective before an ogg, because the base will be forced to use more
wtemp phasering you and likely wtemp completely during the ogg. The former
option is only recommended if you are low on fuel or if youre youre really
close to the base when he starts firing.

<p>&nbsp;&middot;if the base has ships docked on it and does not pressor
them off, fire at them. Each docked ship that you blow up does an additional
100 points of damage to the base as well as preventing them from firing
at the other oggers.

<p>&nbsp;
<h3>
<a name="PlanetDefending"></a>3.4 Defending a planet</h3>
Sometimes you will notice several ships, some of them cloaked, heading
towards a planet of yours. If you have time, check the player list. If
players with kills are coming in, they can be carrying armies and so may
be trying to take a planet. Be especially wary of cloakers, the classic
planet taking tactic. At this point you need to destroy the enemy ship(s)
at all costs. Go especially for cloakers and anyone trying to orbit the
planet. Call for help! Kill the carrier! Exploding on him works, but remember
that a ship dropping armies is very vulnerable. His shields are down and
he is following a precise little circle. A cloaked orbiting ship is easy
to hit, so kill it! Also, if he is foolish enough not to cloakor out of
fuel! -- tractor him out of orbit so he cannot drop.

<p>&nbsp;Sometimes it is useful to just orbit a planet to protect it. This
not only acts as a deterrent, but while you are orbiting you will have
so little else to do that you can watch for incoming takers and warn your
time in time. When takers approach (watch the galactic!) stop orbiting
the planet, and start flying. You cannot dodge while orbiting and so you
will be easy to kill if you do not start moving. Plus you have some acceleration
time, and you need to be fully up to speed by the time you engage.

<p>If you are the only one in the area in and you must defend a planet,
your job it to delay the enemy long enough until help arrives (you did
call for help when you saw that enemy formation approaching on the galactic
map, didnt you?) Critical to this is GETTING BETWEEN THE ENEMY AND THE
PLANET. Then they have to go through you, not you through them, and you
have room to retreat/buttorp. If you can do this, you have a very good
chance of at least delaying the take until help arrives. Failing that,
you basically have to ogg the carrier, if you can figure out which ship
it is. It will obviously be someone with kills. Also, some people will
be known carriers. You can tell when someone beams up armies, if the armies
icon suddenly disappears from the planet they are orbiting (from one of
their planets, obviously; if it disappears from one of your planets you
just got bombed!) Often you will see messages of the form 6++ @ CAPor just
6++. This means that player number six just picked up armies at Cappella.
If you see someone pickup, dont hesitate to tell your team with a similar
message. (Hint: use macros for this! See section 5.2.) Lock onto the enemy
carrier, maxwarp, cloak, get inside the enemy formation, uncloak just before
reaching him, tractor him (this helps hold him and pull him into your torpedoes)
and fire everything you have, exploding in a burst of glory right over
him, and killing him. If there is just a single unescorted taker going
for a planet you can ogg him as described above, but you might try coming
in uncloaked. Sometimes this will scare him enough to make him turn around,
as he doesnt want to get killed while carrying. This doesnt work on anyone
who can kill you easily, obviously.

<p>&nbsp;
<h3>
<a name="OpeningBombing"></a>3.5 Start-of-game bombing</h3>
When you first enter T-mode (tournament mode) there will be many armies
on all planets. At this point you must bomb them away. The best ship for
this is an assault as it bombs the fastest. It can also cloak cheaply and
regenerates fuel quickly. Fly to an enemy planet, putting up your shields
just before arriving, cloak if theres anyone near, and hit bto start bombing.
Watch your warning window. When it says bombing is ineffectiveand the armies
symbol disappears from the planet, turn your shields on, lock onto the
next planet with armies, and maxwarp to it. You can stay cloaked almost
indefinitely while bombing; ASs even regenerate fuel at warp 0. However,
detting incoming torps uses 100 fuel per det, so watch that or you will
uncloak from detting. At the same time, when you are in your home space,
kill enemy bombers to protect your own armies.

<p>&nbsp;
<h3>
<a name="ScoutBombing"></a>3.6 Scout bombing</h3>
This is part of a guide for scout bombers written by Dean Yasuda.

<p>(We are ROM, they are FED).

<p>&nbsp;
<h4>
Q1: What is passive bombing?</h4>
A1: Passive bombing (also called positional-bombing) is a bombing strategy
in which the bomber focuses on being in a position to bomb enemy armies
that will pop in the future. The bomber dynamically maintains a position
deep in enemy territory that gives him bombing ownership of as many planets
as possible.

<p>&nbsp;
<h4>
Q2: When should I p-bomb?</h4>
A2: Whenever the enemy has more than five planets if nobody else is bombing.
In general, one bomber is all you want in a pickup game because there are
so few clueson the team that the others really need to be escorting, taking,
ogging, etc.

<p>&nbsp;
<h4>
Q3: Where is the best spot for a p-bomber?</h4>
A3: A lone p-bomber should try to live just below and right of ALP (center)
in order to control the six right and central planets. A secondary bomber
should lurk below and right of (VEG), pressuring the core while keeping
an escape route into third space.

<p>&nbsp;When the bomber has at least &frac34; fuel, he should lurk at
a minimum of warp 5, in order to win races to planets.

<p>&nbsp;
<h4>
Q4: What is the best path to enemy territory?</h4>
A4: Arcing through shallow third and fourth space is the best path to Fed
space. A bomber should avoid the front line if the enemy presence there
is strong. The wall-route is sometimes safe, but an attentive enemy CA
can sometimes expel or kill the scout.

<p>&nbsp;Maxwarp out of your core, slow to warp 9 while passing the front,
and arc narrowly around the enemy position. It is reasonable to let an
enemy CA chase you into toward third space; he is losing his position faster
than you are losing yours.

<p>&nbsp;Once you enter enemy territory, find a safe, effective place to
regenerate E-temp and fuel, and then optimize your position. If another
bomber is in the primary position, he will either shift to the secondary
position or play an aggressive or ogging role.

<p>&nbsp;
<h4>
Q5: What if they chase me?</h4>
A5: Run towards third space. Remember, as long as theyre chasing you they
cant do anything else for their team. If theyre really inept (say they
chase you mindlessly in a CA) you can still get some bombing done while
avoiding him. Dont let him kill you unless in dying you bomb his last armies.
The main reason he is chasing is probably that he wants a kill.

<p>&nbsp;
<h4>
Q6: When and how should a scout ogg?</h4>
A6: Ogg when bombing duties are covered and it is apparent that your ogging
help is needed. Never assume you can kill a good carrier; assume that you
can help a cruiser finish the job. Prep an oggee by light pelting, follow
just out of range until help arrives, or fake a bomb. A scout can aid cruiser
oggs by synchronization, following-up, netting, pre-pelting, or tailing
the enemy to prevent him from reaching safety in time.

<p>&nbsp;
<h4>
Q7: Tandem scout oggs are fun. Are there drawbacks to this?</h4>
A7: Yes, if it leaves the team without a bomber. It takes almost a minute
for a scout to establish bombing position. During this time, about three
armies will pop, and an enemy take can occur. If bombers ogg foolishly,
they may wind up playing catchup (ogging or arriving too late to bomb safely)
rather than destroying armies as they appear. Poor scout discipline is
almost a given in any game, and the results can be disastrous. Cruiser-scout
oggs drive the taker away from the front, even if they fail. The price
for a failed, double-scout ogg is often greater, and even a successful
ogg may be a losing proposition.

<p>&nbsp;
<h3>
<a name="TakingPlanets"></a>3.7 Taking Planets</h3>

<h4>
GREY ELFS GUIDE TO PLANET TAKING</h4>
First of all, before anything, know whats going on. How youre going to
take planets depends on which planets youre trying to take. Are you taking
back your own space? Youll have to be careful with your armies as you dont
have many. Are you taking planets in the third space? You probably need
a fast ship. Taking core planets? You either need something really heavy,
(an AS), or something really fast. Know how many kills you need, there
might be a planet with only 1 army on it, that you can pick off with a
1 kill ship. If youre trying to take an agri, youre going to need two kills
and at least 4 armies, and your effort will be wasted if you dont get them
all down.

<p>&nbsp;Next, the key to winning the game is to take planets faster than
the enemy is taking them back. There are a lot of skills to help you do
this, but if youre serious about taking planets you dont have time to wander
around trying to get your second kill. The key is speed...you have no time
to waste.

<p>To take planets, first you need kills. Getting kills falls under another
chapter (Grey Elfs Guide to Making Yourself Useful) but Ill mention a few
ways of getting quick kills. The classic method is twink bashing. Its cold,
its cheap, it works. You find someone with the nice 0.3 kill ratio and
get him to come after you. My favorite method is to let the guy get a decent
phaser on me. Then I start to run and he says Ive got him now!and charges
forward right into my beautiful line of torps. Its scary how quick you
can rack up kills if the enemies line up right.

<p>Another method is to get in front of your Starbase. If hes anywhere
near the enemy he is probably attracting oggers...try to pick them off
before your starbase gets at them. If he blows up someone youve just crippled,
call him a kill thief and tell him youd like some reward for destroying
oggers for him. Hell probably understand that you really want some kills
to take planet. Note that Im NOT advising you to sit behind your SB and
scum a kill after he damages it...first of all it usually takes too long,
and makes enemies to boot. You certainly dont want your team against you
when you really need some help.

<p>&nbsp;A third way is to try to force enemies into an outnumbered situation.

<p>This requires some skill in not getting killed, and is difficult if
there are several people ogging indiscriminately, or ogging you in particular.
Basically you try to get behind a person so he cant get away. Then you
sandwich him between your torps/phasers and those of your teammates, and
out of the random spread you have an even chance of getting a kill, better
if your teammates arent as good.

<p>&nbsp;Once you have kills, be careful. Good oggers will pinpoint anyone
with more than 1 kill, and especially focus on known planet takers. Always
watch the long range scanner for cloakers, and know if good players are
headed in your direction. If you spend 5 minutes getting 2 kills, you certainly
dont want a battleship running you over when you least expect it. This
holds true everywhere, at all times. Little sucks more than getting blown
up at your home planet as you refit to an assault ship...especially if
the guy them bombs the armies you were planning to pick up. (A little secret:
when I head back to my home planet to refit to an assault ship, I pick
up some armies from the front line and carrying them back with me...because
theres no guarantee they will still be there when I get back).

<p>&nbsp;There are a couple of ways to deal with oggers. First, you have
to know they are there. Watch the long range scanner at all times, even
when dogfighting. Remember that your ship still has weapons, and use them.
If you are planning to take planets, dont get in close with enemies...they
may just be trying to suicide into you. Im not encouraging people to runner-scum,
but dont close with the enemy either. If an enemy is coming in cloaked,
there are two things to do. If hes coming in very fast, either blast some
torps into his path, since he cant dodge, or cloak just before he gets
within phaser range. Slow, spin to the side, and speed up again...he will
uncloak, go flying past you, miss with his torp spread (which you just
dodged), and try to come back after you, now rather low on fuel. If hes
coming in slow, fly away around warp 6, burning no fuel, and wait for the
ogger to run out of fuel. Then go do what you were before he got there.
Remember that most oggs are ineffective unless you dont see it coming,
are already hurt, or the ogger is really good. Also, let your teammates
help you, but dont hide behind their coattails: if youre going to be effective
you have to take some risks, and sometimes you get burned. Take your loss
and come back fighting.

<p>&nbsp;What ship you choose to take planets in is a difficult choice.

<p>Everyone has their favorite fighting ship: I prefer cruisers. In some
cases another ship might be more effective: you lose time in changing ships
(less if your starbase is nearby), but a different ship might be able to
do more. Each ship has a different style to it. Scouts are useful for taking
planets that are left undefended and weak. You can slip in very quickly
and beam down two armies, which can either take a planet or weaken it for
the next person to show up. (This tactic can be very useful when the enemy
is low on planets...letting other people take the planet with one kill
ships). Destroyers are exceptionally good for taking lightly defended planets
since they can carry 5 armies and are both fast and maneuverable. Heavier
ships are more useful for taking well defended planets, since they can
take the punishment of random torps. Remember that Assault ships can carry
an army for every 0.33 kills...so an assault ship is much better for taking
planets. However, enemies know what assault ships can do, and will often
ogg one without even checking how many kills it has.

<p>Another choice is how many armies to carry. This depends on what you
are trying to do, and how many armies your team has to use or lose. If
you expect that your team can defend the planet youre taking, only carry
enough armies to leave one of yours on the planet, and let it grow. Carrying
more is an invitation to be ogged, and is probably a waste unless youre
sure that you can grab more than one planet in a single run. If you think
your team cant defend the planet, and youre just taking it to deny its
growth to the enemy, try to carry enough to bring it to 3 or 4, so that
the enemy will have to waste many armies to get it back. Again, carrying
more is just an invitation to be ogged, and it actually reduces your effectiveness,
because youll be so timid defending your piles of armies that you wont
be able to get anything done. Sometimes you gotta die to take a planet...If
you are taking a planet that is heavily defended (like a last planet stand)
then carrying more than 4 is probably useless, because youll probably just
die with them all, and theres no point in losing lots of armies at a time.
Of course, it all depends on how many armies you have: if you have 15 planets
with 20 armies each, it doesnt really matter how many you die with, while
if you have few armies you have to conserve every one you can get.

<p>There are several different situations in which one takes planets.

<p>&nbsp;These are: your team is down, its an even battle, youre driving
the enemy back, youre trying to break core planets, or a last planet stand.

<p>&nbsp;If you are short on planets, you are probably also short on armies,
so defending them is a must. Hordes of oggers will come for you as soon
as you pick armies up, if not sooner, so be ready. Dont just take a planet
and fly away, because a planet with 1 army is easy pickings for anyone
with a kill. Stay and defend it, or make sure someone else is. Otherwise,
you might as well have died with the armies for all the good they did your
team. If you have lots of armies (sometimes all your planets grow at once)
it can be useful to save some on your starbase, rather than taking lots
of planets that are easily taken back. Planets with 4 armies cant be taken
by a 1 kill ship, while a planet with 1 army can. Always take an agri first
if your team has the ability to defend it, because it will grow armies
much faster than a regular planet. Who needs a home planet when you have
an agri...

<p>If the game is fairly even, then you want to take planets fast and stop
the enemy from retaking them. Again, you are probably low on armies, and
should be making sure the enemy is too. Only carry 5 at a time...go back
for more after you take a planet. Carrying more is just too risky at this
point in the game. Take agris first, then fuel, then repair. Your team
will love you for it :-)

<p>&nbsp;Try to con your team into clearing the planet so you can take
it. If they arent, you can try to clear it yourself, depending on how good
you and the target are. If you think you need help, but arent getting it,
try this trick: wait for a teammate to get near, then fire some torps and
try to get the enemy to shoot back. Toggle your shields a couple of times
too. Look like your having a really tough battle. Hopefully your teammate
will get the idea and come chase the enemy off. Theres a lesson here that
Ill mention again and again: people notice what happens on their short
range scanner more than they notice the long range scanner. This is more
true with less skilled players. If you want someone to notice you, do something
on their short range view: if you dont want people to notice you, stay
off their short range view. We all have tunnel vision, and often see only
what we want to see. Use this to your advantage.

<p>&nbsp;As you advance into the enemy space, the game changes a bit. You
start to have more armies than the enemy...you can afford to be more aggressive
in taking planets. Every army you kill is another blow, every planet is
production lost by the enemy. A really strong push at this point can force
the enemy into a last planet stand. The enemy will be fighting back hard,
but they dont have enough people to defend all of their planets heavily.
Use this to your advantage.

<p>&nbsp;Oggers have an easy time at you when you are in their space, so
watch for them all of the time. Dont be conspicuous; just kind of fly around
until you see an opening. The key is that, as time goes on, different enemy
planets will become weakly defended. People fly around, and others get
killed. What you have to do is be ready for an opening to occur, and JUMP
on it before the opportunity closes again. What I like to do is pick a
promising side of the enemy space and float...careful not to get on the
short range scanner of any enemies. A lot of times, someone might be floating
perfectly aimlessly, headed somewhere else, but will zero in on you if
they see you at short range. Even if you kill them, youve lost valuable
time and opportunity, plus the person might very well look at the kill
list and send out an ogg call on you. I wait for something: sometimes a
planet just gets left open. Other times a teammate causes a distraction
which keeps the enemy from looking at the long range scanner. (Remember,
its hard to look for cloakers when someone is shooting at you). Sometimes
my team just blasts the enemy off. When a chance occurs, you have to MOVE,
and fast. You may only have seconds to get the planet and get out before
you are noticed. Cloak, and scream in at max warp. As you get close, slow
down so you can dodge a bit. Slow down more as you get close to the planet,
because you have to be going slow to orbit the planet. Keep your shields
down as you go in (to conserve fuel), but keep your finger on the shields
key so you can toggle them instantly. I usually raise them once Im close
enough to take damage from the planet. At this point there are four keys
you need: bomb, beam down, det others torps, and shields (these are by
default b, x, d, and uor s). I find it useful to remap the bomb key to
something near xand d; I use s. This way you can hit all three keys without
looking down. Its also useful to have the resource display on the short
range view: this way you can see if you should bomb before beaming down
armies. As soon as you start orbiting the planet, start bombing or beaming
down. Be prepared to det incoming torps, and to raise shields if it seems
necessary. If someone fires a plasma at you, its almost always better to
raise the shields to take the plasma, then continue. Remember that raising
shields stops you from attacking the planet, so you have to hit the bomb
key again. Look for the army picture to disappear, then start beaming down.
As you beam down, look back and forth between incoming torps and the little
window above the message window which counts down the armies: 4..3..2..1..0..1..
As soon as youve beamed down all your armies, raise your shields and hit
warp 6. Try to dodge torps on your way out, and punch it as soon as you
are in the clear. Spin parry dodge. Lower your shields if no torps are
hitting you, to save your fuel. Also, uncloak as soon as is feasible to
avoid getting caught without any fuel. Head for the nearest friend and
have him get in the way of the oncoming enemy hordes.

<p>For a beginner, it can be a real problem to remember which keys to hit,
and to hit them in the right order. Practice on planets that arent so defended:
pretend there are enemies about, cloak, and take the planet as if someone
were about to kill you. You never know, someone might be.....At all times,
dont panic, and never give up: that battleship MIGHT just miss :-)

<p>Taking last planets is even tougher, because there are less openings.

<p>Usually youll have to beat one, two, or even more enemies to take the
planet. An assault ship is usually necessary for this, unless the defenders
are really clueless. You have to pick your attack carefully; you cant just
charge in and take the planet. Wait for things to look good. Bide your
time: if the enemy only has one planet, they probably arent coming back
anytime soon. Wait for their admiral to fly away, THEN crash the planet.
Always be ready; sometimes the enemy home planet will be totally undefended
for just long enough to get in and take it. One of the best times to take
a last planet is when the enemy has burned most of their fuel dealing with
others: they might not have enough fuel to finish you off, especially if
you det their torps for less damage. Sometimes youll wait for 15 minutes
for those 3 seconds that the starbase drifts away from the planet. Only
three seconds, but youre in and beaming down before he can find his plasma.
Try to get the enemy to forget about you; let them deal with other people,
and then suddenly pop out of nowhere to take the planet.

<p>&nbsp;As you fly in, youre expecting to get fired upon, so be ready
for it.

<p>Have one finger on the shields, and use your other fingers to change
speeds. I usually try to slide in at about warp 5, dodging the enemy torps
as I go in. I accelerate as I see a clear path to the planet, and hope
I can orbit quickly. Always remember that youll probably have to lock on
the planet again, as youve been spinning around in circles all this time.
Once you lock on, keep the shields up and move your hand over the beam
down key. As soon as you orbit, start beaming down, and have another finger
ready to det the incoming torps. This is probably a suicide mission, so
dont worry about what to do after you take the planet. Only stop beaming
down if a plasma is incoming: then it might be worthwhile to take the plasma
to the shields, then continue beaming down. Usually its all over before
you can think about making it out alive. If you somehow manage to get all
your armies down, try to fly away and get to your friends...but even if
you die, youve really done a lot for your team.

<p>&nbsp;If theres more than one defender, or the one is fairly good, youll
probably need help to take it. What you want is to have your enemies too
busy to look at the long range scanner to see if cloakers are incoming.
This usually means you want the distraction uncloaked, so that the enemies
will focus on the distraction. Try to come in from a different angle; few
people expect a planet taker to come from behind them. Make sure the good
defenders are occupied, or have your teammates assigned to take them out.
There are two plans: either have your teammates kill most of the defenders,
or just keep them so busy that they wont see you. Killing works better
at planets farther from the home planet, since the returning ships cant
get back in time. Killing also is needed against good players, because
they are probably going to see the cloaker anyway.

<p>&nbsp;If you are helping someone take a last planet, your job is to
keep the enemy busy...too busy. If there are only a few (3 or less), and
no SB, then pick out the best of the defenders and suicide into him. They
will all burn fuel shooting at you, and youll take out the person most
likely to kill your planet taker. The planet taker can then come in and
take the planet in those few seconds before the enemy looks back at their
long range scanner. If there are too many defenders for this to work, you
have to be more sneaky. You somehow have to get the defenders to focus
on you instead of the planet taker coming in from a different angle. One
of my favorite tricks is to fly in cloaked, and then fly cloaked or uncloaked
in the opposite direction from the real planet taker. If all goes well,
the enemy will come chasing off after me while the real planet taker slips
in behind before the defenders notice the deception. A lot depends on how
good the defenders are: a few really clueful battleships can defend a planet
against all comers.

<p>This is all well and good, but usually you just get blown to bits without
getting a single army down. If this happens, hurry back out and get some
more kills. Pick up more armies, and start floating around again. You know
youre doing well if the enemy says You have kills AGAIN???Hang around,
look, wait, and then sneak in from behind, and get blown to smithereens.
Come back again...and often that third time, theyll have just a little
too fuel, and be a little too far away...and its all over.

<p>&nbsp;So thats the advice I have to give on planet taking. Ill just
summarize:

<p>&nbsp;move: dont waste time

<p>&nbsp;get kills quickly

<p>&nbsp;watch for oggers always

<p>&nbsp;know what planets need to be taken, and who the defenders are

<p>&nbsp;choose the right ship and the right number of armies

<p>&nbsp;try not to attract attention

<p>&nbsp;try to get undefended planets

<p>&nbsp;wait for an opening, then jump on it

<p>&nbsp;attack when the enemy is too busy too deal with you

<p>&nbsp;come back again...and again...and again...eventually the enemy....will
collapse

<p>&nbsp;And remember, theres little more satisfying than breaking a long
last planet stand, or knowing that every player gets to see your name in
the final message: : Galaxy has been conquered by Ff (Grey Elf) and the
Federation. But the best compliment I ever got was when I took Romulus
as a Fed three times in a row, and one of the Romulans sent to the all
board:

<p>&nbsp;damn elf. Makes my day everytime I see that line.

<p>&nbsp;
<h4>
Good luck, and good netrekking!</h4>
Andrew Markiel Rear Adm. Grey Elf (ex-

<p>&nbsp;jm79@andrew.cmu.edu Admiral Neutrino)

<p>&nbsp;
<h2>
<a name="Misc"></a><b>4. Miscellaneous Stuff</b></h2>

<h3>
<a name="UdpSpSlip"></a>4.1 UDP, Short Packets, And SLIP</h3>
Netrek is played over the Internet (or other TCP/IP network), which was
never really designed for this kind of highly interactive, widespread gaming.
Originally all Netrek games were local (on the same piece of ethernet),
or at worst on the same campus (The game originated at Berkeley.) When
Netrek games started being played over wider geographic regions, the lag
became unbearable for players far from the server. The packets simply could
not be routed fast enough for smooth play.

<p>At that time, Netrek was updated to support UDP (Universal Datagram
Protocol) instead of TCP. This is a network protocol that runs much faster
than TCP and greatly improved playability. The world was a happy place
once again. The only catch is, unlike TCP, UDP packets are not guaranteed
to arrive at their destination uncorrupted, or even at all! This is what
makes UDP fast, but it is also a problem. In practice, it means that packets
will occasionally get lostduring play. If a server packet is lost you will
have a jerky update, or a ship will appear to be in the wrong position,
or a random unmoving torpedo may float on your screen, seemingly ownerless.
If a client packet is lost, your phasers may not fire when you press your
middle mouse button, or your shields may stay down when you order them
raised.

<p>&nbsp;In 1991, the first game of Netrek was successfully played over
the modem via SLIP. This was made possible via yet another modification
to Netrek, Short Packets. This was an internal rewrite of the communications
protocol in Netrek to use much less bandwidth. In particular, rather than
sending the full positions and status of all ships and torpedoes on every
update, the server sends only those things that have changed and only for
those objects which are in range (i.e. on your tactical map.) It also employs
clever packing of information in bit fields and variable length packets
to squeeze the maximum information out of every bit. This reduced the bandwidth
for Netrek to modem usable levels. However, this too had its problems:
with short packets it is possible for the client and server to get out
of sync with each other, as the full game status is not resent very update.
This has results similar to lost UDP packets.

<p>&nbsp;However, all is not lost. If you find that your ship doesnt always
respond to your commands, bring up the ping stats with the ,(comma) key.
(Incidentally, this is also where your lag is displayed: look at the avg.
rt [round trip] timeline.) Read the line labeled tot out pkt loss. If this
is greater than a few percent, UDP is losing a significant number of packets.
To fix this, bring up the UDP options window with +(plus). Click on the
line which says sending with simple UDPand cycle through the various options.
Try each one (enforced state, enforced weapons &amp; state, and the last
resort, TCP only) until your packet loss drops to a satisfactory level.
What is actually happening here is that the client is manually tracking
what you ordered, and if the server doesnt do it, resending the request.

<p>If you have strange garbage (random torps or phasers) on your screen
or you seem to be firing at phantom ships, or your damage wont repair,
or any of many strange effects, try requesting an update manually. Try
the -(dash) key first, this requests a small update.If this doesnt fix
the problem, try the =key. This will cause the client to pause noticeably
over a modem as the server sends more than 2000 bytes of data, including
all ship positions and status, planet positions, and each players stats,
but it should completely resync the client and server. One option that
I find useful in the options menu (press uppercase O) is the request update
on enteroption. When this is on, every time you enter the galaxy in a new
ship, everything is updated. This causes a short pause, but it gets rid
of phantom data from your previous life which sometimes happens. If you
find this useful, put the line askforUpdate: onin your netrekrc file.

<p>&nbsp;Incidentally, sometimes the client will fail to connect to the
server with UDP and/or short packets. If this happens, to turn on UDP,
press +and click on UDP channel is closed(it takes a few seconds, watch
your warning window, try again if it doesnt work.) How do you know if UDP
is off? You will be responding much slower than usual, and if you have
a modem, you will see the client sending data even when youre flying straight
and not firing, etc. These are TCP packet acknowledgments. To turn on short
packets, press ,to bring up the short packet window, and click on Dont
receive variable and short packets. Give it few seconds, watch your warning
window, and try again if it fails.

<p>&nbsp;I personally often play over SLIP and a 14.4kbps modem gets you
a reasonable lag and update rate. Playable, if youve never experience a
direct connection.

<p>Note that you only need 9600bps of bandwidth to play, but the slower
the modem, the greater the lag. A 14.4kbps modem has a minimum propagation
time of about 105 ms each way, so this means a minimum of 210 ms lag will
be added to whatever the lag is over the internet from your local SLIP
server. Good lag times over a 14.4kps modem are in the 260 ms range, which
is awkward but playable (hint: dodge before youre fired upon, and lead
with your phasers, not just torpedos.) On a direct ethernet conneciton,
good lag is around 70 ms, but on a good day it is possible to get 40 or
even 20ms lag across a continent. If you have a direct connection and youre
consistently seeing high lag, you may have a slow video system or computer,
which means that the network is fast enough but the computer is not. Try
reducing the number of updates per second (again, in the options window.)
If this works you can add updatesPerSecond: &lt;n>to your xtrekrc, where
&lt;n> is whatever number worked for you. The default is 5; with a fast
computer and net connection you can get up to 10 or so before it chokes
or reaches a point of diminishing return.

<p>&nbsp;Something that is also very useful when playing over SLIP is to
reduce the MTU (maximum transmission unit) setting of your SLIP software.
The default is usually 1500. Reducing this to 1000 or even 500 will hurt
throughput (so its bad for those 4 meg ftp transfers) but give you better
lag. I have found that changing the MTU from 1500 to 1006 gives me 40ms
better lag, on average.

<p>&nbsp;A very common question is whether to have compression turned on
or off for SLIP play. At first I thought that compression should always
be off to reduce lag, as when the modem compresses it tends to wait for
a good chunk of data to arrive before transmitting so it can get a better
compression ratio, and this increases lag. However, during testing I found
that compression can sometimes get you an extra 20-30 ms off of your lag.
Actually, lag seems to fluctuate randomly depending on the compressibility
of the packets being transmitted/recieved. The moral of the story: experiment!
On nice thing about compression on, though, it that your MOTD and Metaserver
listings arrive much faster.

<p>&nbsp;
<h3>
<a name="Ghostbust"></a>4.2 Ghostbusts</h3>
Ahh, the infallible Internetnot! You will at some point lose your connection
to the server while playing. This is called a ghostbust. However, the designers
of Netrek (those clever people!) designed a mechanism whereby the server
will try to call you client back and reconnect should this happen. And
it even works sometimes!

<p>&nbsp;If, while you are playing, you suddenly get a freeze, try switching
to the netrek console window. If you see a ghostbust message there, just
wait, and hopefully the server will call you back, and you will re-enter
the game. This can take several minutes, but its better than sitting in
a wait-queue. If you were very lucky, its possible that no one will have
killed you while you were disconnected.
<h2>
<a name="Resources"></a><b>5. Resources</b></h2>

<h3>
<a name="FindMore"></a>5.1 Where To Find More</h3>
Netrek is a very large and evolving game. There is much more to it than
We could possibly put all in one document. We got most of the material
in this document from the netrek archives.

<p>For more, the best place to go is the newsgroup <a href="news:rec.games.netrek">rec.games.netrek</a>.

<p>&nbsp;Reading the FAQ and FOCS (frequently offered clever suggestions)
for this group is a good idea.

<p>&nbsp;The Netrek Home Page on the Web is <a href="http://www.netrek.org/">http://www.netrek.org/</a>
<br>It has links to just about everything that exists in netrek. Highly
recommended.


<p>Have fun!





<?
echo "</div>\n";
echo getFooter();
?>
