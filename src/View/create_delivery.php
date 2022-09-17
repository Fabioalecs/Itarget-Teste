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
          <h1 class="h2">Criar Nova Entrega</h1>
          <hr />
        </div>

        <form class="container p-0" action="../Controller/createDelivery.php" method="post">
          <div class="row-flex-column g-2">
            <div class="col">
              <label class="form-label">Título</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Título da Entrega" required />
            </div>
            <div class="col">
              <label class="form-label" for="description">Descrição</label>
              <input type="text" class="form-control" name="description" id="description" placeholder="Descrição sobre a entrega" required />
            </div>
            <div class="col">
              <label class="form-label" for="deadline">Prazo de Entrega</label>
              <input type="date" class="form-control" name="deadline" id="deadline" required />
            </div>

            <div class="col p-2">
              <button type="submit" class="btn btn-primary">Salvar</button>
              <a href="../Controller/indexDelivery.php" class="btn btn-danger">Cancelar</a>
            </div>

          </div>
      </form>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
</body>

</html>