<a href="index.php">Leden</a>
<a href="teams.php">Teams</a>
<table>

<?php
include "conn.php";
    $sqlTeams = "SELECT id, naam FROM teams";
    $resultTeams = $conn->query($sqlTeams);
  
      foreach($resultTeams as $rowTeams) {
        $idname = $rowTeams['id'];
        echo "<tr>"."<td> ID: ".$rowTeams['id']."</td>"."<td> Naam: ".$rowTeams['naam'].
        "</td><td>"."<a href='deleteTeam.php?subject=$idname'>delete row</a>"."<br>".
        "</td>"."</td><td>".
        "<a href='eenteam.php?subject=$idname'>view row</a>"."<br>"."</td>"."</tr>";
    }
  

?>
</table>
<style>
table {
  border-collapse: collapse;
  width: 50%;
  border: 1px solid black;
}
td{
    border-collapse: collapse;
    border: 1px solid black;
    color: black;
}
tr:nth-child(even) {background: lightgreen}
tr:nth-child(odd) {background: lightblue}

</style>