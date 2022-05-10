<?php 

foreach( $result as $row ){
      $poliza     = $row['folio'];
      $nombre     = $row['nombre'];
      $direccion  = $row['domicilio'];
      $exterior   = $row['exterior'];
      $colonia    = $row['colonia'];
      $municipio  = $row['municipio'];
      $telefono   = $row['telefono'];

      $marca      = $row['marca'];
      $vehiculo   = $row['tipo'];
      $ano        = $row['ano'];
      $color      = $row['color'];
      $placas     = $row['placas'];
      $version    = $row['version'];
      $serie      = $row['serie'];
      $motor      = $row['nmotor'];

      
      $expedicion = $row['expedicion'];
      $vigencia   = $row['vigencia'];
      $cobertura  = $row['cobertura'];
      $total      = $row['costo_total'];
      $abono      = $row['pagomensual'];
      $anoPoliza  = $row['ano2'];
      

      $vendedor   = $row['vendedor'];
      $cobrador   = $row['cobrador'];
      $plataforma = $row['plataforma'];
    
  }

?>
<div class="card-body">
  <form method="post" action="<?=$url?>Poliza/updatePolicy">
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Póliza</strong>
        </label>
        <input type="text" name="folio" class="form-control" value=" <?php echo $poliza; ?>" readonly/>
      </div>
    </div>
    <div>
      <h2 class="card-body">Información del asegurado</h2>
    </div>
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Nombre</strong>
        </label>
        <input autocomplete="off" type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" maxlength="250" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Domicilio</strong>
        </label>
        <input autocomplete="off" type="text" name="domicilio" class="form-control" value="<?php echo $direccion; ?>" maxlength="500" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Exterior</strong>
        </label>
        <input autocomplete="off" type="text" name="exterior" class="form-control" value="<?php echo $exterior; ?>" maxlength="50"required/>
      </div>  
    </div>
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Colonia</strong>
        </label>
        <input autocomplete="off" type="text" name="col" class="form-control" value="<?php echo $colonia; ?>" maxlength="255"required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Municipio</strong>
        </label>
        <select class="form-control mb-3" name="municipio" required>
          <?php foreach( $municipios as $mun){ ?>
          <option value="<?php echo $mun->descripcion; ?>" <?php if($municipio == $mun->descripcion){ echo 'selected';} ?>><?php echo $mun->descripcion; ?></option>
          <?php } ?> 
        </select>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Teléfono</strong>
        </label>
        <input autocomplete="off" type="text" name="tel" class="form-control" value="<?php echo $telefono; ?>" pattern="[0-9]{10,30}"required/>
      </div>
    </div>
    <div>
      <h2 class="card-body">Datos del vehículo</h2>
    </div>
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Marca</strong>
        </label>
        <input autocomplete="off" type="text" name="marca" class="form-control" value="<?php echo $marca; ?>" maxlength="200" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Vehículo</strong>
        </label>
        <input autocomplete="off" type="text" name="tipo" class="form-control" value="<?php echo $vehiculo; ?>" maxlength="200"  required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Año</strong>
        </label>
        <input autocomplete="off" type="number" name="ano" class="form-control" value="<?php echo $ano; ?>" max="3000"  required/>
      </div>
    </div>
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Color</strong>
        </label>
        <input autocomplete="off" type="text" name="color" class="form-control" value="<?php echo $color; ?>" maxlength="50"  required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Placas</strong>
        </label>
        <input autocomplete="off" type="text" name="placas" class="form-control" value="<?php echo $placas; ?>"  style="text-transform: uppercase;" maxlength="50" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Versión</strong>
        </label>
        <input autocomplete="off" type="text" name="version" class="form-control" value="<?php echo $version; ?>" maxlength="100"  required/>
      </div>
    </div>
    <div class="row">
      <div class="mb-3 col-md-6">
        <label class="form-label">
          <strong>No. serie</strong>
        </label>
        <input autocomplete="off" type="text" name="serie" class="form-control" value="<?php echo $serie; ?>" maxlength="255"  required/>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label">
          <strong>No. motor</strong>
        </label>
        <input autocomplete="off" type="text" name="nmotor" class="form-control" value="<?php echo $motor; ?>" maxlength="255"  required/>
      </div>  
    </div>
    <div>
      <h2 class="card-body">Información de cobertura</h2>
    </div>
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Expedición</strong>
        </label>
        <input autocomplete="off" type="date" min="1940-01-01" name="expedicion" class="form-control" value="<?php echo $expedicion; ?>" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Vigencia</strong>
        </label>
        <input autocomplete="off" type="date" min="1940-01-01" name="vigencia" class="form-control" value="<?php echo $vigencia; ?>" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Año de la póliza</strong>
        </label>
        <input autocomplete="off" type="text" name="ano2" class="form-control" value="<?php echo $anoPoliza; ?>" required/>
      </div>
    </div>
    <div class="row">
      <div class="mb-3 mb-3 col-md-4">
        <label class="form-label">
          <strong>Cobertura</strong>
        </label>
        <select class="form-control mb-3" name="cobertura" required>
          <?php foreach( $coberturas as $cobert){ ?>
          <option value="<?php echo $cobert->id; ?>" <?php if($cobertura == $cobert->id){ echo 'selected';} ?>><?php echo $cobert->cobertura; ?></option>
          <?php } ?> 
        </select>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Pago mensual</strong>
        </label>
        <input autocomplete="off" type="number" name="pagomensual" class="form-control" value="<?php echo $abono; ?>" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Costo total</strong>
        </label>
        <input autocomplete="off" type="text" name="costo_total" class="form-control" value="<?php echo $total; ?>" required/>
      </div>
    </div>
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Vendedor</strong>
        </label>
        <select class="form-control mb-3" name="vendedor" required>
          <?php foreach( $vendedores as $ven){ ?>
          <option value="<?php echo $ven->nombre; ?>" <?php if($vendedor == $ven->nombre){ echo 'selected';} ?>><?php echo $ven->nombre; ?></option>
          <?php } ?> 
        </select>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Cobrador</strong>
        </label>
        <select class="form-control mb-3" name="cobrador" required>
          <?php foreach( $cobradores as $cob){ ?>
          <option value="<?php echo $cob->nombre; ?>" <?php if($cobrador == $cob->nombre){ echo 'selected';} ?>><?php echo $cob->nombre; ?></option>
          <?php } ?> 
        </select>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Plataforma</strong>
        </label>
        <select class="form-control mb-3" name="plataforma" required>
          <?php foreach( $plataformas as $platform){ ?>
          <option value="<?php echo $platform->descripcion; ?>" <?php if($plataforma == $platform->descripcion){ echo 'selected';} ?>><?php echo $platform->descripcion; ?></option>
          <?php } ?>                
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button> 
  </form>
</div>
