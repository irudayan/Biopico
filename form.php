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
            max-width: 800px;
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
        form span,
        legend {
            color: #fff;
        }

        legend {
            font-weight: 700;
            font-size: 18px;
            text-decoration: underline;
        }

        .green {
            background: #37ff27;
        }

        .gray {
            background: #d3d3d3;
        }

        .yellow {
            background: yellow;
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

                <form method="POST" action="mail.php">
                    <div class="row">

                    <legend>General</legend>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="name">2.&nbsp;&nbsp;Number of units per plate</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="unit_plate" value="6" onkeyup="calculate1();" required name="unit_plate" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="name">3.&nbsp;&nbsp;No of Plates</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_of_plates" name="no_of_plates" value="2" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="name">4.&nbsp;&nbsp;Gel volume tolerance percentage</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="vol_tolerance" value="25" required name="vol_tolerance" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span>%</span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="name">5.&nbsp;&nbsp;Cell density tolerance percentage</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="dens_tolerance" value="10" required name="dens_tolerance" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span>%</span>
                        </div>


                        <!-- new -->
                        <!-- Endothelial Cells -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <label for="flexRadioEndothelialCells">7.&nbsp;&nbsp;Endothelial Cells</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <input class="form-check-input" type="radio" name="flexRadioEndothelialCells" value="0" id="flexRadioEndothelialCells0" onchange="calculate1(this, 'EndothelialCells');" data-default="0">
                            <label class="form-check-label">
                                0
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioEndothelialCells" value="1" id="flexRadioEndothelialCells1" checked onchange="calculate1(this, 'EndothelialCells');" data-default="1">
                            <label class="form-check-label">
                                1
                            </label>
                        </div>

                        <p></p>

                        <!-- Pericytes -->

                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <label for="flexRadioPericytes">8.&nbsp;&nbsp;Pericytes</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <input class="form-check-input" type="radio" name="flexRadioPericytes" value="0" id="flexRadioPericytes0" onchange="calculate1(this, 'Pericytes');">
                            <label class="form-check-label" for="flexRadioPericytes0">
                                0
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioPericytes" value="1" id="flexRadioPericytes1" checked onchange="calculate1(this, 'Pericytes');">
                            <label class="form-check-label" for="flexRadioPericytes1">
                                1
                            </label>
                        </div>
                        <p></p>

                        <!-- Astrocytes -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <label for="flexRadioAstrocytes">9.&nbsp;&nbsp;Astrocytes</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <input class="form-check-input" type="radio" name="flexRadioAstrocytes" value="0" id="flexRadioAstrocytes0" onchange="calculate1(this, 'Astrocytes');">
                            <label class="form-check-label" for="flexRadioAstrocytes0">
                                0
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioAstrocytes" value="1" id="flexRadioAstrocytes1" checked onchange="calculate1(this, 'Astrocytes');">
                            <label class="form-check-label" for="flexRadioAstrocytes1">
                                1
                            </label>
                        </div>
                        <p></p>

                        <!-- old -->


                        <legend>Fibrinogen + Thrombin Gel for BBB</legend>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="name">12.&nbsp;&nbsp;Volume of Fibrinogen-Thrombin-cell gel</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="fib_throm_cell" value="20" name="fib_throm_cell" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="name">13.&nbsp;&nbsp;Tolerance volume</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="tol_vol" name="tol_vol" value="5" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="name">14.&nbsp;&nbsp;Volume of gel mix per plate</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="vol_gel_mix" name="vol_gel_mix" value="150" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="name">15.&nbsp;&nbsp;Total gel for all plates</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="total_gel_plate" name="total_gel_plate" value="300" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul</span>
                        </div>
                        <legend>Working Fibrinogen Solution</legend>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_name">18.&nbsp;&nbsp;phenol red color factor</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control" type="text" id="phenol_red" name="phenol_red" onkeyup="calculate1();" value="2" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="name">19.&nbsp;&nbsp;Required Total Fibrinogen gel working solution</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="total_fib_gel" value="100" readonly name="total_fib_gel">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_name">20.&nbsp;&nbsp;Fibrinogen working solution concentration</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control" type="text" id="fibrin_con" name="fibrin_con" value="6" onkeyup="calculate1();" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg/ml </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_name">21.&nbsp;&nbsp;Mass of phenol red to add to PBS</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control" type="text" id="phenol_red_pbs" name="phenol_red_pbs" value="0.2" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">22.&nbsp;&nbsp;Volume of PBS with phenol red</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="yellow form-control allow_decimal" type="text" id="vol_pbs_phenol" name="vol_pbs_phenol" value="100" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ml </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">23.&nbsp;&nbsp;Fibrinogen powder</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="yellow form-control" type="text" id="fibrin_powder" name="fibrin_powder" value="0.6" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg </span>
                        </div>

                        <legend>Stock solution of Thrombin</legend>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">26.&nbsp;&nbsp;Number of NIH Units</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_nih_units" name="no_nih_units" value="1000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">27.&nbsp;&nbsp;U/mg Solid</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="umg_solid" onkeyup="calculate1();" value="101" name="umg_solid" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U/mg </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">28.&nbsp;&nbsp;Solid in bottle</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="solid_bottle" name="solid_bottle" value="9.900990099009901" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">29.&nbsp;&nbsp;Units in bottle</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control" type="text" id="unit_bottle" name="unit_bottle" value="1000" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">30.&nbsp;&nbsp;Desired concentration of Thrombin Stock Solution</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="con_thrombin" name="con_thrombin" value="100" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U/ml </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">31.&nbsp;&nbsp;Desired volume of stock solution</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="vol_stack_sol" name="vol_stack_sol" value="1" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ml </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">32.&nbsp;&nbsp;Thrombin stock solution concentration in mg/ml</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="thromb_sol_con" name="thromb_sol_con" value="9.900990099009901" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg/ml </span>
                        </div>

                        <legend>Thrombin 1X Working solution</legend>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">35.&nbsp;&nbsp;Required Total thrombin gel working solution</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="thrombin_gel_making" name="thrombin_gel_making" value="100" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">36.&nbsp;&nbsp;Required thrombin concentration</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="thromb_con" name="thromb_con" value="4" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U/ml </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">37.&nbsp;&nbsp;Thrombin working solution</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="thromb_working_sol" name="thromb_working_sol" value="4" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">38.&nbsp;&nbsp;Volume of heparin medium for required concentration</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="yellow form-control allow_decimal" type="text" id="vol_heparin" name="vol_heparin" value="96" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">39.&nbsp;&nbsp;Heparin-Thrombin Solution</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="heparin_thromb" name="heparin_thromb" value="100" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <legend>Cells Available from T flasks</legend>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">42.&nbsp;&nbsp;Number of Endothelial cells from T-flask</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_of_endo" name="no_of_endo" value="4000000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">43.&nbsp;&nbsp;Number of flasks</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_endo_flask" name="no_endo_flask" value="1" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">44.&nbsp;&nbsp;Total Number of endothelial cells</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control" type="text" id="total_endo" name="total_endo" value="4000000" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">46.&nbsp;&nbsp;Number of Pericytes from T-flask</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_of_peri" name="no_of_peri" value="3000000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">47.&nbsp;&nbsp;Number of flasks</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_peri_flask" name="no_peri_flask" value="1" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">48.&nbsp;&nbsp;Total number of pericytes</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control" type="text" id="total_peri" name="total_peri" value="3000000" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">50.&nbsp;&nbsp;Number of Astrocytes from T-flask</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_of_astro" name="no_of_astro" value="2000000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">51.&nbsp;&nbsp;Number of flasks</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="no_astro_flask" value="1" name="no_astro_flask" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">52.&nbsp;&nbsp;Total number of Astrocytes</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control" type="text" id="total_astro" name="total_astro" value="2000000" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <legend>Cells for BBB</legend>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">55.&nbsp;&nbsp;Desired cell density for Endothelial cells in channel</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control allow_decimal" type="text" id="des_dens_endo" name="des_dens_endo" value="5000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">56.&nbsp;&nbsp;Desired cell density for Pericytes in channel</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control" type="text" id="des_dens_peri" name="des_dens_peri" value="2000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">57.&nbsp;&nbsp;Desired cell density for Astrocytes in channel</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="green form-control" type="text" id="des_dens_astro" name="des_dens_astro" value="3000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">58.&nbsp;&nbsp;Number of Endothelial cells required for the experiment</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control" type="text" id="no_endo_exp" name="no_endo_exp" value="1500000" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">59.&nbsp;&nbsp;Number of Pericytes required for the experiment</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control" type="text" id="no_peri_exp" name="no_peri_exp" value="600000" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">60.&nbsp;&nbsp;Number of Astrocytes required for the experiment</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="no_astro_exp" name="no_astro_exp" value="900000" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">61.&nbsp;&nbsp;Resuspension Endothelial cell density in vial</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control" type="text" id="res_endo_dens" name="res_endo_dens" value="15000" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">62.&nbsp;&nbsp;Resuspension Pericytes density in vial</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control" type="text" id="res_peri_dens" name="res_peri_dens" value="6000" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">63.&nbsp;&nbsp;Resuspension Astrocytes density in vial</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="res_astro_dens" name="res_astro_dens" value="9000" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells/ul </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">64.&nbsp;&nbsp;Total Volume of cells for thrombin mix</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="yellow form-control" type="text" id="vol_throm_mix" name="vol_throm_mix" value="100" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">65.&nbsp;&nbsp;Resuspension volume in the Endothelial cells tube</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="yellow form-control" type="text" id="res_vol_endo" name="res_vol_endo" value="266.67" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">66.&nbsp;&nbsp;Resuspension volume in the Pericytes tube</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="yellow form-control" type="text" id="res_vol_peri" name="res_vol_peri" value="500" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">67.&nbsp;&nbsp;Resuspension volume in the Astrocytes tube</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="yellow form-control" type="text" id="res_vol_astro" name="res_vol_astro" value="222.2222" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>


                        <!-- Volume of Endothelial Resuspension for thrombin mix -->

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">68.&nbsp;&nbsp;Volume of Endothelial Resuspension for thrombin mix</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="vol_endo_thrombin_mix" name="vol_endo_thrombin_mix" value="33.33" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span>ul </span>
                        </div>

                        <!-- Volume of Pericyte Resuspension for thrombin mix -->

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">69.&nbsp;&nbsp;Volume of Pericyte Resuspension for thrombin mix</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="vol_peri_thrombin_mix" name="vol_peri_thrombin_mix" value="33.33" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span>ul </span>
                        </div>

                        <!-- Volume of Astrocyte Resuspension for thrombin mix -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">70.&nbsp;&nbsp;Volume of Astrocyte Resuspension for thrombin mix</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="vol_astro_thrombin_mix" name="vol_astro_thrombin_mix" value="33.33" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span>ul </span>
                        </div>




                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">71.&nbsp;&nbsp;Volume of Endothelial cell resuspension left</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="vol_endo_res" name="vol_endo_res" value="233.34" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">72.&nbsp;&nbsp;Volume of Pericytes resuspension left</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control" type="text" id="vol_peri_res" name="vol_peri_res" value="466.67" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <!-- Volume of Astrocytes resuspension left -->

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">73.&nbsp;&nbsp;Volume of Astrocytes resuspension left</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control" type="text" id="vol_astro_res" name="vol_astro_res" value="188.8922" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">74.&nbsp;&nbsp;Number of Endothelial Cells remaining</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control" type="text" id="no_endo_remain" name="no_endo_remain" value="3500100" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">75.&nbsp;&nbsp;Number of Pericytes remaining</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control allow_decimal" type="text" id="no_peri_remain" name="no_peri_remain" value="2800020" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="fa_occu">76.&nbsp;&nbsp;Number of Astrocytes remaining</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="gray form-control" type="text" id="no_astro_remain" name="no_astro_remain" value="1699429.8" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> cells </span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="name">Name</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <input class="form-control" type="text" id="name" name="name" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="name">E-mail Id</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
            var val = $('#vol_tolerance').val() / 100;
            if ($('#fib_throm_cell').val() != '') {
                var tolerance = $('#tol_vol').val(val * $('#fib_throm_cell').val());
                var volGel = $('#vol_gel_mix').val((parseFloat($('#fib_throm_cell').val()) + parseFloat($('#tol_vol').val())) * $('#unit_plate').val());
                var tolGel = $('#total_gel_plate').val($('#vol_gel_mix').val() * $('#no_of_plates').val());

            }
            if ($('#phenol_red').val() != '') {
                var totFib = $('#total_fib_gel').val($('#total_gel_plate').val() / 3);
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

            var reqTotalThromb = $('#thrombin_gel_making').val($('#total_gel_plate').val() / 3);

            var val1 = $('#thrombin_gel_making').val() * ($('#thromb_con').val() / 1000);
            var thrombWrkSol = $('#thromb_working_sol').val(val1 / ($('#con_thrombin').val() / 1000));

            var volHeparin = $('#vol_heparin').val($('#thrombin_gel_making').val() - $('#thromb_working_sol').val());
            var heparinThromb = $('#heparin_thromb').val((parseFloat($('#vol_heparin').val()) + parseFloat($('#thromb_working_sol').val())));



            if ($('#no_endo_flask').val() != '') {
                var totalEndo = $('#total_endo').val($('#no_endo_flask').val() * $('#no_of_endo').val());
            }
            if ($('#no_peri_flask').val() != '') {
                var totalPeri = $('#total_peri').val($('#no_of_peri').val() * $('#no_peri_flask').val());
            }
            if ($('#no_astro_flask').val() != '') {
                var totalPeri = $('#total_astro').val($('#no_of_astro').val() * $('#no_astro_flask').val());
            }


            if ($('#des_dens_endo').val() !== '') {
                var defaultRadioValue = parseFloat($('#flexRadioEndothelialCells1').val());

                if ($('input[name="flexRadioEndothelialCells"]:checked').length === 0) {
                    var noEndoExp = parseFloat($('#des_dens_endo').val()) * parseFloat($('#total_gel_plate').val()) * defaultRadioValue;
                    $('#no_endo_exp').val(noEndoExp);
                    alert(noEndoExp);
                } else {
                    var selectedRadioValue = parseFloat($('input[name="flexRadioEndothelialCells"]:checked').val());

                    if (organ === ' ') {
                        if ($('#flexRadioEndothelialCells0').is(':checked') && $('#flexRadioEndothelialCells0').val() == e.value) {
                            selectedRadioValue = parseFloat($('#flexRadioEndothelialCells0').val());
                        }
                        if ($('#flexRadioEndothelialCells1').is(':checked') && $('#flexRadioEndothelialCells1').val() == e.value) {
                            selectedRadioValue = parseFloat($('#flexRadioEndothelialCells1').val());
                        }
                    }

                    var noEndoExp = parseFloat($('#des_dens_endo').val()) * parseFloat($('#total_gel_plate').val()) * selectedRadioValue;
                    $('#no_endo_exp').val(noEndoExp);
                }

                var resEndoDensity = $('#res_endo_dens').val((parseFloat($('#no_endo_exp').val()) / parseFloat($('#total_gel_plate').val())) * 3);
                var resVolEndo = $('#res_vol_endo').val(parseFloat($('#total_endo').val()) / parseFloat($('#res_endo_dens').val()));

            }



            if ($('#des_dens_peri').val() != '') {

                var defaultRadioValue = parseFloat($('#flexRadioPericytes1').val());

                if ($('input[name="flexRadioPericytes"]:checked').length === 0) {
                    var noPeriExp = parseFloat($('#des_dens_peri').val()) * parseFloat($('#total_gel_plate').val()) * defaultRadioValue;
                    $('#no_peri_exp').val(noPeriExp);
                    alert(noPeriExp);
                } else {
                    var selectedRadioValue = parseFloat($('input[name="flexRadioPericytes"]:checked').val());

                    if (organ === 'Pericytes') {
                        if ($('#flexRadioPericytes0').is(':checked') && $('#flexRadioPericytes0').val() == e.value) {
                            selectedRadioValue = parseFloat($('#flexRadioPericytes0').val());
                        }
                        if ($('#flexRadioPericytes1').is(':checked') && $('#flexRadioPericytes1').val() == e.value) {
                            selectedRadioValue = parseFloat($('#flexRadioPericytes1').val());
                        }
                    }

                    var noPeriExp = parseFloat($('#des_dens_peri').val()) * parseFloat($('#total_gel_plate').val()) * selectedRadioValue;
                    $('#no_peri_exp').val(noPeriExp);
                }

                var resPeriDensity = $('#res_peri_dens').val(($('#no_peri_exp').val() / $('#total_gel_plate').val()) * 3);
                var resVolPeri = $('#res_vol_peri').val($('#total_peri').val() / $('#res_peri_dens').val());
            }


            if ($('#des_dens_astro').val() != '') {

                var defaultRadioValue = parseFloat($('#flexRadioAstrocytes1').val());

                if ($('input[name="flexRadioAstrocytes"]:checked').length === 0) {
                    var noAstroExp = parseFloat($('#des_dens_astro').val()) * parseFloat($('#total_gel_plate').val()) * defaultRadioValue;
                    $('#no_astro_exp').val(noAstroExp);
                    alert(noAstroExp);
                } else {
                    var selectedRadioValue = parseFloat($('input[name="flexRadioAstrocytes"]:checked').val());

                    if (organ === 'Astrocytes') {
                        if ($('#flexRadioAstrocytes0').is(':checked') && $('#flexRadioAstrocytes0').val() == e.value) {
                            selectedRadioValue = parseFloat($('#flexRadioAstrocytes0').val());
                        }

                        if ($('#flexRadioAstrocytes1').is(':checked') && $('#flexRadioAstrocytes1').val() == e.value) {
                            selectedRadioValue = parseFloat($('#flexRadioAstrocytes1').val());
                        }
                        var noAstroExp = parseFloat($('#des_dens_astro').val()) * parseFloat($('#total_gel_plate').val()) * selectedRadioValue;
                        $('#no_astro_exp').val(noAstroExp);
                    }
                }

                var resAstroDensity = $('#res_astro_dens').val(($('#no_astro_exp').val() / $('#total_gel_plate').val()) * 3);
                var resVolAstro = $('#res_vol_astro').val($('#total_astro').val() / $('#res_astro_dens').val());


            }
            var thrombMix = $('#vol_throm_mix').val($('#total_gel_plate').val() / 3);

            // check new field


            if (organ === 'EndothelialCells' || organ === 'Pericytes' || organ === 'VascularGut' || organ === 'Astrocytes') {
                if ($('#flexRadioEndothelialCells0').val() == e.value || $('#flexRadioPericytes0').val() == e.value || $('#flexRadioAstrocytes0').val() == e.value) {
                    var endoThrombMix = (parseFloat($('#vol_throm_mix').val()) / parseFloat($('#flexRadioEndothelialCells0').val())) +
                        parseFloat($('#flexRadioPericytes0').val()) +
                        parseFloat($('#flexRadioAstrocytes0').val()) * parseFloat($('#flexRadioAstrocytes0').val());
                    $('#vol_endo_thrombin_mix').val(endoThrombMix);
                }
                if ($('#flexRadioEndothelialCells1').val() == e.value || $('#flexRadioPericytes1').val() == e.value || $('#flexRadioAstrocytes1').val() == e.value) {
                    var endoThrombMix = (parseFloat($('#vol_throm_mix').val()) / parseFloat($('#flexRadioEndothelialCells1').val())) +
                        parseFloat($('#flexRadioPericytes1').val()) +
                        parseFloat($('#flexRadioAstrocytes1').val()) * parseFloat($('#flexRadioAstrocytes1').val());
                    $('#vol_endo_thrombin_mix').val(endoThrombMix);
                }
            }

            // now checked vol_peri_thrombin_mix
            if (organ === 'EndothelialCells' || organ === 'Pericytes' || organ === 'VascularGut' || organ === 'Astrocytes') {
                if ($('#flexRadioEndothelialCells0').val() == e.value || $('#flexRadioPericytes0').val() == e.value || $('#flexRadioAstrocytes0').val() == e.value) {
                    var periThrombMix = (parseFloat($('#vol_throm_mix').val()) / parseFloat($('#flexRadioEndothelialCells0').val())) +
                        parseFloat($('#flexRadioPericytes0').val()) +
                        parseFloat($('#flexRadioAstrocytes0').val()) * parseFloat($('#flexRadioPericytes0').val());
                    $('#vol_peri_thrombin_mix').val(periThrombMix);
                }
                if ($('#flexRadioEndothelialCells1').val() == e.value || $('#flexRadioPericytes1').val() == e.value || $('#flexRadioAstrocytes1').val() == e.value) {
                    var periThrombMix = (parseFloat($('#vol_throm_mix').val()) / parseFloat($('#flexRadioEndothelialCells1').val())) +
                        parseFloat($('#flexRadioPericytes1').val()) +
                        parseFloat($('#flexRadioAstrocytes1').val()) * parseFloat($('#flexRadioPericytes1').val());
                    $('#vol_peri_thrombin_mix').val(periThrombMix);
                }
            }

            // now checked vol_astro_thrombin_mix
            if (organ === 'EndothelialCells' || organ === 'Pericytes' || organ === 'VascularGut' || organ === 'Astrocytes') {
                if ($('#flexRadioEndothelialCells0').val() == e.value || $('#flexRadioPericytes0').val() == e.value || $('#flexRadioAstrocytes0').val() == e.value) {
                    var astroThrombMix = (parseFloat($('#vol_throm_mix').val()) / parseFloat($('#flexRadioEndothelialCells0').val())) +
                        parseFloat($('#flexRadioPericytes0').val()) +
                        parseFloat($('#flexRadioAstrocytes0').val()) * parseFloat($('#flexRadioAstrocytes0').val());
                    $('#vol_astro_thrombin_mix').val(astroThrombMix);
                }
                if ($('#flexRadioEndothelialCells1').val() == e.value || $('#flexRadioPericytes1').val() == e.value || $('#flexRadioAstrocytes1').val() == e.value) {
                    var astroThrombMix = (parseFloat($('#vol_throm_mix').val()) / parseFloat($('#flexRadioEndothelialCells1').val())) +
                        parseFloat($('#flexRadioPericytes1').val()) +
                        parseFloat($('#flexRadioAstrocytes1').val()) * parseFloat($('#flexRadioAstrocytes1').val());
                    $('#vol_astro_thrombin_mix').val(astroThrombMix);
                }
            }

            var volEndoLeft = $('#vol_endo_res').val($('#res_vol_endo').val() - $('#vol_throm_mix').val());
            var volPeriLeft = $('#vol_peri_res').val($('#res_vol_peri').val() - $('#vol_throm_mix').val());
            var volPeriLeft = $('#vol_astro_res').val($('#res_vol_astro').val() - $('#vol_throm_mix').val());
            var volEndoRemain = $('#no_endo_remain').val($('#vol_endo_res').val() * $('#res_endo_dens').val());
            var volPeriRemain = $('#no_peri_remain').val($('#vol_peri_res').val() * $('#res_peri_dens').val());
            var volAstroRemain = $('#no_astro_remain').val($('#vol_astro_res').val() * $('#res_astro_dens').val());

        }
    </script>

</body>

</html>