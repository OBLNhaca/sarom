<h2>Olá {{ $user->name }},</h2>

<p>Obrigado por marcar a sua consulta.</p>

<p><strong>Dados da Marcação:</strong></p>
<ul>
    <li>Serviço: {{ $consultation->situation }}</li>
    <li>Profissional: {{ $consultation->doctor }}</li>
    <li>Data/Hora: {{ \Carbon\Carbon::parse($consultation->appointment_datetime)->format('d/m/Y H:i') }}</li>
</ul>

<p><strong>Conta Criada com Sucesso!</strong></p>
<p>Utilize os seguintes dados para aceder ao sistema:</p>
<ul>
    <li>Email: {{ $user->email }}</li>
    <li>Senha: {{ $consultation->phone }}</li>
</ul>

<p>Link de acesso: <a href="{{ url('/login') }}">{{ url('/login') }}</a></p>

<p>Recomendamos que altere a sua senha após o primeiro acesso.</p>

<p>Obrigado!</p>
