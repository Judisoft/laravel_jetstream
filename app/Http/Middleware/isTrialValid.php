<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class isTrialValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $end_of_trial = Auth::user()->email_verified_at->addDays(7);


        if($end_of_trial <= Carbon::now() && Auth::user()->is_premium == 0) {

            return redirect('payment')->with('success', 'Your Trial Period is over. Kindly subscribe to continue using Medxam ');
        }

        return $next($request);
    }
}
