<?php require base_path("views/partials/dashboard/head.php"); ?>

<body>
    <div id="app">
        <nav>

            <div class="logo">
                <h1>Note<span>Sync</span></h1>


            </div>
            <ul>
                <li>
                    <a href="/dashboard">
                        <ion-icon name="home-outline"></ion-icon>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/notes">
                        <ion-icon name="document-text-outline"></ion-icon>
                        Anotações
                    </a>
                </li>
                <li>
                    <a href="/account">
                        <ion-icon name="settings-outline"></ion-icon>
                        Minha Conta
                    </a>
                </li>
                <li>
                    <a href="">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                        Comentários
                    </a>
                </li>
                <li>
                    <a href="">
                        <ion-icon name="documents-outline"></ion-icon>
                        Relatórios
                    </a>
                </li>
                <li>
                    <a href="">
                        <ion-icon name="mail-outline"></ion-icon>
                        E-mails
                    </a>
                </li>
                <li>
                    <a href="">
                        <ion-icon name="bag-check-outline"></ion-icon>
                        Segurança
                    </a>
                </li>


                <li>
                    <ion-icon name="log-out-outline"></ion-icon>
                    <?php if ($_SESSION["user"] ?? false) : ?>
                        <form action="/session" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit">Sair</button>
                        </form>
                    <?php endif; ?>
                </li>




            </ul>
        </nav>
        <main>

            <div class="inner">
                <button class="toggle-btn">
                    <ion-icon name="reorder-three-outline"></ion-icon>
                </button>
                <section class="title-avatar">
                    <h1>Minha conta</h1>
                    
                    <div>
                        <img src="/images/avatar.svg">
                    </div>
                </section>

                <section class="conta">
                    <form action="" style="width: 400px; margin-top: 1rem;">
                        <h2>Informações da Conta</h2>
                        <div>
                            <label for="#">E-mail</label><br>
                            <input type="text">
                        </div>
                        <div>
                            <label for="#">Senha</label><br>
                            <input type="text">
                        </div>

                        <h2 style="margin-top: 3rem;">Informações Pessoais</h2>
                        <div>
                            <label for="#">Nome</label><br>
                            <input type="text">
                        </div>
                        <div>
                            <label for="#">Contato</label><br>
                            <input type="text">
                        </div>
                    </form>

                    <div class="profile">
                        <div class="profile-content">
                            <div>
                            <img src="/images/avatar.svg" alt="">
                            </div>
                            <div>
                                <h3>Nome</h3>
                                <p>Luiz Felipe</p>
                            </div>
                            <div>
                                <h3>Contato</h3>
                                <p>(99) 9999-9999</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nav = document.querySelector('nav');
            const toggleBtn = document.querySelector('.toggle-btn');

            toggleBtn.addEventListener('click', function() {
                nav.classList.toggle('show');
            });
        });
    </script>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>