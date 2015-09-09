<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public $materias = [
        0 => [
            'materia' => 'Primeira Materia',
            'texto' => 'Texto da Primeira materia',
            'slug' => 'primeira-materia'
        ],
        1 => [
            'materia' => 'Segunda Materia',
            'texto' => 'Texto da Segunda materia',
            'slug' => 'segunda-materia'
        ],
        2 => [
            'materia' => 'Terceira Materia',
            'texto' => 'Texto da Terceira materia',
            'slug' => 'terceira-materia'
        ]
    ];

    public function index()
    {
        return view('blog.index', ['materias' => $this->materias]);
    }

    public function materia($slug)
    {

//        return view('test.notas', ['notas' => $notas]);
        return view('blog.materia', ['materias' => $this->materias, 'slug' => $slug]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
