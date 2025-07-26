<?php


use Illuminate\Http\Request;
use App\Models\User;

Route::post('/login', function (Request $request) {
    $user = User::with('userDetail')->where('mail', $request->email)->first();

    if (!$user) {
        return response()->json(['success' => false, 'error' => 'Usuario no encontrado'], 404);
    }

    if (!$user->userDetail) {
        return response()->json(['success' => false, 'error' => 'Detalle no encontrado'], 404);
    }

    if ($user->userDetail->password !== $request->password) {
        return response()->json(['success' => false, 'error' => 'Contraseña incorrecta'], 401);
    }

    return response()->json(['success' => true, 'user' => $user]);
});
