<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'civilite' => 'required|in:Mme,M',
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'telephone' => 'required|string|max:20',
            'message' => 'required|string|min:10|max:1000',
            'types_visite' => 'required|array|min:1',
            'types_visite.*' => 'in:visite,rappel,photos',
            'disponibilites' => 'required|array|min:1',
        ], [
            'civilite.required' => 'La civilité est obligatoire.',
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'L\'adresse email n\'est pas valide.',
            'telephone.required' => 'Le téléphone est obligatoire.',
            'message.required' => 'Le message est obligatoire.',
            'message.min' => 'Le message doit contenir au moins 10 caractères.',
            'types_visite.required' => 'Veuillez sélectionner au moins une option.',
            'disponibilites.required' => 'Veuillez ajouter au moins une disponibilité.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Contact::create($validator->validated());

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}