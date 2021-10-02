<?php

namespace App\Admin\Controllers;

use App\Models\Happyclient;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HappyclientController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Happyclient';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Happyclient());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('designation', __('Designation'));
        $grid->column('description', __('Description'));
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
        $show = new Show(Happyclient::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('designation', __('Designation'));
        $show->field('description', __('Description'));
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
        $form = new Form(new Happyclient());

        $form->text('name', __('Name'));
        $form->text('designation', __('Designation'));
        $form->textarea('description', __('Description'));
        $form->image('image', __('Image'));

        return $form;
    }
}
