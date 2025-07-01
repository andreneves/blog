<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['title'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #007bff;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #007bff;
            margin: 0;
        }
        .content {
            margin-bottom: 30px;
        }
        .message {
            background-color: #f8f9fa;
            padding: 20px;
            border-left: 4px solid #007bff;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
            color: #6c757d;
            font-size: 14px;
        }
        .info-box {
            background-color: #e7f3ff;
            border: 1px solid #b3d9ff;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ $data['title'] }}</h1>
            <p>Sistema de Blog - Laravel</p>
        </div>

        <div class="content">
            <h2>🎉 Parabéns! O Mailpit está funcionando!</h2>
            
            <div class="message">
                <p><strong>Mensagem:</strong></p>
                <p>{{ $data['message'] }}</p>
            </div>

            <div class="info-box">
                <h3>📧 Informações do Teste</h3>
                <ul>
                    <li><strong>Data/Hora:</strong> {{ $data['timestamp'] }}</li>
                    <li><strong>Servidor SMTP:</strong> 127.0.0.1:1025</li>
                    <li><strong>Ambiente:</strong> Laravel com Laragon</li>
                    <li><strong>Status:</strong> ✅ Email capturado pelo Mailpit</li>
                </ul>
            </div>

            <p>Este email foi enviado como teste para verificar a configuração do Mailpit no seu ambiente de desenvolvimento Laravel.</p>

            <div style="text-align: center; margin: 30px 0;">
                <a href="http://localhost:8025" 
                   style="background-color: #007bff; color: white; padding: 12px 24px; text-decoration: none; border-radius: 5px; display: inline-block;">
                    🔗 Acessar Mailpit (localhost:8025)
                </a>
            </div>
        </div>

        <div class="footer">
            <p>Este é um email de teste gerado automaticamente.</p>
            <p>Sistema de Blog - Laravel {{ date('Y') }}</p>
        </div>
    </div>
</body>
</html>
