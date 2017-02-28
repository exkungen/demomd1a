<html>
 <head>
 <title>Feedback</title>
 </head>
 <body>
 <h2>Bedankt  voor je feedback!</h2>
     <a href="index.html"><p>Ga hier weer terug naar de home pagina</p></a>
 <?php
 $naam = $_POST['naam'];
 $other = $_POST['other'];
 $email = $_POST['email'];
 $to = '23136@ma-web.nl';
 $subject = 'Feedback';
 $from = $_POST['email'];
 $msg = 'Hallo dit bericht is van ' . $from . 
 ' Dit werd als feedback gegeven:' . $other .
 '. Dit is de gebruikers naam van de gebruiker: ' . $naam . '.';


 mail($to, $subject, $msg, 'From: ' . $from);
 ?>
 </body>
</html>
