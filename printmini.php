<?php
	include 'includes/session.php';

	function generateRow($conn){
        $contents = '';
        $sql = "SELECT * FROM members WHERE id = '".$_SESSION['voter']."'";
        $query = $conn->query($sql);
        $voter=(!empty($voter['photo'])) ? 'images/'.$voter['photo'] : 'images/profile.jpg';
        $voter = $query->fetch_assoc();
        $contents = '
        <tr>
        <td width="30%"><b>Registration Number</b></td>
        <td width="70%"><b>'.$voter['membership_id'].'</b></td>
    </tr>
   ';
   $contents .= '<tr>
                
                  <td>Full Name</td>
                  <td>'.$voter['title'].". ".$voter['firstname']." ".$voter['othername']." ".$voter['lastname'].'</td>
              </tr>
              <tr>
                  <td>Wing</td>
                  <td>'.$voter['wing'].'</td>
              </tr>
              <tr>
                  <td>State/Chapter</td>
                  <td>'.$voter['state'].'</td>
              </tr>
              <tr>
              <td>Year of Registration</td>
              <td>'.$voter['year_entry'].'</td>
          </tr>
         
      			';

        return $contents;
    }
    
       

    

 - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// test fitbox with all alignment combinations
require_once('tcpdf/tcpdf.php');  
$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
$pdf->SetCreator(PDF_CREATOR);  
$pdf->SetTitle('NATAIS-MIS: Membership Form ');  
$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, 'hjkk', PDF_FONT_SIZE_DATA));  
$pdf->SetDefaultMonospacedFont('helvetica');  
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
$pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
$pdf->setPrintHeader(false);  
$pdf->setPrintFooter(false);  
$pdf->SetAutoPageBreak(TRUE, 10);  
$pdf->SetFont('helvetica', '', 11); 
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

$pdf->AddPage();
$x = 165;
$y = 28;
$w = 30;
$h = 24;
// Image example with resizing
$pdf->Image('images/'.$voter['photo']."",$x, $y, $w, $h,  'JPG','');
$content = '';

$content .= '
<img src="images/nataisnew.png" alt=""/> 
<h2  align="center" color="red" padding-bottom="30"> NATAIS MEMBERSHIP INFORMATION SYSTEM</h2>
  <h4 align="center">Membership Information</h4>
  <table border="1" cellspacing="0" cellpadding="10"> 

  ';  
   $content .= generateRow($conn);  
$content .= '</table>'; 

$pdf->writeHTML($content);  
$sign = ' 
<br>
<br>
<h2>Dr. Abubakar Kawu Hassan</h2>
<p>National Secretary</p>';


$pdf->Image('images/natsec.png' ,20, 115, 30, 15,  'PNG');
$pdf->writeHTML($sign);

$pdf->Output('membership_profile.pdf', 'I');

?>