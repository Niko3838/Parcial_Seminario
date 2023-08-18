<?php echo $this->extend('welcome_message'); 
echo $this->section('content'); ?>
<br>
<div class="container">
    <h3>Listado de Especies</h3>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre Especie</th>
            <th scope="col">Nombre Cientifico</th>
            <th scope="col">Edad</th>
            <th scope="col">Zoologico</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Tucan</td>
                <td>Pajaro_volador</td>
                <td>1</td>
                <td>Zoo Pasto</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Guacamaya</td>
                <td>Pajaro_volador</td>
                <td>2</td>
                <td>Zoo Cali</td>
            </tr>
            
            
        </tbody>
    </table>
</div>

<?php echo $this->endSection();?>