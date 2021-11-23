<?php
	//File containing required functions
    require("functions.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Breaking Bets | Home</title>
    <link rel="stylesheet" href="Style.css"> 
</head>

<body>
    <header>
        <div id="banner">
            <img src="resources/logo_transparent.png" alt = "Banner">
        </div>
            <nav>
                <ul>
                    <li><a href="index.html"><button id="id1" type="button">Home</button></a></li>
                    <li><a href="games.html"><button id="id2" type="button">Upcoming Games</button></a></li>
                    <li><a href="players.html"><button id="id3" type="button">Players</button></a></li>
                    <li><a href="news.html"><button id="id4" type="button">Breaking News</button></a></li>
                    <li><a href="faq.html"><button id="id4" type="button">FAQs</button></a></li>
                    <li><a href="contact.html"><button id="id5" type="button">Contact</button></a></li>
                </ul>
            </nav>
  </header>
    <div class="row">
        <div class="column">
        <h3>AFC Teams</h3>
		   <table style="border: 1px solid black;">
				<tr>
				<th>Team</th>
				<th></th>
				</tr>
				
				<?
				//Display table with AFC teams and their link
					create_afc_table();    
				?>
        
			</table>
        </div>
		<div class="column">
        <h3>NFC Teams</h3>
			<table style="border: 1px solid black;">
				<tr>
				<th>Team</th>
				<th></th>
				</tr>
        
				<?php
				//Display table with NFC teams and their link
					create_nfc_table();    
				?>
        
			</table>
        </div>
    </div>
        

    
    <footer><small>Breaking Bets established 2021<br>For all concerns please email <a href = "mailto: breakingbets@protonmail.com">Breaking Bets </a> </small></footer>
</body>


</html>