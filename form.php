<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
 <title>HTTP Template</title>
</head>

<body>

<form  action="thanks.php"  method="post">
    <div>
      <label  for="name">Nom :</label>
      <input  type="text"  id="nom"  name="name" required>
    </div>
    <div>
      <label  for="firstname">Prénom :</label>
      <input  type="text"  id="prenom"  name="firstname" required>
    </div>
    <div>
      <label  for="email">Courriel :</label>
        <input  type="email"  id="mail"  name="email" required>
    </div>
    <div>
      <label  for="phone">Téléphone :</label>
        <input  type="tel"  id="phone"  name="phone" required>
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
      <textarea  id="message"  name="message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

</body>
</html>
