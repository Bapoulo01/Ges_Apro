<?php


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
            <h2 class="text-center mt-1">Approvisionnement</h2>
        <div class="container shadow p-3 mb-5 bg-body-tertiary rounded">
            <form class="row g-3 ">
                <div class=" row col-6 mt-2">
                    <label for="Date" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-md-6">
                            <input type="Date"  class="form-control" id="" name="date" value="">
                        </div>
                </div>
                <div class=" row col-6 mt-2">
                    <label for="Fournisseur" class="col-sm-2 col-form-label">Fournisseur</label>
                        <div class="col-md-6">
                            <select id="inputState" name="fournisseur" class="form-select">
                                <option selected>Choose...</option>
                                <?php foreach ($fournisseurs as  $fournisseur):?>
                                    <option selected value="<?=$fournisseur->idF?>"><?php echo $fournisseur->nomF?></option>
                                <?php endforeach ?>
                            </select>    
                        </div>
                    </div>
                <div class="col-md-4 ">
                    <label for="inputState" class="form-label">Categorie</label>
                    <select id="inputState" name="categorie" class="form-select">
                      <option selected>Choose...</option>
                      <?php foreach ($categories as  $categorie):?>
                          <option selected value="<?=$categorie->idc?>"><?php echo $categorie->libellec?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Produits</label>
                    <select id="inputState" name="prix"  class="form-select">
                        <option selected>Choose...</option>
                        <?php foreach ($produits as  $produit):?>
                          <option selected value="<?=$produit->idp?>"><?php echo $produit->libellep?></option>
                      <?php endforeach ?>
                  </select>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Unite</label>
                    <select id="inputState" name="unite"  class="form-select">
                        <option selected>Choose...</option>
                        <?php foreach ($unites as  $unite):?>
                          <option selected value="<?=$unite->idu?>"><?php echo $unite->libelleu?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Qte</label>
                    <input type="text" class="form-control" id="inputZip" name="qte">
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Prix Achat</label>
                  <input type="text" class="form-control" id="inputZip" name="pa">
                </div>
                <div class="col-md-2 mt-5">
                    <button type="submit" class="btn btn-primary col-4" name="">OK</button>  
                </div>
                <div class="container shadow p-3 mb-5 bg-body-tertiary rounded">
            <table class="table  mt-1">
                <thead class="table-primary ">
                  <tr>
                    <th scope="col">Produit</th>
                    <th scope="col">Unite</th>
                    <th scope="col">Quantite</th>
                    <th scope="col">Prix unitaire</th>
                    <th scope="col">Montant</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Tissus A</th>
                    <td>Metre</td>
                    <td>10</td>
                    <td>2200</td>
                    <td>22000</td>
                  </tr>
                  <tr>
                    <th scope="row">Boutons B</th>
                    <td>Pièce</td>
                    <td>10</td>
                    <td>500</td>
                    <td>5000</td>
                  </tr>
                </tbody>
            </table>
        </div>
            </form>
            <div class="container d-flex justify-content-end "><button type="button" class="btn btn-primary col-2 ">Montant:</button></div>
            <div class="container d-flex justify-content-end mt-2"><button type="button" class="btn btn-primary col-2 ">Enregistrer</button></div>
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
