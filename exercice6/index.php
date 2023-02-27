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
        
        if(array_key_exists("nom", $_POST)){

            $formations = array("Computer-Science", "Physical-Sciences", "Accounting-and-Finance", "History", "Accounting", "Finance", "Tourism", "Statistics", "Mechanical-Engineering", "Public-Health" );
            $i=false;
            foreach($formations as $key => $val){
                if(array_key_exists($val, $_POST)){
                    $i = true;
                }
            }
            $op = ($_POST["pssw"] == $_POST["repssw"]) && $i && ($_POST["nom"] != "") && ($_POST["prenom"] != "") && ($_POST["bdate"] != "") && ($_POST["pssw"] != "") && ($_POST["repssw"] != "");

            if($op){

            $er = array();
            foreach($_POST as $key => $val){
                if(array_key_exists($val, $formations)){
                    array_push($er, $key);
                }
            }
                echo '<h1 class="display-5 text-center">
        Vos informations sont ici:
    </h1>

    <table class="table table-hover text-center">
        <thead>
            <tr>

            <th scope="col">Civilité</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Birth date</th>
            <th scope="col">Password</th>
            <th scope="col">Formations</th>



            ';
            

                
            echo '</tr>
        </thead>

    <tbody>
        <tr>

            <td>'.$_POST["civilite"].'</td>
            <td>'.$_POST["nom"].'</td>
            <td>'.$_POST["prenom"].'</td>
            <td>'.$_POST["bdate"].'</td>
            <td>'.$_POST["pssw"].'</td>
            <td>';
            
            foreach($er as $key => $val){
                echo $val;
                echo '<br>';
            }

            echo '</td>';




        echo '</tr>

        </tbody>
        </table>';

            }else{







                echo '<form action="" method="POST">
            <div class="container">
    
            <div class="row">
                <div class="col-10 form-group">
                    <label for="exampleFormControlSelect1">Civilité</label>
                    <select name="civilite" class="form-control" id="exampleFormControlSelect1">
                        <option value="Mlle">Mlle</option>
                        <option value="M">M</option>
                        <option value="Mme">Mme</option>
                        
                    </select>
                </div>
            </div>
            <div class="row">

            <div class="col-5 form-group">
                <label for="formGroupExampleInput2">Nom</label>
                <input name="nom" value="'.$_POST["nom"].'" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>

            <div class="col-5 form-group">
                <label for="formGroupExampleInput2">Prénom</label>
                <input type="text" value="'.$_POST["prenom"].'" name="prenom" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>

        </div>

        <div class="row ">
            <div class="col-10">

            <label for="idate">Date de Naissance</label>
            <input name="bdate"  value="'.$_POST["bdate"].'"  type="date" class="form-control" id="idate" placeholder="Another input">

            </div>
            
        </div>


        <div>
            <div class="form-check">';

            $formations = array("Computer-Science", "Physical-Sciences", "Accounting-and-Finance", "History", "Accounting", "Finance", "Tourism", "Statistics", "Mechanical-Engineering", "Public-Health" );

                for($i = 0; $i < 10; $i++){
                    if(array_key_exists("$formations[$i]", $_POST)){
                        echo '<input checked class="form-check-input" value="1" name = "'.$formations[$i].'" type="checkbox" value="" id="'.$formations[$i].'">';
                        echo '<label class="form-check-label" for="'.$formations[$i].'">';
                        echo $formations[$i];
                        echo '</label>';
                        echo '<br>';
                    } else{
                        echo '<input  class="form-check-input" value="1" name = "'.$formations[$i].'" type="checkbox" value="" id="'.$formations[$i].'">';
                        echo '<label class="form-check-label" for="'.$formations[$i].'">';
                        echo $formations[$i];
                        echo '</label>';
                        echo '<br>';

                    }
                    

                }
        echo '<label class="form-check-label" for="defaultCheck1">
        Default checkbox
    
</div>
</div>


<div class="row">
<div class="col-5 form-group">
    <label for="inputPassword1">Password</label>
    <input type="password" value="'.$_POST["pssw"].'" name="pssw" class="form-control" id="inputPassword1" placeholder="Password">
</div>

<div class="col-5 form-group">
    <label for="inputPassword2">Confirm Password</label>
    <input type="password" name="repssw"  value="'.$_POST["repssw"].'"  class="form-control" id="inputPassword2" placeholder="Password">
</div>
</div>

<div class="row">
<div class="col-10">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</div>



</div>
</form>';

            }
            
        }
        else{

            

            echo '<form action="" method="POST">
            <div class="container">
    
            <div class="row">
                <div class="col-10 form-group">
                    <label for="exampleFormControlSelect1">Civilité</label>
                    <select name="civilite" class="form-control" id="exampleFormControlSelect1">
                        <option value="Mlle">Mlle</option>
                        <option value="M">M</option>
                        <option value="Mme">Mme</option>
                        
                    </select>
                </div>
            </div>
            <div class="row">

            <div class="col-5 form-group">
                <label for="formGroupExampleInput2">Nom</label>
                <input name="nom" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>

            <div class="col-5 form-group">
                <label for="formGroupExampleInput2">Prénom</label>
                <input type="text" name="prenom" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>

        </div>

        <div class="row ">
            <div class="col-10">

            <label for="idate">Date de Naissance</label>
            <input name="bdate" type="date" class="form-control" id="idate" placeholder="Another input">

            </div>
            
        </div>


        <div>
            <div class="form-check">';

            $formations = array("Computer-Science", "Physical-Sciences", "Accounting-and-Finance", "History", "Accounting", "Finance", "Tourism", "Statistics", "Mechanical-Engineering", "Public-Health" );

                for($i = 0; $i < 10; $i++){
                    echo '<input class="form-check-input" value="1" name = "'.$formations[$i].'" type="checkbox" value="" id="'.$formations[$i].'">';
                    echo '<label class="form-check-label" for="'.$formations[$i].'">';
                    echo $formations[$i];
                    echo '</label>';
                    echo '<br>';

                }
        echo '<label class="form-check-label" for="defaultCheck1">
        Default checkbox
    
</div>
</div>


<div class="row">
<div class="col-5 form-group">
    <label for="inputPassword1">Password</label>
    <input type="password" name="pssw" class="form-control" id="inputPassword1" placeholder="Password">
</div>

<div class="col-5 form-group">
    <label for="inputPassword2">Confirm Password</label>
    <input type="password" name="repssw" class="form-control" id="inputPassword2" placeholder="Password">
</div>
</div>

<div class="row">
<div class="col-10">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</div>



</div>
</form>';
            
            }
        
        ?>



                
                


  </body>
</html>