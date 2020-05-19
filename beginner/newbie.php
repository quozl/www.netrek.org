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

<center><h1>Netrek Newbie Manual</h1></center>

<p><h3>
This guide assumes you've got a client downloaded and installed on your
computer. <br>If not, go to <a href="../downloads/">the downloads section</a>
and do that.<br><br>


<ol>
<li>For <font color="cyan">Windows</font> clients, either read this manual (longer and detailed) or go read the flash guide at 
<a href="http://www.playnetrek.org/netrek-tutorial.html">http://www.playnetrek.org/netrek-tutorial.html</a>. 
<br><br>

<li><font color="cyan">Mac</font> users, there's a <a href="../files/MacTrek/MacTrekUserManual-1.2.0.pdf">User Manual for MacTrek</a>. <br>You can also read this guide; the screenshots used in this 
guide are mostly from the Unix and Windows clients, but the commands
and gameplay are essentially the same, so this guide should be
good for you. As is usual for a Mac, your screens look prettier 
and are easier to use. The client is changing quickly enough that this 
guide may sometimes be a little out of date. 
<font color="yellow">Note that it's a lot easier to play with a three button mouse.</font><br><br>

<li><font color="cyan">Linux</font> 
users, read on. Or read the 
source code if you're so damned geeky.<br><br>


<li><font color="cyan">Impatient?</font> <br>Here's how to start in one paragraph:<br> 
Start the program, choose a server, log in as guest, choose a team. 
0 thru 9 sets your speed, left mouse button is torpedos, middle mouse button (scroll wheel) is phasers, right mouse button sets course. "s" to raise or drop your shields. "mt" to send a message to your teammates, "mA" to send a message to everyone. Read messages, watch your fuel level, and destroy the other team's ships. Don't worry about getting killed; just grab a new ship and jump back in. 
</ol>
</h3>

<br><br>
<center>Revision 2.0.1, October 2008&nbsp;
<hr></center>


<h2>Contents:</h2>
<ol>
<li><a href="#Introduction">Introduction</a></li>

<li><a href="#Basics">Start Up, Log In, Move Out</a></li>

	<ol>
	<li><a href="#Connecting">Connecting To A Server </a></li>

	<li><a href="#Logins">Logins </a></li>

	<li><a href="#MOTD">The MOTD, Teams and Ships</a> </li>

	<li><a href="#GameScreen">The Game Screen</a> </li>

	<li><a href="#Commands">Essential Commands</a></li>
        </ol>

 <li><a href="#Gameplay">Playing the Game</a> </li>
        <ol>
            <li><a href="#Gamebasics">Game Basics</a>
            <li><a href="#Watch">Things to Watch and Do</a>
         </ol>

	<li><a href="#Moretech">A Few More Technicalities</a> </li>
        <ol>
            <li><a href="#War">War Declarations</a>
            <li><a href="#Rank">Rank: That's Commander Twink to you, bub</a>
            <li><a href="#Bases">Starbases and Transwarp</a>
        </ol>
<li><a href="#Twinks">Etiquette: Twinks are bad, m'kay?</a> </li>

<li><a href="#Resources">More Info: Drink from the Firehose!</a></li>
<li><a href="#Credits">Credits</a></li>
</OL>

<p>
<h2><a name="Introduction"></a><b>1. Introduction</b></h2>

<p>Netrek is a graphical real-time space battle simulation with a Star
Trek theme. Netrek costs no money to play, and is open-source. 

There is a galaxy with four races in it: the Federation, 
the Klingons, the Romulans, and the Orions. The game is divided 
into two teams of 8 (or less). Each players
gets a starship to fly. Players dogfight each other and attempt
to conquer each other's planets. There are several different types of ships, 
from fast, fragile scouts up to big, slow battleships and starbases; 
this allows a great deal of variance in play styles.

<p>The purpose of the game is to conquer the galaxy by taking over all of the
enemy race's planets. To do this, your team must bomb most of the enemy armies off of the planet and beam down enough of your own armies to finish off the remaining enemies. Ships that have killed enemies can beam up their team's armies to carry to the enemy planets. 

<p>Normally, you play against other humans, but there are practice
servers with a few robot players on them (bots) for training or just
when no-one else is around. 

<p>Netrek was the first Internet team game, ever. It can in many ways
be compared to both Chess and Baseball. This isn't a game you master
in a week and throw on a shelf; getting good takes time, and there
will always be new challenges. It doesn't look very flashy; Chess doesn't
either. It's about the game. It's been honed over a long
period of time to be challenging and exciting, to balance fast reflexes
and fast thinking, to be complicated enough to be interesting, but 
simple enough to play, and it's elegant, even beautiful, to watch when
played well. Once you learn the basics, you can be as serious as you
want to be about it; drop in once in a while for a pickup game or put
in so much time that people will wonder whether or not you're a human.

<p>
System requirements are modest by today's standards. You'll want a 
monitor that can display 1024 x 768, though some clients will work
with 800 x 600 if needed. A three button mouse or trackball is strongly
recommended. Netrek will work over a dial-up modem, but you'll 
be a lot happier with broadband. 

<h2><a name="Basics"></a><b>2. Start Up, Log In, Move Out</b></h2>

<h3><a name="Connecting"></a>2.1 Connecting To A Server</h3>

<p>
<img src="../img/newbieguide/cow-metaserver2.jpg" alt="metaserver window">

<p>Netrek has "metaservers", which are servers that
list all the game servers currently in use, how many players each 
has active, and what flavor of the game is in use. There are multiple 
metaservers; your client should come preloaded to connect to one or more 
of them. When you start the game, a list of game servers to play on will 
  be shown; click on a game server to connect to it and start up. 
<font color="yellow">You should
choose a Bronco server to start with; this is the basic form of netrek, 
and the most commonly played.</font> <br><a href="../servers/variants.php">Here's a list of the game types</a>, which explains why it's best to start with Bronco.<br><br>

   If you just want to observe, and not play, you can right-click the server name (but not yet on a Mac, as of MacTrek 1.1).

<p>&nbsp;
<h3><a name="Logins"></a>2.2 Login Names</h3>

<center><img src="../img/newbieguide/p2k-login.png" alt="login prompt"></center>

<p>Everyone who plays netrek has one or more characters; people play under
handles. Besides being fun, this lets the server track each
person's statistics from game to game. Thus you can have ratings, be promoted
in rank, etc.

<p>So, when you connect to a server, you must login. If you don't
wish to use a permanent handle, login as guest. It is a good idea to be a 
guest during at least your first few hours playing. Otherwise, think of a 
name and type it in. You will then be asked for a password. This prevents 
other people from logging in as you and messing up your stats. Think of one 
and remember it! You will need it to log in later. 

<p>Each server maintains its own login database; if you create a handle on, say, continuum.us.netrek.org, that login will not be present on pickled.psychosis.net. Observer logins use a different database.

  <p><font color=yellow>Important note:</font> on most clients, you must put the mouse pointer 
in the tactical (upper left) window as you type your login name and password; 
otherwise you might not be able to type anything!

<p>&nbsp;
<h3><a name="MOTD"></a>2.3 The MOTD, Teams, And Ships</h3>

<img src="../img/newbieguide/cow-teams.png" alt="MOTD and team select screen">

<p>After you've logged on, you should see the server Message Of The Day (MOTD) screen in the upper left window. This will contain any announcements about the server. MacTrek doesn't show the MOTD (as of version 1.1). 

With the mouse in the MOTD window, press f and b to move forward and backwards
through it. Whenever you are at the MOTD you can also press Shift-R (capital R) should you wish to reset your stats. 

<p>Below the MOTD (for most clients) will be the team selection section.
There's one box for each team. The large numbers in each box show how many
people are playing for that team. They change as people get killed,
resurrect, log in and out, etc. Often you will not be able to pick any
team but will be restricted. When a real game is on (as
opposed to people dogfighting while waiting for a game), only two
  teams will be active, and if one of those is full, you'll only be able to 
choose the other one.

<p><font color="yellow">Click on the second-largest team to start playing for that team. 
It's best to choose the second-largest so that the teams have about the same number of players on them. Click on the team's box and you will be assigned a cruiser (CA) for that team.</font>

<br><br> Or, with the mouse in the appropriate window, press a key to
select a ship type and start as that type.<br> 
<A href="../clueguides/ships/index.php">Here are the available the ship types,</a>
 including what the letter to press for each ship type is.


<p>&nbsp;
<h3><a name="GameScreen"></a>2.4. The Game Screen</h3>

<center><img src="../img/newbieguide/gameshot-xp_2006_1_1-labeled.jpg" alt="game screenshot with labels"></center>
<p><p>
The picture above is pretty close to what a Windows or Linux user will see.
The Mac client <a href="../img/newbieguide/mactrek-labeled.jpg">looks a bit different</a>, but has the same essential sections. 

<p>
When you first enter the game, you will see two main windows and several
  smaller ones. The large window on the upper left (lower left on a Mac)
is the local or tactical window, where you will do most of your playing. 
It shows your ship and 
   the immediate area around it. The window on the upper right (lower 
right on a Mac) is the galactic map window, which shows the entire galaxy.
Windows clients will have a tip window, normally closed by clicking on
it with the middle button. If you only have a two button mouse, you can get
rid of it with shift-right click. 

<p>
The lower part of the screen contains:
<ul>
<li>the ship's dashboard (top left on a Mac), which lists the status 
of various ship systems
<li>the list of players in the game (including observers), with 
information about each. (Top right on a Mac screen). 
<li>one or more talk windows, which show messages between players.
<li>a one-line area to type messages in; in the picture above, this 
is next to the dashboard, above the talk areas and below the galactic map.
<li>a server messages area, which contains announcements of who has been killed
by whom and which planets have been taken over. 
</ul>
<p>

<p>
Not all clients look the same, and most clients let you change which window
goes where. Sometimes the talk windows will be on the left, 
with the playerlist on the right, under the galactic map. 
Talk windows can be changed a lot; you can have just one window 
for all messages, seperate windows for messages to you, 
messages to your team, and messages to everyone. The Mac clients use just 
one talk window for all messages including server announcements. 
So don't worry about it if your screen doesn't 
look exactly like the one above. 



<a name="Planets"></a><h4>2.4.1 Planets</h4>

<img src="../img/newbieguide/xp2006-planet-image.jpg" alt="planet pic from XP 2006">


<p>Each planet has a long name which appears on the local window, and a
three letter abbreviation which appears on the map. The color of the planet
indicates its owner, which can be one of four team colors or gray for neutral.
Some of the planets will also have symbols on them. 
<UL>
<LI>A person symbol means there are more than 4 armies on that planet
  <br>Hence it can be bombed if it's an enemy planet or beamed up from if its a friendly planet. 
<LI>A wrench symbol means that the planet is a repair planet
  <br>While in orbit around this planet you will repair damage much faster that usual. 
<LI>A gas can, which looks like a sort of little box means that the planet in question is a fuel
planet<br>While in orbit you will refuel quickly. This is important, 
because although you regenerate fuel automatically, a fuel planet 
will fill you up much faster.
</ul>
<p>Some planets are Agricultural (Agri's); each team gets two.
These planets are very important, because they grow armies quickly.
In most clients, AGRIs will be capitalized on the galactic display.
If a planet is not an AGRI, and has no fuel or repair facilities, then it
is a "rock", the least valuable of planets.<br> 

<p>
Different client programs look different; while some clients show the symbols 
next to the planet, others simply show the planet as a circle with the symbols
inside it. 

<a name="Dashboard"></a><h4>2.4.2 Dashboard</h4>

<img src="../img/newbieguide/p2k-dashboards.png" alt="dashboard pics from Paradise 2000">

<p>
Here's a picture of two ship dashboards. 
The dashboard shows:
<UL>
<LI>Some flags: (S) shields, (R)ed/(Y)ellow/(G)reen alert, (L)ocked course, and (R)epair mode. <br>Don't worry too much about reading these; you'll probably be able to see all that info except repair mode elsewhere on the screen, in easier to read places.
<LI>The amount of time you've been connected to the server. <br>Good for understanding why your butt hurts so much.
<LI>Ship's speed
<LI>Shields condition
<LI>Hull condition
<LI>Armies carried
<LI>Weapons Temperature<br>Usually not too much of an issue, except for bases.
<LI>Engine Temperature<br>Fly too far too quickly, and you'll have to stop to cool off. 
<LI>Fuel<br>Flying faster than cruise speed, using weapons and shields, 
and cloaking all take fuel. 
<LI>Kills made in this ship<br>This determines how many armies the ship can carry.
<LI>Torpedos in flight, since you only get 8 live at once
</UL>

The top picture shows a brand-new ship doing warp 7, with a green alert (no 
enemies nearby) and course locked. The bottom picture shows a ship in trouble;
the shields and hull are almost destroyed, and maximum speed is down to warp 2
because of the damage. It's got one torp in flight, and the weapons are heated up a bit. The two kills it has mean
that it can carry four armies, if it survives that long. 


<p>

<h3><a name="Commands"></a>2.5 Essential Commands</h3>

<br><p>
There are a lot of commands. Below, we'll just cover the basics. 
<font color="yellow">In the game, you can type "h" in the tactical or galactic screens to 
bring up a full command list.</font> Note that where your mouse pointer is
makes a difference; most commands can only be issued with your mouse 
in the tactical or galactic screens, while messaging happens in the
message areas. 

<br><p>
Like learning to drive a car, at first there will seem like there are
an impossible number of things to keep track of at once. But with a bit
of practice, you get used to it, and eventually you can brake, steer,
signal, shift gears, flip radio stations and chat with the passengers
all at the same time. In netrek, once you can steer and shoot, 
the important thing to remember is to try to learn to read the messages 
windows; without that, you can't coordinate with the rest of your team.
<br><p>
Netrek has a key remapping system; you can change the commands to use any keys
that you like to suit your own playing style. The keys listed below are the 
defaults for most clients.

<br><p>
<center>
Mouse Buttons
<table border="1">
<tr><th>Button<th>Action
<tr><td align="center">Left</td><td>Fire Photon Torpedoes</td></tr>

<tr><td align="center">Middle<br>or<br>&nbsp;&nbsp;Shift+Left&nbsp;&nbsp;</td><td >Fire Phasers</td></tr>

<tr><td align="center">Right</td><td>Change course</td></tr>
</table>
</p>
										   <br>Note that on a Mac with a one-button mouse, the "k" key changes course.
</center>

<br><p>
<center>
Speed and Heading Control
<table border=1>
<tr><th align="center">Key<th align="center">Effect</tr>
<tr><td align="center">0-9</td><td>Set Warp Speed 0-9</td></tr>
<tr><td align="center">)</td><td>Set speed to warp 10</td></tr>
<tr><td align="center">!</td><td>Set speed to warp 11</td></tr>
<tr><td align="center">@</td><td>Set speed to warp 12</td></tr>
<tr><td align="center">%</td><td>Set speed as fast as you can go!</td></tr>
<tr><td align="center">l<br>(lower case L)</td><td>Lock onto object.
<br>Sets your course to that object. 
<br>You need to do this to orbit planets, transwarp, and dock on bases.</td>
<tr><td align="center">*<td>Transwarp to starbase.
<br>Must lock course first, and be doing less than warp 3.</tr>
</table>
</p>
</center>

<br><p>
<center>
Weapons Systems
<table border=1>
<tr><th align="center">Default<br>Key<th align="center">Effect</tr>
<tr><td align="center">s</td><td>Shields raise/lower toggle.
<br> Your shields consume fuel. 
<br>Also, your ship will only repair internal damage while shields are down. 
<br>But you are much more vulnerable when your shields are down.</td></tr>
<tr><td align="center">T</td><td>Tractor Beam on/off toggle. 
<br>Pulls target toward you but uses a lot of fuel.
<br>Useful to make sure you nail ships that are trying to run.
<br><font color="yellow">On MacTrek, tractors are "u"</font>
</td></tr>
<tr><td align="center">y</td><td>Pressor Beam on/off toggle.
<br>Just like Tractor, but it pushes target away.
<br>Useful in keeping those over-agressive warships away from you.</td></tr>
<tr><td align="center">c</td><td>Cloak/Uncloak Ship. 
<br>While cloaked your ship will not show up on other players Tactical displays.<br>It will show up as a ?? on the Galactic display.
<br>You can't fire weapons while cloaked, and there's a short delay to fire
after uncloaking.</td></tr>
<tr><td align="center">b<td>Bomb enemy planets.
<tr><td align="center">d<td>Detonate enemy torpedos that are close to you.
<br>You'll still take some damage, but not as much as a direct hit. 
<tr><td align="center">D<td>Detonate your own torpedos. 
<br>If you can see your torps are going to miss, 
you can pop them in order to fire more. 
</table>
</center>
</p>

<br><p>
<center>
Windows and Information 
<table border="1">
<tr><th align="center">Key<th align="center">Effect</tr>
<tr><td align="center">L</td><td>Bring up the Player List Window, if it isn't there already.</td></tr>
<tr><td align="center">i,I</td>
    <td>Get information on the player or planet nearest your mouse cursor.
    <br>Lower and uppercase report different things, try both.</td></tr>
<tr><td align="center">h</td><td>Bring up help window, which lists all keys</td></tr>
</table>
</p>
</center>


<br><p>
<center>
Messages
</center>

<p>
First, either press "m" or put your mouse cursor in the outgoing message window.<br>
On Windows and Linux, this is the lower of the two thin 
one-line windows
			    <br>just below the galactic window (or possibly the tactical for some setups). 
<br>It's labeled "Typing" on the screen diagram earlier in this guide. 
<br>MacTrek has a text entry box on the middle right side of the screen.

<br><p>
<center>
<table border="1">
<tr><td>0-9, a-j&nbsp;&nbsp;</td><td>Message is sent to player of that number/letter</td></tr>

<tr><td>t</td><td>Send to your own team</td></tr>

<tr><td>A</td><td>Send to All (Everyone!)</td></tr>

<tr><td>Escape</td><td>Cancel a message before sending it</td></tr>
</table>
</p>
</center>

<br><p>
In most clients, you also can send a team message by putting your mouse
pointer in the team message window, and an "All" message by putting the
pointer in the "All" window. 
<br><p>
<center>Macros and Distresses</center>
<br>There are a whole pile of pre-defined messages called "Distress Calls" 
and "Macros"
which you can send with various special keys or key combinations. 
<br><br>For example, "F" tells your team how many armies 
you are carrying, while "E" sends a call for help. Don't send a distress
call just to save your ship; as soon as you're killed, you'll get a new one 
anyway.<br><br>It's too complicated to worry about learning at first; when 
you're ready, you can look at the 
<a href="./macros.php#rcdtable">list of distress calls</a>
in the macros guide, or <a href="./macros.php">read the whole guide</a>
for a huge number of customizations you can make. 

<br><p>
<a name="Gameplay"></a><h2>3. Playing the Game</h2>
<br><p>

<a name="Gamebasics"></a><h3>3.1 Basics</h3>


<br><p>
Once you choose a ship and team, you'll pop into the game next to your team's
homeworld. Your ship has a few basic systems: Fuel, Weapons 
(phasers and torpedos), Shields and Hull, Cloaking device, 
and Tractor and Pressor beams. How powerful each of these 
systems is will vary depending on what kind of 
ship you have. 
<br><p>
<ul>
<li>Your ship makes fuel, doing stuff uses it up.
<li>Torpedos take time to reach the target, 
so they can be dodged, or prematurely detonated for 
reduced damage. You can only have 8 in flight
at once. 
<li>Phasers are instant, then need a moment to recharge. 
The amount of damage done by phasers varies with distance. 
<li>Your shields can be up or down. While up, they use a bit of fuel.
Once they take enough damage to destroy them, further hits cause
hull damage, which reduces your top speed. Once the hull is gone, your ship
is destroyed, and you pick up a new one back at the dealership.
When your shields are down, your ship repairs damage. 
<li>You can't shoot or use Tractors and Pressors while cloaked. Cloaking
burns fuel. 
<li>Tractors and Pressors pull and push against other ships; you'll
be too busy at first with other stuff to learn how to use them well.
</ul>

<br><p>
If you log on to a server and there are two teams with at least four people 
on each, then the server is in "T-Mode" (Tournament Mode), which means 
there's a war on. If there aren't enough people for a war, then you 
can just tool around dogfighting people while waiting for T-Mode.

<br><p>
Dogfighting is the complex art of crippling or destroying your opponents
before they do the same to you; there are several seperate guides devoted
to the subject, find them on the <a href="../clueguides">clueguides 
page</a>. 


<br><p>
Once T-Mode is on, your team's overall goal is to capture all of the enemy's
planets. You capture a planet by first bombing it. If a planet has 5 or more
armies on it, it can be bombed. Once it has 4 or fewer armies on it, 
a carrier from your team beams down armies onto the planet to take it over.

<p>
Each army on the planet takes one army to destroy. Beaming down 4 armies
onto a planet with 4 enemy armies on it leaves that planet neutral; 
beaming down 5 takes over the planet. 

<p>
A ship can become a carrier by scoring kills. Each kill you score lets you 
carry 2 armies in most ships. The Assault Ship can carry 3 per kill. 
Once a ship has kills, it can go to a friendly planet that has 5 or more 
armies, and beam armies up. You can't leave a planet with less than 4
armies. If a planet has 5 armies on it, you'll be able to beam up 
only 1 army.

<p>
So the basics are: bomb planets, kill enemies, pick up armies, take over
planets. But your team will suck if you can't work together on this. For
example, carriers will often announce how many armies they are carrying and
what planet they are headed to so that teammates can guard them and clear
enemies away from the target planet. Some people will most of a game
just dashing around and bombing the enemy. 

<p> Once one team is down to two planets, a timer starts. The team has
twenty minutes to get back on their feet, or they surrender. Getting
back up to three planets freezes the countdown, getting four means
they are out of immediate danger.  Many times, the enemy will manage
to take over even the last two planets, in which case they win by
"genocide". If they win on the timer, it's "timercide", 
which isn't as impressive. 

<p>
A really unbalanced game can last as little as ten minutes, but most pickup
games last for at least an hour or two.


<br><br><p>
<a name="Watch"></a><h3>3.2 Things to Watch and Do</h3>
<br>


<p>Watch your fuel. When you run out, your weapons won't fire and you
can't go very fast if you need to run away. If you run out of fuel, you
can go to a friendly fuel planet to refuel quickly, or just sit still
and your ship will make more fuel. 

<p>
Change speeds a lot. Rush to where the action is, but slow down before you 
get there; if you rip into battle at high speed, you'll get nailed before you
have a chance to turn. Warp 4 is probably the fastest you should go during
battle, but constantly speed up and slow down to make yourself hard to hit. 
Each additional warp cuts your turning rate in half. 

<p>
Avoid chasing ships, unless you know they are badly damaged or out of 
fuel. It takes some skill to dodge their fire, and it's very easy for 
them to dodge yours. On the other hand, if you can get someone to 
chase you, waste them!

<p>
Learn who your enemies are. If you shoot at friendly ships, you won't
hurt them, but you'll be wasting fuel and pasting a big "I'm new
and easy to kill" sign on your ship.

<p>Watch your galactic map to get the big picture. Pay attention to
cloakers. Enemy ships near you will cause you to go to yellow or red alert.
This can be used to tell if the cloaker by you is an enemy or not.
Don't cloak on your team's planets without a good reason; it can make
people think you are an attacker, and they'll run over to save the planet.

<p>If torps are going to hit you, you'll take less damage if you detonate 
them early. But det blows everything in a circle around your ship; blow up
a whole wave of torps and you'll take more damage then if you just let
one of them hit you. 


<p>Bomb enemy planets with armies on them.




<br><p>
<a name="Moretech"></a><h2>4. A Few More Technicalities</h2><br>

<p>
<a name="War"></a><h3>4.1 War Declarations</h3><br>


<p><center><img src="../img/newbieguide/p2k-war-closeup.png" alt="War declarations screen"></center></p>

<br><p>
It's important to try to make sure you can shoot at the people you want to 
shoot at and don't get shot at by planets you want to use to refuel. This is 
what the war declarations screen is for. If you are in T-Mode, you'll be
at war with another team. You should set the remaining two teams to Peace
so that you can use their planets to repair and refuel. If you are not in 
T-Mode, you might shoot at someone and see your shots pass harmlessly 
through them. In this case, you are not at war with them, and the War 
screen will let you change that. 
<br><br>
The war status window is called by different keys depending on your setup.
It's usually "w", but possibly "u". The help window will tell you which.
MacTrek won't have a war screen until at least version 1.2, but will mostly
do the right thing anyway. 



<br><p>
<a name="Rank"></a><h3>4.2 Rank: That's Commander Twink to you, bub!</h3><br>

<p>
On the player list, you'll see each player has a rank, from ensign thru
admiral. <br><br>You may be thinking "I'll bet chicks (or studs) would really 
dig me if I had a higher rank in this game; how do I do that?"

<br><p>
You only gain rank during T-Mode. Dogfight all you want, if you ain't
been to war, you're an ensign. In T-Mode, you get Damage Inflicted
points for damage you do; points for kills, armies bombed or destroyed
in flight, planets taken. If you do enough damage fast enough, you get
promoted. On a typical server, you might need to do 2 points of DI within
two hours to make Lieutenant, and 24 points within eight hours to make 
Commander. 

<br><p>You also have three statistics: Offense, Bombing, and Planet Takes.
For each one, your rating will be 1.00 if you are average. Take twice
as many planets as the average player, and your planets rating will be 
2.00, bomb half as many, and your bombing rating will be 0.50. Keep your
combined stats high enough for long enough, and you get promoted. For example, 
to make Lieutenant, you might need to have a total of 1.00 (from all three
stats put together) after two hours of play. To make Commander, combined stats
of three (a perfectly average player) after eight hours of T-Mode play is
the normal requirement.

<br><p>
<a name="Bases"></a><h3>4.3 Starbases and Transwarp</h3><br>

<p>
Each team can have a maximum of one starbase. Starbases are huge and slow, 
but have very powerful phasers and tractor beams. On any server except a 
starbase practice server, you will need a minimum rank (usually Commander) 
to play a base. If a base gets killed, the team can't get another 
one right away; the minimum rebuild time is about twenty minutes. 

<p>
In addition to controlling the space around them, starbases have a few
special uses. Like a planet, you can set course to them and dock, which
will refuel and repair you quickly. You can use them to store armies. 
And, they have a special transportation system called "Transwarp". 
Transwarp lets other ships fly to the base very quickly (up to warp 60). 
This is great for getting from your homeworld to where the action is. 

<p>
There are lots of limits on this ability. To start t-warping, your ship 
must be traveling no faster than warp 2. You must be in Green alert state; 
no enemies nearby. While you are t-warping, you cannot use weapons, cloak, or 
raise shields; everything except messaging is basically locked up 
until you arrive at the base. To t-warp, lock your course on to 
the base and hit *.

<p>
Try to be sure that there will not be enemies near the base when you arrive;
if you arrive at the base and get blown up, the explosion will seriously
damage the base. This is a leading cause of bases being destroyed. 

<p>
Starbases are so tough that it is virtually impossible to destroy them using
only a single attacker. Instead, a team must cooperate to have several ships
attack the base at the same time. The main strategy for doing this is called
an "ogg". 



<p>
<h2><a name="Twinks"></a>5. Don't be a Twink</h2>

<br><p>
A twink is someone who is a netrek loser. Netrek has an etiquette; doing
things that are destructive to your team will cause people to rag on you. 
<br><br><p>A twink:

<p>1. Does not listen to his teammates, or even worse, 
doesn't read messages at all. Netrek is a team game; 
you have to be part of the team.<br><br>
People more experienced then you will try to direct actions and strategy. 
If you have a better idea, say so, but don't just ignore the requests 
of your teammates.

<p>2. Drops too few armies on an Agri. For most planets, 
if they have four enemy armies on them, you can drop 1-3 armies 
and (hopefully) come back with more later. When you reduce the number 
of enemy armies on the planet, but don't take it over, it's called 
a "partial drop" or "part-drop". Agricultural planets grow armies faster. 
If you drop 1-3 armies on an Agri (with 4 on it),
it likely will have grown more ("popped") by the time you can get back with
more, meaning you will have wasted both time and armies. Only drop armies
on an Agri if you have enough armies to take it, do not part-drop them.

<p>3. Dies with The Armies. Note that there is a difference
between dying with armies (which happens to everyone) and dying with The
Armies. That is, dying with armies when armies are scarce. Often in a game,
armies are plentiful, or would just get bombed away if not picked up, and
getting killed while carrying happens to everyone. But it's a real bummer
when some twink picks up the last two armies which are vitally needed to
take back that critical planet and goes and dies with them. So don't do that.

<p>4. Bombs a planet, especially an AGRIcultural planet,  
when the team has an Assault Ship nearby which could do a 
better job of bombing. (AS' bomb really well, and timing the bombing of 
AGRIs can sometimes be important, especially if your team is low on
armies). 

<p>5. Races to grab armies out from under teammates. Call it when you are
picking up. It's even worse when you only have one kill and can only carry 
two armies. Picking up armies to save them from being bombed is good, though.

<p>6. Blows up on teammates, especially carriers or starbases. An exploding
ship does a lot of damage; get killed in the wrong place at the wrong time
and you could hurt your team a lot. So if you are about to buy it, stay
away from your teammates; try to blow up on the enemy. 

<p>7. Calls for help continuously, whenever there's someone chasing
him. Losing a ship doesn't matter; you get a new one right away. Call for 
help if you're carrying armies and are in trouble, or if you're about to 
get killed by an enemy who is carrying armies, or trying to stop an enemy
from picking armies or bombing yours. Otherwise, learn to defend
yourself and don't worry about losing ships. 

<p>8. Whines, bitches, argues, trash talks. If someone blows something 
for you or the team, telling them they screwed up is ok. Filling the 
team board with personal attacks isn't. Friendly competitive mockery, 
especially if it's witty, is fine, but trolling, homophobia, racism, 
etc. are not good for the game. 
<br><br>
Unfortunately, some players are impatient with newbies and will curse at 
you for your mistakes. If you want to get more out of them than curses, don't 
argue with them. They will only get angrier. Either ignore them or, better
yet, ask what you did wrong. Hopefully, they will then say something helpful.
If they're still being a jerk, well, they may just be a jerk; don't let
it get to you. 


<h2><a name="Resources"></a>6. More Info: Drink from the Firehose!</h2>

<br><p>Since we all have shorter attention spans, we've cut this guide
in half. The basics are above, hopefully enough to get you started. 

<br><br>We've also got 
<a href="./newbie-part2.php">The Newbie Guide Appendices</a>, 
which includes much of what was taken out, and includes such gems
as  11 Key Terms, Ogging 101, Patterns of a Typical Game, 
stuff about Networking (including modems), and more. 

<br><br><font color="yellow">The</font> <a href="../clueguides/">clueguides</a> <font color="yellow">page has a lot more; 
dogfighting guides, a glossary of netrek terms, 
guides on how to play <a href="../clueguides/ships/">each kind of ship</a>, 
hints for taking planets,
bombing, etc. </font>. 

<br><p>We've also got a lot more places to go for information. 
You can check out: 
<ul>
<li>The Usenet newsgroup <a href="news://rec.games.netrek">rec.games.netrek</a>
<li>The 
<a href="http://mailman.us.netrek.org/mailman/listinfo/netrek">netrek mailing list</a>. 
There are also mailing lists for the game's programmers and server admins 
(<a href="http://mailman.us.netrek.org/mailman/listinfo/netrek-dev">netrek-dev</a>), 
as well as a list for weekly clue games 
(<a href="http://groups.google.com/group/netrek-clue-games/">here</a>), 
for people who know how to play at least moderately well. 
<li><a href="http://www.playnetrek.org/smf/">The webforums at playnetrek.org</a>
<li>The irc channel #netrek on irc.freenode.net
</ul>


<p>Have fun!


<h2><a name="Credits"></a>7. Credits</h2>

<h3>
<ul>
<PRE class=title >T H E
&nbsp;_&nbsp;&nbsp; _&nbsp;&nbsp; _____&nbsp;&nbsp; _____&nbsp;&nbsp; ____&nbsp;&nbsp;&nbsp; _____&nbsp;&nbsp; _&nbsp; __&nbsp;&nbsp;
| \ | | | ____| |_&nbsp;&nbsp; _| |&nbsp; _ \&nbsp; | ____| | |/ /&nbsp; N E W B I E
|&nbsp; \| | |&nbsp; _|&nbsp;&nbsp;&nbsp;&nbsp; | |&nbsp;&nbsp; | |_) | |&nbsp; _|&nbsp;&nbsp; | ' /&nbsp;&nbsp;&nbsp;
| |\&nbsp; | | |___&nbsp;&nbsp;&nbsp; | |&nbsp;&nbsp; |&nbsp; _ &lt;&nbsp; | |___&nbsp; | . \&nbsp;&nbsp; M A N U A L
|_| \_| |_____|&nbsp;&nbsp; |_|&nbsp;&nbsp; |_| \_\ |_____| |_|\_\</pre>
</ul>
</h3>

1.x series compiled by Jonathan Shekter (aka KillThemAll!)<br>
With material from Jonathan Ellis (aka maniac)<br>
Herbert Enderton (aka Red Shirt),<br>
...and many others.<br><br>
2.001 by akb4 (Retrograde/Xenophile) based on 1.7. 


<?php
echo "</div>\n";
echo getFooter();
?>
