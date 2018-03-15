<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(required={"full_name", "email"}, type="object", @SWG\Xml(name="Owner"))
 *
 * @SWG\Property(property="id",         type="integer",   description="Unique identifier", format="int64")
 * @SWG\Property(property="full_name",  type="string",    description="Owner full name")
 * @SWG\Property(property="email",      type="string",    description="Owner email")
 */
class Owner extends Model
{
    protected $fillable = ['full_name', 'email'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at', 'api_token'];
}
