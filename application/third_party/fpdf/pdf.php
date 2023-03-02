<?php
require('fpdf.php');
$curp = $_GET["curp"];
//echo $curp;
class PDF extends FPDF
{

// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../images/cetis.jpg',30,8,15);
    $this->Image('../images/sep1.png',160,8,15);
    $this->Image('../images/UEMSTIS.png',180,8,15);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(80,10,utf8_decode('Ficha de preinscripción'),1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',4);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
    
require 'conexion.php';

//$consulta = "SELECT * FROM aspirantes WHERE CURP ='$curp'";
//$resultado = $conexion->query($consulta);
$resultado = $conexion->query("SELECT * FROM aspirantes WHERE CURP={$curp}");
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B', 8);
$row = $resultado->fetch_assoc();

    $pdf->Cell(30,10,utf8_decode('Número de ficha'), 0, 0, 'L', 0);
    $pdf->Cell(30, 10, $row['noficha'], 1, 0, 'C', 0);
    $pdf->Cell(60,10,utf8_decode('Fecha de inscripción    '), 0, 0, 'R', 0);
    $pdf->Cell(30, 10, $row['fechainscripcion'], 1, 1, 'C', 0);
    
    $pdf->Cell(40,10,utf8_decode('->Datos personales'), 0, 1, 'C', 0);
    $pdf->Cell(40,10,utf8_decode('Apellido Paterno'), 0, 0, 'C', 0);
    $pdf->Cell(40,10,utf8_decode('         Apellido Materno'), 0, 0, 'C', 0);
    $pdf->Cell(40,10,utf8_decode('                     Nombre(s)'), 0, 1, 'C', 0);
    $pdf->Cell(50, 10, utf8_decode($row['apellidop']), 1, 0, 'C', 0);
    $pdf->Cell(50, 10, utf8_decode($row['apellidom']), 1, 0, 'C', 0);
    $pdf->Cell(90, 10, utf8_decode($row['nombre']), 1, 1, 'C', 0);
    $pdf->Cell(40,10,utf8_decode('Fecha de nacimiento'), 0, 0, 'C', 0);
    $pdf->Cell(40,10,utf8_decode('CURP'), 0, 1, 'C', 0);
    $pdf->Cell(40, 10, $row['fechanacimiento'], 1, 0, 'C', 0);
    $pdf->Cell(80, 10, $row['CURP'], 1, 1, 'C', 0);
    
    $pdf->Cell(40,10,utf8_decode('->Domicilio'), 0, 1, 'C', 0);
    $pdf->Cell(25,10,utf8_decode('Calle'), 0, 0, 'C', 0);
    $pdf->Cell(40,10,utf8_decode('Número de casa'), 0, 0, 'C', 0);
    $pdf->Cell(40,10,utf8_decode('Colonia'), 0, 0, 'C', 0);
    $pdf->Cell(40,10,utf8_decode('Población'), 0, 1, 'C', 0);
    $pdf->Cell(30, 10, utf8_decode($row['calle']), 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['numerocasa'], 1, 0, 'C', 0);
    $pdf->Cell(50, 10, utf8_decode($row['colonia']), 1, 0, 'C', 0);
    $pdf->Cell(50, 10, utf8_decode($row['poblacion']), 1, 1, 'C', 0);
    $pdf->Cell(30,10,utf8_decode('Código Postal'), 0, 0, 'C', 0);
    $pdf->Cell(40,10,utf8_decode('Número de telefono'), 0, 1, 'C', 0);
    $pdf->Cell(30, 10, $row['codigopostal'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['telefono'], 1, 1, 'C', 0);
    
    $pdf->Cell(40,10,utf8_decode('->Datos del padre o tutor'), 0, 1, 'C', 0);
    $pdf->Cell(40,10,utf8_decode('Nombre del padre o tutor'), 0, 0, 'C', 0);
    $pdf->Cell(40,10,utf8_decode('                                                                                                                                                                                    Número de telefono'), 0, 1, 'C', 0);
    $pdf->Cell(120, 10, utf8_decode($row['nombrepadreotutor']), 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['celular'], 1, 1, 'C', 0);
    
    $pdf->Cell(40,10,utf8_decode('->Datos de escuela de procedencia'), 0, 1, 'C', 0);
    $pdf->Cell(80,10,utf8_decode('Escuela de procedencia'), 0, 0, 'C', 0);
    $pdf->Cell(40,10,utf8_decode('Clave de escuela'), 0, 0, 'C', 0);
    $pdf->Cell(40,10,utf8_decode('Promedio'), 0, 1, 'C', 0);
    $pdf->Cell(80, 10, utf8_decode($row['escuelaprocedencia']), 1, 0, 'C', 0);
    $pdf->Cell(40, 10, utf8_decode($row['claveescuela']), 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['promedio'], 1, 1, 'C', 0);
    
    $pdf->Cell(40,10,utf8_decode('->Lista de carreras que eligió por orden'), 0, 1, 'C', 0);
    $pdf->Cell(60, 10, utf8_decode($row['carrera1']), 1, 1, 'C', 0);
    $pdf->Cell(60, 10, utf8_decode($row['carrera2']), 1, 1, 'C', 0);
    $pdf->Cell(60, 10, utf8_decode($row['carrera3']), 1, 1, 'C', 0);
    $pdf->Cell(60, 10, utf8_decode($row['carrera4']), 1, 1, 'C', 0);
    $pdf->Cell(60, 10, utf8_decode($row['carrera5']), 1, 1, 'C', 0);
    $pdf->Image('../Images/margen.jpg',110,208,30);
    $pdf->AddPage();
    $pdf->Image('../Images/complementopreinscripcion2020.jpg',10,30,200);


$pdf->Output();
?>