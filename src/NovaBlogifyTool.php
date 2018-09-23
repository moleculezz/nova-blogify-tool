<?php

namespace Mattmangoni\NovaBlogifyTool;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;
use Mattmangoni\NovaBlogifyTool\Resources\Category;
use Mattmangoni\NovaBlogifyTool\Resources\Post;
use Mattmangoni\NovaBlogifyTool\Resources\Comment;
use Mattmangoni\NovaBlogifyTool\Resources\Tag;

class NovaBlogifyTool extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-blogify-tool', __DIR__.'/../dist/js/tool.js');
        Nova::style('nova-blogify-tool', __DIR__.'/../dist/css/tool.css');

        Nova::resources([
            Category::class,
            Post::class,
            Comment::class,
            Tag::class,
        ]);
    }

    /**
     * Build the view that renders the navigation links for the tool.
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('nova-blogify-tool::navigation');
    }
}
