<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Alterar Cartório</h1>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12">

            <form method="post" action="/editar">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input id="nome" name="nome" type="text" required="required" class="form-control" value="<?php echo $cartorio->nome; ?>">
                </div>
                <div class="form-group">
                    <label for="razao">Razão</label>
                    <input id="razao" name="razao" type="text" required="required" class="form-control" value="<?php echo $cartorio->razao; ?>">
                </div>
                <div class="form-group">
                    <label for="tipo_documento">Tipo Documento <?php echo $cartorio->tipo_documento; ?></label>
                    <div>
                        <select id="tipo_documento" name="tipo_documento" required="required" class="custom-select">
                            <option value="1" <?php echo $cartorio->tipo_documento === '1' ? 'selected="selected"' : ''; ?>>CPF</option>
                            <option value="2" <?php echo $cartorio->tipo_documento === '2' ? 'selected="selected"' : ''; ?>>CNPJ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="documento">Documento</label>
                    <input id="documento" name="documento" type="text" class="form-control documento" required="required" value="<?php echo $cartorio->documento; ?>">
                </div>
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input id="cep" name="cep" type="text" class="form-control cep" required="required" value="<?php echo $cartorio->cep; ?>">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input id="endereco" name="endereco" type="text" class="form-control" required="required" value="<?php echo $cartorio->endereco; ?>">
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input id="bairro" name="bairro" type="text" class="form-control" required="required" value="<?php echo $cartorio->bairro; ?>">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input id="cidade" name="cidade" type="text" class="form-control" required="required" value="<?php echo $cartorio->cidade; ?>">
                </div>
                <div class="form-group">
                    <label for="uf">UF</label>
                    <div>
                        <select id="uf" name="uf" class="custom-select">
                            <option value="AC" <?php echo $cartorio->uf === 'AC' ? 'selected="selected"' : ''; ?>>Acre</option>
                            <option value="AL" <?php echo $cartorio->uf === 'AL' ? 'selected="selected"' : ''; ?>>Alagoas</option>
                            <option value="AP" <?php echo $cartorio->uf === 'AP' ? 'selected="selected"' : ''; ?>>Amapá</option>
                            <option value="AM" <?php echo $cartorio->uf === 'AM' ? 'selected="selected"' : ''; ?>>Amazonas</option>
                            <option value="BA" <?php echo $cartorio->uf === 'BA' ? 'selected="selected"' : ''; ?>>Bahia</option>
                            <option value="CE" <?php echo $cartorio->uf === 'CE' ? 'selected="selected"' : ''; ?>>Ceará</option>
                            <option value="DF" <?php echo $cartorio->uf === 'DF' ? 'selected="selected"' : ''; ?>>Distrito Federal</option>
                            <option value="ES" <?php echo $cartorio->uf === 'ES' ? 'selected="selected"' : ''; ?>>Espírito Santo</option>
                            <option value="GO" <?php echo $cartorio->uf === 'GO' ? 'selected="selected"' : ''; ?>>Goiás</option>
                            <option value="MA" <?php echo $cartorio->uf === 'MA' ? 'selected="selected"' : ''; ?>>Maranhão</option>
                            <option value="MT" <?php echo $cartorio->uf === 'MT' ? 'selected="selected"' : ''; ?>>Mato Grosso</option>
                            <option value="MS" <?php echo $cartorio->uf === 'MS' ? 'selected="selected"' : ''; ?>>Mato Grosso do Sul</option>
                            <option value="MG" <?php echo $cartorio->uf === 'MG' ? 'selected="selected"' : ''; ?>>Minas Gerais</option>
                            <option value="PA" <?php echo $cartorio->uf === 'PA' ? 'selected="selected"' : ''; ?>>Pará</option>
                            <option value="PB" <?php echo $cartorio->uf === 'PB' ? 'selected="selected"' : ''; ?>>Paraíba</option>
                            <option value="PR" <?php echo $cartorio->uf === 'PR' ? 'selected="selected"' : ''; ?>>Paraná</option>
                            <option value="PE" <?php echo $cartorio->uf === 'PE' ? 'selected="selected"' : ''; ?>>Pernambuco</option>
                            <option value="PI" <?php echo $cartorio->uf === 'PI' ? 'selected="selected"' : ''; ?>>Piauí</option>
                            <option value="RJ" <?php echo $cartorio->uf === 'RJ' ? 'selected="selected"' : ''; ?>>Rio de Janeiro</option>
                            <option value="RN" <?php echo $cartorio->uf === 'RN' ? 'selected="selected"' : ''; ?>>Rio Grande do Norte</option>
                            <option value="RS" <?php echo $cartorio->uf === 'RS' ? 'selected="selected"' : ''; ?>>Rio Grande do Sul</option>
                            <option value="RO" <?php echo $cartorio->uf === 'RO' ? 'selected="selected"' : ''; ?>>Rondônia</option>
                            <option value="RR" <?php echo $cartorio->uf === 'RR' ? 'selected="selected"' : ''; ?>>Roraima</option>
                            <option value="SC" <?php echo $cartorio->uf === 'SC' ? 'selected="selected"' : ''; ?>>Santa Catarina</option>
                            <option value="SP" <?php echo $cartorio->uf === 'SP' ? 'selected="selected"' : ''; ?>>São Paulo</option>
                            <option value="SE" <?php echo $cartorio->uf === 'SE' ? 'selected="selected"' : ''; ?>>Sergipe</option>
                            <option value="TO" <?php echo $cartorio->uf === 'TO' ? 'selected="selected"' : ''; ?>>Tocantins</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input id="telefone" name="telefone" type="text" class="form-control telefone" value="<?php echo $cartorio->telefone; ?>">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" name="email" type="text" class="form-control" value="<?php echo $cartorio->email; ?>">
                </div>
                <div class="form-group">
                    <label for="tabeliao">Tabelião</label>
                    <input id="tabeliao" name="tabeliao" type="text" class="form-control" value="<?php echo $cartorio->tabeliao; ?>">
                </div>
                <div class="form-group">
                    <label for="ativo">Ativo</label>
                    <div>
                        <select id="ativo" name="ativo" required="required" class="custom-select">
                            <option value="0" <?php echo $cartorio->ativo === '0' ? 'selected="selected"' : ''; ?>>Não</option>
                            <option value="1" <?php echo $cartorio->ativo === '1' ? 'selected="selected"' : ''; ?>>Sim</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $cartorio->id; ?>">
                    <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
                    <a href="/" class="btn btn-danger">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
</div>