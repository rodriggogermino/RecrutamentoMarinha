<?php
// Configurações e Arrays de Dados para renderização dinâmica
$opcoesHabilitacoes = [
    "Mestrado",
    "Licenciatura",
    "Ensino Secundário",
    "Ensino Profissional",
    "Ensino Básico"
];

$opcoesGenero = [
    "Masculino",
    "Feminino",
    "Outro",
    "Prefiro não dizer"
];
?>
<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Utilities/Images/icone.ico">
    <title>Formulário | Marinha Portuguesa</title>
    <link rel="stylesheet" href="formulario.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="responsive.css"> 
</head>

<body>

    <nav>
        <a href="index.php" id="navLogoS"><img src="Utilities/Images/LogoBlackXS.png" alt="Logotipo Branco | Marinha Portuguesa"></a>
        <a href="index.php" id="navLogoXS"><img src="Utilities/Images/logoWhiteXS.png" alt="Logotipo Branco | Marinha Portuguesa"></a>
        
        <div id="rightNav">
            <form action="pesquisa.php" method="GET">
                <input id="barraPesquisa" name="q" class="barraPesquisa" type="search" placeholder="Pesquise Aqui">
            </form>

            <span id="searchIconMobile" onclick="openNav()"> <!--#### SEARCH ICON MOBILE ####-->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6177 18.0319C15.078 19.2635 13.125 20 11 20C6.02944 20 2 15.9706 2 11C2 6.02944 6.02944 2 11 2C15.9706 2 20 6.02944 20 11C20 13.125 19.2635 15.078 18.0319 16.6177L21.7071 20.2929C22.0976 20.6834 22.0976 21.3166 21.7071 21.7071C21.3166 22.0977 20.6834 22.0977 20.2929 21.7071L16.6177 18.0319ZM4 11C4 7.13401 7.13401 4 11 4C14.866 4 18 7.13401 18 11C18 12.886 17.2541 14.5978 16.0413 15.8565C16.0071 15.8828 15.9742 15.9116 15.9429 15.9429C15.9116 15.9742 15.8827 16.0071 15.8564 16.0413C14.5977 17.2542 12.886 18 11 18C7.13401 18 4 14.866 4 11Z" fill="white" />
                </svg>
            </span>

            <div id="searchIcons"> <!--#### SEARCH ICONS ####-->
                <span id="searchIcon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6177 18.0319C15.078 19.2635 13.125 20 11 20C6.02944 20 2 15.9706 2 11C2 6.02944 6.02944 2 11 2C15.9706 2 20 6.02944 20 11C20 13.125 19.2635 15.078 18.0319 16.6177L21.7071 20.2929C22.0976 20.6834 22.0976 21.3166 21.7071 21.7071C21.3166 22.0977 20.6834 22.0977 20.2929 21.7071L16.6177 18.0319ZM4 11C4 7.13401 7.13401 4 11 4C14.866 4 18 7.13401 18 11C18 12.886 17.2541 14.5978 16.0413 15.8565C16.0071 15.8828 15.9742 15.9116 15.9429 15.9429C15.9116 15.9742 15.8827 16.0071 15.8564 16.0413C14.5977 17.2542 12.886 18 11 18C7.13401 18 4 14.866 4 11Z" fill="black"/>
                    </svg>
                </span>
                <span id="searchIconHover">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11C2 6.02944 6.02944 2 11 2C15.9706 2 20 6.02944 20 11C20 13.125 19.2635 15.078 18.0319 16.6177L21.7071 20.2929C22.0977 20.6834 22.0977 21.3166 21.7071 21.7071C21.3166 22.0977 20.6834 22.0977 20.2929 21.7071L16.6177 18.0319C15.078 19.2635 13.125 20 11 20C6.02944 20 2 15.9706 2 11Z" fill="white" />
                    </svg>
                </span>
            </div>

            <span id="barsIcon"> <!--#### BARS ICON ####-->
                <svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 9.33333C0 8.59695 0.614318 8 1.37212 8H26.0702C26.828 8 27.4423 8.59695 27.4423 9.33333C27.4423 10.0697 26.828 10.6667 26.0702 10.6667H1.37212C0.614318 10.6667 0 10.0697 0 9.33333Z" fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.33333C0 0.596954 0.614318 0 1.37212 0H26.0702C26.828 0 27.4423 0.596954 27.4423 1.33333C27.4423 2.06971 26.828 2.66667 26.0702 2.66667H1.37212C0.614318 2.66667 0 2.06971 0 1.33333Z" fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 17.3333C0 16.597 0.614318 16 1.37212 16H26.0702C26.828 16 27.4423 16.597 27.4423 17.3333C27.4423 18.0697 26.828 18.6667 26.0702 18.6667H1.37212C0.614318 18.6667 0 18.0697 0 17.3333Z" fill="black"/>
                </svg>
            </span>

            <div id="sideMenu" class="side-menu"> <!--#### SIDE MENU ####-->
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

    <!-- O action foi alterado para login.php para redirecionar após o preenchimento bem-sucedido -->
    <form action="login.php" method="POST" class="form-wrapper">
        <div class="form-header">
            <h1>JUNTA-TE A NÓS</h1>
            <p>Preenche o formulário e fica a par das informações sobre os concursos da Marinha!</p>
        </div>

        <div class="form-body">
            <!-- Coluna esquerda -->
            <div class="form-col">
                <h2 class="col-title">Dados Pessoais</h2>

                <div class="field-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" placeholder="Primeiro e Último Nome" required />
                </div>

                <div class="field-group">
                    <label for="telefone">Nº de telemóvel / Telefone</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="" />
                </div>

                <div class="field-group">
                    <label for="nascimento">Data de Nascimento</label>
                    <div class="input-icon">
                        <input type="date" id="nascimento" name="nascimento" value="" required />
                        <span class="icon">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5911 0.929688C15.5911 0.416235 15.1258 0 14.5517 0C13.9777 0 13.5123 0.416235 13.5123 0.929688V1.85938H7.27586V0.929688C7.27586 0.416235 6.8105 0 6.23645 0C5.6624 0 5.19704 0.416235 5.19704 0.929688V1.85938H3.11823C1.39608 1.85938 0 3.10808 0 4.64844V17.6641C0 19.2044 1.39608 20.4531 3.11823 20.4531H17.67C19.3921 20.4531 20.7882 19.2044 20.7882 17.6641V4.64844C20.7882 3.10808 19.3921 1.85938 17.67 1.85938H15.5911V0.929688ZM5.19704 4.64844V3.71875H3.11823C2.54418 3.71875 2.07882 4.13499 2.07882 4.64844V7.4375H18.7094V4.64844C18.7094 4.13499 18.244 3.71875 17.67 3.71875H15.5911V4.64844C15.5911 5.16189 15.1258 5.57812 14.5517 5.57812C13.9777 5.57812 13.5123 5.16189 13.5123 4.64844V3.71875H7.27586V4.64844C7.27586 5.16189 6.8105 5.57812 6.23645 5.57812C5.6624 5.57812 5.19704 5.16189 5.19704 4.64844ZM18.7094 9.29688H2.07882V17.6641C2.07882 18.1775 2.54418 18.5938 3.11823 18.5938H17.67C18.244 18.5938 18.7094 18.1775 18.7094 17.6641V9.29688Z" fill="black"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Coluna direita -->
            <div class="form-col">
                <h2 class="col-title">Habilitações e Segurança</h2>

                <div class="field-group">
                    <label for="email">Endereço de Email</label>
                    <div class="input-icon">
                        <input type="email" id="email" name="email" placeholder="ex@email.com" required />
                    </div>
                </div>

                <div class="field-group">
                    <label for="habilitacoes">Habilitações Literárias</label>
                    <div class="select-wrapper">
                        <select id="habilitacoes" name="habilitacoes">
                            <?php foreach ($opcoesHabilitacoes as $habilitacao): ?>
                                <option value="<?php echo htmlspecialchars($habilitacao); ?>"><?php echo htmlspecialchars($habilitacao); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="field-group">
                    <label for="genero">Género</label>
                    <div class="select-wrapper">
                        <select id="genero" name="genero">
                            <?php foreach ($opcoesGenero as $genero): ?>
                                <option value="<?php echo htmlspecialchars($genero); ?>"><?php echo htmlspecialchars($genero); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="field-group">
                    <label for="password">Palavra-passe</label>
                    <div class="input-icon">
                        <input type="password" id="password" name="password" required />
                        <span class="icon toggle-pw" onclick="togglePassword('password', this)">&#128065;</span>
                    </div>
                </div>

                <div class="field-group">
                    <label for="confirm-password">Confirmar Palavra-passe</label>
                    <div class="input-icon">
                        <input type="password" id="confirm-password" name="confirm_password" required />
                        <span class="icon toggle-pw" onclick="togglePassword('confirm-password', this)">&#128065;</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-footer">
            <button type="submit" class="btn-submit">Entrar</button>
        </div>
    </form>

    <script>
        function togglePassword(id, icon) {
            const input = document.getElementById(id);
            if (input.type === 'password') {
                input.type = 'text';
                icon.style.opacity = '1';
            } else {
                input.type = 'password';
                icon.style.opacity = '0.5';
            }
        }
    </script>

    <!--#### FOOTER ####-->
    <footer>
        <div id="topFooter">
            <div id="logotiposFooter">
                <a href=""><img src="Utilities/Images/logoWhiteXS.png" alt="Logotipo Branco | Marinha Portuguesa"></a>
                <a href=""><img src="Utilities/Images/govLogo.png" alt="Logotipo República Portuguesa"></a>
            </div>
            <div id="logotiposRedes">
                <a href="https://www.facebook.com/@marinharecrutamento" target="_blank">
                    <span id="facebookIcon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.7574 2.75736C11.8826 1.63214 13.4087 1 15 1H18C18.5523 1 19 1.44772 19 2V6C19 6.55228 18.5523 7 18 7H15V9H18C18.3079 9 18.5987 9.14187 18.7882 9.38459C18.9777 9.6273 19.0448 9.94379 18.9701 10.2425L17.9701 14.2425C17.8589 14.6877 17.4589 15 17 15H15V22C15 22.5523 14.5523 23 14 23H10C9.44772 23 9 22.5523 9 22V15H7C6.44772 15 6 14.5523 6 14V10C6 9.44772 6.44772 9 7 9H9V7C9 5.4087 9.63214 3.88258 10.7574 2.75736ZM15 3C13.9391 3 12.9217 3.42143 12.1716 4.17157C11.4214 4.92172 11 5.93913 11 7V10C11 10.5523 10.5523 11 10 11H8V13H10C10.5523 13 11 13.4477 11 14V21H13V14C13 13.4477 13.4477 13 14 13H16.2192L16.7192 11H14C13.4477 11 13 10.5523 13 10V7C13 6.46957 13.2107 5.96086 13.5858 5.58579C13.9609 5.21071 14.4696 5 15 5H17V3H15Z" fill="white" /></svg>
                    </span>
                    <span id="facebookIconHover">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 1C13.4087 1 11.8826 1.63214 10.7574 2.75736C9.63214 3.88258 9 5.4087 9 7V9H7C6.44772 9 6 9.44772 6 10V14C6 14.5523 6.44772 15 7 15H9V22C9 22.5523 9.44772 23 10 23H14C14.5523 23 15 22.5523 15 22V15H17C17.4589 15 17.8589 14.6877 17.9701 14.2425L18.9701 10.2425C19.0448 9.94379 18.9777 9.6273 18.7882 9.38459C18.5987 9.14187 18.3079 9 18 9H15V7H18C18.5523 7 19 6.55228 19 6V2C19 1.44772 18.5523 1 18 1H15Z" fill="white" /></svg>
                    </span>
                </a>
                <a href="https://www.instagram.com/marinharecrutamento" target="_blank">
                    <span id="instagramIcon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.74041 7.51868C10.6739 7.0343 11.7364 6.85661 12.7767 7.01087C13.8378 7.16823 14.8202 7.6627 15.5788 8.42126C16.3374 9.17981 16.8318 10.1622 16.9892 11.2234C17.1434 12.2637 16.9658 13.3261 16.4814 14.2596C15.997 15.1931 15.2306 15.9501 14.2912 16.423C13.3518 16.8958 12.2872 17.0604 11.2489 16.8933C10.2106 16.7262 9.25138 16.236 8.50773 15.4923C7.76408 14.7487 7.27385 13.7895 7.10677 12.7511C6.93969 11.7128 7.10426 10.6482 7.57709 9.70884C8.04992 8.76944 8.80691 8.00305 9.74041 7.51868ZM12.4833 8.98924C11.8591 8.89668 11.2217 9.0033 10.6616 9.29392C10.1015 9.58455 9.64725 10.0444 9.36356 10.608C9.07986 11.1717 8.98112 11.8104 9.08137 12.4334C9.18161 13.0564 9.47575 13.6319 9.92194 14.0781C10.3681 14.5243 10.9437 14.8184 11.5667 14.9187C12.1896 15.0189 12.8284 14.9202 13.392 14.6365C13.9557 14.3528 14.4155 13.8986 14.7061 13.3385C14.9968 12.7784 15.1034 12.1409 15.0108 11.5167C14.9164 10.88 14.6197 10.2906 14.1646 9.83547C13.7095 9.38034 13.12 9.08366 12.4833 8.98924Z" fill="white" /><path d="M17.5 5.5C16.9477 5.5 16.5 5.94772 16.5 6.5C16.5 7.05228 16.9477 7.5 17.5 7.5H17.51C18.0623 7.5 18.51 7.05228 18.51 6.5C18.51 5.94772 18.0623 5.5 17.51 5.5H17.5Z" fill="white" /><path fill-rule="evenodd" clip-rule="evenodd" d="M1 7C1 3.68629 3.68629 1 7 1H17C20.3137 1 23 3.68629 23 7V17C23 20.3137 20.3137 23 17 23H7C3.68629 23 1 20.3137 1 17V7ZM7 3C4.79086 3 3 4.79086 3 7V17C3 19.2091 4.79086 21 7 21H17C19.2091 21 21 19.2091 21 17V7C21 4.79086 19.2091 3 17 3H7Z" fill="white" /></svg>
                    </span>
                    <span id="instagramIconHover">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1 7C1 3.68629 3.68629 1 7 1H17C20.3137 1 23 3.68629 23 7V17C23 20.3137 20.3137 23 17 23H7C3.68629 23 1 20.3137 1 17V7ZM17.5 5.5C16.9477 5.5 16.5 5.94772 16.5 6.5C16.5 7.05228 16.9477 7.5 17.5 7.5H17.51C18.0623 7.5 18.51 7.05228 18.51 6.5C18.51 5.94772 18.0623 5.5 17.51 5.5H17.5ZM12.7767 7.01087C11.7364 6.85661 10.6739 7.0343 9.7404 7.51868C8.8069 8.00305 8.0499 8.76944 7.57707 9.70884C7.10425 10.6482 6.93967 11.7128 7.10675 12.7511C7.27383 13.7895 7.76406 14.7487 8.50771 15.4923C9.25137 16.236 10.2106 16.7262 11.2489 16.8933C12.2872 17.0604 13.3518 16.8958 14.2912 16.423C15.2306 15.9501 15.997 15.1931 16.4814 14.2596C16.9657 13.3261 17.1434 12.2637 16.9892 11.2234C16.8318 10.1622 16.3373 9.17981 15.5788 8.42126C14.8202 7.6627 13.8378 7.16823 12.7767 7.01087Z" fill="white" /></svg>
                    </span>
                </a>
            </div>
        </div>
        <div id="line"></div>
        <div id="bottomFooter">
            <div id="copyrightFooter">
                <p>© <?php echo date('Y'); ?>, MARINHA RECRUTAMENTO</p>
                <p id="barraFooter">|</p>
            </div>
            <div id="linksFooter">
                <a href="acessibilidade.php">Acessibilidade</a>
                <a href="glossario.php">Glossário</a>
                <a href="cookies.php">Cookies</a>
                <a href="avisos-legais.php">Avisos Legais</a>
                <a href="links.php">Links Úteis</a>
                <a href="mapasSite.php">Mapas do Site</a>
                <a href="contactos.php">Contactos</a>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>