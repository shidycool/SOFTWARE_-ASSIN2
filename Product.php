<?php
  session_start();
  $email = $_SESSION['email'];
  $phone_number = $_SESSION['phone_number'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body style="background:linear-gradient(0deg, purple, green, tomato) ;">
<img style="background: linear-gradient(60deg, purple, green, tomato);border-radius: 50%; width: 100px; height: 100px;position: fixed;"src="downloads/logo2.png">
   <nav class ="navbar">
      <a href="signup.php">Sign up</a>
      <a href="login.php">Login</a>
    </nav>
    <div class="header">
        <h1>order processing system</h1>
        <p>Welcome to our advanced order processing system specifically designed for the cereal and legumes industry.
        We understand the unique challenges and complexities of managing orders in this sector, and our system is here to simplify and optimize your operations.
        Seamlessly integrated into your business, our user-friendly platform ensures efficient order fulfillment from start to finish.
        make your order today, at affordable price.</p>
      </div>
      
      <form action ="https://formspree.io/f/xzbqlbzk" method ="POST">
      <div class="container">
        <div class="cereal_all">
          <img src="cereal 1.jpeg" alt="MAIZE">

         <fieldset>
          <select name="maize"  required>
            <option value="Dent Corn">Dent Corn</option>
            <option value="Sweet Corn">brown maize</option>
            <option value="Popcorn">Popcorn</option>
            <option value="Flint Corn">Flint Corn</option>
            <option value="brown maize">brown maize</option>
            <option value="Waxy Corn">Waxy Corn</option>
            
          </select>
        </fieldset>
          <div  class="cereal_1">
            <h3>
              <span>Maize</span><br>
              <span class="price">Ksh. 6,300. 90kg</span>
              <input type="checkbox" name= "Maize">
            </h3>
          </div>
        </div>

      <div class="cereal_all">
          <img src="cereal 2.webp" alt="Beans">
          <div  class="cereal_2">
            <h3>
              <span> Beans</span><br>
              <span class="price">Ksh. 13,000. 90kg</span>
              
              <input type="checkbox" name= "Beans">
              <select name="Beans"  required>
            <option value="Kidney Beans">Kidney Beans</option>
            <option value="Mung Beans">Mung Beans</option>
            <option value="Black Beans">Black Beans</option>
            <option value="Urad Beans">Urad Beans</option>
            <option value="Adzuki Beans">Adzuki Beans</option>
            <option value="Soybeans">Soybeans</option>
            <option value="Pinto Beans">Pinto Beans</option>
            
          </select>
    
            </h3>
          </div>
        </div>
    
        <div class="cereal_all">
          <img src="cereal 3.jpg" alt="Lentils">
          <div  class="cereal_3">
            <h3>
              <span>Lentils </span><br>
              <span class="price">Ksh. 13,250. 90kg</span>
              <input type="checkbox" name= "Lentils">
              <select name="maize"  required>
            <option value="brown maize">Green Lentils</option>
            <option value="brown maize">Brown Lentils</option>
            <option value="brown maize">Red Lentils</option>
            <option value="brown maize">French Lentils</option>
            <option value="brown maize">Black Beluga Lentils</option>
          </select>

            </h3>
          </div>
        </div>

        <div class="cereal_all">
          <img src="cereals 4.webp" alt="GROUNDNUT">
          <div  class="cereal_4">
            <h3>
              <span> Groundnuts</span><br>
              <span class="price">Ksh. 13,000. 90kg</span>
              <input type="checkbox" name= "Groundnuts">
             <select name="groundnut" required>
            <option value="Red Groundnut">Red Groundnut</option>
            <option value="White Big Groundnut">White Big Groundnut</option>
            <option value="White Medium Groundnut">White Medium Groundnut</option>
            <option value="Njugu Mawe">Njugu mawe</option>
            
          </select>
            </h3>
          </div>
        </div>
    
      
      <div class="cereal_all">
          <img src="cereal 6.jpg" alt="Lentils">
          <div  class="cereal_6">
            <h3>
              <span> Greengrams</span><br>
              <span class="price">Ksh. 5,500. 90kg</span>
              <input type="checkbox" name= "Greengrams">
              <select name="maize"  required>
            <option value="brown maize">Whole Green Grams</option>
            <option value="brown maize">Split Moong Dal</option>
            <option value="brown maize">Yellow Mung Beans</option>
            <option value="brown maize"> moong flour</option>
            <option value="brown maize">Sprouted Green Grams</option>
            
          </select>
            </h3>
          </div>
        </div>

        <div class="cereal_all">
          <img src="cereal 7.jpg" alt="Green peas">
          <div  class="cereal_7">
            <h3>
              <span> Green peas</span><br>
              <span class="price">Ksh. 12,500. 90kg bag</span>
              <input type="checkbox" name= "Green peas">
              <select name="maize"  required>
            <option value="brown maize">Snow Peas</option>
            <option value="brown maize">Snow Peas</option>
            <option value="brown maize">Sugar Snap Peas</option>
            <option value="brown maize">Split Green Peas</option>
            <option value="brown maize">Marrowfat Peas</option>
            
          </select>
          <h3>
       </div>
     </div>

          <div class="cereal_all">
          <img src="rice.jpg" alt="Rice">
          <div  class="cereal_7">
            <h3>
              <span> Rice</span><br>
              <span class="price">Ksh. 5,800. 90kg</span>
              <input type="checkbox" name= "Rice">
        <select>
                <option value="White Rice">White Rice</option>
                <option value="Brown Rice">Brown Rice</option>
                <option value="Basmati">Basmati</option>
                <option value="Pishori">Pishori</option>
      </select>
          <h3>
        </div>
       </div>

              <div class="cereal_all">
          <img src="millet.jpg" alt="Millet">
          <div  class="cereal_7">
            <h3>
              <span> Millet</span><br>
              <span class="price">Ksh. 8,100. 90kg</span>
              <input type="checkbox" name= "Millet">
              <select>
              <option value="White Rice">Pearl millet</option>
                <option value="Brown Rice">Finger millet</option>
                <option value="Basmati">Foxtail millet</option>
                <option value="Pishori">Little millet</option>
         </select>
                
           <h3>
        </div>
      </div>

              <div class="cereal_all">
          <img src="sorghum.jpg" alt="Millet">
          <div  class="cereal_7">
            <h3>
              <span> Sorghum</span><br>
              <span class="price">Ksh. 6,200. 90kg</span>
              <input type="checkbox" name= "Millet">
              <select>
                <option value="Grain Sorghum">Grain Sorghum</option>
                <option value="Sweet Sorghum">Sweet Sorghum</option>
                <option value="Forage Sorghum">Forage Sorghum</option>
                <option value="Dual-Purpose Sorghum">Dual-Purpose Sorghum</option>
      </select>
            </h3>
          </div>
        </div>
        
        
        
        <button type="SUBMIT">SUBMIT</button>

        <input type="Email" name="email" style="display:none;" value='<?php echo"$email";?>'>
        <input type="text" name="phone" style="display:none;" value='<?php echo"$phone_number"; ?>'>
      </div>
</form>
</body>
</html>