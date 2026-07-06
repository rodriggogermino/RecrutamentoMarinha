<?php
// Simulação de dados vindos da base de dados (podes alterar estes valores)
$documentosPendentes = 0;
$mensagensNaoLidas = 0;
$candidaturasSubmetidas = 0;

// Lista de concursos abertos para gerar o HTML dinamicamente
$concursos = [
    [
        "titulo" => "Concurso de Admissão de Voluntários para Ingresso na Categoria de Praças da Classe de Músicos (B) dos Quadros Permanentes (QP) – Saxofone; Trompa de Harmonia; Trombone Tenor",
        "inicio" => "14/05/2026",
        "fim" => "31/07/2026",
        "incorporacao" => "09/11/2026",
        "detalhe" => ""
    ],
    [
        "titulo" => "Concurso de Admissão de Voluntários para Prestação de Serviço em Regime de Contrato (RC) ou Regime de Voluntariado (RV) na categoria de Praças para a classe de Serviço Naval (SN) 2026 – 2.ª edição",
        "inicio" => "A definir", 
        "fim" => "A definir",
        "incorporacao" => "A definir",
        "detalhe" => "Informação detalhada sobre este concurso."
    ]
];
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Recrutamento</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="responsive.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <nav>
        <a href="index.php" id="navLogoS"><img src="Utilities/Images/LogoBlackXS.png" alt="Logotipo Branco | Marinha Portuguesa"></a>
        <a href="index.php" id="navLogoXS"><img src="Utilities/Images/logoWhiteXS.png" alt="Logotipo Branco | Marinha Portuguesa"></a>
        
        <div id="rightNav">
            <span id="barsIcon"> 
                <svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 9.33333C0 8.59695 0.614318 8 1.37212 8H26.0702C26.828 8 27.4423 8.59695 27.4423 9.33333C27.4423 10.0697 26.828 10.6667 26.0702 10.6667H1.37212C0.614318 10.6667 0 10.0697 0 9.33333Z" fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.33333C0 0.596954 0.614318 0 1.37212 0H26.0702C26.828 0 27.4423 0.596954 27.4423 1.33333C27.4423 2.06971 26.828 2.66667 26.0702 2.66667H1.37212C0.614318 2.66667 0 2.06971 0 1.33333Z" fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 17.3333C0 16.597 0.614318 16 1.37212 16H26.0702C26.828 16 27.4423 16.597 27.4423 17.3333C27.4423 18.0697 26.828 18.6667 26.0702 18.6667H1.37212C0.614318 18.6667 0 18.0697 0 17.3333Z" fill="black"/>
                </svg>
                <div id="sideMenu" class="side-menu"> 
                    <ul>
                        <li><a href="#">Profissões</a></li>
                        <li><a href="#">Concursos</a></li>
                        <li><a href="#">Prepara-te</a></li>
                        <li><a href="#">A tua Carreira</a></li>
                        <li><a href="inscricao.php">Candidata-te</a></li>
                    </ul>
                </div>
            </span>
        </div>
    </nav>
    
    <main class="container">
        <section class="hero">
            <img src="Utilities/Images/Navio Marinha.png" alt="Navio da Marinha" class="hero-img">
        </section>

        <section class="hero-icons">
            <div class="hero-icons-grid">
                <a class="hero-icon" href="homepage.php" title="Início">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                </a>
                <a class="hero-icon" href="perfil.php" title="Perfil">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </a>
                <a class="hero-icon" href="mensagens.php" title="Mensagens">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                </a>
                <a class="hero-icon" href="documentos.php" title="Documentos">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg>
                </a>
                <a class="hero-icon" href="candidaturas.php" title="Candidaturas">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" x2="21" y1="6" y2="6"/><line x1="8" x2="21" y1="12" y2="12"/><line x1="8" x2="21" y1="18" y2="18"/><line x1="3" x2="3.01" y1="6" y2="6"/><line x1="3" x2="3.01" y1="12" y2="12"/><line x1="3" x2="3.01" y1="18" y2="18"/></svg>
                </a>
                <a class="hero-icon" href="definicoes.php" title="Definições">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="4" y1="21" y2="14"/><line x1="4" x2="4" y1="10" y2="3"/><line x1="12" x2="12" y1="21" y2="12"/><line x1="12" x2="12" y1="8" y2="3"/><line x1="20" x2="20" y1="21" y2="16"/><line x1="20" x2="20" y1="12" y2="3"/><line x1="2" x2="6" y1="14" y2="14"/><line x1="10" x2="14" y1="8" y2="8"/><line x1="18" x2="22" y1="12" y2="12"/></svg>
                </a>
                <a class="hero-icon" href="inscricao.php" title="Candidata-te">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
                </a>
                <a class="hero-icon" href="seguranca.php" title="Alterar Palavra-Passe">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="7.5" cy="15.5" r="5.5"/><path d="m21 2-9.6 9.6"/><path d="m15.5 7.5 3 3L22 7l-3-3Z"/></svg>
                </a>
                <a class="hero-icon" href="estado.php" title="Estado da Candidatura">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="17" x2="22" y1="8" y2="13"/><line x1="22" x2="17" y1="8" y2="13"/></svg>
                </a>
                <a class="hero-icon" href="contactos.php" title="Contactos / Suporte">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </a>
                <a class="hero-icon" href="login.php" title="Terminar Sessão">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1-2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg>
                </a>
            </div>
        </section>

        <section class="status-grid">
            <a class="status-card" href="documentos.php">
                <span>TENS <?php echo $documentosPendentes; ?> DOCUMENTOS PARA ENTREGAR</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a class="status-card" href="mensagens.php">
                <span>TENS <?php echo $mensagensNaoLidas; ?> MENSAGENS PARA LER</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a class="status-card" href="candidaturas.php">
                <span>TENS <?php echo $candidaturasSubmetidas; ?> CANDIDATURAS SUBMETIDAS</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </section>

        <section class="concursos">
            <h2>Concursos abertos</h2>

            <?php foreach ($concursos as $concurso): ?>
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <p><?php echo htmlspecialchars($concurso['titulo']); ?></p>
                        <i class="fa-solid fa-chevron-down accordion-arrow"></i>
                    </div>
                    <div class="accordion-body">
                        <?php if (!empty($concurso['detalhe'])): ?>
                            <p><?php echo htmlspecialchars($concurso['detalhe']); ?></p>
                        <?php else: ?>
                            <p>Início das candidaturas: <?php echo $concurso['inicio']; ?></p>
                            <p>Fim das candidaturas: <?php echo $concurso['fim']; ?></p>
                            <p>Incorporação: <?php echo $concurso['incorporacao']; ?></p>
                        <?php endif; ?>

                        <div class="candidatar-me-row">
                            <a class="candidatarBtn" href="candidatar-me.php">candidatar-me</a>
                        </div>

                        <div class="incorporacao-row">
                            <a class="downloadLink" href="Utilities/Docs/aviso.pdf" download="aviso.pdf">
                                <span class="incorporacao-text">Diário da República</span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>

        <footer>
            <div id="topFooter">
                <div id="logotiposFooter">
                    <a href=""><img src="Utilities/Images/logoWhiteXS.png" alt="Logotipo Branco | Marinha Portuguesa"></a>
                    <a href=""><img src="Utilities/Images/govLogo.png" alt="Logotipo República Portuguesa"></a>
                </div>
                <div id="logotiposRedes">
                    <!-- Os SVGs das redes sociais mantêm-se intactos -->
                    <a href="https://www.facebook.com/@marinharecrutamento" target="_blank">
                        <span id="facebookIcon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.7574 2.75736C11.8826 1.63214 13.4087 1 15 1H18C18.5523 1 19 1.44772 19 2V6C19 6.55228 18.5523 7 18 7H15V9H18C18.3079 9 18.5987 9.14187 18.7882 9.38459C18.9777 9.6273 19.0448 9.94379 18.9701 10.2425L17.9701 14.2425C17.8589 14.6877 17.4589 15 17 15H15V22C15 22.5523 14.5523 23 14 23H10C9.44772 23 9 22.5523 9 22V15H7C6.44772 15 6 14.5523 6 14V10C6 9.44772 6.44772 9 7 9H9V7C9 5.4087 9.63214 3.88258 10.7574 2.75736ZM15 3C13.9391 3 12.9217 3.42143 12.1716 4.17157C11.4214 4.92172 11 5.93913 11 7V10C11 10.5523 10.5523 11 10 11H8V13H10C10.5523 13 11 13.4477 11 14V21H13V14C13 13.4477 13.4477 13 14 13H16.2192L16.7192 11H14C13.4477 11 13 10.5523 13 10V7C13 6.46957 13.2107 5.96086 13.5858 5.58579C13.9609 5.21071 14.4696 5 15 5H17V3H15Z" fill="white" /></svg>
                        </span>
                    </a>
                    <a href="https://www.instagram.com/marinharecrutamento" target="_blank">
                        <span id="instagramIcon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.74041 7.51868C10.6739 7.0343 11.7364 6.85661 12.7767 7.01087C13.8378 7.16823 14.8202 7.6627 15.5788 8.42126C16.3374 9.17981 16.8318 10.1622 16.9892 11.2234C17.1434 12.2637 16.9658 13.3261 16.4814 14.2596C15.997 15.1931 15.2306 15.9501 14.2912 16.423C13.3518 16.8958 12.2872 17.0604 11.2489 16.8933C10.2106 16.7262 9.25138 16.236 8.50773 15.4923C7.76408 14.7487 7.27385 13.7895 7.10677 12.7511C6.93969 11.7128 7.10426 10.6482 7.57709 9.70884C8.04992 8.76944 8.80691 8.00305 9.74041 7.51868ZM12.4833 8.98924C11.8591 8.89668 11.2217 9.0033 10.6616 9.29392C10.1015 9.58455 9.64725 10.0444 9.36356 10.608C9.07986 11.1717 8.98112 11.8104 9.08137 12.4334C9.18161 13.0564 9.47575 13.6319 9.92194 14.0781C10.3681 14.5243 10.9437 14.8184 11.5667 14.9187C12.1896 15.0189 12.8284 14.9202 13.392 14.6365C13.9557 14.3528 14.4155 13.8986 14.7061 13.3385C14.9968 12.7784 15.1034 12.1409 15.0108 11.5167C14.9164 10.88 14.6197 10.2906 14.1646 9.83547C13.7095 9.38034 13.12 9.08366 12.4833 8.98924Z" fill="white" /><path d="M17.5 5.5C16.9477 5.5 16.5 5.94772 16.5 6.5C16.5 7.05228 16.9477 7.5 17.5 7.5H17.51C18.0623 7.5 18.51 7.05228 18.51 6.5C18.51 5.94772 18.0623 5.5 17.51 5.5H17.5Z" fill="white" /><path fill-rule="evenodd" clip-rule="evenodd" d="M1 7C1 3.68629 3.68629 1 7 1H17C20.3137 1 23 3.68629 23 7V17C23 20.3137 20.3137 23 17 23H7C3.68629 23 1 20.3137 1 17V7ZM7 3C4.79086 3 3 4.79086 3 7V17C3 19.2091 4.79086 21 7 21H17C19.2091 21 21 19.2091 21 17V7C21 4.79086 19.2091 3 17 3H7Z" fill="white" /></svg>
                        </span>
                    </a>
                    <!-- Outros links de redes sociais mantidos como no original... -->
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
    </main>

    <script src="script.js"></script>
</body>

</html>