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
        $resultPage = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu(self::MENU_ITEM);
        $resultPage->getConfig()->getTitle()->prepend(__(self::TITLE));
        return $resultPage;
    }
}