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
        return $this->user->newQuery()
        ->select('nom', 'id')
        ->where('id', '!=', $userId)
        ->get();
        
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

}