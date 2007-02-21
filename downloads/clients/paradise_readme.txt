New in Paradise-2000 half-decade release
	Add a new feature called 'autoRotate'.  When turned on, the galaxy
will be automatically rotated when you enter so that your team and largest
other team are on the left hand side of the galaxy, if possible.

	Allowed the tacPlanetInfo feature to be turned on for bronco servers,
but just for the planet you are oribiting.  Moved the info over a bit so you
don't cover it up when orbiting the planet.

	Created a new dashboard timer, the repair and refit timer, or 'R&R' as
it appears on the dash.  This tells you the time until your ship will finish
repairing or refitting.  Useful for deciding if it will be faster to repair
or to refit to get a new ship.

	To go along with the R&R timer, there is a new option called
'autoTimer'.  It will automatically turn the dash timer to R&R if you enter
repair mode, then switch back to what it was before when you leave repair
mode.  The same applies if you refit.

	Added a new feature called 'weaponsOnMap'.  When turned on, phasers
and torps will be drawn on the galactic map, similar to xsg.  The server only
sends weapon info for what you can see, so you will only see the weapons that
are in your tactical.  A future server mod might add all weapon info for
observers.

	Copied the 'agriCAPS' feature from NetrekXP Mod, which shows agri
planet names in all caps on the map window.

	A completly new macro system has been created for this release.  It
appears to the user to be nearly the same as the old ones.  Previously the
client had one system for macros, and another totally different system that
did exactly the same thing for RCDs.  The new system pre-parses each macro and
creates an expression tree describing it.  You can see the trees printed out
by starting the client with the -D option.  If one of your macros/RCDs has an
error in it, like a unknown % variable or unbalanced %? conditional, you will
get a informative error message when the clients starts, telling you where the
error is in your macro.


New in rc3:
	New option, bombPickupOverload.  This will overload the bomb key with
the beam up armies function.  If you are orbiting your one of your team's
planets, or docked on your team's base, the client will send a pickup request
instead of a bomb request.  This should let you get by with one key instead of
two for bomb and pickup.

	Added a new percent-code for macros/RCDs, %x.  Returns the maximum
warp speed of the macro's sender.

	Fixed the dashboard maxwarp indicator to be correct in all cases.  It
used go down one hull damage point too soon for a CA.  e.g. maxwarp 6 started
at damage 40 instead of 41.

	Key remapping in help window.  To remap a key, put the mouse over the
function you want to map, and push the key you want to assign to that
function.  The window will automatically update to show the new key for the
function.

	The help window will show you what keys you have assigned to single
key macros.  These keys can't be used for other functions.

	Keep showing tractor ID when the person you have tractored cloaks. 
The lines still aren't drawn, since there is no where to draw them to.

	Fix observer bug where tractors wouldn't get drawn for anyone when one
player was tractoring a cloaker.

New in rc2:
	Server nicknames and flavors work with metaserver selection.  You can
add a line to your config file like such:

nameMode: 1
nameMode.hockey: 2

	Then, when you connect to a hockey server from the meta window, planet
names won't get drawn.  For another server type, you still get planet names. 
The same works with server nicknames.  If you wanted different updates per
second on continuum or pickled, you could so something like this:

server.realtime:  continuum.us.netrek.org
server.psychosis: pickled.psychosis.net
updatesPerSec.realtime: 5
updatesPerSec.psychosis: 10

	The lock line on the galactic will get updated every frame when you
have locked onto a player far away who is updating slowly.  Before it would
only move once per second when their position was updated on the galactic,
even though your position was getting updated faster.

	Jubilee phasers work properly for updates per second values besides 5
now.  Jubilee phasers shift the phaser color from red->yellow->green->blue
over the cycle time of the phaser.  It used to mess up when using 10
updates/second and cycle though the color sequence twice.

New for rc1:
	Double buffering support!  This will cause the tactical to be
refreshed from an off screen image, and should eliminate flicker for those who
notice it.  Turned on by the "doubleBuffer" option in the rc file, and can be
toggled while playing by pushing control-D.  Double buffering gives the client
some extra work, which means more lag.  The command x11perf -copypixwin500
will run a test that will tell you how much extra lag you will get.  I've seen
ranges from 15 ms to 0.1 ms; the speed is mostly based on your video card and
XFree's support of it.

	Fixed a major bug present in all netrek clients since UDP was added. 
The client will refresh all the windows and redraw the tactical every time it
gets a packet.  This means every time you get a message from a player or a
warning (like "bombing Ori: 5 armies left") the client does an extra refresh,
because all these things are sent with TCP and come in an extra packet.  Turn
on double buffering and the 20+ redraws per second you get when bombing or
dropping start to make a difference.

	Annoying bug where you couldn't see the player list fixed.

	Cleaned up a few of the bitmap albums.

	Improvements to the help window.  Keys are now sorted into groups
by category, making it easier to find that key you don't remember.  If you
have unmapped a function, the help window will tell you it is unmapped.

	Window manager close window buttons should effect most client windows.

	The "nameMode" option now lets you turn planet names off on the
galactic map and not just the tactical.  Changeable while playing from the
options menu.  Planet names aren't very useful in hockey.

	Observers can lock onto cloaked players, after they have already
cloaked, and watch them. 

	When observing, the player/planet lock triangle is no longer drawn.
It doesn't really tell you anything and just gets in the way.

	Your player ID is also no longer drawn next to your ship when you are
an observer, so that you can see the ID of the ship you're watching. 
Otherwise the two numbers get drawn on top of each other and you can't read
either one!

	You will also no longer have your player letter drawn on the galactic
map when observing.  If you are watching someone, their ship will be in white
on the galactic as if it were yours.

	Fixed the tractor/pressor lines for observers.  It will now reflect
whoever the person you are observing is tractoring and not always be drawn
toward player 0.

	The player list will now longer show the stats for observers.  Their
name, ship number, etc. will still be shown, but things like kills and rank
will be skipped since they are meaningless and just add clutter.

	Clicking the right mouse button on a server in the metaserver list
will cause you to join that server as an observer.

	Your player name and number are added to the window title after you
log on.  Makes it easier to keep track of multiple clients.
	
	Default file searching and reading totally changed around.  The new
method is incompatable with the old one, but that was so complicated and
undocumented I doubt anyone will notice.  Now the client will look for a
compiled in system defaults file,
"/usr/local/games/paradise-2000/system.netrekrc".  Then it will look for a
".paradiserc", ".netrekrc", or ".xtrekrc" in the current directory and then the
user's home directory, in that order, and read the just first one it finds. 
This file gets read in addition to the system defaults file, overriding any
settings redefined.  Then, if the user specified a server on the command line
with -h, it will look for a ".paradiserc-servername", "~/.netrekrc-servername",
etc. file for that server and read it in too.

New in beta8:
	You can now configure the the columns in the player list in both
single column mode and two column mode.  See the sameple netrekrc file for
details of the playerList option.

	The login screen doesn't use 100% CPU anymore.

	Added a sound effect for entering warp or transwarp.

	The client will not go into hockey mode if the server was in hockey
mode some time before you entered the game, but isn't in hockey mode when you
enter.

	Auto war declaration will not happen in hockey mode.  If t-mode was
acquired between points, when you're at peace, the client would declare war
and you'd get frozen for 10 seconds.

	Fixed a ton of places that assumed the tactical and galactic were
500x500 and that the font size was 6x10.  Different sized fonts should work
much better now.

	Fixed a few bugs in the dashboard with fonts that don't have character
0 as blank.

	Better observer support.  Observers will get marked in the player list
as status 'ob'.  When you are observering a player, the dashboard stats for
torps out, kills, and max armies carryable will refect the player you are
observering instead of just staying 0.

	Removed a blank line from the top of the player list.  You might want
to adjust your netrekrc.

New in beta7:
	Fixed speech bug where the "god" voice would get stuck on.  The normal
voice should come back now.

	The planet list window will switch from sorted to unsorted mode
when you click on it.

	The macro window will switch between showing RCDs or macros when you
click on it.

	You can select planets from the planet window, for actions that effect
planets.  This means you can info them, lock on to then, and refer to them in
RCDs and macros.  Just put the mouse over the planet name and push the
corresponding key.  You can do this with the player list too, but that's not
a new feature.

	Sending RCDs and macros from the player or planet list works better
than before.  The client will not crash if you try to send a macro to a
cloaked player.  The planet and player names are more accurate too, for
example if you push control-o on player 1's name in the player list, you'll
send something like "Help Ogg 1 at Org".  Org would be the closest planet to
player 1.  You can now refer to cloaked players via the player list for macros
and info, but not for locking onto.
	
	Scroll-lock and num-lock will stop screwing up mouse button mappings.
	
New in beta6:
	Speech enabled sound server now included!  The normal sound server is
called "paradise.sndserver" and should run on almost any Linux system.  The
speech version is called "paradise.sndserver.viavoice" and is linked to IBM's
ViaVoice TTS package.  This gives it some requirements for shared libraries
you'll need to have.  You will need IBM's ViaVoice TTS runtime package, from
http://www.ibm.com/software/speech/dev/ttssdk_linux.html.  To use the viavoice
soundserver, you'll need to set the soundPath in your netrekrc to point to the
paradise.sndserver.viavoice executable.  The "Speech Control" section of the
example netrekrc documents the many options that can control speech output.
You can also play with most of the options from the Speech page of the
options menu.

	Annoying longstanding bug fixed.  Sometimes the client would crash for
no apparent reason, and if you reconnected quickly it would crash again, and
again...  But if you waited a minute to re-connect, no crash.  Turned out to
be a problem with logging in players messing with the auto war declare
feature.

	Another longstanding problem fixed.  The client would stop responding
to keys correctly if num-lock or scroll-lock was on.  The client should now
work fine with them on.

	Hockey score display.  The client finds the score of a hockey game by
counting Rom and Fed planets, and displays the score in the corners of the map
window.  This way you can see the score at a glance, without having to count
the planets yourself or waiting until a goal is scored.

	The warpStreaks feature now works on Bronco servers when you
transwarp.  This makes the background stars streak as you enter and leave
warp, for a cool Star Trek "engage" look.  The dashboard will also say
"TransWrp" instead of "Impulse".

	Bronco planet list window now looks right.  Before it was split over
two windows that were on top of each other.  Now the Bronco list is one window
like in COW, while the Paradise planet list is split into two non-overlapping
windows.  For netrekrc window layout, "planet" is the Bronco-style list, while
"planet1" and "planet2" are the Paradise-style list.

	Made the "mapSort" feature work with the Bronco planet list, instead
of just the Paradise list.  When mapSort is on, the planet list is sorted by
team.  When mapSort is off, the Bronco list will have lines separating the
four teams' original planets, so you can tell when one race is about to be
genoed on screwed up servers like chaos.eic.net.

hockeyScore: boolean (on)     Find and display hockey game score on galactic

New in beta5:
	Transwarp key for Bronco servers.  Pushing '-', the key to engage
warp on Paradise, will work for Bronco transwarp too.  It will automatically
lock onto your team's starbase, if you have one, and then send the practice
robot request that starts transwarp.  This way you don't have to find your
base and lock onto it first, which can be a pain when there are lots of ships
next to the base.

	Refit/transwarp marks on the dashboard status gauges.  Small marks on
the dashboard indicator gauges show the shields/hull/fuel you need to be able
to refit or transwarp.  They turn color from white to red when your stats are
outside the refit or transwarp range.

	Paradise refit command lockout bug fixed.  Before, if you pushed
refit, you had to pick a ship type before you could use the keyboard or mouse
normally.  So if you hit 'r' for refit instead of 'R' to repair, and then
wanted to raise your shields or fire torps, the client would just beep at you
when you pressed the keys, which was rather annoying.

	Updated the why dead messages to be more in tune with current servers.

	Speech synthesis stuff is in the client now.  However, you need the
speech enabled sound server, which I haven't released yet.  So the speech menu
is just there to tease you.  I'll write some docs and release the speech
server when either IBM says it's ok, or I get tired or waiting.

New in beta4:
	Made lowerCaseT default to on.  When on, 't' sends messages to your
team and 'T' sends messages to player T.  When off, you have to hit shift-T to
send messages to your team, and that sucks.

	Fixed the showIND feature, which draws an X through independent
planets on the tactical and galactic.  It previously didn't work.

	Fixed the Bronco ranks so they match the standard for current servers.

	The metaserver list now shows all working servers, not just those with
players on them.  Maybe once upon a time there were too many servers to list
this way, but not anymore.

	New option, "singleRCD", which makes RCDs implicitly singlemacros,
which mimics the RCD behavior in COW.  What this means is that an RCD can be
sent with a single key, instead of pushing the macro key first.  E.g.  ogg
would be control-o instead of 'X' followed by control-o.  Default is on. 
Several of the default RCD control keys conflict with, and will override, the
default keys for other things.  For example, control-9 is the key for the
pickup RCD, and is also the key for warp 19.  If you want a warp 19 key,
you'll need to remap it or turn singleRCD off.

	Bug fix, you couldn't make a single key macro that was a control key. 
Now you can.

	Client now tells server is has the SHIP_CAP feature.  The Paradise
client has always had this (it was a Paradise invention!), but the Vanilla
server, unlike the Paradise server, needs to be told.

	The smaller heading tic that indicates desired direction will be drawn
when you are locked onto a planet or player.  It will be green and indicate
the direction to the locked on object.  Before it was not drawn when you were
locked on.  In addition, it is not draw when you are orbiting or docked.

	Made the UDP portswap code an option, settable in the netrekrc file
with udpTryPortswap.  You can also change between portswap on normal mode via
the UDP options menu ('+'), and then try re-establish while playing.  Portswap
mode on causes the client to send the the first UDP packet to the server,
instead of the server sending the first UDP packet to the client, as in normal
mode.  Portswap will work with most NAT setups, while normal mode won't.  Some
older servers don't support portswap.

	Increased max players from 20 to 32 in Bronco mode.  This was
necessary because max players in the Vanilla server was increased in version
2.9pl4.

	Sound can now be turned on and off while playing via the options
menu.

singleRCD:  	boolean (on)	RCDs are implicit singlemacros
udpTryPortswap:	boolean	(off)	Use the portswap method for UDP connection

New in beta3:
	Default metaserver address changed to metaserver.us.netrek.org,
because metaserver.netrek.org is broken.  You can use whatever metaserver you
want by putting a "metaserver:  blah.blah" line in your .netrekrc. 

	Fixed a small bug with short packets 2.  Sometimes the player list
wouldn't refresh after a player died, so they would still be listed as '--'
instead of 'CA' or 'SC'.

	New server/client feature, 19FLAGS.  Replaces the SELF_8_FLAGS feature
with a much better one.  In almost every packet, 19 of the most important
flags are sent, like shield, cloak, alert status.  In fact every single player
flag except war reprogramming and self-destruct is sent.  This way a single
lost packet won't cause your flags to be wrong, as they are resent every
update.  Due to a server side improvement, bandwidth usage is actually
slightly less than it was before.  Server support added in Vanilla 2.9pl4.

New in beta2:
	Behave a little nicer as an X program.  Metaserver window will no
longer fail to appear when using WindowMaker.  The window manager delete
window protocol will work for most top level windows.

	When the puck travels at warp 15 or 31, it will no longer cloak.  This
is a kludge fix to a problem created by the CLOAK_MAXWARP kludge.  The hockey
server at MIT has a server side kludge to fix this; when at warp 15 the puck
reports its speed as 14.  What a mess.

	Short packets 2.  Finally add support for these to the Paradise
client.  This reduces bandwidth and improves playability with packetloss.

	Support for the SELF_8FLAGS and SELF_8FLAGS2 features.  Combined with
SP2, should eliminate the problem where your don't see you shields/cloak/other
state change because of packetloss.

	Support for the SBHOURS feature.  When in a starbase, your hours
played stat reflects time in a base.

	Option to omit the team letter from the player IDs on the galactic. 
So instead of things like 'F2' and 'R5' there would just be a yellow '2' and a
red '5'.  Letter clutter on the galactic.

	Shrink phasers, like in BRMH.  Phasers lines shrink toward their
target, in one second they get to about half length.  Aids with timing your
phaser cycle, and lets you see who is phasering who easier.

	Some new sound effects.  Currently, there are 17 different sound
effects.

omitTeamLetter: boolean (off)  Omit the team letter from ships on the galactic
shrinkPhasers:  boolean (on)   Shrink phasers as they cycle

From beta1:

	Stereo sound effects.  Super sophisticated psycho-acoustic 2D sound
placement.  Well, not that sophisticated, but it does place sounds by where
they happen on the screen.  You need to have permissions on /dev/dsp, and the
sound server paradise.sndserver must be in a place the client can find it. 
You can define in your .netrekrc file where the sound server is and what
device to open.

unixSoundPath:  /name/of/sound.server            (default paradise.sndserver)
unixSoundDev:   /dev/dsp			 (default /dev/dsp)

* You also need to add the line, "playSounds: on", to your .netrekrc file in *
* order to turn sound effects on.  The "play sound effects" entry in the     *
* defaults menu doesn't work.                                                *

  [in beta 4 it does work]
******************************************************************************

	Support for wheel mice.  If your mouse if configured properly in X,
you should be able to scroll the message windows with it.  On the tactical,
the wheel will fire torps by default.  You can bind keys to the buttons with
'buttonMap', just like other mouse buttons.  The up direction is button p and
down is q.  So to make up det and down plasma, you would have a buttonmap of
'pdqf'.  Remember that buttonmap also goes through the keymap, so if you have
space bar mapped to det, you would make your buttonmap 'p qf'.

	You still can't lock onto cloaked players from the playerlist, but
attempting to do so will no longer crash the client.

	Re-enter the game after you die and are at the MOTD by pressing the
space bar, rather than clicking on the race window.  Stop entering on the
wrong team in 4x4 hockey games.

	No puck player letter on tactical.

	Correct metaserver address!

	32 position ship bitmaps.  There are twenty files named R?.C?, these
are 32 positions ship bitmap albums.  You will need to add an entry into your
.netrekrc file for them, eg.  shipBitmapPath:  /path/to/these/files (default
is ".")

Some new features, rcfile option, type, default, description:
detCircle: int (1700)          Draw red circle around ship
headingTic: boolean (on)       Tic mark to indicate heading
puckArrow: boolean (on)        Tic mark to indicate puck heading (hockey)
tractorID: boolean (on)        Show ID of tractored player next to ship

