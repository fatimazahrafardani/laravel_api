<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    // Allow mass assignment for these fields
    protected $fillable = ['name', 'email', 'designation', 'contact_no'];
}
