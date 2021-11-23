<?php

function get_afc_teams() {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT TEAM,TEAMLINK FROM TeamNames WHERE CONFERENCE = 'AFC';";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function get_nfc_teams() {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT TEAM,TEAMLINK FROM TeamNames WHERE CONFERENCE = 'NFC';";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function get_team_schedule($name) {
    require("info_db.php");

    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT Week,Day,Date,Time,Result,H/A,Opp,TmScore,OppScore FROM TeamPageSched WHERE Team = $name;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}
ea
function get_team_pass_leaders($name) {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT LINK,PLAYER,ATT,COMP,YDS,COMP%,YDS/ATT,TD,TD%,INT,INT%,LONG,SCK,
	SCK/LOST,RATING FROM TeamPassLeaders WHERE TEAM = $name;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],
		$row[7],$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function get_team_rush_leaders($name) {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT LINK,PLAYER,ATT,YDS,YDS/ATT,LNG,TD FROM TeamRushLeaders WHERE TEAM = $name;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function get_team_rec_leaders($name) {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT LINK,PLAYER,REC,YDS,YDS/REC,LNG,TD FROM TeamRecLeaders WHERE TEAM = $name;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function get_team_roster($name) {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT LINK,PLAYER,NUMBER,POSITION,HEIGHT,WEIGHT,AGE,EXP,COLLEGE FROM 2021Players WHERE TEAM = $name;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function get_team_injury($name) {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT PLAYER,POSITION,INJURIES,PRACTICESTATUS,GAMESTATUS FROM InjuryReport WHERE TEAM = $name;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function get_team_pass_off($name) {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT ATT,CMP,CMP%,YDS/ATT,PASSYDS,TD,INT,RATE,1ST,1ST%,20+,40+,LNG,SCK,SCKY 
	FROM TeamPassO WHERE TEAM = $name;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],
		$row[7],$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function get_team_rush_off($name) {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT ATT,RUSHYDS,YPC,TD,20+,40+,LNG,1ST,1ST%,FUM FROM TeamRushO WHERE TEAM = $name;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function get_team_rec_off($name) {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT REC,YDS,YDS/REC,TD,20+,40+,LNG,1ST,1ST%,FUM FROM TeamRushO WHERE TEAM = $name;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function get_team_pass_def($name) {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT ATT,CMP,CMP%,YDS/ATT,YDS,TD,INT,RATE,1ST,1ST%,20+,40+,LNG,SCK 
	FROM TeamPassD WHERE TEAM = $name;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],
		$row[7],$row[8],$row[9],$row[10],$row[11],$row[12],$row[13]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function get_team_rush_def($name) {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT ATT,RUSHYDS,YPC,TD,20+,40+,LNG,RUSH 1ST,RUSH 1ST%,RUSH FUM FROM TeamRushD WHERE TEAM = $name;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function get_team_rec_def($name) {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT REC,YDS,YDS/REC,TD,20+,40+,LNG,REC 1ST,REC 1ST%,REC FUM,PDEF FROM TeamRecD WHERE TEAM = $name;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[9],$row[10]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function get_team_downs_off($name) {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT 3RD/ATT,3RD/MD,4TH/ATT,4TH/MD,REC1ST,REC1ST%,RUSH1ST,RUSH1ST%,SCRMPLYS 
	FROM TeamDownsO WHERE TEAM = $name;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function get_team_downs_def($name) {
    require("info_db.php");

    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT 3RD/ATT,3RD/MD,4TH/ATT,4TH/MD,REC1ST,REC1ST%,RUSH1ST,RUSH1ST%,SCRMPLYS 
	FROM TeamDownsD WHERE TEAM = $name;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function create_nfc_table(){
    $teams = get_nfc_teams();
    foreach ($teams as $r){
        $link = $r[1];
		echo "<tr>";
        echo "<td><a href=$link>$r[0]</a></td>";  
        echo "</tr>";
    }
}

function create_afc_table(){
    $teams = get_afc_teams();
    foreach ($teams as $r){
        $link = $r[1];
		echo "<tr>";
        echo "<td><a href=$link>$r[0]</a></td>";  
        echo "</tr>";
    }
}

function create_team_sched_table($name){
    $sched = get_team_schedule($name);
    foreach ($sched as $r){
		echo "<tr>";
		echo "<td>" . $r[0] . "</td>";
        echo "<td>" . $r[1] . "</td>";
        echo "<td>" . $r[2] . "</td>";
		echo "<td>" . $r[3] . "</td>";
        echo "<td>" . $r[4] . "</td>";
        echo "<td>" . $r[5] . "</td>";
		echo "<td>" . $r[6] . "</td>";
        echo "<td>" . $r[7] . "</td>";
        echo "<td>" . $r[8] . "</td>";
        echo "</tr>";
    }
}

function create_injury_report_table($name){
    $injury = get_team_injury($name);
    foreach ($injury as $r){
		echo "<tr>";
		echo "<td>" . $r[0] . "</td>";
        echo "<td>" . $r[1] . "</td>";
        echo "<td>" . $r[2] . "</td>";
		echo "<td>" . $r[3] . "</td>";
        echo "</tr>";
    }
}

function create_pass_leaders_table($name){
    $pass = get_team_pass_leaders($name);
    foreach ($pass as $r){
        $link = $r[0];
		echo "<tr>";
        echo "<td><a href=$link>$r[1]</a></td>"; 
        echo "<td>" . $r[2] . "</td>";
		echo "<td>" . $r[3] . "</td>";
        echo "<td>" . $r[4] . "</td>";
        echo "<td>" . $r[5] . "</td>";
		echo "<td>" . $r[6] . "</td>";
        echo "<td>" . $r[7] . "</td>";
        echo "<td>" . $r[8] . "</td>";
		echo "<td>" . $r[9] . "</td>";
        echo "<td>" . $r[10] . "</td>";
		echo "<td>" . $r[11] . "</td>";
        echo "<td>" . $r[12] . "</td>";
        echo "<td>" . $r[13] . "</td>";
		echo "<td>" . $r[14] . "</td>";
        echo "</tr>";
    }
}

function create_rush_leaders_table($name){
    $rush = get_team_pass_leaders($name);
    foreach ($rush as $r){
        $link = $r[0];
		echo "<tr>";
        echo "<td><a href=$link>$r[1]</a></td>"; 
        echo "<td>" . $r[2] . "</td>";
        echo "<td>" . $r[3] . "</td>";
		echo "<td>" . $r[4] . "</td>";
        echo "<td>" . $r[5] . "</td>";
        echo "<td>" . $r[6] . "</td>";
		echo "<td>" . $r[7] . "</td>";
        echo "</tr>";
    }
}

function create_rec_leaders_table($name){
    $rec = get_team_pass_leaders($name);
    foreach ($rec as $r){
        $link = $r[0];
		echo "<tr>";
        echo "<td><a href=$link>$r[1]</a></td>"; 
        echo "<td>" . $r[2] . "</td>";
        echo "<td>" . $r[3] . "</td>";
		echo "<td>" . $r[4] . "</td>";
        echo "<td>" . $r[5] . "</td>";
        echo "<td>" . $r[6] . "</td>";
		echo "<td>" . $r[7] . "</td>";
        echo "</tr>";
    }
}
?>