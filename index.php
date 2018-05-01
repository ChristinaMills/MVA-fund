<?php
if($_POST["message"]) {
    mail("chrimills@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MVA fund</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/styles/reset.css">
        <link rel="stylesheet" href="public/styles/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
        <!-- <script>
        document.querySelector("#submit-button").addEventListener("click", function(event) {
        event.preventDefault();
        }, false);
        </script> -->
        <script src="index.js"></script> 

        <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700|Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    </head>
    <body>
        <header>
            <!-- <div id="logo"><a href="/main"></a></div> -->
                <div id="nav-container">
                    <!-- <div id="ham"><a id="showMenu" href="#">menu ham</a></div> -->
                    <nav id="navigation" class="navbar"> 
                        <ul id="menu">
                            <!-- <li class="tab" data-content="main"><a href="/main">work</a></li> -->
                            <li class="tab" data-content="about"><a href="#about">ABOUT</a></li>
                            <li class="tab" data-content="strategies"><a href="#strategies">STRATEGIES</a></li>
                            <li class="tab" data-content="people"><a href="#people">PEOPLE</a></li>
                            <li class="tab" data-content="contact"><a href="#contact">CONTACT</a></li>
                            <li class="tab" data-content="info"><a href="#info">INFO</a></li>
                        </ul>
                    </nav>
                </div>
        </header>

        <!-- IMAGE -->
        <section id="splash-image-cont">
            <div>
                <img src="public/images/ship1.jpg" alt="ship" id="ship"/>
            </div>
        </section>

        <!-- MAIN CONTENT -->
        <section id="main-content">

        
            <section id="about" class="content-section">
                
                    <div id="section-title">
                        <h1>About MVA Funds</h1>
                        <span> — </span>
                    </div>
                    
                    <!-- change to use ::after pseudo selector? -->
                    <p>"Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                    
                
            </section>
            <section id="strategies" class="content-section">
                <div id="section-title">
                    <h1>Strategies </h1>
                    <span> — </span>
                </div>
                    
                    <p>
                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."
                    </p>
            </section>

            <section id="people" class="content-section">
                <div id="section-title">
                    <h1>People </h1>
                    <span> — </span>
                </div>                   
                <div id="photos-box">
                <!-- TODO descriptions -->
                    <div class="photo-container">
                        <img src="public/images/man1.jpg" alt="man 1" class="headshots">
                    </div>
                    <div class="photo-container">
                        <img src="public/images/man2.jpg" alt="man 2" class="headshots">
                    </div>
                </div>
            </section>
            <section id="contact" class="content-section">
                <div id="section-title">
                        <h1>Contact </h1>
                        <span> — </span>
                </div>
                <!-- TODO contact form goes here -->
               <!-- <div id="form-container">
                    <form method="post" action="send_form.php" id="contact-form">
                        <fieldset>
                            <label for="senderName">NAME:</label>
                            <input type="text" name="senderName">
                            <label for="senderEmail">E-MAIL:</label>
                            <input type="text" name="senderEmail">
                            <label for="phone" >PHONE NUMBER:</label>
                            <input type="text" name="phone">
                            <label for="message">MESSAGE:</label>
                            <textarea rows="4" cols="50" name="message" form="usrform">
                            </textarea>
                        </fieldset>
                        <button id="submit-button" type="submit">SUBMIT</button>
                    </form>
                </div> -->
                <form method="post" action="index.php">
                        <textarea name="message"></textarea>
                        <input type="submit">
                </form>
            </section>
            <section id="info" class="content-section">
                <div id="section-title">
                    <h1>Info </h1>
                    <span> — </span>
                </div>
                
                <p>Address and phone number</p>
                
            </section>

        </section>
      </body>
    </html>

  
