-- Script de remplissage avec données factices
-- Ordre d'insertion respectant les contraintes de clés étrangères

-- Désactivation temporaire des vérifications de clés étrangères
SET FOREIGN_KEY_CHECKS = 0;

-- Nettoyage des tables existantes
TRUNCATE TABLE commentaires;
TRUNCATE TABLE evenements;
TRUNCATE TABLE docs;
TRUNCATE TABLE messages;
TRUNCATE TABLE liaisons;
TRUNCATE TABLE matieres;
TRUNCATE TABLE classes;
TRUNCATE TABLE filieres;
TRUNCATE TABLE annees;
TRUNCATE TABLE users;

-- Réactivation des vérifications de clés étrangères
SET FOREIGN_KEY_CHECKS = 1;

-- =====================================================
-- TABLE: users
-- =====================================================
INSERT INTO users (id, first_name, last_name, email, api_cal, phone, bio, email_verified_at, password, last_login_at, created_at, updated_at) VALUES
(1, 'Jean', 'Dupont', 'jean.dupont@esgi.fr', 'cal_api_key_001', '0612345678', 'Étudiant passionné par le développement web', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW(), NOW()),
(2, 'Marie', 'Martin', 'marie.martin@esgi.fr', 'cal_api_key_002', '0623456789', 'Future développeuse full-stack', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW(), NOW()),
(3, 'Pierre', 'Bernard', 'pierre.bernard@esgi.fr', 'cal_api_key_003', '0634567890', 'Passionné de cybersécurité', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW(), NOW()),
(4, 'Sophie', 'Dubois', 'sophie.dubois@esgi.fr', 'cal_api_key_004', '0645678901', 'Amatrice de data science', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW(), NOW()),
(5, 'Thomas', 'Robert', 'thomas.robert@esgi.fr', 'cal_api_key_005', '0656789012', 'Développeur mobile en devenir', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW(), NOW()),
(6, 'Emma', 'Richard', 'emma.richard@esgi.fr', 'cal_api_key_006', '0667890123', 'UI/UX Designer et développeuse', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW(), NOW()),
(7, 'Lucas', 'Petit', 'lucas.petit@esgi.fr', 'cal_api_key_007', '0678901234', 'Expert en DevOps', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW(), NOW()),
(8, 'Chloé', 'Durand', 'chloe.durand@esgi.fr', 'cal_api_key_008', '0689012345', 'Développeuse backend', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW(), NOW()),
(9, 'Alexandre', 'Leroy', 'alexandre.leroy@esgi.fr', NULL, '0690123456', NULL, NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW(), NOW()),
(10, 'Julie', 'Moreau', 'julie.moreau@esgi.fr', NULL, '0601234567', 'Administratrice système', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW(), NOW());

-- =====================================================
-- TABLE: annees
-- =====================================================
INSERT INTO annees (id, nom, niveau, created_at, updated_at) VALUES
(1, '1ère année', 'Bachelor 1', NOW(), NOW()),
(2, '2ème année', 'Bachelor 2', NOW(), NOW()),
(3, '3ème année', 'Bachelor 3', NOW(), NOW()),
(4, '4ème année', 'Mastère 1', NOW(), NOW()),
(5, '5ème année', 'Mastère 2', NOW(), NOW());

-- =====================================================
-- TABLE: filieres
-- =====================================================
INSERT INTO filieres (id, nom, annee_id, created_at, updated_at) VALUES
(1, 'Informatique Générale', 1, NOW(), NOW()),
(2, 'Systèmes et Réseaux', 2, NOW(), NOW()),
(3, 'Développement Web', 2, NOW(), NOW()),
(4, 'Sécurité Informatique', 3, NOW(), NOW()),
(5, 'Intelligence Artificielle', 3, NOW(), NOW()),
(6, 'Architecture Logicielle', 4, NOW(), NOW()),
(7, 'Cybersécurité Avancée', 4, NOW(), NOW()),
(8, 'Data Engineering', 5, NOW(), NOW());

-- =====================================================
-- TABLE: classes
-- =====================================================
INSERT INTO classes (id, nom, filiere_id, created_at, updated_at) VALUES
(1, '1IW1', 1, NOW(), NOW()),
(2, '1IW2', 1, NOW(), NOW()),
(3, '2SR1', 2, NOW(), NOW()),
(4, '2DW1', 3, NOW(), NOW()),
(5, '2DW2', 3, NOW(), NOW()),
(6, '3SI1', 4, NOW(), NOW()),
(7, '3SI2', 4, NOW(), NOW()),
(8, '3IA1', 5, NOW(), NOW()),
(9, '4AL1', 6, NOW(), NOW()),
(10, '4CS1', 7, NOW(), NOW()),
(11, '5DE1', 8, NOW(), NOW());

-- =====================================================
-- TABLE: matieres
-- =====================================================
INSERT INTO matieres (id, classe_id, created_at, updated_at) VALUES
(1, 1, NOW(), NOW()),
(2, 1, NOW(), NOW()),
(3, 2, NOW(), NOW()),
(4, 3, NOW(), NOW()),
(5, 4, NOW(), NOW()),
(6, 4, NOW(), NOW()),
(7, 5, NOW(), NOW()),
(8, 6, NOW(), NOW()),
(9, 6, NOW(), NOW()),
(10, 7, NOW(), NOW()),
(11, 7, NOW(), NOW()),
(12, 8, NOW(), NOW()),
(13, 9, NOW(), NOW()),
(14, 10, NOW(), NOW()),
(15, 11, NOW(), NOW());

-- =====================================================
-- TABLE: liaisons (association users-classes)
-- =====================================================
INSERT INTO liaisons (id, user_id, classe_id, created_at, updated_at) VALUES
(1, 1, 6, NOW(), NOW()),
(2, 2, 6, NOW(), NOW()),
(3, 3, 7, NOW(), NOW()),
(4, 4, 7, NOW(), NOW()),
(5, 5, 4, NOW(), NOW()),
(6, 6, 5, NOW(), NOW()),
(7, 7, 10, NOW(), NOW()),
(8, 8, 9, NOW(), NOW()),
(9, 9, 11, NOW(), NOW()),
(10, 10, 3, NOW(), NOW());

-- =====================================================
-- TABLE: messages
-- =====================================================
INSERT INTO messages (id, json_msg, pin_bool, user_id, matiere_id, created_at, updated_at) VALUES
(1, '{"titre": "Cours de la semaine", "contenu": "N\'oubliez pas le cours de lundi à 8h30", "type": "annonce"}', 1, 1, 8, NOW(), NOW()),
(2, '{"titre": "TP Réseaux", "contenu": "Le TP 3 est disponible sur le drive", "type": "info"}', 0, 3, 4, NOW(), NOW()),
(3, '{"titre": "Partiel", "contenu": "Le partiel aura lieu le 15 décembre", "type": "important"}', 1, 4, 10, NOW(), NOW()),
(4, '{"titre": "Projet de groupe", "contenu": "Formation des groupes pour le projet annuel", "type": "info"}', 0, 2, 9, NOW(), NOW()),
(5, '{"titre": "Question sur le cours", "contenu": "Quelqu\'un peut m\'expliquer la récursivité ?", "type": "question"}', 0, 5, 5, NOW(), NOW()),
(6, '{"titre": "Ressources", "contenu": "Voici le lien vers les slides du cours", "type": "ressource"}', 1, 6, 7, NOW(), NOW()),
(7, '{"titre": "Correction TP", "contenu": "La correction du TP2 est en ligne", "type": "info"}', 0, 8, 13, NOW(), NOW()),
(8, '{"titre": "Stage", "contenu": "Offre de stage intéressante à partager", "type": "opportunite"}', 0, 7, 14, NOW(), NOW());

-- =====================================================
-- TABLE: docs
-- =====================================================
INSERT INTO docs (id, json_doc, matiere_id, created_at, updated_at) VALUES
(1, '{"nom": "Cours_Introduction.pdf", "url": "/docs/cours1.pdf", "taille": "2.5MB", "type": "pdf"}', 8, NOW(), NOW()),
(2, '{"nom": "TP1_Reseaux.pdf", "url": "/docs/tp1.pdf", "taille": "1.2MB", "type": "pdf"}', 4, NOW(), NOW()),
(3, '{"nom": "Slides_Cryptographie.pptx", "url": "/docs/crypto.pptx", "taille": "5.3MB", "type": "pptx"}', 10, NOW(), NOW()),
(4, '{"nom": "Corrige_Examen.pdf", "url": "/docs/corrige.pdf", "taille": "800KB", "type": "pdf"}', 9, NOW(), NOW()),
(5, '{"nom": "Guide_Laravel.pdf", "url": "/docs/laravel.pdf", "taille": "3.1MB", "type": "pdf"}', 5, NOW(), NOW()),
(6, '{"nom": "Projet_React.zip", "url": "/docs/react.zip", "taille": "15MB", "type": "zip"}', 7, NOW(), NOW()),
(7, '{"nom": "Architecture_Microservices.pdf", "url": "/docs/archi.pdf", "taille": "4.2MB", "type": "pdf"}', 13, NOW(), NOW()),
(8, '{"nom": "TP_Docker.pdf", "url": "/docs/docker.pdf", "taille": "1.8MB", "type": "pdf"}', 14, NOW(), NOW()),
(9, '{"nom": "Cours_Machine_Learning.pdf", "url": "/docs/ml.pdf", "taille": "6.7MB", "type": "pdf"}', 12, NOW(), NOW()),
(10, '{"nom": "Cheatsheet_SQL.pdf", "url": "/docs/sql.pdf", "taille": "500KB", "type": "pdf"}', 15, NOW(), NOW());

-- =====================================================
-- TABLE: evenements
-- =====================================================
INSERT INTO evenements (id, timestamp_debut, timestamp_fin, intitule, classe_id, created_at, updated_at) VALUES
(1, '2025-12-01 08:30:00', '2025-12-01 10:30:00', 'Cours de Cryptographie', 6, NOW(), NOW()),
(2, '2025-12-01 14:00:00', '2025-12-01 17:00:00', 'TP Linux Administration', 7, NOW(), NOW()),
(3, '2025-12-02 09:00:00', '2025-12-02 12:00:00', 'Workshop Pentest', 6, NOW(), NOW()),
(4, '2025-12-03 13:30:00', '2025-12-03 15:30:00', 'Cours de Développement Web', 4, NOW(), NOW()),
(5, '2025-12-04 10:00:00', '2025-12-04 12:00:00', 'Présentation Projets', 5, NOW(), NOW()),
(6, '2025-12-05 08:00:00', '2025-12-05 11:00:00', 'Partiel Réseaux', 3, NOW(), NOW()),
(7, '2025-12-08 14:00:00', '2025-12-08 16:00:00', 'Cours Architecture Logicielle', 9, NOW(), NOW()),
(8, '2025-12-09 09:30:00', '2025-12-09 12:30:00', 'TP DevOps', 10, NOW(), NOW()),
(9, '2025-12-10 13:00:00', '2025-12-10 15:00:00', 'Conférence IA', 8, NOW(), NOW()),
(10, '2025-12-11 10:00:00', '2025-12-11 17:00:00', 'Hackathon de l\'école', 11, NOW(), NOW());

-- =====================================================
-- TABLE: commentaires
-- =====================================================
INSERT INTO commentaires (id, json_comm, user_id, evenement_id, created_at, updated_at) VALUES
(1, '{"contenu": "Super cours, très clair !", "note": 5}', 1, 1, NOW(), NOW()),
(2, '{"contenu": "Le TP était un peu difficile mais instructif", "note": 4}', 3, 2, NOW(), NOW()),
(3, '{"contenu": "Workshop très intéressant, merci !", "note": 5}', 2, 3, NOW(), NOW()),
(4, '{"contenu": "Quelqu\'un a les notes du cours ?", "note": null}', 5, 4, NOW(), NOW()),
(5, '{"contenu": "Excellentes présentations de projets", "note": 5}', 6, 5, NOW(), NOW()),
(6, '{"contenu": "Partiel bien équilibré", "note": 4}', 10, 6, NOW(), NOW()),
(7, '{"contenu": "Cours dense mais passionnant", "note": 4}', 8, 7, NOW(), NOW()),
(8, '{"contenu": "TP très pratique, j\'ai appris beaucoup", "note": 5}', 7, 8, NOW(), NOW()),
(9, '{"contenu": "Conférence inspirante sur l\'IA", "note": 5}', 4, 9, NOW(), NOW()),
(10, '{"contenu": "Hackathon épique ! Hâte du prochain", "note": 5}', 9, 10, NOW(), NOW()),
(11, '{"contenu": "Est-ce que quelqu\'un a réussi l\'exercice 3 ?", "note": null}', 1, 2, NOW(), NOW()),
(12, '{"contenu": "Le sujet était intéressant", "note": 4}', 2, 1, NOW(), NOW());

-- =====================================================
-- Vérification du nombre d'enregistrements insérés
-- =====================================================
SELECT 'users' as table_name, COUNT(*) as nb_records FROM users
UNION ALL
SELECT 'annees', COUNT(*) FROM annees
UNION ALL
SELECT 'filieres', COUNT(*) FROM filieres
UNION ALL
SELECT 'classes', COUNT(*) FROM classes
UNION ALL
SELECT 'matieres', COUNT(*) FROM matieres
UNION ALL
SELECT 'liaisons', COUNT(*) FROM liaisons
UNION ALL
SELECT 'messages', COUNT(*) FROM messages
UNION ALL
SELECT 'docs', COUNT(*) FROM docs
UNION ALL
SELECT 'evenements', COUNT(*) FROM evenements
UNION ALL
SELECT 'commentaires', COUNT(*) FROM commentaires;
