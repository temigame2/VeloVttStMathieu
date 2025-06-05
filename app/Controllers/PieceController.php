<?php
namespace App\Controllers;

use App\Models\PieceModel;
use CodeIgniter\Controller;

class PieceController extends Controller
{
    public function index()
    {
        $pieceModel = new PieceModel();
        $data['pieces'] = $pieceModel->findAll();
        return view('pieces/index', $data);
    }

    public function create()
    {
        return view('pieces/create');
    }

    public function store()
    {
        $pieceModel = new PieceModel();
        $pieceModel->save($this->request->getPost());
        return redirect()->to(site_url('pieces'));
    }

    public function edit($id)
    {
        $pieceModel = new PieceModel();
        $data['piece'] = $pieceModel->find($id);
        return view('pieces/edit', $data);
    }

    public function update($id)
    {
        $pieceModel = new PieceModel();
        $pieceModel->update($id, $this->request->getPost());
        return redirect()->to(site_url('pieces'));
    }

    public function delete($id)
    {
        $pieceModel = new PieceModel();
        $pieceModel->delete($id);
        return redirect()->to(site_url('pieces'));
    }

    public function show($id)
    {
        $pieceModel = new PieceModel();
        $data['piece'] = $pieceModel->find($id);
        return view('pieces/show', $data);
    }
}

