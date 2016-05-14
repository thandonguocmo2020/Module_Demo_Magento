<?php

// de chay dc bat dau tu index. xu ly tu controller
// mo rong tu extends \Magento\Framework\App\Action\Action
// Xu dung bien chung $pageFactory;
// xu dung ham khoi tao truyen vao 

namespace NIIT\Demo\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action {

    protected $pageFactory;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pF) {
        /// 1 contect ngu canh lam viec
//  2 class return trang ket qua result 	
        var_dump($pF);
        die();
        $this->pageFactory = $pF;

        parent::__construct($context);
    }

    // ham xuat noi dung hien thi ra ngoai
    public function execute() {
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->prepend(__('NIIT Demo'));
        //print_r($page);die;
        return $page;
        // return page
        // goi sang trang layout cho lam viec
    }

}

?>