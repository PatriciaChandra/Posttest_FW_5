<?php
$conn = mysqli_connect("localhost", "root", "", "cake_bakery");
$select_sql = "SELECT *FROM cakes";
$result = $conn->query($select_sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cia's Cake Bakery</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li>Framework</li>
                    <li>A20</li>
                     
                </ul>
            </nav>
        </div>
        <main class="content">
              <section class="Welcome">
              
              <div class="wlc_content">
                  <h1>Welcome</h1><br></h2>To Cia's Cake Bakery!</h2><br><br>   
				  <p> This website is one of our platform on selling and introducing our cake products. 
					We of course sell the best cake with beautiful decorations and delicious taste in affortable price.
                    Click below to continue to main page
                </p>
					<a href="/welcome" class="action-btn">Home Page</a>
                </div>
                  
                </section>
        </div>
    </div>    
</body>
</html>
