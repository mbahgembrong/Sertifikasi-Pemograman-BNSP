<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArsipRequest;
use App\Http\Requests\UpdateArsipRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Arsip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Flash;
use Response;

class ArsipController extends AppBaseController
{
    /**
     * Display a listing of the Arsip.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Arsip $arsips */
        $arsips = Arsip::all();
        if ($request->has('search')) {
            $arsips = Arsip::where('judul', 'like', '%' . $request->search . '%')
                ->get();
        }

        return view('arsips.index')
            ->with('arsips', $arsips);
    }

    /**
     * Show the form for creating a new Arsip.
     *
     * @return Response
     */
    public function create()
    {
        return view('arsips.create');
    }

    /**
     * Store a newly created Arsip in storage.
     *
     * @param CreateArsipRequest $request
     *
     * @return Response
     */
    public function store(CreateArsipRequest $request)
    {
        $input = $request->all();
        if ($request->hasFile('file')) {
            $fileName = time() . $request->file('file')->getClientOriginalName();
            Storage::disk('public')->put('arsips/' .  $fileName, file_get_contents($request->file('file')->getRealPath()));
            $input['file'] = $fileName;
        }
        /** @var Arsip $arsip */
        $arsip = Arsip::create($input);

        Flash::success('Arsip saved successfully.');

        return redirect(route('arsips.index'));
    }

    /**
     * Display the specified Arsip.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Arsip $arsip */
        $arsip = Arsip::find($id);

        if (empty($arsip)) {
            Flash::error('Arsip not found');

            return redirect(route('arsips.index'));
        }
        $url = Storage::url('arsips/' . $arsip->file);

        return view('arsips.show', compact([
            'arsip',
            'url'
        ]));
    }

    /**
     * Show the form for editing the specified Arsip.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Arsip $arsip */
        $arsip = Arsip::find($id);

        if (empty($arsip)) {
            Flash::error('Arsip not found');

            return redirect(route('arsips.index'));
        }

        return view('arsips.edit')->with('arsip', $arsip);
    }

    /**
     * Update the specified Arsip in storage.
     *
     * @param int $id
     * @param UpdateArsipRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArsipRequest $request)
    {
        /** @var Arsip $arsip */
        $arsip = Arsip::find($id);

        if (empty($arsip)) {
            Flash::error('Arsip not found');

            return redirect(route('arsips.index'));
        }
        $input = $request->all();
        if ($request->hasFile('file')) {
            $fileName = time() . $request->file('file')->getClientOriginalName();
            Storage::disk('public')->put('arsips/' .  $fileName, file_get_contents($request->file('file')->getRealPath()));
            $input['file'] = $fileName;
        }

        $arsip->fill($input);
        $arsip->save();

        Flash::success('Arsip updated successfully.');

        return redirect(route('arsips.index'));
    }

    public function download($id)
    {
        /** @var Arsip $arsip */
        $arsip = Arsip::find($id);

        if (empty($arsip)) {
            Flash::error('Arsip not found');

            return redirect(route('arsips.index'));
        }
        $url = Storage::url('arsips/' . $arsip->file);
        return response()->download(public_path($url));
    }

    /**
     * Remove the specified Arsip from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Arsip $arsip */
        $arsip = Arsip::find($id);

        if (empty($arsip)) {
            Flash::error('Arsip not found');

            return redirect(route('arsips.index'));
        }

        $arsip->delete();

        Flash::success('Arsip deleted successfully.');

        return redirect(route('arsips.index'));
    }
}
