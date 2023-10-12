@extends("admin.template.layout")
@section("main")

    <h1 class="mb-4">Gerenciamento de Notícias</h1>

@if(session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if($errors->any())
<div class="alert alert-danger">
    Não foi possível realizar esta operação:
    <ul class="mt-2 mb-0">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card">
    <div class="card-header">
        <h4 class="mb-0">Cadastrar notícia</h4>
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Notícias cadastradas</h4>
            <a class="btn btn-primary" href="{{route("news.index")}}"><i class="bi bi-backspace-fill"></i></i>Voltar</a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route("news.store")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include("admin.news.partials.form")
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
