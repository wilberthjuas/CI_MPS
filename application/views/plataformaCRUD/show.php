<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('plataformaCRUD'); ?>"> Regresar</a>
    </div>
    <br/>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:25%">#</th>
                    <th style="width:40%;">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $plataforma->id; ?></td>          
                    <td><?php echo $plataforma->descripcion; ?></td>          
                </tr>
            </tbody>
        </table>
    </div>
</div>