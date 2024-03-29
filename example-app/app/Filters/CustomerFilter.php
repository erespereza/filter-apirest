<?php
namespace App\Filters;

class CustomerFilter extends ApiFilter
{
    protected $safeParams = [
        'name' =>       ['eq'],
        'type' =>       ['eq'],
        'email' =>      ['eq'],
        'phone' =>      ['eq'],
        'address' =>    ['eq'],
        'city' =>       ['eq'],
        'state' =>      ['eq'],
        'PostalCode' => ['eq', 'gt', 'lt'],
    ];
    protected $columnMap = [
        'PostalCode' => 'postal_code'
    ];

}