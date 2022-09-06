<?php

namespace App\Http\Controllers;

use App\Models\Daerah;
use App\Models\Pelitadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pelitaController extends Controller
{
    public function index()
    {
        $pelitadata = Pelitadata::paginate(10);
        $daerah = Daerah::all();
        return view('pelita.main', compact(['pelitadata', 'daerah']));
    }

    public function search(Request $request)
    {
        $output = "";
        $data = DB::table('daerah')
            ->join('pelitadata', 'daerah.id', '=', 'pelitadata.daerah_id')
            ->select('pelitadata.*', 'daerah.*')
            ->where('nama', 'Like', '%' . $request->search . '%')
            ->orWhere('mandarin', 'Like', '%' . $request->search . '%')
            ->orWhere('umur', 'Like', '%' . $request->search . '%')
            ->orWhere('kota', 'Like', '%' . $request->search . '%')
            ->orWhere('daerah', 'Like', '%' . $request->search . '%')->paginate();
        foreach ($data as $p) {
            $output .=
                '<tr>
            <td>' . $p->nama . '</td>
            <td>' . $p->mandarin . '</td>
            <td>' . $p->umur . '</td>
            <td>' . $p->daerah . '</td>
            <td>' . $p->kota . '</td>
          </tr>';
        }

        return response($output);
    }
}
