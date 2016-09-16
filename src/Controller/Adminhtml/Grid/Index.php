<?php
/**
 * User: Alex Gusev <alex@flancer64.com>
 */
namespace Flancer32\Sample\Controller\Adminhtml\Grid;

/**
 * Controller for "/admin/sample/index".
 */
class Index
    extends \Magento\Backend\App\Action
{
    const ACL_RESOURCE = 'Flancer32_Sample::sample_grid';
    const MENU_ITEM = 'Flancer32_Sample::sample_grid';
    const TITLE = 'Sample Grid';

    /** @var \Magento\Framework\View\Result\PageFactory */
    protected $_resultPageFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
    }

    /**
     * Check ACL permissions.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        $result = $this->_authorization->isAllowed(self::ACL_RESOURCE);
        return $result;
    }

    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu(self::MENU_ITEM);
        $resultPage->getConfig()->getTitle()->prepend(__(self::TITLE));
        return $resultPage;
    }
}