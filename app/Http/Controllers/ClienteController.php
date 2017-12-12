<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class ClienteController extends Controller
{

    public function index()
    {
        $dados = Cliente::all();
        return view('home', compact('dados'));
    }


    public function download($type)
    {

        $data = Cliente::get()->toArray();

        if (count($data) >= 1) {

            try {

                return Excel::create('nome_planilha', function ($excel) use ($data) {
                    $excel->sheet('nome_aba_planilha', function ($sheet) use ($data) {
                        $sheet->fromArray($data);
                    });
                })->download($type);

            }catch (\exception $e){

                Session::flash('message', 'Não foi possivel efetuar o download no formato: ' . $type);

            }

        }else{

            Session::flash('message', 'A tabela de clientes, não possui nenhum registro.');
        }

        return view('home');

    }


    public function importExcel(Request $request)
    {
        if ($request->file('import_file')) {

            $path = $request->file('import_file')->getRealPath();

            $data = Excel::load($path, function ($reader) {
            })->get();

            if (!empty($data) && $data->count()) {
                foreach ($data->toArray() as $row) {
                    if (!empty($row)) {
                        $dataArray[] =
                            [
                                'nome' => $row['nome_usuario'],
                                'sobrenome' => $row['sobrenome_usuario'],
                            ];
                    }
                }
                if (!empty($dataArray)) {
                    Cliente::insert($dataArray);
                    return back();
                }
            }
        }
    }


}
