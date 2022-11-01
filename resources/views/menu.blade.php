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
                    <li><a href="">About Us</a></li>
                    <li><a href="">Cakes Menu</a></li>
                    <li><a href="">Order</a></li>
                    <li><a href="">Social Media</a></li>   
                </ul>
            </nav>
        </div>
        <main class="content">
              <section class="Welcome">
              <div class="wlc_content">
                  <h2>Cakes List</h2><br>  
				  <p>Here are some cake types that we have in our cake bakery!</p>
                  <p>Feel free to look and choose what cakes you want to buy!</p>
					<a href="" class="action-btn">Menu</a>
              </div>

                    </table>
                </div>
              
                </section>
        </div>
        <div class="footer">
            <footer>
            <ul>
                <li><img src="instagram.png" alt=""><p>Instagram</p></a></li>
                <li><img src="facebook.png" alt=""><p>Facebook</p></a></li>
                <li><img src="twitter.png" alt=""><p>Twitter</p></a></li>
                <li><img src="telegram.png" alt=""><p>Telegram</p></a></li>
            </ul>
            </footer>
        </div>
    </div>    
</body>
</html>
