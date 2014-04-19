<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    public function showAction()
    {
        $categoryId = $this->dispatcher->getParam('categoryId');
        $userId = $this->dispatcher->getParam('userId');
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

