<!DOCTYPE html>
<html lang="en">

<?php
 include('../TemplateZapatreria/partials/importes.php');
?>
<?php
	include('../TemplateZapatreria/partials/navbar.php');
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
                            
                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Comprar Ahora
                            </a>
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
                <label for="inputEmail4">Correo Electronico</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Correo Electronico">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputPassword4">Nombre</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Nombre">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Apellido Paterno</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Apellido Paterno">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Apellido Materno</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Apellido Materno">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Dirección</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Ingresa calle y numero #">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Ciudad</label>
            <input type="text" class="form-control" placeholder="Ingresa tu ciudad" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Estado</label>
                <select id="inputState" class="form-control">
                    <option selected>Seleccionar Estado</option>
                    <option>Aguascalientes</option>
                    <option>Zacatecas</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Codigo Postal</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>

        <button type="submit" class="btn btn-danger btn-block"> <i class="fa fa-plus"></i> Registrarme</button>
    </form>
</div>

<?php
    include('../TemplateZapatreria/partials/importesJS.php');
?>