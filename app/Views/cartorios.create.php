<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Adicionar Cartório</h1>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12">

            <form method="post" action="/adicionar">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input id="nome" name="nome" type="text" required="required" class="form-control">
                </div>
                <div class="form-group">
                    <label for="razao">Razão</label>
                    <input id="razao" name="razao" type="text" required="required" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tipo_documento">Tipo Documento</label>
                    <div>
                        <select id="tipo_documento" name="tipo_documento" required="required" class="custom-select">
                            <option value="1">CPF</option>
                            <option value="2">CNPJ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="documento">Documento</label>
                    <input id="documento" name="documento" type="text" class="form-control documento" required="required">
                </div>
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input id="cep" name="cep" type="text" class="form-control cep" required="required">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input id="endereco" name="endereco" type="text" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input id="bairro" name="bairro" type="text" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input id="cidade" name="cidade" type="text" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="uf">UF</label>
                    <div>
                        <select id="uf" name="uf" class="custom-select">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input id="telefone" name="telefone" type="text" class="form-control telefone">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" name="email" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tabeliao">Tabelião</label>
                    <input id="tabeliao" name="tabeliao" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ativo">Ativo</label>
                    <div>
                        <select id="ativo" name="ativo" required="required" class="custom-select">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>

        </div>
    </div>
</div>