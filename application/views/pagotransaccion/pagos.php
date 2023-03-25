<input type="text" placeholder="Search in table..." id="searchField">
<select name="rowsPerPage" id="changeRows">
  <option value="15">15</option>
  <option value="25" selected>25</option>
  <option value="50">50</option>
  <option value="100">100</option>
</select>

<div class="table-sortable" id="table-sortable">
  Table will be rendered here
</div>
<div class="shadown"></div>
<div class="paymentModal">
    <span class="align-middle close-button">
        <i data-feather="x"></i> 
    </span>
    <form class="modalForm">

        <div class="formgroup">
            <input name="id_payment" id="id_payment" type="hidden"></input>
             <div>
                <label for="poliza">Poliza:</label>
                <input name="poliza" id="poliza"></input>
            </div>
            <div>
                <label for="tipoPoliza">Tipo:</label>
                <input name="tipoPoliza" id="tipoPoliza"></input>
            </div>
        </div>
        <div class="formgroup">
            <div>
                <label for="cantidad">Cantidad:</label>
                <input name="cantidad" id="cantidad"></input>
            </div>
            <div>
                <label for="fecha_registro">Fecha de Registro:</label>
                <input name="fecha_registro" id="fecha_registro"></input>
            </div>
        </div>
        <div class="formgroup">
            <div>
                <label for="cobrador">Cobrador:</label>
                <input name="cobrador" id="cobrador"></input>
            </div>
            <div>
                <label for="estatus">Estatus:</label>
                <input name="estatus" id="estatus"></input>
            </div>
        </div>
        <div class="formgroup">
            
            <div>
                <label for="imagen">Imágen</label>
                <img src=""></input>
            </div>
        </div>
        <div class="formgroup">
            
            <div>
                <button class="btn btn-success" id="aceptarPago">Aceptar Pago</button>
            </div>
            <div>
                <button class="btn btn-danger" id="rechazarPago">Rechazar Pago</button>
            </div>
        </div>
    </form>
</div>
<script src="<?php echo $url?>js/table-sortable.js"></script>
<script> 

var columns = {
    'cantidad': 'Cantidad',
    'fecha_registro': 'Fecha de Registro',
    'estatus': 'Status',
    'cobrador_name': 'Cobrador',
    "actions":"Acciones"
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
        "imagen": "uploads/1-63c6faced3b71-1.jpg",
        "actions":""
    }
]


$( document ).ready(function() {
    var table = $('#table-sortable').tableSortable({
    data: data,
    columns: columns,
    rowsPerPage: 25,
    pagination: true,
    sorting: true,
    searchField: '#searchField',
    formatCell: function(row, key) {

        if(key == "actions"){
           return $('<button></button>').addClass(row['id_payment']).text("Visualizar").on('click',{infoPago: row},greet);
        }

        return row[key];
    },
});

$.get('http://localhost/CI_MPS/RestServer/pagos', function(data) {
    var acciondata = data.map((e) => {return {...e,"actions":""}})

    // or Set new data on table, columns is optional.
    table.setData(acciondata, columns);
})

var cobradores = []

$.get('http://localhost/CI_MPS/RestServer/cobradores', function(data) {
    cobradores = data
})

var usuarios = []

$.get('http://localhost/CI_MPS/RestServer/usuarios', function(data) {
    usuarios = data
})

$('#changeRows').on('change', function() {
    table.updateRowsPerPage(parseInt($(this).val(), 10));
})

$('.close-button').on('click', function() {

    $('.shadown').removeClass('op80');
    $('.paymentModal').removeClass('op100');

    setTimeout(function() {
        $('.paymentModal').hide();
        $('.shadown').hide();
    }, 1000);

});

function greet( event ) {
    $('.paymentModal').show();
    $('.shadown').show();
   
    console.log( event.data.infoPago );
    var usuario = usuarios.filter(e => {
            return e.id_user == event.data.infoPago.cobrador
         }
        )[0]
    var cobrador =  cobradores.filter(e => {
        return e.id == usuario.cobrador
    })[0]
   
    $('#id_payment').val(event.data.infoPago.id_payment)
    $('#poliza').val(event.data.infoPago.poliza)
    $('#tipoPoliza').val(event.data.infoPago.tipo == 1 ? "Efectivo":"Transferencia")
    $('#cantidad').val(event.data.infoPago.cantidad)
    $('#fecha_registro').val(event.data.infoPago.fecha_registro)
    $('#estatus').val(event.data.infoPago.estatus)
    $('#cobrador').val(cobrador.nombre)
 
 /*
    boton rechazado actualiza el estatus a RECHAZADO

    filtro por cobrador y por fechas
 */
    $('#aceptarPago').on('click', function(e) {
        e.preventDefault()
        var id =  $('#id_payment').val()
        var settings = {
            "url": "http://localhost/CI_MPS/RestServer/updatestatusaceptado",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            "data": {
                "id": id
            }
        };

        $.ajax(settings).done(function (response) {
            console.log(response);

            $('.shadown').removeClass('op80');
            $('.paymentModal').removeClass('op100');

            setTimeout(function() {
                $('.paymentModal').hide();
                $('.shadown').hide();
            }, 1000);
            
            $.get('http://localhost/CI_MPS/RestServer/pagos', function(data) {
                var acciondata = data.map((e) => {return {...e,"actions":""}})
                var table = $('#table-sortable').tableSortable({
                    data: data,
                    columns: columns,
                    rowsPerPage: 25,
                    pagination: true,
                    sorting: true,
                    searchField: '#searchField',
                    formatCell: function(row, key) {

                        if(key == "actions"){
                        return $('<button></button>').addClass(row['id_payment']).text("Visualizar").on('click',{infoPago: row},greet);
                        }

                        return row[key];
                    },
                });
                table.setData(acciondata, columns);
                table.refresh();
            })

        });
    });

    $('#rechazarPago').on('click', function(e) {
        e.preventDefault()
        var id =  $('#id_payment').val()
        var settings = {
            "url": "http://localhost/CI_MPS/RestServer/updatestatusrechazado",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            "data": {
                "id": id
            }
        };

        $.ajax(settings).done(function (response) {
            console.log(response);

            $('.shadown').removeClass('op80');
            $('.paymentModal').removeClass('op100');

            setTimeout(function() {
                $('.paymentModal').hide();
                $('.shadown').hide();
            }, 1000);
            
            $.get('http://localhost/CI_MPS/RestServer/pagos', function(data) {
                var acciondata = data.map((e) => {return {...e,"actions":""}})
                var table = $('#table-sortable').tableSortable({
                    data: data,
                    columns: columns,
                    rowsPerPage: 25,
                    pagination: true,
                    sorting: true,
                    searchField: '#searchField',
                    formatCell: function(row, key) {

                        if(key == "actions"){
                        return $('<button></button>').addClass(row['id_payment']).text("Visualizar").on('click',{infoPago: row},greet);
                        }

                        return row[key];
                    },
                });
                table.setData(acciondata, columns);
                table.refresh();
            })

        });

    });
   
    setTimeout(function() {
        $('.shadown').addClass('op80');
        $('.paymentModal').addClass('op100');
    }, 100);
}

});

</script>


