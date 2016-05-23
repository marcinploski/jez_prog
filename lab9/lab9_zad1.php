<?php include 'partials/header.php'; ?>

<!-- content -->
<div class="page-header">
  <h1>Laboratorium 9 <small>zadanie 1</small></h1>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-6">
    <form action="wynik.php" method="post">
      <div class="form-group">
        <label>Liczba nr 1</label>
        <input type="number" name="arg1" class="form-control" placeholder="Wprowadź liczbę" required>
      </div>
      <div class="radio">
        <div class="row">
          <div class="col-xs-12 col-sm-3">
            <label>
              <input type="radio" name="op" value="+" checked>
              dodaj(+)
            </label>
          </div>
          <div class="col-xs-12 col-sm-3">
            <label>
              <input type="radio" name="op" value="-">
              odejmij(-)
            </label>
          </div>
          <div class="col-xs-12 col-sm-3">
            <label>
              <input type="radio" name="op" value="*">
              pomnóż(*)
            </label>
          </div>
          <div class="col-xs-12 col-sm-3">
            <label>
              <input type="radio" name="op" value="/">
              podziel(/)
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Liczba nr 2</label>
        <input type="number" name="arg2" class="form-control" placeholder="Wprowadź liczbę" required>
      </div>
      <button type="submit" class="btn btn-default">Oblicz</button>
    </form>
  </div>
</div>

<?php include 'partials/menu.php'; ?>

<?php include 'partials/footer.php'; ?>
