<div class="container">
	<?php echo validation_errors(); ?>
    <form action="<?=base_url('index.php/ClientesC/updateCliente/').$cliente[0]->id_Cliente ?>" method="POST">

    <label>Razón social</label>
				<input type="text" class="form-control" name="razonSocial" value="<?= $cliente [0]->razonSocial?>">

				<label>Alias</label>
				<input type="text" class="form-control" name="alias" value="<?= $cliente [0]->alias?>">
			
				
				<label>RFC</label>
				<input type="text" class="form-control" name="rfc" value="<?= $cliente [0]->rfc?>">

				<label>Calle</label>
				<input type="text" class="form-control" name="calle" value="<?= $cliente [0]->calle?>">
				
				<label>Colonia</label>
				<input type="text" class="form-control" name="colonia" value="<?= $cliente [0]->colonia?>">

				<label>Número exterior</label>
				<input type="text" class="form-control" name="numeroExterior" value="<?= $cliente [0]->numeroExterior?>">
				
				
				<label>Número interior</label>
				<input type="text" class="form-control" name="numeroInterior" value="<?= $cliente [0]->numeroInterior?>">

				<label>Código postal</label>
				<input type="text" class="form-control" name="codigoPostal" value="<?= $cliente [0]->codigoPostal?>">

				<label>Ciudad</label>
				<input type="text" class="form-control" name="ciudad" value="<?= $cliente [0]->ciudad?>">

				<label>Estado</label>
				<input type="text" class="form-control" name="estado" value="<?= $cliente [0]->estado?>">

				<label>Teléfono</label>
				<input type="text" class="form-control" name="telefono" value="<?= $cliente [0]->telefono?>">

				<label>Correo Electronico</label>
				<input type="text" class="form-control" name="correoElectronico" value="<?= $cliente [0]->correoElectronico?>">
				
				<label>Dirección alternativa</label>
				<input type="text" class="form-control" name="direccionEnvioAlternativa" value="<?= $cliente [0]->direccionEnvioAlternativa?>">


				<input type="submit" value="Actualizar">
	</form>

</div>