<section class="mb-5">
    <header class="mb-3">
        <h2 class="h5 text-dark">
            {{ __('Excluir Conta') }}
        </h2>
        <p class="text-muted small">
            {{ __('Uma vez que sua conta for excluída, todos os seus dados serão permanentemente apagados. Baixe tudo que deseja guardar antes de continuar.') }}
        </p>
    </header>

    <!-- Botão para abrir o modal -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmUserDeletionModal">
        {{ __('Excluir Conta') }}
    </button>

    <!-- Modal Bootstrap -->
    <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" aria-labelledby="confirmUserDeletionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{ route('profile.destroy') }}" class="modal-content">
                @csrf
                @method('delete')

                <div class="modal-header">
                    <h5 class="modal-title" id="confirmUserDeletionModalLabel">{{ __('Tem certeza que deseja excluir sua conta?') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>

                <div class="modal-body">
                    <p class="text-muted">
                        {{ __('Ao excluir sua conta, todos os dados serão permanentemente apagados. Digite sua senha para confirmar.') }}
                    </p>

                    <div class="mb-3">
                        <label for="password" class="form-label visually-hidden">{{ __('Senha') }}</label>
                        <input type="password" name="password" id="password" placeholder="{{ __('Senha') }}"
                               class="form-control @error('password', 'userDeletion') is-invalid @enderror">
                        @error('password', 'userDeletion')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cancelar') }}</button>
                    <button type="submit" class="btn btn-danger">{{ __('Excluir Conta') }}</button>
                </div>
            </form>
        </div>
    </div>
</section>
