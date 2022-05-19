<pre>
    <?php
    print_r($_SERVER);
    ?>
</pre>

<header>
   <a href="/" class="logo">Blog</a>
   <ul class="header-menu">
       <li class="<?= $_SERVER['REQUEST_URI'] === ?>">
           <a href="/add-article.php"> Écrire un article </a>
       </li>
   </ul>
</header>