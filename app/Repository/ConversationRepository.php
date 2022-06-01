<?php
namespace App\Repository;

use App\Models\Conversation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ConversationRepository {

    /**
     * @var User
     */
    private $user;

    /**
     * @var Conversation
     */
    private $conversation;


    public function __construct(User $user, Conversation $conversation) {
        $this->user = $user;
        $this->conversation = $conversation;
    }

    public function getConversations($userId) {
        $conversations = $this->user->newQuery()
        ->select('nom', 'id', 'image')
        ->where('id', '!=', $userId)
        ->get();

        return $conversations;

        
    }

    public function createMessage($message, $from, $to)
    {
        return $this->conversation->newQuery()->create([
            'message' => $message,
            'from_id' => $from,
            'to_id' => $to,
            'created_at' => Carbon::now(),
        ]);
    }

    

    public function getMessagesFor($from, $to ): Builder
    {   
        return $this->conversation->newQuery()
            ->whereRaw("((from_id = $from AND to_id = $to) OR (from_id = $to AND to_id = $from))")
            ->orderBy('created_at', 'DESC');
    }

    public function unreadCount($userId){
        return $this->conversation->newQuery()->where('to_id', $userId)->groupBy('from_id')->selectRaw('from_id, COUNT(id) as count')->whereRaw('read_at IS NULL')->get()->pluck('count', 'from_id');
    }

    public function readAllFrom($from, $to)
    {
        $this->conversation->where('from_id', $from)->where('to_id', $to)->update(['read_at' => Carbon::now()]);
    }

}