@extends('layouts.app')
@section('title', 'Funcionários')

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Funcionários</h1>
    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Gerar Relatório</a>
</div>

<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Lista de Funcionários</h6>
        <button class="btn btn-sm btn-success" onclick="abrirModal('novoFuncionarioModal')"><i class="fas fa-plus"></i> Novo Funcionário</button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Posição</th>
                        <th>Data de Criação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staffList as $f)
                    <tr>
                        <td>{{ $f->id }}</td>
                        <td>{{ $f->user->name }}</td>
                        <td>{{ $f->user->email }}</td>
                        <td>{{ $f->position }}</td>
                        <td>{{ $f->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm" title="Ver"><i class="fas fa-eye"></i></a>
                            <button
                                class="btn btn-warning btn-sm"
                                title="Editar"
                                onclick="abrirModal('editarFuncionarioModal-{{ $f->id }}')">
                                <i class="fas fa-edit"></i>
                            </button>
                            <form action="{{ route('funcionarios.destroy', $f->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Deseja excluir este funcionário?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal individual para cada funcionário -->
                    <div class="modal fade" id="editarFuncionarioModal-{{ $f->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form method="POST" action="{{ route('funcionarios.update', $f->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Editar Funcionário</h5>
                                        <button type="button" class="close" onclick="fecharModal('editarFuncionarioModal-{{ $f->id }}')">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input type="text" name="name" class="form-control" value="{{ $f->user->name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ $f->user->email }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Posição</label>
                                            <select name="position" class="form-control" required>
                                                <option value="Médico" {{ $f->position == 'Médico' ? 'selected' : '' }}>Médico</option>
                                                <option value="Enfermeiro" {{ $f->position == 'Enfermeiro' ? 'selected' : '' }}>Enfermeiro</option>
                                                <option value="Técnico de Enfermagem" {{ $f->position == 'Técnico de Enfermagem' ? 'selected' : '' }}>Técnico de Enfermagem</option>
                                                <option value="Farmacêutico" {{ $f->position == 'Farmacêutico' ? 'selected' : '' }}>Farmacêutico</option>
                                                <option value="Recepcionista" {{ $f->position == 'Recepcionista' ? 'selected' : '' }}>Recepcionista</option>
                                                <option value="Administrativo" {{ $f->position == 'Administrativo' ? 'selected' : '' }}>Administrativo</option>
                                                <option value="Auxiliar de Limpeza" {{ $f->position == 'Auxiliar de Limpeza' ? 'selected' : '' }}>Auxiliar de Limpeza</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" onclick="fecharModal('editarFuncionarioModal-{{ $f->id }}')">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Atualizar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Novo -->
<div class="modal fade" id="novoFuncionarioModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="{{ route('funcionarios.store') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Novo Funcionário</h5>
                    <button type="button" class="close" onclick="fecharModal('novoFuncionarioModal')">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Posição</label>
                        <select name="position" class="form-control" required>
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
                    <button type="button" class="btn btn-secondary" onclick="fecharModal('novoFuncionarioModal')">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- JS PURO -->
<script>
    function abrirModal(id) {
        const modal = document.getElementById(id);
        modal.classList.add('show');
        modal.style.display = 'block';
        document.body.classList.add('modal-open');

        const backdrop = document.createElement('div');
        backdrop.className = 'modal-backdrop fade show';
        backdrop.id = 'backdrop-' + id;
        document.body.appendChild(backdrop);
    }

    function fecharModal(id) {
        const modal = document.getElementById(id);
        modal.classList.remove('show');
        modal.style.display = 'none';
        document.body.classList.remove('modal-open');

        const backdrop = document.getElementById('backdrop-' + id);
        if (backdrop) backdrop.remove();
    }
</script>

@endsection
