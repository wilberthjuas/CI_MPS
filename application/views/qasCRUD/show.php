<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('qasCRUD'); ?>"> Regresar</a>
    </div>
    <br/>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:20%">#</th>
                    <th style="width:40%;">Pregunta</th>
                    <th style="width:40%;">Respuesta</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $qas->id; ?></td>          
                    <td><?php echo $qas->pregunta; ?></td>
                    <td><?php echo $qas->respuesta; ?></td>
                </tr>
            </tbody>
          </table>
    </div>
</div>