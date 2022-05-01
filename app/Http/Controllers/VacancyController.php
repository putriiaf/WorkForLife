<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Lowongan Kerja';
        if (request('category')) {
            $title = "Semua Lowongan Kerja";
        }
        return view('loker.loker', [
            'title' => 'All Events' . $title,
            'active' => 'events',
            'lokers' => Vacancy::latest()->filter(request(['search']))->paginate(6)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loker.formloker', [
            'title' => 'Upload Lowongan Kerja',
            'message' => NULL
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vacancy::create([
            'company' => request('company_id'),
            'posisi' => request('posisi'),
            'jobdesc' => request('kriteria'),
            'domisili' => request('domisili'),
            'min_pengalaman' => request('min_pengalaman'),
            'insentif' => request('insentif'),
            'link_pendaftaran' => request('link_pendaftaran'),
        ]);

        return redirect('/company/verify')->with('success', 'Loker berhasil diunggah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancy $vacancy)
    {
        return view('loker.view', [
            'title' => 'Detail Lowongan Kerja',
            'active' => 'loker',
            'loker' => $vacancy,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('loker.editLoker', [
            'title' => 'Edit Post',
            'loker' => Vacancy::where('id', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        $rules = [
            'posisi' => 'required|max:255',
        ];
        $validatedData = $request->validate($rules);

        Vacancy::where('id', $vacancy->id)->update($validatedData);
        return redirect('/loker');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacancy $vacancy)
    {
        Vacancy::destroy($vacancy->id);
        return redirect('/loker')->with('success', 'Vacancy has been deleted!');
    }
}
