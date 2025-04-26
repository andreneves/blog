<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use OwenIt\Auditing\Contracts\Auditable;

class Postagem extends Model implements Auditable
{

    use \OwenIt\Auditing\Auditable;

    protected $table = 'postagens';


    public function categoria(): HasOne
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }

    public function autor(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
