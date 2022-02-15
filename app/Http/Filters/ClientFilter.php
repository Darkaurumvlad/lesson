<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class ClientFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const DELIVERY_COST = 'delivery_cost';
    public const REGION = 'region';
    public const AGREEMENT_DATE = 'agreement_date';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::DELIVERY_COST => [$this, 'deliveryCost'],
            self::REGION => [$this, 'region'],
            self::AGREEMENT_DATE => [$this, 'agreementDate'],
        ];

    }


    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }

    public function deliveryCost(Builder $builder, $value)
    {
        $builder->whereBetween('delivery_cost', $value);
    }

    public function region(Builder $builder, $value)
    {
        $builder->where('region', 'like', "%{$value}%");
    }

    public function agreementDate(Builder $builder, $value)
    {
        $builder->where('agreement_date', $value);
    }

}
