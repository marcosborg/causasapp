<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\ContentPage;

class FooterContentPages extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    private $content_pages;

    public function __construct()
    {
        $this->content_pages = ContentPage::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer-content-pages')->with('content_pages', $this->content_pages);
    }
}
