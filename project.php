
<!DOCTYPE html>
<html>

<head>
    <title>
        Appointment form
    </title>
    <link rel="stylesheet" href="appointment.css">
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
<li><a class="make" href="http://localhost/abhishekproject/feedback.php">Feedback</a></li>
<li><a class="contact" href="contact.html">Contact us</a></li>
<li><a class="about" href="about.html">About</a></li>
</ul>
</div>
    <div class="container">
        <form action="connect.php">
            <h1 class="heading">APPOINTMENT FORM</h1>
            <fieldset class="contact">
                <legend>
            <h2>Contact details</h2>
        </legend>
        
            <P class="name"> Name : <input type="text" name="patient_name" required placeholder="Enter your name"></P>
            <P class="number"> Mobile Number : <input type="number" name="patient_number" required placeholder="Enter your mobile number"></P>
            <P class="gender"> Gender : <input type="text" name="gender" required placeholder="Enter your Gender"></P>
           
            <P class="address"> Address : <textarea name="patient_address" id="address" cols="100" rows="10"required placeholder="Enter your address"></textarea> </P>
            <p class="email">Email : <input type="email" name="email" id="email"required placeholder="Enter your Email"></p>
            <p class="pincode">Pincode : <input type="number"name="pincode" id="pincode"required placeholder="Enter your pincode" ></p>
        </fieldset>
        <fieldset class="medical">
            <legend>
                <h2>
                    Medical-conditions
                </h2>
            </legend>
            <p class="problem">
                Describe problem : <textarea name="problem" id="address" cols="100" rows="10"required placeholder="Describe problem"></textarea>
            </p>
            <P class="doctor">
                Doctor name : <input type="text" name="doctor" id="doctor" required placeholder="Enter doctor's name">

            </P>
            <P class="date">
                Appointment date : <input type="date" name="appointment_date" id="date">
            </P>
            
        </fieldset>
        <p class="paynow">  <input type="submit" value="Submit"></p>
        </form>
    </div>
    
</body>
</html>  

