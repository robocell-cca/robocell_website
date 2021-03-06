<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
		<!-- Basic -->
		<title>ROBOCELL | Semi-Autonomous Bots</title>
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
            <a class="navbar-brand" href="index.php"><img alt="" src="images/robon.png"></a>
          </div>
          <div class="navbar-collapse collapse">
            
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="index.php">Home</a>
                
              </li>
              <li>
                <a href="gallery.php">Robo Gallery</a>
                
              </li>
              <li>
                <a class="active" href="autonomous.php">Tutorials</a>
                <ul class="dropdown">
                  <li><a href="manual.php">Manual Bots</a></li>
                  <li><a class="active" href="semi_autonomous.php">Semi-Autonomous Bots</a></li>
                  <li><a href="autonomous.php">Autonomous Bots</a></li>
                  
                </ul>
              </li>
              <li>
                <a href="workshops.php">Workshops</a>
                
              </li>
              <li>
                <a href="aarohan.php">Events</a>
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

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a href="index.php">Home</a>
            <a href="gallery.php">Gallery</a>
          </li>
          <li>
            <a class="active" href="#">Tutorials</a>
            <ul class="dropdown">
              <li><a href="manual.php">Manual Bots</a>
              </li>
              <li><a class="active" href="semi_autonomous.php">Semi-Autonomous Bots</a>
              </li>
              <li><a href="autonomous.php">Autonomous Bots</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="workshops.php">Workshops</a>
            
          </li>
          <li>
            <a>Events</a>
            <ul class="dropdown">
              <li><a href="robocity.php">Robocity '18</a>
              </li>
              <li><a href="aarohan.php">Aarohan '19</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="contact.php">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->
        

      </div>
      <!-- End Header ( Logo & Naviagtion ) -->

    </header>
    <!-- End Header -->


    <!-- Start Page Banner -->
    <div class="page-banner no-subtitle">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Semi-Autonomous Bots</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><font face="Desire" size="5"><a href="#">Tutorials</font></a></li>
              <li><font face="Desire" size="5">Semi-Autonomous Bots</font></li>
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
          <div class="col-md-12 page-content">

            <div class="tabs-section">

              

              <!-- Tab panels -->
              <div class="tab-content">
                
                <!-- Tab Content 1 -->
                <div class="tab-pane fade in active" id="tab-1">
                <center><p><strong><font face="Tahoma" color="Black" size="6"> BLUETOOTH-CONTROLLED BOT</font></strong></p></center> <br>
                  <center><img src="images/bluetooth/bluetooth.jpg"></center>
                  <hr/>
                  <p><font size="4"><strong class="accent-color"><font color="Black">Bluetooth-controlled Bot</font></strong></font><font size="3"> is a type of semi-autonomous robot controlled by using Android mobile phone instead of any other method like buttons, gesture etc. We only need to touch buttons on our Android phones to control the bot in forward, backward, leftward and rightward directions. The phone is used as the transmitting device while the Bluetooth module placed in the bot is used as the receiver.</font> </p>
                  <p><font size="4">The components required to make this type of bot are: </font></p>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <ul class="icons-list">
                      <font size="3">
                        <li><i class="fa fa-check-circle"></i> Arduino Uno</li> <img src="images/bluetooth/uno.jpg"> <hr> 
                        <li><i class="fa fa-check-circle"></i> DC Motors</li> <img src="images/bluetooth/motor.jpg"> <hr>
                        <li><i class="fa fa-check-circle"></i> Bluetooth Module HC-05</li> <img src="images/bluetooth/hc05.jpg"> <hr>
                        <li><i class="fa fa-check-circle"></i> L293D or LM298 Motor Driver IC</li> <img src="images/bluetooth/driver.jpg"> <hr>
                        <li><i class="fa fa-check-circle"></i> 9V Batteries and Connectors</li> <img src="images/bluetooth/battery.jpg"> <img src="images/bluetooth/connector.jpg"> <hr> 
                        <li><i class="fa fa-check-circle"></i> Wheels</li> <img src="images/bluetooth/wheels.jpg"> <hr>
                        <li><i class="fa fa-check-circle"></i> Chassis</li> <img src="images/bluetooth/chassis.jpg"> <hr>
                        <hr>  
                      </font></ul> 
                    </div>

                    <div class="col-md-6">
                      <ul class="icons-list">
                      <font size="3">
                          <li><i class="fa fa-check-circle"></i> Breadboard</li> <img src="images/bluetooth/board.jpg"> <hr>
                          <li><i class="fa fa-check-circle"></i> Jumper Wires</li> <img src="images/bluetooth/jumper.jpg"> <hr>
                          <li><i class="fa fa-check-circle"></i> Thin and Long Nuts and Bolts</li> <img src="images/bluetooth/screw.jpg"> <hr>
                          <li><i class="fa fa-check-circle"></i> Male power connectors for Arduino</li> <img src="images/bluetooth/connect.jpg"> <hr>
                          <li><i class="fa fa-check-circle"></i> Castor Wheel</li> <img src="images/bluetooth/castor.jpg"> <hr>
                          <li><i class="fa fa-check-circle"></i> Android Smartphone with ArduinoRC app installed  from Play Store</li> <img src="images/bluetooth/phone.png"> <hr>
                          <li><i class="fa fa-check-circle"></i> Arduino data cable</li> <img src="images/bluetooth/cable.jpg"> <hr>
                      </font></ul>
                    </div>
                  </div>  
                  
                <div class="tab-pane fade in active" id="tab-2">
                  
                  <p><font size="4"><strong class="accent-color">About HC-05 module:  </strong></font><font size="3"> You can directly use the Bluetooth module after purchasing from the market because there is no need to change any setting of Bluetooth module. Default baud rate of new Bluetooth module is 9600 bps. You just need to connect 'rx' and 'tx' pins to the Arduino Uno and give 5V DC Regulated power supply to it.</font></p>
                  <p><font size="4">The pin connections of the HC-05 module are:</font></p>
                  
                  <div class="col-md-12">
                    <ul class="icons-list">
                    <font size="3">
                      <li><i class="fa fa-check-circle"></i> State----> Open (Unconnected)</li>
                      <li><i class="fa fa-check-circle"></i> Rx----> Serial Receiving pin</li>
                      <li><i class="fa fa-check-circle"></i> Tx----> Serial Transmitting pin</li>
                      <li><i class="fa fa-check-circle"></i> GND----> Ground (0V)</li>
                      <li><i class="fa fa-check-circle"></i> VCC----> +5V DC Power Supply</li>
                      <li><i class="fa fa-check-circle"></i> EN----> To enter AT mode</li>
                      <hr>
                    </font></ul>
                  </div>
                </div>    
              </div>
                
              <div class="tab-pane fade in active" id="tab-2">
                  
                  <p><font size="3"><strong class="accent-color">We're now ready to start assembling our Semi-Autonomous Bot!</strong></font></p>
                  <p><font size="3">Follow these easy steps: </font></p>
                  <br>
                  
                  <p><font size="6" face="Desire" color="#010000">Procedure: </font></p>
                  <div class="col-md-12">
                    <ul class="icons-list">
                    <font size="3">
                      <li><i class="fa fa-check-circle"></i> First, fix up both the motors on the chassis with nuts and bolts and then the wheels and tighten it with screws, and at last, the castor wheel at the front bottom. After this, the bot will look somewhat as shown in figure below. </li> <br> <center><img src="images/bluetooth/state.jpg"></center> <br>
                      <li><i class="fa fa-check-circle"></i> Now place the Arduino board and motor driver over the chassis as shown in the above picture.</li>
                      <li><i class="fa fa-check-circle"></i> Connect all the hardwares using jumper wires as shown in the picture below. Use bread board to connect Bluetooth module to arduino. Check that no two wires intersect each other.</li> <center><img src="images/bluetooth/connections.jpg"></center> <br>
                      <li><i class="fa fa-check-circle"></i> Circuit diagram for bluetooth-controlled bot is shown in above figure. A Motor driver is connected to the Arduino to run the bot. Motor driver’s input pins IN1, IN2, IN3 and IN4 are connected to Arduino's digital pin numbers 6, 9, 3 and 5 respectively. Here we have used two DC motors to drive the car in which one motor is connected at output pin of motor driver OUT1 and OUT2 and another motor is connected at OUT3 and OUT4. A 9V battery is also used to power the motor driver for driving the motors. The VCC and ground pins of Bluetooth module are connected at +5V and GND of Arduino. A 9V battery is used to power the circuit at Arduino’s female pin.</li>
                      <font size="3"><p>In general use, Rx of Bluetooth module is connected to Tx of Arduino Uno so that the data that Arduino sends through Tx is received in Bluetooth module at Rx.</font></p> <br> 
                      <li><i class="fa fa-check-circle"></i> Check all the connections and check the conductivity of all the jumper wires using multimeter in buzzer mode and placing both the probes at both the ends of jumper wire. Don’t connect batteries now else it will get drained soon. Insert Double-sided tape at the base of Arduino and motor driver so that they don’t fall off.</li>
                      <font size="3"> <p>Whenever you upload a code to Arduino with Bluetooth module connected, remove Rx and Tx wires of the Bluetooth module and then connect it after uploading the code. </font></p>
                      <li><i class="fa fa-check-circle"></i> <strong class="accent-color">Calibrating the Motors </strong></li>
                       <font size="3"> <p> Motor connections needs changing according to the code. You have to see whether the bot moves correctly according to the command given. For example, if you gave command to move forward, you need to see whether the bot is moving correctly or not. If not, then you need to interchange the motor connections either from input part of motor driver or the output part or Arduino output pins for the motor driver. </font></p>
                       <font size="3"> <p> The test code is: </font></p>
                       <p><font size="6" face="Desire" color="#010000">Code: </font></p>
                        <pre> 
  #define rmp 3 //Replacing rmp with 3 every where in the program so that we don't have to remember pin no.
  #define rmn 5 //Same way as above
  #define lmp 6 //Same way as above
  #define lmn 9 //Same way as above
                            
  void setup() 
  {
    pinMode(rmp,OUTPUT); //Pintype declaration i.e. which pin is input and which output. 
    pinMode(rmn,OUTPUT); "rmn" and "rmp" means 'right motor negitive' and 'right motor positive' terminals
    pinMode(lmp,OUTPUT); //Same as above
    pinMode(lmn,OUTPUT); //Same as above                            
  }
                            
  void loop()
  {
    fm(); //Function call,you may also call bm()                              
  }
                              
  //function definitions
  void fm() //forward motion function definition
  {
    digitalWrite(lmp,HIGH); // Conditions For forward motion
    digitalWrite(lmn,LOW); 
    digitalWrite(rmn,LOW);
    digitalWrite(rmp,HIGH);
  }
  
  void bm() //backward motion function definition
  {
    digitalWrite(lmp,LOW); // Conditions For backward motion
    digitalWrite(lmn,HIGH);
    digitalWrite(rmn,HIGH);
    digitalWrite(rmp,LOW);
  }
                        </pre>
                        <hr>
                        <font size="3"></ul>
                  </div>
              </div> 
              
              <div class="tab-pane fade in active" id="tab-2">
                  
                  <p><font size="4"><strong class="accent-color">Customizing the Bluetooth module: </strong></font></p>
                  <p> <font size="3">Now, you will be communicating with the Bluetooth module to set its name and password. For this purpose only, Tx of Bluetooth module is connected to Tx of Arduino and Rx is connected to Rx of Arduino so that Arduino can communicate with Bluetooth module.</font></p>
                  <p><font size="3">Follow these easy steps: </font></p>

                  
                  <div class="col-md-12">
                    <ul class="icons-list">
                    <font size="3">
                      <li><i class="fa fa-check-circle"></i> Open Arduino IDE software on your computer and connect your Arduino Uno to computer using its data cable. You will notice that Bluetooth module’s indicator red light flashes very fast. This is because it is not connected to any other device at present. </li>                      
                      <li><i class=" fa fa-check-circle"></i> If you have opened Arduino IDE for the first time, it will open up with a blank code. Now, go to Tools -> Board and select “Arduino/Genuino Uno”. Then, go to Tools -> Port and select “COM3”.
                        Now Upload that blank code to arduino by pressing the shortcut key “Ctrl +U”. </li>
                        <p><strong> Note:- </strong> Whenever you upload a code to Arduino with Bluetooth module connected, remove Rx and Tx wires of the Bluetooth module. Then connect it after uploading the code.</p> <center><img src="images/bluetooth/serial.jpg"></center> <br>
                      <li><i class="fa fa-check-circle"></i> Now in Arduino IDE, go to Tools -> Serial Monitor. In serial monitor dialog box,there are two rectangular boxes at the bottom-right corner. Right-most is for baud rate, set it to “38400 baud” and the adjacent box to “Both NL & CR” .</li> 
                      <li><i class="fa fa-check-circle"></i> Now plug out the Arduino data cable from computer and again plug it in by keeping the push button on the Bluetooth module pressed and leave the push button when module’s red light starts flashing slowly, say, at an interval of 2 seconds. Doing this takes the Bluetooth module to 'Command mode' and now we can communicate with it.</li>  
                      <li><i class="fa fa-check-circle"></i> In the top comment box, we will type all the AT commands to communicate with HC-05. Now, type “AT” in the comment box (without inverted commas) and press enter. You will get “OK” in return.</li>
                        <p> Now type AT+NAME= “ABC” and press enter. This command will set your device name to “ABC” so choose your name accordingly. If this command is accepted it will give “OK” in return.
                        Now type AT+PSWD= “1234” and press enter. This command will set your device password to “1234” so choose your password accordingly. If this command is accepted it will give “OK” in return.</p> 
                      <li><i class="fa fa-check-circle"></i> Now your Bluetooth module is configured to use. Now unplug Arduino data cable and you can plug it in directly next time when you need to upload your code.</li> <hr>
                  </font></ul>
                  </div>
              </div>

              <div class="tab-pane fade in active" id="tab-2">
                  
                  <p><font size="4"><strong class="accent-color">Coding your Bluetooth Bot: </strong></font></p>
                  <p> <font size="3">Now you will be writing program to receive command from Android phone app via Bluetooth module and bot has to follow it. Explaination of code is given side by side with the code.</font></p>
                  <p><font size="6" face="Desire" color="#010000">Code: </font></p>
                  <pre><font size="3">
#define rmp 3 //Replacing rmp with 3 every where in the program 
#define rmn 5 //Same way as above
#define lmp 6 //Same way as above
#define lmn 9 //Same way as above
                      
void setup() 
{
  pinMode(rmp,OUTPUT); //Pintype declaration i.e. which pin is input and which is output.
  pinMode(rmn,OUTPUT); //"rmn" and "rmp" means 'right motor negitive' and 'right motor positive' terminals respectively. 
  pinMode(lmp,OUTPUT); //Same as above
  pinMode(lmn,OUTPUT); //Same as above
  Serial.begin(9600); //9600 is default baud rate at which bluetooth module transfers information to Arduino
}
                      
void loop()
{
  if(Serial.available()) //"Serial.available()" is a function which checks if Arduino is receiving information from Bluetooth module 
  {
    char key=Serial.read(); //"Serial.read()" is a function which reads recieved information  
    switch(key) //Now using switch() case we are trying to match recieved character with listed cases
    {
      case 'F':{fm(); break;} // case for forward motion.here 'F' is used because we will be assigning it to a button in Android app
      case 'B':{bm();break;}  //case for backward motion. bm(),fm(),etc. are function calls.
      case 'L':{lm();break;}  //case for left motion. 
      case 'R':{rm();break;}  //case for right motion
      default:{st();break;}  //case for stoping motion if any other key than listed above is pressed
    }                       
  }                  
}
                      
//function definitions
void fm() //forward motion function definition
{
  digitalWrite(lmp,HIGH); // Conditions For forward motion
  digitalWrite(lmn,LOW); 
  digitalWrite(rmn,LOW);
  digitalWrite(rmp,HIGH);
}

void bm() //backward motion function definition
{
  digitalWrite(lmp,LOW); // Conditions For backward motion
  digitalWrite(lmn,HIGH);
  digitalWrite(rmn,HIGH);
  digitalWrite(rmp,LOW);
}

void lm() //left motion function definition
{
  digitalWrite(rmn,LOW); // Conditions For left motion
  digitalWrite(rmp,HIGH);
  digitalWrite(lmp,LOW);
  digitalWrite(lmn,LOW);
}

void rm() //right motion function definition
{
  digitalWrite(lmp,HIGH); // Conditions For right motion
  digitalWrite(lmn,LOW);
  digitalWrite(rmn,LOW);
  digitalWrite(rmp,LOW);                       
}

void st() //stop motion function definition
{
  digitalWrite(lmp,LOW); // Conditions For stoping motion
  digitalWrite(lmn,LOW);
  digitalWrite(rmn,LOW);
  digitalWrite(rmp,LOW);
}
                  </font>
                  </pre>
                  <hr>
                </div>

                <div class="tab-pane fade in active" id="tab-2">
                  
                    <p><font size="4"><strong class="accent-color">Customizing your Android app: </strong></font></p>
                    <p> <font size="3">Only one thing separates you from the fun of driving your Bluetooth-controlled Bot. You must configure your Android app so that your bot can understand the commands that are given to it.</font></p>
                    <p><font size="3"> Here's how to do just that: </font></p>

                    <div class="col-md-12">
                        <ul class="icons-list">
                        <font size="3">
                          <li><i class="fa fa-check-circle"></i>Now turn on Bluetooth in your phone and open up “Arduino Bluetooth controller” app.</li>
                          <li><i class="fa fa-check-circle"></i> Select your bot name and pair it by entering your Bluetooth module password.</li> <br> <center><img src="images/bluetooth/keys.png"></center> <br>
                          <li><i class="fa fa-check-circle"></i> Then a dialog box will appear, select “Controller Mode”. There you will get the buttons on the screen. Now you have to assign a key or variable or number to the buttons, for this go to app settings and select keys.</li>
                          <li><i class="fa fa-check-circle"></i> Now comes the most important part of this tutorial.... return to the controller screen and enjoy driving your bot!</li>  
                          <hr>
                        </font>
                        </ul>
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
  </div>

    <!-- Start Footer Section -->
			<?php include("includes/footer.php");?>
			<!-- End Footer Section -->
  <!-- End Container -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  
  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>