<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class TestEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:test {email?} {--subject=} {--message=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviar um email de teste para verificar a configuração do Mailpit';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email') ?? 'teste@exemplo.com';
        $subject = $this->option('subject') ?? 'Teste de Email via Artisan - Mailpit';
        $message = $this->option('message') ?? 'Este é um email de teste enviado via comando Artisan para verificar a configuração do Mailpit.';

        $this->info('🚀 Iniciando envio de email de teste...');
        $this->info("📧 Destinatário: {$email}");
        $this->info("📝 Assunto: {$subject}");

        try {
            $data = [
                'title' => $subject,
                'message' => $message,
                'timestamp' => now()->format('d/m/Y H:i:s')
            ];

            Mail::to($email)->send(new TestEmail($data));

            $this->info('✅ Email enviado com sucesso!');
            $this->info('🎯 Verifique o Mailpit em: http://localhost:8025');

            $this->newLine();
            $this->comment('📊 Configuração atual do email:');
            $this->table(
                ['Configuração', 'Valor'],
                [
                    ['MAIL_MAILER', config('mail.default')],
                    ['MAIL_HOST', config('mail.mailers.smtp.host')],
                    ['MAIL_PORT', config('mail.mailers.smtp.port')],
                    ['MAIL_FROM_ADDRESS', config('mail.from.address')],
                    ['MAIL_FROM_NAME', config('mail.from.name')],
                ]
            );

        } catch (\Exception $e) {
            $this->error('❌ Erro ao enviar email: ' . $e->getMessage());
            return 1;
        }

        return 0;
    }
}
