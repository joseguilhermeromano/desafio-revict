<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <br><h3 class="text-center">Cadastro de Clientes</h3><hr><br><br>
        <?= flash( 'message' ); ?>
        <?= validation_errors(); ?>
        <br><br>
        <form method="POST" action="<?= BASE_URL ?>cliente/create" data-toggle="validator" id="cpf_form" role="form">
            <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control nome" id="nome" 
            value="<?= isset($cliente) ? $cliente->getNome() : '' ?>" required>
            <div class="help-block with-errors">*Campo Obrigatório!</div>
            </div>
            <div class="form-group">
            <label for="nome">Sobrenome</label>
            <input type="text" name="sobrenome" class="form-control nome" id="sobrenome" 
            value="<?= isset($cliente) ? $cliente->getSobrenome() : '' ?>" required>
            <div class="help-block with-errors">*Campo Obrigatório!</div>
            </div>
            <div class="form-group has-feedback">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" class="form-control cpf" id="cpf" data-remote="<?= BASE_URL ?>validation/cpf" 
            data-error="O CPF informado é inválido!" value="<?= isset($cliente) ? $cliente->getCpf() : '' ?>" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors">*Campo Obrigatório!</div>
            </div>
            <br>
            <div class="row">
            <div class="form-group col-md-6 col-md-offset-3">
                <a href="<?= BASE_URL ?>cliente/index" class="btn btn-primary">Voltar</a>
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-default" value="Limpar">
            </div>
            </div>
        </form>
        
    </div>
</div>

