#!/usr/dist/bin/php
<?php
echo '<head>';


echo '<title>Wow! Look at your new ipod!!</title>';




echo '<link href="test.css" rel="stylesheet" type="text/css" />';//linking the css file to the php


echo '</head>';


echo '<body>';



echo '<div id = "page margin">';

echo '<div id = "header"> </h1></div id= "header">';


echo '<body>';

echo '<div id="navigation2">';
		echo '<ul>';
			
			echo '<li><a href="home.html">Core</a></li>';
			
		
            echo '<li><a href="quiz.html">let apple help you select your new ipod!!</a></li>';
            
			echo '<li><a href="ipodnew.php">get the latest news from apple!!</a></li>';
			
           echo '<li><a href="http://www.apple.ie/ipod"><strong> <blink>BUY THIS IPOD NOW!! </blink></strong></a></li>';
		echo '</ul>';//the blink text will help attract the eye and get users onto Apples main website so that they can purchase an ipod. The site also utilises famous pop stars in a bid to show the star potential and encourage users to visit the app store to make music purchases also.
	echo '</div>';


echo '<div id="content">';
		echo '<div id= "h2">';	
			
			echo '<h2>
				<em>Find the right ipod for you today</em>
			</h2>';
			echo'<p>';
			






$score = 0;//score is defaulted at zero
if ($_POST['q1'] == 'yes')
$score++;//score gains a point for every yes answer in this case
if ($_POST['q2'] == 'yes')
$score++;
if ($_POST['q3'] == 'yes')
$score++;
if ($_POST['q4'] == 'yes')
$score++;
if ($_POST['q5'] == 'yes')
$score++;
echo '</div>';
?>

<?php
echo '<div id= "h2">';
echo '<div id= "music">';




if ($score == 0)echo '<a href="http://itunes.apple.com/ie/artist/rihanna/id63346553"><P ALIGN="RIGHT">listen to more Rihanna?</p></a>';

echo '</div>';

echo '<div id="h2">';
if ($score == 0)//if score is 0 the user will recieved the corresponding image and text likewise for the other scores
echo "<img src='images/shuffle.png' height=200 width=980 alt='shuffleipod'><br><h4>You got the Shuffle</h4>"; if ($score == 0)echo '<embed name="music"
src="music/umbrella.mp3"
loop="false"
hidden="true"
autostart="true">
</embed>';//this plays the track of the corresponding artist on the logo image in order to lure customers into purchasing music with their new ipod
//these images must be png files because of their transparency

echo '<div id= "music">';




if ($score == 4)echo '<a href="http://itunes.apple.com/ie/artist/nelly-furtado/id1260160"><P ALIGN="RIGHT">listen to more Nelly?</p></a>';

echo '</div>';

 if ($score == 4)
echo "<img src='images/touch.png' height=200 width=980 alt='touchipod'<br><h4> You got the Touch</h4>"; 


if ($score == 4)echo '<embed name="music"
src="music/maneater.mp3"
loop="false"
hidden="true"
autostart="true">
</embed>'; 


echo '<div id= "music">';
if ($score == 5)echo '<a href="http://itunes.apple.com/ie/artist/paramore/id75950796"><P ALIGN="RIGHT">listen to more Paramore?</p></a>';

echo '</div>';


if ($score == 5)
echo "<img src='images/ipad.png' height=200 width=980 alt='ipadipod'<br><h4> You got the ipad</h4>"; if ($score == 5)echo '<embed name="music"
src="music/misery.mp3"
loop="false"
hidden="true"
autostart="true">
</embed>';

echo '<div id= "music">';
if ($score == 1)echo '<a href="http://itunes.apple.com/ie/artist/avril-lavigne/id459885"><P ALIGN="RIGHT">listen to more Avril?</p></a>';
echo '</div>';


echo '<div id= "music">';
if ($score == 2)echo '<a href="http://itunes.apple.com/ie/artist/avril-lavigne/id459885"><P ALIGN="RIGHT">listen to more Avril?</p></a>';
echo '</div>';


echo '<div id= "music">';
if ($score == 3)echo '<P ALIGN="RIGHT"><a href="http://itunes.apple.com/ie/artist/avril-lavigne/id459885">listen to more Avril?</p></a>';

echo '</div>';




if ($score == 1)
echo "<img src='images/nano.png'  height='200' width='980' alt='nanoipod'<br> <h4> You got the Nano</h4>"; 
if ($score == 1)echo '<embed name="music"
src="music/girlfriend.mp3"
loop="false"
hidden="true"
autostart="true">
</embed>';

else if ($score == 2)
echo "<img src='images/nano.png'  height='200' width='980' alt='nanoipod'<br> <h4> You got the Nano</h4>"; 
if ($score == 2)echo '<embed name="music"
src="music/girlfriend.mp3"
loop="false"
hidden="true"
autostart="true">
</embed>';

else if ($score == 3)
echo "<img src='images/nano.png'  height='200' width='980' alt='nanoipod'<br> <h4> You got the Nano</h4>"; 
if ($score == 3)echo '<embed name="music"
src="music/girlfriend.mp3"
loop="false"
hidden="true"
autostart="true">
</embed>';
echo '<div id= "music">';








if ($_POST['q1'] == 'yes')
$score++;
if ($_POST['q1'] == 'yes') echo "<b>This year the app store will have one of the most extensive array of games coming out including super monkey ball 2 amongst many other great games!<br></br></b>";//no matter what the selection the user will be given a comment, either way we will try to encourage them to buy an ipod no matter what even if they answered negatively to all questions.

if ($_POST['q2'] == 'yes')
$score++;
if ($_POST['q2'] == 'yes') echo "<b>This device comes in many hard drive sizes so you'll never run out of space to store your awesome tunes!!<br></br></b>";
if ($_POST['q3'] == 'yes')
$score++;
if ($_POST['q3'] == 'yes') echo "<b> Its all about style and it just doesnt get much more stylish that cover flow!! It seems your a person who likes too keep things stylish and we have no doubt that this ipod will make you look super slick with sexy cover flow!<br></br></b>";
if ($_POST['q4'] == 'yes')
$score++;
if ($_POST['q4'] == 'yes')echo "<b> It looks like your a busy person on the go non stop always checking your emails!! Well no need to dust down your rusty ethernet cables and spend your evenings in a dim lit internet cafe because you ipod has WIFI!! Which means the internet is with you no matter where you go!!<br></br></b>";

if ($_POST['q5'] == 'yes')
$score++;
if ($_POST['q5'] == 'yes') echo "<b> You just have to have your camera with you at all times dont you!! Well worry no more about not getting those photo opportunites your new ipod is one of the best cameras on the market and im sure you'll agree once you take your first photograph with this slick lens!!<br></br> </b>";


if ($_POST['q1'] == 'no') echo "<b>Video games may be very popular but music is always our priority and we offer the best service available to make sure your ears get the best out of your new ipod!<br></br></b>";
if ($_POST['q2'] == 'no') echo "<b>You only need space for your favourite band? No problem!! This iPod comes in differant hard drive sizes. So even if you've only got a few tracks we'll make sure they are never lost!!<br></br></b>";
if ($_POST['q3'] == 'no') echo "<b> Cover flow may be a cool addition but just as impressive is our easy to use and free software iTunes which gives the option to upload lyrics and databases of songs onto ones iPod!<br></br></b>";
if ($_POST['q4'] == 'no') echo "<b> Wifi may be handy but if your not into surfing the net you can always enjoy our mutiple apps which complement everyones iPod!<br></br></b>";
if ($_POST['q5'] == 'no') echo "<b> Taking photos aren't everyones thing so it's great that no matter which iPod you choose we still have the best service when it comes to music in the market!<br></br></b>";


echo 'Dont delay make sure to visit the App Store today!! </a>';



echo '</div id= "content">';





echo '</div id >';










            
		echo '</div>';
echo  '</div>';
echo '</body>';
echo '<div id="footer">';

?>