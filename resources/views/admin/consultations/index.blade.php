@extends('layouts.app')
@section('title', 'Consultas')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Consultas</h1>
    {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Gerar Relatório
    </a> --}}
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-lg-12 mb-4">

        <!-- Tabela de Consultas -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Lista de Consultas</h6>
                <a href="{{ route('consultas.create') }}" class="btn btn-sm btn-success">
                    <i class="fas fa-plus"></i> Nova Consulta
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Paciente</th>
                                <th>Médico</th>
                                <th>Data</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($consultations as $index => $consultation)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $consultation->name }}</td>
                                <td>{{ $consultation->doctor }}</td>
                                <td>{{ \Carbon\Carbon::parse($consultation->appointment_datetime)->format('d/m/Y H:i') }}</td>
                                <td>
                                    @if ($consultation->status === 'scheduled')
                                    <span class="badge badge-primary">Agendada</span>
                                    @elseif ($consultation->status === 'canceled')
                                    <span class="badge badge-danger">Cancelada</span>
                                    @elseif ($consultation->status === 'completed')
                                    <span class="badge badge-success">Concluída</span>
                                    @else
                                    <span>{{ $consultation->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    <!-- Confirmar Consulta -->
                                    <form action="{{ route('consultations.confirm', $consultation) }}" method="POST" class="d-inline" onsubmit="return confirm('Deseja confirmar esta consulta?');">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-info btn-sm" title="Confirmar" type="submit">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </form>

                                    <!-- Cancelar Consulta -->
                                    <form action="{{ route('consultations.cancel', $consultation) }}" method="POST" class="d-inline" onsubmit="return confirm('Deseja cancelar esta consulta?');">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-warning btn-sm" title="Cancelar" type="submit">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>

                                    <!-- Excluir Consulta -->
                                    <form action="{{ route('consultas.destroy', $consultation->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Deseja excluir esta consulta?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" title="Excluir" type="submit">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">Nenhuma consulta encontrada.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
