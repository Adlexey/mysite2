<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
    <?php include 'index.php' ?>
</head>
<body>
    
    <div class="flex-container">

        <div class="header">             
               <?php include 'menu.inc.php' ?>
               <?php include 'logo.inc.php' ?>
               <?php include 'contact.inc.php' ?> 	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img class="myyImg" src="img/5.png">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city, '<br><br>', 'Я обучаюсь в ', $edu; 
                          ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    года </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> <br><br>
                    <?php echo "Делителем числа ", $num, " являются числа: ";
                    foreach ($arrDel as $row) {echo $row . ", ";}
                    ?>

            </div>

            <div class="article">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>