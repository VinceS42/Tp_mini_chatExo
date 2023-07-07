



<h3>Entrez votre pseudo et votre message :</h3>
<form action="./process/process_pseudo_message.php" method="post">
    <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
    <br>
    <input type="text" name="message" id="message" placeholder="Message">
    <input type="hidden" name="datehour" id="datehour" value="<?php date_default_timezone_set('Europe/Paris'); $date = date('Y-m-d H:i:s');?>">
    <br>
    <button type="submit" class="btn">Envoyer</button>
</form>
