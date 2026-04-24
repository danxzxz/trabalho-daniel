<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Projeto Integrador • Novo Livro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>

    <div class="container">



        <div class="d-flex mt-5">

            <!-- CONTEÚDO -->
            <main class="flex-fill content">

                <!-- TÍTULO + VOLTAR -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">Novo Livro</h2>
                    <a href="<?= URL_BASE ?>/livros" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Voltar
                    </a>
                </div>

                <!-- CARD COM FORMULÁRIO -->
                <div class="card shadow-sm">
                    <div class="card-body p-4">

                        <form action="<?= URL_BASE ?>/livros/salvar" method="post" enctype="multipart/form-data">

                            <div class="row g-3">
                                <!-- Titulo -->
                                <div class="col-md-6">
                                    <label for="titulo" class="form-label">Titulo</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $livro['titulo'] ?? '' ?>">
                                    <?php if (isset($erros['titulo'])): ?>
                                        <div class="text-danger">
                                            <?= $erros['titulo'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Data de Nascimento -->
                                <div class="col-md-6">
                                    <label for="dataLancamento" class="form-label">Data de Lançamento</label>
                                    <input type="date" class="form-control" id="dataLancamento" name="dataLancamento" value="<?= $livro['dataLancamento'] ?? '' ?>">
                                    <?php if (isset($erros['dataLancamento'])): ?>
                                        <div class="text-danger">
                                            <?= $erros['dataLancamento'] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Pais -->
                                <div class="col-md-6">
                                    <label for="pais" class="form-label">Pais</label>
                                    <input type="text" class="form-control" id="pais" name="pais" value="<?= $livro['pais'] ?? '' ?>">

                                </div>

    

                                <!-- Paginas -->
                                <div class="col-md-4">
                                    <label for="paginas" class="form-label">Paginas</label>
                                    <input type="number" step="0.01" class="form-control" id="paginas" name="paginas" value="<?= $livro['paginas'] ?? '' ?>">

                                </div>

                
                                <div class="col-md-4">
                                    <label for="genero" class="form-label">Gênero</label>
                                    <input type="text" class="form-control" id="genero" name="genero" value="<?= $livro['genero'] ?? '' ?>">

                                </div>

                    
                                <!-- Foto -->
                                <div class="col-md-6">
                                    <label for="imagem" class="form-label">Capa</label>
                                    <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">

                                </div>
                            </div>

                            <!-- Botão Salvar -->
                            <div class="mt-4 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="bi bi-check-circle"></i> Salvar
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </main>
        </div>

    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>