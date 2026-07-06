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

        