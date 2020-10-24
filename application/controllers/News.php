<?php

defined("BASEPATH") or exit("No direct script access allowed");

class News extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("news_model");
    }

    public function index()
    {
        $this->data['title'] = "Все новости";
        $this->data['news'] = $this->news_model->getNews();

        $this->generate_view('news/index', $this->data);
    }

    public function view($slug = null)
    {
        $this->data['news_item'] = $this->news_model->getNews($slug);

        if (empty($this->data['news_item'])) {
            show_404();
        }

        $this->data['title'] = $this->data['news_item']['title'];
        $this->data['content'] = $this->data['news_item']['text'];

        $this->generate_view('news/view', $this->data);
    }


    public function create()
    {
        if(!$this->dx_auth->is_admin()){
            $this->load->helper("url_helper");
            redirect("/", "location");
        }

        $this->data['title'] = 'Добавить новость';
        if ($this->input->post('slug') && $this->input->post('title') && $this->input->post('text')) {

            $slug = $this->input->post('slug');
            $title = $this->input->post('title');
            $text = $this->input->post('text');

            if ($this->news_model->setNews($slug, $title, $text)) {
                $this->generate_view('news/success', $this->data);
            }
        } else {
            $this->generate_view('news/create', $this->data);
        }
    }

    public function edit($slug = null)
    {

        if ($this->input->post('slug') && $this->input->post('title') && $this->input->post('text')) {

            $slug = $this->input->post('slug');
            $title = $this->input->post('title');
            $text = $this->input->post('text');

            if ($this->news_model->updateNews($slug, $title, $text)) {
                $this->index();
            }

        } else {


            $this->data['title'] = 'Редактировать новость';
            $this->data['news_item'] = $this->news_model->getNews($slug);

            if (empty($this->data['news_item'])) {
                show_404();
            }

            $this->data['title_news'] = $this->data['news_item']['title'];
            $this->data['text_news'] = $this->data['news_item']['text'];
            $this->data['slug_news'] = $this->data['news_item']['slug'];

            $this->generate_view('news/edit', $this->data);
        }
    }

    public function delete($slug= NULL){
        $this->data['news_delete'] = $this->news_model->getNews($slug);

        if (empty($this->data['news_delete'])) {
            show_404();
        }

        $this->data['title'] = 'Удалить новость';
        $this->data['result'] = 'Ошибка удаления ' . $this->data['news_delete']['title'];

        if($this->news_model->deleteNews($slug)){
            $this->data['result'] = $this->data['news_delete']['title'] . " Успешно удалена";
        }

        $this->generate_view('news/delete', $this->data);

    }
}
