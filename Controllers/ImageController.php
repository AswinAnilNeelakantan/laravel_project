<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Repositories\ImageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use Validator;

use App\{Category, Project};

class ImageController extends AppBaseController
{
    /** @var  ImageRepository */
    private $imageRepository;

    public function __construct(ImageRepository $imageRepo)
    {
        $this->imageRepository = $imageRepo;
    }

    /**
     * Display a listing of the Image.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->imageRepository->pushCriteria(new RequestCriteria($request));
        $images = $this->imageRepository->all();


        return view('images.index')
            ->with('images', $images);




    }

//    public function getdata()
//    {
//        return view('images.index', [
//            'categories' => Category::all(),
//            'projects' => Project::all(),
//        ]);
//    }


    /**
     * Show the form for creating a new Image.
     *
     * @return Response
     */
    public function create()
    {
//        $typeid = DB::table("categories")->pluck("category","id")->prepend('choose category/sub-category','');

        return view('images.create', [
            'categories' => Category::get()->pluck("category","id")->prepend('choose category/sub-category',''),
            'projects' => Project::get()->pluck("project_name","id")->prepend('choose project',''),
        ]);
//        return view('images.create',compact('typeid'));
    }

//    public function getcategories()
//
//    {
//
//        $categories = DB::table("categories")->lists("name","id");
//
//        return view('images.create',compact('categories'));
//
//    }


    /**

     * Get Ajax Request and restun Data

     *

     * @return \Illuminate\Http\Response

     */

//    public function getcategoriesAjax($id)
//
//    {
//
//        $projects = DB::table("projects")
//
//            ->where("project_name",$id)
//
//            ->lists("name","id");
//
//        return json_encode($projects);
//
//    }




    /**
     * Store a newly created Image in storage.
     *
     * @param CreateImageRequest $request
     *
     * @return Response
     */
    public function store(CreateImageRequest $request)
    {
        $input = $request->all();



        if($request->has('image_url')){
            $input['image_url'] = Storage::disk('public')->put("storage/folder", $request->image_url);
        }
        $image = $this->imageRepository->create($input);

        Flash::success('Image saved successfully.');

        return redirect(route('images.index'));
    }

    /**
     * Display the specified Image.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $image = $this->imageRepository->findWithoutFail($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('images.index'));
        }

        return view('images.show')->with('image', $image);
    }

    /**
     * Show the form for editing the specified Image.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $image = $this->imageRepository->findWithoutFail($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('images.index'));
        }

        return view('images.edit')->with('image', $image);
    }

    /**
     * Update the specified Image in storage.
     *
     * @param  int              $id
     * @param UpdateImageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateImageRequest $request)
    {
        $image = $this->imageRepository->findWithoutFail($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('images.index'));
        }

        $image = $this->imageRepository->update($request->all(), $id);

        Flash::success('Image updated successfully.');

        return redirect(route('images.index'));
    }

    /**
     * Remove the specified Image from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $image = $this->imageRepository->findWithoutFail($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('images.index'));
        }

        $this->imageRepository->delete($id);

        Flash::success('Image deleted successfully.');

        return redirect(route('images.index'));
    }
}
