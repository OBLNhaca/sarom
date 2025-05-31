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
                <h6 class="m-0 font-weight-bold text-primary">Nova Consulta</h6>
            </div>
            <div class="card-body">

                <section id="appointment" class="appointment section">

                    <!-- Título da Secção -->
                    <div class="container section-title" data-aos="fade-up">
                        <h2>Marcação</h2>
                        <p>Agende a sua consulta ou serviço de forma rápida e cómoda.</p>
                    </div><!-- Fim do Título da Secção -->

                    <div class="container" data-aos="fade-up" data-aos-delay="100">

                        <form action="{{ route('consultations.store') }}" method="POST" role="form" class="php-email-form">
                            @csrf

                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="O seu nome" value="{{ old('name') }}" required>
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="O seu email" value="{{ old('email') }}" required>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                        placeholder="O seu contacto telefónico" value="{{ old('phone') }}" required>
                                    @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 form-group mt-3">
                                    <input type="datetime-local" name="appointment_datetime"
                                        class="form-control @error('appointment_datetime') is-invalid @enderror"
                                        value="{{ old('appointment_datetime') }}" required>
                                    @error('appointment_datetime')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3">
                                    <select name="situation" class="form-control @error('situation') is-invalid @enderror" required>
                                        <option value="">Selecione o serviço</option>
                                        <option value="Nutrição" {{ old('situation') == 'Nutrição' ? 'selected' : '' }}>Nutrição</option>
                                        <option value="Consulta" {{ old('situation') == 'Consulta' ? 'selected' : '' }}>Consulta</option>
                                    </select>
                                    @error('situation')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group mt-3">
                                    <select name="doctor" class="form-control @error('doctor') is-invalid @enderror" required>
                                        <option value="">Selecione o profissional</option>
                                        @foreach($staffList as $staff)
                                        <option value="{{ $staff->user->name }}" {{ old('doctor') == $staff->user->name  ? 'selected' : '' }}>
                                            {{ $staff->user->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('doctor')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <textarea name="message" rows="5" class="form-control @error('message') is-invalid @enderror"
                                    placeholder="Mensagem (opcional)">{{ old('message') }}</textarea>
                                @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">Efetuar Marcação</button>
                            </div>
                        </form>

                    </div>

                </section><!-- /Secção de Marcação -->

            </div>

        </div>

    </div>
</div>
@endsection