<a href="index.php">Leden</a>
<a href="teams.php">Teams</a>

<table>

<?php
include "conn.php";
  $sql = "SELECT id, voornaam, achternaam, email, wachtwoord, team, contributie FROM gebruikers";
  $result = $conn->query($sql);
  function delete(){
    $stmt->execute();
  }
    foreach($result as $rows){
        $idname = $rows['id'];
      echo "<tr>". "<td> ID: ".$rows['id'] .
       "</td><td>voornaam: " . $rows['voornaam'] .
        "</td><td> achternaam: " . $rows['achternaam'] . 
        "</td><td> email: " . $rows['email'] ."</td><td>".
        "<a href='deletespeler.php?subject=$idname'>speler verwijderen</a>".
        "<br>"."</td>"."</td>"."<td>"."<a href='eenspeler.php?subject=$idname'>speler bekijken</a>".
        "<br>"."</td>"."</tr>";
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