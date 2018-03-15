<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(required={"title", "body"}, type="object", @SWG\Xml(name="Article"))
 *
 * @SWG\Property(property="id",         type="integer",   readOnly=true,    description="Unique identifier for the article", format="int64")
 * @SWG\Property(property="title",      type="string",    description="Title of the article")
 * @SWG\Property(property="body",       type="string",    description="Body of the article")
 * @SWG\Property(property="created_at", type="string",    format="YYYY-mm-dd HH:mm:ss", readOnly=true,  description="Datetime create of the article")
 * @SWG\Property(property="updated_at", type="string",    format="YYYY-mm-dd HH:mm:ss", readOnly=true,  description="Datetime update of the article")
 */
class Article extends Model
{
    protected $fillable = ['title', 'body'];

    protected $hidden = ['deleted_at'];
}
