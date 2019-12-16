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

            <form method="post" action="/emails">
                <div class="form-group">
                    <label for="remetente">Remetente</label>
                    <input id="remetente" name="remetente" type="text" required="required" class="form-control">
                </div>
                <div class="form-group">
                    <label for="destinatario">Destinatário</label>
                    <select multiple class="form-control" id="destinatario" name="destinatario[]" required="required">
                        <?php /** @var array $cartorios */
                        if (count($cartorios['cartorios']) > 0): ?>

                            <?php foreach ($cartorios['cartorios'] as $cartorio): ?>

                                <?php if ($cartorio->email) : ?>

                                    <option value="<?php echo $cartorio->email; ?>">
                                        <?php echo $cartorio->email; ?>
                                    </option>

                                <?php endif; ?>

                            <?php endforeach; ?>

                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="assunto">Assunto</label>
                    <input id="assunto" name="assunto" type="text" required="required" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <input id="mensagem" name="mensagem" type="text" required="required" class="form-control">
                </div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
                    <a href="/" class="btn btn-danger">Cancelar</a>
                </div>
            </form>

        </div>
        
    </div>

</div> <!-- /container -->
