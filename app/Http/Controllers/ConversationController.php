<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repository\ConversationRepository;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    /**
     * * @var ConversationRepository
     */
    private $r;
    /**
     * * @var AuthManager
     */
    private $auth;

    public function __construct(ConversationRepository $conversationRepository, AuthManager $auth){
        $this->r = $conversationRepository;
        $this->auth = $auth;
    }

    public function index()
    {
        
        return view('back/conversations/index', [
            'users' => $this->r->getConversations($this->auth->user()->id)
        ]);
    }

    public function show(User $user)
    {
        
        return view('back/conversations/show', [
            'users' => $this->r->getConversations($this->auth->user()->id),
            'user' => $user,
            'messages' => $this->r->getMessagesFor($this->auth->user()->id, $user->id)->get()->reverse()
        ]);
    }

    public function store(User $user, Request $request) {
        $this->r->createMessage(
            $request->get('message'),
            $this->auth->user()->id,
            $user->id

        );
        return redirect(route('conversations.show', $user->id));
    }
}
