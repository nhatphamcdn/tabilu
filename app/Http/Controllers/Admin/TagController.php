<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTagRequest;
use App\Constracts\TagRepositoryInterface;

class TagController extends BaseController
{
    /**
     * The tag repository implementation.
     *
     * @var TagRepositoryInterface
     */
    protected $tags;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TagRepositoryInterface $tags)
    {
        parent::__construct();

        // Dependencies automatically resolved by service container...
        $this->tags = $tags;
    }

    /**
     * Render dashboard view.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        if($request->ajax())
        {
            return $this->tags->create($request->only(['name', 'slug']));
        }
    }
}