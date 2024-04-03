<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Tabela de Pesquisa</h1>
    <table>
        <tr>
            <th>Região</th>
            <th>Descrição</th>
            <th>Status</th>
        </tr>
        <?php require 'pesquisa.php'; ?>
    </table>
</body>
</html>
