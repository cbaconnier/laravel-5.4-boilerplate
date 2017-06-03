<?php

namespace App\App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\App\Models\Invite
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $email
 * @property string $token
 * @property int $invited_by
 * @property int $claimed_by
 * @property string $claimed_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\App\Models\Invite whereClaimedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\App\Models\Invite whereClaimedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\App\App\Models\Invite whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\App\Models\Invite whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\App\Models\Invite whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\App\Models\Invite whereInvitedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\App\App\Models\Invite whereToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\App\Models\Invite whereUpdatedAt($value)
 */
class Invite extends Model
{

    protected $fillable = ['email', 'token', 'invited_by'];

    public function claim()
    {
        $this->claimed_by = \Auth::id();
        $this->claimed_at = new \DateTime();
        $this->save();
    }

}
