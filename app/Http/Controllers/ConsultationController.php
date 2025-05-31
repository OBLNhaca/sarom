<?php

namespace App\Http\Controllers;

use App\Mail\NewUserWithConsultation;
use App\Models\Consultation;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ConsultationController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->role === 'cliente') {
            $consultations = Consultation::where('user_id', $user->id)->get();
        } else {
            $consultations = Consultation::all();
        }

        return view('admin.consultations.index', compact('consultations'));
    }


    public function create()
    {
        $staffList = Staff::with('user')->get();
        return view('admin.consultations.create', compact('staffList'));
    }

    public function markConsultation(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:20',
            'situation' => 'required|string',
            'appointment_datetime' => 'required|date',
            'doctor' => 'required|string',
            'message' => 'nullable|string',
        ]);

        // 2. Verificar se já há consulta para esse médico no mesmo horário
        $alreadyTaken = Consultation::where('doctor', $validated['doctor'])
            ->where('appointment_datetime', $validated['appointment_datetime'])
            ->exists();

        if ($alreadyTaken) {
            return back()->withErrors(['appointment_datetime' => 'Este horário já está ocupado para o profissional selecionado.'])->withInput();
        }

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['phone']),
        ]);

        $consultation = Consultation::create([
            'user_id' => $user->id,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'situation' => $validated['situation'],
            'appointment_datetime' => $validated['appointment_datetime'],
            'doctor' => $validated['doctor'],
            'message' => $validated['message'],
            'status' => 'scheduled',
        ]);

        Mail::to($user->email)->send(new NewUserWithConsultation($user, $consultation));

        return redirect()->route('login')->with('success', 'Consulta marcada com sucesso! Verifique o seu email para obter os dados de acesso à conta, o link de entrada e as instruções da consulta.');
    }
    public function confirm(Consultation $consultation)
    {
        // $this->authorize('confirm', $consultation);

        $consultation->update(['status' => 'confirmed']);

        return back()->with('success', 'Consulta confirmada com sucesso.');
    }


    public function cancel(Consultation $consultation)
    {
        $this->authorize('cancel', $consultation);
        $consultation->update(['status' => 'canceled']);
        return back();
    }
}
