<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MatchFight - Academias</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <script src="../js/nav.js"></script>
    <script src="../js/dojoStorage.js"></script>
    <script src="../js/homeCards.js"></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="menu-icon" onclick="toggleSidebar()">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
           
             
          
            <div class="search-bar">
                <input type="text" placeholder="Pesquisar academias...">
            </div>
            <div class="Perfil">
                 <?php if (isset($_SESSION['professor_id']) || isset($_SESSION['aluno_id'])): ?>
                    
                <a href="mperfil.php" class="lbottom">Meu Perfil</a>
                <?php elseif (isset($_SESSION['academia_id'])):    ?>
                   <?php else: ?>
                    <a href="contas.html" id="login-link" class="lbottom">Login</a></div>
              
            <?php endif; ?>
            </div> 
        </nav>
        
        <aside class="sidebar" id="sidebar">
            <span class="close-btn" onclick="toggleSidebar()">&times;</span>
            <ul>
                <?php if (isset($_SESSION['academia_id'])): ?>
                    <li><a href="../html/criardojo.php">Criar Academia</a></li>

                <?php endif; ?>
                
                <li><a href="#">Suporte técnico</a></li>
                <li><a href="#">Seja um parceiro</a></li>
                <li><a href="#">Calendário de aulas</a></li>
                <?php if (isset($_SESSION['academia_id']) || isset($_SESSION['professor_id']) || isset($_SESSION['aluno_id'])): ?>
                    <li><a href="../php/logout.php" id="logout-link">Sair</a></li>
               
                
                <?php endif; ?>
            </ul>
        </aside>
    </header>

    <main>
        <div class="page-header">
            
        </div>

        <div class="cards-container">
            <header><h1>Academias Disponíveis</h1></header>
            <div class="main">
                <div class="card">
                    <img src="../img/afapm_jiu.png" alt="AFG Taekwondo">
                    <div class="card-content">
                        <h3>AFG Taekwondo</h3>
                        <p>Rua Uberaba, 460 - Jardim Independencia, São Vicente - SP,<br> 11380-520</p>
                        <button> <a href="../html/home_dojo.php"></a>Ver academia</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="cards-container">
            <!-- Additional cards container -->
        </div>
    </main>
</body>
</html>
