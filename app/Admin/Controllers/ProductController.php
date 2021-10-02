<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
       // $grid->column('price', __('Price'));
       // $grid->column('sale_price', __('Sale price'));
        $grid->column('price_range', __('Price range'));
        $grid->column('min_order', __('Min order'));
       // $grid->column('quantity', __('Quantity'));
        $grid->column('featured', __('Featured'));
        $grid->column('description', __('Description'));
       // $grid->column('short_description', __('Short description'));
        $grid->column('image', __('Image'));
       // $grid->column('images', __('Images'));
        $grid->column('category_id', __('Category id'));
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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        // $show->field('price', __('Price'));
        // $show->field('sale_price', __('Sale price'));
        $show->field('price_range', __('Price range'));
        $show->field('min_order', __('Min order'));
        //$show->field('quantity', __('Quantity'));
        $show->field('featured', __('Featured'));
        $show->field('description', __('Description'));
       // $show->field('short_description', __('Short description'));
       // $show->field('image', __('Image'));
         $show->image('image', __('Image'))->as(function ($name) {
            return "/$name";
            })->image();
       // $show->field('images', __('Images'));
        $show->field('category_id', __('Category id'));
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
        $form = new Form(new Product());

        $form->text('name', __('Name'));
        //$form->decimal('price', __('Price'));
       // $form->decimal('sale_price', __('Sale price'));
        $form->text('price_range', __('Price range'));
        $form->number('min_order', __('Min order'));
       // $form->number('quantity', __('Quantity'))->default(10);
        $form->switch('featured', __('Featured'));
        $form->textarea('description', __('Description'));
        //$form->text('short_description', __('Short description'));
        $form->image('image', __('Image'));
       // $form->text('images', __('Images'));
        $form->multipleImage('images')->sortable();
       // $form->number('category_id', __('Category id'));
        $form->select('category_id', 'select category')->options(Category::all()->pluck('name','id'));

        return $form;
    }
}