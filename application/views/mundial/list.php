<div class="card-body">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <table id="datatables-reponsive" class="table table-striped" style="width:100%;">
          <thead>
              <tr>
                  <th style="width:20%;">POLIZA</th>
                  <th style="width:20%;">NOMBRE</th>
                  <th style="width:20%">CELULAR</th>
                  <th style="width:20%">MUNICIPIO</th>
              </tr>
          </thead>
          <tbody>
          <?php foreach ($data as $qas) { ?>      
              <tr>
                  <td><?php echo $qas['folio']; ?></td>
                  <td><?php echo $qas['nombre']; ?></td>
                  <td><?php echo $qas['celular']; ?></td> 
                  <td><?php echo $qas['municipio']; ?></td> 
              </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>