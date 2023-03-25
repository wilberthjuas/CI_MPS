<div style="width: 50%;
    background: white;
    padding: 20px;">
    <label>Buscar por Nombre</label>
    <input type="text" placeholder="Search in table..." class="searchField">
    <label> Buscar por fecha</label>
    <input type="text" placeholder="Search in table..." class="searchField">
    <select name="rowsPerPage" id="changeRows">
  <option value="15">15</option>
  <option value="25" selected>25</option>
  <option value="50">50</option>
  <option value="100">100</option>
</select>

</div>

<div class="table-sortable" id="table-sortable">
  Table will be rendered here
</div>

<script src="<?php echo $url?>js/table-sortable.js"></script>
<script> 

var columns = {
    'cantidad': 'Cantidad',
    'fecha_registro': 'Fecha de Registro',
    'estatus': 'Status',
    'cobrador_name': 'Cobrador'
}

var data = [
    {
        "id_payment": "30",
        "poliza": "1",
        "tipo": "1",
        "cantidad": "10000",
        "fecha_registro": "2023-01-17 13:45:18",
        "estatus": "PAGADO",
        "cobrador_name": "1",
        "id_pago": "0",
        "numPago": "",
        "imagen": "uploads/1-63c6faced3b71-1.jpg"
    }
]


$( document ).ready(function() {
    var table = $('#table-sortable').tableSortable({
    data: data,
    columns: columns,
    rowsPerPage: 25,
    pagination: true,
    sorting: true,
    searchField: '.searchField'
});

$.get('http://localhost/CI_MPS/RestServer/pagosall', function(data) {
    // or Set new data on table, columns is optional.
    table.setData(data, columns);
})

$('#changeRows').on('change', function() {
    table.updateRowsPerPage(parseInt($(this).val(), 10));
})})
</script>