#!/usr/dist/bin/php
<?php
echo '<head>';


echo '<title>latest news from apple!!</title>';


echo '<link href="test.css" rel="stylesheet" type="text/css" />'; // linking the css stylesheet to the php page
echo '</head>';
echo '<body>';









echo '<div id ="page margin">';

echo '<div id = "header">';
 echo '</div id= "header">';




echo '<div id="navigation2">';
		echo '<ul>';
			
			echo '<li><a href="home.html">Core</a></li>';
		
            echo '<li><a href="quiz.html">let apple help you select your new ipod!!</a></li>';
            
          //displays our links to our two other pages
		echo '</ul>';
	echo '</div>';
	

echo '<div id="content">'; 

		echo '<h2>';
		echo '<div id="xml"';
				echo '<em>Get the latest gossip on your future ipod here!! This news section is updated as soon as we get new info from our good friends at the app store!!</em>';
				echo '</div>';
			echo '</h2>';
			echo '<p>';
		echo ' <div id="xml">';	//links corresponding css file	
if( ! ($fp = fopen( "xml_files/ipods.xml" , "r" )) )//links xml file
  die("Couldn't open xml file!");//gives error message just in case
$ipod_counter = 0;
$ipod_data = array();//makes content from our xml file active and available
$xml_current_tag_state = '';
function startElementHandler( $parser, $element_name, $element_attribs )
{
  global $ipod_counter;
  global $ipod_data;
  global $xml_current_tag_state;
  if( $element_name == "IPOD" )
  {
    $ipod_data[$ipod_counter]["author"] = $element_attribs["AUTHOR"];
  }
  else
  {
    $xml_current_tag_state = $element_name;
  }
}
function endElementHandler( $parser, $element_name )
{
  global $ipod_counter;
  global $ipod_data;
  global $xml_current_tag_state;
  $xml_current_tag_state = '';
  if( $element_name == "IPOD" )
  {
    $ipod_counter++;
  }
}
function characterDataHandler( $parser , $data )
{
  global $ipod_counter;
  global $ipod_data;
  global $xml_current_tag_state;
  if( $xml_current_tag_state == '' )
    return;
if( $xml_current_tag_state == "TITLE" ) {//lets parser know which files to load in this case the title extension
    $ipod_data[$ipod_counter]["title"] = $data;
  }	
	
  if( $xml_current_tag_state == "WOW" ) {
    $ipod_data[$ipod_counter]["wow"] = $data;
  }
  if( $xml_current_tag_state == "NEWS" ) {
    $ipod_data[$ipod_counter]["news"] = $data;
  }
  if( $xml_current_tag_state == "LOWDOWN" ) {
    $ipod_data[$ipod_counter]["lowdown"] = $data;

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



$currentTitle = $ipod_data[$i]["title"];




$lenghtOfArray = count($ipod_data);


for( $i=0 ; $i < $lenghtOfArray ; ++$i )
{
$currentTitle = $ipod_data[$i]["title"];


echo "<a href='ipodnew.php?chosenipod=";//prints out user selected ipod
echo $currentTitle;
echo "'>"; //closes opened php tag
echo $currentTitle;
echo "</a><br>";
$whichipod = $_GET["whichipod"];
echo $whichipod; 


$chosenipod = $_GET["chosenipod"]; 
echo $whichipod;


}


$thisPos = 0;
$lenghtOfArray = count($ipod_data);

for( $i=0 ; $i < $lenghtOfArray ; ++$i )
{
$thisName = $ipod_data[$i]["title"];

if ($thisName == $chosenipod) {//mathes request ipod to exact poisiton in xml file

$thisPos = $i;



}//end of IF

}//end of FOR LOOP

echo "<div id='xml'>";

echo "<br><em><strong>What's it called?: </em></strong>";//written question
echo $ipod_data[$thisPos]["title"]; //prints out based on written content in xml file 

echo"<br>";

echo "<br><em><strong>Whats new with it, Apple?:</em> </strong>";
echo $ipod_data[$thisPos]["news"];
echo "<br>";

echo "<br><em><strong>Gimme the lowdown!!: </strong></em>";
echo $ipod_data[$thisPos]["lowdown"]; 

echo"<br>";

echo "<br><strong>WOW FACTOR: </strong>";
echo $ipod_data[$thisPos]["wow"]; 
echo "</div>";






echo '<br>';
echo '<br>';


		echo '</div>';
		echo '</div>';
        

echo '<div id="footer">';













            
		echo '</div>';
echo '</div>';
echo '</body>';

echo '</div>';
?>
