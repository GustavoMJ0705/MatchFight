
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome do dojô</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/verdojo.css">
    <script src="../js/nav.js"></script>
</head>
<body>

    <!--Inicio da navbar-->
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
        <!--Inicio da barra de pesquisa-->
        <aside class="sidebar" id="sidebar">
            <span class="close-btn" onclick="toggleSidebar()">&times;</span>
            <ul>
                <?php if (isset($_SESSION['academia_id'])): ?>
                    <li><a href="../html/criardojo.php">Criar Academia</a></li>

                <?php endif; ?>
                <li><a href="home.php">Pagina Inicial</a></li>
                <li><a href="#">Suporte técnico</a></li>
                <li><a href="#">Seja um parceiro</a></li>
                <li><a href="#">Calendário de aulas</a></li>
                <?php if (isset($_SESSION['academia_id']) || isset($_SESSION['professor_id']) || isset($_SESSION['aluno_id'])): ?>
                    <li><a href="../php/logout.php" id="logout-link">Sair</a></li>
               
                
                <?php endif; ?>
            </ul>
        </aside>
    </header> <!--Fim da navbar-->
    

    <main>

        <div class="Container-Carrossel">
            <div class="titulo" style="margin-right: 30vh;">
                <h2>Modalidade</h2>
                <h1>Nome do dojô</h1>
            </div>
            <img src="../img/imgDojoTeste.jpg" style="margin-left: 10vh; margin-top: 5vh; border-radius: 10px;" alt="">
            
                    <!--Fotos de carrossel-->
            <div class="carrossel">
                
                <button class="buttonleft"><img src="../img/voltar.png" alt=""></button>

                <img class="minimg" src="../img/imgDojoTeste.jpg" style="margin-left: 2vh; margin-top: 3vh;
                width: 5.5rem; height: 4.5rem; border-radius: 8px;" alt="">

                <img class="minimg" src="../img/imgDojoTeste.jpg" style="margin-left: 2vh; margin-top: 3vh;
                width: 5.5rem; height: 4.5rem; filter: brightness(60%); border-radius: 8px;" alt="">

                <img class="minimg" src="../img/imgDojoTeste.jpg" style="margin-left: 2vh; margin-top: 3vh;
                width: 5.5rem; height: 4.5rem; filter: brightness(60%); border-radius: 8px;" alt="">

                <img class="minimg" src="../img/imgDojoTeste.jpg" style="margin-left: 2vh; margin-top: 3vh;
                width: 5.5rem; height: 4.5rem; filter: brightness(60%); border-radius: 8px;" alt="">

                <img class="minimg" src="../img/imgDojoTeste.jpg" style="margin-left: 2vh; margin-top: 3vh;
                width: 5.5rem; height: 4.5rem; filter: brightness(60%); border-radius: 8px;" alt="">

                <button class="buttonright"><img src="../img/avancar.png" alt=""></button><br>


            </div>
            <div class="entrardojo" style="display: flex; align-items: center; justify-content: center; margin-top: 2vh; ">
                <button class="entrar-button"><strong>Quero entrar aqui!</strong></button>
            </div>

        </div>

        <!--Cards de informações-->
        <div class="cards-container">
            
        <div class="cardhorarios">
            <div class="infoHorarios">
                <img src="../img/relogio.png" alt="Relógio" />
                <h3>Horários da Semana</h3>
            </div>
            
            <div class="semana-horarios">

                <div class="dia-coluna">
                    <div class="dia-nome">Segunda</div>
                    <div class="horario-item">00:00 - 00:00</div>
                    <div class="horario-item">00:00 - 00:00</div>
                </div>

                <div class="dia-coluna">
                    <div class="dia-nome">Terça</div>
                    <div class="horario-item">00:00 - 00:00</div>
                    <div class="horario-item">00:00 - 00:00</div>
                </div>

                <div class="dia-coluna">
                    <div class="dia-nome">Quarta</div>                        
                    <div class="horario-item">00:00 - 00:00</div>
                    <div class="horario-item">00:00 - 00:00</div>
                </div>

                <div class="dia-coluna">
                    <div class="dia-nome">Quinta</div>
                    <div class="horario-item">00:00 - 00:00</div>
                    <div class="horario-item">00:00 - 00:00</div>
                </div>

                <div class="dia-coluna">
                    <div class="dia-nome">Sexta</div>
                    <div class="horario-item">00:00 - 00:00</div>
                    <div class="horario-item">00:00 - 00:00</div>
                </div>

                <div class="dia-coluna">
                    <div class="dia-nome">Sábado</div>
                    <div class="horario-item">00:00 - 00:00</div>
                    <div class="horario-item">00:00 - 00:00</div>
                </div>
                
                <div class="dia-coluna">
                    <div class="dia-nome">Domingo</div>
                    <div class="horario-item">Fechado</div>
                </div>

            </div>

            <div class="infoEndereco">
                <img src="../img/local.png" alt="Endereço" />
                <h3>Endereço</h3>
            </div>
                
            <div class="info-content">
                <div class="card">
                    <div class="enderecoNome">
                    <p>Rua Teste, 0000 - ######. Santos, SP - 0000000</p>
                    </div>

                    <!-- Mapa com a localização do cep -->
                    <iframe 
                    class="mapa" 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.796430547949!2d-46.66232538502156!3d-23.58009028466925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59d25a1b1a01%3A0x2f3cfb7acb7b8b71!2sParque%20Ibirapuera!5e0!3m2!1spt-BR!2sbr!4v1695568891234" 
                    allowfullscreen="" 
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

            
        
    </main>

        <!--Descrição da academia-->
            <div class="containerDescricao">
                <div class="DescriçãoDojo">
                    <h3>Descrição</h3>
                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci ex temporibus fuga. Eligendi aliquid officia ipsa cum vel vitae? Alias, totam amet quaerat non quisquam repudiandae commodi optio ratione, maiores consequatur deserunt illum illo numquam, suscipit ex fugiat odit asperiores hic mollitia impedit facere earum nemo omnis. Nobis, voluptatibus reprehenderit praesentium est distinctio aspernatur. Quaerat, voluptatum id quis doloremque recusandae quidem beatae. Harum cumque voluptatem nobis ducimus voluptate molestias, officia hic aspernatur! Voluptates nobis natus modi quisquam qui fugit. Deserunt nobis delectus ad tenetur, similique id laborum repellat ducimus expedita recusandae, placeat sequi amet itaque maiores ex numquam temporibus eum.
                    </p>
                </div>
            </div>

</body>
</html>