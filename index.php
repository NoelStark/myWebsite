<!DOCTYPE html>
<?php
session_start();?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Responsive Navbar</title>
        <meta name="viewport" 
        content="width=device-width, initial-
        scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/32e05b2de2.js"></script>
    </head>
    <body>
  
        
        <nav class="nav-area">
            <!---->
            
            <input type="checkbox" id="check">
        
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>

            <div class="navbar">
                <a href="index.php"><img src="bilder/nedladdning.png"></a>
            </div>
            
            
            <ul id = "menu">
            
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Cases</a></li>
                <li><a href="#games">Updates</a></li>

                
        <?php
        if(isset($_SESSION['loggedin']))
        {
           echo '<li><a href="logout.php"  id="login">Log out</a></li>';
        }
        else
        {
            echo '<li><a href="login.php" id="logisn">Log in</a></li>';
            echo '<li><a href="signup.php" id="logisn">Sign Up</a></li>';
        }
        ?>
               
                
                </div>
            </div>
                
            </ul>
        </div>
        </nav>
        
        <section id="home">
            <h1>CSGO</h1>
        </section>

        <section id="about">
        <h1>Cases</h1>
        <br>
        
        <div class="container">
        <div class="case1">
            <h2>The Dreams & Nightmare Case</h2>
            <div class="trailer">
                <video src= ""controls="true" autoplay id = "change" ></video>
            </div>
            <div class="mySlidesfade">
                <div class="numbertext">1/17</div>
                <img src="bilder/ak47.png" class="img">
                <div class="red"><p>AK47 | Nightwish</p></div>  
            </div>
            <div class="mySlidesfade">
                <div class="numbertext">2/17</div>
                <img src="bilder/mp9.png" class="img">

                <div class="red"><p>MP9 | Starlight Protector</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">3/17</div>
                <img src="bilder/dual.png" class="img">

                <div class="pink"><p>Dual Berettas | Melondrama</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">4/17</div>
                <img src="bilder/famas.png" class="img">

                <div class="pink"><p>Famas | Rapid Eye Movement</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">5/17</div>
                <img src="bilder/mp7.png" class="img">

                <div class="pink"><p>MP7 | Abyssal Apparition</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">6/17</div>
                <img src="bilder/m4a1.png" class="img">

                <div class="purple"><p>M4A1-S | Night Terror</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">7/17</div>
                <img src="bilder/usp.png" class="img">

                <div class="purple"><p>USP-S | Ticket to Hell</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">8/17</div>
                <img src="bilder/pp-bizon.png" class="img">

                <div class="purple"><p>PP-Bizon | Space Cat</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">9/17</div>
                <img src="bilder/g3sg1.png" class="img">

                <div class="purple"><p>G3SG1 | Dream Glade</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">10/17</div>
                <img src="bilder/xm.png" class="img">

                <div class="purple"><p>XM1014 | Zombie Offensive</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">11/17</div>
                <img src="bilder/mac-10.png" class="img">

                <div class="blue"><p>MAC-10 | Ensnared</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">12/17</div>
                <img src="bilder/fiveseven.png" class="img">

                <div class="blue"><p>Five-SeveN | Scrawl</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">13/17</div>
                <img src="bilder/mp5-sd.png" class="img">

                <div class="blue"><p>MP5-SD | Necro Jr.</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">14/17</div>
                <img src="bilder/sawed-off.png" class="img">

                <div class="blue"><p>Sawed-Off | Spirit Board</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">15/17</div>
                <img src="bilder/p2000.png" class="img">

                <div class="blue"><p>P2000 | Lifted Spirits</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">16/17</div>
                <img src="bilder/mag7.png" class="img">

                <div class="blue"><p>MAG-7 | Foresight</p></div>
                
            </div>

            <div class="mySlidesfade">
                <div class="numbertext">17/17</div>
                <img src="bilder/scar2.png" class="img">

                <div class="blue"><p>SCAR-20 | Poultrygeist</p></div>
                
            </div>


            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <br>
            <br>
            <br>
            <?php
            if(isset($_SESSION['loggedin']))
            {
                echo '<button onclick="toggle();" class="btn" id = "open">Preview</button>';
            }
            else
            {
                echo '<button onclick= "cancel();" class="btn" id = "close">Preview</button>';
            }
            ?>
            
            
        
        </div>
            <div class="case2">
                <h2>Riptide</h2>
                <a href="#about"><img src="bilder/riptideCase.png" alt="" class="caseImg"></a>
            </div>

            <div class="case3">
                <h2>Snakebite</h2>
                <a href="#about"><img src="bilder/snakebite.png" alt="" class="caseImg"></a>
            </div>

            <div class="case4">
                <h2>Broken Fang</h2>
                <a href="#about"><img src="bilder/brokenfang.png" alt="" class="caseImg"></a>
            </div>

            
            

        </div>
        

        </section>

        <section id="games">

            <div class="container">
                
                <h1>Release Notes for 2/17/2022</h1>
                <h4>2022.01.17 - CS</h4>
                <div class="text">
                    <h2>[General]</h2>
                    <div id="a">
                    <p>
                    – Fixed Hammer crash on startup when not logged into Steam. <br>
                    – Fixed input delay after closing radial menu.  
                    </p>
                   
                </div>
                
                </div>

                <div class="text">
                    <h2>[Steam Input]</h2>
                    <div id="b">
                        <p>
                        – FlickStick mode is now enabled in Options > Controller, as opposed to the SteamInput Configurator. 
                        Bind your Right Stick (or preferred aiming stick) to “Joystick Camera” in the configurator. <br>
                        – Fixed input delay after closing radial menu. <br>
                        – Fixed SteamInput ActionSet being set to “MenuControls” when re-focusing on window. <br>
                        – Refinements to FlickStick behavior.
                        </p>
                </div>

            </div>

            <div class="text">
                <h2>[UI]</h2>
                <div id="c">
                    <p>
                    – Tooltips to help clarify console controller settings. <br>
                    – Various fixes to sliders.
                </p>
            </div>

        
            </div>
            <div class="text">
                <h2>[Linux]</h2>
                <div id="d">
                    <p>
                    – Added experimental Vulkan support. Add -vulkan to your command line to enable Vulkan.
                </p>
            </div>



          <!--
            <h1>CSGO</h1>
            
            <main>
            
            <input id="toggle" type="checkbox">
            
                <img src="ak47.png" alt="">
                <h2>Rifles</h2>

            <label for="toggle" >Click to Expand</label>
            
            <div id="offer">
                
                <p><img src="ak47.png" alt="" class="pic"> AK47</p>
                <br>
                <p><img src="m4a1.png" alt="" class="pic"> M4A1-S</p>
                <br>
                <p><img src="m4a4.png" alt="" class="pic">M4A4</p>
                <br>
                Galil
                <br>
                
               
            </div>
            

        
        </main>
-->
        </section>

        <script src="alpha.js">
            



     /* function changec() { Clan 1
       /*var xDiv = document.getElementById('box');
       
       if (xDiv.style.height == ''){
           xDiv.style.height = '530px'
           setTimeout(function(){document.getElementById('text-1').style.opacity = '1';}, 360)
           document.getElementById('text-1').style.display = 'block';
       }
       /*
         else 
       {
        document.getElementById('text-1').style.opacity = '0';
        document.getElementById('text-1').style.display = 'none';
           xDiv.style.height = ''
        } 
        
        
        }
        
    function changed(){/*Clan 2
        var xdiv = document.getElementById('box2');

        if (xdiv.style.height == ''){
           xdiv.style.height = '530px';
           setTimeout(function(){document.getElementById('text-2').style.opacity = '1';}, 360)
           document.getElementById('text-2').style.display = 'block';
        }
       else 
       {
        document.getElementById('text-2').style.opacity = '0';
        document.getElementById('text-2').style.display = 'none';
           xdiv.style.height = ''
        } 
    }

    function changee(){ /*Clan 3
        var xdiv = document.getElementById('box3');

        if (xdiv.style.height == ''){
           xdiv.style.height = '530px';
           setTimeout(function(){document.getElementById('text-3').style.opacity = '1';}, 360)
           document.getElementById('text-3').style.display = 'block';
        }
       else 
       {
        document.getElementById('text-3').style.opacity = '0';
        document.getElementById('text-3').style.display = 'none';
           xdiv.style.height = ''
        } 
    }

    function changef(){ /*Clan 4*
        var xdiv = document.getElementById('box4');

        if (xdiv.style.height == ''){
           xdiv.style.height = '530px';
           setTimeout(function(){document.getElementById('text-4').style.opacity = '1';}, 360)
           document.getElementById('text-4').style.display = 'block';
        }
       else 
       {
        document.getElementById('text-4').style.opacity = '0';
        document.getElementById('text-4').style.display = 'none';
           xdiv.style.height = ''
        } 
    }

    function changeg(){
        var xdiv = document.getElementById('box5');

        if (xdiv.style.height == ''){
           xdiv.style.height = '530px';
           setTimeout(function(){document.getElementById('text-5').style.opacity = '1';}, 360)
           document.getElementById('text-5').style.display = 'block';
        }
       else 
       {
        document.getElementById('text-5').style.opacity = '0';
        document.getElementById('text-5').style.display = 'none';
           xdiv.style.height = ''
        } 
    }
    */
    

        </script>
  
    </body>