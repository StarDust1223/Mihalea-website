<?php

var_dump($_REQUEST);

$message = "Mesaj de la: ";
if(isset($_REQUEST['email'])) {
    $message .= $_REQUEST['email'];
}
if(isset($_REQUEST['message'])) {
    $message .= "\n Mesaj: " . $_REQUEST['message'];
}

$mesajTrimis = $to      = 'mihasered@gmail.com';
$subject = 'Mesaj site';
$headers = 'From: mihaela@dotpxl.ro' . "\r\n" .
    'Reply-To: mihaela@dotpxl.ro' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);;
if($mesajTrimis) {
    echo "Multumim, Mesajul a fost trimis";
} else {
    echo "Ieroare";
}


?>


<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact & support</title>
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
            <a href="buyart.html">Buy art</a>
            <a href="contact.html">Contact & Support</a>
       </nav>
       <main>
           <aside id="asideContact">
            <table id="contactTable">
                <tr>
                    <td>Contact info</td>
                    <td>Star</td>
                <tr>
                    <td>Email</td>
                    <td>mihasered@gmail.com</td>
                </tr>
                <tr>
                    <td>Numar</td>
                    <td>13243567788</td>
                </tr>
                <tr>
                    <td>Instagram</td>
                    <td><a href="hhttps://www.instagram.com/moonie.love_draws/">@moonie.love_draws</td>
                </tr>
                <tr>
                    <td>a</td>
                    <td>b</td>
                </tr>
            </table>
           </aside>

           <section>
               <form action="#">
                    <label for="nume" >Name:</label>
                    <input type="text" name="name" id="nume" required placeholder="Your name">
                    <br>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required placeholder="Your email">
                    <br>
                    <label for="varsta">Age:</label>
                    <input type="number" name="age" id="varsta" required placeholder="Your age">
                    <p>  </p>
                    <label for="">Wanna recieve promotional deals? (not functioning yet)</label>
                    <label for="sellYes">Yes</label>
                    <input type="radio" name="agree" value="yes" id="sellYes">
                    <label for="sellYes">No</label>
                    <input type="radio" name="agree" value="no" id="sellNo">
                    <br>
                    <label for="mesaj">Description:</label>
                    <textarea name="message" id="mesaj" cols="30" rows="10" required>Problem description</textarea>
                    <br>
                    <label for="style">Problem</label>
                    <select name="style" id="style">
                        <option value="">--Problem type--</option>
                        <option value="color">Transport issue</option>
                        <option value="mono">Art issue</option>
                        <option value="line">other</option>
                    </select>
                    <br>
                    <!-- <input type="button" value="Trimite"> -->
                    <button type="submit">Send</button>

                    <label for="style">Art type</label>
                    <select name="style" id="style">
                        <option value="">--Art type--</option>
                        <option value="color">Transport issue</option>
                        <option value="mono">Art issue</option>
                        <option value="line">other</option>
                    </select>

               </form>
           </section>
       </main>
</body>
</html>