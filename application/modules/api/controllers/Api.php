<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends MY_Controller {

	/**
     * Class constructor
     *
     * Loads required models, check if user has right to access this class, loads the hook class and add a hook point
     *
     * @return  void
     */
	public function __construct()
	{
		parent::__construct();

		$model_list = [
		'sites/Sites_model' => 'MSites',
		'sites/Pages_model' => 'MPages',
		'api/Quiz_model' => 'MQuiz',
		];
		$this->load->model($model_list);

		$this->hooks =& load_class('Hooks', 'core');

        /** Hook point */
        $this->hooks->call_hook('settings_construct');
	}

	/**
	 * Load the settings page
	 *
	 * @return 	void
	 */
	public function readquiz()
	{
		/** Hook point */
         error_reporting(-1);
		$this->data['title'] = 'KyLeads API';
		$this->data['content'] = 'quiz/getquiz';
		$this->data['quizzes'] = $this->MQuiz->view_quizzes();
        $this->load->view('layout', $this->data);

		// $this->load->view('quiz/Quiz_view');
	}
	public function quiz(){
		$id = isset($_GET['id']) ? $_GET['id'] : die();
		$this->data['title'] = 'KyLeads API';
		$this->data['content'] = 'quiz/quiz';
		$this->data['questions'] = $this->MQuiz->view_questions($id,"questions");
		// var_dump($this->data['quiz']);
        $this->load->view('layout', $this->data);
	}
	
	
}