<?php
namespace Ceymox\Training\Controller\Index;

class Register extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	
	/*Index Constructor*/

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory
	    )
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		
		return $this->_pageFactory->create();
	}
}