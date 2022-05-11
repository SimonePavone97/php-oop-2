<!--Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.-->

<?php

include __DIR__ . '/ecommerce.php';


$articolo1 = new Ecommerce ( "Croccantini", "Osso di gomma", "cuccia husky");




echo "<p>" .  $articolo1 -> cibo  . "</p>";
echo "<p>" .  $articolo1 -> giochi  . "</p>";
echo "<p>" .  $articolo1 -> cucce  . "</p>";


include __DIR__ . '/user.php';


$Utente1 = new User ( "Simone", "Pavone", "simone@gmail.com", 2021);

echo "<p>" .  $Utente1 -> nome  . "</p>";
echo "<p>" .  $Utente1 -> cognome  . "</p>";
echo "<p>" .  $Utente1 -> email . "</p>";
echo "<p>" .  $Utente1 -> pagamento . "</p>";



echo $Utente1 -> setSconto ( $Utente1 -> nome );

echo "<p>" . $Utente1 -> getSconto() . "</p>";






?>