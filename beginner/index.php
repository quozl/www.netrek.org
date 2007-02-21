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

<h1>Beginner Section</h1>
<p>
There are many good sources of information on Netrek.
Various FAQs, help files, and guides are available to help Netrek
players of all skill levels. If you are new to Netrek and want to get
started, begin here. If after reading through these materials you
still have questions, <a href="../people/">contact the Netrek
community</a> for further help!
</p>

Are you a new player? Follow these simple steps to get started with
Netrek!
<ol>
<li>
	<a href="../downloads/clients/">Download</a> and install a client
	for your platform. If you are a Windows user, download
	<a href="../downloads/clients/NetrekXP4403_installer.exe">Netrek
	XP Mod</a>.
</li>

<li>
	Read the <a href="newbie.php">Netrek Newbie Manual</a>.
</li>

<li>
	Start your client and select a server to play on from the list.
	Good choices are <tt>continuum.us.netrek.org</tt> and
	<tt>pickled.psychosis.net</tt>.
</li>

<li>
	Go doosh some twinks!
</li>
</ol>

<h2>Getting Started</h2>
<ul>
	<li>
	<a href="newbie.php">Netrek Newbie Manual</a><br />
	A guide for the Newbie Netrek player.
	</li>

	<li>
	<a href="http://cha.rlie.nl/dfmanual/">Charlie's Beginner's Guide to Dogfighting</a><br />
	A very good readable guide on the do's and dont's of dogfighting.
	</li>

	<li>
	<a href="../glossary.php">Netrek Glossary</a><br />
	This is a list of all the terms and abbreviations used in the game of Netrek.
	Very helpful if you try to find out what everyone is sending to the team message board!
	</li>
</ul>

<h2>Getting Clued</h2>
Want to get clued? Here are some great resources on how
to get better at Netrek game play.

<ul>
<!--	<li>
	<a href="http://www.netrek.org/tychay/">Netrek Clue
	Archive</a><br />
	Terry Chay and Vincent Louie began overhauling the
	JCH archives (see below) to provide one location for the collection of
	hints and help files covering just about every aspect of Netrek play.
	Guides written by veteran players can help you improve your skills and
	clue level. This is a great starting point for beginners and
	intermediate players. Note: this site is still under construction.
	</li>-->

	<li>
	<b>Observing other players</b><br >
	In Netrek you can learn a lot by simply observing other good players!
	Connect to the observer port 2593 or simply right-click on the meta-server
	list at client startup.
	</li>

	<li>
	<a href="dantesdogfightguide.php">Dantes Dogfight Guide</a><br />
	Basics, Mechanics and strategy are all covered.
	</li>

	<li>
	<a href="kiaclueguide.php">KIA's Clue Guide</a><br />
	Valuable advise from Jan Sandorf, one of Europe's best players. A good
	read for the novice player, covering all basic situations in Netrek.
	</li>

	<li>
	<a href="redshirtguides/">Red
	Shirt's Guides to Netrek</a><br />
	Bert Enderton's resourceful guides on playing Netrek.
	</li>

	<li>
	<a href="http://www.shadowhunter.org/clue/">Get a Clue!
	Archive</a><br />
	Quote: &quot;Clue is the word that Netrek players
	use to indicate how much understanding one has of the game. Players
	that know what to do in different situations are considered cluefull,
	players that fool around are often called clueless twinks. These pages
	contain articles and notes that might help you to raise your
	clue-level. &quot;
	</li>

	<li>
	<a href="../cinema2/takefile/">The
	Netrek Take File</a> (mirror <a
	href="http://www.shadowhunter.org/takefile/">here</a>)<br />
	This site has a number of animated GIFs that show how to improve one's play.
	Quoted from the page, &quot;This page is provided for all those people
	who want some examples of Netrek play to discuss. Whether the plays are
	largely good or bad is irrelevant. The examples are not presented as
	templates to follow during play, instead they may be considered by
	players wishing to look in more detail at the way team strategies work
	(or don't) in the heat of battle. Alternatively this may be a useful
	resource for getting on a learning curve.&quot;
	</li>

	<li>
	<a href="http://www.shadowhunter.org/jch/README.html">JCH's
	Netrek Information Archive</a><br />
	This archive, although a bit old, contains a lot of info on Netrek.
	</li>

	<li>
	<a href="../clueguides/">Netrek Nexus Clue Guides</a><br />
	In-depth guides covering almost any aspect of Netrek tactics and
	strategies. Strongly advised to the more experienced player. And of
	course required reading if you play in one of the professional Leagues.
	</li>

	<li>
	<a href="http://www.continuum.us.netrek.org/">Netrek Continuum</a><br />
	Big collection of netrek stuff.
	</li>
</ul>

<h2>Advanced Netrek</h2>
Think you rewl? Yeah, whatever! Clue games are usually
reserved for players who have logged hundreds of hours in
&quot;pickup&quot; Netrek. If you've never played on a clue game, you
should join as an observer first to become familiarized with real
teamwork and gameplay.

<ul>
	<li>
	<a href="../leagues/">Netrek Leagues</a><br />
	There are several organized Netrek Leagues where
	best players from all over the world form teams to play each other.
	Find out more about the different leagues here.
	</li>

	<li>
	<a href="http://archives.real-time.com/mailman/listinfo/vanilla-clue-pickup">Clue-pickup
	Mailing List</a><br />
	If you want to play on league-style
	clued games, join this mailing list. Various teams announce clued games
	open to players during the league seasons. To subscribe to the list,
	send a message to <a
	href="mailto:vanilla-clue-pickup-subscribe@us.netrek.org">vanilla-clue-pickup-subscribe@us.netrek.org</a>.
	You can browse past messages in the
	<a href="http://archives.real-time.com/pipermail/vanilla-clue-pickup/">Archive</a>. 
	</li>
</ul>

<?
echo "</div>\n";
echo getFooter();
?>
