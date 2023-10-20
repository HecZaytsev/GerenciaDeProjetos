<?php
if (!session()->get('logged_in')) {
    header("Location: " . base_url('/login'));
    exit(); // Certifique-se de sair do script após o redirecionamento
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Menu de Navegação</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Cinza claro */
        }
        .navbar {
            background-color: #ffc107; /* Amarelo */
        }
        .navbar-brand {
            color: #ffffff; /* Branco */
        }
        .nav-link {
            color: #ffffff; /* Branco */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">Menu de Navegação</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Configurações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/sair') ?>">Sair</a> <!-- Adicione a URL de logout aqui -->
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center">
                <h2>Você recebeu acesso ao sistema!</h2>
                <!-- Conteúdo adicional da página -->
            </div>
        </div>
    </div>
</div>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
