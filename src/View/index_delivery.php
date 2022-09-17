<!DOCTYPE html>
<html lang="en">

<head>
  <title>Delivery</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />
</head>

<body>
  <section class="container d-flex justify-content-center py-4">
    <div class="col-8 g-2">
      <div>
        <h1 class="h2">Lista de Entregas</h1>
        <hr />
      </div>

      <table class="table table-striped ">
        <thead>
          <tr>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Prazo de Entrega:</th>
            <th>Entrega Concluída:</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($deliveries as $delivery) : ?>
            <tr>
              <td><?= htmlspecialchars($delivery['titulo']) ?></td>
              <td><?= htmlspecialchars($delivery['descricao']) ?></td>
              <td><?= $delivery['prazo_entrega'] ?></td>
              <td><?php echo $delivery['entrega_concluida'] == 1 ? 'Sim' : 'Não'; ?></a></td>
              <td><a href="../Controller/openDelivery.php?id=<?= $delivery['id_entrega'] ?>" . class="btn btn-info">Editar</a></td>
            </tr>
          <?php endforeach; ?>

        </tbody>

      </table>

      <a href="../View/create_delivery.php" class="btn btn-primary">Criar nova entrega</a>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
</body>

</html>