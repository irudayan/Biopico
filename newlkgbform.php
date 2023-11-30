<!DOCTYPE html>
<html>

<head>
    <title>Liver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <style>
        .form-control {
            margin-bottom: 10px;
        }

        .admission-form {
            background-color: transparent;
            background-image: linear-gradient(rgb(155, 19, 188) 0%, rgb(46, 49, 146) 100%);
            padding: 25px 0px;
            border-radius: 12px;
        }

        #submit:hover {
            color: #333;
            background-image: linear-gradient(to right, #fff 0%, #fff 51%, #fff 100%);
        }

        #submit {
            text-align: center;
            transition: 0.5s;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            background-image: linear-gradient(to right, #9B13BC 0%, #9B13BC 51%, #9B13BC 100%);
            text-decoration: none;
            border: 1px solid transparent;
            padding: 3px 15px;
            color: #fff;
            font-weight: 700;
        }

        label,
        span,
        legend,
        h5 {
            color: #fff;
        }

        h5 {
            font-size: 15px;
            font-style: italic;
        }

        legend {
            font-weight: 700;
            font-size: 20px;
            text-decoration: underline;
        }

.green{
   background: #37ff27;
}

.gray{
   background: #d3d3d3;
}
.yellow{
   background: yellow;
}
    </style>
    <section class="admission-form">
        <div class="container">
            <div class="content-inner">
                <!--<center><h3> BBB ORGAN FORM 2</h3></center>-->
                <form method="POST" action="mail2.php">

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">6.&nbsp;&nbsp;Number of units per plate</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_of_units" name="no_of_units" value="6" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">7.&nbsp;&nbsp;No of plates</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_of_plates" name="no_of_plates" value="1" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>


                        <!-- Liver -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="flexRadioLiver">8.&nbsp;&nbsp;Liver</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-check-input" type="radio" name="flexRadioLiver" value="0" id="flexRadioLiver0" checked onchange="calculate1(this, 'Liver');">
                            <label class="form-check-label" for="flexRadioLiver0">
                                0
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioLiver" value="1" id="flexRadioLiver1" onchange="calculate1(this, 'Liver');">
                            <label class="form-check-label" for="flexRadioLiver1">
                                1
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>
                        <p></p>

                        <!-- Kidney -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="flexRadioKidney">9.&nbsp;&nbsp;Kidney</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-check-input" type="radio" name="flexRadioKidney" value="0" id="flexRadioKidney0" onchange="calculate1(this, 'Kidney');">
                            <label class="form-check-label" for="flexRadioKidney0">
                                0
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioKidney" value="1" id="flexRadioKidney1" checked onchange="calculate1(this, 'Kidney');">
                            <label class="form-check-label" for="flexRadioKidney1">
                                1
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>
                        <p></p>


                        <!-- Gut -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="flexRadioGut">10.&nbsp;&nbsp;Gut</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-check-input" type="radio" name="flexRadioGut" value="0" id="flexRadioGut0" checked onchange="calculate1(this, 'Gut');">
                            <label class="form-check-label" for="flexRadioGut0">
                                0
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioGut" value="1" id="flexRadioGut1" onchange="calculate1(this, 'Gut');">
                            <label class="form-check-label" for="flexRadioGut1">
                                1
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>
                        <p></p>

                        <!-- Brain -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="flexRadioBrain">11.&nbsp;&nbsp;Brain</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-check-input" type="radio" name="flexRadioBrain" value="0" id="flexRadioBrain0" checked onchange="calculate1(this, 'Brain');">
                            <label class="form-check-label" for="flexRadioBrain0">
                                0
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioBrain" value="1" id="flexRadioBrain1" onchange="calculate1(this, 'Brain');">
                            <label class="form-check-label" for="flexRadioBrain1">
                                1
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>
                        <p></p>

                        <!-- Vascular Liver -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="flexRadiovascularLiver">12.&nbsp;&nbsp;Vascular Liver</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-check-input" type="radio" value="0" name="vascularRadioLiver" id="flexRadioVascularLiver0" checked onchange="calculate1(this, 'VascularLiver');">
                            <label class="form-check-label" for="flexRadioVascularLiver0">
                                0
                            </label>
                            <input class="form-check-input" type="radio" value="1" name="vascularRadioLiver" id="flexRadioVascularLiver1" onchange="calculate1(this, 'VascularLiver');">
                            <label class="form-check-label" for="flexRadioVascularLiver1">
                                1
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>
                        <p></p>

                        <!-- Vascular Kidney -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <label for="vascularKidney">13.&nbsp;&nbsp;Vascular Kidney</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <input class="form-check-input" type="radio" name="vascularRadioKidney" id="flexRadioVascularKidney0" value="0" checked onchange="calculate1(this,'VascularKidney');">
                            <label class="form-check-label" for="flexRadioVascularKidney0">
                                0
                            </label>
                            <input class="form-check-input" type="radio" name="vascularRadioKidney" id="flexRadioVascularKidney1" value="1" onchange="calculate1(this,'VascularKidney');">
                            <label class="form-check-label" for="flexRadioVascularKidney1">
                                1
                            </label>
                        </div>
                        <p></p>

                        <!-- Vascular Vascular Gut -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <label for="vascularGut">14.&nbsp;&nbsp;Vascular Gut</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <input class="form-check-input" type="radio" name="vascularRadioGut" id="flexRadioVascularGut0" value="0" checked onchange="calculate1(this,'VascularGut');">
                            <label class="form-check-label" for="flexRadioVascularGut0">
                                0
                            </label>
                            <input class="form-check-input" type="radio" name="vascularRadioGut" id="flexRadioVascularGut1" value="1" onchange="calculate1(this,'VascularGut');">
                            <label class="form-check-label" for="flexRadioVascularGut1">
                                1
                            </label>
                        </div>
                        <p></p>

                        <!-- Vascular Vascular Brain -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <label for="vascularBrain">15.&nbsp;&nbsp;Vascular Brain</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <input class="form-check-input" type="radio" name="vascularRadioBrain" id="flexRadioVascularBrain0" value="0" checked onchange="calculate1(this,'VascularBrain');">
                            <label class="form-check-label" for="flexRadioVascularBrain0">
                                0
                            </label>
                            <input class="form-check-input" type="radio" name="vascularRadioBrain" id="flexRadioVascularBrain1" value="1" onchange="calculate1(this,'VascularBrain');">
                            <label class="form-check-label" for="flexRadioVascularBrain1">
                                1
                            </label>
                        </div>
                        <p></p>

                        <!-- old -->

                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>
                        <p></p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">16.&nbsp;&nbsp;Gel volume tolerance percentage</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="vol_tolerance" name="vol_tolerance" value="25" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> % </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">17.&nbsp;&nbsp;Cell density tolerance percentage</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="dens_tolerance" name="dens_tolerance" value="10" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> % </span>
                        </div>

                        <p></p>
                        <legend>Fibrinogen + Thrombin gel for Organs</legend>
                        <p></p>
                        <strong>
                            <h5>Liver</h5>
                        </strong>
                        <p></p>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">22.&nbsp;&nbsp;Volume of Fibrinogen/Thrombin/cell gel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="fib_thromb_cell_liver" name="fib_thromb_cell_liver" value="60" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">23.&nbsp;&nbsp;Tolerance volume</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="tol_vol_liver" name="tol_vol_liver" value="15" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">24.&nbsp;&nbsp;Volume of gel mix per plate</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_gel_mix_liver" required name="vol_gel_mix_liver" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">25.&nbsp;&nbsp;Total gel for all plates</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="tot_gel_plate_liver" name="tot_gel_plate_liver" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <p></p>
                        <h5>Kidney</h5>
                        <p></p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">28.&nbsp;&nbsp;Volume of Fibrinogen/Thrombin/cell gel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="fib_thromb_cell_kid" name="fib_thromb_cell_kid" value="25" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_name">29.&nbsp;&nbsp;Tolerance volume</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="tol_kid" name="tol_kid" value="6.25" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">30.&nbsp;&nbsp;Volume of gel mix per plate</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="gel_mix_plate_kid" value="187.5" name="gel_mix_plate_kid" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_name">31.&nbsp;&nbsp;Total gel for all plates</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="total_gel_kid" name="total_gel_kid" value="375" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <p></p>
                        <h5>Gut</h5>
                        <p></p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">34.&nbsp;&nbsp;Volume of Fibrinogen/Thrombin/cell gel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="fib_thromb_cell_gut" value="20" name="fib_thromb_cell_gut" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">35.&nbsp;&nbsp;Tolerance volume</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="tol_gut" name="tol_gut" value="5" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">36.&nbsp;&nbsp;Volume of gel mix per plate</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="gel_mix_gut" name="gel_mix_gut" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">37.&nbsp;&nbsp;Total gel for all plates</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="total_gel_gut" name="total_gel_gut" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <p></p>
                        <h5>Brain</h5>
                        <p></p>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_name">40.&nbsp;&nbsp;Volume of Fibrinogen/Thrombin/cell gel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control" type="text" id="fib_throm_cell_brain" name="fib_throm_cell_brain" value="25" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">41.&nbsp;&nbsp;Tolerance volume </label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="tol_brain" name="tol_brain" value="6.25" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">42.&nbsp;&nbsp;Volume of gel mix per plate</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="gel_mix_brain" name="gel_mix_brain" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">43.&nbsp;&nbsp;Total gel for all plates</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="total_gel_brain" name="total_gel_brain" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>


                        <p></p>
                        <h5>Vascular Region</h5>
                        <p></p>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">46.&nbsp;&nbsp;Volume of Liver-Endothelial region</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="vol_liver_endo" name="vol_liver_endo" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">47.&nbsp;&nbsp;Volume of Kidney-Endothelial region</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="vol_kid_endo" name="vol_kid_endo" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">48.&nbsp;&nbsp;Volume of Gut-Endothelial region</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_gut_endo" name="vol_gut_endo" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">49.&nbsp;&nbsp;Volume of Brain-Endothelial region</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_brain_endo" name="vol_brain_endo" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">50.&nbsp;&nbsp;Total Endothelial cell gel volume</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="total_endo_vol" name="total_endo_vol" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>
                      <p></p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">52.&nbsp;&nbsp;Total Gel Needed</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="total_gel_need" name="total_gel_need" value="187.5" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <p></p>
                        <h5>Working Fibrinogen Solution</h5>
                        <p></p>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">55.&nbsp;&nbsp;Phenol red color factor</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="phenol_fact" name="phenol_fact" value="2" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">56.&nbsp;&nbsp;Required total Fibrinogen gel working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="total_fib_gel" name="total_fib_gel" value="62.5" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">57.&nbsp;&nbsp;Fibrinogen working solution concentration</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="fib_work_con" name="fib_work_con" value="6" required onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg/ml </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">58.&nbsp;&nbsp;Mass of phenol red to add to PBS</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="mass_phenol_pbs" name="mass_phenol_pbs" value="0.125" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">59.&nbsp;&nbsp;Volume of PBS with phenol red</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="yellow form-control allow_decimal" type="text" id="vol_pbs_phenol" name="vol_pbs_phenol" value="62.5" readonly >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">60.&nbsp;&nbsp;Fibrinogen powder</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="yellow form-control allow_decimal" type="text" id="fib_powder" name="fib_powder" value="0.375" readonly >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg </span>
                        </div>

                        <p></p>
                        <h5>Stock solution of Thrombin</h5>
                        <p></p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">63.&nbsp;&nbsp;Number of NIH Units</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_nih_units" name="no_nih_units" value="1000" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">64.&nbsp;&nbsp;U/mg Solid</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="umg_solid" name="umg_solid" value="101" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U/mg </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">65.&nbsp;&nbsp;Solid in bottle</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="solid_bottle" name="solid_bottle" value="9.900990099" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">66.&nbsp;&nbsp;Units in bottle</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="unit_bottle" name="unit_bottle" value="1000" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">67.&nbsp;&nbsp;Desired concentration of Thrombin stock solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="con_thromb_sol" name="con_thromb_sol" value="100" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U/ml </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">68.&nbsp;&nbsp;Desired volume of stock solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="des_vol_stock" name="des_vol_stock" value="1" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ml </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">69.&nbsp;&nbsp;Thrombin stock solution concentration in mg/ml</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="throm_sol_con" name="throm_sol_con" value="9.900990099" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg/ml </span>
                        </div>


                        <p></p>
                        <h5>Thrombin Working solution</h5>
                        <p></p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">72.&nbsp;&nbsp;Required total thrombin gel working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="tot_gel_work" name="tot_gel_work" value="62.5" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">73.&nbsp;&nbsp;Required thrombin concentration</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="req_throm_con" name="req_throm_con" onkeyup="calculate1();" value="4" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U/ml </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">74.&nbsp;&nbsp;Thrombin working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="throm_work_sol" name="throm_work_sol" value="2.5" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">75.&nbsp;&nbsp;Volume of heparin medium for required concentration</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_hep_con" name="vol_hep_con" value="60" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">76.&nbsp;&nbsp;Heparin-Thrombin solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="hep_thromb_sol" name="hep_thromb_sol" value="62.5" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <p></p>
                        <h5>Cells Available from T flasks</h5>
                        <p></p>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">79.&nbsp;&nbsp;Number of Liver cells from T-75 flask</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_liver_cells" name="no_liver_cells" value="12400000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">80.&nbsp;&nbsp;Number of flasks </label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_liv_flask" onkeyup="calculate1();" name="no_liv_flask" value="1" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">81.&nbsp;&nbsp;Total Number of Liver cells</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="tot_liver_cell" name="tot_liver_cell" value="12400000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>
                        <p></p>
                        <p></p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">83.&nbsp;&nbsp;Number of Kidney cells from T-75 flask</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_kid_cells" name="no_kid_cells" value="7000000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">84.&nbsp;&nbsp;Number of flasks </label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_kid_flask" name="no_kid_flask" value="1" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">85.&nbsp;&nbsp;Total Number of Kidney cells</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="tot_kid_cell" name="tot_kid_cell" value="7000000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <p></p>
                        <p></p>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">87.&nbsp;&nbsp;Number of Gut cells from T-75 flask</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_gut_cells" value="10000000" name="no_gut_cells" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">88.&nbsp;&nbsp;Number of flasks </label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_gut_flask" name="no_gut_flask" value="1" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">89.&nbsp;&nbsp;Total Number of Gut cells</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="tot_gut_cell" name="tot_gut_cell" value="10000000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <p></p>
                        <p></p>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">91.&nbsp;&nbsp;Number of Brain cells from T-75 flask</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_brain_cells" name="no_brain_cells" value="2000000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">92.&nbsp;&nbsp;Number of flasks </label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_brain_flask" name="no_brain_flask" value="1" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">93.&nbsp;&nbsp;Total Number of Brain cells</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="tot_brain_cell" name="tot_brain_cell" value="2000000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <p></p>
                        <p></p>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">95.&nbsp;&nbsp;Number of Endothelial cells from T75 flask</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_endo_cells" name="no_endo_cells" value="5000000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">96.&nbsp;&nbsp;Number of flasks </label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_endo_flask" onkeyup="calculate1();" value="2" name="no_endo_flask" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">97.&nbsp;&nbsp;Total number of Endothelial cells</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="tot_endo_cell" name="tot_endo_cell" value="10000000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <p></p>
                        <p></p>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">99.&nbsp;&nbsp;Number of Fibroblast cells from T75 flask</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_fib_cells" name="no_fib_cells" value="4000000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">100.&nbsp;&nbsp;Number of flasks </label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_fib_flask" onkeyup="calculate1();" value="3" name="no_fib_flask" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">101.&nbsp;&nbsp;Total number of Fibroblast cells</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="tot_fib_cell" name="tot_fib_cell" value="12000000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <p></p>
                        <p></p>
                        <h5><i>Liver</i></h5>
                        <p></p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">105.&nbsp;&nbsp;Desired cell density for organ in channel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="des_dens_org_liv" name="des_dens_org_liv" value="10000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">106.&nbsp;&nbsp;Cells required for the experiment</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="cells_req_exp_liv" name="cells_req_exp_liv" value="9000000" readonly style="background-color: #F5F5F5 ;">
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">107.&nbsp;&nbsp;Resuspension cell density in tube</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="res_cell_dens_liv" name="res_cell_dens_liv" value="30000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">108.&nbsp;&nbsp;Resuspension media volume in the tube</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="yellow form-control allow_decimal" type="text" id="res_vol_liv" name="res_vol_liv" value="0" readonly >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">109.&nbsp;&nbsp;Volume of cells for thrombin working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="yellow form-control allow_decimal" type="text" id="vol_throm_mix_liv" name="vol_throm_mix_liv" value="300" readonly >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">110.&nbsp;&nbsp;Volume of cell resuspension left</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_res_left_liv" name="vol_res_left_liv" value="113" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">111.&nbsp;&nbsp;Cells remaining</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="cell_remain_liv" name="cell_remain_liv" value="3390000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">112.&nbsp;&nbsp;Volume of thrombin working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="working_solution_liv" name="working_solution_liv" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">113.&nbsp;&nbsp;Volume of fibrinogen solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="fibrinogen_solution_liv" name="fibrinogen_solution_liv" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <p></p>
                        <h5>Kidney</h5>
                        <p></p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">116.&nbsp;&nbsp;Desired cell density for organ in channel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="des_dens_org_kid" name="des_dens_org_kid" value="35000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">117.&nbsp;&nbsp;Cells required for the experiment</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="cells_req_exp_kid" name="cells_req_exp_kid" value="3000000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">118.&nbsp;&nbsp;Resuspension cell density in tube</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="res_cell_dens_kid" name="res_cell_dens_kid" value="24000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">119.&nbsp;&nbsp;Resuspension media volume in the tube</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="yellow form-control allow_decimal" type="text" id="res_vol_kid" name="res_vol_kid" value="321" readonly >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">120.&nbsp;&nbsp;Volume of cells for thrombin working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="yellow form-control allow_decimal" type="text" id="vol_throm_mix_kid" name="vol_throm_mix_kid" value="125" readonly >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">121.&nbsp;&nbsp;Volume of cell resuspension left</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_res_left_kid" name="vol_res_left_kid" value="196" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">122.&nbsp;&nbsp;Cells remaining</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="cell_remain_kid" name="cell_remain_kid" value="4704000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">123.&nbsp;&nbsp;Volume of thrombin working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="working_solution_kid" name="working_solution_kid" value="62.5" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">124.&nbsp;&nbsp;Volume of fibrinogen solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="fibrinogen_solution_kid" name="fibrinogen_solution_kid" value="62.5" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <p></p>
                        <h5>Gut</h5>
                        <p></p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">127.&nbsp;&nbsp;Desired cell density for organ in channel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="des_dens_org_gut" name="des_dens_org_gut" value="10000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">128.&nbsp;&nbsp;Cells required for the experiment</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="cells_req_exp_gut" name="cells_req_exp_gut" value="3000000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">129.&nbsp;&nbsp;Resuspension cell density in tube</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="res_cell_dens_gut" name="res_cell_dens_gut" value="30000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">130.&nbsp;&nbsp;Resuspension media volume in the tube</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="yellow form-control allow_decimal" type="text" id="res_vol_gut" name="res_vol_gut" value="333" readonly >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">131.&nbsp;&nbsp;Volume of cells for thrombin working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="yellow form-control allow_decimal" type="text" id="vol_throm_mix_gut" name="vol_throm_mix_gut" value="100" readonly >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">132.&nbsp;&nbsp;Volume of cell resuspension left</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_res_left_gut" name="vol_res_left_gut" value="233" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">133.&nbsp;&nbsp;Cells remaining</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="cell_remain_gut" name="cell_remain_gut" value="6990000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">134.&nbsp;&nbsp;Volume of thrombin working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="working_solution_gut" name="working_solution_gut" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">135.&nbsp;&nbsp;Volume of fibrinogen solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="fibrinogen_solution_gut" name="fibrinogen_solution_gut" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>


                        <p></p>
                        <h5>Brain</h5>
                        <p></p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">138.&nbsp;&nbsp;Desired cell density for organ in channel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="des_dens_org_brain" name="des_dens_org_brain" value="330" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">139.&nbsp;&nbsp;Cells required for the experiment</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="cells_req_exp_brain" name="cells_req_exp_brain" value="3000000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">140.&nbsp;&nbsp;Resuspension cell density in tube</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="res_cell_dens_brain" name="res_cell_dens_brain" value="30000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">141.&nbsp;&nbsp;Resuspension media volume in the tube</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="yellow form-control allow_decimal" type="text" id="res_vol_brain" name="res_vol_brain" value="233" readonly >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">142.&nbsp;&nbsp;Volume of cells for thrombin working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="yellow form-control allow_decimal" type="text" id="vol_throm_mix_brain" name="vol_throm_mix_brain" value="100" readonly >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">143.&nbsp;&nbsp;Volume of cell resuspension left</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_res_left_brain" name="vol_res_left_brain" value="133" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">144.&nbsp;&nbsp;Cells remaining</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="cell_remain_brain" name="cell_remain_brain" value="3990000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">145.&nbsp;&nbsp;Volume of thrombin working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="working_solution_brain" name="working_solution_brain" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">146.&nbsp;&nbsp;Volume of fibrinogen solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="fibrinogen_solution_brain" name="fibrinogen_solution_brain" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <p></p>
                        <p></p>
                        <h5>Endothelial cells / Fibroblast for Outer Channels</h5>
                        <p></p>
                        <p></p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">149.&nbsp;&nbsp;Desired cell density for organ in channel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="des_dens_org_endo" name="des_dens_org_endo" value="5000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">150.&nbsp;&nbsp;Cells required for the experiment</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="cells_req_exp_endo" name="cells_req_exp_endo" value="9375000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">151.&nbsp;&nbsp;Resuspension cell density in tube</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="res_cell_dens_endo" name="res_cell_dens_endo" value="15000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">152.&nbsp;&nbsp;Resuspension media volume in the tube</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="yellow form-control allow_decimal" type="text" id="res_vol_endo" name="res_vol_endo" value="667" readonly >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">153.&nbsp;&nbsp;Volume of cells for thrombin working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="yellow form-control allow_decimal" type="text" id="vol_throm_mix_endo" name="vol_throm_mix_endo" value="625" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">154.&nbsp;&nbsp;Volume of cell resuspension left</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_res_left_endo" name="vol_res_left_endo" value="42" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">155.&nbsp;&nbsp;Cells remaining</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="cell_remain_endo" name="cell_remain_endo" value="630000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">156.&nbsp;&nbsp;Volume of thrombin working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="working_solution_endo" name="working_solution_endo" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">157.&nbsp;&nbsp;Volume of fibrinogen solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="fibrinogen_solution_endo" name="fibrinogen_solution_endo" value="0" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <p></p>
                        <p></p>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Name</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="name" name="name" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">E-mail Id</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="email" name="email" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="button-form">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="button-content">
                                        <center><button type="submit" name="submit" id="submit">SUBMIT</button></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.allow_decimal').keyup(function() {
            var val = $(this).val();
            if (isNaN(val)) {
                val = val.replace(/[^0-9\.]/g, '');
                if (val.split('.').length > 2)
                    val = val.replace(/\.+$/, "");
            }
            $(this).val(val);
        });

        function calculate1(e, organ) {

            if ($('#fib_thromb_cell_liver').val() != '') {
                var tolLiver = $('#tol_vol_liver').val(($('#vol_tolerance').val() / 100) * $('#fib_thromb_cell_liver').val());

             
                if (organ === 'Liver') {
                    if ($('#flexRadioLiver0').val() === e.value) {
                        var gelMixLiver = (parseFloat($('#fib_thromb_cell_liver').val()) + parseFloat($('#tol_vol_liver').val())) * parseFloat($('#no_of_units').val()) * parseFloat($('#flexRadioLiver0').val());
                        $('#vol_gel_mix_liver').val(gelMixLiver);

                    }
                    if ($('#flexRadioLiver1').val() === e.value) {
                        var gelMixLiver = (parseFloat($('#fib_thromb_cell_liver').val()) + parseFloat($('#tol_vol_liver').val())) * parseFloat($('#no_of_units').val()) * parseFloat($('#flexRadioLiver1').val());
                        $('#vol_gel_mix_liver').val(gelMixLiver);
                    }
                }

                var tolGelLiver = $('#tot_gel_plate_liver').val($('#vol_gel_mix_liver').val() * $('#no_of_plates').val());
                //     var liverEndo = $('#vol_liver_endo').val($('#tot_gel_plate_liver').val());
            }


            if ($('#fib_thromb_cell_kid').val() != '') {
                var tolKid = $('#tol_kid').val(($('#vol_tolerance').val() / 100) * $('#fib_thromb_cell_kid').val());
                // var gelMixKid = $('#gel_mix_plate_kid').val((parseFloat($('#fib_thromb_cell_kid').val()) + parseFloat($('#tol_kid').val())) * $('#no_of_units').val());

                if (organ === 'Kidney') {
                    if ($('#flexRadioKidney0').val() == e.value) {
                        var gelMixKid = (parseFloat($('#fib_thromb_cell_kid').val()) + parseFloat($('#tol_kid').val())) * parseFloat($('#no_of_units').val()) * parseFloat($('#flexRadioKidney0').val());
                        $('#gel_mix_plate_kid').val(gelMixKid);

                    }
                    if ($('#flexRadioKidney1').val() == e.value) {
                        var gelMixKid = (parseFloat($('#fib_thromb_cell_kid').val()) + parseFloat($('#tol_kid').val())) * parseFloat($('#no_of_units').val()) * parseFloat($('#flexRadioKidney1').val());
                        $('#gel_mix_plate_kid').val(gelMixKid);

                    }
                }



                // vascularKidney

                var tolGelKid = $('#total_gel_kid').val($('#gel_mix_plate_kid').val() * $('#no_of_plates').val());
                // var KidneyEndo = $('#vol_kid_endo').val($('#total_gel_kid').val());
            }

            // gut

            if ($('#fib_thromb_cell_gut').val() != '') {
                var tolGut = $('#tol_gut').val(($('#vol_tolerance').val() / 100) * $('#fib_thromb_cell_gut').val());
                // var gelMixGut = $('#gel_mix_gut').val( (parseFloat($('#fib_thromb_cell_gut').val()) + parseFloat($('#tol_gut').val())) * $('#no_of_units').val());

                if (organ === 'Gut') {
                    if ($('#flexRadioGut0').val() == e.value) {
                        var gelMixGut = (parseFloat($('#fib_thromb_cell_gut').val()) + parseFloat($('#tol_gut').val())) * parseFloat($('#no_of_units').val()) * parseFloat($('#flexRadioGut0').val());
                        $('#gel_mix_gut').val(gelMixGut);

                    }
                    if ($('#flexRadioGut1').val() == e.value) {
                        var gelMixGut = (parseFloat($('#fib_thromb_cell_gut').val()) + parseFloat($('#tol_gut').val())) * parseFloat($('#no_of_units').val()) * parseFloat($('#flexRadioGut1').val());
                        $('#gel_mix_gut').val(gelMixGut);

                    }
                }
                var tolGelGut = $('#total_gel_gut').val($('#gel_mix_gut').val() * $('#no_of_plates').val());
                // var GutEndo = $('#vol_gut_endo').val($('#total_gel_gut').val());
            }


// brain
            if ($('#fib_throm_cell_brain').val() != '') {
                var tolBrain = $('#tol_brain').val(($('#vol_tolerance').val() / 100) * $('#fib_throm_cell_brain').val());
                // var gelMixBrain = $('#gel_mix_brain').val( (parseFloat($('#fib_throm_cell_brain').val()) + parseFloat($('#tol_brain').val())) * $('#no_of_units').val());
                if (organ === 'Brain') {
                    if ($('#flexRadioBrain0').val() == e.value) {
                        var gelMixBrain = (parseFloat($('#fib_throm_cell_brain').val()) + parseFloat($('#tol_brain').val())) * parseFloat($('#no_of_units').val()) * parseFloat($('#flexRadioBrain0').val());
                        $('#gel_mix_brain').val(gelMixBrain);

                    }
                    if ($('#flexRadioBrain1').val() == e.value) {
                        var gelMixBrain = (parseFloat($('#fib_throm_cell_brain').val()) + parseFloat($('#tol_brain').val())) * parseFloat($('#no_of_units').val()) * parseFloat($('#flexRadioBrain1').val());
                        $('#gel_mix_brain').val(gelMixBrain);

                    }
                }

                var tolGelBraint = $('#total_gel_brain').val($('#gel_mix_brain').val() * $('#no_of_plates').val());
                // var BrainEndo = $('#vol_brain_endo').val($('#total_gel_brain').val());
            }



               // VascularLiver

               if (organ === 'VascularLiver') {
                    if ($('#flexRadioVascularLiver0').val() == e.value) {
                        var tolGelLiver = parseFloat($('#tot_gel_plate_liver').val()) * parseFloat($('#flexRadioVascularLiver0').val());
                        $('#vol_liver_endo').val(tolGelLiver);

                    }
                    if ($('#flexRadioVascularLiver1').val() == e.value) {
                        var tolGelLiver = parseFloat($('#tot_gel_plate_liver').val()) * parseFloat($('#flexRadioVascularLiver1').val());
                        $('#vol_liver_endo').val(tolGelLiver);

                    }
                }

            // VascularKidney
              if (organ === 'VascularKidney') {
                    if ($('#flexRadioVascularKidney0').val() == e.value) {
                        var tolGelKid = parseFloat($('#total_gel_kid').val()) * parseFloat($('#flexRadioVascularKidney0').val());
                        $('#vol_kid_endo').val(tolGelKid);

                    }
                    if ($('#flexRadioVascularKidney1').val() == e.value) {
                        var tolGelKid = parseFloat($('#total_gel_kid').val()) * parseFloat($('#flexRadioVascularKidney1').val());
                        $('#vol_kid_endo').val(tolGelKid);

                    }
                }

                 // Vascular Gut

                 if (organ === 'VascularGut') {
                    if ($('#flexRadioVascularGut0').val() == e.value) {
                        var tolGelGut = parseFloat($('#total_gel_gut').val()) * parseFloat($('#flexRadioVascularGut0').val());
                        $('#vol_gut_endo').val(tolGelGut);

                    }
                    if ($('#flexRadioVascularGut1').val() == e.value) {
                        var tolGelGut = parseFloat($('#total_gel_gut').val()) * parseFloat($('#flexRadioVascularGut1').val());
                        $('#vol_gut_endo').val(tolGelGut);

                    }
                }

                
                // Vascular Brain

                if (organ === 'VascularBrain') {
                    if ($('#flexRadioVascularBrain0').val() == e.value) {
                        var tolGelBrain = parseFloat($('#total_gel_brain').val()) * parseFloat($('#flexRadioVascularBrain0').val());
                        $('#vol_brain_endo').val(tolGelBrain);
                    }
                    if ($('#flexRadioVascularBrain1').val() == e.value) {
                        var tolGelBrain = parseFloat($('#total_gel_brain').val()) * parseFloat($('#flexRadioVascularBrain1').val());
                        $('#vol_brain_endo').val(tolGelBrain);
                    }
                }

                var totalEndoVol = $('#total_endo_vol').val(parseFloat($('#vol_liver_endo').val()) + parseFloat($('#vol_kid_endo').val()) + parseFloat($('#vol_brain_endo').val()) + parseFloat($('#vol_gut_endo').val()));
                
                var totalGelNeed = parseFloat($('#total_endo_vol').val()) + parseFloat($('#total_gel_brain').val()) + parseFloat($('#total_gel_gut').val()) + parseFloat($('#total_gel_kid').val()) + parseFloat($('#tot_gel_plate_liver').val());
                $('#total_gel_need').val(totalGelNeed);
               var totFibGel = $('#total_fib_gel').val($('#total_gel_need').val() / 3);


          

        
            if ($('#phenol_fact').val() != '') {
                var massPhenol = $('#mass_phenol_pbs').val($('#phenol_fact').val() * ($('#total_fib_gel').val() / 1000));
                var volPbs = $('#vol_pbs_phenol').val($('#total_fib_gel').val());
            }


            if ($('#fib_work_con').val() != '') {
                var fibPowder = $('#fib_powder').val($('#fib_work_con').val() * ($('#total_fib_gel').val() / 1000));
            }

            if ($('#umg_solid').val() != '') {
                var solidBottle = $('#solid_bottle').val($('#no_nih_units').val() / $('#umg_solid').val());
                var unitBottle = $('#unit_bottle').val($('#solid_bottle').val() * $('#umg_solid').val());
            }

            if ($('#des_vol_stock').val() != '') {
                var thromStockSol = $('#throm_sol_con').val($('#solid_bottle').val() / $('#des_vol_stock').val());

            }

            var totalThromGel = $('#tot_gel_work').val($('#total_gel_need').val() / 3);
            // clear


            if ($('#req_throm_con').val() != '') {
                
                var throm1 = $('#throm_work_sol').val($('#req_throm_con').val() * $('#tot_gel_work').val() / $('#con_thromb_sol').val());
                var volHeparin = $('#vol_hep_con').val($('#tot_gel_work').val() - $('#throm_work_sol').val());
                var heparinThromb = $('#hep_thromb_sol').val((parseFloat($('#vol_hep_con').val()) + parseFloat($('#throm_work_sol').val())));
            }
            var reqThromb = $('#req_vol_thromb').val($('#throm_work_sol').val());

            if ($('#des_con_thromb').val() != '') {
                var thrombStock1 = ($('#con_thromb_sol').val() / 1000);
                var thrombStock2 = ($('#des_con_thromb').val() / 1000);
                var thrombStock3 = (thrombStock2 * $('#req_vol_thromb').val());
                var reqThrombStock = $('#vol_throm_stock').val(thrombStock3 / thrombStock1);

                var volumePbs = $('#vol_throm_pbs').val($('#req_vol_thromb').val() - $('#vol_throm_stock').val());

            }
            if ($('#no_liv_flask').val() != '') {
                var liverCells = $('#tot_liver_cell').val($('#no_liv_flask').val() * $('#no_liver_cells').val());
            }
            if ($('#no_kid_flask').val() != '') {
                var kidneyCells = $('#tot_kid_cell').val($('#no_kid_flask').val() * $('#no_kid_cells').val());
            }
            if ($('#no_gut_flask').val() != '') {
                var gutCells = $('#tot_gut_cell').val($('#no_gut_flask').val() * $('#no_gut_cells').val());
            }
            if ($('#no_brain_flask').val() != '') {
                var brainCells = $('#tot_brain_cell').val($('#no_brain_flask').val() * $('#no_brain_cells').val());
            }
            if ($('#no_endo_flask').val() != '') {
                var endoCells = $('#tot_endo_cell').val($('#no_endo_cells').val() * $('#no_endo_flask').val());
            }
            if ($('#no_fib_flask').val() != '') {
                var fibCells = $('#tot_fib_cell').val($('#no_fib_cells').val() * $('#no_fib_flask').val());
            }
        //    LIVER
            if ($('#des_dens_org_liv').val() != '') {
                var cellsReqExpLiv = $('#cells_req_exp_liv').val($('#tot_gel_plate_liver').val() * $('#des_dens_org_liv').val());
                var resCellDensityLiv = $('#res_cell_dens_liv').val(($('#cells_req_exp_liv').val() / $('#tot_gel_plate_liver').val()) * 3);
                var resVolLiv = $('#res_vol_liv').val($('#tot_gel_plate_liver').val() / 3);
                var volThrombMixLiv = $('#vol_throm_mix_liv').val($('#tot_liver_cell').val() / $('#res_cell_dens_liv').val());
                var volResLeftLiv = $('#vol_res_left_liv').val($('#vol_throm_mix_liv').val() - $('#res_vol_liv').val());
                var cellRemainLiv = $('#cell_remain_liv').val($('#vol_res_left_liv').val() * $('#res_cell_dens_liv').val());
                var volThromWorSolLiv = $('#working_solution_liv').val($('#res_vol_liv').val());
                var volThromFibSolLiv = $('#fibrinogen_solution_liv').val($('#res_vol_liv').val());
            }

// kidney

            if ($('#des_dens_org_kid').val() != '') {
                var cellsReqExpKid = $('#cells_req_exp_kid').val($('#total_gel_brain').val() * $('#des_dens_org_kid').val());
                var resCellDensityKid = $('#res_cell_dens_kid').val(($('#cells_req_exp_kid').val() / $('#total_gel_kid').val()) * 3);
                var volThrombMixKid = $('#res_vol_kid').val($('#tot_kid_cell').val() / $('#res_cell_dens_kid').val());
                var resVolKid = $('#vol_throm_mix_kid').val($('#total_gel_kid').val() / 3);
                var volResLeftKid = $('#vol_res_left_kid').val($('#res_vol_kid').val() - $('#vol_throm_mix_kid').val());
                var cellRemainkid = $('#cell_remain_kid').val($('#vol_res_left_kid').val() * $('#res_cell_dens_kid').val());
                var volThromWorSolkid = $('#working_solution_kid').val($('#vol_throm_mix_kid').val());
                var volThromFibSolkid = $('#fibrinogen_solution_kid').val($('#vol_throm_mix_kid').val());
            }

// Gut
            if ($('#des_dens_org_gut').val() != '') {
                var cellsReqExpGut = $('#cells_req_exp_gut').val($('#total_gel_gut').val() * $('#des_dens_org_gut').val());
                var resCellDensityGut = $('#res_cell_dens_gut').val(($('#cells_req_exp_gut').val() / $('#total_gel_gut').val()) * 3);
                var resVolGut = $('#res_vol_gut').val($('#total_gel_gut').val() / 3);
                var volThrombMixGut = $('#vol_throm_mix_gut').val($('#tot_gut_cell').val() / $('#res_cell_dens_gut').val());
                var volResLeftGut = $('#vol_res_left_gut').val($('#vol_throm_mix_gut').val() - $('#res_vol_gut').val());
                var cellRemainGut = $('#cell_remain_gut').val($('#vol_res_left_gut').val() * $('#res_cell_dens_gut').val());
                var volThromWorSolGut = $('#working_solution_gut').val($('#res_vol_gut').val());
                var volThromFibSolGut = $('#fibrinogen_solution_gut').val($('#res_vol_gut').val());
            }

// brain
            if ($('#des_dens_org_brain').val() != '') {
                var cellsReqExpBrain = $('#cells_req_exp_brain').val($('#total_gel_brain').val() * $('#des_dens_org_brain').val());
                var resCellDensityBrain = $('#res_cell_dens_brain').val(($('#cells_req_exp_brain').val() / $('#total_gel_brain').val()) * 3);
                var resVolBrain = $('#res_vol_brain').val($('#total_gel_brain').val() / 3);
                var volThrombMixBrain = $('#vol_throm_mix_brain').val($('#tot_brain_cell').val() / $('#res_cell_dens_brain').val());
                var volResLeftBrain = $('#vol_res_left_brain').val($('#vol_throm_mix_brain').val() - $('#res_vol_brain').val());
                var cellRemainBrain = $('#cell_remain_brain').val($('#vol_res_left_brain').val() * $('#res_cell_dens_brain').val());
                var volThromWorSolBrain = $('#working_solution_brain').val($('#res_vol_brain').val());
                var volThromFibSolBrain = $('#fibrinogen_solution_brain').val($('#res_vol_brain').val());
            }

// Endothelial cells / Fibroblast for Outer Channels
        

            if ($('#des_dens_org_endo').val() !== '') {
                    var cellsReqExpEndo = $('#total_endo_vol').val() * $('#des_dens_org_endo').val();
                    $('#cells_req_exp_endo').val(cellsReqExpEndo);

                    var resCellDensityEndo = ($('#cells_req_exp_endo').val() / $('#total_endo_vol').val()) * $('#no_of_units').val();
                    $('#res_cell_dens_endo').val(resCellDensityEndo);

                    // Check if the organ is either 'VascularLiver' or 'VascularKidney'
                    if (organ === 'VascularLiver' || organ === 'VascularKidney' || organ === 'VascularGut' || organ === 'VascularBrain') {
                        if ($('#flexRadioVascularLiver0').val() == e.value || $('#flexRadioVascularKidney0').val() == e.value || $('#flexRadioVascularGut0').val() == e.value || $('#flexRadioVascularBrain0').val() == e.value) {
                            var resVolEndo = $('#res_vol_liv').val() * $('#flexRadioVascularLiver0').val() + $('#vol_throm_mix_kid').val() * $('#flexRadioVascularKidney0').val() + $('#res_vol_brain').val() * $('#flexRadioVascularGut0').val() + $('#res_vol_gut').val() * $('#flexRadioVascularBrain0').val();
                            $('#res_vol_endo').val(resVolEndo);
                        }
                        if ($('#flexRadioVascularLiver1').val() === e.value || $('#flexRadioVascularKidney1').val() === e.value || $('#flexRadioVascularGut1').val() === e.value || $('#flexRadioVascularBrain1').val() == e.value) {
                            var resVolEndo = $('#res_vol_liv').val() * $('#flexRadioVascularLiver1').val() + $('#vol_throm_mix_kid').val() * $('#flexRadioVascularKidney1').val() + $('#res_vol_brain').val() * $('#flexRadioVascularGut1').val() + $('#res_vol_gut').val() * $('#flexRadioVascularBrain1').val();
                            $('#res_vol_endo').val(resVolEndo);
                        }
                    }

                    var volThrombMixEndo = $('#vol_throm_mix_endo').val($('#tot_endo_cell').val() / $('#res_cell_dens_endo').val());
                    var volResLeftEndo = $('#vol_res_left_endo').val($('#vol_throm_mix_endo').val() - $('#res_vol_endo').val());
                    var cellRemainEndo = $('#cell_remain_endo').val($('#vol_res_left_endo').val() * $('#res_cell_dens_endo').val());
                    var volThromWorSolEndo = $('#working_solution_endo').val($('#res_vol_endo').val());
                    var volThromFibSolEndo = $('#fibrinogen_solution_endo').val($('#res_vol_endo').val());
            }
        }
    </script>

</body>

</html>