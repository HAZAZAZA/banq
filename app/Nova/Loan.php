<?php

namespace App\Nova;

use App\Nova\Actions\ApprovedLoan;
use App\Nova\Actions\MakeLoanProcessing;
use App\Nova\Actions\RejectLoan;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Status;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Loan extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Loan>
     */
    public static $model = \App\Models\Loan::class;



//    public function authorizedToUpdate(Request $request): bool
//    {
//        return false;
//       // return $request->user()->hasAnyPermission(['admin', 'edit loans']);
//    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Currency::make(__('Amount'), 'amount')->symbol('DZD'),
            Status::make(__('Status'), 'status')
                ->hideWhenUpdating(function ($request){
                    return !$request->user()->isAdmin();
                })
                ->loadingWhen(['pending', 'processing'])
                ->failedWhen(['rejected']),
//            Select::make(__('Stataus'),'status')
//                ->options([
//                    'pending' => 'pending',
//                    'processing' => 'processing',
//                    'rejected' => 'rejected',
//                    'approved' => 'approved',
//                ])->onlyOnForms(),

            Select::make(__('Type'),'type')
                ->options([
                    'ETTAHADI' => 'ETTAHADI',
                    'RFIG' => 'RFIG',
                ])->onlyOnForms(),
            Currency::make(__('Customer Deposit'), 'customer_deposit')
                ->symbol('DZE'),
            Text::make(__('Loan duration'), 'loan_duration'),

            Select::make(__('Periodicity'), 'periodicity')
                ->options([
                    'trimester'=> 'trimester',
                    'semester'=> 'semester',
                    'yearly'=> 'yearly',
                ]),


            Date::make(__('Loan start date'), 'loan_start_date'),
            Date::make(__('Loan end date'), 'loan_end_date'),
            Number::make(__('TVA'), 'tva'),
            Number::make(__('Interest'),'interest'),
            File::make(__('File'), 'file'),
            BelongsTo::make( 'project')

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [
            MakeLoanProcessing::make()->canSee(function (Request $request){
                return $request->user()->hasPermissionTo('make processing') && $this->status == 'pending';
            }),

            ApprovedLoan::make()->canSee(function (Request $request){
                return $request->user()->hasPermissionTo('approved loan') && $this->status == 'processing';
            }),

            RejectLoan::make()->canSee(function (Request $request){
                return $request->user()->hasPermissionTo('reject loan') && $this->status == 'processing';
            }),
        ];
    }


    public static function label()
    {
        return __('Loans');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Loan');
    }
}
