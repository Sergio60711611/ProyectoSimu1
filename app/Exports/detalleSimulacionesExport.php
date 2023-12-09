<?php

namespace App\Exports;

use App\Models\Simulaciones;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;

class detalleSimulacionesExport implements FromView, WithStyles , WithDrawings
{
    protected $simulacion;
    protected $cliente;
    protected $simulacionIt; 
    protected $simulacionMeses; 
    protected $counterm;

    public function __construct($simulacion, $cliente, $simulacionIt,$simulacionMeses,$counterm)
    {
        $this->simulacion = $simulacion;
        $this->cliente = $cliente;
        $this->simulacionIt = $simulacionIt;
        $this->simulacionMeses = $simulacionMeses;
        $this->counterm = $counterm;
    }

    public function view(): View
    {
        return view('excel', [
            'simulaciones' => $this->simulacion,
            'cliente' => $this->cliente,
            'simulacionIt' => $this->simulacionIt,
            'simulacionMeses' => $this->simulacionMeses,
            'counterm' => $this->counterm,
        ]);
    }

    public function styles($sheet)
    {
        $sheet->getColumnDimension('B')->setWidth(12);
        $sheet->getColumnDimension('C')->setWidth(22);
        $sheet->getColumnDimension('D')->setWidth(17);
        $sheet->getColumnDimension('E')->setWidth(22);
        $sheet->getColumnDimension('F')->setWidth(12);

        $sheet->getRowDimension(2)->setRowHeight(67);
        $sheet->getRowDimension(3)->setRowHeight(34);
        $sheet->getRowDimension(5)->setRowHeight(20);
        $sheet->getRowDimension(6)->setRowHeight(20);
        $sheet->getRowDimension(7)->setRowHeight(20);
        $sheet->getRowDimension(38)->setRowHeight(48);
        $sheet->getRowDimension(32)->setRowHeight(30);

        $sheet->getStyle('B3')->getAlignment()->setHorizontal('left');
        $sheet->getStyle('B5')->getAlignment()->setHorizontal('left');
        $sheet->getStyle('B6')->getAlignment()->setHorizontal('left');
        $sheet->getStyle('B7')->getAlignment()->setHorizontal('left');
        $sheet->getStyle('2:2')->getAlignment()->setHorizontal('center');

        $sheet->mergeCells('C2:E2');
        $sheet->mergeCells('B3:F3');
        $sheet->mergeCells('B5:C5');
        $sheet->mergeCells('E5:F5');
        $sheet->mergeCells('B6:C6');
        $sheet->mergeCells('E6:F6');
        $sheet->mergeCells('B7:C7');
        $sheet->mergeCells('E6:F6');

        $sheet->mergeCells('B9:F9');
        $sheet->mergeCells('B10:E10');
        $sheet->mergeCells('B11:E11');
        $sheet->mergeCells('B12:E12');
        $sheet->mergeCells('B13:E13');
        $sheet->mergeCells('B14:E14');
        $sheet->mergeCells('B15:E15');

        $sheet->mergeCells('B17:F17');
        $sheet->mergeCells('B32:F32');
        $sheet->mergeCells('E34:F34');
        $sheet->mergeCells('E35:F35');
        $sheet->mergeCells('E36:F36');
        $sheet->mergeCells('B38:F38');

        $sheet->getStyle('B2:F2')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('B8:K8')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);

        $sheet->setCellValue('C2', 'Simulacion Oficina 11');

        $sheet->setCellValue('B3', 'Esta simulación se realizo para simular el caso 1 del problema de ventas al por menor, con el fin de que el vendedor de revistas encuentre la política óptima de compra.');
        $sheet->getStyle('B3')->getAlignment()->setWrapText(true);

        $sheet->setCellValue('B5', 'Cliente que realizó la simulaciones');
        $sheet->setCellValue('B6', 'Nombre: ' . $this->cliente->nombre);
        $sheet->setCellValue('B7', 'Correo: ' . $this->cliente->correo);
        $sheet->setCellValue('E5', 'Detalles de la simulación realizada');
        $sheet->setCellValue('E6', 'N° de Simulación:' . $this->counterm);
        if ($this->simulacion->tipo == 1) {
            $sheet->setCellValue('E7', 'Tipo de Simulación: Automática');
        } elseif ($this->simulacion->tipo == 2) {
            $sheet->setCellValue('E7', 'Tipo de Simulación: Ingresando valores de cantidad');
        }

        $sheet->setCellValue('B9', 'DETALLE DE VALORES-DATOS DE LA SIMULACIÓN');
        $sheet->setCellValue('B10', 'Costo de Compra (10 días)');
        $sheet->setCellValue('F10', $this->simulacion-> c10 .' Bs.');
        $sheet->setCellValue('B11', 'Costo de Venta (10 días)');
        $sheet->setCellValue('F11', $this->simulacion-> v10 .' Bs.');
        $sheet->setCellValue('B12', 'Costo de Devolución (10 días)');
        $sheet->setCellValue('F12', $this->simulacion-> d10 .' Bs.');
        $sheet->setCellValue('B13', 'Costo de Compra (20 días)');
        $sheet->setCellValue('F13', $this->simulacion-> c20 .' Bs.');
        $sheet->setCellValue('B14', 'Costo de Venta (20 días)');
        $sheet->setCellValue('F14', $this->simulacion-> v20 .' Bs.');
        $sheet->setCellValue('B15', 'Costo de Devolución (20 días)');
        $sheet->setCellValue('F15', $this->simulacion-> d20 .' Bs.');

        $sheet->setCellValue('B17', 'DETALLE DE LA SIMULACIÓN');
        $sheet->setCellValue('B18', 'Mes');
        $sheet->setCellValue('B19', 'Mes 1');$sheet->setCellValue('B20', 'Mes 2');$sheet->setCellValue('B21', 'Mes 3');$sheet->setCellValue('B22', 'Mes 4');$sheet->setCellValue('B23', 'Mes 5');$sheet->setCellValue('B24', 'Mes 6');
        $sheet->setCellValue('B25', 'Mes 7');$sheet->setCellValue('B26', 'Mes 8');$sheet->setCellValue('B27', 'Mes 9');$sheet->setCellValue('B28', 'Mes 10');$sheet->setCellValue('B29', 'Mes 11');$sheet->setCellValue('B30', 'Mes 12');
        $sheet->setCellValue('C18', 'Utilidad Neta del Mes');
        $sheet->setCellValue('E18', 'N° de Iteración');
        $sheet->setCellValue('E19', 'Iteración 1');$sheet->setCellValue('E20', 'Iteración 2');$sheet->setCellValue('E21', 'Iteración 3');$sheet->setCellValue('E22', 'Iteración 4');
        $sheet->setCellValue('F18', 'Promedio');

        $sheet->setCellValue('B32', 'Se realizaron cuatro Iteraciones, en cada una de las cuales se obtuvo el promedio de utilidades netas de doce meses. Se obtuvo entonces los siguientes resultados:');
        $sheet->getStyle('B32')->getAlignment()->setWrapText(true);
        $sheet->setCellValue('D34', 'UTILIDAD NETA:');
        $sheet->setCellValue('E34', $this->simulacion->Utilidad.' Bs.');
        $sheet->setCellValue('D35', 'CANTIDAD 1:');
        $sheet->setCellValue('E35', $this->simulacion->Q1.' Uds.');
        $sheet->setCellValue('D36', 'CANTIDAD 2:');
        $sheet->setCellValue('E36', $this->simulacion->Q2.' Uds.');

        if ($this->simulacion->tipo == 1) {
            $sheet->setCellValue('B38', 'Se realizo una Simulación Automática. Con los valores-datos dados el vendedor debera pedir '.$this->simulacion->Q1.' Uds. de revistas los primeros 10 días del mes y '.$this->simulacion->Q2.' Uds. de revistas los siguientes 20 días del mes para así obtener la ganancia máxima posible que es: '.$this->simulacion->Utilidad.' Bs.');
            $sheet->getStyle('B38')->getAlignment()->setWrapText(true);
        } elseif ($this->simulacion->tipo == 2) {
            $sheet->setCellValue('B38', 'Se realizo una Simulación ingresando "Cantidad 1" y "Cantidad 2". Con los valores-datos dados si el vendedor de revistas pide '.$this->simulacion->Q1.' Uds. de revistas los primeros 10 días del mes y '.$this->simulacion->Q2.' Uds. de revistas los siguientes 10 días del mes, entonces obtendra una Utilidad Neta de '.$this->simulacion->Utilidad.' Bs.');
            $sheet->getStyle('B38')->getAlignment()->setWrapText(true);
        }
        
        $sheet->getStyle('B10:F15')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
        $sheet->getStyle('B10:F15')->getBorders()->getAllBorders()->setColor(new \PhpOffice\PhpSpreadsheet\Style\Color(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK));

        $sheet->getStyle('B18:C30')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
        $sheet->getStyle('B18:C30')->getBorders()->getAllBorders()->setColor(new \PhpOffice\PhpSpreadsheet\Style\Color(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK));

        $sheet->getStyle('E18:F22')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
        $sheet->getStyle('E18:F22')->getBorders()->getAllBorders()->setColor(new \PhpOffice\PhpSpreadsheet\Style\Color(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK));

        $sheet->getStyle('B32:F32')->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
        $sheet->getStyle('B32:F32')->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
        $sheet->getStyle('B32:F32')->getBorders()->getAllBorders()->setColor(new \PhpOffice\PhpSpreadsheet\Style\Color(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK));

        $sheet->getStyle('D34:F36')->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
        $sheet->getStyle('D34:F36')->getBorders()->getAllBorders()->setColor(new \PhpOffice\PhpSpreadsheet\Style\Color(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK));

        $sheet->getStyle('C2')->applyFromArray([
            'font' => [
                'color' => ['rgb' => 'FFFFFF'], // Código de color para blanco
                'size' => 14,
                'bold' => true,
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => '4e656e',
                ],
            ],
        ]);
        $sheet->getStyle('B5:F7')->applyFromArray([
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => 'eeeeee',
                ],
            ],
        ]);
        $sheet->getStyle('B5')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
        ]);
        $sheet->getStyle('E5')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
        ]);
        $sheet->getStyle('B9')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
        ]);
        $sheet->getStyle('B17')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
        ]);
        $sheet->getStyle('B18:F18')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
        ]);
        $sheet->getStyle('B38')->applyFromArray([
            'font' => [
                'color' => ['rgb' => 'FFFFFF'],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => '7a8082',
                ],
            ],
        ]);

        $iteraciones = $this->simulacionMeses['utilidad_meses'];
        $inicioColumna = 'C';
        $inicioFila = 18;
        foreach ($iteraciones as $index => $valor) {
            $celda = $inicioColumna . ($inicioFila + $index);
            $sheet->setCellValue($celda, $valor. ' Bs.');
        }

        $iteraciones2 = $this->simulacionIt['utilidad_iteraciones'];
        $inicioColumna2 = 'F';
        $inicioFila2 = 18;
        foreach ($iteraciones2 as $index2 => $valor2) {
            $celda2 = $inicioColumna2 . ($inicioFila2 + $index2);
            $sheet->setCellValue($celda2, $valor2. ' Bs.');
        }

        return [];
    }
    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/img/UMSS.png'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('B2');

        $drawing2 = new Drawing();
        $drawing2->setName('Logo2');
        $drawing2->setDescription('This is my logo2');
        $drawing2->setPath(public_path('/img/ositoIcono.png'));
        $drawing2->setHeight(90);
        $drawing2->setCoordinates('F2');
        return [$drawing, $drawing2];
    }
}
