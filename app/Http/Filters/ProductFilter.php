<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const NORM_AZOT = 'norm_azot';
    public const NORM_FOSFOR = 'norm_fosfor';
    public const NORM_KALIY = 'norm_kaliy';
    public const CULTURE_ID = 'culture_id';
    public const DISTRICT = 'district';
    public const PRICE = 'price';
    public const DESCRIPTION = 'description';
    public const FUNCTION = 'function';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::NORM_AZOT => [$this, 'normAzot'],
            self::NORM_FOSFOR => [$this, 'normFosfor'],
            self::NORM_KALIY => [$this, 'normKaliy'],
            self::CULTURE_ID => [$this, 'cultureId'],
            self::DISTRICT => [$this, 'district'],
            self::PRICE => [$this, 'price'],
            self::DESCRIPTION => [$this, 'description'],
            self::FUNCTION => [$this, 'function'],
        ];
    }

    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }

    public function normAzot(Builder $builder, $value)
    {
        $builder->whereBetween('norm_azot', $value);
    }

    public function normFosfor(Builder $builder, $value)
    {
        $builder->whereBetween('norm_fosfor', $value);
    }

    public function normKaliy(Builder $builder, $value)
    {
        $builder->whereBetween('norm_kaliy', $value);
    }

    public function cultureId(Builder $builder, $value)
    {
        $builder->whereIn('culture_id', $value);

    }

    public function district(Builder $builder, $value)
    {
        $builder->where('district', 'like', "%{$value}%");
    }

    public function price(Builder $builder, $value)
    {
        $builder->whereBetween('price', $value);
    }

    public function description(Builder $builder, $value)
    {
        $builder->where('description', 'like', "%{$value}%");
    }

    public function function(Builder $builder, $value)
    {
        $builder->where('function', 'like', "%{$value}%");
    }

}
