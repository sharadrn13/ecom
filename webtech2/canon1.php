<?php
session_start();
 $_SESSION["item"]="CANON 2341";
 if(!isset($_SESSION["mail"]))
   {
    echo "No one logged in.Please login to buy.";
	}
	
   //else
   //{
    //echo $_SESSION["mail"];
    //}
	
    ?>
<html>
<head>
<style type="text/css">

thead {color:white}
tbody {color:white}
tfoot {color :blue}

table { table-layout:fixed ; width:70% ; }
table th { padding:15px; background-color : grey;color:white }
table td,tr {border:1px solid grey;}
body
{
font-family:'font',Georgia,Calibri,Arial,sans-serif;
color:#ffffff;
}
</style>
</head>
<body>

<div align="center"><p class="a"><img src="images (15).jpg" align="middle"></p>

<a href="buy.php"><button>Buy</button></a>
<a href="cart1.php"><button>Add to Cart</button></a>
<a href="owner.php" target="iframe_a"><button>Owners</button></a></div>
<p id="demo"></p>
<div id="specifications" class="item_left_column">
    <h3 class="item_desc_title">
        <p align="center"><b> Specifications of Canon PowerShot A810 Point & Shoot (Black)</b>
    </h3>

            <table cellspacing="0" class="fk-specs-type2" border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">IN THE BOX</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Sales Package</td>
                    <td class="specs-value fk-data">4 GB Card, Carry Case and Battery Charger</td>
                </tr>
                    </table>
            <table cellspacing="0" class="fk-specs-type2"border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">Dimension</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Weight</td>
                    <td class="specs-value fk-data">126 g (Camera Body Only), 174 g (Including Battery and Memory Card)</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Dimensions</td>
                    <td class="specs-value fk-data">94.7 (W) x 61.3 (H) x 29.8 (D) mm</td>
                </tr>
                    </table>
            <table cellspacing="0" class="fk-specs-type2"border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">Pixels</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Optical Sensor Resolution (in MegaPixel)</td>
                    <td class="specs-value fk-data">16.0 Megapixels</td>
                </tr>
                    </table>
            <table cellspacing="0" class="fk-specs-type2"border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">Zoom</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Optical Zoom</td>
                    <td class="specs-value fk-data">5x</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Digital Zoom</td>
                    <td class="specs-value fk-data">4x</td>
                </tr>
                    </table>
            <table cellspacing="0" class="fk-specs-type2"border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">LCD</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">LCD Display</td>
                    <td class="specs-value fk-data">TFT Colour (Wide Viewing Angle)</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">LCD Screen Size</td>
                    <td class="specs-value fk-data">2.7 inch</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Image Display Resolution</td>
                    <td class="specs-value fk-data">230,000 dots</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Video Display Resolution</td>
                    <td class="specs-value fk-data">1280 x 720, 25 fps</td>
                </tr>
                    </table>
            <table cellspacing="0" class="fk-specs-type2"border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">Sensor</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Sensor Type</td>
                    <td class="specs-value fk-data">CCD</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Sensor Size</td>
                    <td class="specs-value fk-data">1/2.3 inch</td>
                </tr>
                    </table>
            <table cellspacing="0" class="fk-specs-type2"border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">Lens</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Auto Focus</td>
                    <td class="specs-value fk-data">TTL</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Focal Length</td>
                    <td class="specs-value fk-data">5.0 - 25.0 mm (35 mm Equivalent to 24 - 140 mm)</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Color Filter</td>
                    <td class="specs-value fk-data">Primary (RGB) Color Filter</td>
                </tr>
                    </table>
            <table cellspacing="0" class="fk-specs-type2"border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">Battery</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Power Supply</td>
                    <td class="specs-value fk-data">Power Adapter CA-PS800 (Included with AC Adapter Kit ACK800)</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Battery Type</td>
                    <td class="specs-value fk-data">AA Alkaline Battery</td>
                </tr>
                    </table>
            <table cellspacing="0" class="fk-specs-type2"border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">Interface</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Microphone</td>
                    <td class="specs-value fk-data">Mono</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">USB Cable</td>
                    <td class="specs-value fk-data">Hi-speed USB</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">PictBridge</td>
                    <td class="specs-value fk-data">Yes</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Audio Video Interface</td>
                    <td class="specs-value fk-data">Audio / Video Output (NTSC, PAL)</td>
                </tr>
                    </table>
            <table cellspacing="0" class="fk-specs-type2"border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">Media and Software</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Upgradeable Memory</td>
                    <td class="specs-value fk-data">Yes</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Memory Card Type</td>
                    <td class="specs-value fk-data">SD / SDHC / SDXC</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Operating System</td>
                    <td class="specs-value fk-data">Windows 7 SP1, Windows Vista SP2, Windows XP SP3, MAC OS X 10.6, MAC OS X 10.7</td>
                </tr>
                    </table>
            <table cellspacing="0" class="fk-specs-type2"border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">Image</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Audio Formats</td>
                    <td class="specs-value fk-data">Linear PCM (2 Channel Stereo)</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Image Sizing</td>
                    <td class="specs-value fk-data">4608 x 3456 (L)</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Video Format</td>
                    <td class="specs-value fk-data">MOV, H.264</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Image Format</td>
                    <td class="specs-value fk-data">JPEG EXIF 2.3, DCF, DPOF 1.1</td>
                </tr>
                    </table>
            <table cellspacing="0" class="fk-specs-type2"border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">Flash</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Flash Modes</td>
                    <td class="specs-value fk-data">Auto, On, Slow Sync, Off</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Flash Range</td>
                    <td class="specs-value fk-data">50 cm - 3.0 m (W), 1.0 - 2.0 m (T)</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Built in Flash</td>
                    <td class="specs-value fk-data">Yes</td>
                </tr>
                    </table>
            <table cellspacing="0" class="fk-specs-type2"border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">Shutter Speed</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Maximum Shutter Speed</td>
                    <td class="specs-value fk-data">1/2000 sec</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Minimum Shutter Speed</td>
                    <td class="specs-value fk-data">15 sec</td>
                </tr>
                    </table>
            <table cellspacing="0" class="fk-specs-type2"border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">Other Features</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">ISO Rating</td>
                    <td class="specs-value fk-data">Auto, ISO 100, 200, 400, 800, 1600</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Additional Features</td>
                    <td class="specs-value fk-data">5x Zoom Magnification, DIGIC 4 Imaging Processor, 5 Level Brightness Adjustment, Autofocus Control System: Continuous (Auto only), Servo AF (Follows Servo AE), AF Frame: Face AiAF, Tracking AF, Center, Exposure Compensation: 2 EV in increments of 1/3 EV, Circular Aperture, Scene Mode: Portrait, Face Self-timer, Low Light, Poster Effect, Snow, Fireworks, Long Shutter, Discreet, iFrame Movie, Special Effects: Fish-eye Effect, Miniature Effect, Toy Camera Effect, Monochrome, Super Vivid, Continuous Shooting Movie Recording Time: 1 hr 40 mins (Alkaline), 3 hrs (Ni-MH), Actual Usage Time: 1 hr (Alkaline), 2 hrs (Ni-MH), Analog Audio Output (Monaural), Lens Construction: 6 Elements in 5 Groups, AF Lock, AF Assist Beam, AE Lock, 100 % Frame Coverage, Slow Sync Speed: Fastest Speed 1/2000 sec, External Flash: Canon High Power Flash HF-DC1, Canon High Power Flash HF-DC2, Shooting Modes in Movie: Program, Live View Control, Portrait, Miniature Effect, Monochrome, Super Vivid, Poster Effect, Snow, Fireworks, iFrame Movie, Drive Modes: Single, Continuous, Self-Timer, Red-Eye Correction (During Shooting and Playback), Histogram, 2x - 10x Playback zoom, Flash Recycling Time: 10 secs</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Self Timer</td>
                    <td class="specs-value fk-data">Yes, 2 and 10 secs</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Face Detection</td>
                    <td class="specs-value fk-data">Yes</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Shooting Modes</td>
                    <td class="specs-value fk-data">Smart Auto (32 Scenes Detected), Program, Live View Control</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Delete Function</td>
                    <td class="specs-value fk-data">Yes</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Metering</td>
                    <td class="specs-value fk-data">Evaluative, Center Weighted Average, Spot</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Macro Mode</td>
                    <td class="specs-value fk-data">Yes, 3 - 60 cm (W)</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Red Eye Reduction</td>
                    <td class="specs-value fk-data">Yes</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Picture Angle</td>
                    <td class="specs-value fk-data">28 mm Wide-angle</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">Continuous Shots</td>
                    <td class="specs-value fk-data">Yes, 0.8 fps (P Mode), 2.8 fps (Low Light Mode)</td>
                </tr>
                        	                                                            <tr class="">
                    <td class="specs-key">White Balancing</td>
                    <td class="specs-value fk-data">Auto, Day Light, Cloudy, Tungsten, Fluorescent, Fluorescent H, Custom</td>
                </tr>
                    </table>
            <table cellspacing="0" class="fk-specs-type2" border="1" align="center">
            <tr>
                <th class="group-head" colspan="2">WARRANTY</th>
            </tr>
                        	                                                            <tr class="">
                    <td class="specs-key"></td>
                    <td class="specs-value fk-data">2 year Canon India Warranty and Free Transit Insurance.</td>
                </tr>
                    </table>
    </div>
	
	</body>
	</html>
