<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Projeto Integrador • Dados do Livro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <div class="container py-5">

        <?php if (isset($livro)): ?>
            <!-- TÍTULO + VOLTAR -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">Detalhes do Livro</h2>
                <a href="<?= URL_BASE ?>/livros" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Voltar para Lista
                </a>
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <div class="row g-4">
                        <!-- IMAGEM -->
                        <div class="col-md-4">
                            <div class="bg-light rounded d-flex align-items-center justify-content-center border" style="aspect-ratio: 1/1; overflow: hidden;">
                                <?php if (!empty($livro['capa'])): ?>
                                    <img src="<?= URL_BASE ?>/uploads/<?= $livro['capa'] ?>" alt="<?= $livro['titulo'] ?>" class="img-fluid w-100 h-100" style="object-fit: cover;">
                                <?php else: ?>
                                    <div class="text-center text-muted">
                                        <i class="bi bi-person-fill" style="font-size: 5rem;"></i>
                                        <p class="mb-0">Sem foto</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- INFO -->
                        <div class="col-md-8">
                            <div class="mb-3">
                                <h3 class="mb-0 text-primary"><?= $livro['titulo'] ?></h3>
                                <p class="text-muted"><i class="bi bi-geo-alt"></i> <?= $livro['pais'] ?></p>
                            </div>

                            <hr class="my-4">

                            <div class="row g-3">

                                <div class="col-sm-6">
                                    <small class="text-muted d-block uppercase text-xs">Pais</small>
                                    <span class="fw-bold"><?= isset($livro['data_lancamento']) ? date('d/m/Y', strtotime($livro['data_lancamento'])) : 'Não informado' ?></span>
                                </div>
                                <div class="col-sm-6">
                                    <small class="text-muted d-block uppercase text-xs">Genero</small>
                                    <span class="fw-bold"><?= $livro['genero'] ?? 'Não informado' ?></span>
                                </div>
                                <div class="col-sm-6">
                                    <small class="text-muted d-block uppercase text-xs">Paginas</small>
                                    <span class="fw-bold"><?= $livro['paginas'] ?>m</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-warning shadow-sm" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i> Livro não encontrado.
                <div class="mt-3">
                    <a href="<?= URL_BASE ?>/livros" class="btn btn-warning">Voltar para Lista</a>
                </div>
            </div>
        <?php endif; ?>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>