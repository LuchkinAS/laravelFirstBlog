<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Http\Controllers\Blog\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\BlogCategory;
use App\Repositories\BlogCategoryRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class BlogCategoryController extends BlogAdminBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
       $paginator = BlogCategory::paginate(7);
       return view('blog.admin.category.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $foundCategory = new BlogCategory();
        $categoryList = BlogCategory::all();

        //dd($categoryList);
        return view('blog.admin.category.edit', compact('foundCategory', 'categoryList'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(UpdateCategoryRequest $request)
    {
        $data = $request->all();

        if(empty($data['slug'])){
            $data['slug'] = Str::slug($data['title']);
        }

        $item = new BlogCategory($data);
        $result = $item->save();

        if($result) {
            return redirect()
                ->route('blog.admin.categories.index')
                ->with(['msg' => 'Success']);
        }

        return back()->withErrors(['msg' => 'Saving error'])->withInput();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        dd(__METHOD__);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @param BlogCategoryRepository $categoryRepository
     * @return View
     */
    public function edit(int $id, BlogCategoryRepository $categoryRepository): View
    {
        $foundCategory = $categoryRepository->getById($id);
        if(empty($foundCategory)) {
            abort(404);
        }
        $categoryList = $categoryRepository->getForSelect();

        //dd($categoryList);
        return view('blog.admin.category.edit', compact('foundCategory', 'categoryList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoryRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, int $id)
    {
        $foundCategory = BlogCategory::find($id);

        if(empty($foundCategory)) {
            return back()->withErrors(['msg' => 'Not found'])->withInput();
        }
        $data = $request->all();

        $result = $foundCategory
            ->fill($data)
            ->save();
        if($result) {
            return redirect()
                ->route('blog.admin.categories.index')
                ->with(['msg' => 'Success']);
        }

        return back()->withErrors(['msg' => 'Saving error'])->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        dd(__METHOD__);
    }
}
