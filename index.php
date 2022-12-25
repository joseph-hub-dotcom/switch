<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "studenti";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    echo "kon";
}

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$indeks = $_POST['indeks'];
$faks = $_POST['faks'];
$nasoka = $_POST['nasoka'];


$sql = "INSERT INTO studenti (ime, prezime, indeks, fakultet, nasoka) 
VALUES ('$ime', '$prezime', '$indeks', '$faks', '$nasoka')";

$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Име<input type="text" name="ime"><br>
        Презиме<input type="text" name="prezime"><br>
        Број на индекс<input type="text" name="indeks"><br>
        Факултет<input type="text" name="faks"><br>
        Насока<input type="text" name="nasoka"><br>
        <input type="submit" name="submit" value="Внеси студент">
    </form>
    <form action="index.php" method="post">
    <h3>Преглед на студенти по факултети</h3>
    <select  name="fakulteti">
        <option value="inf">Факултет за информатика</option>
        <option value="eko">Економски факултет</option>
        <option value="praven">Правен факултет</option>
      </select><br>
      <input type="submit" name="submit2" value="Преглед">
      </form>
</body>
</html>
<?php if(isset($_POST['submit2'])){
    $selected = $_POST['fakulteti'];
    switch($selected)
    {
      case "inf": ?>
        <table>
        <tr>
             <th>ID</th>
             <th>name</th>
             <th>embg</th>
             <th>embg</th>
             <th>embg</th>
             <th>embg</th>
            </tr>
            <?php
                $hostName = "localhost";
                $userName = "root";
                $password = "";
                $databaseName = "studenti";
                $conn = new mysqli($hostName, $userName, $password, $databaseName);
                $query = "SELECT * FROM studenti WHERE fakultet='Informatika'";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)){
                    $ime = $row['ime'];
    
                    $prezime = $row['prezime'];
                
                    $brindeks = $row['indeks'];
                
                    $fakultet = $row['fakultet'];
                
                    $nasoka = $row['nasoka'];
    
                    echo "<tr>";
    
                    echo "<td>$ime</td>";
                
                    echo "<td>$prezime</td>";
                
                    echo "<td>$brindeks</td>";
                
                    echo "<td>$fakultet</td>";
                
                    echo "<td>$nasoka</td>";
                
                    echo "</tr>";
                
                    }?>
    </table> <?php
        break;
        case "praven": 
        ?>
                <table>
        <tr>
             <th>ID</th>
             <th>name</th>
             <th>embg</th>
             <th>embg</th>
             <th>embg</th>
             <th>embg</th>
            </tr>
            <?php
                $hostName = "localhost";
                $userName = "root";
                $password = "";
                $databaseName = "studenti";
                $conn = new mysqli($hostName, $userName, $password, $databaseName);

                $query = "SELECT * FROM studenti WHERE fakultet='Praven'";

                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($result)){
                    $ime = $row['ime'];
    
                    $prezime = $row['prezime'];
                
                    $brindeks = $row['indeks'];
                
                    $fakultet = $row['fakultet'];
                
                    $nasoka = $row['nasoka'];
    
                    echo "<tr>";
    
                    echo "<td>$ime</td>";
                
                    echo "<td>$prezime</td>";
                
                    echo "<td>$brindeks</td>";
                
                    echo "<td>$fakultet</td>";
                
                    echo "<td>$nasoka</td>";
                
                    echo "</tr>";
                
                    }?>
    </table><?php
        break;
      case "eko": 
        ?>
                        <table>
        <tr>
             <th>ID</th>
             <th>name</th>
             <th>embg</th>
             <th>embg</th>
             <th>embg</th>
             <th>embg</th>
            </tr>
            <?php
                $hostName = "localhost";
                $userName = "root";
                $password = "";
                $databaseName = "studenti";
                $conn = new mysqli($hostName, $userName, $password, $databaseName);

                $query = "SELECT * FROM studenti WHERE fakultet='Ekonomski'";

                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($result)){
                    $ime = $row['ime'];
    
                    $prezime = $row['prezime'];
                
                    $brindeks = $row['indeks'];
                
                    $fakultet = $row['fakultet'];
                
                    $nasoka = $row['nasoka'];
    
                    echo "<tr>";
    
                    echo "<td>$ime</td>";
                
                    echo "<td>$prezime</td>";
                
                    echo "<td>$brindeks</td>";
                
                    echo "<td>$fakultet</td>";
                
                    echo "<td>$nasoka</td>";
                
                    echo "</tr>";
                
                    }?>
    </table><?php
         break;
      default: echo("Error!"); exit(); break;
    }}
 ?>




