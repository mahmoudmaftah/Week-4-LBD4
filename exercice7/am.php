<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <?php

    $taux = $_POST["Profession"];
    $duree = $_POST["duree"];
    $montant = $_POST["montant"];
    $mensualite = ($montant*$taux/1200)/(1 - pow(1 + ($taux/1200), -$duree));


    $interret = ($montant*$taux)/(1200);

    $arr = array(array(1, round($mensualite, 2), round($interret, 2), round($mensualite-$interret, 2), round($montant-$mensualite+$interret, 2)));

    for($i = 1; $i < $duree; $i ++){
        $po = array();
        array_push($po, $i+1);
        array_push($po, round($mensualite, 2));
        $int = ($arr[$i-1][4] * $taux)/1200;
        array_push($po, round($int, 2));


        $am = $mensualite- $int;
        array_push($po, round($am, 2));

        $cap = $arr[$i-1][4] - $po[3];
        array_push($po, round($cap, 2));

        array_push($arr, $po);
        if($po[4] <= 0){
          break;
      }
    }
    
    echo '<h1 class="display-5 text-center">
        Vos informations sont ici:
    </h1>

    <table class="table table-hover text-center">
        <thead>
            <tr>

            <th scope="col">Date Ech</th>
            <th scope="col">Mensualité (MAD)</th>
            <th scope="col">Interet (MAD)</th>
            <th scope="col">Amortissement (MAD)</th>
            <th scope="col">Cap restant dû (MAD)</th>

            ';
            

                
            echo '</tr>
        </thead>

    <tbody>';

        foreach($arr as $key => $val){
            echo '<tr>';
            echo '<td>'.$val[0].'</td>';
            echo '<td>'.$val[1].'</td>';
            echo '<td>'.$val[2].'</td>';
            echo '<td>'.$val[3].'</td>';
            echo '<td>'.$val[4].'</td>';
            echo '</tr>';
        }




        echo '

        </tbody>
        </table>';
    
    ?>


  </body>
</html>