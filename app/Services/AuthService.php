<?php
namespace App\Services;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;

class AuthService {
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function register($params)
    {
        try {            
            return $this->user->create($params);
        } catch (Exception $e) {
            Log::error($e);

            return false;
        }
    }
}