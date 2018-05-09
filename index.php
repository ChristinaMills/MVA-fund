<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MVA fund</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/styles/reset.css">
        <link rel="stylesheet" href="public/styles/main.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
        <script src="script/validate-form.js"></script>
        


        <script src="index.js"></script> 


    </head>
    <body>
        <header>
            <!-- <div id="logo"><a href="/main"></a></div> -->
                <div id="nav-container">
                    <!-- <div id="ham"><a id="showMenu" href="#">menu ham</a></div> -->
                    <nav id="navigation" class="navbar"> 
                        <ul class="menu">
                            <li id="nav-logo"><img src="public/images/navbar-logo.png"></a></li>
                            <li class="tab" data-content="about"><a href="#about">ABOUT</a></li>
                            <li class="tab" data-content="principles"><a href="#principles">PRINCIPLES</a></li>
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
                <img src="public/images/ship3.jpg" alt="ship" id="ship"/>
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
            <section id="principles" class="content-section">
                <div id="section-title">
                    <h1>Investment Principles </h1>
                    <span> — </span>
                </div>
                    
                    <p>
                        <a href="principles.html">The Link</a>
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
                        <div class="middle">
                            <div class="text">This person started out doing this, did that and is fantastic because of the other thing.</div>
                        </div>
                    </div>
                    <div class="photo-container">
                        <img src="public/images/man2.jpg" alt="man 2" class="headshots">
                        <div class="middle">
                            <div class="text">This person started out doing this, did that and is fantastic because of the other thing.</div>
                        </div>
                    </div>
                </div>
<!-- 

                <div class="container">
                    <img src="img_avatar.png" alt="Avatar" class="image" style="width:100%">
                    <div class="middle">
                      <div class="text">John Doekljasflaksdfjl;kasjf a;lsjkf aslkjfal;skdjf asljal;skfj la;sj flaskjf alsjf alskjfs;la kfjasl;fkjasldfj sl;ajf a;lsjf asl;f jlas;j flsak jf</div>
                    </div>
                </div> -->


            </section>
            <section id="contact" class="content-section">
                <div id="section-title">
                        <h1>Contact </h1>
                        <span> — </span>
                </div>
                <!-- TODO contact form goes here -->

                <div id="form-container">
                    <form id="contact-form" action="">

                        <label for="name" id="name_label">NAME</label>
                        <label class="error" for="name" id="name_error">this field is required</label>
                        <br /> <input type="text" name="name" id="name" value="" class="text-input" placeholder="NAME" />


                        <br />
                        <label for="email" id="email_label">E-MAIL</label>
                        <label class="error" for="email" id="email_error">this field is required</label>
                        <label class="error" for="email" id="email_invalid_error">please insert a valid email</label>
                        <br /> <input type="email" name="email" id="email" value="" class="text-input" placeholder="E-MAIL" />


                        <br />
                        <label for="message">MESSAGE</label>
                        <label class="error" for="message" id="message_error">this field is required</label>
                        <br /> <textarea name="message" id="message" rows="8" class="text-input" placeholder="Message"></textarea>


                        <br />
                        <input name="submit" id="submit" value="SUBMIT" type="submit" class="subbutton">

                    </form>

                </div>


            </section>
            <section id="info" class="content-section">
                <div id="section-title">
                    <h1>Info </h1>
                    <span> — </span>
                </div>
                
                <p><br/>1001 N 19th St  Suite 1200<br/>

                    Arlington, VA  22209<br/>
                    
                    804.640.8649  <br/>
                    
                    cam.mills@millsvalue.com
                </p>
                
            </section>

        </section>
      </body>
    </html>

  

