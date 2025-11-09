<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private function getArticles()
    {
        return [
            ['id' => 1, 'name' => 'Articolo 1', 'description' => 'Come nasce questo mondo', 'img' => asset('media/neve.png'), 'articolo' => '🌿 La nascita di Capybath
            Tutto è iniziato con un sogno semplice: creare un luogo dove il tempo rallenta, dove il silenzio è pieno di vita e dove il benessere si ispira alla natura. Durante un viaggio in Giappone, tra le montagne avvolte dalla nebbia, abbiamo scoperto un piccolo onsen dove, con nostra sorpresa, sei capibara si rilassavano nell’acqua calda, con piccoli asciugamani piegati sulla testa. Erano immobili, sereni, come maestri zen immersi nel vapore.
            Quell’immagine ci ha cambiato. Abbiamo capito che il vero relax non è solo una questione di trattamenti, ma di compagnia, di armonia, di presenza. Così è nata l’idea: una spa dove gli ospiti potessero condividere l’esperienza del benessere con i capibara, creature gentili e pacifiche, capaci di trasmettere calma con un solo sguardo.
            Abbiamo costruito la spa seguendo i principi del giardino zen: pietre levigate, acqua che scorre, legno naturale e silenzi che parlano. I capibara hanno trovato subito casa: si muovono liberi tra le vasche, si avvicinano agli ospiti, si sdraiano al sole o si immergono nel tepore dell’onsen. Non sono attrazioni, sono compagni di relax.
            Oggi, Capybath è un rifugio per chi cerca qualcosa di più: un contatto autentico con la natura, un momento di pace condivisa, un sorriso lento che nasce guardando un capibara chiudere gli occhi e lasciarsi cullare dall’acqua.'],
            ['id' => 2, 'name' => 'Articolo 2', 'description' => 'Tutto sui capibara', 'img' => asset('media/baby.png'), 'articolo' => '🐾 Capibara: i giganti gentili del mondo animale
            Nel vasto panorama della fauna sudamericana, c’è un animale che conquista tutti con la sua calma disarmante e il suo aspetto bonario: il capibara. Considerato il roditore più grande del mondo, questo curioso mammifero semi-acquatico è diventato negli ultimi anni una vera star del web e un simbolo di serenità.
            Con un corpo tozzo e robusto, zampe corte e piedi palmati, il capibara può raggiungere i 60 cm di altezza e pesare fino a 65 kg. Il suo pelo è ruvido, di colore marrone chiaro o rossiccio, e non ha coda. Il muso è largo e piatto, con occhi e narici posizionati in alto per facilitare la respirazione mentre è immerso.
            Erbivori convinti, si nutrono di erba, piante acquatiche, frutta e cortecce. Come altri roditori, praticano la coprofagia, ovvero ingeriscono le proprie feci per assorbire meglio i nutrienti. Sono attivi soprattutto all’alba e al tramonto, mentre durante il giorno preferiscono riposare all’ombra o nell’acqua.
            Le femmine partoriscono da 2 a 8 cuccioli per volta, che nascono già in grado di camminare e nuotare. Incredibilmente, i piccoli vengono allattati anche da altre femmine del gruppo, in un sistema cooperativo che rafforza i legami sociali.
            Negli ultimi anni, il capibara ha conquistato il mondo grazie alla sua indole pacifica e alla capacità di convivere con altre specie — gatti, anatre, scimmie e persino tartarughe. In Giappone, è protagonista di spa e onsen dove si rilassa davvero nell’acqua calda, diventando un’icona del relax.
            Il capibara ci insegna che la forza può essere silenziosa, che la calma è contagiosa e che la convivenza è possibile. In un mondo frenetico, il suo passo lento e il suo sguardo placido ci invitano a rallentare… e a respirare.']
        ];
    }

    public function articoli(){
        return view('articoli', ['articles' => $this->getArticles()]);
    }

    public function dettaglio($id){
        foreach($this->getArticles() as $article){
            if($id == $article['id']){
                return view('articoli/articleDetail', ['article' => $article]);
            }
        }

        abort(404);

    }
}
