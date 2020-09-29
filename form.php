<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
 <title>HTTP Template</title>
</head>

<body>

<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="prenom">Prénom :</label>
      <input  type="text"  id="prenom"  name="user_firstname">
    </div>
    <div>
      <label  for="mail">Courriel :</label>
        <input  type="email"  id="mail"  name="user_email">
    </div>
    <div>
      <label  for="phone">Téléphone :</label>
        <input  type="tel"  id="phone"  name="user_phone">
    </div>

    <div>
      <select name="subject" size="1">
        <option> Sujet 1
        <option> Sujet 2
        <option> Sujet 3
      </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

</body>
</html>
