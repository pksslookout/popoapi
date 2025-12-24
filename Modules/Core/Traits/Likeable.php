<?php 
namespace Modules\Core\Traits;
use DB;

trait Likeable
{
    protected $likeType = null;

    public function scopeLikedBy($query, $user)
    {
        $type = $this->likeType ?: str_singular($this->table);
        return $query->join('like_relations', $this->table . '.id', '=', 'target_id')->where([
            'like_relations.user_id' => $user->id,
            'like_relations.type' => $type
        ])->orderBy('like_relations.id', 'desc');
    }

    public function like_users()
    {
        $type = $this->likeType ?: str_singular($this->table);
        return $this->belongsToMany('\Modules\User\Entities\User', 'like_relations', 'target_id')->wherePivot('type', $type)->withTimestamps();
    }

    public function updateLikeCount($total)
    {
        // 点赞数增加或减少
        if (!is_null($this->like_total)) {
            $this->like_total += $total;
            $this->like_total = $this->like_total < 0 ? 0 : $this->like_total;
            $this->save();
        }
        elseif (method_exists($this, 'updateStat'))
            $this->updateStat('like', $total);
    }

    public function like($user)
    {
        $type = $this->likeType ?: str_singular($this->table);
        $this->like_users()->syncWithoutDetaching([ 
            $user->id => [
                'type' => $type
            ]
        ]);

        $this->updateLikeCount(1);
    }

    public function cancelLike($user)
    {
        $type = $this->likeType ?: str_singular($this->table);
        $this->like_users()->detach($user->id);

        $this->updateLikeCount(-1);
        // $item->updateStat('like', -1);
    }

    public function isLikedBy($user)
    {
        if (is_null($user))
            return 0;
        
        $type = $this->likeType ?: str_singular($this->table);

        return DB::table('like_relations')->where([
            'user_id' => $user->id,
            'type' => $type,
            'target_id' => $this->id
        ])->first() ? 1 : 0;
    }

    public function likeOrUnlike($user)
    {
        if ($this->isLikedBy($user))
            $this->cancelLike($user);
        else 
            $this->like($user);
    }
}

?>