<?php

namespace App\Admin\Controllers;

use App\Models\Contact;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactusController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contact());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('address', __('Address'));
        $grid->column('address_one', __('Address one'));
        $grid->column('open_time', __('Open time'));
        $grid->column('facebook_url', __('Facebook url'));
        $grid->column('twitter_url', __('Twitter url'));
        $grid->column('inatagram_url', __('Inatagram url'));
        $grid->column('youtube_url', __('Youtube url'));
        $grid->column('admin_mail_address', __('Admin mail address'));
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
        $show = new Show(Contact::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('address', __('Address'));
        $show->field('address_one', __('Address one'));
        $show->field('open_time', __('Open time'));
        $show->field('facebook_url', __('Facebook url'));
        $show->field('twitter_url', __('Twitter url'));
        $show->field('inatagram_url', __('Inatagram url'));
        $show->field('youtube_url', __('Youtube url'));
        $show->field('admin_mail_address', __('Admin mail address'));
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
        $form = new Form(new Contact());

        $form->text('title', __('Title'));
        $form->textarea('address', __('Address'));
        $form->textarea('address_one', __('Address one'));
        $form->text('open_time', __('Open time'));
        $form->text('facebook_url', __('Facebook url'));
        $form->text('twitter_url', __('Twitter url'));
        $form->text('inatagram_url', __('Inatagram url'));
        $form->text('youtube_url', __('Youtube url'));
        $form->text('admin_mail_address', __('Admin mail address'));
        $form->image('image', __('Image'));

        return $form;
    }
}
