<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Inspections\Spam;
use App\Thread;
use App\Filters\ThreadFilters;
use Illuminate\Http\Request;

class ThreadController extends Controller
{


    /**
     * ThreadController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['show', 'index']);
    }

    /**
     * @param Channel $channel
     * @param ThreadFilters $filters
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Channel $channel, ThreadFilters $filters)
    {
//        $threads = Thread::latest()->filter($filters);
//
//        if($channel->exists)
//        {
//            $threads->where('channel_id', $channel->id);
//        }
//
//        $threads = $threads->get();
//
//        if(\request()->wantsJson()){
//            return $threads;
//        }


        $threads = Thread::all();


        // dd($threads->toSql()) for this to work remove the get function;

        return view('threads.index', compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Thread $thread
     * @return \Illuminate\Http\Response
     */
    public function create(Thread $thread)
    {
        return view('threads.create', compact('thread'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Spam $spam)
    {
       try{
           //dd($request->all());
           $this->validate($request, [
               'title' => 'required',
               'body' => 'required',
               'channel_id' => 'required|exists:channels,id'
           ]);

           $spam->detect(request('body'));

           $thread= Thread::create([
               'user_id' => Auth()->id(),
               'channel_id'=>request('channel_id'),
               'title' => request('title'),
               'body' => request('body')
           ]);

       }catch (\Exception $exception){
           return redirect()->back()
               ->with('flash', "Sorry your Thread couldnt be saved at this time");
       }

        return redirect($thread->path())
            ->with('flash', 'your Thread has been published');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show($channelId, Thread $thread)
    {
        if(auth()->check()){
            auth()->user()->read($thread);
        }
        return view('threads.show', compact('thread'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy($channel,Thread $thread)
    {
        $this->authorize('update', $thread);
//        $thread->replies()->delete();
        $thread->delete();

        if(\request()->wantsJson())
        {
            return response([], 204);
        }

        return redirect('/thread');
    }
}
