<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Art</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Welcome to my commision shop!
        </h1>
        <h2>
           Im not the best, but im trying my best.
        </h2>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="despre.html">About</a>
        <a href="portofolio.html">Portofolio</a>
        <a href="buyart.php">Buy art</a>
        <a href="contact.php">Contact & Support</a>
    </nav>
    <main>
        <aside id="pricesAside">
            <h4>Description</h4>
         
        </aside>

        <section id="prices">
            <h2>Pices:</h2>
            
            <table id="priceTable">
                <tr>

                    <th>Traditional</th>
                    <th>Sketch</th>
                    <th>Lineart</th>
                    <th>Color</th>
                    <th>Shading</th>
                    <th>Monochrome</th>
                </tr>
                
                <tr>
                    <td>Head</td>
                    <td>10</td>
                    <td>12</td>
                    <td>15</td>
                    <td>20</td>
                    <td>15</td>
                </tr>
               
                <tr>
                    <td>Torso</td>
                    <td>12</td>
                    <td>15</td>
                    <td>20</td>
                    <td>25</td>
                    <td>20</td>
                </tr>

                <tr>
                    <td>Body</td>
                    <td>15</td>
                    <td>20</td>
                    <td>25</td>
                    <td>30</td>
                    <td>25</td>
                </tr>
               <p>   </p> 
            <table id="priceTable">
                <tr>
                    <th>Digital</th>
                    <th>Sketch</th>
                    <th>Lineart</th>
                    <th>Color</th>
                    <th>Shading</th>
                    <th>Monochrome</th>
                </tr>
                
                <tr>
                    <td>Head</td>
                    <td>12</td>
                    <td>14</td>
                    <td>17</td>
                    <td>22</td>
                    <td>17</td>
                </tr>
               
                <tr>
                    <td>Torso</td>
                    <td>14</td>
                    <td>17</td>
                    <td>22</td>
                    <td>27</td>
                    <td>22</td>
                </tr>

                <tr>
                    <td>Body</td>
                    <td>17</td>
                    <td>22</td>
                    <td>27</td>
                    <td>32</td>
                    <td>27</td>
                </tr>

                <table id="priceTable">
                    <tr>
    
                        <th>Paint</th>
                        <th>Flat</th>
                        <th>Shaded</th>
                    </tr>
                    
                    <tr>
                        <td>SIngular object</td>
                        <td>30</td>
                        <td>35</td>
                    </tr>
                   
                    <tr>
                        <td>Torso</td>
                        <td>45</td>
                        <td>50</td>
                    </tr>
           </table>
           <form action="#">
                  
           <label for="type">Art type</label>
                    <select name="type" id="type">
                        <option value="">--Art type--</option>
                        <option value="trad">Traditional</option>
                        <option value="digi">Digital</option>
                        <option value="line">Paint</option>
                    </select> 

                   
                
                    <label for="style">Style</label>
                    <select name="style" id="style">
                        <option value="">--Style--</option>
                        <option value="chunk">Chunky</option>
                        <option value="semi">Semirealistic</option>
                        <option value="chibi">Chibi</option>
                        <option value="hose">Rubber hose</option>
                    </select>

                    <p>   </p>
                
                    <label for="size">Size</label>
                    <select name="size" id="size">
                        <option value="">--Size--</option>
                        <option value="head">Head</option>
                        <option value="body">Tosro</option>
                        <option value="torso">Full Body</option>
                    </select>


                <p>   </p>

                    <label for="state">State</label>
                    <select name="state" id="state">
                        <option value="">--State--</option>
                        <option value="sketch">Sketch</option>
                        <option value="line">Lineart</option>
                        <option value="mono">Monochrome</option>
                        <option value="color">Flat colors</option>
                        <option value="shade">Shaded</option>
                    </select>

                  
                    <p><h4>Medium</h4></p>
                    <input type="radio" id="paint" name="medium" value="paint">
                      <label for="paint">Paint</label>
                    <input type="radio" id="trad" name="medium" value="trad">
                      <label for="trad">Traditional</label>
                    <input type="radio" id="digi" name="medium" value="digi">
                      <label for="digi">Digital</label>
                      
                    <p><h4>Artstyle</h4></p>

                    <input type="radio" id="chunk" name="style" value="chunk">
                      <label for="Chunk">Chunky Artstyle</label>
                    <input type="radio" id="semi" name="style" value="semi">
                      <label for="semi">Semirealistic</label>
                    <input type="radio" id="chibi" name="style" value="chibi">
                      <label for="chibi">Chibi artstyle</label>
                    <input type="radio" id="hose" name="style" value="hose">
                      <label for="hose">Rubber Hose artstyle</label>
                    
                      <p><h4>Size</h4></p>

                   <input type="radio" id="head" name="size" value="head">
                      <label for="head">Head</label><br>
                    <input type="radio" id="torso" name="size" value="torso">
                      <label for="torso">Torso</label><br>
                    <input type="radio" id="body" name="size" value="body">
                      <label for="body">Body</label>

                      <p><h4>Artwork state </h4></p>

                    <input type="radio" id="sketch" name="state" value="sketch">
                      <label for="sketch">Sketch</label><br>
                    <input type="radio" id="line" name="state" value="line">
                      <label for="line">Lineart</label><br>
                   <input type="radio" id="color" name="state" value="color">
                      <label for="color">Flat color</label>
                   <input type="radio" id="mono" name="state" value="mono">
                      <label for="mono">Monochrome</label>
                   <input type="radio" id="shade" name="state" value="shade">
                      <label for="shade">Shading</label>
                   <input type="radio" id="shape" name="state" value="shape">
                   
                   <p><h4>Background type</h4></p>

                   <input type="radio" id="bg" name="bg" value="bg">
                      <label for="bg">Background</label>
                   <input type="radio" id="shape" name="bg" value="shape">
                      <label for="shape">Shape</label><br>
                   <input type="radio" id="clr" name="bg" value="clr">
                      <label for="clr">Solid color</label><br>
                   <input type="radio" id="airb" name="bg" value="airb">
                      <label for="airb">Airbrush</label>
                   <input type="radio" id="detail" name="bg" value="JavaScript">
                      <label for="detail">Detailed</label>
                   <input type="radio" id="pattern" name="bg" value="JavaScript">
                      <label for="pattern">Pattern</label>
                   <input type="radio" id="basic" name="bg" value="JavaScript">
                       <label for="basic">Basic</label>

                    <p>  </p>   
                   <input type="submit" value="Order">
                 </form>


              <?php 
              
              var_export($_REQUEST);
              ?>
            

        </section>
        
    </main>    
</body>
</html>