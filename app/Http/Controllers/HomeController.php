<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Director;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Support\Carbon;
use Image;
use Auth;

class HomeController extends Controller
{
    public function HomeSlider(){
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function Directors(){
        dd('ok');
        $directors = Director::all();
        dd($directors);
        return view("front.about-sub.board",compact('directors'));
    }

    public function AddSlider(){
        return view('admin.slider.create');
    }

    public function StoreSlider(TeamRequest $request){

        $data = $request->validated();
    
        if ($request->hasFile('image')) {
            $slider_image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $slider_image->getClientOriginalExtension();
            $image_path = 'image/slider/' . $name_gen;
    
            // Resize and save the image
            Image::make($slider_image)->resize(1920, 1088)->save(public_path($image_path));
    
            $data['image'] = $image_path;
        }
    
        Team::create($data);
    
        return redirect()->route('home.slider')->with('success', 'Slider Inserted Successfully');
    }

    public function EditSlider($id){
        $slider = Slider::find($id);
        return view('admin.slider.create', compact('slider'));
    }
    
    public function UpdateSlider(Request $request, $id){
        $old_image = $request->old_image;
        $slider_image = $request->file('image');
    
        if ($slider_image) {
            $name_gen = hexdec(uniqid()) . '.' . $slider_image->getClientOriginalExtension();
            Image::make($slider_image)->resize(1920, 1088)->save('image/slider/' . $name_gen);
            $last_img = 'image/slider/' . $name_gen;
    
            unlink($old_image); // Delete the old image
    
            Slider::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
        } else {
            Slider::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'created_at' => Carbon::now()
            ]);
        }
    
        return Redirect()->route('home.slider')->with('success', 'Slider Updated Successfully');
    }
    
    public function DeleteSlider($id){
        $slider = Slider::find($id);
        unlink($slider->image); // Delete the image file
        $slider->delete();
    
        return Redirect()->route('home.slider')->with('success', 'Slider Deleted Successfully');
    }
    




}
 