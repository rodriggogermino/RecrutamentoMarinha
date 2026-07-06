<?php
// Exemplo: No futuro, este valor virá de uma consulta à Base de Dados
// $totalCandidaturas = $row['total']; 
$totalCandidaturas = 0; 
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidaturas | Recrutamento Marinha</title>
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
        <h1>Candidaturas Submetidas</h1>
        
        <p>
            Atualmente tens 
            <strong><?php echo $totalCandidaturas; ?> 
            <?php echo ($totalCandidaturas === 1) ? 'candidatura' : 'candidaturas'; ?></strong> 
            submetidas.
        </p>
        
        <a class="voltar-link" href="homepage.php">← Voltar à homepage</a>
    </main>
</body>
</html>