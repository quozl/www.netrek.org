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

echo getSidebarDownload();
echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>

<h1>Netrek: het Internet als Nintendo</h1>
<img src="logo_unixinfo.png" align="right" width="278" height="57" alt="">

<p>
<i>(<a href="http://net.info.nl/ui/0694/netrek.html">Original
article</a> published in the dutch UNIX-Info magazine)</i>
</p>

<p>
Het Internet wordt niet slechts ingezet voor serieuze
doeleinden. Minder achtenswaardige activiteiten als het spelen
van spelletjes via het Internet mogen zich verheugen op een snel
stijgende populariteit.
</p>

<p> 
Stel je voor: in de ruimte verdedig en verover je planeten samen
met je 7 teamgenoten verspreid over het Europese continent,
spelend tegen een 8 koppig Amerikaans team. Je schiet real-time
in een cruiser een Amerikaan overhoop met photon torpedoes en een
goed gerichte phaser. Zijn ruimteschip veranderd voor je ogen tot
ruimtestof. Door de schade die tijdens het gevecht is opgelopen
kun je nog slechts met een snelheid van warp 2 vliegen. Een
repair planet is nergens te bekennen, maar gelukkig is de
starbase van jouw team in de buurt, zodat de opgelopen schade
aldaar hersteld kan worden. Fictie, of een aflevering van
StarTrek? Geen van beiden. Welkom in de wereld van Netrek.
Netrek is het eerste spel op het Internet dat het uiterste vergt
van het reactievermogen. Snelle reflexen en anticipatievermogen
gecombineerd met strategisch inzicht en teamwork zijn
onontbeerlijk. Het unieke van Netrek is dat het een client-server
georienteerd spel is. Met behulp van een client kun je een
connectie maken met een van de tientallen Netrek-servers
verspreid over de hele wereld en direkt meespelen. De client is
een grafisch georienteerde interface en wordt bestuurd met zowel
de muis als het toetsenbord. Er zijn clients voor vrijwel alle
gangbare Unix-systemen, maar ook voor bijvoorbeeld MS-DOS
compatibles, Amiga of Macintosh. Op ieder moment van de dag
wordt er Netrek gespeeld, over de hele wereld zijn er naar
schatting zo'n 1500 actieve spelers, en dit aantal groeit snel.
Het is zeker niet eenvoudig om de beginselen van Netrek onder de
knie te krijgen. Toch is het spelidee vrij eenvoudig. Ieder team
beschikt over 10 planeten aan het begin van het spel. Het is de
bedoeling om zoveel mogelijk planeten van de tegenstander te
veroveren. Aangezien er op planeten legers ontstaan die nodig
zijn voor de verovering van een planeet, kan de tegenstander
flink in de tang worden genomen.
</p>

<p>
Er bestaan vier rassen: de Federation, de Romulans, de Klingons
en de Orions, die ieder een eigen kleur hebben. Ieder ras heeft
een even groot territorium als het spel begint. Er spelen altijd
slechts 2 rassen tegenelkaar. Er kunnen maximaal 16 mensen
tegelijk meespelen, dus 8 per ras. Er bestaan verschillende
typen ruimteschepen waar de speler uit kan kiezen als hij het
spel betreed. Het aantal levens dat je krijgt is oneindig; als
je doodgaat krijg je ogenblikkelijk een nieuw schip. Vijandelijke
planeten kunnen worden veroverd door armies (legers) op te pikken
met je schip en te droppen op de te veroveren planeet. Als alles
goed gaat zal de planeet in het bezit van jouw team komen.
</p>

<p>
Voordat je legers mag vervoeren, moet je echter minstens een maar
liefst twee tegenstander hebben uitgeschakeld zonder daarbij
zelf te zijn uitgeschakeld. De tegenstander zal alles proberen om
te voorkomen dat je de kans krijgt om een planeet te veroveren.
Allereerst zullen je eigen planeten constant gebombardeerd worden
door een lid van het vijandelijke team, waardoor legers schaars
zijn. Ten tweede zullen er kamikaze-aanvallen op je worden
uitgevoerd zodra de vijand vermoed dat je legers bij je hebt met
als doel jou en je legers uit te schakelen. Lukt het je niettemin
om heelhuids een vijandelijke planeet te bereiken, dan zal de
vijand je in het slechtste geval opwachten en met aan flarden
schieten. Er is een onmisbaar hulpmiddel om het veroveren van een
planeet ietsje te vergemakkelijken, en dat is de mogelijkheid om
te cloaken, ofwel jezelf onzichtbaar te maken. Je blijft echter
wel zichtbaar op de galactical map (de radar).
Het spel kent behalve deze schets nog vele andere facetten en een
heel eigen taalgebruik. Van tijd tot tijd kan het er grof aan
toegaan.
</p>

<h2>Meespelen en informatie</h2>
<p>
Om mee te spelen is allereerst een client nodig. Erg populair is
de Paradise client. Vervolgens kun je contact maken met de
Metaserver, waarop bijgehouden wordt op welke servers gespeeld
wordt en met hoeveel spelers. Verbinding maken met een Netrek
server doe je met<br>
<tt>netrek -h een.netrek.host -p nr</tt><br>
waarbij achter -h de hostname komt, en achter -p het poortnummer.
Ben je een nieuwe speler, dan moet je een naam en paswoord
verzinnen. De beginnende speler doet er verstandig aan om de
mededelingen in het welkomstscherm te lezen. Hier staat vaak
uitgelegd hoe met medespelers gecommuniceerd kan worden, wat tips
voor beginnende spelers, en meer uitgebreide beschrijvingen over
schiptypes en de werking van de ranking. Netrek heeft een eigen
nieuwsgroep, rec.games.netrek, alwaar vragen kunnen worden
gesteld. Verder bestaan er vele Netrek WWW-pagina's met daarin
informatie over de geschiedenis van Netrek, beschrijvingen van
legendarische spelers als MUCUS PIG (door velen beschouwd als de
beste speler ter wereld), uitgebreide besprekingen van taktische
concepten, enorme scheldpartijen en veel meer.
</p>

<p>
De <a href="internet_als_nintendo.png">screenshots</a> met
spelsituaties zijn afkomstig van wormhole.ecst.csuchico.edu.
<p>

<p>
Ferry van het Groenewoud
</p>

<?php
echo "</div>\n";
echo getFooter();
?>
