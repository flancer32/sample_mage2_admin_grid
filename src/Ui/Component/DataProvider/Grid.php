<?php
/**
 * User: Alex Gusev <alex@flancer64.com>
 */
    namespace Flancer32\Sample\Ui\Component\DataProvider;

    class Grid
        extends \Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider
    {
        public function __construct(
            $name,
            \Magento\Framework\Api\Search\ReportingInterface $reporting,
            \Magento\Framework\Api\Search\SearchCriteriaBuilder $searchCriteriaBuilder,
            \Magento\Framework\App\RequestInterface $request,
            \Magento\Framework\Api\FilterBuilder $filterBuilder,
            \Magento\Framework\UrlInterface $url
        ) {
            $primaryFieldName = 'id';
            $requestFieldName = 'id';
            $meta = [];
            $updateUrl = $url->getRouteUrl('mui/index/render');
            $data = [
                'config' => [
                    'component' => 'Magento_Ui/js/grid/provider',
                    'update_url' => $updateUrl
                ]
            ];
            parent::__construct($name, $primaryFieldName, $requestFieldName, $reporting, $searchCriteriaBuilder, $request,
                $filterBuilder, $meta, $data);
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