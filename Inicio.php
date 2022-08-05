<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style_inicio.css">
    <link rel="stylesheet" href="style_mobile.css">
    <link rel="sortcut icon" href="icone.png"  type="image/x-icon" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>

<body>
    <header>

        <nav class="menu" id="menu">
            <ul>

                <li> <a href="Inicio.php">Início </a> </li>
                <li> <a href="contato.html" id="contato">Contato </a>
                </li>
                <div class="btn-cadastrar"><button type="button" class="btn btn-primary btn-C" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Cadastrar -se </button></div>
                <?php
                error_reporting(0);
                require_once "conexao.php";

                if ($_POST['enviar']) {
                    if ($_POST) {
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];

                        $sql = "INSERT INTO usuarios values(default,'$nome','$email',NOW())";

                        $cadastro = mysqli_query($conexao, $sql);

                        if ($cadastro == true) {
                ?>
                            <script>
                                alert("Olá, agradecemos seu cadastro! Logo mais receberá novidades!");
                            </script>

                        <?php


                        } else {
                        ?>
                            <script>
                                alert("Erro ao Cadastrar! Tente de novo mais tarde!");
                            </script>
                <?php

                        }
                    }
                }
                ?>
                </li>
            </ul>
            <div id="botao">
                <svg id="botao_menu" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </div>
        </nav>

    </header>
    <form action="Inicio.php" method="POST">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastrar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nome</label>
                                <input type="text" name="nome" class="form-control" required id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">E-mail</label>
                                <input class="form-control" name="email" required id="message-text"></input>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fechar</button>
                        <input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <section>
        <div class="img">
            <img src="imagem.jpg">
        </div>
        <div class="p">
            <div class="card card_eu" style="width: 15.3rem;">
                <img src="EU.jpg" class="card-img-top" alt="EU">
                <div class="card-body">
                    <p class="card-text" style="text-align:
                            center;">Guilherme
                        Souza</p>
                    <p class="card-text" style="text-align:
                            center;">Programador</p>
                </div>
            </div>
        </div>
    </section>

    <div>
        <h3 class="display-1" style="text-align: center;">Conhecendo
            - me</h3>
    </div>
    <section class="sobre-mim">
        <p class="escrito-sobre-mim">
            Em busca de nova proposta de trabalho e uma ascensão
            na área de
            minha formação, apresento-lhes meu
            currículo.
            Cursei técnico em Desenvolvimento de Sistemas na
            Etec de Guariba
            - SP, adquiri grande conhecimento na área
            de programação, juntamente com os trabalhos em
            equipe tanto para
            área gráfica quanto para web.
            Atualmente curso Análise e Desenvolvimento de
            Sistemas na fatec
            de Taquaritinga, onde me formarei em
            Tecnólogo. Sou apaixonado por tecnologias,
            aprender novas coisas entre outros. Também tenho
            cursos
            extracurriculares. Quero avançar no inglês, por isso
            logo logo iniciarei um curso de inglês do básico ao
            avançado,
            para dar um passo no meu currículo. Desde já,
            agradeço a todos!
        </p>
    </section>
    <div>
        <h3 class="display-1" id="escrito_hab" style="text-align: center;">Habilidades</h3>
    </div>
    <main class="todas_hablidades">

        <div class="habilidades">
            <div class="card cima" style="width:230px;
                    height:210px;">
                <img src="html.jpg" class="card-img-top" alt="HTML">
                <p class="card-text">Habilidades técnicas em HTML 5</p>
                <a href="https://www.homehost.com.br/blog/tutoriais/o-que-e-html/" class="btn btn-primary">Saber mais</a>
            </div>
            <div class="card cima" style="width:230px;
                    height:210px;">
                <img src="CSS3.png" class="card-img-top" alt="CSS">
                <p class="card-text">Habilidades técnicas em CSS 3</p>
                <a href="https://www.hostinger.com.br/tutoriais/o-que-e-css-guia-basico-de-css?ppc_campaign=google_performance_max&gclid=EAIaIQobChMIwtz7ysLi-AIVn2tvBB1S5wNBEAAYASAAEgLxQPD_BwE" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        <div class="habilidades">
            <div class="card cima" style="width:230px;
                    height:210px;">
                <img src="js.png" class="card-img-top" alt="JS">
                <p class="card-text">Habilidades técnicas em
                    JavaScript</p>
                <a href="https://developer.mozilla.org/pt-BR/docs/Learn/JavaScript/First_steps/What_is_JavaScript" class="btn btn-primary">Saber mais</a>
            </div>
            <div class="card cima" style="width:230px;
                    height:210px;">
                <img src="php.png" class="card-img-top" alt="PHP">
                <p class="card-text">Habilidades técnicas em PHP</p>
                <a href="https://www.php.net/manual/pt_BR/intro-whatis.php" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
    </main>
    <article>
        <div class="card text-center area_p">
            <div class="card-header">
                ÁREA DE PROJETOS
                <img src="logo.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="card-body corpo">
                <h5 class="card-title">Guilherme Souza</h5>
                <p class="card-text">Espero que gostem!</p>
                <a href="projetos.html">
                    <button type="button" class="btn
                        btn-primary">PROJETOS</button></a>
            </div>
            <div class="card-footer text-muted">
                AUTORIA PRÓRIA
            </div>
        </div>
    </article>

    <footer class="footer">
        <div class="logo">
            <h4>Guilherme Souza</h4>
        </div>

        <div class="rodape-baixo">
            <ul>
                <li><a href="contato.html"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0
                                24 24" fill="none" stroke="#e8f1f2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                            <path d="M16 8a6 6 0 0 1 6
                                    6v7h-4v-7a2 2 0 0
                                    0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6
                                    0 0 1 6-6z">
                            </path>
                            <rect x="2" y="9" width="4" height="12"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg></a></li>
                <li><a href="contato.html"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0
                                24 24" fill="none" stroke="#e8f1f2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8
                                    4 4 0 0 1
                                    16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg> </a></li>
                <li><a href="contato.html"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0
                                24 24" fill="none" stroke="#e8f1f2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
                            <circle cx="12" cy="12" r="4"></circle>
                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10
                                    10 0 1
                                    0-3.92 7.94"></path>
                        </svg></a></li>
            </ul>
        </div>

    </footer>

    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>

</html>