<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Projeto Integrador • Lista de Livros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <div class="container py-5">

        <!-- TÍTULO + NOVO -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Lista de Livros</h2>
            <a href="<?= URL_BASE ?>/livros/cadastrar" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Novo Livro
            </a>
        </div>

        <!-- CARD COM TABELA -->
        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="px-4 py-3">Nome</th>
                                <th class="px-4 py-3">Nacionalidade</th>
                                <th class="px-4 py-3">Paginas</th>
                                <th class="px-4 py-3">Genero</th>
                                <th class="px-4 py-3 text-end">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($lista as $livro): ?>
                                <tr>
                                    <td class="px-4 py-3 align-middle"><?= $livro['titulo'] ?></td>
                                    <td class="px-4 py-3 align-middle"><?= $livro['pais'] ?></td>
                                     <td class="px-4 py-3 align-middle"><?= $livro['paginas'] ?></td>
                                    <td class="px-4 py-3 align-middle"><?= $livro['genero'] ?></td>

                                    <td class="px-4 py-3 align-middle text-end">
                                        <a href="<?= URL_BASE ?>/livros/livro?id=<?= $livro['id'] ?>" class="btn btn-sm btn-outline-primary">

                                            <i class="bi bi-eye"></i> Ver

                                        </a>
                                         <a href="<?= URL_BASE ?>/livros/editar?id=<?= $livro['id'] ?>" class="btn btn-sm btn-outline-warning">
                                        <i class="bi bi-pencil"></i> Editar
                                    </a>
                                    <a href="<?= URL_BASE ?>/livros/excluir?id=<?= $livro['id'] ?>" 
                                    class="btn btn-sm btn-outline-danger" 
                                    onclick="return confirm('Tem certeza que deseja excluir o livro <?= $livro['titulo'] ?>?')">
                                        <i class="bi bi-trash"></i> Excluir
                                    </a>
                                    </td>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>