<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez l'Agence</title>
    <style>
        /* Reset et base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            
            background-image: url('{{ asset('images/salon.png') }}');
            background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        .header {
            text-align: center;
            margin-bottom: 40px;
            padding: 30px 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 10px;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 300;
        }

        /* Layout principal */
        .form-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            background: rgba(255, 255, 255, 0.80);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* Sections */
        .form-section {
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }

        /* Grilles responsive */
        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        /* Champs formulaire */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e1e8ed;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        /* Checkboxes et radios */
        .checkbox-group, .radio-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .checkbox-item, .radio-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .checkbox-item input, .radio-item input {
            width: auto;
        }

        /* Disponibilités */
        .availability-section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border: 2px dashed #dee2e6;
        }

        .availability-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 15px;
            background: white;
            border: 1px solid #e1e8ed;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .remove-disponibilite {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2rem;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .add-disponibilite {
            background: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 15px;
            transition: background 0.3s ease;
            width: 100%;
        }

        .add-disponibilite:hover {
            background: #2980b9;
        }

        /* Bouton d'envoi */
        .submit-btn {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 8px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            grid-column: 1 / -1;
            justify-self: center;
            margin-top: 20px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(39, 174, 96, 0.3);
        }

        /* Messages d'alerte */
        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .error-list {
            list-style: none;
            padding: 0;
        }

        .error-list li {
            padding: 5px 0;
            color: #e74c3c;
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .form-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .grid-2, .grid-3 {
                grid-template-columns: 1fr;
            }

            .header h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .form-container {
                padding: 20px;
            }

            .header {
                padding: 20px 0;
            }

            .header h1 {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 480px) {
            .availability-item {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }

            .section-title {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>CONTACTEZ L'AGENCE</h1>
        </div>

        <!-- Messages d'alerte -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <ul class="error-list">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulaire -->
        <form action="{{ route('contact.submit') }}" method="POST" class="form-container">
            @csrf

            <!-- Colonne gauche -->
            <div class="left-column">
                <!-- Civilité et coordonnées -->
                <div class="form-section">
                    <h2 class="section-title">VOS COORDONNÉES</h2>
                    
                    <!-- Civilité -->
                    <div class="form-group">
                        <label>Civilite</label>
                        <div class="radio-group">
                            <div class="radio-item">
                                <input type="radio" id="madame" name="civilite" value="Mme" {{ old('civilite') == 'Mme' ? 'checked' : '' }} required>
                                <label for="madame">Mme</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="monsieur" name="civilite" value="M" {{ old('civilite') == 'M' ? 'checked' : '' }}>
                                <label for="monsieur">M</label>
                            </div>
                        </div>
                        @error('civilite')
                            <span style="color: #e74c3c; font-size: 0.9rem;">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Nom et Prénom -->
                    <div class="grid-2">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required>
                            @error('nom')
                                <span style="color: #e74c3c; font-size: 0.9rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}" required>
                            @error('prenom')
                                <span style="color: #e74c3c; font-size: 0.9rem;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Email et Téléphone -->
                    <div class="grid-2">
                        <div class="form-group">
                            <label for="email">Adresse mail</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span style="color: #e74c3c; font-size: 0.9rem;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telephone">Téléphone</label>
                            <input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}" required>
                            @error('telephone')
                                <span style="color: #e74c3c; font-size: 0.9rem;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Type de message -->
                <div class="form-section">
                    <h2 class="section-title">VOTRE MESSAGE</h2>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" id="visite" name="types_visite[]" value="visite" {{ in_array('visite', old('types_visite', [])) ? 'checked' : '' }}>
                            <label for="visite">Demande de visite</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="rappel" name="types_visite[]" value="rappel" {{ in_array('rappel', old('types_visite', [])) ? 'checked' : '' }}>
                            <label for="rappel">Être rappelé(e)</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="photos" name="types_visite[]" value="photos" {{ in_array('photos', old('types_visite', [])) ? 'checked' : '' }}>
                            <label for="photos">Plus de photos</label>
                        </div>
                    </div>
                    @error('types_visite')
                        <span style="color: #e74c3c; font-size: 0.9rem;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Message -->
                <div class="form-group">
                    <label for="message">Votre message</label>
                    <textarea id="message" name="message" placeholder="Tapez votre message ici..." required>{{ old('message') }}</textarea>
                    @error('message')
                        <span style="color: #e74c3c; font-size: 0.9rem;">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Colonne droite -->
            <div class="right-column">
                <!-- Disponibilités -->
                <div class="form-section">
                    <h2 class="section-title">DISPONIBILITÉS POUR UNE VISITE</h2>
                    
                    <div class="availability-section">
                        <div id="disponibilites-container">
                            <!-- Les disponibilités ajoutées apparaîtront ici -->
                            @if(old('disponibilites'))
                                @foreach(old('disponibilites') as $disponibilite)
                                    @php
                                        $parts = explode('-', $disponibilite);
                                        $display = $parts[0] . ' à ' . $parts[1];
                                    @endphp
                                    <div class="availability-item">
                                        <span>{{ $display }}</span>
                                        <button type="button" class="remove-disponibilite">×</button>
                                        <input type="hidden" name="disponibilites[]" value="{{ $disponibilite }}">
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <!-- Ajouter une disponibilité -->
                        <div class="grid-2">
                            <div class="form-group">
                                <label for="jour">Jour</label>
                                <select id="jour">
                                    <option value="Lundi">Lundi</option>
                                    <option value="Mardi">Mardi</option>
                                    <option value="Mercredi">Mercredi</option>
                                    <option value="Jeudi">Jeudi</option>
                                    <option value="Vendredi">Vendredi</option>
                                    <option value="Samedi">Samedi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="heure">Heure</label>
                                <select id="heure">
                                    <option value="7h">7h</option>
                                    <option value="8h">8h</option>
                                    <option value="9h">9h</option>
                                    <option value="9h45">9h45</option>
                                    <option value="10h">10h</option>
                                    <option value="11h">11h</option>
                                    <option value="14h">14h</option>
                                    <option value="15h">15h</option>
                                    <option value="16h">16h</option>
                                    <option value="17h">17h</option>
                                </select>
                            </div>
                        </div>

                        <button type="button" id="add-disponibilite" class="add-disponibilite">
                            AJOUTER DISPO
                        </button>
                        @error('disponibilites')
                            <span style="color: #e74c3c; font-size: 0.9rem; display: block; margin-top: 10px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Bouton d'envoi -->
            <button type="submit" class="submit-btn">ENVOYER</button>
        </form>
    </div>

    <script>
        // Gestion des disponibilités
        document.getElementById('add-disponibilite').addEventListener('click', function() {
            const jour = document.getElementById('jour').value;
            const heure = document.getElementById('heure').value;
            const displayText = `${jour} à ${heure}`;
            const value = `${jour}-${heure}`;

            const container = document.getElementById('disponibilites-container');
            
            // Vérifier si cette disponibilité existe déjà
            const existingInputs = container.querySelectorAll('input[type="hidden"]');
            for (let input of existingInputs) {
                if (input.value === value) {
                    alert('Cette disponibilité existe déjà !');
                    return;
                }
            }
            
            // Créer l'élément d'affichage
            const item = document.createElement('div');
            item.className = 'availability-item';
            item.innerHTML = `
                <span>${displayText}</span>
                <button type="button" class="remove-disponibilite">×</button>
                <input type="hidden" name="disponibilites[]" value="${value}">
            `;

            // Ajouter au container
            container.appendChild(item);

            // Gestion de la suppression
            item.querySelector('.remove-disponibilite').addEventListener('click', function() {
                item.remove();
            });
        });

        // Suppression des disponibilités existantes
        document.querySelectorAll('.remove-disponibilite').forEach(button => {
            button.addEventListener('click', function() {
                this.closest('.availability-item').remove();
            });
        });

        // Validation côté client
        document.querySelector('form').addEventListener('submit', function(e) {
            const checkboxes = document.querySelectorAll('input[name="types_visite[]"]:checked');
            if (checkboxes.length === 0) {
                e.preventDefault();
                alert('Veuillez sélectionner au moins un type de message.');
                return false;
            }

            const disponibilites = document.querySelectorAll('input[name="disponibilites[]"]');
            if (disponibilites.length === 0) {
                e.preventDefault();
                alert('Veuillez ajouter au moins une disponibilité.');
                return false;
            }
        });

        // Réinitialiser les messages d'erreur quand l'utilisateur commence à taper
        document.querySelectorAll('input, textarea, select').forEach(element => {
            element.addEventListener('input', function() {
                const errorSpan = this.parentNode.querySelector('span[style*="color: #e74c3c"]');
                if (errorSpan) {
                    errorSpan.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>