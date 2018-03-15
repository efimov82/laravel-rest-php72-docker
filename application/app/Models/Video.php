<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Enums;
use App\Enums\VideoStatus;
/**
 * @SWG\Definition(required={"title", "owner_id"}, type="object", @SWG\Xml(name="Video"))
 *
 * @SWG\Property(property="id",         type="integer",   readOnly=true, description="Unique identifier for the Video", format="int64")
 * @SWG\Property(property="title",      type="string",    description="Title of the video")
 * @SWG\Property(property="description",type="string",    description="Description of the video")
 * @SWG\Property(property="slug",       type="string",    readOnly=true, description="Slug of the video")
 * @SWG\Property(property="filename",   type="string",    description="Filename of the video")
 * @SWG\Property(property="owner_id",   type="integer",   readOnly=true, description="Owner ID of the video")
 * @SWG\Property(property="owner",      ref="#/definitions/Owner", readOnly=true,  description="Owner of the video")
 * @SWG\Property(property="created_at", type="string", format="YYYY-mm-dd HH:mm:ss", readOnly=true,  description="Datetime create of the article")
 * @SWG\Property(property="status",     ref="#/definitions/VideoStatus"),
 * SWG\Property(property="status",     type="string", description="Encoding status",  enum={"new", "available", "encoding", "unavailable"})
 */
class Video extends Model
{
    /*Bug with use SoftDeletes!
     * Add Comment how fix error "at count(null) in Builder.php line 1185"
        https://github.com/dwijitsolutions/laraadmin/issues/271
     */
    //use SoftDeletes;

    //protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'description', 'filename', 'status'];
    protected $hidden = ['updated_at', 'deleted_at'];

    /**
     * @return App\Models\Owner
     */
    public function owner()
    {
        return $this->belongsTo('App\Models\Owner');
    }

    /**
     *
     * @return string
     */
    public function getStatusAttribute($attribute)
    {
        return VideoStatus::getDescription($attribute);
    }
}
