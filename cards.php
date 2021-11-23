<?php
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
        <h3>Schedule</h3>
		   <table>
				<tr>
				<th>Team</th>
				<th>Week</th>
				<th>Day</th>
				<th>Date</th>
				<th>Time</th>
				<th>Result</th>
				<th>H/A</th>
				<th>Opp</th>
				<th>TmScore</th>
				<th>OppScore</th>
				</tr>
        
				<?php
					create_team_sched_table(cardinals);    
				?>
        
			</table>
        </div>
		<div class="column">
        <h3>Injury Report</h3>
			<table>
				<tr>
				<th>PLAYER</th>
				<th>POSITION</th>
				<th>INJURIES</th>
				<th>PRACTICESTATUS</th>
				<th>GAMESTATUS</th>
				</tr>
				
				<?php
					create_injury_report_table(cardinals);    
				?>
			</table>
    </div>
	<div class="row">
        <div class="column">
        <h3>Passing Leaders</h3>
		   <table>
				<tr>
				<th>Player</th>
				<th>ATT</th>
				<th>COMP</th>
				<th>YDS</th>
				<th>COMP%</th>
				<th>YDS/ATT</th>
				<th>TD</th>
				<th>TD%</th>
				<th>INT</th>
				<th>INT%</th>
				<th>LONG</th>
				<th>SCK</th>
				<th>SCK/LOST</th>
				<th>RATING</th>
				</tr>
        
				<?php
					create_pass_leaders_table($name);    
				?>
        
			</table>
        </div>
		<div class="column">
        <h3>Rushing Leaders</h3>
			<table>
				<tr>
				<th>Player</th>
				<th>Att</th>
				<th>Yds</th>
				<th>Yds/Att</th>
				<th>Lng</th>
				<th>TD</th>
				</tr>
        
				<?php
					create_rush_leaders_table($name);    
				?>
        
			</table>
        </div>
		<div class="column">
        <h3>Receiving Leaders</h3>
			<table>
				<tr>
				<th>Player</th>
				<th>Rec</th>
				<th>Yds</th>
				<th>Yds/Rec</th>
				<th>Lng</th>
				<th>TD</th>
				</tr>
        
				<?php
					create_rec_leaders_table($name);    
				?>
        
			</table>
    </div>

        

    
    <footer><small>Breaking Bets established 2021<br>For all concerns please email <a href = "mailto: breakingbets@protonmail.com">Breaking Bets </a> </small></footer>
</body>


</html>