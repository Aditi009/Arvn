<?php

namespace App\Http\Middleware;

use App\Models\BonusCredited;
use App\Models\User;
use App\Models\Transaction;
use App\Models\GeneralSetting;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckBonusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
          $id = Auth::user()->id;
          $user               = User::where('id', $id)->with('userExtra')->first();
          $is_leader          = ($user->userExtra->free_right >= 5 && $user->userExtra->free_left >= 5) ? 1 : 0;
          if($is_leader){
            $bonus = BonusCredited::where(['user_id'=>$id,'bonus_type'=>'leader'])->first();
            if(!$bonus){
             
                    $amount = getAmount(100);
                    $general = GeneralSetting::first(['cur_text','cur_sym']);
                    $trx = getTrx();
            
                        $user->balance += $amount;
                        $user->save();
                        $notify[] = ['success', $general->cur_sym . $amount . ' has been added to ' . $user->username . ' balance'];
            
            
                        $transaction = new Transaction();
                        $transaction->user_id = $user->id;
                        $transaction->amount = $amount;
                        $transaction->post_balance = getAmount($user->balance);
                        $transaction->charge = 0;
                        $transaction->trx_type = '+';
                        $transaction->details = 'Added Balance For Leadership';
                        $transaction->trx =  $trx;
                        $transaction->save();
            
            
                        notify($user, 'BAL_ADD', [
                            'trx' => $trx,
                            'amount' => $amount,
                            'currency' => $general->cur_text,
                            'post_balance' => getAmount($user->balance),
                        ]);

                        $newBonus = new BonusCredited();
                        $newBonus->user_id = $id;
                        $newBonus->save();
            }
          }
        }
       return $next($request);
    }
}