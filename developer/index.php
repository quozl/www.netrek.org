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

//echo getSidebarDownload();
//echo getSidebarNews();
echo getSidebarHints();
//echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";
?>


<h1>Netrek Software Development</h1>
<p>
Netrek software is the result of several years of
contributions made by many individuals. If you are interested in
helping with continued growth and development of Netrek software, look
below for important development resources. If a specific client or
server software is not listed below, chances are that it is currently
not maintained.
</p>

<p>
<h2>Cool Stuff</h2>
<ul>
	<li><a href="multiple-roles-multiple-teams.pdf">Multiple Roles,
	Multiple Teams, Dynamic Environment: Autonomous Netrek Agents</a><br />
	This is a paper written by Marcus Huber and Tedd Hadley
	on AI agents. It was published in ACM's &quot;Proceedings of the First
	International Conference on Autonomous Agents, 1997,&quot; pages
	332-339. The article is <a
 	href="http://www.acm.org/pubs/citations/proceedings/ai/267658/p332-huber/">available</a>
 	from the <a href="http://www.acm.org/dl/">ACM Digital Library</a> if
	you are a subscribed ACM member (or you can simply use
	<a href="http://citeseer.ist.psu.edu/27115.html">CiteSeer</a>).</li>
</ul>
</p>

<p>
<h2>General</h2>
<ul>
	<li><a href="../downloads/">Netrek Software</a><br />
	You can download the various client and server source code here.</li>

	<li><a href="http://www.inl.org/netrek/netrekFOCS.html">Netrek
	Frequently Offered Clever Suggestions (FOCS)</a><br />
	The same ideas get proposed over and over by people
	trying to enhance Netrek, and the same discussions come up again and
	again. The FOCS is an attempt to stem the flow by presenting old
	discussions and arguments against the ideas.</li>

	<li><a href="../about/history_overall.php">Netrek History</a><br />
	Some documents written mostly by Andy McFadden on the evolution of Netrek.</li>

	<li><a href="http://www.inl.org/netrek/design.html">Netrek
	Game Design</a><br />
	Document describing the major Netrek design changes over the years.</li>

	<li><a href="http://www.shadowhunter.org/jch/server-secrets.txt">Netrek
	Server Secrets</a><br />
	(a bit outdated, but interesting). An archive of little known facts, bugs or features
	of servers from yesteryear.</li>
</ul>
</p>

<p>
<h2>Server Development</h2>
<ul>
	<li><a href="http://archives.real-time.com/mailman/listinfo/vanilla-list">Vanilla
	Server Mailinglist</a><br />
	This is the dedicated mailing list of the Vanilla server developers.
	To join, send a blank message to <a
	href="mailto:vanilla-list-subscribe@us.netrek.org">vanilla-list-subscribe@us.netrek.org</a>.
	You can reach the list at <a href="mailto:vanilla-list@us.netrek.org">vanilla-list@us.netrek.org</a>.
	To view past messages, browse the <a href="http://archives.real-time.com/pipermail/vanilla-list/">archive</a>.
	</li>

	<li><a href="http://vanilla.us.netrek.org/">Vanilla Server
	Development</a><br />
	The Vanilla Server is currently the only Netrek server
	software that is being actively developed.
	The source is available via FTP and anonymous CVS from
	:pserver:netrek@cvs.us.netrek.org:/home/netrek/cvsroot (password
	'netrek') under the module 'Vanilla'. The current server maintainer is
	<a href="mailto:cameron@stl.dec.com">James Cameron</a>.
	</li>
</ul>
</p>

<p>
<h2>Client Development</h2>
The links below point to active development resources
for several client software that are currently under development. For
anonymous CVS access, use the userid 'netrek' and the password 'netrek'.
<ul>
	<li>
	<a href="http://archives.real-time.com/mailman/listinfo/vanilla-clients/">Netrek
	Client Developer Mailing List</a><br />
	There is a mailing list for the general discussion of
	the various Netrek clients including COW, BRMH, Paradise, TedTurner,
	NetrekXP, etc. To subscribe to this list, send an empty message to <a
	href="mailto:vanilla-clients-subscribe@us.netrek.org">vanilla-clients-subscribe@us.netrek.org</a>.
	You can reach the list at <a
	href="mailto:vanilla-clients@us.netrek.org">vanilla-clients@us.netrek.org</a>. To view past
	messages, browse the <a href="http://archives.real-time.com/pipermail/vanilla-clients/">archive</a>.
	</li>

	<li>
	<a href="http://www.netrek.org/cow/">COW (Client of Win)</a>,
	maintainer: <a href="mailto:007@netrek.org">Kurt Siegl</a><br />
	COW is a popular client with support for 256 full color
	pixmaps. The source is available via FTP and anonymous CVS, and
	development efforts are discussed on the Netrek Client Developer
	Mailing List (above).
	</li>

	<li>
	<a href="http://netrek.keyos.org/">Netrek XP Mod Project</a>,
	maintainer: <a href="mailto:keyos@keyos.org">Stas Pirogov</a><br />
	This is currently the most recent and actively developed client. It is focussed
	entirely on the windows platform though. It is based on Steve Sheldon's
	old Netrek:1999 client.
	</li>

	<li>
	<a href="http://www.speakeasy.org/~xyzzy/netrek/">Paradise 2000</a>,
	maintainer: <a href="mailto:xyzzy@speakeasy.org">Trent Piepho</a><br />
	This is an enhanced version of the Paradise client for Linux. It features
	stereo sound effects and a number of new features not found in other clients.
	</li>

	<li>TedTurner (Paradise) client,
	maintainer: <a href="mailto:ahn@netrek.org">Dave Ahn</a><br />
	The TedTurner client is the latest incarnation of the
	Paradise client with 256 color pixmap support. TedTurner development is also
	discussed on the <a href="mailto:paradise-workers@goof.com">Paradise
	Workers Group</a> mailing list. The source is available via FTP and
	anonymous CVS from :pserver:netrek@ftp.netrek.org:/home/cvs under the
	module 'TedTurner'.
	</li>

	<li>
	<a href="http://www.dtek.chalmers.se/~matso/nttng/">Netrek: The
	Next Generation</a>, maintainer:
	<a href="mailto:matso@dtek.chalmers.se">Mats Olsson</a><br />
	NT:TNG is a complete rewrite of Netrek, done in Java. It has a
	dedicated mailing list at <a href="mailto:nttng@dtek.chalmers.se">nttng@dtek.chalmers.se</a>.
	Detailed info is available at the web site.
	</li>
</ul>
</p>


<?
echo "</div>\n";
echo getFooter();
?>
