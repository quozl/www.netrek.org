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

<h1>Public Netrek Servers, through Jan 1 1994</h1>
<p>
This is an attempt to list some basic information about EVERY public Netrek
server that ever was.  My goal is to list the people who set them up and
get a rough idea of when the servers were running.
</p>

<p>
Sometimes Netrek servers go through several names.  When possible, all of
the names are listed, in reverse chronological order.  In any event, they're
sorted by the most recent name.
</p>

<p>
Sometimes the same host will have more than one server running at once,
or will alternate different days of the week.  This is not dealt with in
a very clean way.  Also, sometimes the people who set up the servers leave
and somebody else takes over maintenance, but I'm not going to try to
track those.
</p>

<p>
The dates for most of these are based on the earliest appearance of the
server in Tom Holub's server FAQ posting (thanks go to Sam Shen and Neil
Cook for sending me about half a dozen each; Sam gets the prize for the
earliest known FAQ posting).  The earliest date that the server is listed
on an FAQ sheet was used as the server inception date; similarly, the first
date that the server is listed as "down" is used as the retirement date.
Since I don't think I have the complete collection, these dates may be off
by a few months, but they're at least somewhat accurate.
</p>

<p>
I'm not going to try to list private or temporary servers (for INL or clue
games); this is mainly for "pickup" game servers.  A reasonable criteria
for recent servers is that they have to have been advertised on the
metaserver.  I've included some extra notes when I think they're
interesting or they'll help people remember a server.
</p>


<p>
Categories for Netrek servers are:
<ul>
<li>
	[B]ronco - the original; includes scam, bronco, guzzler, calvin,
		and many others.
<li>

	[C]haos - bronco with mods; wrap-around walls, Galaxy ships,
		ping-pong plasmas.  KSU Chaos refers to a particular variety.
<li>
	[S]turgeon - sturgeon-style upgrade server; loosely fits any server
		where upgrades are a central component.
<li>
	[H]ockey - Netrek hockey; may also include Netrek soccer.
<li>
	[P]aradise - paradise-style; any variant of Paradise fits here.
<li>
	[I]NL - INL-style server; a public server with INL features.
<li>
	[?]other - special server

</ul>


"now" in the When column refers to Jan 1 1994.
</p>

<p>
<pre>
Cat Server-name				When
--- -----------------------------------	-------------------

[P] aedile.icaen.uiowa.edu		1993 - now
	Set up by Mike Lutz

[C] aleph.cis.ksu.edu			Spring 1992 - Summer 1993
[C] hilbert.math.ksu.edu		Sep 1991 - Spring 1992
[C] depot.cis.ksu.edu			1991? - Sep 1991
	Set up by ??

[B] alia.cs.umn.edu			Jul 1992 - Nov 1992
	Set up by ??

[B] auk.warp.cs.cmu.edu			1991? - Nov 1992
	Set up by Todd Mummert
	First experiment with invitation-only servers

[B] b62150.student.cwru.edu		Nov 1992 - Oct 1993
	Set up by Michael C Neuman
	Primarly for borgs and robots
	Promotions done by vote

[B] bayes.ibr.cs.tu-bs.de		Feb 1992 - now
	Set up by Uwe Schreiweis

[B] bete.mit.edu			1993 - Oct 1993
[I] bete.mit.edu			1993 - Oct 1993
	Set up by Mark H. Levine
	First public (metaserver-listed) INL server.

[B] bezier.berkeley.edu			1991? - Nov 1992
	Set up by Scott Drellishak
	Featured anti-"stupid ogging" mods

[B] bigbang.astro.indiana.edu		June 1993 - now
	Set up by Jim Pitts

[C] bookend.design.iastate.edu		Nov 1992 - Summer 1993
	Set up by Rony Muliana, with some work by Adrian Penn

[B] borg.plan9.cs.su.oz.au		Dec 1992 - Dec 1993
[B] orthanc.cs.su.oz.au			1991? - Dec 1992
	Set up by Maurice Pagnucco (+ others?)
	Older than deakin, but never advertised

[B] borkum.informatik.uni-rostock.de	Jul 1992 - Oct 1993
	Set up by ??

[B] bronco.ece.cmu.edu			Oct 1990 - now
	Set up by Terence Chang
	Most popular server for years

[B] calvin.usc.edu			Nov 1991 - now
	Set up by Dan King, w/help from Daryll Strauss
	Widely known for horrific lag
	Originally had zero-delay uncloaking

[B] cups.gmu.edu			Summer 1993 - Nov 1993
	Set up by Carter T. Shock

[B] deakin.anu.edu.au			Jul 1992 - Nov 1992
	Set up by James Ashton
	First public Netrek server in Australia

[B] diamant.informatik.uni-oldenburg.de	Nov 1992 - Summer 1993
	Set up by ??

[B] dmsun1.bath.ac.uk			Summer 1993 - 1993
	Set up by stuartw@ee.bath.ac.uk (Moonstone)

[C] doorstop.design.iastate.edu		Summer 1992 - Nov 1992
[B] doorstop.design.iastate.edu		Nov 1992 - Oct 1993
	Set up by Rony Muliana
	Got its name because the machine was being used for little else

[S] earth.esrg.ucsb.edu			Oct 1993 - now
[B] esrg.ucsb.edu			Mar 1992 - Sep 1993
	Set up by Terry Figel

[P] eelpout.micro.umn.edu		Nov 1993 - now
[P] shamu.micro.umn.edu			1993 - Nov 1993
	Set up by Michael McGrath

[B] eowyn.informatik.uni-oldenburg.de	1993? - now?
	Set up by ??

[B] explorer.ecn.purdue.edu		Dec 1992 - 1993
	Set up by Edwin Brown

[B] fb3-s1.math.tu-berlin.de		Feb 1993 - now
	Set up by Matthias Steffen

[B] fife.ecn.purdue.edu			Mar 1992 - now
	Set up by Brian D Hall
	A successor to king.ecn.purdue.edu??

[B] fisher.psy.vu.nl			Nov 1992 - now
	Set up by Rob van Leeuwen

[B] flint.cs.brown.edu			Jul 1992 - Feb 1993
	Set up by Eugene Santos Jr.
	Players could change server config by voting

[B] flubber.cc.utexas.edu		1991? - Aug 1991
	Set up by ??

[B] fysas.fys.ruu.nl			Aug 1991 - Nov 1991
	Set up by ??
	First public Netrek server in Europe
	First public Netrek server outside USA

[B] galilei.iesd.auc.dk			Nov 1991 - Mar 1992
	Set up by ??

[B] garnet.cdf.toronto.edu		Nov 1992 - now
[C] trillian.cdf.toronto.edu		Nov 1991 - Feb 1992
	Set up by Chris Chin
	First public Netrek server in Canada
	May have had other names too

[H] geo1s.mps.ohio-state.edu		Nov 1992 - Feb 1993
	Set up by Waheed Ansari
	Started out as a bronco-style server

[B] ghost.dsi.unimi.it			Jul 1992 - now
	Set up by Carlo Bolchini
	First public Netrek server in Italy

[B] grit.cs.utexas.edu			Jul 1992 - Jul 1992?
	Set up by ??
	Based on foghorn code

[B] wormhole.ecst.csuchico.edu		Dec 1993 - now
[B] netrek.ecst.csuchico.edu		Nov 1993 - Dec 1993
[B] guzzler.ecst.csuchico.edu		Nov 1992 - Nov 1993
	Set up by Nick Trown
	First server with clue-checking

[B] harvey.cs.umd.edu			Nov 1991 - now
	Set up by Jerry Wieber
	Brief hiatus around Feb 1992

[H] hockey.ksu.edu			Nov 1992 - now
	Set up by Brick A. Verser
	First full-time Netrek Hockey server

[B] hpserv.math.tamu.edu		Jan 1992 - Jul 1992
	Set up by ??

[B] iacrs2.unibe.ch			Feb 1992 - Oct 1993
	Set up by Martin Schuetz

[B] ib.sei.cmu.edu			Nov 1991 - Mar 1992
	Set up by ??
	Modified cloaking: complete invisibility but totally blind

[P] inconel.engr.wisc.edu		Feb 1993 - 1993
	Set up by chris@inconel?

[B] infant2.sphs.indiana.edu		Aug 1993 - now
	Set up by Jim Pitts

[B] iota42.mtek.chalmers.se		Jul 1992 - late 1993
	Set up by Lars Bernhardsson
	First public Netrek server in Sweden
	Became borg/test server in early 1993 when virsjloff started

[B] jupiter.cse.utoledo.edu		Feb 1993 - Nov 1993
	Set up by timuszyn@jupiter.cse.utoledo.edu?

[B] k9.cs.rose-hulman.edu		Feb 1992 - Mar 1992
	Set up by ??

[C] kensho.biosci.arizona.edu		Feb 1992? - Feb 1993
	Set up by Kevin Powell

[C] king.ecn.purdue.edu			Feb 1992 - Feb 1992
	Set up by ??

[C] laurel.cs.nyu.edu			Jan 1992 - Feb 1992
	Set up by ??

[B] lee.cecer.army.mil			Aug 1993 - Aug 1993
	Set up by (never mind)
	Shortest-lived public Netrek server (about two days)

[B] legend.cma.fr			Feb 1992 - now
[B] espace.cma.fr			Oct 1991 - Feb 1992
	Set up by Jean-Marc Tanzi

[B] lindt.aero.org			Nov 1991 - Mar 1992
	Set up by ??

[B] lrdc5.lrdc.pitt.edu			1991? - Nov 1991
	Set up by ??
	Previously on a different host?

[B] mango.ucs.indiana.edu		Nov 1991 - Nov 1991
	Set up by ??

[C] matt.ksu.ksu.edu			1989 - Jul 1992
	Set up by Brett McCoy

[B] midgard.umiacs.umd.edu              1993 - 1993
	Set up by Carter T Shock

[B] megalag.risc.uni-linz.ac.at		Sep 1993 - now
[B] melmac.risc.uni-linz.ac.at		Oct 1991 - Sep 1993
	Set up by Peter Pregler
	First public netrek server in Austria
	Not listed on FAQ until Feb '92 (9.6Kbps -> 64Kbps)

[B] miramar.cad.gatech.edu		Feb 1993 - 1993
	Set up by Noah White?

[C] needmore.cs.utexas.edu		Nov 1991 - Mar 1992
	Set up by ??

[B] netrek.atd.ucar.edu			Jul 1992 - Feb 1993
	Set up by Jonathan Corbet

[B] netrek.chemietechnik.uni-dortmund.de	Jul 1992 - now
	Set up by Heiko Wengler
	Longest hostname of any server

[P] netrek.cis.ufl.edu			Jun 1993? - now
	Set up by Robert H. Forsman

[S] netrek.cis.ksu.edu			Feb 1993 - Oct 1993
[C] netrek.cis.ksu.edu			Jul 1992 - Oct 1993
	Set up by Joseph F. Young
	Ran chaos and sturgeon servers on separate ports

[B] netrek.cs.bham.ac.uk		Summer 1992 - now
	Set up by Andy Willams
	First public Netrek server in U.K.

[B] netrek.cs.mcgill.ca			Jul 1992 - now
	Set up by Kent Tse

[S] netrek.icaen.uiowa.edu		Nov 1992 - now
	Set up by Mike Lutz

[C] netrek.math.ksu.edu			Nov 1991 - Mar 1992
	Set up by Brick A. Verser and Tim Ramsey?

[B] netrek.neosoft.com			Oct 1993 - now
	Set up by Karl Lehenbauer

[B] netrek.solace.mh.se			1993 - now
	Set up by ??

[B] netrek.uml.edu			1993 - now
[B] netrek.ulowell.edu			Nov 1992 - 1993
[B] romulus.ulowell.edu			1992 - Nov 1992
[B] bigmax.ulowell.edu			Jul 1992 - 1992
	Set up by Brian 'Doc' O'Neill
	Finally got an alias for it, and the domain name changed

[B] netrek.unh.edu			1993 - now
[P] paradise.unh.edu			1993 - now
[B] ghost.unh.edu			1992 - 1993
	Set up by Robert M. Kenney
	ghost is the actual machine; netrek and paradise are both aliases

[H] nova.ksu.ksu.edu			May 1992 - Sep 1992
	Set up by Brick A. Verser
	Hockey and INL servers were run concurrently in 1992

[B] orca.cosy.sbg.ac.at			1993? - now
[P] orca.cosy.sbg.ac.at			1993? - now
[B] flunder.cosy.sbg.ac.at		1992? - 1993?
	Set up by Peter Burgstaller

[B] panda.lpl.arizona.edu		Nov 1991 - May 1992
	Set up by Jeff Nelson

[B] panther.ecss.iastate.edu		Jul 1992 - Nov 1992
	Set up by ??

[P] paradise.cs.bham.ac.uk		1993 - 1993
	Set up by Andy Williams?

[B] peanuts.informatik.uni-tuebingen.de	Jan 1992 - Oct 1993
	Set up by ??

[C] priddy.cs.utexas.edu		Feb 1992 - Mar 1992
	Set up by ??

[P] ravel.theo-physik.uni-kiel.de	Nov 1993 - now
	Set up by Lutz Molgedey

[P] pippin.ee.usu.edu			Dec 1993 - now
[P] recumbent.declab.usu.edu		Jun 1993? - Dec 1993
[P] paradise.declab.usu.edu		Jan 1993 - Mar 1993
	Set up by Brandon Gillespie
	First Paradise server (hence the name)

[B] rwd4.mach.cs.cmu.edu		Apr 1991 - Feb 1993
	Set up by Randall Dean
	No-profanity server
	Borg/robot haven for quite some time

[B] scws9.harvard.edu			Nov 1991 - Jul 1992
	Set up by Robert Irie

[B] sequent.berkeley.edu		Spring 1986 - Summer 1991
	Set up by Kevin Smith and Scott Silvey
	First widely used Netrek server, anywhere

[B] sickdog.cs.berkeley.edu		Jun 1992? - now
[B] bigdog.cs.berkeley.edu		Jan 1992 - Aug 1992?
	Set up by Jack Hsu
	Featured a three-race galaxy
	Used for dogfight tournaments
	Short-lived Netrek soccer was here

[B] soc8.acpub.duke.edu			1992 - Feb 1992
	Set up by ??

[S] sturgeon.cs.washington.edu		Jul 1992 - Oct 1993
[B] sturgeon.cs.washington.edu		Feb 1992 - Nov 1992
[S] scrod.cs.washington.edu		Mar 1992 - Jul 1992
	Set up by Donald Tsang
	First upgrade server
	Both sturgeon-style and bronco-style servers here for a while
	Original was scrod (hence "scrod hacks"), but "sturgeon" stuck

[B] sylvester.cc.utexas.edu		1992? - 1992?
	Set up by ??

[B] tardis.cl.msu.edu			Feb 1993 - 1993
[B] discovery.cl.msu.edu		Jul 1992 - Feb 1993
[B] scss3.cl.msu.edu			Feb 1992 - Jul 1992
	Set up by ??
	No-profanity server?
	discovery was very popular, but players didn't follow when it
	    moved to tardis

[B] tbird.cc.iastate.edu		Feb 1992 - Nov 1992
	Set up by Michael Graff

[B] tolstoy.afit.af.mil			1993 - now
	Set up by Eugene Santos Jr.

[B] tramp.cc.utexas.edu			Sep 1992 - Dec 1992
[C] foghorn.cc.utexas.edu		Feb 1991 - Jun 1992
	Set up by Alex Kluge?
	Brief hiatus in Jan 1992

[B] u.ergo.cs.cmu.edu			1990? - 1990?
	Set up by Tim Freeman?

[B] uhura.fmi.uni-passau.de		Feb 1992 - Feb 1993
	Set up by ??

[B] ultrix.csc.usf.edu			Feb 1992 - Nov 1992
	Set up by ??

[B] virsjloff.cd.chalmers.se		Jan 1993? - now
	Set up by Lars Bernhardsson

[?] vlsi.ics.uci.edu			Aug 1992 - now
	Set up by Tedd Hadley
	Base practice server


I have the server lists released on:
	30-Aug-91
	15-Sep-91
	28-Sep-91
	08-Nov-91
	29-Nov-91
	04-Jan-92
	13-Feb-92
	05-Mar-92
	17-Jul-92
	27-Nov-92
	19-Feb-93
	10-Oct-93
</pre>
</p>


<?
echo "</div>\n";
echo getFooter();
?>
