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
                <th scope="col">Categoria</th>
                <th scope="col">Data de publicação</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class="align-middle" scope="row">2</th>
                <td class="align-middle">Obesidade é o maior vilão da saúde em 2022</td>
                <td class="align-middle">Saúde</td>
                <td class="align-middle">25/03/2023 às 18h33</td>
                <td class="align-middle">
                    <button type="button" class="btn btn-sm btn-primary">Editar</button>
                    <button type="button" class="btn btn-sm btn-danger">Excluir</button>
                </td>
            </tr>
            <tr>
                <th class="align-middle" scope="row">1</th>
                <td class="align-middle">Como descartar adequadamente baterias depois do seu uso</td>
                <td class="align-middle">Meio ambiente!</td>
                <td class="align-middle">25/03/2023 às 17h25</td>
                <td class="align-middle">
                    <button type="button" class="btn btn-sm btn-primary">Editar</button>
                    <button type="button" class="btn btn-sm btn-danger">Excluir</button>
                </td>
            </tr>
            </tbody>
        </table>

        <hr>

        <div class="d-flex justify-content-center">

            <nav>
                <ul class="pagination mb-0">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
