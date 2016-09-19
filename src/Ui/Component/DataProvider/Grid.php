<?php
/**
 * User: Alex Gusev <alex@flancer64.com>
 */

namespace Flancer32\Sample\Ui\Component\DataProvider;


use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\Search\ReportingInterface;
use Magento\Framework\Api\Search\SearchCriteriaBuilder;
use Magento\Framework\App\RequestInterface;

class Grid
    extends \Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider
    implements \Magento\Framework\View\Element\UiComponent\DataProvider\DataProviderInterface
{
    public function __construct(
        $name,
        $data,
        ReportingInterface $reporting,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        RequestInterface $request,
        FilterBuilder $filterBuilder
    ) {
        $primaryFieldName = 'entity_id';
        $requestFieldName = 'id';
        parent::__construct($name, $primaryFieldName, $requestFieldName, $reporting, $searchCriteriaBuilder, $request,
            $filterBuilder, [], $data);
    }

    public function getData()
    {
        $result = [
            'items' => [
                ['code2' => 'AU', 'code3' => 'AUS', 'code_num' => '036'],
                ['code2' => 'AT', 'code3' => 'AUT', 'code_num' => '040'],
                ['code2' => 'AZ', 'code3' => 'AZE', 'code_num' => '031']
            ],
            'totalRecords' => 3
        ];
        return $result;
    }

}