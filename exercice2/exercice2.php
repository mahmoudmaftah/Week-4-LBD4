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


    <form action="exercice2h.php" method="POST" >

    </form>

    <?php
        $tab = array(
            "WEB" => array("PHP" => array("https://www.php.net/", "*****"),
                            "HTML" => array("https://www.w3schools.com/html/default.asp", "****"),
                            "JavaScript" => array("https://www.javascript.com/", "**"),
                            "CSS" => array("https://www.w3schools.com/css/", "****"),
        ),
            "DB" => array("MySQL" => array("https://www.mysql.com/", "*****"),
                            "PostgreSQL" => array("https://www.postgresql.org/", "*****"),
                            "Oracle" => array("https://www.oracle.com/", "****"),
                            "DB2" => array("https://www.ibm.com/products/db2", "****"),
        )
    );

    foreach($tab as $key => $val){
        $a = '';

        foreach($val as $p => $o){
            $m = implode("---",$o);
            $a = $a.$p.'='.$m."&"; 

        }
        
        echo "Pour l'etudiant : ";
        echo '<a href="'."exercice2h.php?".$a.'">'.$key.'</a><br>';
    }
    
    ?>



  </body>
</html>