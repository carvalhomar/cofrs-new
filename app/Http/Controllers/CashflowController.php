<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cashflow;
use App\Models\Status;
use App\Models\Banks;
use App\Models\BankAccount;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use \Yajra\DataTables\DataTables;
use Mockery\Exception;
use Illuminate\Support\Facades\Auth;

/**
 * Class CashflowController
 * @package App\Http\Controllers
 */
class CashflowController extends Controller
{
  public function index(Request $request)
  {

    if (!Session::has('user')) {
      return redirect()->route('login');
    }

    $BankAccount = BankAccount::select(
      'contas.id',
      DB::raw("CONCAT(contas.agencia,'/',contas.conta) as count"),
      'b.febraban_code',
      'b.name_bank'
    )
      ->leftJoin('banks as b', 'b.id', '=', 'contas.id_banco')
      ->orderBy('b.name_bank', 'asc')
      ->get();
    $Status = Status::all();


    if ($request->ajax()) {

      //load all contas
      $contasList = Cashflow::select(
        'movimentacao.*',
        DB::raw("CONCAT(c.agencia,'/',c.conta) as count"),
        DB::raw("CONCAT(b.febraban_code,' ',b.name_bank) as banco"),
        'e.est_nome',
      )
        ->leftJoin('contas as c', 'c.id', '=', 'movimentacao.id_conta')
        ->leftJoin('banks as b', 'b.id', '=', 'c.id_banco')
        ->leftJoin('estatus as e', 'e.id', '=', 'movimentacao.id_estatus')
        ->orderBy('movimentacao.data_vencimento', 'desc')
        ->orderBy('movimentacao.descricao', 'asc')
        ->get();

      //dd($contasList);

      return DataTables::of($contasList)
        ->addIndexColumn()
        ->addColumn('action', function ($row) {
          $btn = '<input class="" name="actionCheck[]" id="actionCheck" type="checkbox" value="' . $row->id . '"/>';
          return $btn;
        })
        ->rawColumns(['action'])
        ->setRowClass(function ($row) {
          if ($row->valor < 0) {
            return "bg-danger";
          } else {
            return "";
          }
        })
        ->make(true);
    }

    $data = [
      'category_name' => 'contas',
      'page_name' => 'contas',
      'has_scrollspy' => 0,
      'scrollspy_offset' => '',
      'alt_menu' => 0,
      'BankAccount' => $BankAccount,
      'Status' => $Status,
    ];


    return view('Cashflow.list')->with($data);
  }

  public function store(Request $request)
  {

    try {
      Cashflow::updateOrCreate(
        ['id' => $request->post('id')],
        [
          'id_conta'  =>  $request->post('id_conta'),
          'id_estatus' => $request->post('id_estatus'),
          'descricao' => $request->post('descricao'),
          'data_vencimento' => implode('-', array_reverse(explode('/', $request->post('data_vencimento')))),
          'valor' => str_replace(',', '.', str_replace('.', '', $request->post('valor'))),
        ]
      );

      return response()->json(['status' => 'success', 'msg' => 'Conta salva com sucesso!']);
    } catch (Exception $e) {
      return response()->json(['status' => 'error', 'msg' => $e->getMessage()]);
    }
  }


  public function getItem($id)
  {
    return response()->json(Cashflow::where('id', '=', $id)->get());
  }
}
