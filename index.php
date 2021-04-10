<?php 

echo 'Welcome to my site';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Midterm</title>
</head>
<body><br><br>
    
    <form method='GET' action="data.php">
        <label>Enter the Licence plat:
            <input type="text" name='Licence_Plate'> 
        </label>
        <br>
        <label>Enter the Brand:
            <input type="text" name='Brand'> 
        </label>
        <br>
        
        <label>Enter the Model:
            <input type="text" name='Model'> 
        </label>
        <br>
        <label>Enter the Model_Year:
            <input type="text" name='Model_Year'> 
        </label><br>
        <label>Enter the Color:
            <input type="text" name='Color'> 
        </label><br><br>
        <input type="submit" value='Submit'>
    </form>
</body>
</html>