<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <pre>  
            <?php
                $n = array(3,5,8,2);
                $n[] = 7;
                print_r($n);

                $c = range(5,20,2);
               

                foreach($c as $valor){
                    print($valor);
                }

                $v = array(1=>"A",3=>"B",5=>"C", 8=>"W");
                $v[] = "E";
                unset($v[1]);
                print_r($v);

                $teste=array("nome"=>"ana","idade"=>23,"peso"=>65.8);
                print_r($teste);

                $w = array(array(2,3),array(3,4),array(9,5));
                print_r($w);
            
            ?>
        </pre>
    </div>
</body>
</html>