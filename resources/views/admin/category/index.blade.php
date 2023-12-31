@extends("admin.template.layout")
@section("main")

    <h1 class="mb-4">Gerenciamento de Categorias</h1>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Categorias cadastradas</h4>
        <a class="btn btn-success" href="{{route("category.create")}}"><i class="bi bi-journal-plus"></i>Cadastrar Categoria</a>
    </div>
    <div class="card-body">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Data de publicação</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>

            @foreach($categories as $item)
                <tr>
                    <th class="align-middle" scope="row">{{$item->id}}</th>
                    <td class="align-middle">{{$item->title}}</td>
                    <td class="align-middle">{{$item->created_at->format('d/m/Y á\s H\hi')}}</td>
                    <td class="align-middle">
                        <a href="{{route('category.edit', $item->id)}}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{route('category.destroy', $item->id)}}" method="post">
                            @csrf
                            @method("delete")
                            <button onclick="if (confirm('Deseja excluir?')) { this.form.submit()} " type="button" class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

        <hr>

        <div class="d-flex justify-content-center">

            {{$categories->links()}}

{{--            <nav>--}}
{{--                <ul class="pagination mb-0">--}}
{{--                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                    <li class="page-item active" aria-current="page">--}}
{{--                        <a class="page-link" href="#">2</a>--}}
{{--                    </li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
        </div>
    </div>
</div>
@endsection
