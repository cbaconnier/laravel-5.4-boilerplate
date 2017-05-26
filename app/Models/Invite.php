<?php

namespace App\App\Models;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{

    protected $fillable = ['email', 'token', 'invited_by'];

    public function claimed()
    {
        $this->claimed_by = \Auth::id();
        $this->claimed_at = new \DateTime();
        $this->save();
    }

}
