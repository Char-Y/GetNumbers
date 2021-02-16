<?php
$N1= filter_input(INPUT_GET,'number1',FILTER_VALIDATE_FLOAT);
$N2= filter_input(INPUT_GET,'number2',FILTER_VALIDATE_FLOAT);
$n = strlen($N2) - strrpos($N2, '.') - 1;
    if(!isset($_GET['SubmitNumber'])){
    exit();
    }else if($N2===FALSE){
    $error_message = 'Please input a valid number.';
    } else if ($n>3){
    $error_message= 'Digits must be less than 3.';
    }else {
    $error_message = '';
    }
       
$sum=$N1 + $N2;

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="a2.css"/>
</head>
    <body>
     <form action="GetNumber2.php" method="get">
        <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?><br/><br/>

        <input type="hidden" name="number1" value="<?php echo $N1;?>"/>
               <input type="submit" name="SubmitNumber1" />
       
           <?php exit();?>
        </p>
        <?php } ?>
        </form>

        <main>
        Your number 1 :<?php echo $N1; ?><br/><br/>
        Your number 2 :<?php echo $N2;?><br/><br/>
        The sum of the 2 numbers :<?php echo $sum; ?><br/><br/>
        <?php echo '<a href="index.html">index.html</a>'; ?> 
        </main>
   
    </body>
</html>