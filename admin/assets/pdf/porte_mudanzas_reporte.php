<?php

require('fpdf/fpdf.php');
include('../php/conexion.php');
ob_start();

class PDF extends FPDF
{

    function CuadrosHeader()
    {
        $this->SetFillColor(0, 0, 0);
        $this->SetTextColor(255, 255, 255);
    }
    //Table Styles
    function TablaEstiloNegro()
    {
        $this->SetFillColor(0, 0, 0);
        $this->SetTextColor(255, 255, 255);
        $this->SetDrawColor(0, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B', 8);
    }
    function TablaEstiloAmarillo()
    {
        $this->SetFillColor(255, 255, 0);
        $this->SetTextColor(0, 0, 0);
        $this->SetDrawColor(255, 255, 0);
        $this->SetLineWidth(.1);
        $this->SetFont('', 'B', 7);
    }

    function TablaEstiloRaya()
    {
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(0, 0, 0);
        $this->SetDrawColor(0, 0, 0);
        $this->SetLineWidth(.1);
        $this->SetFont('', 'B', 7);
    }
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        $this->SetX(35);
        // Arial italic 8
        $this->SetFont('Arial', '', 9);
        $this->SetTextColor(151, 151, 151);
        // Número de página
        $this->MultiCell(150, 5, utf8_decode('Este documento es propiedad de Mudanzas Especializadas GANA y queda prohibida la alteración del documento o duplicado parcial o totalmente.'), '', 'C');
    }

    function Data()
    {
        $lista = $_POST['Pedido'];
        $conexion = conectar();
        //Data Origy
        $SelectDataOrigy = "SELECT * FROM origen_pedidos WHERE IdPedido = '$lista'";
        $ExecuteSelectDataOrigy = mysqli_query($conexion, $SelectDataOrigy);
        $rowOrig = mysqli_fetch_assoc($ExecuteSelectDataOrigy);
        //Data Dest
        $SelectDataDest = "SELECT * FROM destino_pedidos WHERE IdPedido = '$lista'";
        $ExecuteSelectDataDest = mysqli_query($conexion, $SelectDataDest);
        $rowDest = mysqli_fetch_assoc($ExecuteSelectDataDest);
        //Info Order
        $SelectDataInfo = "SELECT * FROM informacion_pedidos WHERE IdPedido = '$lista'";
        $ExecuteSelectDataInfo = mysqli_query($conexion, $SelectDataInfo);
        $rowInfo = mysqli_fetch_assoc($ExecuteSelectDataInfo);
        //Asesor Order
        $SelectDataOrder = "SELECT * FROM asignacion_pedidos asigPedidos, registro resg WHERE asigPedidos.IdPedido = '$lista' AND asigPedidos.IdAsesor = resg.IdUsuario";
        $ExecuteSelectDataOrder = mysqli_query($conexion, $SelectDataOrder);
        $rowOrder = mysqli_fetch_assoc($ExecuteSelectDataOrder);
        //Inv Order
        $SelectDataInve = "SELECT * FROM descripcion_pedidos WHERE IdPedido = '$lista'";
        $ExecuteSelectDataInve = mysqli_query($conexion, $SelectDataInve);
        $rowInve = mysqli_fetch_assoc($ExecuteSelectDataInve);
        //Esto lo vas a pasar a una funcion son los datos de la pagina

        $this->SetFont('Arial', 'B', 10);
        $this->Cell(25, 10, 'Tipo de viaje:');
        $this->SetFont('Arial', '', 10);
        $this->Cell(20, 10, utf8_decode($rowInfo["TipoViaje"]));

        $this->SetFont('Arial', 'B', 10);
        $this->Cell(30, 10, 'Quien Contrata:');
        $this->SetFont('Arial', '', 10);
        $this->Cell(40, 10, utf8_decode($rowInfo["Nombre"] . " " . $rowInfo["Apellidos"]));

        $this->Cell(43);
        $this->Image('images/labelcolor.png', 170, 53, 33);

        //--------------------------------------
        $this->Ln(7);
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(8, 10, 'M3:');
        $this->SetFont('Arial', '', 10);
        $metros = 0;
        while ($rowInve = mysqli_fetch_assoc($ExecuteSelectDataInve)) {
            $metros = $metros + (float)$rowInve["Metros"];
        }
        $english_format_number = number_format($metros, 2, '.', '');
        $this->Cell(10, 10, $english_format_number);


        $this->SetFont('Arial', 'B', 10);
        $this->Cell(30, 10, 'Tipo de servicio:');
        $this->SetFont('Arial', '', 10);
        $this->Cell(40, 10, $rowInfo["TipoServicio"]);

        $this->SetFont('Arial', 'B', 10);
        $this->Cell(8, 10, 'Tel:');
        $this->SetFont('Arial', '', 10);
        $this->Cell(10, 10, $rowInfo["Telefono"]);

        //--------------------------------------
        $this->Ln(7);

        $this->SetFont('Arial', 'B', 10);
        $this->Cell(40, 10, utf8_decode('Ejecutiv@ que atendió:'));
        $this->SetFont('Arial', '', 10);
        $this->Cell(48, 10, utf8_decode($rowOrder["Nombre"] . " " . $rowOrder["ApellidoPaterno"] . " " . $rowOrder["ApellidoMaterno"]));

        $this->SetFont('Arial', 'B', 10);
        $this->Cell(10, 10, 'Tel2:');
        $this->SetFont('Arial', '', 10);
        $this->Cell(10, 10, $rowInfo["TelefonoOpcional"]);

        //--------------------------------------
        $this->Ln(7);

        /*$this->SetFont('Arial', 'B', 10);
        $this->Cell(40, 10, utf8_decode('Remitente:'));
        $this->SetFont('Arial', '', 10);
        $this->Cell(40, 10, utf8_decode($rowInfo["Remitente"]));

        $this->SetFont('Arial', 'B', 10);
        $this->Cell(30, 10, 'Destinatario:');
        $this->SetFont('Arial', '', 10);
        $this->Cell(40, 10, $rowInfo["Destinatario"]);*/

        //--------------------------------------
        $this->Ln(16);
        //Tablas
        $this->TablaEstiloNegro();
        $this->Cell(93, 6, "Datos de origen: " . $rowOrig["EstadoLocalidad"] . "," . $rowOrig["Municipio"], 0, 0, 'C', true);
        //------------------
        $this->Cell(6);
        $this->Cell(93, 6, "Datos de destino: " . $rowDest["EstadoLocalidad"] . "," . $rowDest["Municipio"], 0, 0, 'C', true);


        //function Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
        $this->Ln();

        $this->TablaEstiloAmarillo();
        $this->Cell(23, 6, "Remitente:", 'B', 0, 'C', true);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, $rowInfo["Remitente"], 'B', 0, 'L', true);
        $this->Cell(6);
        //----------------
        $this->TablaEstiloAmarillo();
        $this->Cell(23, 6, "Destinatario:", 'B', 0, 'C', true);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, $rowInfo["Destinatario"], 'B', 0, 'L', true);

        $this->Ln(6.1);

        $this->TablaEstiloAmarillo();
        $this->Cell(23, 12, "Direccion:", 'B', 0, 'C', true);
        $this->TablaEstiloRaya();

        $direccionCarga = $rowOrig["EstadoLocalidad"] . "," . $rowOrig["Municipio"] . "," . $rowOrig["CodigoPostal"] . "," . $rowOrig["Colonia"] . " " . $rowOrig["Calle"] . $rowOrig["NumeroExterior"] . "," . $rowOrig["NumeroInterior"];
        $direccionDescarga = $rowDest["EstadoLocalidad"] . "," . $rowDest["Municipio"] . "," . $rowDest["CodigoPostal"] . "," . $rowDest["Colonia"] . " " . $rowDest["Calle"] . $rowDest["NumeroExterior"] . "," . $rowDest["NumeroInterior"];
        $direccionCarga2 = $rowOrig["EstadoLocalidadOpcional"] . "," . $rowOrig["MunicipioOpcional"] . "," . $rowOrig["CodigoPostalOpcional"] . "," . $rowOrig["ColoniaOpcional"] . " " . $rowOrig["CalleOpcional"] . $rowOrig["NumeroExteriorOpcional"] . "," . $rowOrig["NumeroInteriorOpcional"];
        $direccionDescarga2 = $rowDest["EstadoLocalidadOpcional"] . "," . $rowDest["MunicipioOpcional"] . "," . $rowDest["CodigoPostalOpcional"] . "," . $rowDest["ColoniaOpcional"] . " " . $rowDest["CalleOpcional"] . $rowDest["NumeroExteriorOpcional"] . "," . $rowDest["NumeroInteriorOpcional"];;

        $this->Cell(70, 6, $direccionCarga, 'B', 0, 'L', true);
        $this->Cell(6);
        //----------------
        $this->TablaEstiloAmarillo();
        $this->Cell(23, 12, "Direccion:", '', 0, 'C', true);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, $direccionDescarga, 'B', 0, 'L', true);
        $this->Cell(6);
        //----------
        $this->Ln(6.1);

        $this->Cell(23);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, $direccionCarga, 'B', 0, 'L', true);
        $this->Cell(6);
        $this->Cell(6);
        $this->Cell(17);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, $direccionDescarga, 'B', 0, 'L', true);
        $this->Cell(6);

        $this->Ln(6.1);

        //direccion 2
        $this->TablaEstiloAmarillo();
        $this->Cell(23, 12, "Direccion 2:", 'B', 0, 'C', true);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, $direccionCarga2, 'B', 0, 'L', true);
        $this->Cell(6);

        //----------------
        $this->TablaEstiloAmarillo();
        $this->Cell(23, 12, "Direccion 2:", '', 0, 'C', true);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, $direccionDescarga2, 'B', 0, 'L', true);
        $this->Cell(6);

        $this->Ln(6.1);

        $this->Cell(23);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, $direccionCarga2, 'B', 0, 'L', true);
        $this->Cell(6);

        $this->Cell(6);

        $this->Cell(17);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, $direccionDescarga2, 'B', 0, 'L', true);
        $this->Cell(6);

        $this->Ln(6.1);

        //----------------PISO DE descargar y elevador
        $this->TablaEstiloAmarillo();
        $this->Cell(23, 6, "Piso de carga:", 'B', 0, 'C', true);
        $this->TablaEstiloRaya();
        $this->Cell(43, 6, $rowOrig["Piso"], 'B', 0, 'L', true);
        $this->TablaEstiloAmarillo();
        $this->Cell(17, 6, "Elevador:", 'B', 0, 'C', true);
        $this->TablaEstiloRaya();
        $this->Cell(10, 6, $rowOrig["Elevador"], 'B', 0, 'L', true);
        $this->Cell(6);

        //----------------
        $this->TablaEstiloAmarillo();
        $this->Cell(23, 6, "Piso de descarga:", 'B', 0, 'C', true);
        $this->TablaEstiloRaya();
        $this->Cell(43, 6, $rowDest["Piso"], 'B', 0, 'L', true);
        $this->TablaEstiloAmarillo();
        $this->Cell(17, 6, "Elevador:", 'B', 0, 'C', true);
        $this->TablaEstiloRaya();
        $this->Cell(10, 6, $rowDest["Elevador"], 'B', 0, 'L', true);

        $this->Ln(6.1);

        //Fechas y horas
        //Verifica si es compartido o exclusivo
        $compart = $rowInfo["TipoViaje"];
        if ($compart === 'Compartido') {
            $tipoServicio = utf8_decode('Compartido: Se entregará entre 8 y 15 días hábiles después.');
        } else {
            $tipoServicio = utf8_decode('Exclusivo: Se entregará entre 5 y 7 días hábiles después.');
        }
        $this->TablaEstiloAmarillo();
        $this->Cell(23, 24, "Fecha y hora:", 'B', 0, 'C', true);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, '', '', 0, 'L', true);

        $this->Cell(6);

        $this->TablaEstiloAmarillo();
        $this->Cell(23, 24, "Fecha y hora:", 'B', 0, 'C', true);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, $tipoServicio, '', 0, 'L', true);


        $this->Ln(6.1);

        $this->Cell(23);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, $rowInfo["Fecha"], '', 0, 'L', true);
        $this->Cell(6);

        $this->Cell(6);

        $this->Ln(6.1);

        $this->Cell(23);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, $rowInfo["Hora"], '', 0, 'L', true);
        $this->Cell(6);

        $this->Cell(6);
        $this->Ln(6.1);

        $this->Cell(23);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, '', 'B', 0, 'L', true);
        $this->Cell(6);

        $this->Cell(23);
        $this->TablaEstiloRaya();
        $this->Cell(70, 6, '', 'B', 0, 'L', true);
        $this->Cell(6);

        //IMAGEN DE LOS CODIGOS
        $this->Image('images/codigos.png', 10, 155, 190);

        $this->Ln(70);
    }

    function FancyTable($header, $data, $notita, $serviciosAdicionales)
    {
        //Inv Order
        $lista = $_POST['Pedido'];
        $conexion = conectar();
        $SelectDataInve = "SELECT * FROM descripcion_pedidos WHERE IdPedido = '$lista'";
        $ExecuteSelectDataInve = mysqli_query($conexion, $SelectDataInve);
        $this->SetFillColor(0);
        $this->SetTextColor(255);
        $this->SetFont('', 'B', 8);
        $this->Cell(193, 7, 'Inventario Declarado', 1, 0, 'C', true);
        $this->Ln();
        // Colores, ancho de línea y fuente en negrita
        $this->SetFillColor(255, 255, 0);
        $this->SetTextColor(0, 0, 0);
        $this->SetDrawColor(255, 255, 0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B', 8);
        // Cabecera
        $w = array(12, 57, 25, 5, 12, 57, 25);
        for ($i = 0; $i < count($header); $i++) {
            if ($header[$i] == '') {
                $this->SetFillColor(255, 255, 255);
                $this->SetTextColor(255, 255, 255);
                $this->SetDrawColor(255, 255, 255);
                $this->SetLineWidth(.3);
                $this->SetFont('', 'B', 8);
                $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
            } else {
                $this->SetFillColor(255, 255, 0);
                $this->SetTextColor(0, 0, 0);
                $this->SetDrawColor(255, 255, 0);
                $this->SetLineWidth(.3);
                $this->SetFont('', 'B', 8);
                $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
            }
        }
        $this->Ln();
        // Restauración de colores y fuentes
        $this->SetFillColor(224, 235, 255);
        $this->SetLineWidth(.1);
        $this->SetTextColor(0);
        $this->SetDrawColor(0);
        $cantidad = [27];
        $descripcion = [27];
        $this->SetFont('');
        $j = 0;
        while ($rowInve = mysqli_fetch_assoc($ExecuteSelectDataInve)) {
            $cantidad[$j] = $rowInve["Cantidad"];
            $descripcion[$j] = $rowInve["Descripcion"];
            $j = $j + 1;
        }
        $cantidadAlmacenados = count($cantidad);
        if ($cantidadAlmacenados < 28) {
            for ($k = $cantidadAlmacenados; $k <= 28; $k++) {
                $cantidad[$k] = "";
                $descripcion[$k] = "";
            }
        }

        for ($i = 0; $i < 28; $i++) {
            //   echo $data[$i];
            if ($cantidad[$i] == "") {
                // echo "v";
            }
        }
        // Datos
        $fill = false;
        $j = 0;
        for ($i = 0; $i < 28; $i++) {

            $this->SetLineWidth(.1);
            $this->Cell($w[0], 6, $cantidad[$i], 'B', 0, 'C', $fill);
            $this->Cell($w[1], 6, utf8_decode($descripcion[$i]), 'B', 0, 'C', $fill);
            $this->Cell($w[2], 6, '', 'B', 0, 'C', $fill);
            $this->Cell(5, 6, '', '', 0, 'L');

            if ($i < 23) {
                $this->Cell($w[4], 6, $cantidad[6 + $i], 'B', 0, 'C', $fill);
                $this->Cell($w[5], 6, utf8_decode($descripcion[6 + $i]), 'B', 0, 'C', $fill);
                $this->Cell($w[6], 6, '', 'B', 0, 'C', $fill);
            }

            //notas adicionales
            if ($i == 24) {
                $this->SetFillColor(255, 255, 0);
                $this->SetTextColor(0);
                $this->SetFont('', 'B', 8);
                $this->Cell(94, 7, utf8_decode('Servicios Adicionales Incluidos'), 0, 0, 'C', true);
                $this->SetFont('');
            }

            if ($i > 24) {
                $chunks = str_split(utf8_decode($serviciosAdicionales), 71);
                $this->Cell(94, 6, $chunks[$j], 'B', 0, 'L', false);
                $j = $j + 1;
            }
            $this->Ln();
            if ($i == 22) {
                $this->Ln();
            }
        }
    }
    function NotasTable($notas)
    {
        // Colores, ancho de línea y fuente en negrita
        $this->SetFillColor(255);
        $this->SetTextColor(255, 0, 0);
        $this->SetDrawColor(0);
        $this->SetLineWidth(.1);
        $this->SetFont('', 'B', 8);
        // Cabecera
        $this->Cell(193, 6, "Notas importantes:", 'B', 0, 'L', true);
        $this->Ln();
        // Restauración de colores y fuentes
        $this->SetFillColor(255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Datos
        $fill = true;
        $chunks = str_split($notas, 143);
        foreach ($chunks as $row) {
            $this->Cell(193, 6, $row, 'B', 0, 'L', false);
            $this->Ln();
        }
        // Línea de cierre
        $this->Cell(120, 0, '', 'T');
    }

    function pagadoPaid($header, $data, $nota, $servicio1, $servicio2, $servicio3, $servicio4, $servicio5, $servicio6, $abono, $abono2, $iva, $subtotal, $ahPagado, $aPagar)
    {
        //Notas
        $this->NotasTable(utf8_decode($nota));
        // Colores, ancho de línea y fuente en negrita
        $this->Ln(10);
        //Descripcion Servicio
        $this->DescripcionServicio($servicio1, $servicio2, $servicio3, $servicio4, $servicio5, $servicio6, $abono, $abono2, $iva, $subtotal, $ahPagado, $aPagar);
    }

    //Descripcion del servicio
    function DescripcionServicio($servicio1, $servicio2, $servicio3, $servicio4, $servicio5, $servicio6, $abono, $abono2, $iva, $subtotal, $ahPagado, $aPagar)
    {
        $this->SetFillColor(0);
        $this->SetTextColor(255);
        $this->SetFont('', 'B', 8);
        $this->Cell(193, 7, utf8_decode('Descripción de Servicio'), 1, 0, 'C', true);
        $this->Ln();
        $this->SetFillColor(255, 255, 0);
        $this->SetTextColor(0);
        $this->Cell(94, 7, utf8_decode('El servicio incluye'), 0, 0, 'C', true);
        $this->SetFillColor(255);
        $this->Cell(5, 7, '', 0, 0, 'C', true);

        $this->Ln();

        //aqui empiezan los datos modificables
        $this->SetFillColor(255);
        $arrayM = [
            utf8_decode($servicio1), utf8_decode($servicio2), utf8_decode($servicio3),
            utf8_decode($servicio4), utf8_decode($servicio5), utf8_decode($servicio6)
        ];

        for ($i = 0; $i < 6; $i++) {
            $this->SetFillColor(255);
            $this->SetTextColor(0);
            if (!$arrayM[$i]) {
                $this->Cell(15, 7, '', 0, 0, 'C', true);
                $this->Cell(15, 7, '', 0, 0, 'L', true);
                if ($i == 0) {
                    $this->Cell(115);
                    $this->Cell(15, 7, 'Subtotal', 0, 0, 'R', true);
                    $this->SetTextColor(255, 0, 0);
                    $this->Cell(3, 7, '$', 0, 0, 'C', true);
                    $this->SetTextColor(0);
                    $this->Cell(15, 7, $subtotal, 0, 0, 'L', true);
                }
                if ($i == 1) {
                    $this->Cell(115);
                    $this->Cell(15, 7, 'IVA', 0, 0, 'R', true);
                    $this->SetTextColor(255, 0, 0);
                    $this->Cell(3, 7, '$', 'T', 0, 'C', true);
                    $this->SetTextColor(0);
                    $this->Cell(30, 7, $iva, 'T', 0, 'L', true);
                }
                if ($i == 2) {
                    //raya invisible
                    $this->Cell(115);
                    $this->Cell(15, 7, '', 0, 0, 'L', true);
                    $this->SetTextColor(255, 0, 0);
                    $this->Cell(3, 7, '', 'T', 0, 'L', true);
                    $this->SetTextColor(0);
                    $this->Cell(30, 7, '', 'T', 0, 'L', true);
                }

                if ($i == 3) {
                    if ($subtotal !== '' || $iva !== '') {
                        $resultado =  sprintf("%.2f", ($subtotal + $iva));
                        $this->Cell(115);
                        $this->Cell(15, 7, 'Total', 0, 0, 'R', true);
                        $this->SetTextColor(255, 0, 0);
                        $this->Cell(3, 7, '$', 0, 0, 'C', true);
                        $this->SetTextColor(0);
                        $this->Cell(15, 7, $resultado, 0, 0, 'L', true);
                    } else {
                        $this->Cell(115);
                        $this->Cell(15, 7, 'Total', 0, 0, 'R', true);
                        $this->SetTextColor(255, 0, 0);
                        $this->Cell(3, 7, '$', 0, 0, 'C', true);
                        $this->SetTextColor(0);
                        $this->Cell(15, 7, $aPagar, 0, 0, 'L', true);
                    }
                }
                if ($i == 4) {
                    $this->Cell(83);
                    $this->Cell(47, 7, 'Importe con letra:', 'B', 0, 'L', true);
                    $this->SetTextColor(255, 0, 0);
                    $this->SetTextColor(0);
                    $this->Cell(33, 7, 'pesos', 'TB', 0, 'R', true);
                }
                $this->Ln();
            } else {
                $this->Cell(15, 7, ($i + 1) . '.', 0, 0, 'C', true);
                $this->Cell(15, 7, $arrayM[$i], 0, 0, 'L', true);
                if ($i == 0) {
                }
                if ($i == 1) {
                }
                if ($i == 2) {
                }
                if ($i == 3) {
                    if ($subtotal !== '' || $iva !== '') {
                    } else {
                    }
                }
                if ($i == 4) {
                }
                $this->Ln();
            }
        }
        $this->Ln(6);

        $this->Ln(18);
        //Firmas
        $this->SetFillColor(255, 255, 0);
        $this->SetTextColor(0);
        $this->Cell(27, 6, utf8_decode('Observaciones'), 0, 0, 'C', true);
        $this->SetFillColor(255);
        $this->Cell(5);
        $this->Cell(70, 6, utf8_decode(''), 0, 0, 'C', true);
        $this->SetFillColor(255);
        $this->Cell(5);

        //CONFORMIDAD
        $this->SetFillColor(255, 255, 0);
        $this->SetTextColor(0);
        $this->Cell(27, 6, utf8_decode('Recibí de '), 0, 0, 'C', true);
        $this->SetFillColor(255);
        $this->Cell(5);
        $this->Cell(70, 6, utf8_decode(''), 0, 0, 'C', true);
        $this->SetFillColor(255);

        $this->Ln();

        $this->SetFillColor(255, 255, 0);
        $this->SetTextColor(0);
        $this->Cell(27, 6, utf8_decode('del servicio'), 0, 0, 'C', true);
        $this->SetFillColor(255);
        $this->Cell(5);
        $this->Cell(70, 6, utf8_decode(''), 'TB', 0, 'C', true);
        $this->SetFillColor(255);
        $this->Cell(5);

        //CONFORMIDAD
        $this->SetFillColor(255, 255, 0);
        $this->SetTextColor(0);
        $this->Cell(27, 6, utf8_decode('conformidad'), 0, 0, 'C', true);
        $this->SetFillColor(255);
        $this->Cell(5);
        $this->Cell(70, 6, utf8_decode(''), 0, 0, 'C', true);
        $this->SetFillColor(255);
        $this->Ln();

        //firma
        $this->SetFillColor(255);
        $this->SetTextColor(255, 0, 0);
        $this->Cell(139);
        $this->Cell(54, 6, utf8_decode('Firma de conformidad'), 'T', 0, 'C', true);
        $this->Ln(52);
    }

    // Header Individual
    function HeaderMudanzas($creado)
    {
        // Logo
        $temp_arr = $_POST['Pedido'];
        $id_service = $temp_arr;
        $this->Image('images/LOGO-GANA-.png', 10, 8, 33);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 10);
        // Movernos a la derecha
        $this->Cell(64.5);
        // Título
        $this->Cell(30, 10, 'Mudanzas Especializadas GANA');
        // Cuadros negros y blancos
        $this->Cell(60);
        $this->SetFillColor(0, 0, 0);
        $this->SetTextColor(255, 255, 255);
        $this->SetDrawColor(0, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B', 8);
        $this->Cell(40, 6, "Folio", 1, 0, 'C', true);

        $this->Ln(4);

        $this->Cell(74);
        $this->SetTextColor(0, 0, 0);

        $this->Cell(30, 10, 'Jesus Garfias Navarrete');
        $this->Cell(50.5);

        $this->SetFillColor(255, 255, 0);
        $this->Cell(40, 10, $id_service, 0, 0, 'C', false);

        $this->Ln(4);

        $this->Cell(75);
        $this->Cell(30, 10, 'RFC: GANJ660219HSA');
        $this->Cell(49.5);

        $this->Ln(4);

        $this->Cell(44.5);
        $this->SetTextColor(0, 0, 0);

        $this->SetFont('Arial', '', 8);
        $this->Cell(30, 10, 'AV. DE JESUS #1260H COL. VALLE DE LA MISERICORDIA C.P. 45615');
        $this->Cell(80);
        $this->SetFillColor(0, 0, 0);
        $this->SetTextColor(255, 255, 255);
        $this->SetDrawColor(0, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B', 8);
        $this->Cell(40, 6, "Fecha de expedicion", 1, 0, 'C', true);
        $this->Ln(4);
        $this->Cell(75.5);
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Arial', '', 8);
        $this->Cell(30, 10, 'TLAQUEPAQUE, JAL.');
        $this->Cell(49);
        $this->SetFont('', 'B', 8);
        $this->Cell(40, 10, $creado, 0, 0, 'C', false);
        $this->Ln(4);
        $this->Cell(55);
        $this->SetFont('Arial', '', 8);
        $this->Cell(30, 10, 'Contacto: WhatssApp. 3315182396 Tel. 3316525254');

        $this->Ln(4);
        $this->Cell(62.5);
        $this->Cell(30, 10, 'Email: embarques@mudanzasgana.com');
        $this->Ln(5);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(73.5);

        $this->SetX(83);
        $this->Cell(30, 17, utf8_decode('Carta Cotización'));
        $this->Cell(51);
        $this->SetFillColor(0, 0, 0);
        $this->SetTextColor(255, 255, 255);
        $this->SetDrawColor(0, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B', 8);
        $this->Cell(40, 6, "Lugar de expedicion", 1, 0, 'C', true);
        $this->SetTextColor(0);

        $this->Ln(5);

        $this->Cell(155);
        $this->SetFont('', 'B', 8);
        $this->Cell(40, 10, 'Guadalajara, JAL', 0, 0, 'C', false);
        // Salto de línea
        $this->Ln(8);
    }


    //Pagina Intro
    function Pagina1()
    {
        $this->Image('images/Pagina1.png', 1, 2, 210, 265);
    }

    //Pagina de servicios Individuales
    function Pagina2()
    {
        $this->Image('images/servicio_todos.png', 3, 10, 205, 265);
    }

    function Pagina3()
    {
        $this->Image('images/contacto.png', 1, 2, 206, 165);
    }
}

$pdf = new PDF('P', 'mm', array(216, 300));
$pdf->AddPage();
$pdf->Pagina1();
$pdf->AddPage();
$header = array('Cant.', utf8_decode('Artículo'), utf8_decode('Observación'), '', 'Cant.', utf8_decode('Artículo'), utf8_decode('Observación'));
$creado =  date("d") . '/' . date("m") . '/' . date("y");
$lista = $_POST['Pedido'];
$conexion = conectar();
//Price Order
$SelectDataPrice = "SELECT * FROM costo_pedidos WHERE IdPedido = '$lista'";
$ExecuteSelectDataPrice = mysqli_query($conexion, $SelectDataPrice);
$rowPrice = mysqli_fetch_assoc($ExecuteSelectDataPrice);
//Adicionales Order
$SelectDataAdic = "SELECT * FROM adicionales_pedidos WHERE IdPedido = '$lista'";
$ExecuteSelectDataAdic = mysqli_query($conexion, $SelectDataAdic);
$rowAdic = mysqli_fetch_assoc($ExecuteSelectDataAdic);
//ah pagado
$pagar = (float)$rowPrice['Subtotal'] - (float)$rowPrice['Retenido'] + (float)$rowPrice['Iva'];
$ahPagado = $rowPrice['EstadoPago'];
$aPagar = $pagar;
//Variables Undifined
$notita = "";
$serviciosAdicionales = "";
if ($rowAdic["CargaExtra"] == "Si") {
    $serviciosAdicionales = $serviciosAdicionales . "Carga Extra";
} else {
    $serviciosAdicionales = $serviciosAdicionales;
}
if ($rowAdic["Voladuras"] == "Si") {
    $serviciosAdicionales = $serviciosAdicionales . ", Voladuras";
} else {
    $serviciosAdicionales = $serviciosAdicionales;
}
if ($rowAdic["SeguroCarga"] == "Si") {
    $serviciosAdicionales = $serviciosAdicionales . ", Seguro de Carga";
} else {
    $serviciosAdicionales = $serviciosAdicionales;
}
if ($rowAdic["AcarreosAdicionales"] == "Si") {
    $serviciosAdicionales = $serviciosAdicionales . ", Acarreos Adicionales";
} else {
    $serviciosAdicionales = $serviciosAdicionales;
}
if ($rowAdic["ArmadoDesarmado"] == "Si") {
    $serviciosAdicionales = $serviciosAdicionales . ",Armado y Desarmado";
} else {
    $serviciosAdicionales = $serviciosAdicionales;
}
if ($rowAdic["EmpacadoArticulos"] == "Si") {
    $serviciosAdicionales = $serviciosAdicionales . ",Empacado de articulos en caja";
} else {
    $serviciosAdicionales = $serviciosAdicionales;
}
if ($rowAdic["DesempaqueArticulos"] == "Si") {
    $serviciosAdicionales = $serviciosAdicionales . ",Desempaque de Articulos";
} else {
    $serviciosAdicionales = $serviciosAdicionales;
}
if ($rowAdic["AcomodoArticulos"] == "Si") {
    $serviciosAdicionales = $serviciosAdicionales . ",       Acomodo de Articulos";
} else {
    $serviciosAdicionales = $serviciosAdicionales;
}
$titulo = array('Costo total', 'Pagado', 'A Pagar');
$datillos = array(array($pagar, $rowPrice['EstadoPago'], $aPagar));
$iva = (float)$rowPrice["Iva"];
$abono = (float)$rowPrice["Anticipo"];
$abono2 = (float)$rowPrice["Anticipo2"];
$subtotal = (float)$rowPrice["Subtotal"];
$servicio1   = "Unidad caja cerrada";
$servicio2   = "Protección de Muebles (EMAPAQUE BASICO)";
$servicio3   = "Maniobra de Carga";
$servicio4   = "Traslado";
$servicio5   = "Maniobra de Descarga";
$servicio6   = "Acomodo de Muebles en Destino";
$inventario = [20];
$i = 0;
$data = array();

$pdf->SetFont('Arial', 'B', 10);
$pdf->HeaderMudanzas($creado);
$pdf->Data();
$pdf->FancyTable($header, $data, $notita, $serviciosAdicionales);
$pdf->Ln();
$pdf->pagadoPaid($titulo, $datillos, $notita, $servicio1, $servicio2, $servicio3, $servicio4, $servicio5, $servicio6, $abono, $abono2, $iva, $subtotal, $ahPagado, $aPagar);

//Paginas siguientes
$pdf->AddPage();
$pdf->Pagina2();
$pdf->AddPage();
$pdf->Pagina3();

$pdf->Output();
ob_end_flush();
