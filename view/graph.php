<?php
//database
//verification error et connection db
try {
    $db = new PDO(
        'mysql:host=localhost;dbname=wekeeptrack',
        'root'
    );
}

catch (Exeption $e){
    die('Erreur : '.$e->getMessage());
}
//Initialisation datalist

$i=0;

//requete
$sql = "SELECT * FROM gptest ORDER BY temps";
$reponse = $db->query($sql);
foreach($reponse as $donnees){
    $temps[$i]= $donnees['temps'];
    $dgps[$i] = $donnees['dgps'];
    $i++;  
    }    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Graphique APP</title>
    <meta name='viewport' content="width=device-widht, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    
</head>
<body>
   



    <canvas id="graph" width="10" height="5"></canvas>
</div>
</body>
</html>

<script>
    var ctx = document.getElementById('graph').getContext('2d')
    var dgps= <?php echo json_encode($dgps);?>; 
    var temps = <?php echo json_encode($temps); ?>;

    var graph1 = new Chart(ctx, {
        type: 'line',
        data:{
        labels: temps,
        datasets: [
            {
            label:'Heart Tracking ( Average Beats per Day )',
            data: dgps,
            borderColor: "green",
            }
        ],
       }
       
    });

</script>