<?php
namespace App\Controllers;

use App\Models\LocationModel;
use App\Models\VeloModel;
use CodeIgniter\Controller;

class LocationController extends Controller
{
    public function index()
    {
        $locationModel = new LocationModel();
        $data['locations'] = $locationModel->findAll();
        return view('locations/index', $data);
    }

    public function create()
    {
        $veloModel = new VeloModel();
        $data['velos'] = $veloModel->findAll();
        return view('locations/create', $data);
    }

    public function store()
    {
        $locationModel = new LocationModel();
        $locationModel->save($this->request->getPost());
        return redirect()->to(site_url('locations'));
    }

    public function edit($id)
    {
        $locationModel = new LocationModel();
        $veloModel = new VeloModel();
        $data['location'] = $locationModel->find($id);
        $data['velos'] = $veloModel->findAll();
        return view('locations/edit', $data);
    }

    public function update($id)
    {
        $locationModel = new LocationModel();
        $locationModel->update($id, $this->request->getPost());
        return redirect()->to(site_url('locations'));
    }

    public function delete($id)
    {
        $locationModel = new LocationModel();
        $locationModel->delete($id);
        return redirect()->to(site_url('locations'));
    }

    public function show($id)
    {
        $locationModel = new LocationModel();
        $data['location'] = $locationModel->find($id);
        return view('locations/show', $data);
    }
}

