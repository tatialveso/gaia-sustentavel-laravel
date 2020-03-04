<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;
use App\Produto;
use App\PedidoProduto;
use App\CupomDesconto;
use App\User;
use App\UF;
use DB;

class CarrinhoController extends Controller
{
    function __construct() {
        $this->middleware('auth');
    }
    
    public function add(Request $request) {
        $produto_id = $request->input('id');
        $produto = Produto::find($produto_id);
        $quantidade = $request->input('quantity');
            
        $carrinhos = session()->get('carrinho', ['itens' => [], 'total' => 0]);
        
        if (isset($carrinhos['itens'][$produto['id']])) {
            $carrinhos['itens'][$produto['id']]['quantidade'] += $quantidade;
        } else {
            $carrinhos['itens'][$produto['id']] = [
                'quantidade' => $quantidade,
                'produto' => $produto
            ];
        }

        session()->put('carrinho', $carrinhos);
        
        $request->session()->flash('mensagem-sucesso', 'Produto adicionado do carrinho com sucesso!');
        return redirect()->route('carrinho.index');
    }

    public function index() {
        $carrinhos = session()->get('carrinho', ['itens' => [], 'total' => 0]);

        // dd($carrinhos);
        return view('carrinho', compact('carrinhos'));
    }

    public function delete(Request $request) {
        $produto_id = $request->input('id');
        $produto = Produto::find($produto_id);

        
        $item = session()->pull('carrinho');

        // $key = array_search($produto_id, $item);

        // if(($key = array_search($produto_id, $item)) !== false) {
        //     unset($item[$key]);
        // }
        // $teste = session()->put('itens', $item);

        dd($item);           

        $request->session()->flash('mensagem-sucesso', 'Produto removido do carrinho com sucesso!');
            return redirect()->route('carrinho.index');

    }

    public function checkout(Request $request) {
        $ufs = \App\UF::all();
        $users = Auth::user()->get();

        return view('checkout', compact('ufs', 'users'));
    }

    public function complete(Request $request) {
        $carrinho = session('carrinho');
        $user = Auth::user()->id;
        $idProduto = $carrinho['produto']['id'];
        
        // $novo_pedido = Pedido::create([
        //     'user_id' => $user,
        //     'price' => $carrinho['total'],
        // ]);
            
        // $idPedido = $novo_pedido->id;
        // $idProduto = ;
            
        // PedidoProduto::create([
        //     'request_id' => $idPedido,
        //     'product_id' => $idProduto,
        //     'quantity' => $carrinho['itens'][]['quantidade'];
        // ]);
                
        dd($idProduto);

        return redirect('/resumo-pedido');
    } 

    public function end(Request $request) {
        $user = Auth::user()->id;
        $pedido = Pedido::where('user_id', $user)->latest()->take(1)->get();

        $produtoPedidos = PedidoProduto::where('request_id', $pedido)->get();
        // dd($produtoPedidos);

        return view('resumo', compact('pedido', 'produtoPedidos'));
    }
    
}