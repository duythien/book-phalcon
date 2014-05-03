<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    public function showAction($categoryId=1, $userId=2)
    {
        //$year = $this->dispatcher->getParam('year');
        //$postTitle = $this->dispatcher->getParam('postTitle');
         echo "Danh sach bai viet theo category {$categoryId} 
         		boi tac gia {$userId}";

    }

    public function saveAction()
    {
        // Check if request has made with POST
        if ($this->request->isPost() == true) {
            // Access POST data
            $title = $this->request->getPost("title");
            $content = $this->request->getPost("content");
            print "Value1 {$title} and Value2 {$content}";
        }
        //$this->view->abc = "Hello word";
    }
    public function sessionAction()
    {

    }
    public function removeAction()
    {
        //Remove a session variable
        $this->session->remove("user");
    }

    public function logoutAction()
    {
        //Destroy the whole session
        $this->session->destroy();
    }
    public function initialize()
    {
        $user = new \Phalcon\Session\Bag('user');
        $user->name = "Duy Thien";
        $user->age = 24;

        $this->session->set("abc","abcc");
    }
    public function beforeExecuteRoute($dispatcher)
    {
        // This is executed before every found action
        if ($dispatcher->getActionName() == 'save') {

            $this->flash->error("You don't have permission to save posts");

            $this->dispatcher->forward(array(
                'controller' => 'users',
                'action' => 'index'
            ));

            return false;
        }
    }
    public function jsonAction()
    {
       //$this->view->disable();

        //Create a response instance
        $response = new \Phalcon\Http\Response();
        $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
        //Set the content of the response
        $response->setContent(json_encode($arr));

        //Return the response
        return $response;
    }
}

