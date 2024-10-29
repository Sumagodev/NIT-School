<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoterInformation extends Model
{
    use HasFactory;
    protected $table = 'voter_information';
    protected $primaryKey = 'id';
}
