<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signaler une absence - my3SIB</title>
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
                        'gradient-custom': 'linear-gradient(135deg, #0a0a0a 0%,rgb(8, 6, 8) 30%,rgb(15, 3, 15) 70%, #000000 100%)',
                    }
                }
            }
        }
    </script>
    <style>
        .glass-card {
            backdrop-filter: blur(18px);
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.25);
        }

        .gradient-text {
            background: linear-gradient(45deg, #BC6FF1, #892CDC);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gradient-custom min-h-screen text-white">
    <div class="max-w-4xl mx-auto px-5 py-10">
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-4xl font-bold gradient-text">Signaler une absence</h1>
                <p class="text-custom-purple-light opacity-80">Merci de renseigner les informations ci-dessous</p>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('app') }}" class="bg-white/10 px-4 py-2 rounded-xl border border-custom-purple-light/30 hover:bg-custom-purple-light/20 transition-all duration-300">
                    🏠 Accueil
                </a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-500/20 px-4 py-2 rounded-xl border border-red-500/30 hover:bg-red-500/30 transition-all duration-300">
                        🚪 Déconnexion
                    </button>
                </form>
            </div>
        </header>

        @if(session('success'))
            <div class="mb-6 p-4 rounded-xl border border-green-400/40 bg-green-500/10 text-green-200">
                {{ session('success') }}
            </div>
        @endif

        <main>
            <div class="glass-card rounded-3xl p-8">
                <h2 class="text-2xl font-semibold text-custom-purple-light mb-6">Formulaire d'absence</h2>
                <form method="POST" action="{{ route('absences.store') }}" class="space-y-5">
                    @csrf
                    <div>
                        <label for="nom_prenom" class="block text-sm font-medium text-custom-purple-light mb-2">Nom / Prénom</label>
                        <input type="text" id="nom_prenom" name="nom_prenom" class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300" placeholder="Ex : Dupont Jeanne" required>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="classe" class="block text-sm font-medium text-custom-purple-light mb-2">Classe</label>
                            <input type="text" id="classe" name="classe" class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300" placeholder="Ex : 3e B" required>
                        </div>
                        <div>
                            <label for="date_cours" class="block text-sm font-medium text-custom-purple-light mb-2">Date / Cours</label>
                            <input type="date" id="date_cours" name="date_cours" class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300" required>
                        </div>
                    </div>
                    <div>
                        <label for="motif" class="block text-sm font-medium text-custom-purple-light mb-2">Motif</label>
                        <textarea id="motif" name="motif" rows="4" class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300" placeholder="Expliquez la raison de l'absence" required></textarea>
                    </div>
                    <button type="submit" class="w-full md:w-auto bg-gradient-to-r from-custom-purple to-custom-purple-light text-white font-semibold px-6 py-3 rounded-xl shadow-lg hover:shadow-custom-purple-light/40 transition-all duration-300">
                        Envoyer l'absence
                    </button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>