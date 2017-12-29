<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class SlideController extends Controller
{
    public function listSlide()
    {
        $slides = Slide::All();
        return view('admin.slide.list-slide', compact('slides'));
    }

    public function getAddSlide()
    {
        return view('admin.slide.add-slide');
    }

    public function postAddSlide(request $req)
    {
        $images=array();
        if($files = $req -> file('slide'))
        {
        foreach($files as $file)
            {
                $data = new Slide;
                $name = time()."_".$file->getClientOriginalName();
                $destinationPath = public_path('images/slider');
                $file->move($destinationPath ,$name);
                $images[]=$name;
                $data ->name = $name;
                $data ->save();
            }
        }
        return redirect('ad-guitardn/slides');
    }

    public function getEditSlide($id)
    {
        $slide = Slide::find($id);
        return view('admin.slide.edit-slide', compact('slide'));
    }

    public function postEditSlide(request $rq,$id)
    {
        $data = Slide::find($id);
        if($rq->hasFile('slide'))
        {
            $file = $rq->file('slide');
            $name = time()."_".$file->getClientOriginalName();
            $destinationPath = public_path('images/slider');
            $file->move($destinationPath ,$name);
            $data ->name = $name;
        }
        $data ->update();
        return redirect('ad-guitardn/slides');
    }

    public function deleteSlide($id)
    {
        $deleteSlide = Slide::find($id);
        $deleteSlide ->delete();
        return redirect('ad-guitardn/slides');
    }
}
