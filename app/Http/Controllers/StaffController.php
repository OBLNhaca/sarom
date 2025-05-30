<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    public function index()
    {
        $staffList = Staff::with('user')->get();
        return view('admin.staff.index', compact('staffList'));
    }

    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'position' => 'required|string|max:255',
        ]);

        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make('password'),
            ]);

            Staff::create([
                'position' => $request->position,
                'user_id' => $user->id,
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'Membro do staff criado com sucesso.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao criar membro do staff.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'position' => 'required|string|max:255',
        ]);

        DB::beginTransaction();

        try {
            $staff = Staff::findOrFail($id);
            $user = $staff->user;
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            $staff->update([
                'position' => $request->position,
            ]);

            DB::commit();

            return redirect()->route('funcionarios.index')->with('success', 'Funcionário atualizado com sucesso.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao atualizar funcionário.' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            $staff = Staff::findOrFail($id);
            $user = $staff->user;

            $staff->delete();

            if ($user) {
                $user->delete();
            }

            DB::commit();

            return redirect()->route('funcionarios.index')->with('success', 'Funcionário deletado com sucesso.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao deletar funcionário: ' . $e->getMessage());
        }
    }
}
