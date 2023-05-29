<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Project;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->birthday_date = $request->birthday_date;
        $user->phone = $request->phone;
        $user->address = $request->address;

        $user->save();

        $project = new Project();
        $project->address = $request->project_address;
        $project->type = $request->investment_type;
        $project->ownership_type = $request->ownership_type;
        $project->suraface = $request->surface;
        $project->user_id = $user->id;

        $project->save();

        $loan = new Loan();
        $loan->status = 'pending';
        $loan->project_id = $project->id;
        $loan->amount = $request->amount;
        $loan->loan_duration = $request->duration;
        $loan->type = $request->loan_type;
        $loan->customer_deposit = $request->customer_deposit;
        $loan->periodicity = $request->periodicity;

        if ($request->hasFile('file')){
            $file = $request->file('file');

            // Store the file in the storage directory
            $path = $file->store();
            $loan->file = $file->getClientOriginalName();

        }

        $loan->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
