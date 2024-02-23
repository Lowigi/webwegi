<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
<body>
    <header>
		<nav class="navbar navbar-light justify-content fs-1 mb-3" style="background-color: #89cff0;">
		<h1>Student Registration</h1>
    <div class= "btn-right"> 
	
			<a href="add_new.php" class="btn btn-dark">Add New</a>
			<a href="index2.php" class="btn btn-dark">Student List</a>
			<a href="aboutus.php" class="btn btn-dark">About us</a>
			<a href="logout.php" class="btn btn-dark">Logout </a>
          </div>
        </nav>
    </header>
</head>
<body>
<center>
<h1 class="heading"> Programmers of BSIT 3C </h1>

<!-- review section  -->

<section class="review"><link rel="stylesheet" type="text/css" href="css/aboutus.css">

    <div class="box">
        <div class="student">
            <div class="student-info">
                <img src="image/wegi.jpg" alt="width="400" height="400">
                <div class="info">
                    <h3>Louie jhay Jimenez</h3>
                    <span>Programmer</span>
                </div>
            </div>
        </div>
    </div>
<br>

    <div class="box">
        <div class="student">
            <div class="student-info">
                <img src="image/andy.jpg" alt=""width="400" height="400">
                <div class="info">
                    <h3>Andy dave Espinosa</h3>
                    <span>Programmer</span>
                </div>
            </div>
        </div>
    </div>
    </div>   
    <div class="box">
        <div class="student">
            <div class="student-info">
                <img src="image/pava.jpg" alt=""width="400" height="400">
                <div class="info">
                    <h3>Rannille Pava</h3>
                    <span>Programmer</span>
                </div>
            </div>
        </div>
    </div>
    </div>   
    </center>
    <br>
    <?php include 'footer.php'; ?>
</body>
</html>