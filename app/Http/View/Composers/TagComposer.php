<?php

namespace App\Http\View\Composers;

use App\Constracts\TagRepositoryInterface;
use Illuminate\View\View;

class TagComposer
{
    /**
     * The tag repository implementation.
     *
     * @var TagRepositoryInterface
     */
    protected $tags;

    /**
     * Create a new tag composer.
     *
     * @param TagRepositoryInterface $tags
     * @return void
     */
    public function __construct(TagRepositoryInterface $tags)
    {
        // Dependencies automatically resolved by service container...
        $this->tags = $tags;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $select = ['id', 'name', 'slug'];
        $view->with('tags', $this->tags->all($select));
    }
}
