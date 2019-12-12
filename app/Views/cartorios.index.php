<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Listagem de Cartórios</h1>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-sm">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Razão</th>
                        <th scope="col">Tipo Documento</th>
                        <th scope="col">Documento</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">UF</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Tabelião</th>
                        <th scope="col">Ativo</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php /** @var array $cartorios */
                    if (count($cartorios) > 0): ?>

                        <?php foreach ($cartorios as $cartorio): ?>

                            <tr>
                                <th scope="row"><?php echo $cartorio['id']; ?></th>
                                <td><?php echo $cartorio['nome']; ?></td>
                                <td><?php echo $cartorio['razao']; ?></td>
                                <td><?php echo $cartorio['tipo_documento'] === '1' ? 'CPF' : 'CNPJ'; ?></td>
                                <td><?php echo $cartorio['documento']; ?></td>
                                <td><?php echo $cartorio['cep']; ?></td>
                                <td><?php echo $cartorio['endereco']; ?></td>
                                <td><?php echo $cartorio['bairro']; ?></td>
                                <td><?php echo $cartorio['cidade']; ?></td>
                                <td><?php echo $cartorio['uf']; ?></td>
                                <td><?php echo $cartorio['telefone']; ?></td>
                                <td><?php echo $cartorio['email']; ?></td>
                                <td><?php echo $cartorio['tabeliao']; ?></td>
                                <td><?php echo $cartorio['ativo'] === '1' ? 'Sim' : 'Não'; ?></td>
                                <td>
                                    <a href="/editar/<?php echo $cartorio['id']; ?>">Editar</a>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="15">Nenhum cartório cadastrado</td>
                        </tr>

                    <?php endif; ?>
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div> <!-- /container -->

