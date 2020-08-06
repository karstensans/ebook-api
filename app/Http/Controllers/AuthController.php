<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller {
    
    public function me() {
        return [
            "nis" => 3103118079,
            "name" => "Karsten Errando Winoto",
            "gender" => "Laki-laki",
            "phone" => 6288216380454,
            "class" => "XII RPL 3"
        ];
    }
}