<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <label class="logo">University of Engineering & Management, Kolkata</label>
        <ul>
            <li><a href="">HOME</a></li>
            <li><a href="">CONTACT US</a></li>
            <li><a href="">ADMISSION</a></li>
            <li><a href="login.php" class="btn btn-success">LOGIN</a></li>
        </ul>
    </nav>

    <div class="section1">
        <label class="img_text">Good Education, Good Jobs</label>
        <img class="main_img" src="joanna-kosinska-1_CMoFsPfso-unsplash (1).jpg">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="green-chameleon-s9CC2SKySJM-unsplash.jpg">
            </div>

            <div class="col-md-8">
                <h1>Welcome to UEM, Kolkata</h1>
                <p>University of Engineering & Management (UEM) aims to provide an international ambience and exposure with innovative teaching techniques and courses which are tailor-made (technical & soft skills) for the job market giving the students the winning edge and competitive advantage during placements.</p>
            </div>
        </div>
    </div>

    <center>
        <h1>About Us:</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="artem-maltsev-0CvHQ62gwY8-unsplash.jpg">
            </div>

            <div class="col-md-4">
                <img class="teacher" src="pexels-祝-鹤槐-716276.jpg">
            </div>

            <div class="col-md-4">
                <img class="teacher" src="pexels-fauxels-3184658.jpg">
            </div>

            <p>
                1. UEM Kolkata has won “AAA” category (first 10 institutes nationally among all institutes of India including all IITs and NITs) in NPTEL program (IIT Kharagpur and IIT Chennai). <br>
                2. UEM Kolkata student has stood 1st amongst all students of India in NPTEL program. <br>
                3. UEM Kolkata and UEM Jaipur organized UEMCON-2016 in Columbia University, New York, USA in association with IEEE New York, IEEE USA and IEEE Region 1. <br>
                4. Highest salary offer at UEM Kolkata is Rs 72 lakhs per annum. <br>
                5. The University is a partner institution in the prestigious European Union sponsored project ‘FRACTION’ & ‘UNNAT BHARAT ABHIYAAN’ of Govt. of India. <br>
                6. UEMK has been recognised in the band “Performer” under the category “University & Deemed to be University (Private/Self Financed) (Technical)” in ATAL RANKING OF INSTITUTIONS ON INNOVATION ACHIEVEMENTS (ARIIA) 2021, a flagship program of the Ministry of Education, Government of India.
            </p>
        </div>
    </div>

    <center>
        <h1>Our Courses:</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="BTech-in-Computer-Science.jpg">
                <h3>B.Tech</h3>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="bba.jpeg">
                <h3>BBA</h3>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="mbaFEA-1.jpeg">
                <h3>MBA</h3>
            </div>
        </div>
    </div>

    <center>
        <h1 class="adm">Any Doubts? Ask us:</h1>
    </center>

    <div align="center" class="admission_form">
        <form>
            <div class="adm_int">
                <label class="label_text">Name:</label>
                <input class="input_deg" type="text" name="">
            </div>

            <div class="adm_int">
                <label class="label_text">E-mail ID:</label>
                <input class="input_deg" type="text" name="">
            </div>

            <div class="adm_int">
                <label class="label_text">Phone No.:</label>
                <input class="input_deg" type="text" name="">
            </div>

            <div class="adm_int">
                <label class="label_text">Message:</label>
                <textarea class="input_txt"></textarea>
            </div>

            <div class="adm_int">
                <input class="btn btn-primary" id="submit" type="submit" value="Send">
            </div>
        </form>
    </div>

    <footer>
        <h3 class="footer_text">All @copyright reserved under IEM&UEM Group</h3>
    </footer>
</body>
</html>