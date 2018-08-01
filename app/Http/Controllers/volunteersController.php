<?php

namespace App\Http\Controllers;

use App\Http\Requests\createVolunteerRequest;
use App\Http\Requests\UpdateVolunteerRequest;
use App\Volunteers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class volunteersController extends Controller
{
    private $imagename;
    private $files;

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
        $volunteers = Volunteers::all()->sortBy('order');
        return view('pages.aboutVolunteers')->with('volunteers', $volunteers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $includedPage = "cp.views.v_addvolunteer";
        return view('cp.index')->with('includedPage', $includedPage);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param createVolunteerRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(createVolunteerRequest $request)
    {
        $this->files = $request->input();

        if ($this->uploadimages($request)) {

            Volunteers::create($this->files);

            Session::flash('messages', 'successfully added volunteer');
            return redirect('/cp/v_volunteershome');

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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $volunteer = Volunteers::findOrFail($id);
        $includedPage = "cp.views.v_editvolunteer";
        return view('cp.index')->with('includedPage', $includedPage)->with('volunteer', $volunteer);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateVolunteerRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVolunteerRequest $request, $id)
    {
        $this->files = $request->input();

        $volunteer = Volunteers::find($id);

        if ($request->hasFile('image')) {
            $this->uploadimages($request);
            $images[0] = $volunteer->event_image;
            $images[1] = '';
            $this->deleteimages($images);
        }


        $volunteer->update($this->files);
        Session::flash('messages', 'volunteer ' . $volunteer->name . ' details successfully updated');
        return redirect("/cp/v_volunteershome");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Volunteers::findOrFail($id);
        $images[0] = $obj->event_image;
        $images[1]='';
        $this->deleteimages($images);
        $obj->delete();
        Session::flash('messages', 'successfully  deleted volunteer wih id : ' . $id);
        return redirect('/cp/v_volunteershome');
    }


    private function uploadimages(Request $request)
    {
        $dest = "resources/images/volunteers/";

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $this->imagename[0] = time() . $file->getClientOriginalName();
            $file->move($dest, $this->imagename[0]);
            $this->files['image'] = $this->imagename[0];
        }



        /**
         * prepare uploaded names
         */
        $this->files['username_id'] = '';
        return true;

    }

    private function deleteimages($images)
    {
        $dir = 'resources/images/volunteers/';
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
