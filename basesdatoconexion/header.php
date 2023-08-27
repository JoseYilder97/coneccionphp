<header>
    <a href="/registro_usuarios">Registro de usuarios</a>
</header><?php
            session_start();
            session_unset();
            session_destroy();
            header('Location: /registro_usuarios');

            ?>