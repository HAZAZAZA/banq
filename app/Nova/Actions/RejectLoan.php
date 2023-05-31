<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;

class RejectLoan extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
//        $user = auth()->user();
////        dd($user->hasRole('admin'));
//        $admin = true;
//        if (!$user->hasRole('admin')){
//            $admin = false;
//            $user->assignRole('admin');
//        }
        foreach ($models as $model){
            if ($model->status == 'processing'){
                $model->status = "rejected";
                $model->save();
            }
        };
//        if (!$admin)
//        {
//            $user->removeRole('admin');
//            $user->save();
//        }
        return Action::message('Loan rejected!');
    }

    /**
     * Get the fields available on the action.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [];
    }
}
