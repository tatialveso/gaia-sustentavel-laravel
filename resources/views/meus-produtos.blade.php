{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">

<title>Minhas configurações</title>

@section('meus-produtos')
    <div class="titulo">
        <h5>Meus produtos</h5>
    </div>

    <div class="pagina container">
        @include('aside-conta')

        <main>
            <h1>Meus produtos</h1>
            <div class="row">
            @foreach ($products as $product)
                <div class="col-6">
                    <div class="card">
                        <img src="{{$product['img_product']}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none">{{$product["name"]}}</a></h5>
                            <div class="btn-produto">
                                <a href="/meus-produtos/{{$product['id']}}" class="btn text-light">Editar</a>
                                <form action="/deletar-produto/{{ $product['id']}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Excluir produto">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </main>
    </div>
@endsection