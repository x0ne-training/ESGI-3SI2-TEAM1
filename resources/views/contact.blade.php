<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact - my3SIB</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'custom-black': '#000000',
                        'custom-purple-dark': '#52057B',
                        'custom-purple': '#892CDC',
                        'custom-purple-light': '#BC6FF1',
                    },
                    backgroundImage: {
                        'gradient-custom': 'linear-gradient(135deg, #0a0a0a 0%, rgb(8, 6, 8) 30%, rgb(15, 3, 15) 70%, #000000 100%)',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-custom min-h-screen text-white">

    <div class="max-w-4xl mx-auto px-5 py-10">

        <!-- NAVIGATION -->
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-4xl font-bold">Formulaire de contact</h1>
                <p class="text-custom-purple-light opacity-80">Sélectionnez le destinataire et décrivez votre demande.</p>
            </div>

            <div class="flex gap-4">
                <a href="{{ route('app') }}" 
                   class="bg-white/10 px-4 py-2 rounded-lg border border-white/20">
                    🏠 Accueil
                </a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" 
                            class="bg-red-500/20 px-4 py-2 rounded-lg border border-red-500/40">
                        🚪 Déconnexion
                    </button>
                </form>
            </div>
        </header>
        <!-- FIN NAVIGATION -->

        
        <main>
            <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
                @csrf

                <!-- Nom complet -->
                <div>
                    <label for="name" class="block mb-1">Nom complet</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                           class="w-full px-4 py-2 rounded bg-white/10 border border-white/20"
                           placeholder="Ex : Dupont Jeanne" required>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block mb-1">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                           class="w-full px-4 py-2 rounded bg-white/10 border border-white/20"
                           placeholder="prenom.nom@email.com" required>
                </div>

                <!-- Destinataire -->
                <div>
                    <label for="category" class="block mb-1">Destinataire</label>
                    <select id="category" name="category"
                            class="w-full px-4 py-2 rounded bg-white/10 border border-white/20"
                            required>
                        <option value="" disabled {{ old('category') ? '' : 'selected' }}>Choisissez une option</option>
                        <option value="personnel" {{ old('category') === 'personnel' ? 'selected' : '' }}>
                            Personnel administratif
                        </option>
                        <option value="webmaster" {{ old('category') === 'webmaster' ? 'selected' : '' }}>
                            Webmaster (bug)
                        </option>
                    </select>
                </div>

                <!-- Fichier joint désactivé -->
                <div>
                    <label for="file" class="block mb-1">Fichier joint (optionnel)</label>
                    <input type="file" id="file" name="file" disabled
                           class="w-full px-4 py-2 rounded bg-white/10 border border-white/20 opacity-60 cursor-not-allowed">
                    <p class="text-xs text-white/50 mt-1">(Prévu pour une future évolution)</p>
                </div>

                <!-- Message -->
                <div>
                    <label for="message" class="block mb-1">Message</label>
                    <textarea id="message" name="message" rows="5"
                              class="w-full px-4 py-2 rounded bg-white/10 border border-white/20"
                              placeholder="Décrivez votre demande ou le bug rencontré" required>{{ old('message') }}</textarea>
                </div>

                <!-- Bouton submit -->
                <button type="submit" 
                        class="px-6 py-3 rounded bg-custom-purple text-white font-semibold">
                    Envoyer la demande
                </button>

            </form>
        </main>
        <!-- FIN FORMULAIRE -->

    </div>

</body>
</html>
