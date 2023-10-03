@extends("admin.template.layout")
@section("main")
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Notícias cadastradas</h4>
        <a class="btn btn-success" href="{{route("news.create")}}"><i class="bi bi-journal-plus"></i>Cadastrar News</a>
    </div>
    <div class="card-body">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
{{--                <th scope="col">Categoria</th>--}}
                <th scope="col">Data de publicação</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>

            @foreach($news as $item)
                <tr>
                    <th class="align-middle" scope="row">{{$item->id}}</th>
                    <td class="align-middle">{{$item->title}}</td>
{{--                    <td class="align-middle">Saúde</td>--}}
{{--                    <td class="align-middle">25/03/2023 às 18h33</td>--}}
                    <td class="align-middle">{{$item->created_at->format('d/m/Y á\s H\hi')}}</td>
                    <td class="align-middle">
                        <a href="{{route('news.edit', $item->id)}}" class="btn btn-block btn-primary">Editar</a>
                        <form action="{{route('news.destroy', $item->id)}}" method="post">
                            @csrf
                            @method("delete")
                            <button onclick="if (confirm('Deseja excluir?')) { this.form.submit()} " type="button" class="btn btn-block btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

        <hr>

        <div class="d-flex justify-content-center">

            {{$news->links()}}

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
