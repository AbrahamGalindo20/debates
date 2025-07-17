<?php
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

include './../../assets/php/conexion.php';
$conexion = conectar();

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

//Sheets  Styles
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
    'font' => [
        'bold' => true,
        'name' => 'Arial',
    ],
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
        'startColor' => [
            'rgb' => '5353EC', // Código de color verde
        ],
    ],
];


//Header Sheet
$sheet->setCellValue('A1', 'Usuario');
$sheet->setCellValue('B1', 'Genero');
$sheet->setCellValue('C1', 'Edad');
$sheet->setCellValue('D1', 'Ip');
$sheet->setCellValue('E1', 'Navegador');
$sheet->setCellValue('F1', 'Dispositivo');
$sheet->setCellValue('G1', 'Fecha');
$sheet->setCellValue('H1', 'Hora');
$sheet->setCellValue('I1', 'Accion');
$sheet->setCellValue('J1', 'Categoria');
//Align Data Horizontal
$sheet->getStyle('A1')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setWrapText(true);
$sheet->getStyle('B1')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setWrapText(true);
$sheet->getStyle('C1')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setWrapText(true);
$sheet->getStyle('D1')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setWrapText(true);
$sheet->getStyle('E1')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setWrapText(true);
$sheet->getStyle('F1')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setWrapText(true);
$sheet->getStyle('G1')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setWrapText(true);
$sheet->getStyle('H1')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setWrapText(true);
$sheet->getStyle('I1')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setWrapText(true);
$sheet->getStyle('J1')->applyFromArray($styleArray)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)->setWrapText(true);
//Align Data Vertical
$sheet->getStyle('A1')->applyFromArray($styleArray)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)->setWrapText(true);
$sheet->getStyle('B1')->applyFromArray($styleArray)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)->setWrapText(true);
$sheet->getStyle('C1')->applyFromArray($styleArray)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)->setWrapText(true);
$sheet->getStyle('D1')->applyFromArray($styleArray)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)->setWrapText(true);
$sheet->getStyle('E1')->applyFromArray($styleArray)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)->setWrapText(true);
$sheet->getStyle('F1')->applyFromArray($styleArray)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)->setWrapText(true);
$sheet->getStyle('G1')->applyFromArray($styleArray)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)->setWrapText(true);
$sheet->getStyle('H1')->applyFromArray($styleArray)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)->setWrapText(true);
$sheet->getStyle('I1')->applyFromArray($styleArray)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)->setWrapText(true);
$sheet->getStyle('J1')->applyFromArray($styleArray)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER)->setWrapText(true);

$sheet->getRowDimension(1)->setRowHeight(30);
$sheet->getColumnDimension('A')->setwidth(25);
$sheet->getColumnDimension('B')->setwidth(25);
$sheet->getColumnDimension('C')->setwidth(25);
$sheet->getColumnDimension('D')->setwidth(15);
$sheet->getColumnDimension('E')->setwidth(25);
$sheet->getColumnDimension('F')->setwidth(25);
$sheet->getColumnDimension('G')->setwidth(25);
$sheet->getColumnDimension('H')->setwidth(25);
$sheet->getColumnDimension('I')->setwidth(30);
$sheet->getColumnDimension('J')->setwidth(30);
$filterRange = 'A1:J1';
$sheet->setAutoFilter($filterRange);
$Num = 2;

$dataEmployee = "SELECT * FROM estadisticasip ORDER BY Fecha ASC";
$consultEmployee = mysqli_query($conexion, $dataEmployee);

while ($row = mysqli_fetch_assoc($consultEmployee)) {

    $A = 'A' . $Num;
    $B = 'B' . $Num;
    $C = 'C' . $Num;
    $D = 'D' . $Num;
    $E = 'E' . $Num;
    $F = 'F' . $Num;
    $G = 'G' . $Num;
    $H = 'H' . $Num;
    $I = 'I' . $Num;
    $J = 'J' . $Num;
    $idUsuario =  $row['username'];
    $sqlUser = "SELECT * FROM usuarios WHERE id = '$idUsuario'";
    $queryUser = mysqli_query($conexion, $sqlUser);
    $assocUser = mysqli_fetch_assoc($queryUser);
    $Genero = $assocUser['sexo'];
    $Edad = $assocUser['edad'];

    $sheet->setCellValue($A, $row['username']);
    $sheet->setCellValue($B, $Genero);
    $sheet->setCellValue($C, $Edad);
    $sheet->setCellValue($D, $row['ip']);
    $sheet->setCellValue($E, substr($row['navegador'], -30));
    $sheet->setCellValue($F, $row['dispositivo']);
    $sheet->setCellValue($G, $row['fecha']);
    $sheet->setCellValue($H, $row['hora']);
    $sheet->setCellValue($I, $row['accion']);
    $conexion = conectar();
    $idSala = $row['idSala'];
    $selectSala = "SELECT * FROM salas WHERE id = '$idSala'";
    $querySala = mysqli_query($conexion, $selectSala);
    $assocSala = mysqli_fetch_assoc($querySala);
    $idCategoria = $assocSala['categoria'];
    $conexion = conectar();
    $selectCategoria = "SELECT * FROM categorias WHERE id = '$idCategoria'";
    $queryCategoria = mysqli_query($conexion, $selectCategoria);
    $assocCategoria = mysqli_fetch_assoc($queryCategoria);
    $categoria = $assocCategoria['nombre'];
    $sheet->setCellValue($J, $categoria);
    $Num++;
}

$writer = new Xlsx($spreadsheet);

$writer->save('EstadisticasIp.xlsx');

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="EstadisticasIp.xlsx"');
header('Cache-Control: max-age=0');

$writer->save('php://output');
