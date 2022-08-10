<?php

function Cadastrar($c,$nome,$email)
{

    if ($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $sql = "INSERT INTO usuarios values(default,'$nome','$email',NOW())";

        $cadastro = mysqli_query($c, $sql);

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