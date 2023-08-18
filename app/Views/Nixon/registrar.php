<?php echo $this->extend('welcome_message'); 
echo $this->section('content'); ?>
<br>

<div class="container">
    <h3>Formulario registro de Zoologico</h3>
    <form ">
        <div class="mb-3">
            <label for="nombre_cat" class="form-label">Nombre Zoologico</label>
            <input type="text" class="form-control" id="nombre_cat" name="nombre_cat" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="descripcion_cat" class="form-label">Direccion Zologico</label>
            <input type="text" class="form-control" id="descripcion_cat" name="descripcion_cat">
        </div>
        <div class="mb-3">
            <label for="descripcion_cat" class="form-label">telefono Zologico</label>
            <input type="text" class="form-control" id="descripcion_cat" name="descripcion_cat">
        </div>
        
        <a hreft="<?php echo base_url() ?>" type="submit" class="btn btn-primary">Registrar</a>
    </form>

</div>

<?php echo $this->endSection();?>
