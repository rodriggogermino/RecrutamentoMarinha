<?php
// No futuro, este valor virá da tua base de dados ou sistema de ficheiros
// Exemplo: $documentosPendentes = obterDocumentosEmFalta($idUtilizador);
$documentosPendentes = 0; 
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos | Recrutamento Marinha</title>
    <link rel="stylesheet" href="homepage.css">
    <style>
        .pagina-status {
            max-width: 900px;
            margin: 40px auto;
            padding: 24px;
        }

        .pagina-status h1 {
            margin-bottom: 10px;
            font-size: 1.8rem;
        }

        .pagina-status p {
            margin-bottom: 20px;
            color: #444;
        }

        .voltar-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #0b2a5b;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <main class="pagina-status">
        <h1>Documentos para Entregar</h1>
        
        <p>
            Atualmente tens 
            <strong>
                <?php echo $documentosPendentes; ?> 
                <?php echo ($documentosPendentes === 1) ? 'documento' : 'documentos'; ?>
            </strong> 
            <?php echo ($documentosPendentes === 1) ? 'por entregar' : 'por entregar'; ?>.
        </p>
        
        <a class="voltar-link" href="homepage.php">← Voltar à homepage</a>
    </main>
</body>
</html>