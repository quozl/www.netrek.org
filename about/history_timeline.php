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

<h1>Netrek Timeline, through Jan 1 1994</h1>
By Andy McFadden (fadden@catapent.com)<br>
Revisions by <a href="mailto:trown@ecst.csuchico.edu">Nick Trown (trown@ecst.csuchico.edu)</a>
<p>
Revised: 18-Jan-95
<p>


<hr>
All dates are in month/year or as close as I can get to it.

<p>

The information here should be completely accurate.  Errors should be
limited to errors of omission (though there are probably LOTS of those).
<p>


<pre>
DATE		OCCURENCE
---------------	---------------------------------------------------------------
Pre-1968	Dark Ages

1968		PLATO system created

1972		Empire written for the PLATO system by S.Warner and J.Daleske

1975		Empire updated to (nearly) its current form by C.Miller
		and G.Fritz

1981		Empire tournament modifications added by S.Peltz

1982		Conquest written for VAX/VMS by J.Poskanzer and C.Leres

1982		Trek82 written by D.Davis

1983		Trek83 written by D.Davis and C.Guthrie

Feb 1986	X10R3 window system released by MIT

Spring 1986	Xtrek begun by C.Guthrie and E.James

1986		janus.berkeley.edu becomes first Xtrek server

1986??		sequent.berkeley.edu becomes primary Xtrek server

Jul 1987	Xtrek posted to comp.sources.games (v01i073)

Mar 1988	X11R2 released by MIT

Spring 1988	Netrek (Xtrek II) begun by S.Silvey/K.Smith
Spring 1988	Xtrek III begun by N.Lai/J.Edwards
Spring 1988	sequent.berkeley.edu becomes primary Netrek server

Fall 1989	DI system added by K.Smith

Fall 1989?	Netrek sources posted to Usenet by K.Smith

Fall 1989	KSU Chaos server set up by B.McCoy and B.Verser

Oct 1990	bronco.ece.cmu.edu server set up by T.Chang

Nov 1990	KSU Galaxy server built by J.Young and J.Frain

Jan 1991	Netrek information archive established by J.Hardwick

Summer 1991	sequent retired as a *trek game server
June 1991?	HunterKiller (Iggy) invented by T.Chang

May 1991	First Netrek game played via SLIP by J.Hardwick

Aug 1991?	alt.games.xtrek created by T.Holub
Aug 1991	First server/FTP lists posted by T.Holub

Oct 1991	Netrek info file FTP site announced by J.Hardwick

Nov 1991	First CMU vs. Berkeley All-Star game, at KSU; CMU genocides

Dec 1991	XSG written by A. McFadden
Dec 1991	First sturgeon server by D.Tsang goes public

Jan 1992	rec.games.netrek CFV issued by T.Holub
Jan 1992	INL created by T.Holub; first INL Rulebook posted
Jan 1992	Xtrek 6.0 released by C.Guthrie
Jan 1992	Helix borg released by J.Diachun
Jan 1992	Beef borg patches released by L.Dickens

Feb 1992	First INL game played
Feb 1992	UDP code written by A.McFadden
Feb 1992	Advanced IPC Pig borg (hoax) announced by T.Mummert

Mar 1992	rec.games.netrek created
Mar 1992	First INL championship: Team Wizard (CMU) over Team Akira
		  (CMU), 13-7

Apr 1992	UDP finalized; clients and servers become widely available

May 1992	pledit written by A.McFadden
May 1992	Sunscreamer (F.Gallo) appears on rec.games.netrek
May 1992	IBL formed by J.Nelson

Jun 1992	Original METASERVER, by E.Mehlhaff, up on kermit.berkeley.edu
		  and sickdog.cs.berkeley.edu
Jun 1992	Game recorder patches written by D.Swazey
Jun 1992	trekhopd written by A.McFadden
Jun 1992	INL council formed

Jul 1992	XNetrekM (first METASERVER client) written by T.Hadley
Jul 1992	Netrek Hockey invented by T.Chang, up on bronco.ece.cmu.edu

Aug 1992	MetaServerII, by A.McFadden, up on charon.amdahl.com
Aug 1992	Official INL server v1.0 released by R.Jones
Aug 1992	Grandfather borg released by D.Teo
Aug 1992	INL championship: Arrogant Assholes (CMU) and Team Rankscum
		  (CMU) unable to schedule game; declare themselves
		  co-winners.  (AA beat RS 19-1 after semester break.)

Sep 1992	CMU Allstars vs Australia in Australia; CMU genocides
Sep 1992	Initial work on RSA by R.Jones
Sep 1992	Server game recorder/player written by B.Mediratta
Sep 1992	Frequently Offered Clever Suggestions (FOCS) list created
		  by A.McFadden

Oct 1992	RSA sources available
Oct 1992	Hadley client released by T.Hadley
Oct 1992	Moo client (Berkeley + Hadley clients) released by R.Weinstein

Nov 1992	ENL is born, run by L.Barbaresi
Nov 1992	First dogfight tournament held by J.Hsu on
		  bigdog.cs.berkeley.edu; won by Spaceace!
Nov 1992	RSA broken by [omitted]
Nov 1992	RSA v2.0 released

Dec 1992	INL championship: Side Salad (CMU) over The Team With No
		  Name (at large), 11-8 (OT)
Dec 1992	First Europe vs. Australia at-large tournament, played on
		  server at CMU; Europe genocides
Dec 1992	Moo client with "rabbit ear" bitmaps released by R.Muliana

Jan 1993	Paradise 1 announced by B.Gillespie

Feb 1993	Ricksmoo client (Rick's Moo client) released by R.Weinstein

Mar 1993	XSG support taken over by T.Hadley; XSG v2.0 released
Mar 1993	First "ping" client written by T.Hadley and L.Dickens
Mar 1993	First sound client released by N.Cook (first version
		  finished Dec 1992)

Apr 1993	BRM (Berkeley-Ricksmoo) client released by M.Noworolski
Apr 1993	First game played on PC with Linux over SLIP, by F.Gallo
Apr 1993	RSA finally spreads

May 1993	Original reserved.c posted to rec.games.netrek
May 1993	SHORT_PACKETS modifications written by H.Wengler
May 1993	mucus.l written by A.McFadden to honor Da Pig
May 1993	Netrek article appears in the San Jose Mercury News
May 1993	INL championship: Swiss system, Looney Tunes (CMU) victors

Jun 1993	Netrek client for Mac and NDB (Netrek Display Bridge) released
		  by J.Hsu and J.Wu
Jun 1993	Vanilla server release announced by D.Gosselin

Jul 1993	guzzler server sources released by N.Trown
Jul 1993	USA to Europe backbone expanded from 2Mb/s to 34Mb/s
Jul 1993	Paradise 2.0 announced by B.Gillespie

Aug 1993	INL championship: WHATever (CMU) over Will Riot For Food (LA),
		  11-8 (OT)

Sep 1993	ANL (Australian Netrek League) formed by D.Yee; first season
		  begins
Sep 1993	RSA key utilities written by T.Hadley
Sep 1993	RomaBerkMoo client released by S.Sheldon

Oct 1993	Server RSA update program written by N.Trown
Oct 1993	RSA public keys broadcast via MetaServerII

Nov 1993	Netrek article appears in December issue of Wired magazine
Nov 1993	A.McFadden gets kinda bored and decides to write Netrek history
Nov 1993	Second annual dogfight tournament held; won by FillInTheBlank
Nov 1993	COW-lite client released by K.Powell

Dec 1993	MetaServerII moves from charon.amdahl.com to
		  metaserver.ecst.csuchico.edu
Dec 1993	Player "timeprod" field overflows 32 bits on calvin.usc.edu
Mar 1994	Maintaince of vanilla distribution taken over by J.Cameron 
                  due to N.Trown's graduation
Jun 1995	Netrek home page revived by J.Pirnie
Jul 1995	European Metaserver opens at carrier.cs.vu.nl
May 1995	timeprod overflows 32 bits on bigbang.astro.indiana.edu.
Oct 1995	timeprod overflows 32 bits on wormhole.ecst.csuchico.edu.
Dec 1995	Netrek home page move from J.Pirnie's site to D.Grant's site (http://www.cycor.ca/TCave/netrek.html)
Jan 1996	INL home page and Statsboy page merge to http://indigo2.medeng.bgsm.edu/~ahn/INL/
</pre>



Names found above, with a summary of major accomplishments:
<p>

<pre>
L.Barbaresi (Luca Barbaresi): ran the ENL (European Netrek League)
J.Cameron (James Cameron): maintainer of vanilla source distribution.
T.Chang (Terence Chang): started bronco server, invented Iggy, invented
	Netrek Hockey, discovered Ogging as an art form, invented Top Gun
	mode, tested original UDP code
N.Cook (Neil Cook): wrote first sound client
J.Daleske (John Daleske): co-author of original Empire
D.Davis (David Davis): author of Trek82 and co-author of Trek83
J.Diachun (Justin Diachun): wrote the Helix borg
L.Dickens (Leonard Dickens): created & ran the NBR voting process
J.Edwards (Jon Edwards): co-author of Xtrek III
[omitted] (omitted so as not to encourage such things): infamous borg user;
	broke initial RSA authentication by patching the executing process
J.Frain (Jerry Frain): helped with creation of KSU Galaxy server
G.Fritz (Gary Fritz): co-author of updated Empire
F.Gallo (Felix Gallo a/k/a Felix Ortony a/k/a Sunscreamer): lots of
	amusing rec.games.netrek posts, first game via PC+Linux+SLIP
B.Gillespie (Brandon Gillespie): advocate and release coordinator of
	paradise servers
D.Gosselin (Dave Gosselin): developed a vanilla server release
D.Grant (Dennis Grant): Current Netrek home page maintainer
C.Guthrie (Chris Guthrie): author of Xtrek and co-author of Trek83
T.Hadley (Tedd Hadley): tested original UDP code, set up base-practice
	server (among others) at UCI, wrote several clients, designed
	lots of server hacks, developed XSG v2.x from the v1.22 sources,
	wrote XNetrekM
J.Hardwick (Jonathan Hardwick): maintained Netrek information archive
D.Swazey (Dave Swazey): wrote client patches for first game recorder [Swazey
	was using Julian Ho's account; he is a/k/a Ensign ensign]
T.Holub (Tom Holub): created alt.games.xtrek and rec.games.netrek, formed
	the INL, wrote & maintained FAQ lists
J.Hsu (Jack Hsu): created & ran the first dogfight tournament, co-author
	of NDB and first Mac client, wrote Netrek transwarp code, developed
	"soccer"
E.James (Ed James): wrote robots for Trek83, wrote parts of Xtrek
R.Jones (Ray Jones): developed RSA, first INL server hack
N.Lai (Nick Lai): author of ROBOTREK, co-author of Xtrek III
C.Leres (Craig Leres): co-author of Conquest for VAX/VMS
B.McCoy (Brett McCoy): author of KSU Chaos server
A.McFadden (Andy McFadden): wrote XSG, wrote UDP code, adapted gw for UDP,
	wrote pledit, wrote trekhopd, wrote MetaServerII, wrote mucus.l,
	wrote & maintained FOCS list
B.Mediratta (Bharat Mediratta): wrote server-side game recorder/player
E.Mehlhaff (ERic Mehlhaff): wrote first Netrek borg, wrote METASERVER,
	wrote Berkeley client, wrote mynetd
C.Miller (Chuck Miller): co-author of updated Empire
R.Muliana (Rony Muliana): enhanced (?) Moo client
T.Mummert (Todd Mummert): wrote pig borg, uncrowned winner of the Build
	a Better Borg wars
J.Nelson (Jeff Nelson): author of Hydra, started the IBL
M.Noworolski (J. Mark Noworolski): wrote BRM client, hacked on INL server
S.Peltz (Steve Peltz): wrote tournament version of Empire
J.Pirnie (Jamie Pirnie): revived Netrek home page and maintainer of factoryx servers.
J.Poskanzer (Jef Poskanzer): co-author of Conquest for VAX/VMS
K.Powell (Keven R. Powell): author of COW-lite client
S.Sheldon (Steve Sheldon): author of RomaBerkMoo client
D.Teo (David Teo): wrote gfborg
N.Trown (Nick Trown): developed guzzler server sources, wrote RSA utilities,
	maintained RSA key list, maintained vanilla distribution, maintains US 
	metaserver
D.Tsang (Donald Tsang): created sturgeon-style server
S.Silvey (Scott Silvey): Netrek co-author (added plasmas, different ship
	types, tractor beams, etc)
K.Smith (Kevin Smith): Netrek co-author (changed to client/server, added X11
	and GL support, ranks/DI, tmode)
B.Verser (Brick A. Verser): worked on KSU Chaos server, ran the INL server
	for early league games
S.Warner (Slias Warner): co-author of original Empire
R.Weinstein (Rick Weinstein): wrote Moo client, eventually renamed it to
	ricksmoo to avoid confusion with rabbit-ear moo
H.Wengler (Heiko Wengler): wrote SHORT_PACKETS mods
J.Wu (Jiang Wu): co-author of NDB and first Mac client
D.Yee (Danny Yee): founded ANL (Australian Netrek League)
J.Young (Joseph F. Young): worked on KSU servers
</pre>
<hr>
<address>fadden@amdahl.com</address>


<?php
echo "</div>\n";
echo getFooter();
?>
