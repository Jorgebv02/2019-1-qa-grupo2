<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$data_registro = array(
    array('type' => 'text','name' => 'nombre','placeholder' => 'Nombre Completo','class' => 'name number new-pwd'),
    array('type' => 'text','name' => 'user','placeholder' => 'Usuario','class' => 'name form-control form-control-inline'),
    array('type' => 'email','name' => 'email','placeholder' => 'Email','class' => 'name number new-pwd'),
    array('type' => 'password','name' => 'password','placeholder' => 'Digite su contraseña','class' => 'name form-control form-control-inline'),
    array('type' => 'date','name' => 'fecha_nacimiento','placeholder' => 'Fecha de nacimiento','class' => ' name form-control')
    );
?>
    <br><br>
    <div class="bg-color">
        <div class="container-fluid ">
            <div class="row" style="height: 100%;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
                    <div class=" col-xs-8 col-sm-8 col-md-8col-lg-8 custom-pad">
                        <h3 class="connect">FaceTec ayuda a conectarte con<br> personas en tu vida.
                        </h3>
                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/GwFs3_KxNjS.png" alt="image" class="world-img text-center">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 align">
                    <div class="text-left ">
                        <h1 class="heading">Crear una cuenta</h1>
                        <p class="paragraph">Es gratis para siempre.</p>
                        <?= form_open('login/registro',''); ?>
                            <br><br>
                            <?= form_input($data_registro[0]); ?>
                                <br><br>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                                        <?= form_input($data_registro[1]); ?>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 no-pad">
                                        <?= form_input($data_registro[3]); ?>
                                    </div>
                                </div>
                                <br><br>
                                <?= form_input($data_registro[2]); ?><br>
                                    <div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                                                <p class="birthday">Fecha de Nacimiento</p>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 no-pad">
                                                <?= form_input($data_registro[4]); ?>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <?=form_submit("Registrarse",'Registrarse', "class='btn btn-success sign-up' "); ?>
                                        <?=form_close(); ?>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>