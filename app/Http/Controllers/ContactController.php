<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $message = ContactMessage::create($validated);

        try {
            Mail::to('daocheick383@gmail.com')->send(new ContactMessageCreated($message));
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Erreur d\'envoi email: ' . $e->getMessage());
        }

        return back()->with('success', 'Votre message a bien été envoyé ! Je vous répondrai dans les plus brefs délais.');
    }
}
