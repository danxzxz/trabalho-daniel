<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Projeto Integrador • Editar Livro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="d-flex mt-5">
            <main class="flex-fill content">
                <!-- TÍTULO + VOLTAR -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">Editar Livro</h2>
                    <a href="<?= URL_BASE ?>/livros" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Voltar
                    </a>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <form action="<?= URL_BASE ?>/livros/atualizar" method="post" enctype="multipart/form-data">
                            
                            <input type="hidden" name="id" value="<?= $livro['id'] ?>">

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="titulo" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $livro['titulo'] ?? '' ?>">
                                    <?php if (isset($erros['titulo'])): ?>
                                        <div class="text-danger small"><?= $erros['titulo'] ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-6">
                                    <label for="dataLancamento" class="form-label">Data de Nascimento</label>
                                    <input type="date" class="form-control" id="dataLancamento" name="dataLancamento" value="<?= $livro['data_lancamento'] ?? '' ?>">
                                    <?php if (isset($erros['dataLancamento'])): ?>
                                        <div class="text-danger small"><?= $erros['dataLancamento'] ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-6">
                                    <label for="pais" class="form-label">Pais</label>
                                    <input type="text" class="form-control" id="pais" name="pais" value="<?= $livro['pais'] ?? '' ?>">
                                </div>


                                <div class="col-md-4">
                                    <label for="paginas" class="form-label">Altura (m)</label>
                                    <input type="number" step="0.01" class="form-control" id="paginas" name="paginas" value="<?= $livro['paginas'] ?? '' ?>">
                                </div>

                    
                                <div class="col-md-4">
                                    <label for="genero" class="form-label">Pé Dominante</label>
                                    <input type="text" class="form-control" id="genero" name="genero" value="<?= $livro['genero'] ?? '' ?>">
                                </div>

                                        

                            <div class="mt-4 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="bi bi-check-circle"></i> Atualizar Dados
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