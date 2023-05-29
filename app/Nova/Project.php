<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Project extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Project>
     */
    public static $model = \App\Models\Project::class;

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
            Text::make(__('Name'),'name'),
            Textarea::make(__('Description'), 'description'),
            Select::make(__('Type'), 'type')->options([
                'Acquisition of the necessary inputs related to the activity of agricultural investments (seeds, seedlings, fertilizers, pesticides)' => "Acquisition of the necessary inputs related to the activity of agricultural investments (seeds, seedlings, fertilizers, pesticides)",
                'Livestock feed _ irrigation means _ veterinary medicine products' => "Livestock feed _ irrigation means _ veterinary medicine products",
                "Reconstitution of farms (chicks, laying hens)" => "Reconstitution of farms (chicks, laying hens)",
                "Breeding large animals for fattening (bulls, sheep, camels)" => "Breeding large animals for fattening (bulls, sheep, camels)"
            ]),
            Text::make(__('Surface'), 'suraface'),
            Text::make(__('Address'), 'address'),
            Text::make(__('City'), 'city'),
            Text::make(__('State'), 'state'),
            Select::make(__('Ownership Type') , 'ownership_type'),
            BelongsTo::make(__('User'), 'user'),
            Date::make('created_at')->showOnIndex()->showOnDetail()
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
        return [];
    }
}
