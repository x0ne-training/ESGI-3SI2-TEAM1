<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes de l'année - my3SIB</title>
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
    <div class="max-w-5xl mx-auto px-5 py-10">
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-4xl font-bold gradient-text">Notes de l'année</h1>
                <p class="text-custom-purple-light opacity-80">Rédigez vos notes en toute simplicité</p>
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

        <main>
            <div class="glass-card rounded-3xl p-8">
                <h2 class="text-2xl font-semibold text-custom-purple-light mb-6">Votre note</h2>
                <form method="POST" action="/notes" class="space-y-4">
                    @csrf
                    <div>
                        <label for="note" class="block text-sm font-medium text-custom-purple-light mb-2">Écrivez votre note de l'année</label>
                        <textarea id="note" name="note" rows="6" class="w-full px-4 py-3 bg-white/10 border border-custom-purple-light/30 rounded-xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-custom-purple-light focus:border-transparent transition-all duration-300" placeholder="Décrivez vos points marquants, vos objectifs ou vos réflexions..."></textarea>
                    </div>
                    <button type="submit" class="w-full md:w-auto bg-gradient-to-r from-custom-purple to-custom-purple-light text-white font-semibold px-6 py-3 rounded-xl shadow-lg hover:shadow-custom-purple-light/40 transition-all duration-300">
                        Enregistrer
                    </button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>