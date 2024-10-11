<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CRUD com PHPOO</title>
</head>

<body>
<header>
        <nav class="mb-3 navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="form.php">Cadastro</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <?php
    require_once "classes/Usuario.php";
    $id =$_GET['id']??"";
    ?>

        <main>
            <div class="container">
                <h2>Cadsdtro de Usuário</h2>
                <form  action="salva.php" method="post">
                    <input type="hidden" name="id" value="<?=$id??null?>">
                    <!-- <div>
                        <label for="usuario_id">ID do Usuário:</label><br>
                        <input type="text" id="usuario_id" name="usuario_id">
                    </div> -->
                    <div>
                        <label for="nome">Nome do Usuário:</label>
                        <input type="text" id="nome" name="nome">
                    </div>
                    <div>
                        <label for="cpf">CPF do Usuário:</label>
                        <input type="text" id="cpf" name="cpf">
                    </div>
                    <div>
                        <label for="email">Email do Usuário:</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div>
                        <label for="senha">Senha do Usuário:</label>
                        <input type="password" id="senha" name="senha">
                    </div>
                    <div>
                        <label for="status">Status:
                            <input type="checkbox" id="status" name="status"></label>
                    </div>
                    <div>
                        <button type="submit">SALVAR</button>
                    </div>
                </form>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>