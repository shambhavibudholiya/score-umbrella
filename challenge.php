<html>
    
    <head>
        <title>STUDENT PORTAL</title>
        <link rel="stylesheet" type="text/css" href="style_challenge.css">
    </head>
    <body>
        <h1>Welcome Students</h1>
              <form action="marksheet.php" method="post">
            <hr>
            Name: <input type="text" name="name">
            Class: <input type="text" name="class">
            Roll No.: <input type="text" name="rollno">
            <br>
            <br>
            
            Subjects<br>
            <br>
            English:<input type="number" name="English">
            Hindi:<input type="number" name="Hindi">
            Physics:<input type="number" name="Physics">
            Chemistry:<input type="number" name="Chemistry">
            Math:<input type="number" name="Math">
            <br>
            Gender:
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
            <hr>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <hr>
            <tr>
                    <td colspan="2" style="text-align:center">
                    <a href="marksheet.html"> 
                    <input type="submit" value="submit">
                    </td> 
                    </a> 
                    </tr>

        </form>
        
           
        
        
    </body>
</html>

