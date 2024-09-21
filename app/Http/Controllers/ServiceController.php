<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services   = Service::paginate(10);
        $attributes = ['id', 'description', 'price', 'duration', '', ''];
        $status     = 'index';

        return view(
            'app.services.index',
            ['attributes' => $attributes, 'services'   => $services, 'status' => $status]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modalName     = 'serviceCreateModal';
        $modalTitle    = 'Criação de Serviço';
        $modalMessage  = 'Deseja mesmo criar esse serviço?';

        return view(
            'app.services.create',
            ['modalName' => $modalName, 'modalTitle' => $modalTitle, 'modalMessage' => $modalMessage]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price = str_replace('R$ ', '', $request->price);
        $price = str_replace('.', '', $price);
        $price = str_replace(',', '.', $price);

        $duration = str_replace(' min', '', $request->duration);

        $request->validate(
            [
                'name'           => ['required', 'min:3', 'max:200'],
                'description'    => ['required'],
                'price'          => ['required'],
                'duration'       => ['required'],
            ],
        );

        Service::create([
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $price,
            'duration'    => $duration,
            'created_by'  => Auth::user()->id,
        ]);

        return redirect()->route('services.index')->with('message-success', 'Serviço cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service       = Service::find($id);
        $modalName     = 'serviceEditModal';
        $modalTitle    = 'Edição de Serviço';
        $modalMessage  = 'Deseja mesmo editar esse serviço?';

        if ($service) {
            return  view(
                'app.services.edit',
                ['service' => $service, 'modalName' => $modalName, 'modalTitle' => $modalTitle, 'modalMessage' => $modalMessage]
            );
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);

        if (!$service) {
            return;
        }

        $price = str_replace('R$ ', '', $request->price);
        $price = str_replace('.', '', $price);
        $price = str_replace(',', '.', $price);

        $duration = str_replace(' min', '', $request->duration);

        $request->validate(
            [
                'name'           => ['required', 'min:3', 'max:200'],
                'description'    => ['required'],
                'price'          => ['required'],
                'duration'       => ['required'],
            ],
        );

        $service->update([
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $price,
            'duration'    => $duration
        ]);

        return redirect()->route('services.index')->with('message-success', 'Serviço editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
