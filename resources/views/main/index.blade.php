@extends('layouts.main')

@section('content')

<main>
    <div class="container">
        <h5 class="text-center pricing-table-subtitle">PRICING PLAN</h5>
        <h1 class="text-center pricing-table-title">Pricing Table</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card pricing-card pricing-plan-basic">
                    <div class="card-body">
                        <i class="mdi mdi-cube-outline pricing-plan-icon"></i>
                        <p class="pricing-plan-title">Basic</p>
                        <h3 class="pricing-plan-cost ml-auto">FREE</h3>
                        <ul class="pricing-plan-features">
                            <li>Unlimited conferences</li>
                            <li>100 participants max</li>
                            <li>Custom Hold Music</li>
                            <li>10 participants max</li>
                        </ul>
                        <a href="#!" class="btn pricing-plan-purchase-btn">Free</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card pricing-card pricing-card-highlighted  pricing-plan-pro">
                    <div class="card-body">
                        <i class="mdi mdi-trophy pricing-plan-icon"></i>
                        <p class="pricing-plan-title">Pro</p>
                        <h3 class="pricing-plan-cost ml-auto">$49</h3>
                        <ul class="pricing-plan-features">
                            <li>Unlimited conferences</li>
                            <li>100 participants max</li>
                            <li>Custom Hold Music</li>
                            <li>10 participants max</li>
                        </ul>
                        <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card pricing-card pricing-plan-enterprise">
                    <div class="card-body">
                        <i class="mdi mdi-wallet-giftcard pricing-plan-icon"></i>
                        <p class="pricing-plan-title">Enterprise</p>
                        <h3 class="pricing-plan-cost ml-auto">$69</h3>
                        <ul class="pricing-plan-features">
                            <li>Unlimited conferences</li>
                            <li>100 participants max</li>
                            <li>Custom Hold Music</li>
                            <li>10 participants max</li>
                        </ul>
                        <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
