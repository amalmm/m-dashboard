<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\TableHelper;
use App\Models\Dashboard\Demo;

class DemoController extends Controller
{
    public function index()
    {
        return view('dashboard.demo.index');
    }

    public function table()
    {
        $tableHtml = $this->tableData();
        return view('dashboard.demo.table', compact('tableHtml'));
    }

    private function tableData () {

        $users = Demo::paginate(15);

        // Create a new instance of TableHelper
        $table = new TableHelper();

        // Set the headers for the table
        $table->setHeaders([
             'ID',
             'Name',
             'Email',
             'Action'
            ]);

        // Add rows to the table from the paginated users
        foreach ($users as $user) {
            $table->addRow([
                $user->id,
                $user->name,
                $user->email,
                '<a href="' .  $user->id  . '" class=" text-blue-500 text-sm">Edit</a> <a href="' .  $user->id  . '" class="text-yellow-500 text-sm">Delte</a>'

            ]);
        }

        // Set pagination
        $table->setPagination($users);

        // Generate the HTML for the table
        $tableHtml = $table->generate();

        return $tableHtml;
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.demo.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required',
            'email'=>'required',
        ]);
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
        return view('dashboard.demo.edit');

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
