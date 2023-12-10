<?php

namespace App\Exports;

use App\Models\simulaciones;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;

class simulacionesExport implements FromView, WithStyles , WithDrawings
{
    protected $simulaciones;
    protected $cliente;

    public function __construct($simulaciones, $cliente)
    {
        $this->simulaciones = $simulaciones;
        $this->cliente = $cliente;
    }


    public function view(): View
    {
        return view('excelHistoria', [
            'simulaciones' => $this->simulaciones,
            'cliente' => $this->cliente,
        ]);
    }
    public function styles($sheet)
    {
        $sheet->getColumnDimension('B')->setWidth(15);
        $sheet->getColumnDimension('C')->setWidth(15);
        $sheet->getColumnDimension('D')->setWidth(15);
        $sheet->getColumnDimension('E')->setWidth(15);
        $sheet->getColumnDimension('F')->setWidth(15);
        $sheet->getColumnDimension('G')->setWidth(15);
        $sheet->getColumnDimension('H')->setWidth(15);
        $sheet->getColumnDimension('I')->setWidth(15);
        $sheet->getColumnDimension('J')->setWidth(15);
        $sheet->getColumnDimension('K')->setWidth(15);
        $sheet->getColumnDimension('L')->setWidth(15);

        $sheet->getRowDimension(2)->setRowHeight(67);
        $sheet->getRowDimension(3)->setRowHeight(34);
        $sheet->getRowDimension(4)->setRowHeight(20);
        $sheet->getRowDimension(5)->setRowHeight(20);
        $sheet->getRowDimension(6)->setRowHeight(20);
        $sheet->getStyle('C2')->getAlignment()->setHorizontal('center');
        $sheet->getStyle('B3')->getAlignment()->setHorizontal('left');
        $sheet->getStyle('B4')->getAlignment()->setHorizontal('left');
        $sheet->getStyle('B5')->getAlignment()->setHorizontal('left');
        $sheet->getStyle('B6')->getAlignment()->setHorizontal('left');
        $sheet->getStyle('7:7')->getAlignment()->setHorizontal('center');

        $sheet->mergeCells('C2:K2');
        $sheet->mergeCells('B3:L3');
        $sheet->mergeCells('B4:L4');
        $sheet->mergeCells('B5:L5');
        $sheet->mergeCells('B6:L6');

        $sheet->getStyle('B2:K2')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('B7:K7')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);

        $sheet->setCellValue('C2', 'Simulacion Oficina 11');

        $sheet->setCellValue('B3', 'Cada una de estas simulaciónes se realizaron para simular el caso 1 del problema de ventas al por menor, con el fin de que el vendedor de revistas encuentre la política óptima de compra para cada caso');
        $sheet->getStyle('B3')->getAlignment()->setWrapText(true);

        $sheet->setCellValue('B4', 'Cliente que realizó la simulaciones');
        $sheet->setCellValue('B5', 'Nombre: ' . $this->cliente->nombre);
        $sheet->setCellValue('B6', 'Correo: ' . $this->cliente->correo);
        
        $sheet->getStyle('B7:L' . (count($this->simulaciones) + 7))->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
        $sheet->getStyle('B7:L' . (count($this->simulaciones) + 7))->getBorders()->getAllBorders()->setColor(new \PhpOffice\PhpSpreadsheet\Style\Color(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK));

        $sheet->getStyle('C2')->applyFromArray([
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => '4e656e', // Código de color para azul
                ],
            ],
        ]);
        $sheet->getStyle('C2')->applyFromArray([
            'font' => [
                'color' => ['rgb' => 'FFFFFF'], // Código de color para blanco
                'size' => 14,
                'bold' => true,
            ],
        ]);

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
        $drawing2->setCoordinates('L2');

        return [$drawing, $drawing2];
    }
}
