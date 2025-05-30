<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index() {
        $consultations = Consultation::where('user_id', auth()->id())->get();
        return view('admin.consultations.index', compact('consultations'));
    }

    public function store(Request $request) {
        $request->validate([
            'situation' => 'required',
            'appointment_datetime' => 'required|date',
        ]);

        Consultation::create([
            'user_id' => auth()->id(),
            'situation' => $request->situation,
            'appointment_datetime' => $request->appointment_datetime,
            'status' => 'scheduled',
        ]);

        return redirect()->route('consultations.index');
    }

    public function cancel(Consultation $consultation) {
        $this->authorize('cancel', $consultation);
        $consultation->update(['status' => 'canceled']);
        return back();
    }
}
