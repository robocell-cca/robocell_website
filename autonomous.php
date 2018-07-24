<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
		<!-- Basic -->
		<title>ROBOCELL | Autonomous Bots</title>
		<?php include("includes/head.php");?>
</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Start Header -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      

      <!-- Start Header ( Logo & Naviagtion ) -->
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.html"><img alt="" src="images/robon.png"></a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="index.php">Home</a>
                
              </li>
              <li>
                <a href="gallery.php">Robo Gallery</a>
                
              </li>
              <li>
                <a class="active" href="#">Resources</a>
                <ul class="dropdown">
                  <li><a href="manual.php">Mechanical Bots</a></li>
                  <li><a href="semi_autonomous.php">Semi-Autonomous Bots</a></li>
                  <li><a class="active" href="autonomous.php">Autonomous Bots</a></li>
                  
                  
                </ul>
              </li>
              <li>
                <a href="workshops.php">Workshops</a>
                
              </li>
              <li>
                <a href="#">Events</a>
                <ul class="dropdown">
                  <li><a href="robocity.php">RoboCity '19</a></li>
                  <li><a href="aarohan.php">Aarohan '19</a></li>
                  
                </ul>
              </li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        

      </div>
      <!-- End Header ( Logo & Naviagtion ) -->

    </header>
    <!-- End Header -->


    <!-- Start Page Banner -->
    <div class="page-banner no-subtitle">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Autonomous Bots</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Resources</a></li>
              <li>Tutorials: Autonomous Bots</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row sidebar-page">

          <!-- Page Content -->
          <div class="col-md-9 page-content">

            <div class="tabs-section">

              

              <!-- Tab panels -->
              <div class="tab-content">
                
                <!-- Tab Content 1 -->
                <div class="tab-pane fade in active" id="tab-1">
                  <center><img src="images/autonomous/autonomous.jpg"></center>
                  <hr/>
                  <p><strong class="accent-color">Autonomous Bot: </strong> An autonomous robot is a robot that is designed and engineered to deal with its environment on its own, and work for extended periods of time without human intervention. Autonomous robots often have sophisticated features that can help them to understand their physical environment and automate parts of their maintenance and direction that used to be done by human hands. </p>
                  <p>This tutorial focuses on building an autonomous bot which will have <strong> line-following and obstacle-avoiding </strong> capabilities. </p>
                  <p>The components required to make this type of bot are: </p>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <ul class="icons-list">
                        <li><i class="fa fa-check-circle"></i> Arduino Uno</li>  <img src="images/bluetooth/uno.jpg"> <br>
                        <li><i class="fa fa-check-circle"></i> Breadboard</li> <img src="images/bluetooth/board.jpg">  
                        <li><i class="fa fa-check-circle"></i> Chassis</li> <img src="images/bluetooth/chassis.jpg"> <br><br>
                        <li><i class="fa fa-check-circle"></i> Wheels</li> <img src="images/bluetooth/wheels.jpg"> <br> <br> 
                        <li><i class="fa fa-check-circle"></i> Jumper Wires</li> <img src="images/bluetooth/jumper.jpg"> 
                        <hr>  
                      </ul> 
                    </div>

                    <div class="col-md-6">
                      <ul class="icons-list">
                        <li><i class="fa fa-check-circle"></i> Batteries</li> <br> <img src="images/bluetooth/battery.jpg"> <br> <br>
                        <li><i class="fa fa-check-circle"></i> 2pcs. 300rpm Motors</li> <br> <img src="images/bluetooth/motor.jpg">
                        <li><i class="fa fa-check-circle"></i> L298 Motor Driver</li> <img src="images/bluetooth/driver.jpg"> <br> <br>
                        <li><i class="fa fa-check-circle"></i> 3pcs. Digital IR Sensors</li> <img src="images/autonomous/ir.jpg"> <br> <br>
                        <li><i class="fa fa-check-circle"></i> Ultrasound Sensor Module</li> <img src="images/autonomous/ultrasonic.jpg"> <br> <br>
                      </ul>
                    </div>
                  </div>  
                  
                   
              </div>
                
              <div class="tab-pane fade in active" id="tab-2">
                  
                  <p><strong class="accent-color">About Digital IR sensors: </strong></p>
      
                  <div class="col-md-12">
                    <ul class="icons-list">
                      
                      <li><i class="fa fa-check-circle"></i> This sensor helps the Bot learn about its environment through the emission and reception of IR rays. It consists of an LED (Light Emitting Diode) and an LDR (Light Dependent Resistor). </li> 
                      <li><i class="fa fa-check-circle"></i> While there is a supply of current, the LED continuously emits IR rays and the LDR receives the reflected rays.  Based on the number of IR rays reflected and received, the nearness of an obstacle can be determined.  </li> 
                      <li><i class="fa fa-check-circle"></i> Also, based on the number of reflected rays received, the colour of the surrounding can be approximately detected.  </li> <br> <center> <img src="images/autonomous/a.jpg"> </center> <br>
                      <li><i class="fa fa-check-circle"></i>It is understood that the colour White almost completely reflects incident radiation, and as the colours get darker, they start absorbing more and more radiation, so that the colour Black reflects almost nothing, but absorbs all of the emitted rays. </li> 
                      <li><i class="fa fa-check-circle"></i>Thus when the LED of the IR sensor emits the IR rays, upon striking the colour White the LDR receives all the emitted rays, and the binary value ‘1’ which stands for ‘maximum’ is returned. Similarly, upon striking the colour Black, the LDR does not receive any of the emitted rays, thus the binary value ‘0’ which stands for ‘minimum’ is detected. This is the basic principle of the Line Follower Bot.</li>
                        
                    </ul>
                  </div>
              </div> 
              
              <div class="tab-pane fade in active" id="tab-3">
                <p><strong class="accent-color"> Pin Connections for the IR sensor </strong> </p>

                  <div class="col-md-12">
                    <ul class="icons-list">
                      <li><i class="fa fa-check-circle"></i> It has 3 pins for connections, named ‘Vcc’, ‘Gnd’ and ‘Out’.  </li> <br> <center> <img src="images/autonomous/pin.png"> </center> <br>                    
                      <li><i class=" fa fa-check-circle"></i>The Vcc pin is connected to the power supply i.e. the 5V pin of the Arduino.</li>
                        
                      <li><i class="fa fa-check-circle"></i> The Gnd pin is to be grounded by connecting it to the GND pin of the Arduino. </li> 
                      <li><i class="fa fa-check-circle"></i> The Out pin is the output pin which is connected to any of the digital pins of the board.  </li>  
                    </ul>
                    <hr>
                  </div>
              </div>

              <div class="tab-pane fade in active" id="tab-3">
                <p><strong class="accent-color"> How the Black line is Followed </strong> </p>

                  <div class="col-md-12">
                    <ul class="icons-list">
                      <li><i class="fa fa-check-circle"></i> There are 3 IR Sensors attached to the bottom of the chassis. One exactly in the middle and depending on the width of the black line to be followed, one on either side outside the black line.  </li>                    
                      <li><i class=" fa fa-check-circle"></i>When placed over the black line, all 3 sensors will be in operation and return their readings in binary values. The serial monitor can be opened to track these values.</li> 
                      <li><i class="fa fa-check-circle"></i> When any sensor is over a White surface, it will return 1 and when over a Black surface it will return 0.</li>  
                    </ul>
                    <p> <strong> The following cases are possible: </strong> </p>
                  </div>
                  <pre>
(1,0,1) -> The Bot is straight on the line -> It should move forward to follow the Black line
(0,1,1) -> The Bot has moved slightly-right -> It should move slightly-left to be on the Black line
(1,1,0) -> The Bot has moved slightly-left -> It should move slightly-right to be on the Black line 
(0,0,1) -> The Bot has moved sharp-right -> It should move sharp-left to be on the Black line
(1,0,0) -> The Bot has moved sharp-left -> It should move sharp-right to be on the Black line
(1,1,1) -> The Bot is completely off the line -> It should move right or left to find the Black line
                  </pre>

                  <center> <img src="images/autonomous/logic.png"> </center> <hr>

                  <p> <strong> The following Arduino code takes care of these situations and can be used to make a line-following bot: </strong> </p>

                  <pre>
#define l 5
#define m 6
#define r 7

void setup() {
  pinMode(l,INPUT);
  pinMode(m,INPUT);
  pinMode(r,INPUT);
  pinMode(8,OUTPUT);
  pinMode(9,OUTPUT);
  pinMode(10,OUTPUT);
  pinMode(11,OUTPUT);
  
  Serial.begin(9600);
}

void loop() {

  forward();
  
  Serial.print(digitalRead(l));
  Serial.print("-----------");
  Serial.println(digitalRead(m));
  Serial.print("-----------");
  Serial.println(digitalRead(r));
  delay(100);

  if(digitalRead(l)==1 && digitalRead(m)==0 && digitalRead(r)==1)
  {
   forward();
  }

   else if(digitalRead(l)==0 && digitalRead(m)==1 && digitalRead(r)==1)
   {
    left();
   }

   else if(digitalRead(l)==1 && digitalRead(m)==1 && digitalRead(r)==0)
   {
    right();
   }

   else if(digitalRead(l)==0 && digitalRead(m)==0 && digitalRead(r)==1)
   {
    sleft();
   }

   else if(digitalRead(l)==1 && digitalRead(m)==0 && digitalRead(r)==0)
   {
    sright();
   }
  
   else if(digitalRead(l)==1 && digitalRead(m)==1 && digitalRead(r)==1)
   {
    right();  //default direction
   }
}

void forward()
{
  digitalWrite(8,LOW);
  digitalWrite(9,HIGH);
  digitalWrite(10,LOW);
  digitalWrite(11,HIGH);
}

void left()
{
 digitalWrite(8,LOW);
 digitalWrite(9,LOW);
 digitalWrite(10,LOW);
 digitalWrite(11,HIGH); 
}

void right()
{
  digitalWrite(8,LOW);
  digitalWrite(9,HIGH);
  digitalWrite(10,LOW);
  digitalWrite(11,LOW);
}

void sleft()
{
 digitalWrite(8,LOW);
 digitalWrite(9,HIGH);
 digitalWrite(10,LOW);
 digitalWrite(11,HIGH); 
}

void sright()
{
  digitalWrite(8,HIGH);
  digitalWrite(9,LOW);
  digitalWrite(10,HIGH);
  digitalWrite(11,LOW);
}
                  </pre> <hr>
                  
              <div class="tab-pane fade in active" id="tab-4">
                <p><strong class="accent-color"> About the Ultrasonic sensor </strong> </p>

                  <div class="col-md-12">
                    <ul class="icons-list">
                      <li><i class="fa fa-check-circle"></i> Ultrasonic sensor uses ultrasonic sound to detect objects near it. It sends a sound wave and the reflected sound wave is detected.   </li> <br> <center> <img src="images/autonomous/image.jpg"> </center> <br>                    
                      <li><i class=" fa fa-check-circle"></i>By measuring the time taken to get back can be used to measure the distance between object and sensor. The ultrasonic sensor not only detects the presence of object but also its distance. </li>
                        
                      <li><i class="fa fa-check-circle"></i> The ultrasonic sensor has 4 pins namely, Vcc, GND, trigger and echo. The trigger pin is used to trigger the ultrasonic sound. </li> 
                      <li><i class="fa fa-check-circle"></i> The echo pin is used to sense the received wave.   </li>  
                    </ul>
                    <hr>
                  </div>
              </div>

              <div class="tab-pane fade in active" id="tab-5">
                <p><strong class="accent-color"> Measuring Distance using the Ultrasonic sensor </strong> </p>

                  <div class="col-md-12">
                    <ul class="icons-list">
                      <li><i class="fa fa-check-circle"></i> We can measure the distance using ultrasonic sensors by using a simple formula:</li>                    
                        <p> Distance (in cms) =(340*100*ping-time)/2 </p>
                        <p> where, ping-time is the time taken by the ultrasonic sound to reach the echo after being emitted by the trigger.</p>
                    </ul>
                    <hr>
                  </div>
              </div>

              <div class="tab-pane fade in active" id="tab-6">
                <p><strong class="accent-color"> Working Principle of the Obstacle-avoider </strong> </p>
                  <center><img src="images/autonomous/image1.jpg"></center>

                  <div class="col-md-12">
                    <ul class="icons-list">
                      <li><i class="fa fa-check-circle"></i> The distance from the ultrasonic sensor placed in front the bot is measured.</li>                    
                      <li><i class="fa fa-check-circle"></i> While the distance is more than a particular clearance distance, the bot moves forward.</li>  
                      <li><i class="fa fa-check-circle"></i> The bot takes turn and moves in any specified direction, when this distance falls less than the given distance.</li>
                    </ul>
                    <hr>
                  </div>
              </div>

              <div class="tab-pane fade in active" id="tab-7">
                <p><strong class="accent-color"> Other Applications of the ULtrasonic sensor: </strong> </p>
                  <center><img src="images/autonomous/image2.jpg"></center>

                  <div class="col-md-12">
                    <ul class="icons-list">
                      <li><i class="fa fa-check-circle"></i> Wall follower: A robot which navigates with the help of walls in a room or in a corridor.</i> </li>                    
                      <li><i class="fa fa-check-circle"></i> Measure your height: By range finding you can accurately measure your height.</li>
                      <li><i class="fa fa-check-circle"></i> Burglar alarm: Set the ultrasonic sensor so as it detects presence and ring alarm.</li>
                      <li><i class="fa fa-check-circle"></i> Automatic door functioning: Automatically close or open a door based on presence of humans. This is similar thing which you will see in lifts daily.</li>
                      <li><i class="fa fa-check-circle"></i> Communication: By proper coding transmit data between two systems.</li>
                      <li><i class="fa fa-check-circle"></i> Create a Virtual world: Define objects and see their movements in a virtual world created by you in your PC with the help of python. </li>  
                    </ul>
                    <hr>
                  </div>
              </div>
                  
              </div>
              

              <!-- End Tab Panels -->

            <!-- Divider -->
            <div class="hr5" style="margin-top:45px;margin-bottom:45px;"></div>

           
          </div>
          <!-- End Page Content -->

        </div>
      </div>
    </div>
  </div>

    <!-- Start Footer Section -->
			<?php include("includes/footer.php");?>
			<!-- End Footer Section -->
  </div>
  <!-- End Container -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Style Switcher -->
  <div class="switcher-box">
    <a class="open-switcher show-switcher"><i class="fa fa-cog fa-2x"></i></a>
    <h4>Style Switcher</h4>
    <span>12 Predefined Color Skins</span>
    <ul class="colors-list">
      <li>
        <a onClick="setActiveStyleSheet('blue'); return false;" title="Blue" class="blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('sky-blue'); return false;" title="Sky Blue" class="sky-blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('cyan'); return false;" title="Cyan" class="cyan"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('jade'); return false;" title="Jade" class="jade"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('green'); return false;" title="Green" class="green"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('purple'); return false;" title="Purple" class="purple"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('pink'); return false;" title="Pink" class="pink"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('red'); return false;" title="Red" class="red"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('orange'); return false;" title="Orange" class="orange"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('yellow'); return false;" title="Yellow" class="yellow"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('peach'); return false;" title="Peach" class="peach"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('beige'); return false;" title="Biege" class="beige"></a>
      </li>
    </ul>
    <span>Top Bar Color</span>
    <select id="topbar-style" class="topbar-style">
      <option value="1">Light (Default)</option>
      <option value="2">Dark</option>
      <option value="3">Color</option>
    </select>
    <span>Layout Style</span>
    <select id="layout-style" class="layout-style">
      <option value="1">Wide</option>
      <option value="2">Boxed</option>
    </select>
    <span>Patterns for Boxed Version</span>
    <ul class="bg-list">
      <li>
        <a href="#" class="bg1"></a>
      </li>
      <li>
        <a href="#" class="bg2"></a>
      </li>
      <li>
        <a href="#" class="bg3"></a>
      </li>
      <li>
        <a href="#" class="bg4"></a>
      </li>
      <li>
        <a href="#" class="bg5"></a>
      </li>
      <li>
        <a href="#" class="bg6"></a>
      </li>
      <li>
        <a href="#" class="bg7"></a>
      </li>
      <li>
        <a href="#" class="bg8"></a>
      </li>
      <li>
        <a href="#" class="bg9"></a>
      </li>
      <li>
        <a href="#" class="bg10"></a>
      </li>
      <li>
        <a href="#" class="bg11"></a>
      </li>
      <li>
        <a href="#" class="bg12"></a>
      </li>
      <li>
        <a href="#" class="bg13"></a>
      </li>
      <li>
        <a href="#" class="bg14"></a>
      </li>
    </ul>
  </div>

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>