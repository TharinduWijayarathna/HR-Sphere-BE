<?php

namespace modules\EmployeeManagement\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function list()
    {
        return response()->json([
            'message' => 'List method',
        ]);
    }

    /**
     * Filter the specified resource.
     *
     * @param Request $request
     * @return Response
     */

    public function filter(Request $request)
    {
        return response()->json([
            'message' => 'Filter method',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        return response()->json([
            'message' => 'Store method',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function get($id)
    {
        return response()->json([
            'message' => 'Edit method',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        return response()->json([
            'message' => 'Update method',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function delete($id)
    {
        return response()->json([
            'message' => 'Destroy method',
        ]);
    }
}
