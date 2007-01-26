<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Each file should set $pagetitle
// 2) Uncomment the Sidebars that are required for this page
// 3) The Header, Menu and Footer must remain untouched
// 4) Add your page content

require 'nhp.php';

doNhpHeader();

echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo '</div><div id="content">';


echo '<h1>Netrek Glossary</h1>';


$fd = fopen (NPH_LOC_FILEROOT."glossary.dat", "r");
while (!feof ($fd))
{
	$buffer = trim(fgets($fd, 4096));

	// Ignore comments, empty lines and lines without ':'
	if ( substr( $buffer, 0, 1 ) != "#" &&
		substr( $buffer, 0, 1 ) != "" &&
		strstr( $buffer, ':' ) )
	{
		$lines[] = $buffer;
	}
}
fclose( $fd );

sort( $lines );

foreach( $lines as $entry )
{
	$delimeter = strpos( $entry, ':' );
	$term = substr( $entry, 0, $delimeter );
	$definition = substr( $entry, $delimeter + 1);
	$definition = trim($definition);

	echo "<p><h2>$term</h2>\n$definition\n";

}



echo '</div>';
echo getFooter();
?>
