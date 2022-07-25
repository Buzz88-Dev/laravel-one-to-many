<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    // dire che i timestamps() della tabella users_details non li voglio usare se no mi da errore
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'address', 'phone', 'birth',   // questi 4 campi glieli sto andando a passare come array e li devo mettere nel fillable
    ];
    // gli specifico il nome della tabella perche laravel potrebbe non capirlo; determina il nome della tabella sovrascrivendo la convenzione del plurale
    protected $table = 'users_details';
}
