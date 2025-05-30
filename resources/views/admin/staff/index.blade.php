@extends('layouts.app')
@section('title', 'Funcionários')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Funcionários</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Gerar Relatório
    </a>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Tabela de Funcionários -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Lista de Funcionários</h6>
                <!-- Botão que abre o modal -->
                <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#novoFuncionarioModal">
                    <i class="fas fa-plus"></i> Novo Funcionário
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Departamento</th>
                                <th>Data de Criação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Maria Fernandes</td>
                                <td>maria@example.com</td>
                                <td>Recursos Humanos</td>
                                <td>01/04/2024</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm" title="Ver"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm" title="Editar"><i class="fas fa-edit"></i></a>
                                    <button class="btn btn-danger btn-sm" title="Excluir" onclick="confirm('Deseja excluir este funcionário?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Carlos Mbanze</td>
                                <td>carlos@example.com</td>
                                <td>TI</td>
                                <td>15/02/2024</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm" title="Ver"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm" title="Editar"><i class="fas fa-edit"></i></a>
                                    <button class="btn btn-danger btn-sm" title="Excluir" onclick="confirm('Deseja excluir este funcionário?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Joana Nhamate</td>
                                <td>joana@example.com</td>
                                <td>Financeiro</td>
                                <td>23/03/2024</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm" title="Ver"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm" title="Editar"><i class="fas fa-edit"></i></a>
                                    <button class="btn btn-danger btn-sm" title="Excluir" onclick="confirm('Deseja excluir este funcionário?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Modal: Novo Funcionário -->
<div class="modal fade" id="novoFuncionarioModal" tabindex="-1" role="dialog" aria-labelledby="novoFuncionarioModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('funcionarios.store') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="novoFuncionarioModalLabel">Novo Funcionário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="posicao">Posição</label>
                        <select class="form-control" id="posicao" name="position" required>
                            <option value="">-- Selecione --</option>
                            <option value="Médico">Médico</option>
                            <option value="Enfermeiro">Enfermeiro</option>
                            <option value="Técnico de Enfermagem">Técnico de Enfermagem</option>
                            <option value="Farmacêutico">Farmacêutico</option>
                            <option value="Recepcionista">Recepcionista</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Auxiliar de Limpeza">Auxiliar de Limpeza</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection