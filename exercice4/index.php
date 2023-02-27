<?php
    $value = 'Valeur de test';

    setcookie("TestCookie", $value);
?>
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



    <form action="index.php" method="POST">


    <div class="row">
        <div class="col">
            <label>Nom</label>
            <input name="Nom" type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <label >Prenom</label>
            <input name="Prenom" type="text" class="form-control" placeholder="Last name">
        </div>
    </div>

    <div class="row-10">
        <label for="">Saisissez l'object de votre message</label>
        <input class="form-control" placeholder="Object" type="text" name="object">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    

    <div class="form-group">
        <div>
            <label for="">Type de service</label>
        </div>
        <select name="Service" class="form-control">
            <option value="service-apres-vente">Contacter le service apres vente</option>
            <option value="service-technique">Contacter le service Technique</option>
        </select>
    </div>

    


    <div class="form-group">
        <label for="exampleFormControlTextarea1">Veuiller saisir le contenu de votre message:</label>
        <textarea name="connt" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>


    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">J'accepte les termes d'utilisation.</label>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    

    <?php

    if(array_key_exists('Nom',$_POST)){
        echo '<h1 class="display-5 text-center">
        Vos informations sont ici:
    </h1>

    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Object</th>
                <th scope="col">Email</th>
                <th scope="col">Type de service</th>
                <th scope="col">cont</th>
            </tr>
        </thead>

    <tbody>
        <tr>';

        foreach($_POST as $key => $val){



            echo '<td>';
    
            echo "$val";
    
            echo '</td>';
    
            
    
    
        }

        echo '</tr>

        </tbody>
        </table>';


        $_COOKIE['m'] = 'e';

    }
    
    
    

    ?>
    




  </body>
</html>