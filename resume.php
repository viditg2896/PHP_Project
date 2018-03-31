<?php
    require('../PHP_Project/vendor/setasign/fpdf/fpdf.php');
    
    if (isset($_POST["submit"])){
        $personname = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $location = $_POST["location"];
        $objective = $_POST["objective"];
        $exp1_cmpname = $_POST["exp1_cmpname"];
        $exp1_role = $_POST["exp1_role"];
        $exp1_period = $_POST["exp1_period"];
        $exp1_highlights = $_POST["exp1_highlights"];
        $exp2_cmpname = $_POST["exp2_cmpname"];
        $exp2_role = $_POST["exp2_role"];
        $exp2_period = $_POST["exp2_period"];
        $exp2_highlights = $_POST["exp2_highlights"];
        $rawskillstr = $_POST["skills"];
        $skillset = explode(",",$rawskillstr);
        $college_name = $_POST["college_name"];
        $college_period = $_POST["college_period"];
        $college_cgpa = $_POST["college_cgpa"];
        $seniorschool_name = $_POST["seniorschool_name"];
        $seniorschool_year = $_POST["seniorschool_year"];
        $seniorschool_percentage = $_POST["seniorschool_percentage"];
        $school_name = $_POST["school_name"];
        $school_year = $_POST["school_year"];
        $school_percentage = $_POST["school_percentage"];
        $interests = $_POST["interests"];
    }

    class PDF extends FPDF {
        function createCell($y, $cellString, $offset = 10)
		{
			$x = $this->GetStringWidth($cellString);
			
			$this->Cell($x + 10, $y, $cellString);
		}
    }
    
    $pdf = new PDF();
    $pdf->AddPage();

    //Heading
    $pdf->SetFont('courier', 'B', 14);
    $pdf->createCell(10, $personname);
    $pdf->ln(5);
    $pdf->SetFont('courier', '', 10);
    $pdf->createCell(10, $email);
    $pdf->ln(5);
    $pdf->createCell(10, $phone);
    $pdf->ln(5);
    $pdf->createCell(10, $location);
    $pdf->ln(15);
    $pdf->setRightMargin(0);
    $x = $pdf->getX();
    $y = $pdf->getY();
    $pdf->SetFont('courier', 'B', 10);
    $pdf->cell(100, 5, $pdf->write(5, $objective), 0, 1, 'L');
    $pdf->ln();
    
    //Skillset
    $pdf->setFont('courier', 'BU', 14);
	$pdf->write(5, 'Skills & Technologies');
    $pdf->ln(10);
    $pdf->SetFont('courier', '', 10);
    $count = 0;
    foreach ($skillset as $i) {
        if ($count > 3) {
            $pdf->ln();
            $count = 0;
        }
        $pdf->cell(50, 5, $i);
        $count++;
    }
    $pdf->ln(10);

    //WorkEx
    $pdf->setFont('courier', 'BU', 14);
    $pdf->write(5, 'Work-Experience');
    $pdf->ln(10);

    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $exp1_cmpname);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $exp1_period);
    $pdf->ln();
    $pdf->createCell(5, $exp1_role);
    $pdf->ln(5);

    $pdf->setRightMargin(80);
    $x = $pdf->getX();
    $y = $pdf->getY();
    $pdf->SetFont('courier', '', 10);
    $pdf->cell(100, 5, $pdf->write(5, $exp1_highlights), 0, 1, 'L');

    $pdf->ln(5);

    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $exp2_cmpname);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $exp2_period);
    $pdf->ln();
    $pdf->createCell(5, $exp2_role);
    $pdf->ln(5);

    $pdf->setRightMargin(80);
    $x = $pdf->getX();
    $y = $pdf->getY();
    $pdf->SetFont('courier', '', 10);
    $pdf->cell(100, 5, $pdf->write(5, $exp2_highlights), 0, 1, 'L');
    $pdf->ln();

    //Education

    $pdf->setFont('courier', 'BU', 14);
    $pdf->write(5, 'Education');
    $pdf->ln(10);

    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $college_name);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $college_period);
    $pdf->ln();
    $pdf->createCell(5, "CGPA - ".$college_cgpa);
    $pdf->ln(5);

    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $seniorschool_name);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $seniorschool_year);
    $pdf->ln();
    $pdf->createCell(5, "Class 12 - ".$seniorschool_percentage);
    $pdf->ln(5);

    $pdf->setFont('courier', 'B', 12);
    $pdf->createCell(5, $school_name);
    $pdf->ln();
    $pdf->setFont('courier', '', 10);
    $pdf->createCell(5, $school_year);
    $pdf->ln();
    $pdf->createCell(5, "Class 10 - ".$school_percentage);
    $pdf->ln(10);

    //Interests

    $pdf->setFont('courier', 'BU', 14);
    $pdf->write(5, 'Interests');
    $pdf->ln(10);

    $pdf->setRightMargin(0);
    $x = $pdf->getX();
    $y = $pdf->getY();
    $pdf->SetFont('courier', '', 10);
    $pdf->cell(100, 5, $pdf->write(5, $interests), 0, 1, 'L');

    $pdf->Output();
?>