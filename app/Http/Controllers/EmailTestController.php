<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class EmailTestController extends Controller
{
    public function sendTestEmail()
    {
        try {
            // Dados para o email de teste
            $data = [
                'title' => 'Email de Teste - Mailpit',
                'message' => 'Este é um email de teste enviado através do Mailpit no Laragon.',
                'timestamp' => now()->format('d/m/Y H:i:s')
            ];

            // Enviar email de teste
            Mail::to('teste@exemplo.com')
                ->cc('copia@exemplo.com')
                ->bcc('copia-oculta@exemplo.com')
                ->send(new TestEmail($data));

            return response()->json([
                'success' => true,
                'message' => 'Email de teste enviado com sucesso! Verifique o Mailpit em http://localhost:8025',
                'data' => $data
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao enviar email: ' . $e->getMessage()
            ], 500);
        }
    }

    public function testForm()
    {
        return view('email-test');
    }

    public function sendCustomEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        try {
            $data = [
                'title' => $request->subject,
                'message' => $request->message,
                'timestamp' => now()->format('d/m/Y H:i:s')
            ];

            Mail::to($request->email)
                ->send(new TestEmail($data));

            return back()->with('success', 'Email enviado com sucesso! Verifique o Mailpit em http://localhost:8025');

        } catch (\Exception $e) {
            return back()->with('error', 'Erro ao enviar email: ' . $e->getMessage());
        }
    }
}
