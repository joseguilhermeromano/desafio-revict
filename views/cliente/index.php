<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-10">
            <h3>Clientes</h3>
        </div>
        <div class="col-md-2">
          <br>
          <a href="<?= BASE_URL ?>cliente/register" class="btn btn-default">
            <span class="glyphicon glyphicon-plus"></span> Adicionar Cliente
          </a>&nbsp;
        </div>
      </div>
      <hr>
      <br>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form class="example" method="post" action="<?= BASE_URL ?>cliente/search">
            <input type="text" placeholder="Buscar por Nome..." name="name">
            <button type="submit"><i class="glyphicon glyphicon-search"></i> Buscar</button>
          </form><br>
        </div>
      </div>
      <br>
      <?= flash( 'message' ); ?>
      <br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col" class="text-center">Sobrenome</th>
            <th scope="col" class="text-center">CPF</th>
            <th scope="col" class="text-center">Opções</th>
          </tr>
        </thead>
        <tbody>



          <?php if(isset($clientes)){  ?>

             <?php foreach($clientes as $cliente):  ?>
            <tr>
              <th scope="row"><?= $cliente->getId() ?></th>
              <td><?= $cliente->getNome() ?></td>
              <td class="text-center"><?= $cliente->getSobrenome() ?></td>
              <td class="text-center"><?= $cliente->getCpf() ?></td>
              <td class="text-center">
              <a href="<?= BASE_URL ?>cliente/edit/<?= $cliente->getId() ?>" class="btn btn-warning">
                <span class="glyphicon glyphicon-pencil"></span>
              </a>&nbsp;
              <?php $linkexcluir = BASE_URL.'cliente/remove/'.(isset($cliente) ? $cliente->getId() : ''); ?>
                <a class="btn btn-danger" href="javascript: func();" onclick="confirmacao('<?= $linkexcluir ?>')" >
                <span class="glyphicon glyphicon-trash"></span>
                </a>&nbsp;
              </td>
            </tr>
             <?php endforeach; 
                }else{ ?>
                <tr>
                <td class="col-xs-12 text-center" colspan="5">Não foram encontrados resultados para a sua busca...</td>
                </tr>
            <?php } ?>

        </tbody>
      </table>

    </div>
  </div>
</div>
