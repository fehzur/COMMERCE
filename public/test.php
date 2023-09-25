<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hamburger-menu {
  width: 30px;
  height: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}

.hamburger-icon {
  width: 100%;
  height: 2px;
  background-color: black;
  margin: 2px 0;
}

.menu {
  display: none; /* Masquer le menu par défaut */
  /* Styles supplémentaires pour le menu */
}
    </style>
</head>
<body>
<div class="hamburger-menu">
  <div class="hamburger-icon">
    <img src="../image/4.png" alt="">
  </div>
</div>

<div class="menu">
  <img src="../image/6.png" alt="">
</div>
<script>
    var hamburgerMenu = document.querySelector('.hamburger-menu');
var menu = document.querySelector('.menu');

hamburgerMenu.addEventListener('click', function() {
  // Vérifier si le menu est actuellement visible ou masqué
  if (menu.style.display === 'none') {
    // Afficher le menu
    menu.style.display = 'block';
  } else {
    // Masquer le menu
    menu.style.display = 'none';
  }
});
</script>
</body>
</html>