<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\TableHelper; // Import the TableHelper class
use App\Models\Dashboard\Demo;

class DesignController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tableHtml = $this->table();
        return view('dashboard.design.index', compact('tableHtml'));
    }

    private function table () {

        $users = Demo::paginate(10); // Adjust the number per page as needed

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
                '<a href="' .  $user->id  . '" class="text-blue-600 hover:text-blue-800">Edit</a> '

            ]);
        }

        // Set pagination
        $table->setPagination($users);

        // Generate the HTML for the table
        $tableHtml = $table->generate();

        return $tableHtml;
    }
}
