<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agenda;
use App\Models\Prato;
use App\Models\PratoAgenda;


class PratoAgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach(Agenda::all() as $agenda ){
        		$pratos = Prato::all()->where('user_id', $agenda->user_id)->random(3);
				foreach($pratos as $prato){
					PratoAgenda::factory(1)->create([
						'agenda_id' => $agenda->id,
						'prato_id' => $prato->id
					]);
			}
        }
    }
}
