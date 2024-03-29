<nav id="hero">
        <div class="navbar">
            <h2>Note<span class="text-logo">Sync</span></h2>
            <div class="nav-menu">
                <ul>
                    <li>
                        <a href="#hero">
                            Home
                        </a>
                    <li>
                        <a href="#about">
                            NoteSync
                        </a>
                    <li>
                        <a href="#contact">
                            Contato
                        </a>
                    </li>
                    <a class="cta-register" href="/register">
                        Registre-se
                    </a>
                    </li>
                    <li>
                    <!-- Muda o botão se o usuário tiver logado -->
                    <?php if ($_SESSION) : ?>
                        <a class="cta" href="/dashboard">
                            Voltar Dashboard
                        </a>
                    <?php else : ?>
                        <a class="cta" href="/login">
                            Faça login
                        </a>
                    <?php endif; ?>
                    </li>
                </ul>

                <div id="myNav" class="overlay">
                    <a class="closebtn" id="closeNav">&times;</a>

                    <div class="overlay-content">
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <a href="#">Clients</a>
                        <a href="#">Contact</a>
                        <a href="/register">
                            Registre-se
                        </a>
                        <a href="/login">
                            Faça login
                        </a>
                    </div>
                </div>
                <span id="openNav">><</span>
            </div>
        </div>
    </nav>