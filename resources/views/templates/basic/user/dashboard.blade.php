@extends($activeTemplate . 'user.layouts.app')

@section('panel')
    <div class="row mb-none-30">
        @if($general->notice != null)
            <div class="col-lg-12 col-sm-6 mb-30">
                <div class="card border--light">
                    <div class="card-header">@lang('Notice')</div>
                    <div class="card-body">
                        <p class="card-text">@php echo $general->notice; @endphp</p>
                    </div>
                </div>
            </div>
        @endif
        @if($general->free_user_notice != null)
            <div class="col-lg-12 col-sm-6 mb-30">
                <div class="card border--light">
                    @if($general->notice == null)
                        <div class="card-header">@lang('Notice')</div>   @endif
                    <div class="card-body">
                        <p class="card-text"> @php echo $general->free_user_notice; @endphp </p>
                    </div>
                </div>
            </div>

        @endif







        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--success b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-wallet"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount(auth()->user()->balance)}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Current Balance')</span>
                    </div>
                    <a href="{{route('user.report.transactions')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <!--div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--primary b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-cloud-upload-alt "></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount($totalDeposit)}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Deposit')</span>
                    </div>
                    <a href="{{route('user.report.deposit')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div-->

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--10 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-cloud-download-alt"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount($totalWithdraw)}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Withdraw')</span>
                    </div>
                    <a href="{{route('user.report.withdraw')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--teal b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-check"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$completeWithdraw}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Complete Withdraw')</span>
                    </div>
                    <a href="{{route('user.report.withdraw')}}?type=complete"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--warning b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-spinner"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$pendingWithdraw}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Pending Withdraw')</span>
                    </div>
                    <a href="{{route('user.report.withdraw')}}?type=complete"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--danger b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-ban"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$rejectWithdraw}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Reject Withdraw')</span>
                    </div>
                    <a href="{{route('user.report.withdraw')}}?type=reject"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <!--div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--cyan b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-money-bill-wave"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount(auth()->user()->total_invest)}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Invest')</span>
                    </div>
                    <a href="{{route('user.report.invest')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div-->

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--12 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-money-bill"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount(auth()->user()->total_ref_com)}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Referral Commission')</span>
                    </div>
                    <a href="{{route('user.report.refCom')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--info b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-tree"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount(auth()->user()->total_binary_com)}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Binary Commission')</span>
                    </div>
                    <a href="{{route('user.report.binaryCom')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--3 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-users"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$total_ref}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Referral')</span>
                    </div>
                    <a href="{{route('user.my.ref')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--15 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-arrow-circle-left"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                            <span class="amount">{{auth()->user()->userExtra->free_left + auth()->user()->userExtra->paid_left}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Left')</span>
                    </div>
                    <a href="{{route('user.my.tree')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--10 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-arrow-circle-right"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span
                            class="amount">{{auth()->user()->userExtra->free_right + auth()->user()->userExtra->paid_left}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Right')</span>
                    </div>
                    <a href="{{route('user.my.tree')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--17 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-cart-arrow-down"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span
                            class="amount">{{auth()->user()->userExtra->bv_left + auth()->user()->userExtra->bv_right}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total IP')</span>
                    </div>
                    <a href="{{route('user.bv.log')}}?type=paidBV"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--19 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-arrow-alt-circle-left"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount(auth()->user()->userExtra->bv_left)}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Left IP')</span>
                    </div>
                    <a href="{{route('user.bv.log')}}?type=leftBV"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--11 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-arrow-alt-circle-right"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount(auth()->user()->userExtra->bv_right)}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Right IP')</span>
                    </div>
                    <a href="{{route('user.bv.log')}}?type=rightBV"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>


        <!--div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--13 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-hand-holding-usd"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount($totalBvCut)}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total IP Cut')</span>
                    </div>
                    <a href="{{route('user.bv.log')}}?type=cutBV"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div-->
    </div>

@endsection

