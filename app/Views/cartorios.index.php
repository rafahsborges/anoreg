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
                    if (count($cartorios['cartorios']) > 0): ?>

                        <?php foreach ($cartorios['cartorios'] as $cartorio): ?>

                            <tr>
                                <th scope="row"><a
                                            href="/editar/<?php echo $cartorio->id; ?>"><?php echo $cartorio->id; ?></a>
                                </th>
                                <td><?php echo $cartorio->nome; ?></td>
                                <td><?php echo $cartorio->razao; ?></td>
                                <td><?php echo $cartorio->tipo_documento === '1' ? 'CPF' : 'CNPJ'; ?></td>
                                <td><?php echo $cartorio->documento; ?></td>
                                <td><?php echo $cartorio->cep; ?></td>
                                <td><?php echo $cartorio->endereco; ?></td>
                                <td><?php echo $cartorio->bairro; ?></td>
                                <td><?php echo $cartorio->cidade; ?></td>
                                <td><?php echo $cartorio->uf; ?></td>
                                <td><?php echo $cartorio->telefone; ?></td>
                                <td><?php echo $cartorio->email; ?></td>
                                <td><?php echo $cartorio->tabeliao; ?></td>
                                <td><?php echo $cartorio->ativo === '1' ? 'Sim' : 'Não'; ?></td>
                                <td>
                                    <a href="/editar/<?php echo $cartorio->id; ?>">Editar</a>
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

        <div class="col-md-12">

            <nav aria-label="Page navigation example">
                <?php if ($cartorios['pages'] > 1) : ?>
                    <ul class="pagination justify-content-center">
                        <!-- Link of the first page -->
                        <li class='page-item <?php ($cartorios['page'] <= 1 ? print 'disabled' : '') ?>'>
                            <a class='page-link' href='/?page=1'><<</a>
                        </li>
                        <!-- Link of the previous page -->
                        <li class='page-item <?php ($cartorios['page'] <= 1 ? print 'disabled' : '') ?>'>
                            <a class='page-link'
                               href='/?page=<?php ($cartorios['page'] > 1 ? print($cartorios['page'] - 1) : print 1) ?>'><</a>
                        </li>
                        <!-- Links of the pages with page number -->
                        <?php for ($i = $cartorios['start']; $i <= $cartorios['end']; $i++) : ?>
                            <li class='page-item <?php ($i == $cartorios['page'] ? print 'active' : '') ?>'>
                                <a class='page-link'
                                   href='/?page=<?php echo $i; ?>'><?php echo $i; ?></a>
                            </li>
                        <?php endfor; ?>
                        <!-- Link of the next page -->
                        <li class='page-item <?php ($cartorios['page'] >= $cartorios['pages'] ? print 'disabled' : '') ?>'>
                            <a class='page-link'
                               href='/?page=<?php ($cartorios['page'] < $cartorios['pages'] ? print($cartorios['page'] + 1) : print $cartorios['pages']) ?>'>></a>
                        </li>
                        <!-- Link of the last page -->
                        <li class='page-item <?php ($cartorios['page'] >= $cartorios['pages'] ? print 'disabled' : '') ?>'>
                            <a class='page-link'
                               href='/?page=<?php echo $cartorios['pages']; ?>'>>>
                            </a>
                        </li>
                    </ul>
                <?php endif; ?>
            </nav>

        </div>
    </div>

</div> <!-- /container -->
