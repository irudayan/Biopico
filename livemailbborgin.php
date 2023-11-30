<?php
//require '../PHPMailer/PHPMailerAutoload.php';

//require_once "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
?>
<?php


#echo"<pre>"; print_r($row);exit;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $unit_plate = $_POST['unit_plate'];
    $no_of_plates = $_POST['no_of_plates'];
    $vol_tolerance = $_POST['vol_tolerance'];
    $dens_tolerance = $_POST['dens_tolerance'];
    $fib_throm_cell = $_POST['fib_throm_cell'];
    $tol_vol = $_POST['tol_vol'];
    $vol_gel_mix = $_POST['vol_gel_mix'];
    $total_gel_plate = $_POST['total_gel_plate'];
    $phenol_red = $_POST['phenol_red'];
    $total_fib_gel = $_POST['total_fib_gel'];
    $fibrin_con = $_POST['fibrin_con'];
    $phenol_red_pbs = $_POST['phenol_red_pbs'];
    $vol_pbs_phenol = $_POST['vol_pbs_phenol'];
    $fibrin_powder = $_POST['fibrin_powder'];
    $no_nih_units = $_POST['no_nih_units'];
    $umg_solid = $_POST['umg_solid'];
    $solid_bottle = $_POST['solid_bottle'];
    $unit_bottle = $_POST['unit_bottle'];
    $con_thrombin = $_POST['con_thrombin'];
    $vol_stack_sol = $_POST['vol_stack_sol'];
    $thromb_sol_con = $_POST['thromb_sol_con'];
    $req_thrombin_gel = $_POST['req_thrombin_gel'];
    $con_thromb_sol = $_POST['con_thromb_sol'];
    $vol_thromb_sol = $_POST['vol_thromb_sol'];
    $thrombin_pbs = $_POST['thrombin_pbs'];
    $thrombin_gel_making = $_POST['thrombin_gel_making'];
    $thromb_con = $_POST['thromb_con'];
    $thromb_working_sol = $_POST['thromb_working_sol'];
    $vol_heparin = $_POST['vol_heparin'];
    $heparin_thromb = $_POST['heparin_thromb'];  
    $no_of_endo = $_POST['no_of_endo'];
    $no_endo_flask = $_POST['no_endo_flask'];
    $total_endo = $_POST['total_endo'];
    $no_of_peri = $_POST['no_of_peri'];
    $no_peri_flask = $_POST['no_peri_flask'];
    $total_peri = $_POST['total_peri'];
    $no_of_astro = $_POST['no_of_astro'];
    $no_astro_flask = $_POST['no_astro_flask'];
    $total_astro = $_POST['total_astro'];
    $des_dens_endo = $_POST['des_dens_endo'];
    $des_dens_peri = $_POST['des_dens_peri'];
    $des_dens_astro = $_POST['des_dens_astro'];
    $no_endo_exp = $_POST['no_endo_exp'];
    $no_peri_exp = $_POST['no_peri_exp'];
    $no_astro_exp = $_POST['no_astro_exp'];
    $res_endo_dens = $_POST['res_endo_dens'];
    $res_peri_dens = $_POST['res_peri_dens'];
    $res_astro_dens = $_POST['res_astro_dens'];
    $vol_throm_mix = $_POST['vol_throm_mix'];
    $res_vol_endo = $_POST['res_vol_endo'];
    $res_vol_peri = $_POST['res_vol_peri'];
    $res_vol_astro = $_POST['res_vol_astro'];
    $vol_endo_res = $_POST['vol_endo_res'];
    $vol_peri_res = $_POST['vol_peri_res'];
    $vol_astro_res = $_POST['vol_astro_res'];
    $no_endo_remain = $_POST['no_endo_remain'];
    $no_peri_remain = $_POST['no_peri_remain'];
    $no_astro_remain = $_POST['no_astro_remain'];
    date_default_timezone_set("Asia/Kolkata");
    $date = date("d-m-Y h:i:s a");

  

  $message1 = '<div class="header" style="width: 71%;margin: 0px 21%;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <p style=" color: #fff !important;text-align: center;font-weight: bold;font-size: 15px;padding: 1%; margin-bottom: 1px;background-color: rgb(0, 174, 84);"> BBB ORGAN
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="form" style="width: 70%; margin: 0px 20%; ">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="registration">
            <style>
              td,th{
                padding: 15px;
              }
            </style>
   <table>
    
              <tr>
                <td width="448" style="width:450px;"><strong>Number of units per plate</strong></td>
                <td width="302" style="width:300px;">' . $unit_plate . '</td>
                
              </tr>
               <tr>
                <td><strong>No of Plates</strong></td>
                <td>' . $no_of_plates . '</td>
                
              </tr>
               <tr>
                <td><strong>Gel volume tolerance percentage</strong></td>
                <td>' . $vol_tolerance . ' % </td>
                
              </tr>
               <tr>
                <td><strong>Cell density tolerance percentage</strong></td>
                <td>' . $dens_tolerance . ' % </td>
              </tr>
               <tr>
                <td><strong><h3>Gel for BBB</h3></strong></td>
              </tr>
               <tr>
                <td><strong>Volume of Fibrinogen/Thrombin/cell gel</strong></td>
                <td>' . $fib_throm_cell . ' ul </td>
               
              </tr>
               <tr>
                <td><strong>Tolerance volume</strong></td>
                <td>' . $tol_vol . ' ul </td>
               
              </tr>
               <tr>
                <td><strong>Volume of gel mix per plate</strong></td>
                <td>' . $vol_gel_mix . ' ul </td>
               
              </tr>
               <tr>
                <td><strong>Total gel for all plates</strong></td>
                <td>' . $total_gel_plate . ' ul </td>
               
              </tr>
               <tr>
                <td><strong><h3>Working Fibrinogen Solution</h3></strong></td>
               
              </tr>
                <tr>
                <td><strong>Phenol red color factor</strong></td>
                <td>' . $phenol_red . ' </td>
              </tr>
               <tr>
                <td><strong>Required Total Fibrinogen gel working solution</strong></td>
                <td>' . $total_fib_gel . ' ul </td>
              </tr>
               <tr>
                <td><strong>Fibrinogen working solution concentration</strong></td>
                <td>' . $fibrin_con . ' mg/ml </td>
              </tr>
               <tr>
                <td><strong>Mass of phenol red to add to PBS</strong></td>
                <td>' . $phenol_red_pbs . ' mg </td>
              </tr>
               <tr>
                <td><strong>Volume of PBS with phenol red</strong></td>
                <td>' . $vol_pbs_phenol . ' ml </td>
              </tr>
               <tr>
                <td><strong>Fibrinogen powder</strong></td>
                <td>' . $fibrin_powder . ' mg </td>
              </tr>

               <tr>
                <td><strong><h3>Stock solution of Thrombin</h3></strong></td>
               
              </tr>
               <tr>
                <td><strong>Number of NIH Units</strong></td>
                <td>' . $no_nih_units . ' U </td>
              </tr>


               <tr>
                <td><strong>U/mg Solid</strong></td>
                <td>' . $umg_solid . ' U/mg </td>
              </tr>
               <tr>
                <td><strong>Solid in bottle</strong></td>
                <td>' . $solid_bottle . ' mg </td>
              </tr>
               <tr>
                <td><strong>Units in bottle</strong></td>
                <td>' . $unit_bottle . ' U </td>
              </tr>
               <tr>
                <td><strong>Desired concentration of Thrombin Stock Solution</strong></td>
                <td>' . $con_thrombin . ' U/ml </td>
              </tr>

               <tr>
                <td><strong>Desired volume of stock solution</strong></td>
                <td>' . $vol_stack_sol . ' ml </td>
              </tr>
               <tr>
                <td><strong>Thrombin stock solution concentration in mg/ml</strong></td>
                <td>' . $thromb_sol_con . ' mg/ml </td>
              </tr>

                <tr>
                <td><strong><h3>Thrombin 3X Working solution </h3></strong></td>
              
              </tr>

              <tr>
                <td><strong>Required volume of Thrombin Working solution for thrombin gel</td>
                <td>' . $req_thrombin_gel . ' ul </td>
              </tr>
              <tr>
                <td><strong>Desired concentration of Thrombin working solution</strong></td>
                <td>' . $con_thromb_sol . ' U/ml </td>
              </tr>
              <tr>
                <td><strong>Required volume of Thrombin Stock Solution</strong></td>
                <td>' . $vol_thromb_sol . ' ul </td>
              </tr>
              <tr>
                <td><strong>Volume of PBS</strong></td>
                <td>' . $thrombin_pbs . ' ul </td>
              </tr>
              <tr>
                <td><strong><h3>Thrombin 1X Working solution</h3></strong></td>
               
              </tr>
              <tr>
                <td><strong>Required Total thrombin gel working solution</strong></td>
                <td>' . $thrombin_gel_making . ' ul </td>
              </tr>
              <tr>
                <td><strong>Required thrombin concentration</strong></td>
                <td>' . $thromb_con . ' U/ml </td>
              </tr>
               <tr>
                <td><strong>Thrombin working solution</strong></td>
                <td>' . $thromb_working_sol . ' ul </td>
              </tr>
                 <tr>
                <td><strong>Volume of heparin medium for required concentration</strong></td>
                <td>' . $vol_heparin . ' ul </td>
              </tr>
                 <tr>
                <td><strong>Heparin-Thrombin Solution</strong></td>
                <td>' . $heparin_thromb . ' ul </td>
              </tr>

                 <tr>
                <td><strong><h3>Cells Available from T flasks</h3></strong></td>
              
              </tr>
             
                 <tr>
                <td><strong>Number of endothelial cells from T-25 flask</strong></td>
                <td>' . $no_of_endo . ' cells </td>
              </tr>
              <tr>
                <td><strong>Number of flasks</strong></td>
                <td>' . $no_endo_flask . '</td>
              </tr>
                 <tr>
                <td><strong>Total Number of endothelial cells</strong></td>
                <td>' . $total_endo . ' cells </td>
              </tr>
                 <tr>
                <td><strong>Number of pericytes from T25 flask</strong></td>
                <td>' . $no_of_peri . ' cells </td>
              </tr>
                 <tr>
                <td><strong>Number of flasks</strong></td>
                <td>' . $no_peri_flask . '</td>
              </tr>
              <tr>
                <td><strong>Total number of pericytes</strong></td>
                <td>' . $total_peri . ' cells </td>
              </tr>

               <tr>
                <td><strong>Number of Astrocytes from T25 flask</strong></td>
                <td>' . $no_of_astro . ' cells </td>
              </tr>
                 <tr>
                <td><strong>Number of flasks</strong></td>
                <td>' . $no_astro_flask . '</td>
              </tr>
              <tr>
                <td><strong>Total number of Astrocytes</strong></td>
                <td>' . $total_astro . ' cells </td>
              </tr>
              <tr>
                <td><strong><h3>Cells for BBB</h3></strong></td>
              </tr>
                 <tr>
                <td><strong>Desired cell density for Endothelial cells in channel</strong></td>
                <td>' . $des_dens_endo . ' cells/ul </td>
              </tr>
                 <tr>
                <td><strong>Desired cell density for Pericytes in channel</strong></td>
                <td>' . $des_dens_peri . ' cells/ul </td>
              </tr>
              <tr>
                <td><strong>Desired cell density for Astrocytes in channel</strong></td>
                <td>' . $des_dens_astro . ' cells/ul </td>
              </tr>
                 <tr>
                <td><strong>Number of Endothelial cells required for the experiment</strong></td>
                <td>' . $no_endo_exp . ' cells </td>
              </tr>
                 <tr>
                <td><strong>Number of Pericytes required for the experiment </strong></td>
                <td>' . $no_peri_exp . ' cells </td>
              </tr>
                 <tr>
                <td><strong>Number of Astrocytes required for the experiment</strong></td>
                <td>' . $no_astro_exp . ' cells </td>
              </tr>
              <tr>
                <td><strong>Resuspension Endothelial cell density in vial</strong></td>
                <td>' . $res_endo_dens . ' cells/ul </td>
              </tr>
                 <tr>
                <td><strong>Resuspension Pericytes density in vial</strong></td>
                <td>' . $res_peri_dens . ' cells/ul </td>
              </tr>
                 <tr>
                <td><strong>Resuspension Astrocytes density in vial</strong></td>
                <td>' . $res_astro_dens . ' cells/ul </td>
              </tr>
                 <tr>
                <td><strong>Volume of cells for thrombin mix</strong></td>
                <td>' . $vol_throm_mix . ' ul </td>
              </tr>
              <tr>
                <td><strong>Resuspension volume in the Endothelial cells tube</strong></td>
                <td>' . $res_vol_endo . ' ul </td>
              </tr>
                 <tr>
                <td><strong>Resuspension volume in the Pericytes tube</strong></td>
                <td>' . $res_vol_peri . ' ul </td>
              </tr>
                 <tr>
                <td><strong>Resuspension volume in the Astrocytes tube</strong></td>
                <td>' . $res_vol_astro . ' ul </td>
              </tr>
                 <tr>
                <td><strong>Volume of Endothelial cell resuspension left</strong></td>
                <td>' . $vol_endo_res . ' ul </td>
              </tr>
              <tr>
                <td><strong>Volume of Pericytes resuspension left</strong></td>
                <td>' . $vol_peri_res . ' ul </td>
              </tr>
                 <tr>
                <td><strong>Volume of Astriocytes resuspension left</strong></td>
                <td>' . $vol_astro_res . ' ul </td>
              </tr>
                 <tr>
                <td><strong>Number of Endothelial Cells remaining</strong></td>
                <td>' . $no_endo_remain . ' cells </td>
              </tr>
                 <tr>
                <td><strong>Number of Pericytes remaining</strong></td>
                <td>' . $no_peri_remain . ' cells </td>
              </tr>
              <tr>
                <td><strong>Number of Astrocytes remaining</strong></td>
                <td>' . $no_astro_remain . ' cells </td>
              </tr>
                      <tr>
                <td><strong>Name</strong></td>
                <td >' . $name . '</td>
                
              </tr>

              <tr>
                <td><strong>E-mail Id</strong></td>
                <td>' . $email . '</td>
               
              </tr>
                 <tr>
                <td><strong>Registered Date</strong></td>
                <td>' . $date . '</td>
               
              </tr>
                    
             </table>';
}

echo"<pre>"; print_r($_POST['submit']);exit;

$mail = new PHPMailer();
// Server settings
# $mail->SMTPDebug = 1; // for detailed debug output
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->Username = 'ancypriya23082000@gmail.com'; // YOUR gmail email
$mail->Password = 'jodgprofdweutaeo'; // YOUR gmail password

// Sender and recipient settings
$mail->setfrom('accounts@biopico.com', "BBB Organ");

$mail->addaddress($email);
$mail->addaddress('webform@biopico.com');
// $mail->addreplyto('example@gmail.com', 'Sender Name'); // to set the reply to

// Setting the email content
$mail->IsHTML(true);
$mail->Subject = "BBB Organ Form";
$mail->Body = $message1;
$mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

//$mail->send();

if(!$mail->send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{

 echo '<script>

  alert("Form Submitted Successfully!");

 </script>';

echo "<script type='text/javascript'> window.location.href='https://biopico.com/bbb-organ?mail=success';</script>";

}