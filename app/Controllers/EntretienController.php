<?php
namespace App\Controllers;

use App\Models\EntretienModel;
use App\Models\VeloModel;
use App\Models\PieceModel;
use CodeIgniter\Controller;

class EntretienController extends Controller
{
    public function index()
    {
        $entretienModel = new EntretienModel();
        $data['entretiens'] = $entretienModel->findAll();
        return view('entretiens/index', $data);
    }

    public function create()
    {
        $veloModel = new VeloModel();
        $pieceModel = new PieceModel();
        $data['velos'] = $veloModel->findAll();
        $data['pieces'] = $pieceModel->findAll();
        return view('entretiens/create', $data);
    }

    public function store()
    {
        $entretienModel = new EntretienModel();
        $entretienModel->save($this->request->getPost());
        return redirect()->to(site_url('entretiens'));
    }

    public function edit($id)
    {
        $entretienModel = new EntretienModel();
        $veloModel = new VeloModel();
        $pieceModel = new PieceModel();
        $data['entretien'] = $entretienModel->find($id);
        $data['velos'] = $veloModel->findAll();
        $data['pieces'] = $pieceModel->findAll();
        return view('entretiens/edit', $data);
    }

    public function update($id)
    {
        $entretienModel = new EntretienModel();
        $entretienModel->update($id, $this->request->getPost());
        return redirect()->to(site_url('entretiens'));
    }

    public function delete($id)
    {
        $entretienModel = new EntretienModel();
        $entretienModel->delete($id);
        return redirect()->to(site_url('entretiens'));
    }

    public function show($id)
    {
        $entretienModel = new EntretienModel();
        $data['entretien'] = $entretienModel->find($id);
        return view('entretiens/show', $data);
    }
}

