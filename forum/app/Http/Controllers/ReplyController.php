<?php

namespace App\Http\Controllers;


use App\Inspections\Spam;
use App\Notifications\YouWereMentioned;
use App\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use App\Thread;
use App\Reply;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    /**
     * ReplyController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }


    public function index($channel_id, Thread $thread)
    {
        return $thread->replies()->paginate(20);
    }

    /**
     * @param Thread $thread
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($channel_id, Thread $thread, Spam $spam)
    {

        try{
            $this->authorize('create', new Reply);
        }catch (\Exception $exception){
            return response("Sorry you posting too frequently Please take a break :)", 422);
        }

        try{
//            if(Gate::denies('create', new Reply))
//            {
//                return response("Sorry you posting too frequently", 422);
//            }
            //$this->authorize('create', new Reply());
            $this->validateReply();

//        Reply::create([
//            'thread_id'=>$thread->id,
//            'body'=>$request->body,
//            'user_id'=>Auth()->id()
//        ]);

            $reply = $thread->addReply([
                'body'=>request('body'),
                'user_id'=>auth()->id()
            ]);



        }catch (\Exception $exception){
            return response("Sorry your reply couldn't be saved at this time", 422);
        }

        return $reply->load('owner');
    }




    public  function update(Reply $reply,Spam $spam)
    {
        $this->authorize('update', $reply);

        try{
            $this->validateReply();

            $reply->update(['body' =>request('body')]);
        }catch (\Exception $exception)
        {
            return response("Sorry your reply couldnt be saved at this time", 422);
        }
    }




    public function destroy(Reply $reply)
    {
        $this->authorize('update', $reply);

        $reply->delete();

        return back();
    }

//    public function kill(Reply $reply)
//    {
//        $this->authorize('update', $reply);
//
//        $reply->delete();
//
//        return back();
//    }



    public function validateReply()
    {
        $this->validate(request(), ['body'=>'required']);

        resolve(Spam::class)->detect(request('body'));
    }


}
