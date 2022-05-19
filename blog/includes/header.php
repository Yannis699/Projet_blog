
<header>
   <a href="/" class="logo">Blog</a>
   <ul class="header-menu">
       <!-- Utilisation de l'URI pour afficher une classe -->
       <li class="<?= $_SERVER['REQUEST_URI'] ==='/add-article.php' ? 'active' : '' ?>">
           <a href="/add-article.php"> Écrire un article </a>
       </li>
   </ul>
</header>