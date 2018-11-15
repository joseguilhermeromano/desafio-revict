<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-10">
            <h3>Dívidas</h3>
        </div>
        <div class="col-md-2">
          <br>
          <a href="<?= BASE_URL ?>divida/register" class="btn btn-default">
            <span class="glyphicon glyphicon-plus"></span> Adicionar Dívida
          </a>&nbsp;
        </div>
      </div>
      <hr>
      <br>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form class="example" method="post" action="<?= BASE_URL ?>divida/search">
            <input type="text" placeholder="Buscar por Nome..." name="name">
            <button type="submit"><i class="glyphicon glyphicon-search"></i> Buscar</button>
          </form><br>
        </div>
      </div>


      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col" class="text-center">Descrição</th>
            <th scope="col" class="text-center">Cliente</th>
            <th scope="col" class="text-center">Data de Vencimento</th>
            <th scope="col" class="text-center">Valor Total</th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col" class="text-center">Opções</th>
          </tr>
        </thead>
        <tbody>



          <?php if(isset($dividas)){  ?>

             <?php foreach($dividas as $divida):  ?>
            <tr>
              <th scope="row"><?= $divida->getId() ?></th>
              <td><?= $divida->getNome() ?></td>
              <td class="text-center"><?= $divida->getDescricao() ?></td>
              <td class="text-center"><?= $divida->getCliente()->getNome()." ".$divida->getCliente()->getSobrenome()  ?></td>
              <td class="text-center"><?= $divida->getDataVencimento() ?></td>
              <td class="text-center"><?= $divida->getValorTotal() ?></td>
              <td class="text-center"><?= $divida->getStatus() ?></td>
              <td class="text-center">
              <a href="<?= BASE_URL ?>divida/edit/<?= $divida->getId() ?>" class="btn btn-warning">
                <span class="glyphicon glyphicon-pencil"></span>
              </a>&nbsp;
              <a href="<?= BASE_URL ?>divida/remove/<?= $divida->getId() ?>" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash"></span>
              </a>&nbsp;
              </td>
            </tr>
             <?php endforeach; 
                }else{ ?>
                <tr>
                <td class="col-xs-12 text-center" colspan="8">Não foram encontrados resultados para a sua busca...</td>
                </tr>
            <?php } ?>

        </tbody>
      </table>

    </div>
  </div>
</div>
