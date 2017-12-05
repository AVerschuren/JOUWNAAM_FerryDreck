    <?php
        $conn = new mysqli("localhost", "root", "ds9sisko!", "concert");
        
//        $s = "SELECT * FROM concerten";
//
//        if ($r = $conn->query($s)) {
//            while ($row = $result-> fetch_assoc()) {
//                echo $row["locatie"].$row["concertzaal"]. "<br>";
//            }
//        }

        $l = $_GET["data"];

        $sql = "SELECT datum, locatie, concertzaal FROM concerten WHERE locatie LIKE '$l%';";

        if ($result = $conn->query($sql)) {

        while ($row = $result->fetch_assoc()){
            echo $row["datum"]. " " . $row["locatie"]. " ". $row["concertzaal"] . "<br>";
        }

//        for($i=0; $i<25; $i++) {
//            echo $row["naam"];
//        }
    }
    ?>
