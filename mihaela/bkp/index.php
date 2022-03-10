<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Star's art commision shop</title>
        <meta name="description" content="The commision shop of a young self thought artist!">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    
    </head>
    
    <body>

<?php
    $nume = "varsta";
    $varsta = 15;
    $arte = ['Digital', 'Traditional', 'Paint', 15, 20.00];
    $meniuri = [
        ['url'=> '/', 'label' => 'Home','varsta'=>10],
        ['url'=> '/despre', 'label' => 'Despre'],
        ['url'=> '/portofoliu', 'label' => 'Portofoliu', 'varsta'=>12],
        ['url'=> '/contact', 'label' => 'Contact', 'balamuc'=> false]
    ];
    echo "<pre>";
    foreach($meniuri as $key => $meniu) {
        if(isset($meniu["varsta"]) && $meniu["varsta"] >10)
        { 
          echo "varsta este" . $meniu["varsta"];
        }
        if(isset($meniu["balamuc"]) && $meniu["balamuc"] ) {
            echo "este balamuc";
        }
    }
    echo "</pre>";
    
   // boolean => true/false
   //string = "bla balba" ;
   // int = 1;
   // float = 2,354545454545454
   // decimale = 2.3
   // Array
   // Object

    print($varsta);
    echo $varsta;
    var_export($meniuri[3]) ;
    $i = 1;
    for(; $i < 4 ; $i++) {
       echo $meniuri[$i]['label'];
    }
    echo "Variabila i = " . $i . "<br />";
    
    if($varsta > 18) {
        echo "Ai mai mult de 18 ani";
    } else {
        echo  "Ghinion";
    }

?>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- 
            <header> <footer> <aside> <main> <section> <article> <nav> <details>
         -->
         <header>
          <h1>
              Hi , I'm  <?php echo $nume?> - Welcome to my commision shop!
          </h1>
          <h2>
             I do these types of art: 
             <?php 
                foreach($arte as $arta) {
                    echo $arta . ", ";
                }
             ?>
          </h2>
         </header>
         <nav>
                <?php
                    foreach($meniuri as $key => $meniu) {
                        echo '<a href=" ' . $meniu['url'] . ' "> ' . $key . " ->" . $meniu['label'] . ' </a>';
                    }
                ?>
<!-- <a href="index4.html">Home</a>
<a href="despre.html">About</a>
<a href="portofolio.html">Portofolio</a>
<a href="buyart.html">Buy art</a>
<a href="contact.html">Contact & Support</a> -->
         </nav>
         <main>
            <section>
                 <article>
                    Hi! My name is Star. I am a young self thought artist. I want to share my passion with the world, so im starting commisions!
                 </article>

            </section>
          
         </main>

         
        <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">  &copy; Starry Art 2021</span>
        </div>
        </footer>

     
    </body>
</html>