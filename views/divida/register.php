<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <br><h3 class="text-center">Cadastro de Dívidas</h3><hr><br><br>
        <?= flash( 'message' ); ?>
        <?= validation_errors(); ?>
        <br><br>
        <form method="POST" action="<?= BASE_URL ?>divida/create" data-toggle="validator" id="cpf_form" role="form">
            <div class="form-group">
                <label for="cliente">Cliente</label>
                <select class="js-example-basic-single form-control" id="select" name="cliente" required>
                    <option value="" selected disabled="disabled">Selecione um Cliente</option>
                    <?php if(isset($clientes)){  ?>
                    <?php foreach($clientes as $cliente){  ?>
                        <option value="<?= $cliente->getId() ?>">
                        <?= $cliente->getNome().' '.$cliente->getSobrenome() ?>
                        </option>
                    <?php } ?>
                    <?php } ?>
                </select>
                <div class="help-block with-errors">*Campo Obrigatório!</div>
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control nome" id="nome" 
                value="<?= isset($divida) ? $divida->getNome() : '' ?>" required>
            <div class="help-block with-errors">*Campo Obrigatório!</div>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="descricao" 
                value="<?= isset($divida) ? $divida->getDescricao() : '' ?>">
            </div>
            <div class="form-group">
                <label for="data_vencimento">Data Vencimento</label>
                <div class="input-group date">
                    <input  type="text" class="form-control date placeholder" required>
                    <div class="input-group-addon" >
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <div class="help-block with-errors">*Campo Obrigatório!</div>
            </div>
            <div class="form-group">
                <label for="valor_total">Valor Total</label>
                <input type="text" name="valor_total" class="form-control money" id="valor_total" 
                value="<?= isset($divida) ? $divida->getValorTotal() : '' ?>" required>
                <div class="help-block with-errors">*Campo Obrigatório!</div>
            </div>
            <br>
            <div class="row">
            <div class="form-group col-md-6 col-md-offset-3">
                <a href="<?= BASE_URL ?>divida/index" class="btn btn-primary">Voltar</a>
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-default" value="Limpar">
            </div>
            </div>
        </form>
        
    </div>
</div>

