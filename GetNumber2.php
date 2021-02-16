<?php
    $N1 = filter_input(INPUT_GET, 'number1',FILTER_VALIDATE_FLOAT);
    $n = strlen($N1) - strrpos($N1, '.') - 1;

    if(!isset($_GET['SubmitNumber1'])){
    exit();
    }else if($N1===FALSE){
    $error_message = 'Please input a valid number.';
    }else if ($n>3){
    $error_message= 'Digits must be less than 3.';
    }else {
    $error_message = '';
    }
       
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="a2.css"/>
</head>
    <body>
        <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?><br/><br/>
        <?php echo '<a href="index.html">index.html</a>';
            exit ();?>
        </p>
        <?php } ?>

        <main>
        <form action="AddNumber.php" method="get">
            The first number is: <?php echo $N1;?><br/>
            Enter the second number  (format:999999.999) :
            <input type="text" name="number2" />
            <input type="hidden" name="number1" value="<?php echo $N1;?>"/>
            <br/>
            <br/>
            <input type="submit" name="SubmitNumber"/>
            </form>
        
        
        </main>
        
        
    </body>
</html>