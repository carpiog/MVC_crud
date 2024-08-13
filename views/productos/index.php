<h1 class="text-center">Formulario de productos</h1>
<div class="row justify-content-center">
    <form id="formProducto" class="border shadow p-4 col-lg-4">
        <div class="row mb-3">
            <div class="col">
                <label for="nombre">Nombre del producto</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="precio">Precio del producto</label>
                <input type="number" name="precio" id="precio" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </div>
        </div>
    </form>
</div>
<?php var_dump($productos) ?>
<script src="<?= asset('./build/js/producto/index.js') ?>"></script>