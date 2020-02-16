<html>
    <head>
        <title>
            marksheet
        </title>
        <link rel="stylesheet" type="text/css" href="style_marksheet.css">
    </head>
    <body>
<h1>
       Welcome <?php echo $_POST["name"];?> <br><hr> 
       Class:<?php echo $_POST["class"];?><br>
        Roll No:<?php echo $_POST["rollno"];?>

        
</h1>
        
             <?php  $total = 500;

              $obtained = $_POST["English"]+$_POST["Hindi"]+$_POST["Physics"]+$_POST["Chemistry"]+$_POST["Math"];
           
           $percentage = ($obtained/$total)*100;?><hr>

           <h2> <?php echo "Marks Obtained: ". $obtained."/".$total; ?></h2>
     
     <h1>
     <?php 
     switch($percentage)
     {
           case ($percentage>=90):
            {
                echo "Grade 'A' ";
            break;
            }
            case ($percentage>=80 && $percentage< 90):
                {
                    echo "Grade 'B' ";
                break;
                }
            case ($percentage>=70 && $percentage< 80):
                {
                echo "Grade 'C' ";
                break;
                }
            case ($percentage>=60 && $percentage< 70):
                {
                    echo "Grade 'D' ";
                break;
                }
            case ($percentage>=50 && $percentage< 60):
                {
                    echo "Grade 'E' ";
                break;
                }
            case ($percentage>33.33 && $percentage< 50):
                {
                    echo "Grade 'E-' ";
                break;
                }
            case ($percentage< 33.33):
                {
                    echo "Grade 'F' ";
                break;
                }                
            }

?></h1>
<h2>
<?php 
echo "Percentage ". $percentage."%";
?></h2><hr> 

<h3>

<?php
echo "SUBJECT: SCORE";?><br>
<?php echo "English ", $_POST["English"];?><br>
<?php echo "Hindi " ,$_POST["Hindi"] ;?><br>
<?php echo "Physics ", $_POST["Physics"];?><br>
<?php echo "Chemistry ",$_POST["Chemistry"];?><br>
<?php echo "Math " ,$_POST["Math"];?><br><hr>
<?php
if($_POST["English"]>=75){
    echo $_POST["English"];
    echo " Distinction in English!";
}?><br>
<?php if($_POST["Hindi"]>=75){
    echo $_POST["Hindi"]; echo " Distinction in Hindi!";
}?><br>
<?php if($_POST["Physics"]>=75){
    echo $_POST["Physics"]; echo " Distinction in Physics!";
}?><br>
<?php if($_POST["Chemistry"]>=75){
    echo $_POST["Chemistry"]; echo " Distinction in Chemistry!";
}?>
<?php if($_POST["Math"]>=75){
    echo $_POST["Math"]; echo " Distinction in Math!";
}?>
</h3>


    </body>
</html>