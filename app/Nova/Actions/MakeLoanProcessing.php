<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;

class MakeLoanProcessing extends Action
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
        $user = auth()->user();

        if (!$user->hasRole('admin') && $user->id != 1){
            $user->assignRole('admin');
            logger('user role has' . $user->hasRole('admin'));
        }

        foreach ($models as $model){
            if ($model->status == 'pending'){
                $model->status = "processing";
                $model->save();
            }
        };
        if ($user->id != 1)
        {
            $user->removeRole('admin');
            logger('user role has' . $user->hasRole('admin'));

        }
        return "Loan is now processing";
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
