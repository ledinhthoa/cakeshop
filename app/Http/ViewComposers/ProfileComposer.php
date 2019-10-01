<?php


namespace App\Http\ViewComposers;


use App\ProductType;

class ProfileComposer
{

    /**
     * Create a new profile composer.
     *
     * @return  void
     */
    public function __construct()
    {
        //
    }

    /**
     * Bind data to the view.
     *
     * @param    View  $view
     * @return  void
     */
    public function compose(View $view)
    {
        // truyền dữ liệu ở đây nè
        $loai_sp=ProductType::all();
        $view->with('loai_sp',$loai_sp);
    }
}
