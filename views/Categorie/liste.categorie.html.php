<?php
require_once("Model/Fournisseur.php");
require_once("Model/Categorie.php");

$fournisseur=new Fournisseur();
$fournisseurs=$fournisseur-> findAll();

$categorie=new Categorie();
$categories=$categorie-> findAll();

?>



<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <h2 class="text-center mt-1">Liste des Categories</h2>
        <div class="container d-flex justify-content-end mb-2">
          <button type="button" class="btn btn-primary col-1 "data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Ajouter</button>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter Categorie</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnAdd"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Libelle</label>
            <input type="text" class="form-control" id="nameInput">
          </div>
          <div class="mb-3">
          <label for="inputState" class="form-label">Unite</label>
                    <select id="inputState" name="unite"  class="form-select">
                        <option selected>Choose...</option>
                        <?php foreach ($unites as  $unite):?>
                          <option selected value="<?=$unite->idu?>"><?php echo $unite->libelleu?></option>
                        <?php endforeach ?>
                    </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary " id="reset">Annuler</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="Ajout">Add</button>
      </div>
    </div>
  </div>
</div>

        <div class="container shadow p-3 mb-5 bg-body-tertiary rounded">
            <table class="table  mt-2">
                <thead class="table-primary ">
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Unite</th>
                  </tr>
                </thead>
                <?php foreach ($categories as $categorie): ?>
                <tbody>
                  <tr>
                    <th scope="row"><?=$categorie->idc?></th>
                    <td><?=$categorie->libellec?></td>
                    <td><?=$categorie->libelleu?></td>
                  </tr>
                </tbody>
                <?php endforeach?>
            </table>
        </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
