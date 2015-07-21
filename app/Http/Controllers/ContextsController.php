<?php

namespace Sosiogram\Http\Controllers;

use Illuminate\Http\Request;
use Sosiogram\Context;
use Sosiogram\Http\Requests;

class ContextsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $contexts = Context::get();
        return view("contexts.index", compact('contexts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("contexts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Context $context
     * @param Request $request
     * @return Response
     */
    public function store(Context $context, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:contexts|max:255',
        ]);

        $context->fill($request->all())->save();

        return redirect(route('contexts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Context $context
     * @return Response
     * @internal param int $id
     */
    public function show(Context $context)
    {
        return 'show...';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Context $context
     * @return Response
     * @internal param int $id
     */
    public function edit(Context $context)
    {
        return 'edit...';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Context $context
     * @return Response
     * @internal param int $id
     */
    public function update(Context $context)
    {
        return 'update...';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Context $context
     * @return Response
     * @throws \Exception
     * @internal param int $id
     */
    public function destroy(Context $context)
    {
        $context->delete();
        return redirect(route('contexts.index'));
    }
}
