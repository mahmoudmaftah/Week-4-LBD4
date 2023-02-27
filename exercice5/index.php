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
   
    
    <div class="no form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="add" checked>
        <label class="form-check-label" for="exampleRadios1">
            Addition
        </label>
    </div>

    <div class="no form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="sub">
        <label class="form-check-label" for="exampleRadios2">
            Soustraction
        </label>
    </div>

    <div class="no form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="mult">
        <label class="form-check-label" for="exampleRadios3">
            multiplication
        </label>
    </div>

    <div class="no form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="div">
        <label class="form-check-label" for="exampleRadios4">
            Division
        </label>
    </div>


    <div class="bla col-6">
        <label for="formGroupExampleInput">Enter your first number</label>
        <input name="nb1" type="text" class="form-control" id="formGroupExampleInput" value="1" placeholder="0">
    </div>

    <div class="bla col-6">
        <label for="formGroupExampleInput2">Enter your second number</label>
        <input name="nb2" type="text" class="form-control" id="formGroupExampleInput2" value="1" placeholder="0">
    </div>

    <div class="result">
    <?php
    
    if(array_key_exists("exampleRadios", $_POST)){
        if($_POST["exampleRadios"] == "add"){
            $a = intval($_POST["nb1"]) + intval($_POST["nb2"]) ;
            echo "$a";
        }

        if($_POST["exampleRadios"] == "sub"){
            $a = intval($_POST["nb1"]) - intval($_POST["nb2"]) ;
            echo "$a";
        }

        if($_POST["exampleRadios"] == "mult"){
            $a = intval($_POST["nb1"]) * intval($_POST["nb2"]) ;
            echo "$a";
        }

        if($_POST["exampleRadios"] == "div"){
            $a = intval($_POST["nb1"]) / intval($_POST["nb2"]) ;
            echo "$a";
        }

    }

    

?>
    </div>

    <button class="btn btn-primary" type="submit">Calculer</button>

    

 

    </form>

  </body>

  <style>
    *{
        box-sizing:border-box
    }
    body{
        justify-content:center;

        display:flex;
    }
    .no{
        width:40%;
        border:2px solid black;
        margin:10px;
    }

    .bla{
        display:flex;
        flex-direction:column;
        margin-bottom:20px;
        width:45%
    }
    form{
        display:flex;
        background-color: #909090;
        color:white;
        flex-wrap:wrap;
        width:700px;
        padding:20px;
        justify-content:center;


    }

    div{
        width:100%;
        display:flex;
    }

    .result{
        background-color:#CCCCFF;
        height:100px;
        width:50%;
        display:flex;
        justify-content:center;
        align-items:center;
        font-weight:bold;
        font-size:50px;
        color:black
    }
    button{
        width:70%;
        margin:30px
    }
  </style>
</html>