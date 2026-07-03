<?php
require_once 'ligacao_bd.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim((string)$_POST['email']) : '';
    $password = isset($_POST['password']) ? (string)$_POST['password'] : '';

    if ($email === '' || $password === '') {
        $_SESSION['login_error'] = 'Preenche todos os campos.';
        header('Location: login.php');
        exit;
    }

    // Tenta usar a tabela 'utilizadores'. Se não existir, o catch vai mostrar erro genérico.
    try {
        $sql = "SELECT id, email, password_hash, ativo FROM utilizadores WHERE email = :email LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            $_SESSION['login_error'] = 'Credenciais inválidas.';
            header('Location: login.php');
            exit;
        }

        if (!empty($user['ativo']) && (int)$user['ativo'] !== 1) {
            $_SESSION['login_error'] = 'Conta inativa.';
            header('Location: login.php');
            exit;
        }

        $hash = $user['password_hash'] ?? '';
        if (!is_string($hash) || $hash === '' || !password_verify($password, $hash)) {
            $_SESSION['login_error'] = 'Credenciais inválidas.';
            header('Location: login.php');
            exit;
        }

        // Login OK
        $_SESSION['user_id'] = (int)$user['id'];
        $_SESSION['user_email'] = (string)$user['email'];
        $_SESSION['logged_in'] = true;

        header('Location: homepage.html');
        exit;
    } catch (Throwable $e) {
        // Evita revelar detalhes internos
        $_SESSION['login_error'] = 'Erro no login. Contacte o administrador.';
        header('Location: login.php');
        exit;
    }
}

$error = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : '';
unset($_SESSION['login_error']);
?>

<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Marinha Portuguesa</title>
    <link rel="icon" type="image/x-icon" href="Utilities/Images/icone.ico">
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <nav>
        <a href="index.php" id="navLogoS"><img src="Utilities/Images/LogoBlackXS.png" alt="Logotipo Branco | Marinha Portuguesa"></a>
        <a href="index.php" id="navLogoXS"><img src="Utilities/Images/logoWhiteXS.png" alt="Logotipo Branco | Marinha Portuguesa"></a>
        <div id="rightNav">
            <form action="/">
                <input id="barraPesquisa" class="barraPesquisa" type="search" placeholder="Pesquise Aqui">
            </form>
            <span id="searchIconMobile" onclick="openNav()">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6177 18.0319C15.078 19.2635 13.125 20 11 20C6.02944 20 2 15.9706 2 11C2 6.02944 6.02944 2 11 2C15.9706 2 20 6.02944 20 11C20 13.125 19.2635 15.078 18.0319 16.6177L21.7071 20.2929C22.0976 20.6834 22.0976 21.3166 21.7071 21.7071C21.3166 22.0977 20.6834 22.0977 20.2929 21.7071L16.6177 18.0319ZM4 11C4 7.13401 7.13401 4 11 4C14.866 4 18 7.13401 18 11C18 12.886 17.2541 14.5978 16.0413 15.8565C16.0071 15.8828 15.9742 15.9116 15.9429 15.9429C15.9116 15.9742 15.8827 16.0071 15.8564 16.0413C14.5977 17.2542 12.886 18 11 18C7.13401 18 4 14.866 4 11Z" fill="white" />
                </svg>
            </span>
            <div id="searchIcons">
                <span id="searchIcon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6177 18.0319C15.078 19.2635 13.125 20 11 20C6.02944 20 2 15.9706 2 11C2 6.02944 6.02944 2 11 2C15.9706 2 20 6.02944 20 11C20 13.125 19.2635 15.078 18.0319 16.6177L21.7071 20.2929C22.0976 20.6834 22.0976 21.3166 21.7071 21.7071C21.3166 22.0977 20.6834 22.0977 20.2929 21.7071L16.6177 18.0319ZM4 11C4 7.13401 7.13401 4 11 4C14.866 4 18 7.13401 18 11C18 12.886 17.2541 14.5978 16.0413 15.8565C16.0071 15.8828 15.9742 15.9116 15.9429 15.9429C15.9116 15.9742 15.8827 16.0071 15.8564 16.0413C14.5977 17.2542 12.886 18 11 18C7.13401 18 4 14.866 4 11Z" fill="black"/>
                    </svg>
                </span>
                <span id="searchIconHover">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11C2 6.02944 6.02944 2 11 2C15.9706 2 20 6.02944 20 11C20 13.125 19.2635 15.078 18.0319 16.6177L21.7071 20.2929C22.0976 20.6834 22.0976 21.3166 21.7071 21.7071C21.3166 22.0977 20.6834 22.0977 20.2929 21.7071L16.6177 18.0319C15.078 19.2635 13.125 20 11 20C6.02944 20 2 15.9706 2 11Z" fill="white" />
                    </svg>
                </span>
            </div>
            <span id="barsIcon">
                <svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 9.33333C0 8.59695 0.614318 8 1.37212 8H26.0702C26.828 8 27.4423 8.59695 27.4423 9.33333C27.4423 10.0697 26.828 10.6667 26.0702 10.6667H1.37212C0.614318 10.6667 0 10.0697 0 9.33333Z" fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.33333C0 0.596954 0.614318 0 1.37212 0H26.0702C26.828 0 27.4423 0.596954 27.4423 1.33333C27.4423 2.06971 26.828 2.66667 26.0702 2.66667H1.37212C0.614318 2.66667 0 2.06971 0 1.33333Z" fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 17.3333C0 16.597 0.614318 16 1.37212 16H26.0702C26.828 16 27.4423 16.597 27.4423 17.3333C27.4423 18.0697 26.828 18.6667 26.0702 18.6667H1.37212C0.614318 18.6667 0 18.0697 0 17.3333Z" fill="black"/>
                </svg>
            </span>
            <div id="sideMenu" class="side-menu">
                <ul>
                    <li><a href="#">Profissões</a></li>
                    <li><a href="#">Concursos</a></li>
                    <li><a href="#">Prepara-te</a></li>
                    <li><a href="#">A tua Carreira</a></li>
                    <li><a href="login.php">Candidata-te</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="login-card">
        <main class="login-container">
            <h1>Login</h1>

            <?php if ($error !== ''): ?>
                <p style="color:#b00020; margin: 0 0 12px 0;"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>

            <form class="login-form" action="login.php" method="POST">
                <div class="input-box">
                    <input name="email" type="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <div class="login-links-row"></div>
                    <input name="password" type="password" placeholder="Password" required>
                </div>
                <a href="recoverpassword.html" class="link-text">Esqueci-me da password</a>
                <button type="submit" class="btn-submit">Entrar</button>

                <a href="formulario.html" class="link-text">Registar-me</a>
            </form>
        </main>
    </div>

    <!--#### FOOTER ####-->
    <footer>
        <div id="topFooter">
            <div id="logotiposFooter">
                <a href=""><img src="Utilities/Images/logoWhiteXS.png" alt="Logotipo Branco | Marinha Portuguesa"></a>
                <a href=""><img src="Utilities/Images/govLogo.png" alt="Logotipo Républica Portuguesa"></a>
            </div>
            <div id="logotiposRedes">
                <a href="https://www.facebook.com/@marinharecrutamento" target="_blank">
                    <span id="facebookIcon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7574 2.75736C11.8826 1.63214 13.4087 1 15 1H18C18.5523 1 19 1.44772 19 2V6C19 6.55228 18.5523 7 18 7H15V9H18C18.3079 9 18.5987 9.14187 18.7882 9.38459C18.9777 9.6273 19.0448 9.94379 18.9701 10.2425L17.9701 14.2425C17.8589 14.6877 17.4589 15 17 15H15V22C15 22.5523 14.5523 23 14 23H10C9.44772 23 9 22.5523 9 22V15H7C6.44772 15 6 14.5523 6 14V10C6 9.44772 6.44772 9 7 9H9V7C9 5.4087 9.63214 3.88258 10.7574 2.75736ZM15 3C13.9391 3 12.9217 3.42143 12.1716 4.17157C11.4214 4.92172 11 5.93913 11 7V10C11 10.5523 10.5523 11 10 11H8V13H10C10.5523 13 11 13.4477 11 14V21H13V14C13 13.4477 13.4477 13 14 13H16.2192L16.7192 11H14C13.4477 11 13 10.5523 13 10V7C13 6.46957 13.2107 5.96086 13.5858 5.58579C13.9609 5.21071 14.4696 5 15 5H17V3H15Z" fill="white" />
                        </svg>
                    </span>
                    <span id="facebookIconHover">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 1C13.4087 1 11.8826 1.63214 10.7574 2.75736C9.63214 3.88258 9 5.4087 9 7V9H7C6.44772 9 6 9.44772 6 10V14C6 14.5523 6.44772 15 7 15H9V22C9 22.5523 9.44772 23 10 23H14C14.5523 23 15 22.5523 15 22V15H17C17.4589 15 17.8589 14.6877 17.9701 14.2425L18.9701 10.2425C19.0448 9.94379 18.9777 9.6273 18.7882 9.38459C18.5987 9.14187 18.3079 9 18 9H15V7H18C18.5523 7 19 6.55228 19 6V2C19 1.44772 18.5523 1 18 1H15Z" fill="white" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div id="line"></div>
        <div id="bottomFooter">
            <div id="copyrightFooter">
                <p>© 2026, MARINHA RECRUTAMENTO</p>
                <p id="barraFooter">|</p>
            </div>
            <div id="linksFooter">
                <a href="acessibilidade.html ">Acessibilidade</a>
                <a href="glossario.html ">Glossário</a>
                <a href="cookies.html ">Cookies</a>
                <a href="avisos-legais.html ">Avisos Legais</a>
                <a href="links.html ">Links Úteis</a>
                <a href="mapasSite.html ">Mapas do Site</a>
                <a href="contactos.html ">Contactos</a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>

