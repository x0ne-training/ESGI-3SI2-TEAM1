
## Main Branch Protection

La branche  est protégée.
Aucun commit direct n'est autorisé.
Les changements passent obligatoirement par des Pull Requests depuis .


## Develop Branch

La branche  est utilisée pour l'intégration continue.
Toutes les fonctionnalités et améliorations DevOps y sont développées.


## Pull Request Workflow

1. Développement sur 
2. Ouverture d'une PR vers 
3. Validation CI obligatoire
4. Merge après revue


## GitFlow Strategy
- main : branche stable (production)
- develop : branche d'intégration continue
- feature/* : développement de nouvelles fonctionnalités
- hotfix/* : corrections urgentes


## Developer Workflow
1. Création d'une branche feature depuis develop
2. Commits fréquents et ciblés
3. Pull Request vers develop
4. Merge vers main après validation CI


## CI/CD Overview
Le projet utilise GitHub Actions pour automatiser les contrôles qualité et le déploiement.


## Continuous Integration
La CI est déclenchée :
- sur chaque push vers develop
- sur chaque Pull Request vers main

Outils exécutés :
- PHPUnit
- PHPStan
- PHPCS


## Docker
Le projet est conteneurisé avec Docker.
Un Dockerfile multi-stage est utilisé pour optimiser l'image finale.


## docker-compose
Services utilisés en développement local :
- app (Laravel PHP)
- mysql
- nginx
- redis


## Environment Variables
Les variables sensibles sont gérées via GitHub Secrets.
Aucun fichier .env n'est versionné.


## Security Best Practices
- Secrets stockés dans GitHub Actions
- Accès restreint à main
- CI obligatoire avant merge


## Pull Requests
Chaque Pull Request doit :
- avoir une description claire
- passer la CI
- être revue avant merge


## Release Process
1. Pull Request develop vers main
2. Validation CI
3. Build et push de l'image Docker


## Code Quality
- Tests automatisés avec PHPUnit
- Analyse statique avec PHPStan
- Style de code avec PHPCS


## DevOps Checklist
- CI fonctionnelle
- Docker opérationnel
- Branches protégées
- Secrets sécurisés


## Commit Message Convention
Format utilisé :
type(scope): description

Exemples :
- docs(devops): update documentation
- ci: improve pipeline
- chore(docker): optimize build


## Merge Rules
- Aucun merge sans CI verte
- Revue obligatoire avant merge
- Pas de squash pour garder l'historique


## CI Purpose
La CI permet de :
- détecter les erreurs tôt
- garantir la qualité du code
- sécuriser les merges vers main


## CI Triggers
- Push sur develop
- Pull Request vers main


## CI vs CD
- CI : tests et contrôles qualité
- CD : build et déploiement Docker après merge sur main

