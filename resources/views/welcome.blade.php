<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0" />
		<title>Portail Étudiant - Style Liquid Glass</title>
		<script src="https://cdn.tailwindcss.com"></script>
		<style>
			/* Définir les couleurs personnalisées */
			:root {
				--violet-fonce: #52057b;
				--violet-vif: #892cdc;
				--violet-clair: #bc6ff1;
				--noir: #000000;
				--gris-clair: #d1d5db;
				--blanc-casse: #f3f4f6;
			}
			/* Animation pour apparition progressive */
			@keyframes fadeIn {
				0% {
					opacity: 0;
					transform: translateY(10px);
				}
				100% {
					opacity: 1;
					transform: translateY(0);
				}
			}
			.animate-fadeIn {
				animation: fadeIn 0.5s ease-out;
			}

			/* Animation de pulsation pour les éléments importants */
			@keyframes pulse {
				0%,
				100% {
					transform: scale(1);
				}
				50% {
					transform: scale(1.05);
				}
			}
			.animate-pulse {
				animation: pulse 2s infinite;
			}

			/* Animation de glissement pour les cartes */
			@keyframes slideIn {
				0% {
					opacity: 0;
					transform: translateX(-20px);
				}
				100% {
					opacity: 1;
					transform: translateX(0);
				}
			}
			.animate-slideIn {
				animation: slideIn 0.6s ease-out;
			}

			/* Animation de rotation pour les icônes */
			@keyframes rotate {
				from {
					transform: rotate(0deg);
				}
				to {
					transform: rotate(360deg);
				}
			}
			.animate-rotate {
				animation: rotate 1s linear infinite;
			}
			/* Animation pour soulignement des liens */
			.nav-link::after {
				content: "";
				display: block;
				width: 0;
				height: 2px;
				background: var(--violet-clair);
				transition: width 0.3s ease;
			}
			.nav-link:hover::after {
				width: 100%;
			}
			/* Style Liquid Glass pour les cartes et boutons */
			.glass-effect {
				background: rgba(
					255,
					255,
					255,
					0.1
				); /* Fond semi-transparent */
				backdrop-filter: blur(
					10px
				); /* Flou d'arrière-plan */
				-webkit-backdrop-filter: blur(
					10px
				); /* Support pour Safari */
				border: 1px solid rgba(255, 255, 255, 0.2); /* Bordure brillante */
				box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Ombre douce */
				position: relative;
				overflow: hidden;
			}
			.glass-effect::before {
				content: "";
				position: absolute;
				top: 0;
				left: -100%;
				width: 50%;
				height: 100%;
				background: linear-gradient(
					90deg,
					transparent,
					rgba(255, 255, 255, 0.2),
					transparent
				); /* Reflet */
				transition: 0.5s;
			}
			.glass-effect:hover::before {
				left: 100%; /* Animation du reflet au survol */
			}

			/* Effet de verre renforcé pour les éléments interactifs */
			.glass-effect:hover {
				background: rgba(255, 255, 255, 0.15);
				backdrop-filter: blur(15px);
				-webkit-backdrop-filter: blur(15px);
				box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
				transform: translateY(-2px);
			}

			/* Effet de verre pour les liens */
			.nav-link {
				position: relative;
				overflow: hidden;
			}

			/* Effet de verre pour les boutons */
			button.glass-effect:hover {
				background: rgba(188, 111, 241, 0.2);
				backdrop-filter: blur(15px);
				-webkit-backdrop-filter: blur(15px);
			}
			/* Style pour la barre de navigation */
			.nav-glass {
				background: rgba(
					82,
					5,
					123,
					0.2
				); /* Violet foncé semi-transparent */
				backdrop-filter: blur(12px);
				-webkit-backdrop-filter: blur(12px);
				border-bottom: 1px solid
					rgba(255, 255, 255, 0.2);
			}
		</style>
	</head>
	<body
		class="bg-[var(--noir)] text-[var(--blanc-casse)] min-h-screen font-sans">
		<!-- Barre de navigation améliorée -->
		<nav class="nav-glass p-6 shadow-2xl sticky top-0 z-50">
			<div
				class="container mx-auto flex justify-between items-center">
				<!-- Logo et titre avec effet de verre -->
				<div class="flex items-center space-x-4">
					<div
						class="glass-effect p-3 rounded-full">
						<svg
							class="w-8 h-8 text-[var(--violet-clair)]"
							fill="currentColor"
							viewBox="0 0 20 20">
							<path
								d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
					</div>
					<h1
						class="text-4xl font-extrabold text-[var(--blanc-casse)] tracking-tight bg-gradient-to-r from-[var(--violet-clair)] to-[var(--violet-vif)] bg-clip-text text-transparent">
						Portail Étudiant
					</h1>
				</div>

				<!-- Navigation avec effet de verre -->
				<div class="flex flex-wrap gap-2">
                <a
                        href="#"
                        class="nav-link glass-effect px-4 py-3 rounded-full text-[var(--violet-clair)] hover:text-[var(--violet-vif)] text-sm md:text-lg font-medium transition-all duration-300 hover:scale-105 animate-slideIn">
                        📚
                        <span class="hidden sm:inline"
                            >Cours</span
                        >
                    </a>
                    <a
                        href="#"
                        class="nav-link glass-effect px-4 py-3 rounded-full text-[var(--violet-clair)] hover:text-[var(--violet-vif)] text-sm md:text-lg font-medium transition-all duration-300 hover:scale-105 animate-slideIn"
                        style="animation-delay: 0.1s">
                        📅
                        <span class="hidden sm:inline"
                            >Planning</span
                        >
                    </a>
                    <a
                        href="#"
                        class="nav-link glass-effect px-4 py-3 rounded-full text-[var(--violet-clair)] hover:text-[var(--violet-vif)] text-sm md:text-lg font-medium transition-all duration-300 hover:scale-105 animate-slideIn"
                        style="animation-delay: 0.2s">
                        📊
                        <span class="hidden sm:inline"
                            >Notes</span
                        >
                    </a>
					@auth
						<a
							href="{{ route('profile.index') }}"
							class="nav-link glass-effect px-4 py-3 rounded-full text-[var(--violet-clair)] hover:text-[var(--violet-vif)] text-sm md:text-lg font-medium transition-all duration-300 hover:scale-105 animate-slideIn">
							👤
							<span class="hidden sm:inline"
								>Mon Profil</span
							>
						</a>
						<form method="POST" action="{{ route('logout') }}" class="inline">
							@csrf
							<button type="submit" class="nav-link glass-effect px-4 py-3 rounded-full text-red-300 hover:text-red-400 text-sm md:text-lg font-medium transition-all duration-300 hover:scale-105 animate-slideIn" style="animation-delay: 0.1s">
								🚪
								<span class="hidden sm:inline">Déconnexion</span>
							</button>
						</form>
					@else
						<a
							href="{{ route('login') }}"
							class="nav-link glass-effect px-4 py-3 rounded-full text-[var(--violet-clair)] hover:text-[var(--violet-vif)] text-sm md:text-lg font-medium transition-all duration-300 hover:scale-105 animate-slideIn">
							🔐
							<span class="hidden sm:inline"
								>Connexion</span
							>
						</a>
						<a
							href="{{ route('register') }}"
							class="nav-link glass-effect px-4 py-3 rounded-full text-[var(--violet-clair)] hover:text-[var(--violet-vif)] text-sm md:text-lg font-medium transition-all duration-300 hover:scale-105 animate-slideIn"
							style="animation-delay: 0.1s">
							✨
							<span class="hidden sm:inline"
								>Inscription</span
							>
						</a>
					@endauth
				</div>
			</div>
		</nav>

		<!-- Contenu principal -->
		<div class="container mx-auto mt-8 px-4">
			<!-- Section Cours -->
			<section class="mb-16 animate-fadeIn">
				<h2
					class="text-4xl font-bold text-[var(--violet-vif)] mb-6 tracking-wide">
					Nos Cours
				</h2>
				<div
					class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
					<div
						class="glass-effect p-4 md:p-6 rounded-xl hover:scale-105 transition-all duration-300 cursor-pointer group animate-slideIn">
						<div
							class="flex items-center gap-3 mb-4">
							<div
								class="glass-effect p-3 rounded-full animate-pulse">
								<span
									class="text-xl md:text-2xl"
									>📐</span
								>
							</div>
							<h3
								class="text-xl md:text-2xl font-bold text-[var(--blanc-casse)] group-hover:text-[var(--violet-clair)] transition-colors duration-300">
								Mathématiques
							</h3>
						</div>
						<p
							class="text-[var(--gris-clair)] mt-2">
							Prochain cours : 6
							octobre, 10h00
						</p>
						<div
							class="mt-4 flex justify-between items-center">
							<span
								class="text-sm text-[var(--violet-clair)]"
								>Salle
								A201</span
							>
							<a
								href="#"
								class="glass-effect px-4 py-2 rounded-lg text-[var(--violet-clair)] hover:text-[var(--violet-vif)] font-medium transition-all duration-300 hover:scale-105">
								Voir détails
							</a>
						</div>
					</div>

					<div
						class="glass-effect p-4 md:p-6 rounded-xl hover:scale-105 transition-all duration-300 cursor-pointer group animate-slideIn">
						<div
							class="flex items-center gap-3 mb-4">
							<div
								class="glass-effect p-3 rounded-full animate-pulse">
								<span
									class="text-xl md:text-2xl"
									>💻</span
								>
							</div>
							<h3
								class="text-xl md:text-2xl font-bold text-[var(--blanc-casse)] group-hover:text-[var(--violet-clair)] transition-colors duration-300">
								Informatique
							</h3>
						</div>
						<p
							class="text-[var(--gris-clair)] mt-2">
							Prochain cours : 7
							octobre, 14h00
						</p>
						<div
							class="mt-4 flex justify-between items-center">
							<span
								class="text-sm text-[var(--violet-clair)]"
								>Labo B105</span
							>
							<a
								href="#"
								class="glass-effect px-4 py-2 rounded-lg text-[var(--violet-clair)] hover:text-[var(--violet-vif)] font-medium transition-all duration-300 hover:scale-105">
								Voir détails
							</a>
						</div>
					</div>

					<div
						class="glass-effect p-4 md:p-6 rounded-xl hover:scale-105 transition-all duration-300 cursor-pointer group animate-slideIn">
						<div
							class="flex items-center gap-3 mb-4">
							<div
								class="glass-effect p-3 rounded-full animate-pulse">
								<span
									class="text-xl md:text-2xl"
									>⚗️</span
								>
							</div>
							<h3
								class="text-xl md:text-2xl font-bold text-[var(--blanc-casse)] group-hover:text-[var(--violet-clair)] transition-colors duration-300">
								Physique
							</h3>
						</div>
						<p
							class="text-[var(--gris-clair)] mt-2">
							Prochain cours : 8
							octobre, 9h00
						</p>
						<div
							class="mt-4 flex justify-between items-center">
							<span
								class="text-sm text-[var(--violet-clair)]"
								>Salle
								C301</span
							>
							<a
								href="#"
								class="glass-effect px-4 py-2 rounded-lg text-[var(--violet-clair)] hover:text-[var(--violet-vif)] font-medium transition-all duration-300 hover:scale-105">
								Voir détails
							</a>
						</div>
					</div>
				</div>
			</section>

			<!-- Section Planning Visuel -->
			<section class="mb-16 animate-fadeIn">
				<h2
					class="text-4xl font-bold text-[var(--violet-vif)] mb-6 tracking-wide">
					Planning
				</h2>

				<!-- Calendrier visuel -->
				<div
					class="glass-effect p-8 rounded-2xl transition-all duration-300 hover:scale-[1.02]">
					<div
						class="grid grid-cols-7 gap-1 sm:gap-2 mb-6">
						<!-- En-têtes des jours -->
						<div
							class="text-center text-[var(--violet-clair)] font-bold py-2">
							Lun
						</div>
						<div
							class="text-center text-[var(--violet-clair)] font-bold py-2">
							Mar
						</div>
						<div
							class="text-center text-[var(--violet-clair)] font-bold py-2">
							Mer
						</div>
						<div
							class="text-center text-[var(--violet-clair)] font-bold py-2">
							Jeu
						</div>
						<div
							class="text-center text-[var(--violet-clair)] font-bold py-2">
							Ven
						</div>
						<div
							class="text-center text-[var(--violet-clair)] font-bold py-2">
							Sam
						</div>
						<div
							class="text-center text-[var(--violet-clair)] font-bold py-2">
							Dim
						</div>

						<!-- Jours du mois -->
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								25
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								26
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								27
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								28
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								29
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								30
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								1
							</div>
						</div>

						<!-- Semaine avec cours -->
						<div
							class="glass-effect p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer bg-gradient-to-br from-[var(--violet-vif)] to-[var(--violet-clair)]">
							<div
								class="text-white font-bold">
								2
							</div>
							<div
								class="text-xs text-white/80">
								Math
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								3
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								4
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								5
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								6
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								7
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								8
							</div>
						</div>

						<!-- Plus de jours... -->
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								9
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								10
							</div>
						</div>
						<div
							class="glass-effect p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer bg-gradient-to-br from-[var(--violet-clair)] to-[var(--violet-vif)]">
							<div
								class="text-white font-bold">
								11
							</div>
							<div
								class="text-xs text-white/80">
								Info
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								12
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								13
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								14
							</div>
						</div>
						<div
							class="glass-effect p-2 sm:p-3 rounded-lg text-center hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="text-[var(--gris-clair)] text-sm sm:text-base">
								15
							</div>
						</div>
					</div>

					<!-- Légende des cours -->
					<div class="flex flex-wrap gap-4 mt-6">
						<div
							class="flex items-center gap-2">
							<div
								class="w-4 h-4 rounded bg-gradient-to-br from-[var(--violet-vif)] to-[var(--violet-clair)]"></div>
							<span
								class="text-[var(--gris-clair)] text-sm"
								>Mathématiques</span
							>
						</div>
						<div
							class="flex items-center gap-2">
							<div
								class="w-4 h-4 rounded bg-gradient-to-br from-[var(--violet-clair)] to-[var(--violet-vif)]"></div>
							<span
								class="text-[var(--gris-clair)] text-sm"
								>Informatique</span
							>
						</div>
						<div
							class="flex items-center gap-2">
							<div
								class="w-4 h-4 rounded bg-gradient-to-br from-[var(--violet-fonce)] to-[var(--violet-vif)]"></div>
							<span
								class="text-[var(--gris-clair)] text-sm"
								>Physique</span
							>
						</div>
					</div>

					<button
						class="mt-6 glass-effect bg-[var(--violet-vif)] text-[var(--blanc-casse)] px-8 py-4 rounded-xl font-medium hover:bg-[var(--violet-clair)] hover:scale-105 transition-all duration-300">
						📅 Voir le planning complet
					</button>
				</div>
			</section>

			<!-- Section Notes -->
			<section class="animate-fadeIn">
				<h2
					class="text-4xl font-bold text-[var(--violet-vif)] mb-6 tracking-wide">
					Mes Notes
				</h2>
				<div
					class="glass-effect p-8 rounded-2xl transition-all duration-300 hover:scale-[1.02]">
					<div
						class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
						<!-- Note Mathématiques -->
						<div
							class="glass-effect p-4 rounded-xl hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="flex items-center justify-between mb-2">
								<h3
									class="text-lg font-bold text-[var(--blanc-casse)]">
									📐
									Mathématiques
								</h3>
								<span
									class="text-2xl font-bold text-green-400"
									>16/20</span
								>
							</div>
							<p
								class="text-[var(--gris-clair)] text-sm">
								Dernier devoir -
								Algèbre linéaire
							</p>
							<div
								class="mt-2 w-full bg-gray-700 rounded-full h-2">
								<div
									class="bg-gradient-to-r from-green-400 to-green-500 h-2 rounded-full"
									style="
										width: 80%;
									"></div>
							</div>
						</div>

						<!-- Note Informatique -->
						<div
							class="glass-effect p-4 rounded-xl hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="flex items-center justify-between mb-2">
								<h3
									class="text-lg font-bold text-[var(--blanc-casse)]">
									💻
									Informatique
								</h3>
								<span
									class="text-2xl font-bold text-yellow-400"
									>14/20</span
								>
							</div>
							<p
								class="text-[var(--gris-clair)] text-sm">
								Projet -
								Développement
								web
							</p>
							<div
								class="mt-2 w-full bg-gray-700 rounded-full h-2">
								<div
									class="bg-gradient-to-r from-yellow-400 to-yellow-500 h-2 rounded-full"
									style="
										width: 70%;
									"></div>
							</div>
						</div>

						<!-- Note Physique -->
						<div
							class="glass-effect p-4 rounded-xl hover:scale-105 transition-all duration-300 cursor-pointer">
							<div
								class="flex items-center justify-between mb-2">
								<h3
									class="text-lg font-bold text-[var(--blanc-casse)]">
									⚗️
									Physique
								</h3>
								<span
									class="text-2xl font-bold text-blue-400"
									>18/20</span
								>
							</div>
							<p
								class="text-[var(--gris-clair)] text-sm">
								Contrôle -
								Mécanique
								quantique
							</p>
							<div
								class="mt-2 w-full bg-gray-700 rounded-full h-2">
								<div
									class="bg-gradient-to-r from-blue-400 to-blue-500 h-2 rounded-full"
									style="
										width: 90%;
									"></div>
							</div>
						</div>

						<!-- Moyenne générale -->
						<div
							class="glass-effect p-4 rounded-xl hover:scale-105 transition-all duration-300 cursor-pointer bg-gradient-to-br from-[var(--violet-vif)] to-[var(--violet-clair)]">
							<div
								class="flex items-center justify-between mb-2">
								<h3
									class="text-lg font-bold text-white">
									📊
									Moyenne
								</h3>
								<span
									class="text-2xl font-bold text-white"
									>16/20</span
								>
							</div>
							<p
								class="text-white/80 text-sm">
								Moyenne générale
							</p>
							<div
								class="mt-2 w-full bg-white/20 rounded-full h-2">
								<div
									class="bg-white h-2 rounded-full"
									style="
										width: 80%;
									"></div>
							</div>
						</div>
					</div>

					<button
						class="glass-effect bg-[var(--violet-vif)] text-[var(--blanc-casse)] px-8 py-4 rounded-xl font-medium hover:bg-[var(--violet-clair)] hover:scale-105 transition-all duration-300">
						📊 Consulter toutes les notes
					</button>
				</div>
			</section>
		</div>
	</body>
</html>
