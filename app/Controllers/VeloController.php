<?php
namespace App\Controllers;

use App\Models\VeloModel;
use App\Models\EntretienModel;
use App\Models\LocationModel;
use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Controller;

class VeloController extends Controller
{
    public function index()
    {
        $veloModel = new VeloModel();
        $db = \Config\Database::connect();
        $entretienModel = new EntretienModel();
        $locationModel = new LocationModel();

        $velos = $db->table('velos')
            ->select('velos.*, marque_velos.lib as marque, tailles.lib as taille, couleurs.lib as couleur')
            ->join('marque_velos', 'marque_velos.id = velos.marque_velo_id', 'left')
            ->join('tailles', 'tailles.id = velos.taille_id', 'left')
            ->join('couleurs', 'couleurs.id = velos.couleur_id', 'left')
            ->get()->getResultArray();

        foreach ($velos as &$velo) {
            // Prix de revient = prix achat + somme des entretiens (si on a un champ coût dans entretiens, sinon juste prix achat)
            $entretienSum = $db->table('entretiens')
                ->selectSum('piece2_id') // Remplacer par le coût si tu ajoutes un champ coût
                ->where('velo_id', $velo['id'])
                ->get()->getRowArray();
            $velo['prix_entretien'] = 0; // À remplacer si tu ajoutes un champ coût
            $velo['prix_reviens'] = $velo['prix_achat'] + $velo['prix_entretien'];

            // Gains par location (somme prix_annuel + prix_mensuel pour ce vélo)
            $locations = $db->table('locations')
                ->select('prix_annuel, prix_mensuel')
                ->where('velo_id', $velo['id'])
                ->get()->getResultArray();
            $gains = 0;
            foreach ($locations as $loc) {
                $gains += floatval($loc['prix_annuel']) + floatval($loc['prix_mensuel']);
            }
            $velo['gains_location'] = $gains;
        }
        $data['velos'] = $velos;
        return view('velos/index', $data);
    }

    public function create()
    {
        $db = \Config\Database::connect();
        $tailles = $db->table('tailles')->get()->getResultArray();
        $couleurs = $db->table('couleurs')->get()->getResultArray();
        $marques = $db->table('marque_velos')->get()->getResultArray();
        $data['tailles'] = $tailles;
        $data['couleurs'] = $couleurs;
        $data['marques'] = $marques;
        return view('velos/create', $data);
    }

    public function store()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getPost();

        // Gestion nouvelle taille
        if (!empty($data['new_taille'])) {
            $db->table('tailles')->insert(['lib' => $data['new_taille']]);
            $data['taille_id'] = $db->insertID();
        }
        // Gestion nouvelle couleur
        if (!empty($data['new_couleur'])) {
            $db->table('couleurs')->insert(['lib' => $data['new_couleur']]);
            $data['couleur_id'] = $db->insertID();
        }
        // Gestion nouvelle marque
        if (!empty($data['new_marque'])) {
            $db->table('marque_velos')->insert(['lib' => $data['new_marque']]);
            $data['marque_velo_id'] = $db->insertID();
        }

        $veloModel = new VeloModel();
        $veloModel->save($data);
        return redirect()->to(site_url('velos'));
    }

    public function edit($id)
    {
        $db = \Config\Database::connect();
        $veloModel = new VeloModel();
        $tailles = $db->table('tailles')->get()->getResultArray();
        $couleurs = $db->table('couleurs')->get()->getResultArray();
        $marques = $db->table('marque_velos')->get()->getResultArray();
        $data['velo'] = $veloModel->find($id);
        $data['tailles'] = $tailles;
        $data['couleurs'] = $couleurs;
        $data['marques'] = $marques;
        return view('velos/edit', $data);
    }

    public function update($id)
    {
        $db = \Config\Database::connect();
        $data = $this->request->getPost();

        // Gestion nouvelle taille
        if (!empty($data['new_taille'])) {
            $db->table('tailles')->insert(['lib' => $data['new_taille']]);
            $data['taille_id'] = $db->insertID();
        }
        // Gestion nouvelle couleur
        if (!empty($data['new_couleur'])) {
            $db->table('couleurs')->insert(['lib' => $data['new_couleur']]);
            $data['couleur_id'] = $db->insertID();
        }
        // Gestion nouvelle marque
        if (!empty($data['new_marque'])) {
            $db->table('marque_velos')->insert(['lib' => $data['new_marque']]);
            $data['marque_velo_id'] = $db->insertID();
        }

        $veloModel = new VeloModel();
        $veloModel->update($id, $data);
        return redirect()->to('/velos');
    }

    public function delete($id)
    {
        $veloModel = new VeloModel();
        $veloModel->delete($id);
        return redirect()->to('/velos');
    }

    public function show($id)
    {
        $db = \Config\Database::connect();
        $velo = $db->table('velos')
            ->select('velos.*, marque_velos.lib as marque, tailles.lib as taille, couleurs.lib as couleur')
            ->join('marque_velos', 'marque_velos.id = velos.marque_velo_id', 'left')
            ->join('tailles', 'tailles.id = velos.taille_id', 'left')
            ->join('couleurs', 'couleurs.id = velos.couleur_id', 'left')
            ->where('velos.id', $id)
            ->get()->getRowArray();
        return view('velos/show', ['velo' => $velo]);
    }
}
