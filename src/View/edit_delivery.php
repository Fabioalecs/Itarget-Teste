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
    <div class="col-8">
      <div>
        <h1 class="h2">Editar Entrega</h1>
        <hr />
      </div>

      <?php foreach ($deliveries as $delivery) : ?>
        <form class="container p-0" action="../Controller/editDelivery.php?id=<?= $delivery['id_entrega'] ?>" method="post">

          <div class="row flex-column g-2">
            <div class="col">
              <label class="form-label" for="title">Título</label>
              <input value="<?= htmlspecialchars($delivery['titulo']) ?>" type="text" class="form-control" id="title" name="title" placeholder="Título da Entrega" required />
            </div>
            <div class="col">
              <label class="form-label" for="description">Descrição</label>
              <input value="<?= htmlspecialchars($delivery['descricao']) ?>" type="text" class="form-control" name="description" id="description" placeholder="Descrição sobre a entrega" required />
            </div>
            <div class="col">
              <label class="form-label" for="deadline">Prazo de Entrega</label>
              <input value="<?= $delivery['prazo_entrega'] ?>" type="date" class="form-control" id="deadline" name="deadline" required />
            </div>
            <div class="form-check">
              <label class="form-check-label" for="was_delivered">Entregue?</label>
              <input class="form-check-input" type="checkbox" name="was_delivered">
            </div>

            <div>
              <button type='submit' class="btn btn-primary">Salvar</button>
              <a href="../Controller/deleteDelivery.php?id=<?= $delivery['id_entrega'] ?>" class="btn btn-danger">Excluir Entrega</a>
            </div>

          </div>

        </form>
      <?php endforeach; ?>

    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
</body>

</html>