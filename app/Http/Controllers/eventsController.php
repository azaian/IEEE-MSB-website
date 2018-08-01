<?php

namespace App\Http\Controllers;


use App\Http\Requests\UpdateEventRequest;
use Illuminate\Http\Request;
use App\Http\Requests\createEventRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event_details;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Mockery\CountValidator\Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;


class eventsController extends Controller
{

    private $imagename = [];
    private $files = [];


    /**
     * eventsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $event = NUll;
        $events = Event_details::all()->sortBy('order');
        return view('pages.events')
            ->with('events', $events)
            ->with('event', $event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $includedPage = "cp.views.v_addevent";
        return view('cp.index')->with('includedPage', $includedPage);

    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(createEventRequest $request)
    {
        $this->files = $request->input();
        if ($this->uploadimages($request)) {
            Event_details::create($this->files);
            session::flash('messages','successfully added event');
            return redirect('/cp/v_eventshome');

        } else {
            return view('/');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events = NUll;
        $event = Event_details::findOrFail($id);
        return view('pages.events')
            ->with('event', $event)
            ->with('events', $events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event_details::findOrFail($id);
        $includedPage = "cp.views.v_editevent";
        return view('cp.index')->with('includedPage', $includedPage)->with('event', $event);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateEventRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, $id)
    {
        $this->files = $request->input();

        $eventobj = Event_details::find($id);

        if ($request->hasFile('event_image')) {
            $this->uploadimages($request);
            $images[0] = $eventobj->event_image;
            $images[1] = '';
            $this->deleteimages($images);
        }
        if ($request->hasFile('event_banner')) {
            $images[0] = '';
            $images[1] = $eventobj->event_banner;
            $this->deleteimages($images);
        }

        $eventobj->update($this->files);
        session::flash('messages','event '.$eventobj->event_name.' successfully updated');
        return redirect("/cp/v_eventshome");



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Event_details::findOrFail($id);
        $images[0] = $obj->event_image;
        $images[1] = $obj->event_banner;
        $this->deleteimages($images);
        $obj->delete();
        Session::flash('messages', 'successfully added deleted event wih id : '.$id);
        return redirect('/cp/v_eventshome');


    }


    /**
     * @param Request $request
     * @return bool
     */
    private function uploadimages(Request $request)
    {
        $dest = "resources/images/events/";

        if ($request->hasFile('event_banner')) {
            $file = $request->file('event_banner');
            $this->imagename[0] = time() . $file->getClientOriginalName();
            $file->move($dest, $this->imagename[0]);
            $this->files['event_image'] = $this->imagename[0];
        }


        if ($request->hasFile('event_image')) {
            $file = $request->file('event_image');
            $this->imagename[1] = "th-" . time() . $file->getClientOriginalName();
            $file->move($dest, $this->imagename[1]);
            $this->files['event_banner'] = $this->imagename[1];
        }

        /**
         * prepare uploaded names
         */
        $this->files['username_id'] = '';
        return true;

    }

    private function deleteimages($images)
    {
        $dir = 'resources/images/events/';
        $imagesfile = scandir($dir);
        foreach ($imagesfile as $image) {
            if ($image == "." || $image == "..")
                continue;

            if ($image == $images[0] || $image == $images[1]) {
                unlink($dir . $image);
            }
        }

    }


}
