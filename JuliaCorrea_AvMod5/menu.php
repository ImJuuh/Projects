
<ul class="navbar-nav ml-auto" img>
    <li class="nav-item">
        <a class="nav-link" href="index.html">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="servicos.html">Receitas</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="contactos.html">Contactos</a>
    </li>
    <?php
    // Adicione um link de login ou logout dinâmico
    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
        echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
    } else {
        echo '<li class="nav-item active" style="margin-top: 6px;"><a style="color: white;" class="hover-rbw" href="login.html">Login</a></li>';
    }
    ?>
</ul>
