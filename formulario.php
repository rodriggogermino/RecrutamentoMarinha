<?php
// Mantém a estrutura original em HTML, apenas alterada para PHP.
// Não há lógica back-end neste momento.
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
</head>

<body>

    <nav>
        <a href="index.php" id="navLogoS"><img src="Utilities/Images/LogoBlackXS.png" alt="Logotipo Branco | Marinha Portuguesa"></a>
        <a href="index.php" id="navLogoXS"><img src="Utilities/Images/logoWhiteXS.png" alt="Logotipo Branco | Marinha Portuguesa"></a>
        <div id="rightNav">

            </a>
            <form action="/">
                <input id="barraPesquisa" class="barraPesquisa" type="search" placeholder="Pesquise Aqui">
            </form>
            <span id="searchIconMobile" onclick="openNav()"> <!--#### SEARCH ICON MOBILE ####-->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M16.6177 18.0319C15.078 19.2635 13.125 20 11 20C6.02944 20 2 15.9706 2 11C2 6.02944 6.02944 2 11 2C15.9706 2 20 6.02944 20 11C20 13.125 19.2635 15.078 18.0319 16.6177L21.7071 20.2929C22.0976 20.6834 22.0976 21.3166 21.7071 21.7071C21.3166 22.0977 20.6834 22.0977 20.2929 21.7071L16.6177 18.0319ZM4 11C4 7.13401 7.13401 4 11 4C14.866 4 18 7.13401 18 11C18 12.886 17.2541 14.5978 16.0413 15.8565C16.0071 15.8828 15.9742 15.9116 15.9429 15.9429C15.9116 15.9742 15.8827 16.0071 15.8564 16.0413C14.5977 17.2542 12.886 18 11 18C7.13401 18 4 14.866 4 11Z"
                        fill="white" />
                </svg>
            </span>
            <div id="searchIcons">
                <!--#### SEARCH ICONS ####-->
                <span id="searchIcon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.6177 18.0319C15.078 19.2635 13.125 20 11 20C6.02944 20 2 15.9706 2 11C2 6.02944 6.02944 2 11 2C15.9706 2 20 6.02944 20 11C20 13.125 19.2635 15.078 18.0319 16.6177L21.7071 20.2929C22.0976 20.6834 22.0976 21.3166 21.7071 21.7071C21.3166 22.0977 20.6834 22.0977 20.2929 21.7071L16.6177 18.0319ZM4 11C4 7.13401 7.13401 4 11 4C14.866 4 18 7.13401 18 11C18 12.886 17.2541 14.5978 16.0413 15.8565C16.0071 15.8828 15.9742 15.9116 15.9429 15.9429C15.9116 15.9742 15.8827 16.0071 15.8564 16.0413C14.5977 17.2542 12.886 18 11 18C7.13401 18 4 14.866 4 11Z" fill="black"/>
                    </svg>
                </span>
                <span id="searchIconHover">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 11C2 6.02944 6.02944 2 11 2C15.9706 2 20 6.02944 20 11C20 13.125 19.2635 15.078 18.0319 16.6177L21.7071 20.2929C22.0977 20.6834 22.0977 21.3166 21.7071 21.7071C21.3166 22.0977 20.6834 22.0977 20.2929 21.7071L16.6177 18.0319C15.078 19.2635 13.125 20 11 20C6.02944 20 2 15.9706 2 11Z"
                            fill="white" />
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
            <div id="sideMenu" class="side-menu">
                <!--#### SIDE MENU ####-->
                <ul>
                    <li><a href="#">Profissões</a></li>
                    <li><a href="#">Concursos</a></li>
                    <li><a href="#">Prepara-te</a></li>
                    <li><a href="#">A tua Carreira</a></li>
                    <li><a href="login.html">Candidata-te</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <input id="barraPesquisa" class="barraPesquisa" type="search" placeholder="Pesquise Aqui">
    </form>
    </div>


    <div class="form-wrapper">
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
                    <input type="text" id="nome" placeholder="Primeiro e Ultimo Nome" />
                </div>

                <div class="field-group">
                    <label for="telefone">Nº de telemóvel / Telefone</label>
                    <input type="tel" id="telefone" placeholder="" />
                </div>

                <div class="field-group">
                    <label for="nascimento">Data de Nascimento</label>
                    <div class="input-icon">
                        <input type="date" id="nascimento" value="" />
                        <span class="icon"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <input type="email" id="email" placeholder="ex@email.com" />
                    </div>
                </div>

                <div class="field-group">
                    <label for="habilitacoes">Habilitações Literárias</label>
                    <div class="select-wrapper">
                        <select id="habilitacoes">
                            <option>Mestrado</option>
                            <option>Licenciatura</option>
                            <option>Ensino Secundário</option>
                            <option>Ensino Profissional</option>
                            <option>Ensino Básico</option>
                        </select>
                    </div>
                </div>

                <div class="field-group">
                    <label for="genero">Género</label>
                    <div class="select-wrapper">
                        <select id="genero">
                            <option>Masculino</option>
                            <option>Feminino</option>
                            <option>Outro</option>
                            <option>Prefiro não dizer</option>
                        </select>
                    </div>
                </div>

                <div class="field-group">
                    <label for="password">Palavra-passe</label>
                    <div class="input-icon">
                        <input type="password" id="password" value="password" />
                        <span class="icon toggle-pw" onclick="togglePassword('password', this)">&#128065;</span>
                    </div>
                </div>

                <div class="field-group">
                    <label for="confirm-password">Confirmar Palavra-passe</label>
                    <div class="input-icon">
                        <input type="password" id="confirm-password" value="password123" />
                        <span class="icon toggle-pw" onclick="togglePassword('confirm-password', this)">&#128065;</span>

                    </div>
                </div>
            </div>
        </div>

        <div class="form-footer">
            <form action="login.html" method="get">
                <button type="submit" class="btn-submit">Entrar</button>
            </form>
        </div>
    </div>

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
                <a href=""><img src="Utilities/Images/govLogo.png" alt="Logotipo Républica Portuguesa"></a>
            </div>
            <div id="logotiposRedes">
                <a href="https://www.facebook.com/@marinharecrutamento" target="_blank">
                    <span id="facebookIcon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 1C13.4087 1 11.8826 1.63214 10.7574 2.75736C9.63214 3.88258 9 5.4087 9 7V9H7C6.44772 9 6 9.44772 6 10V14C6 14.5523 6.44772 15 7 15H9V22C9 22.5523 9.44772 23 10 23H14C14.5523 23 15 22.5523 15 22V15H17C17.4589 15 17.8589 14.6877 17.9701 14.2425L18.9701 10.2425C19.0448 9.94379 18.9777 9.6273 18.7882 9.38459C18.5987 9.14187 18.3079 9 18 9H15V7H18C18.5523 7 19 6.55228 19 6V2C19 1.44772 18.5523 1 18 1H15Z" fill="white" />
                        </svg>
                    </span>
                </a>
                <!-- Mantido o resto do footer original (não alterado) -->
                <a href="https://www.instagram.com/marinharecrutamento" target="_blank"> <span id="instagramIcon"></span> </a>
                <a href="https://x.com/marinhapt" target="_blank"> <span id="xIcon"></span> </a>
                <a href="https://www.youtube.com/@MarinhaPortuguesa" target="_blank"> <span id="youtubeIcon"></span> </a>
                <a href="https://www.linkedin.com/in/marinha-portuguesa" target="_blank"> <span id="linkedinIcon"></span> </a>
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

