<?php

namespace App\Observers;

use App\Models\Amortization;
use App\Models\Loan;

class LoanObserver
{
    /**
     * Handle the Loan "created" event.
     */
    public function created(Loan $loan): void
    {
        $periodicity = $loan->periodicity;
        $duration = $loan->loan_duration;

        switch ($periodicity){
        case 'trimester':
            $periodicity = 3;
            break;
        case 'semester':
            $periodicity = 2;
            break;
        case 'yearly':
            $periodicity = 1;
            break;
        }

        $amount = $loan->amount;
        $rest = $amount;
        $interest = $loan->interest;
        $times = $duration * $periodicity;
        $deposit = $amount / $times;
        $date = date('Y-m-d', strtotime($loan->created_at. ' + '.$periodicity.' month'));
        $tva = $loan->tva;

        for ($i = 0; $i < $times; $i++){
            $amortization = new Amortization();
            $amortization->loan_id = $loan->id;
            $amortization->amount = $deposit;
            $amortization->rest = $rest - $deposit;
            $rest = $rest - $deposit;
            $amortization->interest = $interest;
            // date add 3 month if periodicity is trimester and so on
            $amortization->date = $date;
            $date = date('Y-m-d', strtotime($date. ' + '.$periodicity.' month'));
            $amortization->total = $deposit + ($deposit * $interest / 100) + ($deposit * $tva / 100);
            $amortization->save();

        }

    }

    /**
     * Handle the Loan "updated" event.
     */
    public function updated(Loan $loan): void
    {

    }

    /**
     * Handle the Loan "deleted" event.
     */
    public function deleted(Loan $loan): void
    {
        //
    }

    /**
     * Handle the Loan "restored" event.
     */
    public function restored(Loan $loan): void
    {
        //
    }

    /**
     * Handle the Loan "force deleted" event.
     */
    public function forceDeleted(Loan $loan): void
    {
        //
    }
}
