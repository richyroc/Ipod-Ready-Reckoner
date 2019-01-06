#!/usr/dist/bin/php
<?php

echo '<html>';

echo '<head>' ;

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo '<title>Digital Recall</title>
</head>';

echo '<body><link href="testcss.css" rel="stylesheet" type="text/css"/>';

echo '<div class="container">';
echo '<div class="header">';
    echo '<p>';
	echo '<a href="http://www.wwe.com"> <img alt="home" src="recall.jpg" width="384" height="120">';
	
    echo '<p>';
    
      
     echo' <br>';
    echo '</p>';

echo '</div>';
echo '<div class="sidebar1">';
    echo '<ul class="nav">';
    echo '<div id="navbar2">' ;
  echo '<ul>' ;
        echo '<li><a href="../mynewipod/ipodnew.php">Link A</a></li>';
        echo '<li><a href="#">Link B</a></li>';
		 
        echo '<li><a href="#">Link C</a></li>';
		
        echo '<li><a href="#">Link D</a></li>';
		 
        echo '<li><a href="#">Link E</a></li>';
  echo '</ul>'; 
echo '</div>'; 
    
    
echo '<div id="navbar">';

  echo '<ul>';
echo '<a href="http://www.facebook.com/pages/Digital-Recall/114688781956521">';
echo '<ul>';
  echo '<img alt="facebook" src="facebooklogo.png" width="63" height="54"">  <a href="http://www.facebook.com/pages/Digital-Recall/114688781956521">';
  echo '<ul>'; 
echo '<img alt="facebook" src="facebooklogo.png" width="63" height="54"">  <a href="http://www.facebook.com/pages/Digital-Recall/114688781956521">';
echo '<br>' ; echo '<img alt="facebook" src="facebooklogo.png" width="63" height="54"">  <a href="http://www.facebook.com/pages/Digital-Recall/114688781956521">';
  
       
echo '</ul>'; 
echo '</div>'; 
      
    echo '</div>';
  echo '<div class="content">';
    echo '<h1>Instructions</h1>';
	echo '<div id="xml"';
				echo '<em>Get the latest gossip on your future ipod here!! This news section is updated as soon as we get new info from our good friends at the app store!!</em>';
				echo '</div>';
			echo '</h2>';
			echo '<p>';

if( ! ($fp = fopen( "bios.xml" , "r" )) )//links xml file
  die("Couldn't open xml file!");//gives error message just in case
$bio_counter = 0;
$bio_data = array();//makes content from our xml file active and available
$xml_current_tag_state = '';
function startElementHandler( $parser, $element_name, $element_attribs )
{
  global $bio_counter;
  global $bio_data;
  global $xml_current_tag_state;
  if( $element_name == "BIO" )
  {
    $bio_data[$bio_counter]["author"] = $element_attribs["AUTHOR"];
  }
  else
  {
    $xml_current_tag_state = $element_name;
  }
}
function endElementHandler( $parser, $element_name )
{
  global $bio_counter;
  global $bio_data;
  global $xml_current_tag_state;
  $xml_current_tag_state = '';
  if( $element_name == "BIO" )
  {
    $bio_counter++;
  }
}
function characterDataHandler( $parser , $data )
{
  global $bio_counter;
  global $bio_data;
  global $xml_current_tag_state;
  if( $xml_current_tag_state == '' )
    return;
if( $xml_current_tag_state == "NAME" ) {//lets parser know which files to load in this case the title extension
    $bio_data[$bio_counter]["name"] = $data;
  }	
	
  if( $xml_current_tag_state == "INFO" ) {
    $bio_data[$bio_counter]["info"] = $data;
  }
  if( $xml_current_tag_state == "NEWS" ) {
    $bio_data[$bio_counter]["news"] = $data;
  }
  if( $xml_current_tag_state == "LOWDOWN" ) {
    $bio_data[$bio_counter]["lowdown"] = $data;

  }
}
if( !($xml_parser = xml_parser_create()) )
  die("Couldn't create XML parser!");//error message if needed

xml_set_element_handler($xml_parser, "startElementHandler", "endElementHandler");
xml_set_character_data_handler($xml_parser, "characterDataHandler");
while( $data = fread($fp, 4092) )
{
  if( !xml_parse($xml_parser, $data, feof($fp)) )
  {
    break; // get out of while loop if we're done with the file
  }
}


xml_parser_free($xml_parser);



$currentTitle = $bio_data[$i]["name"];




$lenghtOfArray = count($bio_data);


for( $i=0 ; $i < $lenghtOfArray ; ++$i )
{
$currentTitle = $bio_data[$i]["name"];


echo "<a href='Untitled-3.php?chosenipod=";//prints out user selected bio
echo $currentname;
echo "'>"; //closes opened php tag
echo $currentname;
echo "</a><br>";
$whichbio = $_GET["whichbio"];
echo $whichbio; 


$chosenbio = $_GET["chosenbio"]; 
echo $whichbio;


}


$thisPos = 0;
$lenghtOfArray = count($bio_data);

for( $i=0 ; $i < $lenghtOfArray ; ++$i )
{
$thisname = $bio_data[$i]["title"];

if ($thisname == $chosenbio) {//mathes request ipod to exact poisiton in xml file

$thisPos = $i;



}//end of IF

}//end of FOR LOOP

echo "<div id='xml'>";

echo "<br><em><strong>What's your name?: </em></strong>";//written question
echo $bio_data[$thisPos]["name"]; //prints out based on written content in xml file 

echo"<br>";

echo "<br><em><strong>Whats new with it, Apple?:</em> </strong>";
echo $bio_data[$thisPos]["news"];
echo "<br>";

echo "<br><em><strong>Gimme the lowdown!!: </strong></em>";
echo $bio_data[$thisPos]["lowdown"]; 

echo"<br>";

echo "<br><strong>WOW FACTOR: </strong>";
echo $bio_data[$thisPos]["info"]; 
echo "</div>";






echo '<br>';
echo '<br>';


		echo '</div>';
		echo '</div>';
        

echo '<div id="footer">';


    echo '<p>';
	echo '</p>';
  echo '<div id="vimeo"> <br> ';
  
 
echo '</body>';
echo '</html>';
