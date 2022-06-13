<!DOCTYPE html>
<html lang = "pt-br">

<head>
    <meta charset = "UTF-8">
    <title>Cadastro de livros</title>
    <link rel="icon" type="image/png" href="img/icon.png"/>

    <link rel = "stylesheet" href = "style/global.css">
    <link rel = "stylesheet" href = "style/index.css">

    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">

    <link href = "https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel = "stylesheet">
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel = "stylesheet"
    integrity = "sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin = "anonymous">

    <link rel = "preconnect" href = "https://fonts.googleapis.com">
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <div class = "container-sm d-flex flex-column justify-content-center" style = "height: 100%;">
        <div class = "card custom-card">
            <div class = "card-body">
                <h4 class = "card-title mb-4" style = "color: #a46497 ">Registro de livros</h4>

                <form action = "controller.php" method = "POST">
                    <div class = "input-group mb-3">
                        <input type = "text" class = "form-control custom-input" placeholder = "Nome da obra" aria-label = "Nome da obra"
                            aria-describedby = "basic-addon1" name = "name">
                    </div>

                    <div class = "input-group mb-3">
                        <input type = "text" class="form-control custom-input" placeholder = "Autor da obra"
                            aria-label = "Autor da obra" aria-describedby = "basic-addon1" name = "author">
                    </div>

                    <div class = "input-group mb-3">
                        <input type = "text" class = "form-control custom-input" placeholder = "Gênero literário" aria-label = "Gênero literário"
                            aria-describedby = "basic-addon1" name = "gender">
                    </div>

                    <div class = "input-group mb-3">
                        <input type = "text" class = "form-control custom-input" placeholder = "Categoria da obra"
                            aria-label = "Categoria da obra" aria-describedby = "basic-addon1" name = "category">
                    </div>

                    <input  data-inline = "true" style = "background-color: #a46497; border-color: #e1e5f2;" type = "submit"
                    name = "insert" class = "btn btn-primary btn-md">
                    </button>

                    <button data-inline="true" style = "background-color: #a46497; border-color: #e1e5f2" name = "select" 
                    class = "btn btn-secondary btn-md" onclick = "handleBookList()">Listar livros
                    </button>
                </form>
            </div>
        </div>

        <div class = "card custom-card mt-2" id = "card-book-list">
            <div class = "card-body">
                <?php include 'select.php'; ?>
            </div>
        </div>
    </div>
</body>
<script type = "text/javascript" src = "js/index.js"></script>
</html>