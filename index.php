<?php

require_once __DIR__."/ShopOnline-classes/user.php";
require_once __DIR__."/ShopOnline-classes/product.php";
require_once __DIR__."/ShopOnline-classes/premiumUser.php";

$new_user = new User("matteo","rossi",34);
$new_user->setDiscount(15);

$new_premiumUser = new PremiumUser("luca","verdi",85,"hai vinto un buono regalo!!!");

$new_product = new Product("martello","utensile",15);
$new_product->setRecycled(true) ;
$new_product->setMaterials("legno , ferro") ;




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>utente classic</h1>
  <h3> name--> <?php echo $new_user->getName()  ?></h3>
  <h3> lastname--> <?php echo $new_user->getLastname()  ?></h3>
  <h3> age--> <?php echo $new_user->getAge()  ?></h3>
  <h3> sconto--> <?php echo $new_user->getDiscount()  ?></h3>
  <h3> nome oggetto--> <?php echo $new_product->getName()  ?></h3>
  <h3> costo oggetto--> <?php echo $new_product->getCost()  ?></h3>
  <h3> tipologia oggetto--> <?php echo $new_product->getType()  ?></h3>
  <h3> prezzo finale oggetto--> <?php echo $new_user->getFinalPrice($new_product->getCost())  ?></h3>
  <h3> reciclato--> <?php echo $new_product->isRecycled() ?></h3>
  <h3> materiali--> <?php echo $new_product->getMaterials() ?></h3>



  <h1>utente premium</h1>
  <h3> name--> <?php echo $new_premiumUser->getName()  ?></h3>
  <h3> lastname--> <?php echo $new_premiumUser->getLastname()  ?></h3>
  <h3> age--> <?php echo $new_premiumUser->getAge()  ?></h3>
  <h3> sconto--> <?php echo $new_premiumUser->getDiscount()  ?></h3>
  <h3> regalo--> <?php echo $new_premiumUser->getGift()  ?></h3>
  <h3> nome oggetto--> <?php echo $new_product->getName()  ?></h3>
  <h3> costo oggetto--> <?php echo $new_product->getCost()  ?></h3>
  <h3> tipologia oggetto--> <?php echo $new_product->getType()  ?></h3>
  <h3> prezzo finale oggetto--> <?php echo $new_premiumUser->getFinalPrice($new_product->getCost())  ?></h3>
  <h3> reciclato--> <?php echo $new_product->isRecycled() ?></h3>
  <h3> materiali--> <?php echo $new_product->getMaterials() ?></h3>

</body>
</html>