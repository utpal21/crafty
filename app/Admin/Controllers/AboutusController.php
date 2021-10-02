<?php

namespace App\Admin\Controllers;

use App\Models\About;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AboutusController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'About';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new About());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('mission', __('Mission'));
        $grid->column('vision', __('Vision'));
        $grid->column('image', __('Image'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(About::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('mission', __('Mission'));
        $show->field('vision', __('Vision'));
        $show->field('image', __('Image'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new About());

        $form->text('title', __('Title'));
        $form->textarea('mission', __('Mission'));
        $form->textarea('vision', __('Vision'));
        $form->image('image', __('Image'));

        return $form;
    }
}