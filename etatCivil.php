<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
		<link rel="icon" href="media/Etat Civil/etatcivil.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="Style/common.css">
    <link rel="stylesheet" href="Style/etatCivile.css">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

      <title>Etat Civil et Biométrie</title>
  </head>
  <body class="container" onload="copyrightYear();">
      <div class="row">
        <header class="container" id="header">
          <h5 class="text-center">République Algerienne Democratique et Populaire</h5>
          <h5 class="text-center">Wilaya De Béjaia</h5>
          <h5 class="text-center">APC Taourirt-Ighil</h5>
        </header>
      </div>
      <div class="row">
        <?php
          include("menu.php");
        ?>
      </div>
      <div class="row mt-3">
        <div class="col">
            <img src='media/Etat%20Civil/banniere-min.jpg' class="w-100 rounded-lg figure-img" alt="Banniere">
        </div>
      </div>
      <div class="row mt-2">
        <div class="container" id="documents">
          <h3>Délivration de documents d'état civil en ligne</h3>
          <div class="row">
            <div class="col-12 col-md-4 mt-1 mt-md-0">
              <div class="card documents">
                <div class="card-body">
                  <h5 class="card-title">Acte de naissance</h5>
                  <p class="card-text">Délivration de l'acte de naissance en ligne sur le site du ministére de l'interieur.</p>
                  <button class="btn btn-primary"><a href="https://etatcivil.interieur.gov.dz/ActeNaissance/" target="_blank" class="card-link documentsLink">Cliquez ici</a></button>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 mt-1 mt-md-0">
              <div class="card documents">
                <div class="card-body">
                  <h5 class="card-title">Acte de mariage</h5>
                  <p class="card-text">Délivration de l'acte de mariage en ligne sur le site du ministére de l'interieur.</p>
                  <button class="btn btn-primary"><a href="https://etatcivil.interieur.gov.dz/ActeMariage/" target="_blank" class="card-link documentsLink">Cliquez ici</a></button>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 mt-1 mt-md-0">
              <div class="card documents">
                <div class="card-body">
                  <h5 class="card-title">Acte de décès</h5>
                  <p class="card-text">Délivration de l'acte de décès en ligne sur le site du ministére de l'interieur.</p><br>
                  <button class="btn btn-primary"><a href="https://etatcivil.interieur.gov.dz/ActeDeces/" target="_blank" class="card-link documentsLink">Cliquez ici</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <main class="container mt-2" id="circulation">
          <h2>Circulation des personnes et des biens</h2>
          <div class="documents rounded-lg" id="warn">
              <h4 class="p-3 text-center text-warning">Le service Biométrie n'est pas disponible pour le moment. La
                  délivration des
                  documents
                  biométrique
              se fait au niveau de l'APC d'Adekkar</h4>
          </div>
          <div class="row">
            <div class="col-12 bg-success mt-2 rounded-lg documents" id="cni">
              <h3>Carte nationale d'identité</h3>
              <details>
                <summary>Dossier à fournir</summary>
                <details> 
                  <summary>Première demande</summary>
                  <p>
                    Le formulaire renseigné et signé par l’intéressé ou par le tuteur légal pour les mineurs, auquel il est joint :
                  </p>
                  <ul>
                    <li>Un certificat de nationalité algérienne ;</li>
                    <li>Un certificat de résidence en cours de validité ;</li>
                    <li>Deux(2) photos d’identité en couleur, numériques, récentes et identiques (le fond de la photo doit être uni, sans contour et de couleur blanche).</li>
                  </ul>
                </details>
                <details>
                  <summary>Renouvellement</summary>
                  <p>Un formulaire, renseigné et signé par l’intéressé ou par le tuteur légal pour les mineurs, auquel est joint:</p>
                  <ul>
                    <li>la carte nationale d’identité parvenue à expiration ou la déclaration de perte, de détérioration ou de vol ;</li>
                    <li>un certificat de résidence en cours de validité, en cas de changement de résidence;</li>
                    <li>une (1) photo d’identité récente et en couleur, avec fond uni, sans contour et de couleur blanche.</li>
                  </ul>
                </details>
              </details>
              <details>
                <summary>Formulaires</summary>
                <i class="fas fa-file-pdf"></i><a href="media/Etat Civil/CNI avec passeport.pdf" class="forms-links">Pour les personnes ayant un passeport biométrique</a><br>
                <i class="fas fa-file-pdf"></i><a href="media/Etat Civil/CNI sans passeport.pdf" class="forms-links">Pour les personnes n'ayant pas de passeport biométrique</a>
              </details>
            </div>
            <div class="col-12 bg-info mt-2 rounded-lg documents" id="passeport">
              <h3>Passeport biométrique</h3>
              <details>
                <summary>Dossier à fournir</summary>
                <ul>
                  <p>Le formulaire renseigné et signé par l’intéressé auquel il est joint :</p>
                  <li>le certificat de nationalité algérienne, lorsque la demande est exprimée pour la première fois ;</li>
                  <li>le passeport parvenu à expiration, accompagné de l’acte de naissance du père ou de la mère, ou à défaut, l’acte de décès de l’un des deux parents, lorsqu’il s’agit d’une demande de renouvellement ;</li>
                  <li>le certificat de résidence datant de moins de six (6) mois ;</li>
                  <li>l’attestation de travail ou tout justificatif du travail ou le certificat de scolarité pour les étudiants ou les enfants scolarisés ;</li>
                  <li>quatre (4) photos d’identité  en couleur, numériques, récentes et identiques  (le fond de la photo biométrique doit être uni, sans contour et de couleur blanche);</li>
                  <li>une quittance fiscale ou timbre fiscal dont le montant correspond à la nature du document demandé ;</li>
                  <li>la copie de la carte du groupe sanguin</li>
                </ul>
              </details>
              <details>
                <summary>Formulaires</summary>
                <i class="fas fa-file-pdf"></i><a href="media/Etat Civil/CNI avec passeport.pdf" class="forms-links">Formulaire de demande</a>
              </details>
              <details>
                <summary>Demande en ligne</summary>
                <a href="http://passeport.interieur.gov.dz/fr/">Demande de passeport en ligne</a>
              </details>
            </div>
            <div class="col-12 bg-danger mt-2 rounded-lg documents" id="passeport_urgence">
              <h3>Passeport d'urgence</h3>
              <details>
                <summary>Personnes ayant le droit</summary>
                <p>Le passeport d’urgence est délivré, dans les cas extrêmement urgents et à titre exceptionnel, au profit :</p>
                <ul>
                  <li>des citoyens algériens résidant à l’étranger et immatriculés auprès d’un poste diplomatique ou consulaire, ne possédant pas de passeport biométrique électronique, et qui, pour des raisons familiales, professionnelles, administratives ou de santé, sont contraints de se déplacer, en urgence, hors du pays de leur résidence ;</li>
                  <li>des citoyens algériens résidant à l’étranger et immatriculés auprès d’un poste diplomatique ou consulaire, se trouvant en séjour temporaire dans un pays autre que celui de leur résidence, dont le passeport a été égaré, détérioré ou volé ;</li>
                  <li>des citoyens algériens non immatriculés auprès d’un poste diplomatique ou consulaire, dont le dossier de régularisation de leur situation administrative, au plan du séjour, a été accepté par les autorités du pays d’accueil et nécessitant un passeport en cours de validité ;</li>
                  <li>des citoyens algériens se trouvant en séjour temporaire à l’étranger, dont le passeport a été égaré, détérioré ou volé et se trouvant contraints de rallier un ou plusieurs pays étrangers avant leur retour en Algérie ;</li>
                  <li>des citoyens algériens résidant à l’étranger et immatriculés auprès d’un poste diplomatique ou consulaire, se trouvant en séjour temporaire en Algérie, dont le passeport a été égaré, détérioré ou volé ou dont la durée de validité a expiré, et se trouvant contraints d’effectuer leur retour dans leur pays de résidence ;</li>
                  <li>des citoyens algériens résidant en Algérie, ne possédant pas de passeport et qui pour des raisons familiales, professionnelles, administratives ou de santé, sont contraints de se déplacer, en urgence, en dehors du territoire national</li>
                </ul>
              </details>
              <details>
                <summary>Dossier à fournir</summary>
                <p>le formulaire renseigné et signé par l’intéressé, ou par le tuteur légal pour les mineurs, avec l’apposition de l’empreinte digitale de l’index gauche du demandeur auquel il joint : </p>
                <ul>
                  <li>La copie du passeport parvenu à expiration, ou la déclaration y afférente en cas de perte, de détérioration ou de vol, pour les citoyens résidant à l’étranger ;</li>
                  <li>La copie du passeport parvenu à expiration ou à défaut une copie de la carte nationale d’identité pour les citoyens résidant en Algérie ;</li>
                  <li>La copie de la carte d’immatriculation consulaire pour les citoyens immatriculés auprès d’un poste diplomatique ou consulaire ;</li>
                  <li>Une pièce justificative de la demande ;</li>
                  <li>Deux (2) photos d’identité en couleur, numériques, récentes et identiques.</li>
                  <li>une quittance fiscale ou timbre fiscal dont le montant correspond à la nature du document demandé</li>
                </ul>
                <p>N.B : La durée de validité du passeport d’urgence est fixée au maximum à une (1) année, à compter de la date de son établissement. Elle ne peut être prolongée</p>
              </details>
              <details>
                <summary>Formulaires</summary>
                <i class="fas fa-file-pdf"></i><a href="media/Etat Civil/Passeport d'Urgence.pdf">Formulaire demande passeport d'urgence</a>
              </details>
            </div>
            <div class="col-12 bg-danger mt-2 rounded-lg documents" id="carte_grise">
              <h3>Carte d'immatriculation</h3>
              <details>
                <summary>Dossier à fournir</summary>
                <p>Le propriétaire du véhicule doit remplir le formulaire de demande de la carte d’immatriculation, retiré auprès des services concernés de la  commune ou téléchargé du site web du Ministère de l’Intérieur, des Collectivités Locales et de l’Aménagement du Territoire, accompagné des documents suivants pour l’ensemble des cas de demandes d’immatriculation :</p>
                <ul>
                  <li>Fiche de résidence (sauf cas de demande d’immatriculation de véhicule appartenant aux coopérants étrangers), </li>
                  <li>Photocopie de la carte nationale d’identité, </li>
                  <li>Acte de vente, (sauf cas d’un véhicule importé par un particulier)</li>
                  <li>Droit de timbre fiscal,</li>
                  <li>Quittance de taxe de transaction pour les véhicules qui y sont soumis,</li>
                  <li>Titre justifiant la qualité de l’acquéreur lorsque celui-ci est une personne morale de droit public ou de droit privé.</li>
                </ul>
                <p>Outre les pièces suscitées, le propriétaire du véhicule doit produire dans les cas ci-après les pièces suivantes :</p>
                <details>
                  <summary>En cas d'importation des véhicules par les personnes physiques ou morales ?</summary>
                  <ul>
                    <li>Certificat ou carte d’immatriculation délivrés par les autorités étrangères concernées. (Plus de détail : si le pays d’origine ou le pays de provenance du véhicule ne délivrent pas un document d’immatriculation pour les véhicules destinés à l’exportation, le dossier doit comporter toutes pièces justificatives de l’identité du véhicule, conformément à la réglementation en vigueur dans ces pays).</li>
                    <li>Traduction officielle en langue nationale du document d’immatriculation et du certificat de conformité. (Plus de détail : à l’exception des documents délivrés en Anglais et en Français).</li>
                    <li>Certificat de conformité délivré par le constructeur ou le concessionnaire,</li>
                    <li>Procès verbal de conformité à titre isolé délivré par les services des mines,</li>
                    <li>Certificat de dédouanement,</li>
                    <li>Copie de la facture d’achat du véhicule,</li>
                  </ul>
                </details>
                <details>
                  <summary>En cas de réimmatriculation du véhicule dans la même wilaya ?</summary>
                  <ul>
                    <li>Carte d’immatriculation barrée, </li>
                  </ul>
                </details>
                <details>
                  <summary>En cas de réimmatriculation de véhicule transféré dans une autre wilaya ?</summary>
                  <ul>
                    <li>Carte d’immatriculation barrée, </li>
                    <li>Fiche de contrôle délivrée par la wilaya de la dernière immatriculation</li>
                  </ul>
                </details>
                <details>
                  <summary>En cas de demande d’immatriculation de véhicules neufs acquis auprès des concessionnaires implantés sur le territoire national ?</summary>
                  <ul>
                    <li>Carte d’immatriculation provisoire,</li>
                    <li>Contrat de vente délivré par le concessionnaire déterminant toutes les caractéristiques techniques du véhicule, et comportant les informations concernant le dédouanement. </li>
                  </ul>
                </details>
                <details>
                  <summary>En cas  de demande d’immatriculation des véhicules neufs acquis auprès des constructeurs ou des sociétés chargées de faire le montage  des véhicules en Algérie ?</summary>
                  <ul>
                    <li>Carte d’immatriculation provisoire,</li>
                    <li>Attestation de vente, délivrée par le constructeur ou la société  chargée de faire le montage des véhicules en Algérie, déterminant toutes les caractéristiques techniques du véhicule</li>
                  </ul>
                </details>
                <details>
                  <summary>En cas de demande d’immatriculation de véhicule acquis auprès des administrations publiques (douanes et domaines) et dans le cadre de la vente aux enchères par un commissaire priseur ?</summary>
                  <ul>
                    <li>Attestation de vente délivrée par l’administration concernée (douanes, domaines) ou le commissaire priseur comportant les données concernant le véhicule,</li>
                    <li>Carte d’immatriculation barrée si la vente est effectuée par un  commissaire priseur, quand la vente est réalisée par l’administration des douanes et des domaines carte d’immatriculation, s’il y a lieu,</li>
                    <li>Procès verbal de réception à titre isolé délivré par les services des mines préalablement à la vente.</li>
                    <li>Certificat d’identification du véhicule délivré préalablement à la vente, par les services des mines,</li>
                  </ul>
                </details>
                <details>
                  <summary>En cas de demande d’immatriculation du véhicule vendu sur décision de justice par un commissaire priseur ?</summary>
                  <ul>
                    <li>Carte d’immatriculation barrée,</li>
                    <li>Jugement définitif ordonnant la vente du véhicule,</li>
                    <li>Attestation de vente délivrée par le commissaire priseur,</li>
                    <li>Fiche de contrôle, s’il s’agit d’un transfert d’une wilaya à une autre</li>
                  </ul>
                </details>
                <details>
                  <summary>En cas de demande d’immatriculation de véhicule acquis auprès des représentations diplomatiques et des organisations internationales et régionales accréditées en Algérie ?</summary>
                  <ul>
                    <li>Procès verbal de réception à titre isolé délivré par les services des mines  préalablement à la vente,</li>
                    <li>Copie de l’autorisation de revente délivrée par les services du Ministère des Affaires Etrangères visée par les services des douanes, dûment légalisé,</li>
                    <li>Certificat de dédouanement</li>
                  </ul>
                </details>
                <details>
                  <summary>En cas de demande d’immatriculation de véhicule appartenant aux coopérants étrangers  liés par contrat ?</summary>
                  <h5>Véhicule importé neuf ou occasion :</h5>
                  <ul>
                    <li>Certificat d’immatriculation délivré par les autorités étrangères concernées et le certificat de conformité délivré par le constructeur ou le concessionnaire pour le véhicule neuf, pour le véhicule d’occasion, certificat d’immatriculation du pays de provenance,</li>
                    <li>Facture d’achat ou acte de vente,</li>
                    <li>Certificat de travail ou pièce justificative de son activité,</li>
                    <li>Acquit à caution délivré par les services des douanes,</li>
                    <li>Procès verbal de réception à titre isolé délivré par les services des mines,</li>
                    <li>Extrait d’acte de naissance ou photocopie du passeport en cours de validité,</li>
                    <li>Certificat de résidence n°2.</li>
                  </ul>
                  <h5>Vente de véhicules entre coopérants étrangers liés par contrat :</h5>
                  <ul>
                    <li>Carte d’immatriculation barrée,</li>
                    <li>Acte de vente légalisé,</li>
                    <li>Acquit à caution au nom du nouvel acquéreur,</li>
                    <li>Certificat de résidence n°2,</li>
                    <li>Fiche de contrôle pour les véhicules en provenance d’une autre wilaya,</li>
                    <li>Certificat de travail ou pièce justificative de son activité,</li>
                    <li>Extrait d’acte de naissance ou photocopie du passeport en cours de validité,</li>
                  </ul>
                </details>
                <details>
                  <summary>En cas de perte ou de détérioration de la carte d’immatriculation et demande de duplicata ?</summary>
                  <ul>
                    <li>Déclaration de perte ou de vol faite auprès de service de sécurité compétent où il y a  eu lieu la perte ou le vol de la carte,</li>
                    <li>Carte d’immatriculation détériorée si elle est identifiable. En cas d’impossibilité d’identifier les données de la carte, une déclaration de perte auprès des services de sécurité territorialement compétents.</li>
                  </ul>
                </details>
                <details>
                  <summary>En cas de décès du propriétaire ?</summary>
                  <ul>
                    <li>Carte d’immatriculation barrée,</li>
                    <li>Fredha délivré par le notaire,</li>
                    <li>Procuration établie par acte notarié au profit d’un héritier,</li>
                    <li>Fiche de contrôle, s’il s’agit d’un transfert d’une wilaya à une autre,</li>
                  </ul>
                </details>
                <details>
                  <summary>En cas de changement de résidence du propriétaire ?</summary>
                  <ul>
                    <li>Carte d’immatriculation,</li>
                    <li>Fiche de contrôle, s’il s’agit d’un transfert d’une wilaya à une autre,</li>
                  </ul>
                </details>
                <details>
                  <summary>En cas de demande d’immatriculation de véhicules ayant subi des transformations notables conformément à la réglementation en vigueur ?</summary>
                  <ul>
                    <li>Carte d’immatriculation barrée.</li>
                    <li>Document attestant la nature des transformations effectuées,</li>
                    <li>Procès verbal de réception à titre isolé délivré par les services des mines</li>
                  </ul>
                </details>
                <details>
                  <summary>
                    En cas d'immatriculation de véhicules reconstitués à partir de véhicules radiés du registre des immatriculations ?</summary>
                    <ul>
                      <li>Certificat de radiation du véhicule (justification du châssis du véhicule) délivré par les services des mines,</li>
                      <li>Déclaration de destruction accompagnée de la carte d’immatriculation barrée conformément à l’article 175 du décret exécutif n° 04-381 du 28 novembre 2004.</li>
                      <li>En cas de destruction du véhicule par les services compétents, le propriétaire doit déposer, à la commune, la daïra, la circonscription administrative ou la wilaya -Direction de la Réglementation et des Affaires Générales-territorialement compétente du lieu de l’immatriculation du véhicule, dans les quinze 15 jours qui suivent, une déclaration écrite  accompagnée de la carte d’immatriculation barrée contre accusé de réception, et ce conformément à l’article 175 du décret exécutif n° 04-381.</li>
                    </ul>
                </details>
                <details>
                  <summary>En cas d'immatriculation provisoire de véhicules neufs par les concessionnaires agréés implantés sur le territoire national ?</summary>
                  <ul>
                    <li>Demande d’immatriculation provisoire formulée par le concessionnaire,</li>
                    <li>Liste de colisage des véhicules concernés, dûment visée par les services des mines,</li>
                    <li>Copie du contrat de concession cité dans l’article 02 du décret exécutif n° 15-58 du 08/02/2015.</li>
                    <li>Copie légalisée du registre de commerce,</li>
                    <li>procès-verbal de réception par type des véhicules concernés,</li>
                    <li>Facture d’achat des véhicules,</li>
                    <li>Avis d’arrivé des véhicules délivré par l’entreprise portuaire,</li>
                    <li>copie de la carte d’identification fiscale. </li>
                  </ul>
                  <p>N.B : Lors du dépôt de la première demande de liste, le concessionnaire doit déposer également une copie de l’agrément définitif auprès des services concernés de la wilaya territorialement compétente.

                  Il doit communiquer chaque année, l’adresse du lieu de son implantation (siège social) à la wilaya  territorialement compétente.</p>
                </details>
                <details>
                  <summary>
                    En cas d'immatriculation provisoire de véhicules neufs produits par les constructeurs ou par les sociétés chargées de faire le montage des véhicules en Algérie accrédités implantés sur le territoire national ?</summary>
                    <ul>
                      <li>Demande d’immatriculation provisoire formulée par le constructeur ou par les sociétés chargées de faire le montage des véhicules,</li>
                      <li>document de dédouanement,</li>
                      <li>Liste de colisage des véhicules concernés dûment visée par les services des mines,</li>
                      <li>Certificat d’accréditation par le constructeur,</li>
                      <li>Copie légalisée du registre de commerce,</li>
                      <li>procès-verbal de réception par type des véhicules concernés,</li>
                      <li>certificat de conformité délivrée par les services compétents. </li>
                      <li>copie de la carte d’identification fiscale. </li>
                    </ul>
                    <p>N.B : Lors du dépôt de la première demande de liste, Le constructeur ou la société chargée de montés des véhicules en Algérie doit déposer une copie de l’agrément auprès des services concernés de la wilaya territorialement compétente

                    Il doit communiquer chaque année, l’adresse du lieu de son implantation (siège social) à la wilaya  territorialement compétente.</p>
                </details>
              </details>
              <details>
                <summary>Formulaires</summary>
                <i class="fas fa-file-pdf"></i><a href="media/Etat Civil/Demande de carte Grise.pdf">Formulaire demande de carte grise</a><br>
                <i class="fas fa-file-pdf"></i><a href="media/Etat Civil/Vente de vehicule.pdf">Formulaire ventre de vehicule</a>
              </details>
            </div>
            <div class="col-12 bg-danger mt-2 rounded-lg documents" id="permis">
              <h3>Permis de conduire</h3>
              <h5 class="category">Permis probatoire</h5>
              <details class="categoryDetails">
                <summary>Dossier à fournir</summary>
                <ul>
                  <li>Formulaire de demande renseigné et signé par le demandeur ;</li>
                  <li>Fiche de résidence ;</li>
                  <li>Certificat médical établi conformément à la réglementation en vigueur ;</li>
                  <li>Deux (2) photos d’identité, en couleurs, récentes et identiques ;</li>
                  <li>Copie de la carte du groupe sanguin ;</li>
                  <li>Un timbre fiscal (500 DA).</li>
                </ul>
              </details>
              <details class="categoryDetails">
                <summary>Formulaires</summary>
                <i class="fas fa-file-pdf"></i><a href="media/Etat Civil/Demande Permis de Conduire">Formulaire demande permis de conduire</a><br>
                <i class="fas fa-file-pdf"></i><a href="media/Etat Civil/Certificat Medical.pdf">Certificat medical</a>
              </details>
              <h5 class="category">Permis définitif</h5>
              <details class="categoryDetails">
                <summary>Dossier à fournir</summary>
                <details>
                  <summary>Première demande</summary>
                  <ul>
                    <li>Formulaire de demande renseigné et signé par le demandeur ;</li>
                    <li>Fiche de résidence ;</li>
                    <li>Certificat médical établi conformément à la réglementation en vigueur ;</li>
                    <li>Deux (2) photos d’identité, en couleurs, récentes et identiques ;</li>
                    <li>Un timbre fiscal (200 DA) ;</li>
                    <li>Le permis probatoire expiré.</li>
                  </ul>
                </details>
                <details>
                  <summary>Renouvellement</summary>
                    <ul>
                      <li>Formulaire de demande renseigné et signé par le demandeur ;</li>
                      <li>Fiche de résidence ;</li>
                      <li>Certificat médical établi conformément à la réglementation en vigueur ;</li>
                      <li>Deux (2) photos d’identité, en couleurs, récentes et identiques ;</li>
                      <li>Un timbre fiscal (200 DA)</li>
                    </ul>
                </details>
              </details>
              <details class="categoryDetails">
                <summary>Formulaires</summary>
                <i class="fas fa-file-pdf"></i><a href="media/Etat Civil/Demande Permis de Conduire">Formulaire demande permis de conduire</a><br>
                <i class="fas fa-file-pdf"></i><a href="media/Etat Civil/Certificat Medical.pdf">Certificat medical</a>
              </details>
              <h5 class="category">Conversion du permis</h5>
              <details class="categoryDetails">
                <summary>Conversion du permis de conduire militaire en permis de conduire civil ?</summary>
                <h6>Personnel militaire en activité</h6>
                <ul>
                  <li>Permis de conduire militaire (original) + une photocopie</li>
                  <li>Dossier réglementaire (formulaire à remplir, Fiche de résidence, copie de la carte  du groupe sanguin, certificat médical, deux (2) photos et un timbre fiscal)</li>
                </ul>
                <h6>Personnel militaire  libéré ou radié de l’ANP</h6>
                <ul>
                  <li>Dossier réglementaire (formulaire à remplir, Fiche de résidence, copie de la carte  du groupe sanguin, certificat médical, deux (2) photos et un timbre fiscal)</li>
                  <li>Permis de conduire militaire (original) revêtu de la mention « Libéré du service actif »  accompagné d’une photocopie.</li>
                </ul>
              </details>
              <details class="categoryDetails">
                <summary>Conversion d’un permis de conduire étranger en permis de conduire algérien ?</summary>
                <h6>Cas des nationeaux : </h6>
                <ul>
                  <li>Permis de conduire étranger</li>
                  <li>Certificat de capacité délivré par l’administration étrangère </li>
                  <li>Certificat médical</li>
                  <li>Photos d’identité (02)</li>
                  <li>Une fiche de résidence</li>
                  <li>Un timbre fiscal</li>
                </ul>
                <h6>Cas des étrangers : (même dossier à déposer après une année de séjour en Algérie)</h6>
              </details>
              <details class="categoryDetails">
                <summary>Conversion d’un permis de conduire algérien  en permis de conduire étranger ?</summary>
                <ul>
                  <li>Dépôt de la demande de conversion auprès de la représentation diplomatique algérienne à l’étranger ou de l’administration étrangère (préfecture ou autre). La demande  doit être introduite avant l’expiration du délai ouvrant droit à la conversion au niveau du pays d’accueil.</li>
                  <li>Certificat d’authentification du permis de conduire (certificat de capacité) délivré par la daïra ou la circonscription administrative du lieu de délivrance du permis de conduire algérien.</li>
                </ul>
              </details>
            </div>
          </div>
        </main>
      </div>
      <div class="row">
        <?php
          include("footer.php");
        ?>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="Js/common.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>