<?php 
session_start();
      if(!isset($_SESSION['status'])) 
      header("Location: index.php");  

?>
<html>
    <head>
        <title>
            CRMS
        </title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>



        <header>
            <a href ="#" class = "logo">Logo</a>
            <div class = "menu-toggle"></div>
            <nav>
                <ul>
                    <li><a href="homepage.php" class="active">Home</a></li>
                    <li><a href="Employee.php">Employees</a></li>
                    <li><a href="criminal.php">FIR</a></li>
                    <li><a href="criminaltable.php">Criminals</a></li>
                    <li><a href="navbarmenu\diagonalnav.php">IPC</a></li>
                    <li><a href="index.php">Log out</a></li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
        <div class="body">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class = "imag">
            <button class = "dnews">Daily News</button>
            <br><br>
            <div class ="test">         
                <font size = "4" color = "" face = "verdana"> <marquee direction="left" scrollamount = "05">|| Don't terrorise us on tax: Rafale's engine maker tells Rajnath Singh || Karnataka govt restricts media coverage inside state assembly || Goa replaces traditional 100 dial with new 112 || Shivakumar case: Karnataka co-op bank president appears before ED ||</marquee></font>
            </div>
        </div>
       

        
    </body>
</html>

<style type="text/css">

body{
    background-image: linear-gradient(rgb(226, 231, 226,0.1), rgba(240, 242, 240,0.1)), url(mapo4.jpg);
    position: absolute;
    background-repeat: no-repeat;
    margin-left: 0%;
    margin-top: 1%;
    width: 100%;
    height: 2000px;
}

.imag{
    background-image: linear-gradient(rgb(226, 231, 226,0.3), rgba(240, 242, 240,0.4)), url(csmt.jpg);
    position: absolute;
    background-repeat: no-repeat;
    background-size: cover;
    width: 1350px;
    height: 800px;
    margin-top: -1.8%;
    margin-left: 0%;
    border-style: solid;
}



</style>