<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CappyController extends Controller
{
    private function getCappies()
    {
        return [
            ['id' => 1, 'name' => 'Emily', 'img' => asset('media/cap_1.png'), 'description' => 'Vivace e affettuosa, Emily è la prima a tuffarsi nell’onsen e l’ultima a uscire. Adora le foglie di tarassaco e si fa spesso seguire dagli altri con il suo entusiasmo contagioso.'],
            ['id' => 2, 'name' => 'Ciro', 'img' => asset('media/cap_2.png'), 'description' => 'Giocoso e curioso, Ciro ama esplorare ogni angolo del giardino zen. È il primo a scoprire nuovi sentieri e il più bravo a trovare frutti nascosti tra le rocce.'],
            ['id' => 3, 'name' => 'Gino', 'img' => asset('media/cap_3.png'), 'description' => 'Timido ma dolcissimo, Gino preferisce stare vicino ad Emily e si rilassa solo quando è circondato dai suoi amici. Il pelo più chiaro rispetto agli altri lo rende inconfondibile.'],
            ['id' => 4, 'name' => 'Chantal', 'img' => asset('media/cap_4.png'), 'description' => 'Curiosa e tranquilla, Chantal ama rilassarsi vicino all’acqua e osservare il mondo con occhi attenti. Ha un passo sempre lento e misurato.'],
            ['id' => 5, 'name' => 'Ugo', 'img' => asset('media/cap_5.png'), 'description' => 'Il più grande del gruppo, Ugo è il capibara saggio e protettivo. Si muove con calma e spesso si mette tra gli altri e qualsiasi rumore sospetto. Ha un pelo leggermente più scuro sul muso.']
        ];
    }

    public function chiSiamo()
    {
        return view('chiSiamo', ['cappies' => $this->getCappies()]);
    }

    public function dettaglio($id)
    {
        foreach ($this->getCappies() as $cappy) {
            if ($id == $cappy['id']) {
                return view('cappy/cappyDetail', ['cappy' => $cappy]);
            }
        }

        abort(404);
    }
}