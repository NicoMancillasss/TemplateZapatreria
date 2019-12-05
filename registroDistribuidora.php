<!DOCTYPE html>
<html lang="en">

<?php
 include('../TemplateZapatreria/partials/importes.php');
?>
<?php
	// include('../TemplateZapatreria/partials/navbar.php');
?>
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1" style="background-image: url(images/slide-01.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                ¡¡ Que esperas !!
                            </span>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                Registrate como Distribuidora
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container m-5">
    <form class="m-5">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="correo">Correo Electronico</label>
                <input type="email" class="form-control" id="correo" placeholder="Correo Electronico">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre">
            </div>
            <div class="form-group col-md-6">
                <label for="apaterno">Apellido Paterno</label>
                <input type="text" class="form-control" id="apaterno" placeholder="Apellido Paterno">
            </div>
            <div class="form-group col-md-6">
                <label for="amaterno">Apellido Materno</label>
                <input type="text" class="form-control" id="amaterno" placeholder="Apellido Materno">
            </div>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" placeholder="Ingresa calle y numero #">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="ciudad">Ciudad</label>
            <input type="text" class="form-control" placeholder="Ingresa tu ciudad" id="ciudad">
            </div>
            <div class="form-group col-md-4">
                <label for="estado">Estado</label>
                <select id="estado" class="form-control">
                    <option selected>Seleccionar Estado</option>
                    <option>Aguascalientes</option>
                    <option>Zacatecas</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="cp">Codigo Postal</label>
                <input type="text" class="form-control" id="cp">
            </div>
        </div>

        <button type="submit" id="boton" onclick="guardar()" class="btn btn-danger btn-block"> <i class="fa fa-plus"></i> Registrarme</button>
    </form>
</div>

<?php
    include('../TemplateZapatreria/partials/importesJS.php');
?>