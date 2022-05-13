<?php

namespace Database\Seeders;

use App\Models\Classdetail;
use Illuminate\Database\Seeder;

class ClassDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classdetail::create([
            'warsztaty_nazwa' => 'Wrsztaty Stacjonarne',
            'opis_warsztatow' => 'PROJEKT WYKŁADU NA WARSZTATACH O BĘBNACH AFRYKAŃSKICH (45 min lekcyjnych dla szkoły). Zaczynamy krótkim wykładem historii powstawania bębnów afrykańskich, z czego są zrobione i gdzie powstawały oraz jakie znaczenie mają w świecie muzycznym i w życiu codziennym. Następnie nawiązanie do różnorodnych rytmów, pokaz techniki grania na bębnach. Nauka podstawowych dźwięków, technik oraz rytmów gry na bębnach. Kończymy podsumowaniem tego co dzieci zapamiętały z tej lekcji i na co najbardziej zwróciły uwagę, w omawianym temacie bębnów afrykańskich.',
            'opis_krotki' => 'Warsztaty to niepowtarzalna okazja do zrozumienia, wygrywania i przeżywania energetycznych rytmów z Afryki Zachodniej. W trakcie grania na bębnach uwaga naturalnie płynie do rąk, uszu i całego ciała, które odczuwają wibracje i rytm wygrywany przez grupę. Bęben skupia na sobie zarówno uwagę początkującego, który stara się właściwie powtórzyć rytm, jak i zaawansowanego uczestnika, który przy akompaniamencie pozostałych bębnów skupia się na improwizacji lub ćwiczy trudniejsze techniki.',
            'informacje' => 'Najstarszy znaleziony przez archeologów bęben pochodzi z epoki neolitu. Powstał około 6000 lat przed Chrystusem',
            'wiek' => '3-6 lat',
            'rozmiar_grup' => '25',
            'file_img' => 'obraz0.jpg',
            'cena' => '450zł'
        ]);
        Classdetail::create([
            'warsztaty_nazwa' => 'Koncerty',
            'opis_warsztatow' => 'Zapraszamy na wyjątkową podróż do Świata rytmów, których poszukamy w sobie.',
            'opis_krotki' => 'Wspólne bębnienie jest ponad podziałami kulturowymi i społecznymi, gdyż nie używa się w nim słów, a rytm rozumie i czuje każdy. Rytm bębna potrafi wprowadzić w trans, co było i jest nadal stosowane od tysięcy lat przez kultury pierwotne podczas wszelakich rytuałów plemiennych. Coraz więcej ludzi Zachodu otwiera się na takie działanie rytmu, pomagające zarówno w integrowaniu się, jak i poczuciu wewnętrznej harmonii i bezpieczeństwa.',
            'informacje' => 'Bębny afrykańskie to pierwsze instrumenty świata',
            'wiek' => '3-* lat',
            'rozmiar_grup' => '25-*',
            'file_img' => 'obraz2.jpg',
            'cena' => '450zł'
        ]);
        Classdetail::create([
            'warsztaty_nazwa' => 'Warsztaty Online',
            'opis_warsztatow' => 'Warsztaty Online jeszcze nie czynne',
            'opis_krotki' => 'Dzięki prezentacjom nt. Afryki uruchamiamy wyobraźnię dzieci, dlatego bęben staje się nie tylko instrumentem muzycznym a jest sposobem na przeniesienie się do świata odległej kultury.',
            'informacje' => 'Wyróżniamy następujące bębny afrykańskie: djembe, conga, bogosy.',
            'wiek' => '3-* lat',
            'rozmiar_grup' => '*',
            'file_img' => 'obraz1.jpg',
            'cena' => '250zł'
        ]);
    }
}
