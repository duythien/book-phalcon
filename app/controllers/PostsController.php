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
            print $title = $this->request->getPost("title");
            $content = $this->request->getPost("content");
        }
    }

}

