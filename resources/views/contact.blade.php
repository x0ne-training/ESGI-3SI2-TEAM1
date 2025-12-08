<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact - my3SIB</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Configuration Tailwind (déjà présente dans les autres pages) -->
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

        <!-- NAVIGATION (Commit 6) -->
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-4xl font-bold gradient-text">Formulaire de contact</h1>
                <p class="text-custom-purple-light opacity-80">Sélectionnez le destinataire et décrivez votre demande.</p>
            </div>

            <div class="flex gap-4">
                <a href="{{ route('app') }}" 
                   class="bg-white/10 px-4 py-2 rounded-xl border border-custom-purple-light/30 
                          hover:bg-custom-purple-light/20 transition-all duration-300">
                    🏠 Accueil
                </a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" 
                        class="bg-red-500/20 px-4 py-2 rounded-xl border border-red-500/30 
                               hover:bg-red-500/30 transition-all duration-300">
                        🚪 Déconnexion
                    </button>
                </form>
            </div>
        </header>
        <!-- FIN NAVIGATION -->

        <!-- Contenu vide pour l’instant – ajouté dans les commits suivants -->
        <main>
            <!-- Le reste du contenu sera ajouté aux commits 7 et 8 -->
        </main>

    </div>

</body>
</html>
