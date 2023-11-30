<!DOCTYPE html>
<html>

<head>
    <title>BBB ORGAN</title>
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
        legend {
            color: #fff;
        }

        legend {
            font-weight: 700;
            font-size: 18px;
            text-decoration: underline;
        }
    </style>
    <section class="admission-form">
        <div class="container">
            <div class="content-inner">
                <?php if (isset($_GET['mail'])) { ?>
                    <?php @$success = isset($_GET['mail']);
                    if ($success == 'success') { ?>
                        <div class="alert alert-success alert-dismissible">
                            <strong>Form Submitted Successfully!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                <?php }
                } ?>
                <form method="POST" action="mail.php" id="form">
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Number of units per plate</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="unit_plate" value="6" onkeyup="calculate1();" required name="unit_plate" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">No of Plates</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="no_of_plates" name="no_of_plates" value="2" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <!-- new -->
                        <!-- Liver -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="flexRadioEndothelialCells">8.&nbsp;&nbsp;Endothelial Cells</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-check-input" type="radio" name="flexRadioEndothelialCells0" value="0" id="flexRadioEndothelialCells0" checked onchange="calculate1(this, 'EndothelialCells');">
                            <label class="form-check-label" for="flexRadioEndothelialCells0">
                                0
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioEndothelialCells1" value="1" id="flexRadioEndothelialCells1" onchange="calculate1(this, 'EndothelialCells');">
                            <label class="form-check-label" for="flexRadioEndothelialCells1">
                                1
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>
                        <p></p>

                        <!-- Pericytes -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="flexRadioPericytes">8.&nbsp;&nbsp;Pericytes</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-check-input" type="radio" name="flexRadioPericytes0" value="0" id="flexRadioPericytes0" checked onchange="calculate1(this, 'Pericytes');">
                            <label class="form-check-label" for="flexRadioPericytes0">
                                0
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioPericytes1" value="1" id="flexRadioPericytes1" onchange="calculate1(this, 'Pericytes');">
                            <label class="form-check-label" for="flexRadioPericytes1">
                                1
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>
                        <p></p>

                        <!-- Astrocytes -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="flexRadioAstrocytes">8.&nbsp;&nbsp;Astrocytes</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-check-input" type="radio" name="flexRadioAstrocytes0" value="0" id="flexRadioAstrocytes0" checked onchange="calculate1(this, 'Astrocytes');">
                            <label class="form-check-label" for="flexRadioAstrocytes0">
                                0
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioAstrocytes1" value="1" id="flexRadioAstrocytes1" onchange="calculate1(this, 'Astrocytes');">
                            <label class="form-check-label" for="flexRadioAstrocytes1">
                                1
                            </label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>
                        <p></p>

                        <!-- old -->
                       

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Gel volume tolerance percentage</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_tolerance" value="25" required name="vol_tolerance" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span>%</span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Cell density tolerance percentage</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="dens_tolerance" value="10" required name="dens_tolerance" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span>%</span>
                        </div>

                        <legend>Gel for BBB</legend>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Volume of Fibrinogen/Thrombin/cell gel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="fib_throm_cell" value="20" name="fib_throm_cell" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul</span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Tolerance volume</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="tol_vol" name="tol_vol" value="5" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul</span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Volume of gel mix per plate</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_gel_mix" name="vol_gel_mix" value="150" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul</span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Total gel for all plates</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="total_gel_plate" name="total_gel_plate" value="300" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul</span>
                        </div>
                        <legend>Working Fibrinogen Solution</legend>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_name">phenol red color factor</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="phenol_red" name="phenol_red" onkeyup="calculate1();" value="2" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Required Total Fibrinogen gel working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="total_fib_gel" value="150" readonly style="background-color: #F5F5F5 ;" name="total_fib_gel">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_name">Fibrinogen working solution concentration</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="fibrin_con" name="fibrin_con" value="6" onkeyup="calculate1();" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg/ml </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_name">Mass of phenol red to add to PBS</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="phenol_red_pbs" name="phenol_red_pbs" value="0.3" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Volume of PBS with phenol red</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_pbs_phenol" name="vol_pbs_phenol" value="150" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ml </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Fibrinogen powder</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="fibrin_powder" name="fibrin_powder" value="0.90" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg </span>
                        </div>

                        <legend>Stock solution of Thrombin</legend>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Number of NIH Units</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="no_nih_units" name="no_nih_units" value="1000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">U/mg Solid</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="umg_solid" onkeyup="calculate1();" value="101" name="umg_solid" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U/mg </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Solid in bottle</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="solid_bottle" name="solid_bottle" value="9.900990099009901" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Units in bottle</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="unit_bottle" name="unit_bottle" value="1000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Desired concentration of Thrombin Stock Solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="con_thrombin" name="con_thrombin" value="100" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U/ml </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Desired volume of stock solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_stack_sol" name="vol_stack_sol" value="1" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ml </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Thrombin stock solution concentration in mg/ml</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="thromb_sol_con" name="thromb_sol_con" value="9.900990099009901" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg/ml </span>
                        </div>

                        <legend>Thrombin 3X Working solution</legend>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Required volume of Thrombin Working solution for thrombin gel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="req_thrombin_gel" name="req_thrombin_gel" value="45" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Desired concentration of Thrombin working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="con_thromb_sol" name="con_thromb_sol" value="10" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U/ml </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Required volume of Thrombin Stock Solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_thromb_sol" name="vol_thromb_sol" value="4.5" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Volume of PBS</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="thrombin_pbs" name="thrombin_pbs" value="40.5" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <legend>Thrombin 1X Working solution</legend>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Required Total thrombin gel working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="thrombin_gel_making" name="thrombin_gel_making" value="150" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Required thrombin concentration</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="thromb_con" name="thromb_con" value="3" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U/ml </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Thrombin working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="thromb_working_sol" name="thromb_working_sol" value="45" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Volume of heparin medium for required concentration</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_heparin" name="vol_heparin" value="105" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Heparin-Thrombin Solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="heparin_thromb" name="heparin_thromb" value="150" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <legend>Cells Available from T flasks</legend>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Number of endothelial cells from T-25 flask</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="no_of_endo" name="no_of_endo" value="2400000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Number of flasks</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="no_endo_flask" name="no_endo_flask" value="1" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Total Number of endothelial cells</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="total_endo" name="total_endo" value="2400000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Number of pericytes from T25 flask</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="no_of_peri" name="no_of_peri" value="3000000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Number of flasks</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="no_peri_flask" name="no_peri_flask" value="1" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Total number of pericytes</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="total_peri" name="total_peri" value="3000000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Number of Astrocytes from T25 flask</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="no_of_astro" name="no_of_astro" value="2000000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Number of flasks</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="no_astro_flask" value="1" name="no_astro_flask" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Total number of Astrocytes</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="total_astro" name="total_astro" value="2000000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <legend>Cells for BBB</legend>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Desired cell density for Endothelial cells in channel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="des_dens_endo" name="des_dens_endo" value="5000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Desired cell density for Pericytes in channel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="des_dens_peri" name="des_dens_peri" value="2000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Desired cell density for Astrocytes in channel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="des_dens_astro" name="des_dens_astro" value="3000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Number of Endothelial cells required for the experiment</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="no_endo_exp" name="no_endo_exp" value="1500000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Number of Pericytes required for the experiment</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="no_peri_exp" name="no_peri_exp" value="600000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Number of Astrocytes required for the experiment</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="no_astro_exp" name="no_astro_exp" value="900000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Resuspension Endothelial cell density in vial</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="res_endo_dens" name="res_endo_dens" value="15000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Resuspension Pericytes density in vial</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="res_peri_dens" name="res_peri_dens" value="6000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Resuspension Astrocytes density in vial</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="res_astro_dens" name="res_astro_dens" value="9000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Volume of cells for thrombin mix</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="vol_throm_mix" name="vol_throm_mix" value="100" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Resuspension volume in the Endothelial cells tube</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="res_vol_endo" name="res_vol_endo" value="160" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Resuspension volume in the Pericytes tube</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="res_vol_peri" name="res_vol_peri" value="500" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Resuspension volume in the Astrocytes tube</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="res_vol_astro" name="res_vol_astro" value="222.2222" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Volume of Endothelial cell resuspension left</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_endo_res" name="vol_endo_res" value="60" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Volume of Pericytes resuspension left</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="vol_peri_res" name="vol_peri_res" value="400" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Volume of Astriocytes resuspension left</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="vol_astro_res" name="vol_astro_res" value="122.2222" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Number of Endothelial Cells remaining</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="no_endo_remain" name="no_endo_remain" value="900000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Number of Pericytes remaining</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="no_peri_remain" name="no_peri_remain" value="2400000" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Number of Astrocytes remaining</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="no_astro_remain" name="no_astro_remain" value="1100000" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

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


        function calculate1(e) {
            var val = $('#vol_tolerance').val() / 100;
            if ($('#fib_throm_cell').val() != '') {
                var tolerance = $('#tol_vol').val(val * $('#fib_throm_cell').val());
                var volGel = $('#vol_gel_mix').val((parseFloat($('#fib_throm_cell').val()) + parseFloat($('#tol_vol').val())) * $('#unit_plate').val());
                var tolGel = $('#total_gel_plate').val($('#vol_gel_mix').val() * $('#no_of_plates').val());
                var totFib = $('#total_fib_gel').val($('#total_gel_plate').val() / 2);
            }
            if ($('#phenol_red').val() != '') {
                var massPhenol = $('#phenol_red_pbs').val($('#phenol_red').val() * ($('#total_fib_gel').val() / 1000));
                var volPbsPhenol = $('#vol_pbs_phenol').val($('#total_fib_gel').val());
            }
            if ($('#fibrin_con').val() != '') {
                var fibrin = $('#fibrin_con').val() * ($('#total_fib_gel').val() / 1000);
                var fibrinPowder = $('#fibrin_powder').val(fibrin.toFixed(2))
            }
            if ($('#umg_solid').val() != '') {
                var solidBottle = $('#solid_bottle').val($('#no_nih_units').val() / $('#umg_solid').val());
                var unitsBottle = $('#unit_bottle').val($('#solid_bottle').val() * $('#umg_solid').val());

            }
            if ($('#vol_stack_sol').val() != '') {
                var thrombSolCon = $('#thromb_sol_con').val($('#solid_bottle').val() / $('#vol_stack_sol').val());

            }

            var reqTotalThromb = $('#thrombin_gel_making').val($('#total_gel_plate').val() / 2);

            var val1 = $('#thrombin_gel_making').val() * ($('#thromb_con').val() / 1000);
            var thrombWrkSol = $('#thromb_working_sol').val(val1 / ($('#con_thromb_sol').val() / 1000));
            var volHeparin = $('#vol_heparin').val($('#thrombin_gel_making').val() - $('#thromb_working_sol').val());
            var heparinThromb = $('#heparin_thromb').val((parseFloat($('#vol_heparin').val()) + parseFloat($('#thromb_working_sol').val())));

            var reqThrombGel = $('#req_thrombin_gel').val($('#thromb_working_sol').val());
            if ($('#con_thromb_sol').val() != '') {
                var thromb1 = ($('#thromb_con').val() / 1000) * $('#req_thrombin_gel').val();
                var volThrombStock = $('#vol_thromb_sol').val((($('#con_thromb_sol').val() / 1000) * $('#req_thrombin_gel').val()) / ($('#con_thrombin').val() / 1000));

                var volPbs = $('#thrombin_pbs').val($('#req_thrombin_gel').val() - $('#vol_thromb_sol').val());
            }
            if ($('#no_endo_flask').val() != '') {
                var totalEndo = $('#total_endo').val($('#no_endo_flask').val() * $('#no_of_endo').val());
            }
            if ($('#no_peri_flask').val() != '') {
                var totalPeri = $('#total_peri').val($('#no_of_peri').val() * $('#no_peri_flask').val());
            }
            if ($('#no_astro_flask').val() != '') {
                var totalPeri = $('#total_astro').val($('#no_of_astro').val() * $('#no_astro_flask').val());
            }
            if ($('#des_dens_endo').val() != '') {
                var noEndoExp = $('#no_endo_exp').val($('#des_dens_endo').val() * $('#total_gel_plate').val());
                var resEndoDensity = $('#res_endo_dens').val(($('#no_endo_exp').val() / $('#total_gel_plate').val()) * 3);
                var resVolEndo = $('#res_vol_endo').val($('#total_endo').val() / $('#res_endo_dens').val());
            }
            if ($('#des_dens_peri').val() != '') {
                var noPeriExp = $('#no_peri_exp').val($('#des_dens_peri').val() * $('#total_gel_plate').val());
                var resPeriDensity = $('#res_peri_dens').val(($('#no_peri_exp').val() / $('#total_gel_plate').val()) * 3);
                var resVolPeri = $('#res_vol_peri').val($('#total_peri').val() / $('#res_peri_dens').val());
            }
            if ($('#des_dens_astro').val() != '') {
                var noAstroExp = $('#no_astro_exp').val($('#des_dens_astro').val() * $('#total_gel_plate').val());
                var resAstroDensity = $('#res_astro_dens').val(($('#no_astro_exp').val() / $('#total_gel_plate').val()) * 3);
                var resVolAstro1 = ($('#total_astro').val() / $('#res_astro_dens').val());

                var resVolAstro = $('#res_vol_astro').val(resVolAstro1.toFixed(4))
            }
            var thrombMix = $('#vol_throm_mix').val($('#total_gel_plate').val() / 3);

            var volEndoLeft = $('#vol_endo_res').val($('#res_vol_endo').val() - $('#vol_throm_mix').val());
            var volPeriLeft = $('#vol_peri_res').val($('#res_vol_peri').val() - $('#vol_throm_mix').val());
            var volPeri = ($('#res_vol_astro').val() - $('#vol_throm_mix').val());

            var volPeriLeft = $('#vol_astro_res').val(volPeri.toFixed(4))

            var volEndoRemain = $('#no_endo_remain').val($('#vol_endo_res').val() * $('#res_endo_dens').val());
            var volPeriRemain = $('#no_peri_remain').val($('#vol_peri_res').val() * $('#res_peri_dens').val());
            var volAstro = $('#vol_astro_res').val() * $('#res_astro_dens').val();
            var volAstroRemain = $('#no_astro_remain').val(volAstro.toFixed());
        }

        //      $(document).ready(function(){
        //     $("form").on('submit',function(e){
        //         alert("Form submitted Successfully!");
        //         return ;

        //     });
        // });
    </script>



</body>

</html>