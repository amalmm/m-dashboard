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

        $data = Demo::orderBy('id','desc')->paginate(15);

        // Create a new instance of TableHelper
        $table = new TableHelper();

        // Set the headers for the table
        $table->setHeaders([
             'ID',
             'Name',
             'Email',
             'Edit',
             'Delete'
            ]);

        // Add rows to the table from the paginated users
        foreach ($data as $post) {
            $table->addRow([
                $post->id,
                $post->name,
                $post->email,
                $table->getEditButton( route('dashboard.demo.edit', ["id" => $post->id]) ),
                $table->getDeleteButton( route('dashboard.demo.destroy', ["id" => $post->id]) )
            ]);
        }

        // Set pagination
        $table->setPagination($data);

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

        Demo::create($validate);
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
        $data = Demo::findOrFail($id);
        return view('dashboard.demo.edit')
        ->with('data',$data);

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
        $data = Demo::findOrFail($id);
        $data->delete();
        return redirect()->route('dashboard.demo.table');
    }
}
