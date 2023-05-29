<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;
use PDF;

class MaintenanceController extends Controller
{
    public function index()
    {
        $maintenances = Maintenance::query()->paginate(8);
        return view('Maintenances.index', compact('maintenances'));
    }

    public function addForm()
    {
        $maintenance = new Maintenance();
        return view('Maintenances.form', compact('maintenance'));
    }

    public function add(Request $request)
    {
        $query = Maintenance::create($request->all());
        return redirect()
            ->route('maintenance.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été crée avec succès']);
    }

    public function editForm(Maintenance $maintenance)
    {
        return view('Maintenances.form', compact('maintenance'));
    }

    public function edit(Request $request, Maintenance $maintenance)
    {
        $query = $maintenance->update($request->all());
        return redirect()
            ->route('maintenance.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été modifiée avec succès']);
    }

    public function delete(Maintenance $maintenance)
    {
        $query = $maintenance->delete();
        return redirect()
            ->route('maintenance.index')
            ->with('notification', ['type' => 'success', 'message' => 'La ressource à été supprimée avec succès']);
    }

    public function print(Maintenance $maintenance)
    {

        $pdf = PDF::loadView('Maintenances.print',
            ['maintenance'=> $maintenance],
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

        return $pdf->stream('Maintenance ' . $maintenance->materiel->designation . ' (' . $maintenance->materiel->service->designation . ')' . '.pdf');
    }
}
