<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portail Étudiant - Mes Notes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      :root {
        --violet-fonce: #52057b;
        --violet-vif: #892cdc;
        --violet-clair: #bc6ff1;
        --noir: #000000;
        --gris-clair: #d1d5db;
        --blanc-casse: #f3f4f6;
      }

      /* Animations */
      @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
      }
      .animate-fadeIn { animation: fadeIn 0.5s ease-out; }

      @keyframes pulse {
        0%,100% { transform: scale(1); }
        50% { transform: scale(1.05); }
      }
      .animate-pulse { animation: pulse 2s infinite; }

      @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
      }
      .animate-rotate { animation: rotate 12s linear infinite; }

      /* Style liquid glass */
      .glass-effect {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
      }
      .glass-effect:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-2px);
      }
      .glass-effect::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: 0.5s;
      }
      .glass-effect:hover::before { left: 100%; }

      .nav-glass {
        background: rgba(82, 5, 123, 0.2);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border-bottom: 1px solid rgba(255,255,255,0.2);
      }

      /* Transition douce */
      .transition-all { transition: all 0.3s ease; }

      /* Animation apparition progressive des barres */
      .progress-bar { width: 0; transition: width 1.2s ease-in-out; }

      /* Accordéon pour les détails */
      .details { display: none; }
      .details.open { display: block; animation: fadeIn 0.5s ease-out; }

    </style>
  </head>
  <body class="bg-[var(--noir)] text-[var(--blanc-casse)] min-h-screen font-sans">

    <!-- Navigation -->
    <nav class="nav-glass p-6 shadow-2xl sticky top-0 z-50">
      <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-4">
          <div class="glass-effect p-3 rounded-full">
            <svg class="w-8 h-8 text-[var(--violet-clair)]" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h1 class="text-4xl font-extrabold bg-gradient-to-r from-[var(--violet-clair)] to-[var(--violet-vif)] bg-clip-text text-transparent">
            Portail Étudiant
          </h1>
        </div>
        <div class="flex flex-wrap gap-2">
          <a href="#" class="glass-effect nav-link px-4 py-3 rounded-full text-[var(--violet-clair)] text-sm md:text-lg hover:scale-105">📚 Cours</a>
          <a href="#" class="glass-effect nav-link px-4 py-3 rounded-full text-[var(--violet-clair)] text-sm md:text-lg hover:scale-105">📅 Planning</a>
          <a href="#" class="glass-effect nav-link px-4 py-3 rounded-full text-[var(--violet-clair)] text-sm md:text-lg hover:scale-105">📊 Notes</a>
          <a href="#" class="glass-effect nav-link px-4 py-3 rounded-full text-[var(--violet-clair)] text-sm md:text-lg hover:scale-105">👤 Profil</a>
        </div>
      </div>
    </nav>

    <!-- Section Notes -->
    <section class="p-8 animate-fadeIn container mx-auto">
      <h2 class="text-4xl font-bold text-[var(--violet-vif)] mb-2 tracking-wide">Mes Notes</h2>
      <p class="text-[var(--gris-clair)] mb-6">Suivi de progression – dernier trimestre</p>

      <!-- Filtres -->
      <div class="flex gap-4 mb-6">
        <button class="glass-effect px-4 py-2 rounded-full active-filter" data-filter="all">Toutes</button>
        <button class="glass-effect px-4 py-2 rounded-full" data-filter="maths">Maths</button>
        <button class="glass-effect px-4 py-2 rounded-full" data-filter="info">Informatique</button>
        <button class="glass-effect px-4 py-2 rounded-full" data-filter="physique">Physique</button>
      </div>

      <!-- Cartes de notes -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Maths -->
        <div class="glass-effect p-4 rounded-xl note-card" data-type="maths">
          <div class="flex justify-between items-center mb-2">
            <h3 class="text-lg font-bold">📐 Mathématiques</h3>
            <span class="text-2xl font-bold text-green-400">16/20</span>
          </div>
          <p class="text-[var(--gris-clair)] text-sm mb-2">Dernier devoir – Algèbre linéaire</p>
          <div class="bg-gray-700 rounded-full h-2">
            <div class="progress-bar bg-gradient-to-r from-green-400 to-green-500 h-2 rounded-full" data-progress="80%"></div>
          </div>
          <button class="mt-3 text-[var(--violet-clair)] hover:text-[var(--violet-vif)] text-sm toggle-details">Voir détails 🔽</button>
          <div class="details mt-2 text-sm text-[var(--gris-clair)]">
            <p>Devoir 1 : 14/20</p>
            <p>Devoir 2 : 18/20</p>
            <p>Appréciation : Excellent travail 👏</p>
          </div>
        </div>

        <!-- Informatique -->
        <div class="glass-effect p-4 rounded-xl note-card" data-type="info">
          <div class="flex justify-between items-center mb-2">
            <h3 class="text-lg font-bold">💻 Informatique</h3>
            <span class="text-2xl font-bold text-yellow-400">14/20</span>
          </div>
          <p class="text-[var(--gris-clair)] text-sm mb-2">Projet – Développement Web</p>
          <div class="bg-gray-700 rounded-full h-2">
            <div class="progress-bar bg-gradient-to-r from-yellow-400 to-yellow-500 h-2 rounded-full" data-progress="70%"></div>
          </div>
          <button class="mt-3 text-[var(--violet-clair)] hover:text-[var(--violet-vif)] text-sm toggle-details">Voir détails 🔽</button>
          <div class="details mt-2 text-sm text-[var(--gris-clair)]">
            <p>Devoir 1 : 13/20</p>
            <p>Projet final : 15/20</p>
            <p>Appréciation : Bon ensemble 👍</p>
          </div>
        </div>

        <!-- Physique -->
        <div class="glass-effect p-4 rounded-xl note-card" data-type="physique">
          <div class="flex justify-between items-center mb-2">
            <h3 class="text-lg font-bold">⚗️ Physique</h3>
            <span class="text-2xl font-bold text-blue-400">18/20</span>
          </div>
          <p class="text-[var(--gris-clair)] text-sm mb-2">Contrôle – Mécanique quantique</p>
          <div class="bg-gray-700 rounded-full h-2">
            <div class="progress-bar bg-gradient-to-r from-blue-400 to-blue-500 h-2 rounded-full" data-progress="90%"></div>
          </div>
          <button class="mt-3 text-[var(--violet-clair)] hover:text-[var(--violet-vif)] text-sm toggle-details">Voir détails 🔽</button>
          <div class="details mt-2 text-sm text-[var(--gris-clair)]">
            <p>Test : 17/20</p>
            <p>Projet : 19/20</p>
            <p>Appréciation : Excellent niveau 💫</p>
          </div>
        </div>

        <!-- Moyenne générale -->
        <div class="relative glass-effect p-6 rounded-xl bg-gradient-to-br from-[var(--violet-vif)] to-[var(--violet-clair)] text-white overflow-hidden">
          <div class="absolute -right-10 -bottom-10 opacity-20 animate-rotate">
            🏅
          </div>
          <div class="relative z-10">
            <h3 class="text-lg font-bold">📊 Moyenne Générale</h3>
            <span class="text-3xl font-bold">16/20</span>
            <p class="text-white/80 text-sm mt-1">Niveau : Excellent</p>
            <p class="mt-2 italic">Continue sur cette lancée ! 💪</p>
          </div>
        </div>
      </div>

      <!-- Mini Graphe -->
      <div class="mt-10 glass-effect p-6 rounded-2xl">
        <h3 class="text-2xl font-bold text-[var(--violet-clair)] mb-4">Évolution des Notes</h3>
        <div class="space-y-2 text-sm">
          <div>Maths <div class="bg-gradient-to-r from-green-400 to-green-500 h-2 rounded-full w-[80%]"></div></div>
          <div>Informatique <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 h-2 rounded-full w-[70%]"></div></div>
          <div>Physique <div class="bg-gradient-to-r from-blue-400 to-blue-500 h-2 rounded-full w-[90%]"></div></div>
        </div>
      </div>
    </section>

    <script>
      // Animation barres
      const bars = document.querySelectorAll('.progress-bar');
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.width = entry.target.dataset.progress;
          }
        });
      }, { threshold: 0.5 });
      bars.forEach(bar => observer.observe(bar));

      // Filtrage
      const buttons = document.querySelectorAll('[data-filter]');
      const cards = document.querySelectorAll('.note-card');
      buttons.forEach(btn => {
        btn.addEventListener('click', () => {
          const filter = btn.dataset.filter;
          buttons.forEach(b => b.classList.remove('active-filter', 'text-[var(--violet-vif)]'));
          btn.classList.add('text-[var(--violet-vif)]');
          cards.forEach(card => {
            if (filter === 'all' || card.dataset.type === filter) card.style.display = 'block';
            else card.style.display = 'none';
          });
        });
      });

      // Détails
      document.querySelectorAll('.toggle-details').forEach(btn => {
        btn.addEventListener('click', () => {
          const details = btn.nextElementSibling;
          details.classList.toggle('open');
        });
      });
    </script>
  </body>
</html>