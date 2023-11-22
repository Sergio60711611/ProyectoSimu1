<?php

namespace App\Http\Controllers;

use App\Models\simulaciones;
use Illuminate\Http\Request;

class SimulacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('simulacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c10 = $request->c10;
        $v10 = $request->v10;
        $d10 = $request->d10;
        $c20 = $request->c20;
        $v20 = $request->v20;
        $d20 = $request->d20;

        //$Q1 = $request->Q1;
        //$Q2 = $request->Q2;

        $MejorUtilidad = 0;

        for ($Q1 = 1; $Q1 <= 110; $Q1++) {
            for ($Q2 = 1; $Q2 <= 160; $Q2++) {
                for ($n = 1; $n <= 4; $n++) {
                    for ($m = 1; $m <= 12; $m++) {
                        $demandaT1 = 0;
                        $demandaT2 = 0;
                        for ($i = 1; $i <= 10; $i++) {
                            $R1 = mt_rand() / mt_getrandmax();
                            if ($R1 < 0.05) {
                                $demanda1 = 5;
                            } elseif ($R1 < 0.1) {
                                $demanda1 = 6;
                            } elseif ($R1 < 0.2) {
                                $demanda1 = 7;
                            } elseif ($R1 < 0.35) {
                                $demanda1 = 8;
                            } elseif ($R1 < 0.6) {
                                $demanda1 = 9;
                            } elseif ($R1 < 0.85) {
                                $demanda1 = 10;
                            } else {
                                $demanda1 = 11;
                            }
                        
                            $demandaT1 += $demanda1;
                        }

                        for ($j = 1; $j <= 20; $j++) {
                            $R2 = mt_rand() / mt_getrandmax();
                            
                            if ($R2 < 0.15) {
                                $demanda2 = 4;
                            } elseif ($R2 < 0.35) {
                                $demanda2 = 5;
                            } elseif ($R2 < 0.65) {
                                $demanda2 = 6;
                            } elseif ($R2 < 0.85) {
                                $demanda2 = 7;
                            } else {
                                $demanda2 = 8;
                            }
                        
                            $demandaT2 += $demanda2;
                        }
                        $QVen10 = min($Q1, $demandaT1);
                        $QVen20 = min($Q2, $demandaT2);

                        $QNoVen10 = $Q1 - $QVen10;
                        $QNoVen20 = $Q2 - $QVen20;

                        $CostoTotalCompra = ($Q1 * $c10) + ($Q2 * $c20);

                        $IngresosVentasReg = ($QVen10 * $v10) + ($QVen20 * $v20);
                        $IngresosVentasPro = ($QNoVen10 * $d10) + ($QNoVen20 * $d20);
            
                        $UtilidadMes = $IngresosVentasReg + $IngresosVentasPro - $CostoTotalCompra;

                        $UtilidadMesArray[$m] = $UtilidadMes;
                    }

                    $SumUtilidadMes = 0;
                    for ($i = 1; $i <= 12; $i++) {
                        $SumUtilidadMes += $UtilidadMesArray[$i];
                    }
                    $PromedioUtilidadMeses = $SumUtilidadMes / 12;

                    $PromedioUtilidadMesArray[$n] = $PromedioUtilidadMeses;
                }
                //ACA TERMINA N

                $SumPromedioUtilidadMeses = 0;
                for ($k = 1; $k <= 4; $k++) {
                    $SumPromedioUtilidadMeses += $PromedioUtilidadMesArray[$k];
                }

                $PromediosdePromediosUtilidadMeses = $SumPromedioUtilidadMeses / 4;

                if ($PromediosdePromediosUtilidadMeses > $MejorUtilidad) {
                    $MejorUtilidad = $PromediosdePromediosUtilidadMeses;
                    $MejorQ1 = $Q1;
                    $MejorQ2 = $Q2;
                }
            }
        }

        // Calculate the sum
        $sum = $MejorUtilidad;

        // Pass the sum to the view
        return view('simulacion', compact('sum', 'MejorQ1', 'MejorQ2'));

    }
    public function storeEntrada(Request $request)
    {
        $c10 = $request->c10;
        $v10 = $request->v10;
        $d10 = $request->d10;
        $c20 = $request->c20;
        $v20 = $request->v20;
        $d20 = $request->d20;

        $Q1 = $request->Q1;
        $Q2 = $request->Q2;

        for ($n = 1; $n <= 4; $n++) {
            for ($m = 1; $m <= 12; $m++) {
                $demandaT1 = 0;
                $demandaT2 = 0;
                for ($i = 1; $i <= 10; $i++) {
                    $R1 = mt_rand() / mt_getrandmax();
                    if ($R1 < 0.05) {
                        $demanda1 = 5;
                    } elseif ($R1 < 0.1) {
                        $demanda1 = 6;
                    } elseif ($R1 < 0.2) {
                        $demanda1 = 7;
                    } elseif ($R1 < 0.35) {
                        $demanda1 = 8;
                    } elseif ($R1 < 0.6) {
                        $demanda1 = 9;
                    } elseif ($R1 < 0.85) {
                        $demanda1 = 10;
                    } else {
                        $demanda1 = 11;
                    }
                
                    $demandaT1 += $demanda1;
                }

                for ($j = 1; $j <= 20; $j++) {
                    $R2 = mt_rand() / mt_getrandmax();
                    
                    if ($R2 < 0.15) {
                        $demanda2 = 4;
                    } elseif ($R2 < 0.35) {
                        $demanda2 = 5;
                    } elseif ($R2 < 0.65) {
                        $demanda2 = 6;
                    } elseif ($R2 < 0.85) {
                        $demanda2 = 7;
                    } else {
                        $demanda2 = 8;
                    }
                
                    $demandaT2 += $demanda2;
                }
                $QVen10 = min($Q1, $demandaT1);
                $QVen20 = min($Q2, $demandaT2);

                $QNoVen10 = $Q1 - $QVen10;
                $QNoVen20 = $Q2 - $QVen20;

                $CostoTotalCompra = ($Q1 * $c10) + ($Q2 * $c20);

                $IngresosVentasReg = ($QVen10 * $v10) + ($QVen20 * $v20);
                $IngresosVentasPro = ($QNoVen10 * $d10) + ($QNoVen20 * $d20);
    
                $UtilidadMes = $IngresosVentasReg + $IngresosVentasPro - $CostoTotalCompra;

                $UtilidadMesArray[$m] = $UtilidadMes;
            }

            $SumUtilidadMes = 0;
            for ($i = 1; $i <= 12; $i++) {
                $SumUtilidadMes += $UtilidadMesArray[$i];
            }
            $PromedioUtilidadMeses = $SumUtilidadMes / 12;

            $PromedioUtilidadMesArray[$n] = $PromedioUtilidadMeses;
        }

        $SumPromedioUtilidadMeses = 0;
        for ($k = 1; $k <= 4; $k++) {
            $SumPromedioUtilidadMeses += $PromedioUtilidadMesArray[$k];
        }

        $PromediosdePromediosUtilidadMeses = $SumPromedioUtilidadMeses / 4;

        // Calculate the sum
        $sum = $PromediosdePromediosUtilidadMeses;

        // Pass the sum to the view
        return view('simulacion', compact('sum'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\simulaciones  $simulaciones
     * @return \Illuminate\Http\Response
     */
    public function show(simulaciones $simulaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\simulaciones  $simulaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(simulaciones $simulaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\simulaciones  $simulaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, simulaciones $simulaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\simulaciones  $simulaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(simulaciones $simulaciones)
    {
        //
    }
}
