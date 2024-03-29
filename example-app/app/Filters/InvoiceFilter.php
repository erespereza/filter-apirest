<?php
namespace App\Filters;

class CustomerFilter extends ApiFilter
{
    protected $safeParams = [
        'customer_id' =>    ['eq', 'neq', 'gt', 'gte', 'lt', 'lte'],
        'amount' =>         ['eq', 'neq', 'gt', 'gte', 'lt', 'lte'],
        'status' =>         ['eq', 'neq', 'gt', 'gte', 'lt', 'lte'],
        'billed_dated' =>   ['eq', 'neq', 'gt', 'gte', 'lt', 'lte'],
        'paid_dated' =>     ['eq', 'neq', 'gt', 'gte', 'lt', 'lte'],
    ];
    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDated' => 'billed_dated',
        'paidDated' => 'paid_dated',
    ];

}