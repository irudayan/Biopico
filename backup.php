<!DOCTYPE html>
<html>
<head>
    <title>Liver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<style>
.form-control{
    margin-bottom: 10px;
}
.admission-form{
    background-color: transparent;
    background-image: linear-gradient(rgb(155, 19, 188) 0%, rgb(46, 49, 146) 100%);
    padding: 25px 0px;
    border-radius: 12px;
}
#submit:hover{
    color: #333;
    background-image: linear-gradient(to right, #fff 0%, #fff 51%, #fff 100%);
}
#submit{
    text-align: center;
    transition: 0.5s;
    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
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
h5{
    color: #fff;
}
h5{
    font-size:15px;
    font-style: italic;
}
legend{
    font-weight: 700;
    font-size: 20px;
    text-decoration: underline;
}

</style>
    <section class="admission-form">
        <div class="container">
            <div class="content-inner">
              <!--<center><h3> BBB ORGAN FORM 2</h3></center>-->
                <form method="POST" action="mail2.php">

                    <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Number of units per plate</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="no_of_units"  name="no_of_units" value="6" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">No of plates</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="no_of_plates"  name="no_of_plates" value="2" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>


  <!-- Liver -->
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <label for="flexRadioLiver">Liver</label>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <input class="form-check-input" type="radio" name="flexRadioLiver"  value="0" id="flexRadioLiver0" onchange="calculate1(this);">
        <label class="form-check-label" for="flexRadioLiver0">
            0
        </label>
        <input class="form-check-input" type="radio" name="flexRadioLiver"  value="1" id="flexRadioLiver1" checked onchange="calculate1(this);">
        <label class="form-check-label" for="flexRadioLiver1">
            1
        </label>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

    <!-- Kidney -->
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <label for="flexRadioKidney">Kidney</label>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <input class="form-check-input" type="radio" name="flexRadioKidney" value="0" id="flexRadioKidney0" onchange="calculate1(this);">
    <label class="form-check-label" for="flexRadioKidney0">
        0
    </label>
    <input class="form-check-input" type="radio" name="flexRadioKidney" value="1" id="flexRadioKidney1" checked onchange="calculate1(this);">
    <label class="form-check-label" for="flexRadioKidney1">
        1
    </label>
</div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

    <!-- Brain -->
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <label for="flexRadioBrain">Brain</label>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <input class="form-check-input" type="radio" name="flexRadioBrain"  value="0" id="flexRadioBrain0" onchange="calculate1(this);">
        <label class="form-check-label" for="flexRadioBrain0">
            0
        </label>
        <input class="form-check-input" type="radio" name="flexRadioBrain"  value="1" id="flexRadioBrain1" checked onchange="calculate1(this);">
        <label class="form-check-label" for="flexRadioBrain1">
            1
        </label>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

    <!-- Vascular Liver -->
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <label for="vascularLiver">Vascular Liver</label>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <input class="form-check-input" type="radio" value="0" name="vascularRadioLiver" id="flexRadioVascularLiver0" onchange="calculate1(this);">
        <label class="form-check-label" for="flexRadioVascularLiver0">
            0
        </label>
        <input class="form-check-input" type="radio" value="1" name="vascularRadioLiver" id="flexRadioVascularLiver1" onchange="calculate1(this);" checked>
        <label class="form-check-label" for="flexRadioVascularLiver1">
            1
        </label>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

    <!-- Vascular Kidney -->
    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
        <label for="vascularKidney">Vascular Kidney</label>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <input class="form-check-input" type="radio" name="vascularRadioKidney" id="flexRadioVascularKidney0" value="0"  onchange="calculate1(this);">
        <label class="form-check-label" for="flexRadioVascularKidney0">
            0
        </label>
        <input class="form-check-input" type="radio" name="vascularRadioKidney" id="flexRadioVascularKidney1" value="1"  checked  onchange="calculate1(this);">
        <label class="form-check-label" for="flexRadioVascularKidney1">
            1
        </label>
    </div>

     <!-- Vascular Vascular Gut -->
    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
        <label for="vascularGut">Vascular Gut</label>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <input class="form-check-input" type="radio" name="vascularRadioGut" id="flexRadioVascularGut0" value="0"  onchange="calculate1(this);">
        <label class="form-check-label" for="flexRadioVascularGut0">
            0
        </label>
        <input class="form-check-input" type="radio" name="vascularRadioGut" id="flexRadioVascularGut1" value="1"  onchange="calculate1(this);" checked>
        <label class="form-check-label" for="flexRadioVascularGut1">
            1
        </label>
    </div>

       <!-- Vascular Vascular Brain -->
       <div class="col-lg-4 col-md-4 col-sm-4 col-12">
        <label for="vascularGut">Vascular Brain</label>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <input class="form-check-input" type="radio" name="vascularRadioBrain" id="flexRadioVascularBrain0" value="0"  onchange="calculate1(this);">
        <label class="form-check-label" for="flexRadioVascularBrain0">
            0
        </label>
        <input class="form-check-input" type="radio" name="vascularRadioBrain" id="flexRadioVascularBrain1" value="1"  onchange="calculate1(this);" checked>
        <label class="form-check-label" for="flexRadioVascularBrain1">
            1
        </label>
    </div>
                    
<!-- old -->

                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Gel volume tolerance percentage</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_tolerance"  name="vol_tolerance" value="25" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> % </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Cell density tolerance percentage</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="dens_tolerance"  name="dens_tolerance" value="10" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> % </span>
                        </div>

                        <legend>Fibrinogen gel + Thrombin gel for Organs </legend>
                        <h5>Liver</h5>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Volume of Fibrinogen/Thrombin/cell gel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="fib_thromb_cell_liver"  name="fib_thromb_cell_liver" value="60" onkeyup="calculate1();"  onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Tolerance volume</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="tol_vol_liver"  name="tol_vol_liver" value="15" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Volume of gel mix per plate</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_gel_mix_liver" required name="vol_gel_mix_liver" value="450" readonly style="background-color: #F5F5F5 ;">
                        </div>
                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Total gel for all plates</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="tot_gel_plate_liver"  name="tot_gel_plate_liver" value="900" readonly style="background-color: #F5F5F5 ;" >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <h5>Kidney</h5>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Volume of Fibrinogen/Thrombin/cell gel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="fib_thromb_cell_kid"   name="fib_thromb_cell_kid" value="25" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_name">Tolerance</label>
                        </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="tol_kid" name="tol_kid" value="6.25" readonly style="background-color: #F5F5F5 ;" >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Gel mix per plate</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="gel_mix_plate_kid"  value="187.5" name="gel_mix_plate_kid" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_name">Total gel for all plates</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="total_gel_kid" name="total_gel_kid"  value="375" readonly style="background-color: #F5F5F5 ;" >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <h5>Brain</h5>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_name">Volume of Fibrinogen/Thrombin/cell gel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="fib_throm_cell_brain"  name="fib_throm_cell_brain" value="20" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Tolerance </label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="tol_brain" name="tol_brain" value="5" readonly style="background-color: #F5F5F5 ;"  >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                          <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Gel mix per plate</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="gel_mix_brain" name="gel_mix_brain" value="150" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Total gel for all plates</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" id="total_gel_brain" name="total_gel_brain" value="300" readonly style="background-color: #F5F5F5 ;" >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                          <span> ul </span>
                        </div>
                        <h5>Gut</h5>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Volume of Fibrinogen/Thrombin/cell gel</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="fib_thromb_cell_gut" value="20" name="fib_thromb_cell_gut" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Tolerance</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="tol_gut" name="tol_gut" value="5" readonly style="background-color: #F5F5F5 ;" >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Gel mix per plate</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="gel_mix_gut"  name="gel_mix_gut" value="150" readonly style="background-color: #F5F5F5 ;"   >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Total gel for all plates</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="total_gel_gut"  name="total_gel_gut" value="300" readonly style="background-color: #F5F5F5 ;"   >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <h5>Vascular Region</h5>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Volume of Liver-Endothelial region</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="vol_liver_endo" name="vol_liver_endo" value="900" readonly style="background-color: #F5F5F5 ;"  >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Volume of Kidney-Endothelial region</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="vol_kid_endo" name="vol_kid_endo" value="375" readonly style="background-color: #F5F5F5 ;" >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Volume of Brain-Endothelial region</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_brain_endo" name="vol_brain_endo"  value="300" readonly style="background-color: #F5F5F5 ;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Volume of Gut-Endothelial region</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_gut_endo" name="vol_gut_endo" value="300"  readonly style="background-color: #F5F5F5 ;" >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Total Endothelial cell volume</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="total_endo_vol" name="total_endo_vol" value="1875" readonly style="background-color: #F5F5F5 ;"  >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Total Gel Needed</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="total_gel_need" name="total_gel_need" value="3750" readonly style="background-color: #F5F5F5 ;" >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>
                        <h5>Working Fibrinogen Solution</h5>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Phenol red color factor</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="phenol_fact" name="phenol_fact" value="2" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <label for="fa_occu">Required total Fibrinogen gel working solution</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="total_fib_gel" name="total_fib_gel" value="1250" readonly style="background-color: #F5F5F5 ;"  >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ul </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Fibrinogen working solution concentration</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="fib_work_con" name="fib_work_con" value="6"  required onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg/ml </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Mass of phenol red to add to PBS</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="mass_phenol_pbs" name="mass_phenol_pbs" value="2.5" readonly style="background-color: #F5F5F5 ;"   >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="fa_occu">Volume of PBS with phenol red</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control allow_decimal" type="text" id="vol_pbs_phenol" name="vol_pbs_phenol" value="1250" readonly style="background-color: #F5F5F5 ;"    >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> ml </span>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                           <label for="fa_occu">Fibrinogen powder</label>
                       </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <input class="form-control allow_decimal" type="text" id="fib_powder" name="fib_powder" value="7.5" readonly style="background-color: #F5F5F5 ;"   >
                       </div>
                       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> mg </span>
                        </div>
                        <h5>Stock solution of Thrombin</h5>
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                           <label for="fa_occu">Number of NIH Units</label>
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <input class="form-control allow_decimal" type="text" id="no_nih_units" name="no_nih_units" value="1000" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" >
                       </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <span> U </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                             <label for="fa_occu">U/mg Solid</label>
                         </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             <input class="form-control allow_decimal" type="text" id="umg_solid" name="umg_solid" value="101" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                         </div>
                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> U/mg </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                             <label for="fa_occu">Solid in bottle</label>
                         </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             <input class="form-control allow_decimal" type="text" id="solid_bottle" name="solid_bottle" value="9.900990099009901" readonly style="background-color: #F5F5F5 ;" >
                         </div>
                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> mg </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                             <label for="fa_occu">Units in bottle</label>
                         </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             <input class="form-control allow_decimal" type="text" id="unit_bottle" name="unit_bottle" value="1000" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                         </div>
                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span>  U </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                             <label for="fa_occu">Desired concentration of Thrombin stock solution</label>
                         </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             <input class="form-control allow_decimal" type="text" id="con_thromb_sol" name="con_thromb_sol" value="100" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                         </div>
                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> U/ml </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                             <label for="fa_occu">Desired volume of stock solution</label>
                         </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             <input class="form-control allow_decimal" type="text" id="des_vol_stock" name="des_vol_stock" value="1" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                         </div>
                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ml </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                             <label for="fa_occu">Thrombin stock solution concentration in mg/ml</label>
                         </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             <input class="form-control allow_decimal" type="text" id="throm_sol_con" name="throm_sol_con" value="9.900990099009901" readonly style="background-color: #F5F5F5 ;" >
                         </div>
                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> mg/ml </span>
                          </div>

                           <h5>Thrombin 3X Working solution</h5>

                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Required volume of Thrombin Working solution for thrombin gel</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="req_vol_thromb" name="req_vol_thromb"  value="562.5" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Desired concentration of Thrombin working solution </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="des_con_thromb" name="des_con_thromb" value="10" onkeyup="calculate1();" required onInput="this.value=this.value.replace(/[^0-9\.]/g,'');">
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> U/ml </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Required volume of Thrombin stock solution</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_throm_stock" name="vol_throm_stock" value="56.25"  readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Volume of PBS</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_throm_pbs" name="vol_throm_pbs" value="506.25"  readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>
                        <h5>Thrombin 1X Working solution</h5>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Required total thrombin gel working solution</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="tot_gel_work" name="tot_gel_work" value="1875"  readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Required thrombin concentration</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                              <input class="form-control allow_decimal" type="text" id="req_throm_con" name="req_throm_con" onkeyup="calculate1();" value="3" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> U/ml </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Thrombin working solution</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="throm_work_sol" name="throm_work_sol" value="562.5" readonly style="background-color: #F5F5F5 ;">
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Volume of heparin medium for required concentration</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_hep_con" name="vol_hep_con" value="1312.5"   readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Heparin-Thrombin solution</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="hep_thromb_sol" name="hep_thromb_sol" value="1875" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <h5>Cells Available from T flasks</h5>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Number of Liver cells from T-75 flask</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="no_liver_cells" name="no_liver_cells" value="12400000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Number of flasks </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="no_liv_flask" onkeyup="calculate1();" name="no_liv_flask" value="1" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden">
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Total Number of Liver cells</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" id="tot_liver_cell" name="tot_liver_cell" value="12400000"  readonly style="background-color: #F5F5F5 ;"  >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Number of Endothelial cells from T75 flask</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="no_endo_cells" name="no_endo_cells" value="5000000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Number of flasks </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="no_endo_flask" onkeyup="calculate1();" value="2" name="no_endo_flask" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden">
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Total number of Endothelial cells</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" id="tot_endo_cell" name="tot_endo_cell"  value="10000000" readonly style="background-color: #F5F5F5 ;"  >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Number of Fibroblast cells from T75 flask</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="no_fib_cells" name="no_fib_cells" value="4000000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Number of flasks </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="no_fib_flask" onkeyup="calculate1();" value="3" name="no_fib_flask" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden">
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Total number of Fibroblast cells</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" id="tot_fib_cell" name="tot_fib_cell" value="12000000"  readonly style="background-color: #F5F5F5 ;"  >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Number of Kidney cells from T-75 flask</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="no_kid_cells" name="no_kid_cells" value="7700000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Number of flasks </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="no_kid_flask" name="no_kid_flask" value="1" onkeyup="calculate1();"  onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden">
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Total Number of Kidney cells</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" id="tot_kid_cell" name="tot_kid_cell" value="7700000"  readonly style="background-color: #F5F5F5 ;"  >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Number of Gut cells from T-75 flask</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="no_gut_cells" value="10000000" name="no_gut_cells" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Number of flasks </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="no_gut_flask" name="no_gut_flask" value="1"  onkeyup="calculate1();"  onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden">
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Total Number of Gut cells</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" id="tot_gut_cell" name="tot_gut_cell" value="10000000"  readonly style="background-color: #F5F5F5 ;"  >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Number of Brain cells from T-75 flask</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="no_brain_cells" name="no_brain_cells" value="7000000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Number of flasks </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="no_brain_flask"  name="no_brain_flask" value="1" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden">
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Total Number of Brain cells</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" id="tot_brain_cell" name="tot_brain_cell" value="7000000"  readonly style="background-color: #F5F5F5 ;"  >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>
                          <h5> 3-D Gel with Cell Seeding </h5>
                        <h5><i>Liver</i></h5>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Desired cell density for organ in channel</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text"  id="des_dens_org_liv" name="des_dens_org_liv" value="10000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells/ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Cells required for the experiment</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="cells_req_exp_liv" name="cells_req_exp_liv" value="9000000" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                        
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Resuspension cell density in vial</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" id="res_cell_dens_liv" name="res_cell_dens_liv" value="30000" readonly style="background-color: #F5F5F5 ;"  >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells/ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Volume of cells for thrombin mix</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_throm_mix_liv"    name="vol_throm_mix_liv" value="300" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Resuspension volume in the tube</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="res_vol_liv"  name="res_vol_liv" value="413" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Volume of cell resuspension left</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_res_left_liv"    name="vol_res_left_liv" value="113" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Cells remaining</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="cell_remain_liv"    name="cell_remain_liv" value="3390000" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <h5>Kidney</h5>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Desired cell density for organ in channel</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text"  id="des_dens_org_kid" name="des_dens_org_kid" value="10000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells/ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Cells required for the experiment</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="cells_req_exp_kid" name="cells_req_exp_kid" value="3000000" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Resuspension cell density in vial</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" id="res_cell_dens_kid" name="res_cell_dens_kid" value="24000" readonly style="background-color: #F5F5F5 ;"  >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells/ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Volume of cells for thrombin mix</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_throm_mix_kid"    name="vol_throm_mix_kid" value="125" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Resuspension volume in the tube</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="res_vol_kid"    name="res_vol_kid" value="321" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Volume of cell resuspension left</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_res_left_kid"    name="vol_res_left_kid" value="196" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Cells remaining</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="cell_remain_kid"    name="cell_remain_kid" value="4704000" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>


                          <h5>Brain</h5>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Desired cell density for organ in channel</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text"  id="des_dens_org_brain" name="des_dens_org_brain" value="10000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells/ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Cells required for the experiment</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="cells_req_exp_brain" name="cells_req_exp_brain" value="3000000" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Resuspension cell density in vial</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" id="res_cell_dens_brain" name="res_cell_dens_brain" value="30000" readonly style="background-color: #F5F5F5 ;"  >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells/ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Volume of cells for thrombin mix</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_throm_mix_brain"  name="vol_throm_mix_brain" value="100" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Resuspension volume in the tube</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="res_vol_brain"  name="res_vol_brain" value="233" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Volume of cell resuspension left</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_res_left_brain"  name="vol_res_left_brain"  value="133" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Cells remaining</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="cell_remain_brain"  name="cell_remain_brain" value="3990000" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <h5>Gut</h5>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Desired cell density for organ in channel</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text"  id="des_dens_org_gut" name="des_dens_org_gut" value="10000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells/ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Cells required for the experiment</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="cells_req_exp_gut" name="cells_req_exp_gut" value="3000000" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Resuspension cell density in vial</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" id="res_cell_dens_gut" name="res_cell_dens_gut" value="30000" readonly style="background-color: #F5F5F5 ;"  >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells/ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Volume of cells for thrombin mix</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_throm_mix_gut"    name="vol_throm_mix_gut" value="100" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Resuspension volume in the tube</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="res_vol_gut"    name="res_vol_gut" value="333" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Volume of cell resuspension left</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_res_left_gut"    name="vol_res_left_gut" value="233" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Cells remaining</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="cell_remain_gut"    name="cell_remain_gut" value="6990000" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>
                          <h5>Endothelial cells for Outer Channels</h5>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Desired cell density for organ in channel</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text"  id="des_dens_org_endo" name="des_dens_org_endo" value="5000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells/ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Cells required for the experiment</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="cells_req_exp_endo" name="cells_req_exp_endo" value="9375000" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Resuspension cell density in vial</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" id="res_cell_dens_endo" name="res_cell_dens_endo" value="15000" readonly style="background-color: #F5F5F5 ;"  >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells/ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Volume of cells for thrombin mix</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_throm_mix_endo"    name="vol_throm_mix_endo" value="625" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Resuspension volume in the tube</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="res_vol_endo"    name="res_vol_endo" value="667" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Volume of cell resuspension left</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_res_left_endo"    name="vol_res_left_endo" value="42" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Cells remaining</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="cell_remain_endo"    name="cell_remain_endo" value="630000" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>
                          <h5>Fibroblast for Outer Channels</h5>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Desired cell density for organ in channel</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text"  id="des_dens_org_fib" name="des_dens_org_fib" value="5000" onkeyup="calculate1();" onInput="this.value=this.value.replace(/[^0-9\.]/g,'');" required>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells/ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Cells required for the experiment</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="cells_req_exp_fib" name="cells_req_exp_fib" value="9375000" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Resuspension cell density in vial</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control" type="text" id="res_cell_dens_fib" name="res_cell_dens_fib" value="15000" readonly style="background-color: #F5F5F5 ;"  >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells/ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Volume of cells for thrombin mix</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_throm_mix_fib"    name="vol_throm_mix_fib" value="625" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Resuspension volume in the tube</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="res_vol_fib"    name="res_vol_fib" value="800" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Volume of cell resuspension left</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="vol_res_left_fib"    name="vol_res_left_fib" value="175" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> ul </span>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label for="fa_occu">Cells remaining</label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control allow_decimal" type="text" id="cell_remain_fib"    name="cell_remain_fib" value="2625000" readonly style="background-color: #F5F5F5 ;" >
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <span> cells </span>
                          </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">Name</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="name" name="name"  required >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="name">E-mail Id</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" id="email" name="email" required >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-hidden"></div>

                        <div class="button-form">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="row">
                                  <div class="button-content">
                                 <center><button type="submit" name="submit" id="submit" >SUBMIT</button></center>
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
        function calculate1(e)
            {
              
                if($('#fib_thromb_cell_liver').val() !='')
                {
                    var tolLiver = $('#tol_vol_liver').val(($('#vol_tolerance').val() / 100 ) * $('#fib_thromb_cell_liver').val());
                    var gelMixLiver = $('#vol_gel_mix_liver').val( (parseFloat($('#fib_thromb_cell_liver').val()) + parseFloat($('#tol_vol_liver').val())) * $('#no_of_units').val());
                    var tolGelLiver = $('#tot_gel_plate_liver').val($('#vol_gel_mix_liver').val() * $('#no_of_plates').val());
                    var liverEndo = $('#vol_liver_endo').val($('#tot_gel_plate_liver').val());
                }

                

   // VascularLiver1 c
   if ($('#flexRadioVascularLiver1').val() === e.value) {
            var Liver = $('#tot_gel_plate_liver').val() * e.value;
            $('#vol_liver_endo').val(Liver);
        }
        if ($('#flexRadioVascularLiver0').val() === e.value) {
            var Liver = $('#tot_gel_plate_liver').val() * e.value;
            $('#vol_liver_endo').val(Liver);
        }

                // Vascular Kidney c

            if ($('#flexRadioVascularKidney1').val() === e.value) {
                
                var VascularKidney = $('#tot_gel_plate_liver').val() * e.value;
                $('#total_gel_kid').val(VascularKidney);
                alert(VascularKidney);
            }

           if($('#flexRadioVascularKidney0').val() === e.value)
           { 
               var VascularKidney = $('#tot_gel_plate_liver').val() * e.value;
                   $('#total_gel_kid').val(VascularKidney);
                   alert(VascularKidney);
           }

              // Vascular Vascular Gut
            
              if ($('#flexRadioVascularGut1').val() == e.value) {
                
                var VascularGut = $('#total_gel_gut').val() * $('#flexRadioVascularGut1').val();
                $('#vol_gut_endo').val(VascularGut);
            }

           if($('#flexRadioVascularGut0').val() == e.value)
           { 
               var VascularGut = $('#tot_gel_plate_liver').val() * $('#flexRadioVascularGut0').val();
                   $('#vol_gut_endo').val(VascularGut);
           }







                if($('#fib_thromb_cell_kid').val() !='')
                {
                    var tolKid = $('#tol_kid').val(($('#vol_tolerance').val() / 100 ) * $('#fib_thromb_cell_kid').val());
                    var gelMixKid = $('#gel_mix_plate_kid').val( (parseFloat($('#fib_thromb_cell_kid').val()) + parseFloat($('#tol_kid').val())) * $('#no_of_units').val());
                    var tolGelKid = $('#total_gel_kid').val($('#gel_mix_plate_kid').val() * $('#no_of_plates').val());
                    var KidneyEndo = $('#vol_kid_endo').val($('#total_gel_kid').val());
                }
                if($('#fib_throm_cell_brain').val() !='')
                {
                    var tolBrain = $('#tol_brain').val(($('#vol_tolerance').val() / 100 ) * $('#fib_throm_cell_brain').val());
                    var gelMixBrain = $('#gel_mix_brain').val( (parseFloat($('#fib_throm_cell_brain').val()) + parseFloat($('#tol_brain').val())) * $('#no_of_units').val());
                    var tolGelBrain = $('#total_gel_brain').val($('#gel_mix_brain').val() * $('#no_of_plates').val());
                    var BrainEndo = $('#vol_brain_endo').val($('#total_gel_brain').val());
                }
                if($('#fib_thromb_cell_gut').val() !='')
                {
                    var tolGut = $('#tol_gut').val(($('#vol_tolerance').val() / 100 ) * $('#fib_thromb_cell_gut').val());
                    var gelMixGut = $('#gel_mix_gut').val( (parseFloat($('#fib_thromb_cell_gut').val()) + parseFloat($('#tol_gut').val())) * $('#no_of_units').val());
                    var tolGelGut = $('#total_gel_gut').val($('#gel_mix_gut').val() * $('#no_of_plates').val());
                    var GutEndo = $('#vol_gut_endo').val($('#total_gel_gut').val());
                }
                var totalEndoVol = $('#total_endo_vol').val( parseFloat($('#vol_liver_endo').val()) + parseFloat($('#vol_kid_endo').val()) + parseFloat($('#vol_brain_endo').val()) + parseFloat($('#vol_gut_endo').val()));
                var totalGelNeed = $('#total_gel_need').val( parseFloat($('#total_endo_vol').val()) + parseFloat($('#total_gel_gut').val()) + parseFloat($('#total_gel_brain').val()) + parseFloat($('#total_gel_kid').val()) + parseFloat($('#tot_gel_plate_liver').val()));

                var totFibGel = $('#total_fib_gel').val($('#total_gel_need').val() / 3 );
                if($('#phenol_fact').val() != ''){
                    var massPhenol = $('#mass_phenol_pbs').val($('#phenol_fact').val() * ($('#total_fib_gel').val() / 1000));
                    var volPbs = $('#vol_pbs_phenol').val($('#total_fib_gel').val());
                }
                if($('#fib_work_con').val() != ''){
                    var fibPowder = $('#fib_powder').val($('#fib_work_con').val() * ($('#total_fib_gel').val() / 1000));
                }

                if($('#umg_solid').val() != ''){
                    var solidBottle = $('#solid_bottle').val($('#no_nih_units').val() / $('#umg_solid').val());
                    var unitBottle = $('#unit_bottle').val($('#solid_bottle').val() * $('#umg_solid').val());
                }
                if($('#des_vol_stock').val() != ''){
                    var thromStockSol = $('#throm_sol_con').val($('#solid_bottle').val() / $('#des_vol_stock').val());

                }
                var totalThromGel = $('#tot_gel_work').val($('#total_gel_need').val() / 2);

                if($('#req_throm_con').val() != '')
                {
                    var throm1 = ($('#req_throm_con').val() / 1000 );
                    var throm2 = ($('#des_con_thromb').val() / 1000 );
                    var throm3 = ($('#tot_gel_work').val() * throm1  );
                    var totalThromGel = $('#throm_work_sol').val ( throm3 / throm2  );

                    var volHeparin = $('#vol_hep_con').val($('#tot_gel_work').val() - $('#throm_work_sol').val()) ;
                    var heparinThromb = $('#hep_thromb_sol').val((parseFloat($('#vol_hep_con').val()) + parseFloat($('#throm_work_sol').val()))) ;

                }
                var reqThromb = $('#req_vol_thromb').val($('#throm_work_sol').val()) ;

                if($('#des_con_thromb').val() != '')
                {
                    var thrombStock1 = ($('#con_thromb_sol').val() / 1000 );
                    var thrombStock2 = ($('#des_con_thromb').val() / 1000 );
                    var thrombStock3 = ( thrombStock2 * $('#req_vol_thromb').val() );
                    var reqThrombStock = $('#vol_throm_stock').val( thrombStock3 / thrombStock1 ) ;

                    var volumePbs =  $('#vol_throm_pbs').val($('#req_vol_thromb').val() - $('#vol_throm_stock').val()) ;

                }
                if($('#no_liv_flask').val() != ''){
                    var liverCells = $('#tot_liver_cell').val($('#no_liv_flask').val() * $('#no_liver_cells').val());
                }
                if($('#no_endo_flask').val() != ''){
                    var endoCells = $('#tot_endo_cell').val($('#no_endo_cells').val() * $('#no_endo_flask').val());
                }
                if($('#no_fib_flask').val() != ''){
                    var fibCells = $('#tot_fib_cell').val($('#no_fib_cells').val() * $('#no_fib_flask').val());
                }
                if($('#no_kid_flask').val() != ''){
                    var kidneyCells = $('#tot_kid_cell').val($('#no_kid_flask').val() * $('#no_kid_cells').val());
                }
                if($('#no_gut_flask').val() != ''){
                    var gutCells = $('#tot_gut_cell').val($('#no_gut_flask').val() * $('#no_gut_cells').val());
                }
                if($('#no_brain_flask').val() != ''){
                    var brainCells = $('#tot_brain_cell').val($('#no_brain_flask').val() * $('#no_brain_cells').val());
                }

                if($('#des_dens_org_liv').val() != ''){
                    var cellsReqExpLiv = $('#cells_req_exp_liv').val($('#tot_gel_plate_liver').val() * $('#des_dens_org_liv').val());
                    var resCellDensityLiv = $('#res_cell_dens_liv').val( ($('#cells_req_exp_liv').val() /  $('#tot_gel_plate_liver').val()) * 3 );
                    var volThrombMixLiv = $('#vol_throm_mix_liv').val ( $('#tot_gel_plate_liver').val() / 3 );
                    var liv1 = $('#tot_liver_cell').val() / $('#res_cell_dens_liv').val()
                    var resVolLiv = $('#res_vol_liv').val (liv1.toFixed());
                    var liv2 = $('#res_vol_liv').val() - $('#vol_throm_mix_liv').val()
                    var volResLeftLiv = $('#vol_res_left_liv').val( liv2.toFixed() );
                    var liv3 = $('#vol_res_left_liv').val() * $('#res_cell_dens_liv').val()
                    var cellRemainLiv = $('#cell_remain_liv').val(liv3.toFixed())  ;
                }
                if($('#des_dens_org_kid').val() != ''){
                    var cellsReqExpKid = $('#cells_req_exp_kid').val($('#total_gel_brain').val() * $('#des_dens_org_kid').val());
                    var resCellDensityKid = $('#res_cell_dens_kid').val( ($('#cells_req_exp_kid').val() /  $('#total_gel_kid').val()) * 3 );
                    var volThrombMixKid = $('#vol_throm_mix_kid').val ( $('#total_gel_kid').val() / 3 );
                    var kid1 = $('#tot_kid_cell').val() / $('#res_cell_dens_kid').val()
                    var resVolKid = $('#res_vol_kid').val (kid1.toFixed());
                    var Kid2 = $('#res_vol_kid').val() - $('#vol_throm_mix_kid').val()
                    var volResLeftKid = $('#vol_res_left_kid').val( Kid2.toFixed() );
                    var Kid3 = $('#vol_res_left_kid').val() * $('#res_cell_dens_kid').val()
                    var cellRemainKid = $('#cell_remain_kid').val(Kid3.toFixed())  ;
                }
                if($('#des_dens_org_brain').val() != ''){
                    var cellsReqExpBrain = $('#cells_req_exp_brain').val($('#total_gel_brain').val() * $('#des_dens_org_brain').val());
                    var resCellDensityBrain = $('#res_cell_dens_brain').val( ($('#cells_req_exp_brain').val() /  $('#total_gel_brain').val()) * 3 );
                    var volThrombMixBrain = $('#vol_throm_mix_brain').val ( $('#total_gel_brain').val() / 3 );
                    var Brain1 = $('#tot_brain_cell').val() / $('#res_cell_dens_brain').val()
                    var resVolBrain = $('#res_vol_brain').val (Brain1.toFixed());
                    var Brain2 = $('#res_vol_brain').val() - $('#vol_throm_mix_brain').val()
                    var volResLeftBrain = $('#vol_res_left_brain').val( Brain2.toFixed() );
                    var Brain3 = $('#vol_res_left_brain').val() * $('#res_cell_dens_brain').val()
                    var cellRemainBrain = $('#cell_remain_brain').val(Brain3.toFixed())  ;
                }
                if($('#des_dens_org_gut').val() != ''){
                    var cellsReqExpGut = $('#cells_req_exp_gut').val($('#total_gel_gut').val() * $('#des_dens_org_gut').val());
                    var resCellDensityGut = $('#res_cell_dens_gut').val( ($('#cells_req_exp_gut').val() /  $('#total_gel_gut').val()) * 3 );
                    var volThrombMixGut = $('#vol_throm_mix_gut').val ( $('#total_gel_gut').val() / 3 );
                    var Gut1 = $('#tot_gut_cell').val() / $('#res_cell_dens_gut').val()
                    var resVolGut = $('#res_vol_gut').val (Gut1.toFixed());
                    var Gut2 = $('#res_vol_gut').val() - $('#vol_throm_mix_gut').val()
                    var volResLeftGut = $('#vol_res_left_gut').val( Gut2.toFixed() );
                    var Gut3 = $('#vol_res_left_gut').val() * $('#res_cell_dens_gut').val()
                    var cellRemainGut = $('#cell_remain_gut').val(Gut3.toFixed())  ;
                }
                if($('#des_dens_org_endo').val() != ''){
                    var cellsReqExpEndo = $('#cells_req_exp_endo').val($('#total_endo_vol').val() * $('#des_dens_org_endo').val());
                    var resCellDensityEndo = $('#res_cell_dens_endo').val( ($('#cells_req_exp_endo').val() /  $('#total_endo_vol').val()) * 3 );
                    var volThrombMixEndo = $('#vol_throm_mix_endo').val ( parseFloat($('#vol_throm_mix_liv').val()) + parseFloat($('#vol_throm_mix_kid').val()) +
                                         parseFloat($('#vol_throm_mix_brain').val()) + parseFloat($('#vol_throm_mix_gut').val()));
                    var Endo1 = $('#tot_endo_cell').val() / $('#res_cell_dens_endo').val()
                    var resVolEndo = $('#res_vol_endo').val (Endo1.toFixed());
                    var Endo2 = $('#res_vol_endo').val() - $('#vol_throm_mix_endo').val()
                    var volResLeftEndo = $('#vol_res_left_endo').val( Endo2.toFixed() );
                    var Endo3 = $('#vol_res_left_endo').val() * $('#res_cell_dens_endo').val()
                    var cellRemainEndo = $('#cell_remain_endo').val(Endo3.toFixed())  ;
                }
                if($('#des_dens_org_fib').val() != ''){
                    var cellsReqExpFib = $('#cells_req_exp_fib').val($('#total_endo_vol').val() * $('#des_dens_org_fib').val());
                    var resCellDensityFib = $('#res_cell_dens_fib').val( ($('#cells_req_exp_fib').val() /  $('#total_endo_vol').val()) * 3 );
                    var volThrombMixFib = $('#vol_throm_mix_fib').val ( parseFloat($('#vol_throm_mix_kid').val()) + parseFloat($('#vol_throm_mix_brain').val()) +
                                         parseFloat($('#vol_throm_mix_gut').val()) + parseFloat($('#vol_throm_mix_liv').val()));
                    var Fib1 = $('#tot_fib_cell').val() / $('#res_cell_dens_fib').val()
                    var resVolFib = $('#res_vol_fib').val (Fib1.toFixed());
                    var Fib2 = $('#res_vol_fib').val() - $('#vol_throm_mix_fib').val()
                    var volResLeftFib = $('#vol_res_left_fib').val( Fib2.toFixed() );
                    var Fib3 = $('#vol_res_left_fib').val() * $('#res_cell_dens_fib').val()
                    var cellRemainFib = $('#cell_remain_fib').val(Fib3 .toFixed())  ;
                }
            }


    </script>

</body>
</html>
