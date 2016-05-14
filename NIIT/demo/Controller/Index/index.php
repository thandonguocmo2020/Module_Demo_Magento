<?php

	namespace NIIT\Demo\Controller\Index;

	class Index extends \Magento\Framework\App\Action\Action{

		protected $pageFactory;
		
		public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pF){
			$this->pageFactory = $pF;
			parent::__construct($context);
		}

		public function  execute()
		{
			$page = $this->pageFactory->create();
			$page->getConfig()->getTitle()->prepend(__('NIIT Demo'));
			//print_r($page);die;
			return $page;

		}
	}
?>