<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Email - Mailpit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-mailpit {
            background-color: #6f42c1;
            border-color: #6f42c1;
        }
        .btn-mailpit:hover {
            background-color: #5a2d91;
            border-color: #5a2d91;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">📧 Teste de Email - Mailpit</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <div class="row">
                            <!-- Teste Rápido -->
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5>⚡ Teste Rápido</h5>
                                    </div>
                                    <div class="card-body">
                                        <p>Envie um email de teste predefinido rapidamente.</p>
                                        <a href="{{ route('email.test') }}" class="btn btn-success w-100">
                                            📤 Enviar Email de Teste
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Teste Personalizado -->
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5>🎨 Teste Personalizado</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('email.custom') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email de Destino</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                       value="teste@exemplo.com" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="subject" class="form-label">Assunto</label>
                                                <input type="text" class="form-control" id="subject" name="subject"
                                                       value="Teste Personalizado - Mailpit" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="message" class="form-label">Mensagem</label>
                                                <textarea class="form-control" id="message" name="message" rows="3" required>Este é um email de teste personalizado enviado através do Mailpit!</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100">
                                                📩 Enviar Email Personalizado
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Informações -->
                        <div class="card bg-light">
                            <div class="card-header">
                                <h5>ℹ️ Informações do Mailpit</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>📊 Configuração Atual:</h6>
                                        <ul>
                                            <li><strong>MAIL_MAILER:</strong> {{ config('mail.default') }}</li>
                                            <li><strong>MAIL_HOST:</strong> {{ config('mail.mailers.smtp.host') }}</li>
                                            <li><strong>MAIL_PORT:</strong> {{ config('mail.mailers.smtp.port') }}</li>
                                            <li><strong>FROM_ADDRESS:</strong> {{ config('mail.from.address') }}</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>🔗 Links Úteis:</h6>
                                        <ul>
                                            <li>
                                                <a href="http://localhost:8025" target="_blank" class="btn btn-mailpit btn-sm text-white">
                                                    🎯 Abrir Mailpit (localhost:8025)
                                                </a>
                                            </li>
                                            <li class="mt-2">
                                                <a href="{{ url('/') }}" class="btn btn-secondary btn-sm">
                                                    🏠 Voltar ao Site
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="alert alert-info mt-3">
                                    <strong>💡 Dica:</strong> Após enviar um email, acesse o Mailpit em
                                    <a href="http://localhost:8025" target="_blank">localhost:8025</a>
                                    para visualizar os emails capturados.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
