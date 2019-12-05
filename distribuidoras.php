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
                                Mis distribuidoras
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
    <table class="table">
        <thead class="">
            <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">apaterno</th>
                <th scope="col">amaterno</th>
                <th scope="col">correo</th>
                <th scope="col">direccion</th>
                <th scope="col">ciudad</th>
                <th scope="col">estado</th>
                <th scope="col">cp</th>
            </tr>
        </thead>
        <tbody id="tabla">
            
        </tbody>
    </table>
</div>

<?php
 include('../TemplateZapatreria/js/app.js');
?>