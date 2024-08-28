<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> STATION 6, BATASAN </title>
    <link rel="shortcut icon"  href="images/logo1-removebg.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/progress.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/de40672674.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head> 
<body>

    <div class="main">

        <div class="btntotop">
            <a href="home2.html#CONTACTS"><span class="fa-solid fa-square-caret-left"></span></a> 
        </div>

        <div class="head">
            <p class="head_1">COMPLANT <span>PROGRESS</span></p>
            <p class="head_2">"PATIENCE IS A VIRTUE"</p>
        </div>

        <ul>
            <li>
                <i class="icon uil uil-telegram-alt"></i>
                <div class="prog one">
                    <p>1</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">COMPLAINT SENT</p>
            </li>
            <li>
                <i class="icon uil uil-spinner-alt"></i>
                <div class="prog two">
                    <p>2</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">PROCESSING  </p>
            </li>
            <li>
                <i class="icon uil uil-comment-check"></i>
                <div class="prog three">
                    <p>3</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">RECEIVE</p>
            </li>
            <li>
                <i class="icon uil uil-map-marker-shield"></i>
                <div class="prog four">
                    <p>4</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">GO TO OFFICE</p>
            </li>
            <li>
                <i class="icon uil uil-comments"></i>
                <div class="prog five">
                    <p>5</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">COOPERATE </p>
            </li>
            <li>
                <i class="icon uil uil-balance-scale"></i>
                <div class="prog six">
                    <p>6</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">GO TO TRIAL</p>
            </li>
           
           
        </ul>
        <div class="input">
            <input type="submit" value="PROGRESS INFO" onclick="openPopup()" class="btns">
            <div class="pop-up" id="popup">
              <img src="Images/ques.png">
              <h2>Complaint Step info</h2>
              <p>STEP 1: COMPLAINT SENT - You sent your complaint in our office <br> STEP 2: PROCESSING - The complaint is being process by our system<br>
                 STEP 3: RECEIVE - The complaint is read and ready for more further investigation <br> 
                 STEP 4: GO TO OFFICE - You should go to the police station 6 for complaint assistance and to gather more information <br>
                 STEP 5: COOPERATE - You need to cooperate by providing evidences and saying only true information <br>
                 STEP 6: GO TO TRIAL - The court is the one who will provide a appropriate verdict to the defenfant.
                </p>
                  <button type="button" onclick="closePopup()">Okay</button>
            </div>
          </div>
    </div>

    <script src="main.js"></script>

</body>
</html>