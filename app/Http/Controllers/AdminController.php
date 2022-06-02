<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  Afficher tout les produits
        $admin = Admin::all();
        return view('admins.index')->with('listeadmins', $admin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  Afficher le formulaire :
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Enregistre l'Administrateur dans la base de donné.
        $personne = Personne::all()->where('nom', '=', $request->nom)->where('prenom', '=',$request->prenom);
        //dd($personne);
        /*print_r($personne);
        echo $personne;*/
        if (!$personne){
            //$personne = Personne::create($request->all());
        } else {
            $personne = Personne::create($request->all());
            Admin::create(['nom' => $request->nom, 'prenom' =>$request->prenom, 'tel'=>$request->tel, 'numPersonne' => $personne->numPersonne]);
        }

        return redirect()->route('admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //      Affiche un seul admin :
        /*$unAdmin = Admin::find($admin->numAdmin);
        return view('admins.show');*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //  Afficher le formulaire d'édition pour la modification:
        if (View::exists('admins.edit')){
            return view('admins.edit', compact('admin'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //  Met à jour le produit :
        $admin->nom = $request->nom;
        $admin->prenom = $request->prenom;
        $admin->tel = $request->tel;
        $admin->save();
        return redirect()->route('admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //  Suppression du produit :
        $admin->delete();
        return redirect()->route('admins.index');
    }
}
