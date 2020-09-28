<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
 <title>HTTP Template</title>
</head>

<body>

<p>

Merci <?php echo $_POST['user_firstname']; ?> <?php echo $_POST['user_name']; ?> de nous avoir contacté à propos de “<?php echo $_POST['subject']; ?>”.

Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST['user_email']; ?> ou par téléphone au <?php echo $_POST['user_phone']; ?> dans les plus brefs délais pour traiter votre demande : 

<?php echo $_POST['user_message']; ?>

</p>





</body>
</html>