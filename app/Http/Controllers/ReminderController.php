<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function generate() {
        $consultations = Consultation::whereDate('appointment_datetime', now()->addDay())->get();
        foreach ($consultations as $consultation) {
            Reminder::create([
                'consultation_id' => $consultation->id,
                'message' => 'Lembrete: você tem uma consulta agendada para amanhã.',
                'sent_at' => now(),
            ]);
        }
        return response()->json(['status' => 'Reminders sent']);
    }
}
