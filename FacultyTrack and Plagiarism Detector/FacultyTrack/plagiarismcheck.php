<!DOCTYPE html>
<html>

<head>
<center>
<style>
body {background-color: lightgray;}
</style>
 	<meta charset="utf-8"> 
 	
 	<title>Plagiarism Checker</title> 
     <h1 style="color:blue;font-size: 35;"><i>Plagiarism Checker</i> </h1>
</head> 
</head>    
<body>
    <form method="POST">
        <h2 style="color:black;font-size: 35;"><i>Insert Original Text</i> </h2>  
        <textarea input type="text" name="message1" style="width:600px; height:100px;"> </textarea>
         <br>
        <h2 style="color:black;font-size: 35;"><i>Insert Copied Text</i> </h2>  
        <textarea input type="text" name="message2" style="width:600px; height:100px;"> </textarea>
         <br>
         <br>
         <input type = "submit" name = "find" value = "Check for Plagiarism">
         <br>
         <br>

    </form>
    <?php
    if(isset($_POST['find'])) {
        $similarity = similar_text($_POST['message1'], $_POST['message2'], $per);
        

        echo " There is " .$per. " % percent similarity";
    }
    ?>
<br>
<br>
 	<form method = "POST" action ="main_index.php"> 
 	 	<input type = "submit" value="Go back to menu"/> 
 	</form> 
</body>
</center>
</html>