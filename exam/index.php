<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="contact&login.css">

    <title>index</title>
</head>
<body>
    <div class="body-back">
<section id="home">
         <ul class="menu">
            <li><a href="#home">Home</a></li>
          
            <li><a href="#about">About us</a></li>
             <li><a href="#pricing">pricing</a></li>
              <li><a href="#gallery">Gallery</a></li>
            <li><a href="#employees">employers</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
           
            <li><a href="logout.php">log out</a></li>
        </ul>
  
      <div class="started">

        <p> Welcome Mr/Ms
         <i style="color: blue; font-size: 40px; text-transform: uppercase;">
        <?php 
        $con = new mysqli('localhost', 'root', '', 'ockello_art_gallery');

        $sel = mysqli_query ($con,"SELECT firstname FROM users WHERE email='$_SESSION[email]'");
        $row=mysqli_fetch_assoc($sel);
        echo $row['firstname']; ?></i>
         to <span>ockello arts gallery management </span> website. Here, you will find an extensive collection of artworks designed to captivate and inspire. Art has the unique ability to evoke emotions and offer a moment of tranquility or excitement. Browse our diverse gallery to find pieces that speak to your soul and elevate your experience.</p></div>
         <br>
       
      
        <button class="btn">get started</button> 

        
       </section>
</div>
<section id="about">
    
 <section class="about-us">

        <h1>About Us</h1>
        <div class="first-pic">
             <div class="im1">
            <img src="im12.jpg">
        </div>
        <div class="st-p">
        <p>Welcome to  <span>ockello arts gallery management</span> About the Author: I’m Elyse AHISHAKIYE, gallery artiste professional and creator of this site, Mind Remake Project. I am a licensed professional gallery artiste  (LPGA) and board-approved gallery  supervisor in Rwanda. I have a master’s degree in gallery arts and am currently working in the field. When I’m not writing or doing arts, I’m traveling the world.</p></div>
       
</div>  
        <div class="second-pic">
            <div class="im2">
            <img src="im9.jpg">
        </div>
        <div class="nd-p">
        <p>Our team of certified professionals provides personalized gallery services tailored to meet the unique needs of each client. With years of experience in the field, we utilize evidence-based techniques to support you on your journey to emotional well-being through gallery.</p></div>
        </div>
        <div class="third-pic">
            <div class="im3">
            <img src="im8.jpg">
        </div>
        <div class="rd-p">
        <p>Our mission is to create a educative and supportive gallery where you can explore your feelings and develop the skills needed to handle arts' challenges with confidence and resilience.</p></div>
        
    </div>
      
    </section>
<section id="services">
    
  <section class="services">
        <h1>Our Services</h1>
        <div class="service">
            <h2>Individual's gallery creation</h2>
            <p>Personalized gallery show sessions to help you manage feelling and develop coping strategies tailored to your unique needs.</p>
        </div>
        <div class="service">
            <h2>gallery artist Group<gallery artist /h2>
            <p>Join a gallery artist group sessions to share experiences and learn from others who are also working to manage arts.</p>
        </div>
        <div class="service">
            <h2>Workshops and Seminars</h2>
            <p>Attend our specialized workshops and seminars to gain skill about arts.</p>
        </div>
        <div class="service">
            <h2>Online Resources</h2>
            <p>Access a variety of online arts resources articles, videos, and self-help tools to support your arts management journey.</p>
        </div>
    </section>

</section>
</section>

<section id="contact">
<style type="text/css">
    container {
    background-color: #fff;
    padding: 30px 40px;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 500px;
    transition: all 0.3s ease;
}

.container:hover {
    transform: translateY(-5px);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 15px;
}

label {
    margin-bottom: 5px;
    font-weight: 600;
    color: #555;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="url"],
input[type="number"],
input[type="password"],
input[type="search"],
textarea {
    width: 100%;
    padding: 12px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    transition: all 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus,
input[type="url"]:focus,
input[type="number"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
textarea:focus {
    border-color: #667eea;
    box-shadow: 0 0 8px rgba(102, 126, 234, 0.6);
    outline: none;
}

textarea {
    resize: vertical;
}

input[type="submit"] {
    width: 100%;
    background-color: #667eea;
    color: white;
    padding: 14px 20px;
    margin-top: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    transition: all 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #764ba2;
}

/* Media Queries */
@media (max-width: 600px) {
    .container {
        padding: 20px;
    }

    input[type="submit"] {
        padding: 12px 15px;
    }
}
</style>
  <div class="container">
        <h2>Contact Us</h2>
        <form action="/submit_contact_form" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <input type="submit" value="Send Message">
        </form>
    </div>
   
</section>
<section id="pricing">

     

<style type="text/css">





  img
    {
        width: 300px;
        height: 300px;
        box-shadow: 5px 20px 20px black;
        border-radius: 5px;
        overflow: hidden;
       
    }
    img:hover {
    transform: scale(1.07);
     transition: transform 1s ease;
}
    .cards
    {
        display: flex;
        text-align: center;
        padding: 20px;
        justify-content: space-between;
    }
    table
    {
        width: 40%;
       
    }
  .pay-table
  {
    width: 100%;
    display: flex;
    justify-content: space-between;

  }
  .t{
    width: 60%;
    padding-right: -40px;
    font-size: 20px;
    text-align: center;
   box-shadow: 5px 10px 20px 20px lightgrey;
  }

 input, select
 {
    width: 100%;
    padding: 20px;
 }
 select
 {
    width: 114%;
 }
 .btn{
    border: 1px solid #3498db;
    background: none;
    padding: 10px 20px;
    font-size: 20px;
    font-family:  'montserrat';
    cursor: pointer;
    color: #3498db;
    transition: 0.8s;
    position: relative;
    overflow: hidden;
    transition: 1.5s;

}
.btn:hover{
    background-color: #3498db;
    color: #fff;
    transition: 1.5s;
}


h1, h2 {
    color: #2c3e50;
    text-transform: uppercase;
    font-weight: 700;
    margin: 0 0 10px;
}

h1 {
    font-size: 2.5em;
    text-align: center;
    margin-top: 20px;
}
  h1:after
  {
        content: '';
        background: #333;
        display: block;
        height: 3px;
        width: 150px;
        margin: 10px auto;

  }

h2 {
    font-size: 1.8em;
}

/* Container for the Payment Section */
.payment-container {
    width: 80%;
   
   
    background-color: #ffffff;
    margin: 40px auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    border-left: 5px solid #4CAF50;
    
}

.payment-method {
    margin-top: 30px;
}

.payment-method h2 {
    margin-bottom: 15px;
    border-bottom: 2px solid #4CAF50;
    display: inline-block;
    padding-bottom: 5px;
}

.payment-method p {
    font-size: 1.6rem;
    line-height: 1.8;
    color: #555;
}

/* Paragraph Styling */
p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 25px;
}

/* Responsive Design */
@media (max-width: 600px) {
    .payment-container {
        padding: 20px;
        width: 95%;
    }

    h1 {
        font-size: 2em;
    }

    h2 {
        font-size: 1.5em;
    }



</style>

<div class="payment">
        <div class="payment-method">
        <h1>Payment</h1>
        <p>We offer a variety of payment options to make it easy for you to access our services. Please choose the method that works best for you.</p>
     
            <div class="payment-method">
            <h2>Credit/Debit Card</h2>
            <p>We accept all major credit and debit cards. You can make a secure payment online through our payment portal.</p>
            </div>
<div class="payment-container">
            <div class="cards">
            <div class="STARTER">
            <h3 class="text-uppercase">STARTER</h3>
            <a href="payment.php"><img src="1231-Paresh-Maity.jpg"></a>
            
            <div class="pricing_price">
            <h4 class="text-white">$19</h4>
            <p class="text-white">per month</p>
            </div></div>

     
                  
            <div class="STARTER">
            <h3 class="text-uppercase">PREMIUM</h3>
            <a href="payment.php"><img src="3139-1.jpg"></a>
            <div class="pricing_price">
            <h4 class="text-white">$39</h4>
            <p class="text-white">per month</p>
            </div></div>                          
                                   

                            
            <div class="STARTER">
            <h3 class="text-uppercase">ADVICES</h3>
            <a href="payment.php"><img src="76811d283ee24019bfe38951fe1e56df.jpeg"></a>
            <div class="pricing_price">
            <h4 class="text-white">$59</h4>
            <p class="text-white">per month</p>
            </div></div></div></div>
     
     

<div class="payment-container">
            <div class="cards">
            <div class="STARTER">
            <h3 class="text-uppercase">STARTER</h3>
            <a href="payment.php"><img src="1_6.jpg"></a>
            <div class="pricing_price">
            <h4 class="text-white">$19</h4>
            <p class="text-white">per month</p>
            </div></div>

     
                  
            <div class="STARTER">
            <h3 class="text-uppercase">PREMIUM</h3>
            <a href="payment.php"><img src="ioe5yo8wutsketramhnf.WEBP"></a>
            <div class="pricing_price">
            <h4 class="text-white">$99</h4>
            <p class="text-white">per month</p>
            </div></div>                          
                                   

                            
            <div class="STARTER">
            <h3 class="text-uppercase">ADVICES</h3>
            <a href="payment.php"><img src="iStock-1218961153-1024x683.jpg"></a>
            <div class="pricing_price">
            <h4 class="text-white">$89</h4>
            <p class="text-white">per month</p>
            </div></div></div></div>
                             
    
<div class="payment-container">
            <div class="cards">
            <div class="STARTER">
            <h3 class="text-uppercase">STARTER</h3>
            <a href="payment.php"><img src="Morrisseau-Collection-Update-Magazine-Header.PNG"></a>
            <div class="pricing_price">
            <h4 class="text-white">$19</h4>
            <p class="text-white">per month</p>
            </div></div>

     
                  
            <div class="STARTER">
            <h3 class="text-uppercase">PREMIUM</h3>
            <a href="payment.php"><img src="people-in-gallery-time-lapse-blur-jr-p1030813.jpg"></a>
            <div class="pricing_price">
            <h4 class="text-white">$39</h4>
            <p class="text-white">per month</p>
            </div></div>                          
                                   

                            
            <div class="STARTER">
            <h3 class="text-uppercase">ADVICES</h3>
            <a href="payment.php"><img src="thumb.jpeg"></a>
            <div class="pricing_price">
            <h4 class="text-white">$59</h4>
            <p class="text-white">per month</p>
            </div></div></div></div>
     
              


<div class="payment-container">
            <div class="cards">
            <div class="STARTER">
            <h3 class="text-uppercase">STARTER</h3>
            <a href="payment.php"><img src="1631656.jpg"></a>
            <div class="pricing_price">
            <h4 class="text-white">$19</h4>
            <p class="text-white">per month</p>
            </div></div>

     
                  
            <div class="STARTER">
            <h3 class="text-uppercase">PREMIUM</h3>
            <a href="payment.php"><img src="Mastercard-Symbol.jpg"></a>
            <div class="pricing_price">
            <h4 class="text-white">$39</h4>
            <p class="text-white">per month</p>
            </div></div>                          
                                   

                            
            <div class="STARTER">
            <h3 class="text-uppercase">ADVICES</h3>
            <a href="payment.php"><img src="zero-balance-credit-card.jpg"></a>
            <div class="pricing_price">
            <h4 class="text-white">$59</h4>
            <p class="text-white">per month</p>
            </div></div></div></div>
     
     </div>   
</section>
<section id="gallery">

<style type="text/css">
    .xyz
    {
        width: 100%;
        height: 330px;
        display: flex;
    }
    .xy{
        width: 25%;
        margin-top: 20px;
        border-left: 5px solid #4CAF50;
        border-bottom-left-radius: 8px;
        border-top-left-radius: 9px;
    }
    .xy img
    {
         padding: 10px;
          border-bottom-left-radius: 8px;
        border-top-left-radius: 9px;
        margin-top: 0;
    }
    .xzy
    {
         width: 100%;
        height: 330px;
        display: flex;
    }
    .zyx
    {
         width: 100%;
        height: 330px;
        display: flex;
    }
    .ssd
    {
         width: 100%;
        height: 300px;
        display: flex;
    }
</style>

    <div class="xyz">
    <div class="xy">
        <img src="im1.jpg">
    </div>

    <div class="xy">
        <img src="im2.jpg">
    </div>

    <div class="xy">
        <img src="im3.jpeg">
    </div>
    <div class="xy">
        <img src="im4.jpg">
    </div>
    </div>
    <div class="xzy">
        
        <div class="xy">
        <img src="im5.jpg">
    </div>

    <div class="xy">
        <img src="im6.jpg">
    </div>

    <div class="xy">
        <img src="im8.jpg">
    </div>

    <div class="xy">
        <img src="im7.jpg">
    </div>

    </div>
    <div class="zyx">
        
        <div class="xy">
        <img src="im9.jpg">
    </div>

    <div class="xy">
        <img src="im12.jpg">
    </div>

    <div class="xy">
        <img src="Ancestral+Dreams+-+Teacher's+Guide-COVER.jpg">
    </div>

    <div class="xy">
        <img src="Markowicz.jpeg">
    </div>
    </div>

    <div class="ssd">
        
        <div class="xy">
        <img src="im11.jpeg">
    </div>

    <div class="xy">
        <img src="im5.jpg">
    </div>

    <div class="xy">
        <img src="Markowicz.jpeg">
    </div>

    <div class="xy">
        <img src="im10.jpg">
    </div>
    </div>
</section>
<section id="employees">
    

    <style type="text/css">
        


.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 600px;
    padding-top: 100px;
    margin-top: 40px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
    font-weight: bold;
}

input {
    margin-bottom: 15px;
    padding: 20px;
    border: 1px solid #black;
    border-radius: 8px;
}

button {
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}   
.emp
{
      width: 100%;
    height: 150vh;

  background-color: #82ae844a;
}
  .select
  {
    float: right;
    margin-top: -35%;
    font-family: sans-serif;
  }
 table
  {
    text-align: center;
    width: 50%;
  }.dd{
    background-color: seagreen;
  }
    </style>

    <div class="emp">
    <div class="container">
        <h2>Employers Registration Form</h2>
        <form id="employeeForm" method="POST" >
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="position">Position:</label>
            <input type="text" id="position" name="position" required>

            <label for="date">hired date:</label>
            <input type="date" id="date" name="hired_date" required>

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required>
            <label for="Salary">Salary:</label>
            <input type="text" id="Salary" name="Salary" required>
            <button type="submit" name="send">Register</button>
            <h5><?php  
    
     $db= new mysqli('localhost','root','','ockello_art_gallery');
     if (isset($_POST['send'])) {
         
     
    $name = $_POST['name'];
    $hired_date = $_POST['hired_date'];
    $position = $_POST['position'];
    $department = $_POST['department'];
    $salary= $_POST['Salary'];
    $inserts="INSERT INTO employees VALUES('','$name','$position','$hired_date','$department','$salary' )";
        $c=mysqli_query($db,$inserts);
    if ($c) {
          echo "registered";
    } else {
        echo "failed".mysqli_error($db);
    }}
    
     ?>
</h5>
        </form>

    </div>
    <div class="select">
            <?php
             $db= new mysqli('localhost','root','','ockello_art_gallery');
             $slection=mysqli_query($db,"SELECT * FROM employees");

             ?>

            <table border="1" cellspacing="0">
                <tr>
    <td colspan="8" style="text-transform: uppercase;
    font-size: 20px; color: white;background-color: grey; ">table list that shows our employees and thier salaries</td>
                </tr>
                <tr class="dd"><td>N<sup>o</sup></td> 
                 <td>Names</td>
                 <td>Position</td>
                 <td>Hired date</td>
                 <td>Department</td>
                 <td>Salaries</td>
                 <td>Edit</td>
                 <td>Fire</td>
                </tr>
                <tr>
                    <?php while($row=mysqli_fetch_assoc($slection)){ ?>

                        <td><?php echo $row['employee_id']; ?> </td>
                        <td><?php echo $row['name']; ?> </td>
                        <td><?php echo $row['position']; ?> </td>
                        <td><?php echo $row['hire_date']; ?> </td>
                        <td><?php echo $row['department']; ?> </td>
                        <td><?php echo $row['salary']; ?> </td>
                        <td> <a href="edit.php?edit=<?php echo $row['employee_id']; ?>">edit</a> </td>
                        <td><a href="delete.php?delete=<?php echo $row['employee_id']; ?>">Delete</a> </td>

                </tr>
                <?php } ?>
                
            </table>

        </div>
</div>


    <script src="script.js">
        
    document.getElementById('employeeForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const position = document.getElementById('position').value;
    const department = document.getElementById('department').value;

    const table = document.getElementById('employeeTable');

    const row = table.insertRow();
    const cell1 = row.insertCell(0);
    const cell2 = row.insertCell(1);
    const cell3 = row.insertCell(2);
    const cell4 = row.insertCell(3);

    cell1.innerText = name;
    cell2.innerText = email;
    cell3.innerText = position;
    cell4.innerText = department;

    document.getElementById('employeeForm').reset();
});


    </script>


</section>
</body></html>
