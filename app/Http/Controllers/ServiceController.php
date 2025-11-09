<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private function getServices()
    {
        return [
            ['id' => 1, 'name' => 'Dont worry, be cappy', 'description' => 'SPA con i capibara', 'img' => asset('media/onsen.png'), 'intero' => 'Immagina di entrare in una spa immersa nella natura, dove il vapore si solleva dolcemente dalle vasche termali e il silenzio è interrotto solo dal suono dell’acqua che scorre e da qualche pigro sbuffo… di capibara 🧖‍♀️
            🌿 Benvenuti nella Spa dei Capibara
            Appena varchi l’ingresso, vieni accolto da un’atmosfera rilassante: luci soffuse, profumo di legno di cedro e il suono di una cascata in lontananza. Ma la vera sorpresa è lì, nella vasca principale: cinque capibara galleggiano placidamente nell’acqua calda, ciascuno con un piccolo asciugamano piegato sulla testa, come dei veri habitué del benessere.
            🐾 Il rituale del relax
            - Acqua termale fumante: la temperatura è perfetta, e il vapore crea un velo che avvolge tutto in un abbraccio ovattato.
            - Capibara zen: si muovono lentamente, chiudono gli occhi, e sembrano meditare. Alcuni si avvicinano curiosi, altri restano immobili come statue di serenità.
            - Interazione dolce: puoi sederti accanto a loro, immergerti nella stessa vasca e lasciarti contagiare dalla loro calma. Non cercano attenzioni, ma accettano la tua presenza con naturalezza.
            🍵 Momenti speciali
            Dopo il bagno, puoi sorseggiare tè verde su una terrazza di bambù mentre i capibara si asciugano al sole. Alcuni si sdraiano su tappetini di paglia, altri si rotolano lentamente nell’erba. È come essere in un tempio del relax, dove il tempo rallenta e la compagnia è fatta di creature gentili e silenziose.
            🌸 Un’esperienza unica
            La spa con i capibara non è solo un luogo di benessere fisico, ma un invito a rallentare, osservare e condividere la quiete con esseri che incarnano la pace. È il tipo di esperienza che ti lascia con un sorriso calmo e il cuore leggero.'],
            ['id' => 2, 'name' => 'Happybara', 'description' => 'Scopri tutti i nostri gadget', 'img' => asset('media/peluche.png'), 'intero' => '🛍️ Benvenuti nel mondo dei Capibara! 🐾 Hai mai sognato di portare a casa la dolcezza e la calma di un capibara? Nel nostro negozio a tema trovi tutto ciò che serve per coccolarti come loro:
            🧸 Peluche morbidissimi da abbracciare ogni sera
            🛁 Accappatoi soffici per sentirti in una spa naturale
            🎁 Gadget adorabili: tazze, borse, sticker, candele e molto altro
            Ogni articolo è ispirato alla serenità di questi animali straordinari. Che tu voglia fare un regalo o regalarti un sorriso, qui c’è un capibara per te!
            🌿 Vieni a trovarci e lasciati conquistare dal relax… versione capibara.']
        ];
    }

    public function servizi(){
        return view('servizi', ['services' => $this->getServices()]);
    }

    public function dettaglio($id)
    {
        foreach ($this->getServices() as $service) {
            if ($id == $service['id']) {
                return view('servizi/serviceDetail', ['service' => $service]);
            }
        }

        abort(404);
    }
}