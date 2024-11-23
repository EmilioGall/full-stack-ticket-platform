<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Operator;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketsArray = Ticket::with(['category', 'operator'])->orderByDesc('created_at')->get();

        // dd($ticketsArray);

        return view('admin.tickets.index', compact('ticketsArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $operatorsArray = Operator::all();

        // dd($operatorsArray);

        $categoriesArray = Category::all();

        return view('admin.tickets.create', compact('operatorsArray', 'categoriesArray'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the incoming request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'operator_id' => 'required|exists:operators,id',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:Assigned,InProgress,Closed',
        ]);

        $newTicket = new Ticket();

        $newTicket->fill($validatedData);

        $newTicket->user_id = Auth::id(); // The admin who creates the ticket is the logged-in user

        $newTicket->save();

        // Redirect to the ticket index page with a success message
        return redirect()->route('admin.ticket.index')->with('status', 'Ticket created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {

        // dd($ticket);

        return view('admin.tickets.show', compact('ticket'));
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
