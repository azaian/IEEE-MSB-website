<?php

namespace App\Http\Controllers;

use App\event_details;
use App\Volunteers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class cpController extends Controller
{
    private $data;
    private $key;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cp/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->getReqData($id);

        $includedPage = "cp.views." . $id;
        return view('cp/index')->with('includedPage', $includedPage)->with($this->key, $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * get required data and select which database to get form
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    private function getReqData($id)
    {
        if ($id == 'v_eventshome') {
            $databaseobj = new Event_details();
            $this->data = $databaseobj->all();
            $this->key = 'events';

        } elseif ($id == 'v_volunteershome') {
            $databaseobj = new Volunteers();
            $this->data = $databaseobj->all();
            $this->key = 'volunteers';
        } elseif ($id == 'junk') {


            $DBEimages = array_flatten(Event_details::all('event_image')->toArray());
            $DBEbanner = array_flatten(Event_details::all('event_banner')->toArray());
            $volunteerimages = array_flatten(Volunteers::all('image')->toArray());
            $eventimages = array_merge($DBEimages, $DBEbanner);
            $dir = 'resources/images/events/';
            $this->deleteimages($eventimages, $dir);
            $dir = 'resources/images/volunteers/';
            $this->deleteimages($volunteerimages, $dir);
            $this->key="deletedimg";

        }

        return redirect("/cp")->with('message', 'undefined index');

    }


    private function deleteimages($images, $dir)
    {

        $imagesfile = scandir($dir);
        foreach ($imagesfile as $image) {
            if ($image == "." || $image == "..")
                continue;


                if (!in_array($image,$images)) {
                    unlink($dir . $image);
                    $this->data[] = $image;


            }
        }

    }
}
