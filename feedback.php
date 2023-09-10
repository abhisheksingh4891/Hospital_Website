
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="feedbac.css">
</head>
<body>
    <div>
        <img class="logo" src="image/vcare2.png" alt="went wrong" width="50px" height="50px">
    <ul class="nav-bar">
        <li><a class="home" href="home.html">Home</a> </li>
        <li class="dipart">Department
        <div class="sub-list">
            <ul>
                <li><a href="cardiology.html">Cardiologist</a></li>
                <li><a href="orthopedic.html">Orthopedic</a></li>
                <li><a href="neurology.html">Neurologists</a></li>
                <li><a href="nephrology.html">Nephrologists</a></li>
                <li><a href="dentist.html">Densist</a></li>
                <li><a href="eyecare.html">Eye-care</a></li>
                <li><a href="genral.html">General</a></li>
                
            </ul>
        </div>
    </li>
    <!-- <li><a class="apoint" href="http://localhost/abhishekproject/project.php">Appointment</a></li> -->
    <li class="dipart"> Appointment
            <div class="sub-list">
                <ul>
                    <li><a href="http://localhost/abhishekproject/project.php">Physical</a></li>
                    <li><a href="http://localhost/abhishekproject/project2.php">Online</a></li>
   
                </ul>
            </div>
        </li>
    <li><a class="make" href="http://localhost/abhishekproject/feedback.php">Feedback</a></li>
    <li><a class="contact" href="contact.html">Contact us</a></li>
    <li><a class="about" href="about.html">About</a></li>
    </ul>
</div>
    <div class="container">
        <form action="feedconnect.php">
            <div>
            <h1 class="heading">Feedback</h1>
        </div>
        
           <p class="name"> Name : <input type="text" name="patient_name" required placeholder="Enter full name"> </p>
           <p class="number">Mobile number : <input type="number" name="patient_number" width="90px" required placeholder="Enter mobile number"></p>
           <p class="email">Email : <input type="email" name="email" id="email"></p>
           <p class="department">Department : <input type="text" name="department" required placeholder="Enter department name"></p>
               <!-- <select name="department" id="department" required>
                <option value="">--------------------------------------------------Select Department-----------------------------------------------------</option>
                   
               </select>
           </p> -->
           <p class="message">
               Message : <textarea name="patient_message" id="message" cols="80" rows="10"></textarea>
           </p>
    
           <p class="submit">
               <input type="submit" name="SUBMIT" value="Submit">
           </p>

        </form>
    </div>
</body>
</html>
