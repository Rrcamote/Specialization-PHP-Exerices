<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercises</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js">
    </script>
    <link rel="stylesheet" href="./style.css">

</head>

<body style="background-color:grey;">
    <!-- partial:index.partial.html -->
    <div class="container">
        <h3 class="text-center text-white">PHP EXERCISES</h3>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Exercise 1</h6>
                    </div>
                </div>
                <div class="form-card">
                    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="material">
                        <?php
                         if(isset($_POST['submit'])){
                          $username = $_POST['username'];
                         
                      
                          echo "<br>
                          <div>
                              <h4 class='text-center' style=' color: white;'>$username</h4>
                          </div>";
                      }
                      
                      ?>
                        <div class="form-group">
                            <label class="form-label text-white">Name:</label>
                            <input type="text" class="form-control form-control-lg bg-info" name="username" />
                        </div>
                        <div class="form-group">
                            <label class="form-label text-white">Email:</label>
                            <input class="form-control form-control-lg bg-info " type="text" name="email" />
                        </div>
                        <br>
                        <br>
                        <div class="buttons">
                            <button class="btn btn-primary p-3" style="width:280px;" name="submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
            <!-- exercise 2 -->
            <div class="col-md-4">

                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Exercise 2</h6>
                    </div>
                </div>
                <div class="form-card">
                    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="material">
                        <?php 
                    
                    if(isset($_POST['add'])){
                      $firstN = $_POST['first'];
                      $secondN = $_POST['second'];
                      $totalS = $firstN + $secondN;
                      if($firstN == $secondN){
                        $triple = $totalS * 3;
                        echo "<br>
                        <div>
                            <h4 class='text-center' style=' color: white;'>$triple</h4>
                        </div>";
                      }else{
                        echo "<br>
                        <div>
                            <h4 class='text-center' style=' color: white;'>$totalS</h4>
                        </div>";
                      }
                      

                    }
                ?>
                        <div class="form-group">
                            <label class="form-label text-white">Enter First Number:</label>
                            <input type="text" class="form-control form-control-lg bg-info" name="first" />
                        </div>
                        <div class="form-group">
                            <label class="form-label text-white">Enter Second Number:</label>
                            <input class="form-control form-control-lg bg-info" type="text" name="second" />
                        </div>
                        <br>
                        <br>
                        <div class="buttons">
                            <button class="btn btn-primary p-3" style="width:260px;" name="add">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- exercise 3 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Exercise 3</h6>
                    </div>
                </div>

                <div class="form-card1">
                    <?php 
                        if(isset($_POST['pattern'])) {
                            $rangeNumber = $_POST['nested'];
                        
                            for ($x = 1; $x <= $rangeNumber; $x++) {
                                for ($y = 1; $y <= ($x > $rangeNumber / 2 ? $rangeNumber - $x : $x); $y++) {
                                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp* ";
                                }
                                echo "<br>";
                            }
                        }
                    ?>
                    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="material">
                        <div class="form-group">
                            <label class="form-label text-dark">Enter Range Number:</label>
                            <input class="form-control form-control-lg bg-success" type="text" name="nested" />

                        </div>
                        <br>
                        <br>
                        <div class="buttons">
                            <button class="btn btn-primary p-3" style="width:290px;" name="pattern">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- exercise 4 -->

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Exercise 4</h6>
                    </div>
                </div>
                <div class="form-card">
                    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="material">
                        <?php
                      if(isset($_POST['check'])){
                          $num = $_POST['num'];
                          
                      $temp = check_prime($num);
                      if($temp == 1){
                        echo "<br>
                        <div>
                            <h5 class='text-center' style=' color: white;'>The number $num is a prime numbers</h4>
                        </div>";
                          
                      }else{
                        echo "<br>
                        <div>
                            <h5 class='text-center' style=' color: white;'>The number $num is a prime numbers </h4>
                        </div>";
                         
                      }
                      }
                      function check_prime($num)
                      {
                        if ($num == 1)
                        return 0;
                        for ($temp = 2; $temp <= $num/2; $temp++)
                        {
                            if ($num % $temp == 0)
                            return 0;
                        }
                        return 1;
                      }

                      ?>
                        <div class="form-group">
                            <label class="form-label text-white">Enter Number:</label>
                            <input type="text" class="form-control form-control-lg bg-info" name="num" />
                        </div>
                        <br>
                        <br>
                        <div class="buttons">
                            <button class="btn btn-primary p-3" style="width:280px;" name="check">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- exercise 5 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Exercise 5</h6>
                    </div>
                </div>
                <div class="form-card">
                    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="material">
                        <?php
                    if(isset($_POST['sub'])){
                      $word = $_POST['word'];
                      if(ctype_lower($word)){
                        echo "<br>
                        <div>
                            <h5 class='text-center' style=' color: white;'>Word is all Lower Case </h4>
                        </div>";
                      }else{
                        echo "<br>
                        <div>
                            <h5 class='text-center' style=' color: white;'>Word is not all Lower Case </h4>
                        </div>";
                      }
                    }
                    ?>
                        <br>

                        <div class="form-group">
                            <label class="form-label text-white">Input Word:</label>
                            <input type="text" class="form-control form-control-lg bg-info" name="word" />
                        </div>
                        <br>
                        <br>
                        <div class="buttons">
                            <button class="btn btn-primary p-3" style="width:280px;" name="sub">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- exercise 6 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Exercise 6</h6>
                    </div>
                </div>
                <div class="form-card">
                    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="material">
                        <?php
                    if(isset($_POST['sub1'])){
                      $string = $_POST['string'];
                      $temp = strrev($string);

                      if($temp == $string){
                        echo "<br>
                        <div>
                            <h5 class='text-center' style=' color: white;'>The word $string is a palindrome</h4>
                        </div>";
                      } else {
                        echo "<br>
                        <div>
                            <h5 class='text-center' style=' color: white;'>The word $string is not a palindrome</h4>
                        </div>";
                      }
                    }
                    ?>
                        <br>
                        <div class="form-group">
                            <label class="form-label text-white">Input Word:</label>
                            <input type="text" class="form-control form-control-lg bg-info" name="string" />
                        </div>
                        <br>
                        <br>
                        <div class="buttons">
                            <button class="btn btn-primary p-3" style="width:290px;" name="sub1">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- exercise 7 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Exercise 7</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-card">
                        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="material">
                            <?php
                        if(isset($_POST['date'])){
                            $Date = $_POST['inputD'];
                            $difference = round((strtotime($Date) - time()) / (60 * 60 * 24));
                         
                            echo "<br>
                            <div>
                                <h5 class='text-center' style=' color: white;'>The count down days is  $difference before the birthday</h4>
                            </div>";

                        }
                        
                    ?>
                            <div class="form-group">
                                <label for="" class="form-label text-white">Input Date:</label>
                                <input type="date" name="inputD" class="form-control form-control-large">
                            </div>
                            <br>
                            <br>
                            <div class="buttons">
                                <button class="btn btn-primary p-3" style="width:290px;" name="date">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- exercise 8 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Exercise 8</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-card">
                        <?php
                    if(isset($_POST['sub2'])){
                      $date = $_POST['date'];
                      $date1 = $_POST['date1'];

                      $date_diff = abs(strtotime($date) - strtotime($date1));

                      $years = floor($date_diff / (365*60*60*24));
                      $months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
                      $days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                      echo "<br>
                        <div>
                            <h5 class='text-center' style=' color: white;'>The difference is $years-$months-$days </h4>
                        </div>";
                    }
                    ?>
                        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="material">
                            <br>
                            <div class="form-group">
                                <label class="form-label text-white">Input First Date:</label>
                                <input type="text" class="form-control form-control-lg bg-info" name="date" />
                            </div>
                            <div class="form-group">
                                <label class="form-label text-white">Input Second Date:</label>
                                <input type="text" class="form-control form-control-lg bg-info" name="date1" />
                            </div>
                            <br>

                            <div class="buttons">
                                <button class="btn btn-primary p-3" style="width:260px;" name="sub2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- exercise 9 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Exercise 7</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-card">
                        <?php
                        
                        
                        ?>
                        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="material">

                            <div class="form-group">
                                <label class="form-label text-white">Input Arabic Numbers:</label>
                                <input type="text" class="form-control form-control-lg bg-info" name="romanN" />
                            </div>
                            <br>
                            <br>
                            <div class="buttons">
                                <button class="btn btn-primary p-3" style="width:260px;" name="arabic">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- exercise 7 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center">Exercise 8</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-card">
                        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="material">
                            <?php
                    function bubbleSort($array )
                    {
                        do
                        {
                            $swapped = false;
                            for( $i = 0, $c = count( $array ) - 1; $i < $c; $i++ )
                            {
                                if( $array[$i] > $array[$i + 1] )
                                {
                                    list( $array[$i + 1], $array[$i] ) =
                                            array( $array[$i], $array[$i + 1] );
                                    $swapped = true;
                                }
                            }
                        }
                        while( $swapped );
                    return $array;
                    }
                    $test_array = array(3, 0, 2, 5, -1, 4, 1);
                    echo "<h5 style='color:white;'>Original Array :\n<h5>";
                    echo implode(', ',$test_array );
                    echo "Sorted Array :\n";
                    echo implode(', ',bubbleSort($test_array)). PHP_EOL;
                    ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>




        <!-- partial -->
        <script src="./script.js"></script>

        <script>
        < /body>

        <
        /html>

        <
        script >
            const form = document.querySelector('form');
        const materialInputs = form.querySelectorAll('.form-group > input');

        function materialize() {
            this.parentElement.classList.add('materialize');
        }

        function dematerialize() {
            if (this.value === '')
                this.parentElement.classList.remove('materialize');
        }

        materialInputs.forEach(input => {
            input.addEventListener("focus", materialize);
            input.addEventListener("blur", dematerialize);
        });
        </script>