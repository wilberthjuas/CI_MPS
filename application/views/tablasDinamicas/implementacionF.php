<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Datatables Responsive
    $("#datatables-reponsive").DataTable({
      responsive: true,
      language:{
          "decimal":        "",
          "emptyTable":     "No hay información disponible en la tabla",
          "info":           "Mostrando _START_/_END_ de _TOTAL_ ",
          "infoEmpty":      "Mostranto 0/0 de 0 entradas",
          "infoFiltered":   "(filtrado de _MAX_ entradas en total)",
          "infoPostFix":    "",
          "thousands":      ",",
          "lengthMenu":     "Mostrando _MENU_ entradas",
          "loadingRecords": "Cargando...",
          "processing":     "Procesando...",
          "search":         "Buscar:",
          "zeroRecords":    "No se encontraron registros para esa busqueda",
          "paginate": {
              "first":      "Inicio",
              "last":       "Fin",
              "next":       "Siguiente",
              "previous":   "Anterior"
          },
          "aria": {
              "sortAscending":  ": ordenado ascendente de la columna",
              "sortDescending": ": ordenado descendente de la columna"
          }
      }
    });
  });
</script>