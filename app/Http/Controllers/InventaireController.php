<?php

namespace App\Http\Controllers;

use App\Models\Inventaire;
use App\Models\Maintenance;
use App\Models\MaterielsInventore;
use Illuminate\Http\Request;
use PDF;

class InventaireController extends Controller
{
    public function index()
    {
        $inventaires = Inventaire::query()->paginate(8);
        return view('Inventaires.index', compact('inventaires'));
    }

    public function addForm()
    {
        return view('Inventaires.form');
    }

    public function add(Request $request)
    {
        $data = $request->all();
        $query = Inventaire::create([
            'date_inventaire' => date('Y-m-d'),
            'observations' => $data['observations'] ?? '',
        ]);
        foreach ($data['id'] as $key => $item) {
            MaterielsInventore::create([
                'qte' => $data['qte'][$key],
                'materiels_id' => $item,
                'etat_materiel_id' => $data['etat'][$key],
                'inventaire_id' => $query->id,
            ]);
        }
        return redirect()
            ->route('inventaire.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été crée avec succès']);
    }



    public function print(Inventaire $inventaire)
    {

        $pdf = PDF::loadView('Inventaires.print',
            ['inventaire'=> $inventaire],
            [],
            [
                'default_font' => 'poppins',
                'author' => 'DGI PARC',
                'format' => 'A4',
                'margin_left' => 0,
                'margin_right' => 0,
                'orientation' => 'P',
                'margin_top' => 10,
                'margin_bottom' => 20,
                'margin_header' => 0,
                'margin_footer' => 0,
                'custom_font_dir'  => base_path('public/assets/font'), // don't forget the trailing slash!
                'custom_font_data' => [
                    'poppins' => [ // must be lowercase and snake_case
                        'R' => 'Poppins-Regular.ttf',
                        'B' => 'Poppins-Bold.ttf',
                        'I' => 'Poppins-Italic.ttf',
                    ]
                ],
                'watermark_image_path' => 'assets/images/dgi/filigrame.png',
                'show_watermark_image' => true,
//                'watermark_image_alpha' => 0.1
            ]);

        return $pdf->stream('Inventaire du ' . $inventaire->date_inventaire  . '.pdf');
    }
}
