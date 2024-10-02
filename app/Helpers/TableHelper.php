<?php

namespace App\Helpers;

class TableHelper
{
    protected $headers = [];
    protected $rows = [];
    protected $pagination = null;
    protected $tableId = 'dataTable'; // Default ID for the table

    // Method to set headers for the table
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
        return $this;
    }

    // Method to add a row to the table
    public function addRow(array $row)
    {
        $this->rows[] = $row;
        return $this;
    }

    // Method to set pagination data
    public function setPagination($pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }

    // Method to generate the HTML for the table
    public function generate()
    {
        $html = '<table id="' . $this->tableId . '" class="w-full border-collapse border   border-gray-300  ">';
        $html .= $this->generateHeader();
        $html .= $this->generateBody();
        $html .= '</table>';

        // Add pagination links
        if ($this->pagination) {
            $html .= $this->generatePagination();
        }

        return $html;
    }

    // Method to generate the header HTML
    protected function generateHeader()
    {
        $html = '<thead><tr class="bg-gray-100 text-gray-600">';
        foreach ($this->headers as $header) {
            $html .= '<th class="border border-gray-300 px-4 py-2 text-left">' . htmlspecialchars($header) . '</th>';
        }
        $html .= '</tr></thead>';
        return $html;
    }

    // Method to generate the body HTML
    protected function generateBody()
    {
        $html = '<tbody>';
        foreach ($this->rows as $row) {
            $html .= '<tr class="bg-white hover:bg-gray-100 text-sm">';
            foreach ($row as $cell) {
                // If the cell contains HTML (like a button or a link), don't escape it
                if (is_string($cell) && $this->isHtml($cell)) {
                    $html .= '<td class="border border-gray-300 px-4 py-2">' . $cell . '</td>';
                } else {
                    $html .= '<td class="border border-gray-300 px-4 py-2">' . htmlspecialchars($cell) . '</td>';
                }
            }
            $html .= '</tr>';
        }
        $html .= '</tbody>';
        return $html;
    }


    // Method to generate pagination links
    protected function generatePagination()
    {
        $links = $this->pagination->links();
        return '<div class="mt-4">' . $links . '</div>';
    }

    // Helper method to check if a string is HTML
    protected function isHtml($string)
    {
        return $string !== strip_tags($string);
    }

    // Method to generate the Edit button
    public function getEditButton($route)
    {
        return '<a href="' . $route . '" class="p-2 bg-blue-500 text-xs">Edit</a>';
    }

    // Method to generate the Delete button with confirmation
    public function getDeleteButton( $route)
    {
        return '
             <form action="' .  $route . '" method="POST" class="delete-form"   style="display:inline;"
             onsubmit="return confirm(\'Are you sure you want to delete this item?\');" >
                ' . csrf_field() . '
                ' . method_field('DELETE') . '
                <button type="submit" class="  bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded text-xs">Delete</button>
            </form>
        ';
    }
}
