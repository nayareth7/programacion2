<html>
    <head></head>
    <title>hola</title>
    <head>
    <body>
     <form method="post">
    <?php error_reporting(0);?>
     <?php
        if($_post('btnSumar')=='+'){
            $n1 = $_post('txtnum1');
            $n2 = $_post('txtnum2');
            $res = $n1 + $2;
           //primera forma de mostrar en pantalla 
           // echo "<script>alert('la suma es $res')</script>";
           //segunda forma 
           // echo "la suma es".$res;
        }

        if($_post('btnResta')=='-'){
            $n1 = $_post('txtnum1');
            $n2 = $_post('txtnum2');
            $res = $n1 - $2;
            echo "la resta es".$res;
        }

        if($_post('btnMult')=='x'){
            $n1 = $_post('txtnum1');
            $n2 = $_post('txtnum2');
            $res = $n1 * $2;
            echo "la multiplicacion es".$res;
        }
        if($_post('btnDiv')=='/'){
            $n1 = $_post('txtnum1');
            $n2 = $_post('txtnum2');
            $res = $n1 / $2;
            echo "la divicion es".$res;
        }

     ?>
        <center><h1></b>calculadora basica</hi></h1>b>
        1 numero <input type="text" name="txtnum1" values="<?php echo $n1;?>" size="3"
        2 numero <input type="text" name="txtnum2" values="<?php echo $n2;?>" size="3"
        <br>
        <input type="submit" name="btnSumar" values="+">
        <input type="submit" name="btnResta" values="-">
        <input type="submit" name="btnMult" values="x">
        <input type="submit" name="btnDiv" values="/">

        <br><br>
        resultado <input type="text" name="txtresul" values="" size="3">

        </center>
     
    </body>
</html>
 