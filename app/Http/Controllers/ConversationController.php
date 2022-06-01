<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Models\Conversation;
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
        $conversations = Conversation::all();
        return view('back/conversations/index', [
            'users' => $this->r->getConversations($this->auth->user()->id),
            'unread' => $this->r->unreadCount($this->auth->user()->id)
        ], compact('conversations'));
    }

    public function show(User $user)
    {   

        $previousURL = url()->previous();
        $explodetURL = explode('/', $previousURL);
        
        $conversations = Conversation::all();
        $messages = $this->r->getMessagesFor($this->auth->user()->id, $user->id)->paginate(100);
        $unread = $this->r->unreadCount($this->auth->user()->id);
        if(isset($unread[$user->id]))
        {
            $this->r->readAllFrom($user->id, $this->auth->user()->id );
            $unread[$user->id] = 0;
        }
        if($explodetURL[3] === "front" ){
            return redirect()->back();
        }
        
            return view('back/conversations/show', [
            'users' => $this->r->getConversations($this->auth->user()->id),
            'user' => $user,
            'messages' => $messages,
            'unread' => $unread,
        ], compact('conversations'));
        
        
    }

    public function store(User $user, StoreMessageRequest $request) {
        $this->r->createMessage(
            $request->get('message'),
            $this->auth->user()->id,
            $user->id

        );
        
        return redirect(route('conversations.show', $user->id));
    }

    
    
}
