<!DOCTYPE html>
<html lang="en">
    <head>
         <link rel="shortcut icon" href="./favicon.png" type="image/x-icon" />

        <meta charset="utf-8">
        <title>MVA Inc.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/styles/reset.css">
        <link rel="stylesheet" href="public/styles/main.css">
        <link rel="stylesheet" type="text/css" href="public/styles/icon.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300" rel="stylesheet">
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

                        <nav id="navigation" class="navbar"> 
                                <div id="logo-cont"><img id="mobile-nav-logo" src="public/images/navbar-logo.png"></div>
                            <span class="icon-menu" ></span>
                                <ul class="menu"> 
                                    <li id="nav-logo"><img id="logo-img" src="public/images/burg-logo-blur.png"></li>

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
                <img src="public/images/splash_img.png" alt="skyline" id="splash-image"/>
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
                    <p>Mills Value Adviser, Inc. is a family run business with a focus making investments that are superior to the market over the long run.  When we invest for our clients, we do so with our own money too because we only do for others what we are confident enough to it for ourselves.</p>
                    
                
            </section>
            <section id="principles" class="content-section">
                <div id="section-title">
                    <h1>Investment Principles </h1>
                    <span> — </span>
                </div>
                <p>We believe that the stock market is more a market of people than a market of stocks.   Through the meticulous study of investors in business cycles of the past, we seek to leverage the predictability of human behavior for the benefit of our clients no matter what the market environment.</p>   

                <div>
                    <a class="principles-container" href="principles.html"><img class="principles-image grow"
                        src="public/images/strat-img.jpeg"></a>
                </div>
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
                            <div class="bio-text">
                                    <p class="bio-name">Cam Mills</p> 
                                    Mr. Mills has served as portfolio manager since 2007.  Mills joined Mills Value Adviser, Inc. in 2004 as a research analyst focusing on algorithmic pattern analysis and portfolio construction.  In addition to his training in equity research, Cam has also studied music composition.
                            </div>
                        </div>
                        <div class="bio-text-mobile">
                           <p class="bio-name">Cam Mills</p> 
                            Mr. Mills has served as portfolio manager since 2007.  Mills joined Mills Value Adviser, Inc. in 2004 as a research analyst focusing on algorithmic pattern analysis and portfolio construction.  In addition to his training in equity research, Cam has also studied music composition.</div>

                    </div>

                    <div class="photo-container">
                        <img src="public/images/man2.jpg" alt="man 2" class="headshots">
                        <div class="middle">
                            <div class="bio-text">
                                <p class="bio-name">Charles Mills<p>
                                Mr. Mills co-founded Mills Value Adviser, Inc. in 1987.  Mr. Mills began his career in 1974 as a stock broker and would eventually rise to serve as Chairman of Anderson and Strudwick, a regional broker-dealer based out of Richmond, from 1987 to 2000.  Today, Mr. Mills has over 40 years of investment experience and overseas a host of real estate and private placement offerings.</div>
                        </div>
                        <div class="bio-text-mobile">
                                <p class="bio-name">Cam Mills</p> 
                            Mr. Mills co-founded Mills Value Adviser, Inc. in 1987.  Mr. Mills began his career in 1974 as a stock broker and would eventually rise to serve as Chairman of Anderson and Strudwick, a regional broker-dealer based out of Richmond, from 1987 to 2000.  Today, Mr. Mills has over 40 years of investment experience and overseas a host of real estate and private placement offerings.</div>
                    </div>

                </div>


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
                <section id="info" class="content-section">

                 <p><br/>1001 N 19th St  Suite 1200<br/>

                        Arlington, VA  22209<br/>

                        804.640.8649  <br/>

                        cam.mills@millsvalue.com
                </p>

            </section>
        </section>
      </body>
    </html>

  

