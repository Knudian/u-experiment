<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Class Version20190710115917
 * @package DoctrineMigrations
 */
final class Version20190710115917 extends AbstractMigration
{
    /**
     * @return string
     */
    public function getDescription() : string
    {
        return '';
    }

    /**
     * @param Schema $schema
     * @throws \Doctrine\DBAL\DBALException
     */
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE code_formacode_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE code_certifinfo_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE code_rncp_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE commune_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE coordonnees_organisme_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE lieu_de_formation_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE domaine_formation_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE contact_formation_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE session_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE contact_organisme_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE adresse_inscription_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE siret_organisme_formation_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE contact_formateur_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE url_formation_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE potentiel_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE organisme_financeur_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE certification_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE date_information_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE siret_formateur_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE url_action_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE resume_offre_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE module_prerequis_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE sous_module_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE resume_organisme_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE formation_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE contact_formation_resume_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE adresse_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE action_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE organisme_formation_responsable_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE organisme_formateur_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE coordonnees_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE etat_recrutement_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE type_module_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE modalite_entree_sortie_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE type_parcours_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE niveau_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE financeur_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE modalite_enseignement_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE perimetre_recrutement_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE objectif_general_formation_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE type_positionnement_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE code_nsf (id INT NOT NULL, formation VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE code_rome (id VARCHAR(5) NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE code_formacode (id INT NOT NULL, potentiel_id INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_51604A503E7A70EB ON code_formacode (potentiel_id)');
        $this->addSql('CREATE TABLE code_certifinfo (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE code_rncp (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE region (id INT NOT NULL, country_id VARCHAR(2) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_F62F176F92F3E70 ON region (country_id)');
        $this->addSql('CREATE TABLE departement (id VARCHAR(3) NOT NULL, region_id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C1765B6398260155 ON departement (region_id)');
        $this->addSql('CREATE TABLE country (id VARCHAR(2) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE commune (id INT NOT NULL, departement_id VARCHAR(3) NOT NULL, code_insee VARCHAR(5) NOT NULL, name VARCHAR(255) NOT NULL, code_canton VARCHAR(5) NOT NULL, code_postal VARCHAR(5) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_E2E2D1EECCF9E01E ON commune (departement_id)');
        $this->addSql('CREATE TABLE coordonnees_organisme (id INT NOT NULL, coordonnees_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_6BE8BF85853DEDF ON coordonnees_organisme (coordonnees_id)');
        $this->addSql('CREATE TABLE lieu_de_formation (id INT NOT NULL, coordonnees_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_1E260C665853DEDF ON lieu_de_formation (coordonnees_id)');
        $this->addSql('CREATE TABLE domaine_formation (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE domaine_formation_code_formacode (domaine_formation_id INT NOT NULL, code_formacode_id INT NOT NULL, PRIMARY KEY(domaine_formation_id, code_formacode_id))');
        $this->addSql('CREATE INDEX IDX_2AC89678E22A2443 ON domaine_formation_code_formacode (domaine_formation_id)');
        $this->addSql('CREATE INDEX IDX_2AC896784DD92D06 ON domaine_formation_code_formacode (code_formacode_id)');
        $this->addSql('CREATE TABLE domaine_formation_code_nsf (domaine_formation_id INT NOT NULL, code_nsf_id INT NOT NULL, PRIMARY KEY(domaine_formation_id, code_nsf_id))');
        $this->addSql('CREATE INDEX IDX_4932F1F4E22A2443 ON domaine_formation_code_nsf (domaine_formation_id)');
        $this->addSql('CREATE INDEX IDX_4932F1F4C585B9C9 ON domaine_formation_code_nsf (code_nsf_id)');
        $this->addSql('CREATE TABLE domaine_formation_code_rome (domaine_formation_id INT NOT NULL, code_rome_id VARCHAR(5) NOT NULL, PRIMARY KEY(domaine_formation_id, code_rome_id))');
        $this->addSql('CREATE INDEX IDX_B9441556E22A2443 ON domaine_formation_code_rome (domaine_formation_id)');
        $this->addSql('CREATE INDEX IDX_B9441556D3C44F80 ON domaine_formation_code_rome (code_rome_id)');
        $this->addSql('CREATE TABLE contact_formation (id INT NOT NULL, coordonnees_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_2EB102C45853DEDF ON contact_formation (coordonnees_id)');
        $this->addSql('CREATE TABLE session (id INT NOT NULL, etat_recrutement_id INT NOT NULL, adresse_inscription_id INT NOT NULL, periode_inscription_debut TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, periode_inscription_fin TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, modalites_inscriptions VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D044D5D445B7B167 ON session (etat_recrutement_id)');
        $this->addSql('CREATE INDEX IDX_D044D5D4DDD4B933 ON session (adresse_inscription_id)');
        $this->addSql('CREATE TABLE contact_organisme (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE adresse_inscription (id INT NOT NULL, adresse_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_909E0F394DE7DC5C ON adresse_inscription (adresse_id)');
        $this->addSql('CREATE TABLE siret_organisme_formation (id INT NOT NULL, siret VARCHAR(14) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE contact_formateur (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE url_formation (id INT NOT NULL, urlweb TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN url_formation.urlweb IS \'(DC2Type:array)\'');
        $this->addSql('CREATE TABLE potentiel (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE organisme_financeur (id INT NOT NULL, code_financeur_id INT NOT NULL, nb_place_financees INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_FA5217B9963F95E9 ON organisme_financeur (code_financeur_id)');
        $this->addSql('CREATE TABLE certification (id INT NOT NULL, code_rncp_id INT DEFAULT NULL, code_certifinfo_id INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_6C3C6D75C06F85E9 ON certification (code_rncp_id)');
        $this->addSql('CREATE INDEX IDX_6C3C6D754EE018BA ON certification (code_certifinfo_id)');
        $this->addSql('CREATE TABLE date_information (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE siret_formateur (id INT NOT NULL, siret VARCHAR(14) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE url_action (id INT NOT NULL, urlweb TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN url_action.urlweb IS \'(DC2Type:array)\'');
        $this->addSql('CREATE TABLE resume_offre (id INT NOT NULL, code_niveau_entree_id INT NOT NULL, modalites_enseignement_id INT NOT NULL, code_public_vise_id INT NOT NULL, domaine_formation_id INT NOT NULL, intitule_formation VARCHAR(255) NOT NULL, prise_en_charge_frais_possible BOOLEAN NOT NULL, nom_organisme VARCHAR(250) NOT NULL, certifiante BOOLEAN NOT NULL, nombre_heure_total INT NOT NULL, siret VARCHAR(14) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_3371460716F928FB ON resume_offre (code_niveau_entree_id)');
        $this->addSql('CREATE INDEX IDX_33714607E5CB8311 ON resume_offre (modalites_enseignement_id)');
        $this->addSql('CREATE INDEX IDX_337146076427DB9 ON resume_offre (code_public_vise_id)');
        $this->addSql('CREATE INDEX IDX_33714607E22A2443 ON resume_offre (domaine_formation_id)');
        $this->addSql('CREATE TABLE module_prerequis (id INT NOT NULL, formation_id INT NOT NULL, reference_module TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_9082F4C15200282E ON module_prerequis (formation_id)');
        $this->addSql('CREATE TABLE sous_module (id INT NOT NULL, type_module_id INT DEFAULT NULL, reference_module TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_DC3BD4DF1B04F481 ON sous_module (type_module_id)');
        $this->addSql('CREATE TABLE resume_organisme (id INT NOT NULL, numero_activite VARCHAR(11) NOT NULL, nom_organisme VARCHAR(250) NOT NULL, raison_sociale VARCHAR(250) NOT NULL, siret VARCHAR(14) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE formation (id INT NOT NULL, parcours_de_formation_id INT NOT NULL, code_niveau_entree_id INT NOT NULL, objectif_general_formation_id INT NOT NULL, code_niveau_sortie_id INT NOT NULL, domaine_formation_id INT NOT NULL, contact_formation_id INT NOT NULL, intitule_formation VARCHAR(255) NOT NULL, contenu_formation TEXT NOT NULL, resultats_attendus TEXT NOT NULL, objecif_formation TEXT NOT NULL, certifiante BOOLEAN NOT NULL, identifiant_module TEXT NOT NULL, hebergement VARCHAR(250) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_404021BF2A5032B2 ON formation (parcours_de_formation_id)');
        $this->addSql('CREATE INDEX IDX_404021BF16F928FB ON formation (code_niveau_entree_id)');
        $this->addSql('CREATE INDEX IDX_404021BF67F1F406 ON formation (objectif_general_formation_id)');
        $this->addSql('CREATE INDEX IDX_404021BF75F028B8 ON formation (code_niveau_sortie_id)');
        $this->addSql('CREATE INDEX IDX_404021BFE22A2443 ON formation (domaine_formation_id)');
        $this->addSql('CREATE INDEX IDX_404021BF7EB71A1A ON formation (contact_formation_id)');
        $this->addSql('CREATE TABLE contact_formation_resume (id INT NOT NULL, nom VARCHAR(50) DEFAULT NULL, telfixe TEXT DEFAULT NULL, courriel TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN contact_formation_resume.telfixe IS \'(DC2Type:array)\'');
        $this->addSql('CREATE TABLE adresse (id INT NOT NULL, ville_id INT NOT NULL, ligne TEXT DEFAULT NULL, courriel VARCHAR(160) NOT NULL, latitude VARCHAR(30) NOT NULL, longitude VARCHAR(30) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C35F0816A73F0036 ON adresse (ville_id)');
        $this->addSql('COMMENT ON COLUMN adresse.ligne IS \'(DC2Type:array)\'');
        $this->addSql('CREATE TABLE action (id INT NOT NULL, modalite_entree_sortie_id INT NOT NULL, code_public_vise_id INT NOT NULL, modalites_enseignement_id INT NOT NULL, code_perimetre_recrutement_id INT NOT NULL, code_modalite_pedagogique_id INT NOT NULL, adresse_information_id INT NOT NULL, lieu_de_formation_id INT NOT NULL, url_action_id INT NOT NULL, modalites_alternance TEXT NOT NULL, prise_en_charge_frais_possible BOOLEAN NOT NULL, niveau_entree_obligatoire BOOLEAN NOT NULL, rythme_formation TEXT NOT NULL, conditions_specifiques TEXT NOT NULL, nombre_heure_centre INT NOT NULL, modalites_recrutement TEXT NOT NULL, langue_formation VARCHAR(2) NOT NULL, info_public_vise VARCHAR(250) NOT NULL, nombre_heure_entreprise INT NOT NULL, restauration VARCHAR(250) NOT NULL, transport VARCHAR(250) NOT NULL, infos_perimetre_recrutement VARCHAR(50) NOT NULL, duree_conventionnee INT NOT NULL, nombre_heure_total INT NOT NULL, prix_horaire_ttc VARCHAR(6) NOT NULL, prix_total_ttc VARCHAR(10) NOT NULL, duree_indicative VARCHAR(250) NOT NULL, access_handicapes VARCHAR(250) NOT NULL, frais_restants VARCHAR(200) NOT NULL, modalites_pedagoques VARCHAR(200) NOT NULL, details_conditions_prise_en_charge VARCHAR(600) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_47CC8C9252D487EF ON action (modalite_entree_sortie_id)');
        $this->addSql('CREATE INDEX IDX_47CC8C926427DB9 ON action (code_public_vise_id)');
        $this->addSql('CREATE INDEX IDX_47CC8C92E5CB8311 ON action (modalites_enseignement_id)');
        $this->addSql('CREATE INDEX IDX_47CC8C9289FFC773 ON action (code_perimetre_recrutement_id)');
        $this->addSql('CREATE INDEX IDX_47CC8C9229EE71C7 ON action (code_modalite_pedagogique_id)');
        $this->addSql('CREATE INDEX IDX_47CC8C92AE88D1A1 ON action (adresse_information_id)');
        $this->addSql('CREATE INDEX IDX_47CC8C9254A3B84D ON action (lieu_de_formation_id)');
        $this->addSql('CREATE INDEX IDX_47CC8C92934ABDF ON action (url_action_id)');
        $this->addSql('CREATE TABLE organisme_formation_responsable (id INT NOT NULL, potentiel_id INT NOT NULL, siret_organisme_formation_id INT NOT NULL, numero_activite VARCHAR(11) NOT NULL, nom_organisme VARCHAR(250) NOT NULL, raison_sociale VARCHAR(250) NOT NULL, renseignement_specifiques TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_B59C780B3E7A70EB ON organisme_formation_responsable (potentiel_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B59C780BE69E56DF ON organisme_formation_responsable (siret_organisme_formation_id)');
        $this->addSql('CREATE TABLE organisme_formateur (id INT NOT NULL, potentiel_id INT NOT NULL, raison_sociale_formateur VARCHAR(250) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A41FD0083E7A70EB ON organisme_formateur (potentiel_id)');
        $this->addSql('CREATE TABLE coordonnees (id INT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, fax TEXT DEFAULT NULL, portable TEXT DEFAULT NULL, web TEXT DEFAULT NULL, lignes TEXT DEFAULT NULL, courriel VARCHAR(160) NOT NULL, civilite VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN coordonnees.fax IS \'(DC2Type:array)\'');
        $this->addSql('COMMENT ON COLUMN coordonnees.portable IS \'(DC2Type:array)\'');
        $this->addSql('COMMENT ON COLUMN coordonnees.web IS \'(DC2Type:array)\'');
        $this->addSql('COMMENT ON COLUMN coordonnees.lignes IS \'(DC2Type:array)\'');
        $this->addSql('CREATE TABLE etat_recrutement (id INT NOT NULL, name VARCHAR(20) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE type_module (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE modalite_entree_sortie (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE type_parcours (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE niveau (id INT NOT NULL, level INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE financeur (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE modalite_enseignement (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE perimetre_recrutement (id INT NOT NULL, name VARCHAR(20) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE objectif_general_formation (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE type_positionnement (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE code_formacode ADD CONSTRAINT FK_51604A503E7A70EB FOREIGN KEY (potentiel_id) REFERENCES potentiel (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE region ADD CONSTRAINT FK_F62F176F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE departement ADD CONSTRAINT FK_C1765B6398260155 FOREIGN KEY (region_id) REFERENCES region (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE commune ADD CONSTRAINT FK_E2E2D1EECCF9E01E FOREIGN KEY (departement_id) REFERENCES departement (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE coordonnees_organisme ADD CONSTRAINT FK_6BE8BF85853DEDF FOREIGN KEY (coordonnees_id) REFERENCES coordonnees (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE lieu_de_formation ADD CONSTRAINT FK_1E260C665853DEDF FOREIGN KEY (coordonnees_id) REFERENCES coordonnees (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE domaine_formation_code_formacode ADD CONSTRAINT FK_2AC89678E22A2443 FOREIGN KEY (domaine_formation_id) REFERENCES domaine_formation (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE domaine_formation_code_formacode ADD CONSTRAINT FK_2AC896784DD92D06 FOREIGN KEY (code_formacode_id) REFERENCES code_formacode (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE domaine_formation_code_nsf ADD CONSTRAINT FK_4932F1F4E22A2443 FOREIGN KEY (domaine_formation_id) REFERENCES domaine_formation (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE domaine_formation_code_nsf ADD CONSTRAINT FK_4932F1F4C585B9C9 FOREIGN KEY (code_nsf_id) REFERENCES code_nsf (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE domaine_formation_code_rome ADD CONSTRAINT FK_B9441556E22A2443 FOREIGN KEY (domaine_formation_id) REFERENCES domaine_formation (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE domaine_formation_code_rome ADD CONSTRAINT FK_B9441556D3C44F80 FOREIGN KEY (code_rome_id) REFERENCES code_rome (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE contact_formation ADD CONSTRAINT FK_2EB102C45853DEDF FOREIGN KEY (coordonnees_id) REFERENCES coordonnees (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE session ADD CONSTRAINT FK_D044D5D445B7B167 FOREIGN KEY (etat_recrutement_id) REFERENCES etat_recrutement (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE session ADD CONSTRAINT FK_D044D5D4DDD4B933 FOREIGN KEY (adresse_inscription_id) REFERENCES adresse_inscription (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE adresse_inscription ADD CONSTRAINT FK_909E0F394DE7DC5C FOREIGN KEY (adresse_id) REFERENCES adresse (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE organisme_financeur ADD CONSTRAINT FK_FA5217B9963F95E9 FOREIGN KEY (code_financeur_id) REFERENCES financeur (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE certification ADD CONSTRAINT FK_6C3C6D75C06F85E9 FOREIGN KEY (code_rncp_id) REFERENCES code_rncp (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE certification ADD CONSTRAINT FK_6C3C6D754EE018BA FOREIGN KEY (code_certifinfo_id) REFERENCES code_certifinfo (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE resume_offre ADD CONSTRAINT FK_3371460716F928FB FOREIGN KEY (code_niveau_entree_id) REFERENCES niveau (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE resume_offre ADD CONSTRAINT FK_33714607E5CB8311 FOREIGN KEY (modalites_enseignement_id) REFERENCES modalite_enseignement (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE resume_offre ADD CONSTRAINT FK_337146076427DB9 FOREIGN KEY (code_public_vise_id) REFERENCES code_formacode (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE resume_offre ADD CONSTRAINT FK_33714607E22A2443 FOREIGN KEY (domaine_formation_id) REFERENCES domaine_formation (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE module_prerequis ADD CONSTRAINT FK_9082F4C15200282E FOREIGN KEY (formation_id) REFERENCES formation (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE sous_module ADD CONSTRAINT FK_DC3BD4DF1B04F481 FOREIGN KEY (type_module_id) REFERENCES type_module (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF2A5032B2 FOREIGN KEY (parcours_de_formation_id) REFERENCES type_parcours (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF16F928FB FOREIGN KEY (code_niveau_entree_id) REFERENCES niveau (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF67F1F406 FOREIGN KEY (objectif_general_formation_id) REFERENCES objectif_general_formation (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF75F028B8 FOREIGN KEY (code_niveau_sortie_id) REFERENCES niveau (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFE22A2443 FOREIGN KEY (domaine_formation_id) REFERENCES domaine_formation (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF7EB71A1A FOREIGN KEY (contact_formation_id) REFERENCES contact_formation (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE adresse ADD CONSTRAINT FK_C35F0816A73F0036 FOREIGN KEY (ville_id) REFERENCES commune (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE action ADD CONSTRAINT FK_47CC8C9252D487EF FOREIGN KEY (modalite_entree_sortie_id) REFERENCES modalite_entree_sortie (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE action ADD CONSTRAINT FK_47CC8C926427DB9 FOREIGN KEY (code_public_vise_id) REFERENCES code_formacode (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE action ADD CONSTRAINT FK_47CC8C92E5CB8311 FOREIGN KEY (modalites_enseignement_id) REFERENCES modalite_enseignement (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE action ADD CONSTRAINT FK_47CC8C9289FFC773 FOREIGN KEY (code_perimetre_recrutement_id) REFERENCES perimetre_recrutement (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE action ADD CONSTRAINT FK_47CC8C9229EE71C7 FOREIGN KEY (code_modalite_pedagogique_id) REFERENCES code_formacode (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE action ADD CONSTRAINT FK_47CC8C92AE88D1A1 FOREIGN KEY (adresse_information_id) REFERENCES adresse (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE action ADD CONSTRAINT FK_47CC8C9254A3B84D FOREIGN KEY (lieu_de_formation_id) REFERENCES lieu_de_formation (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE action ADD CONSTRAINT FK_47CC8C92934ABDF FOREIGN KEY (url_action_id) REFERENCES url_action (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE organisme_formation_responsable ADD CONSTRAINT FK_B59C780B3E7A70EB FOREIGN KEY (potentiel_id) REFERENCES potentiel (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE organisme_formation_responsable ADD CONSTRAINT FK_B59C780BE69E56DF FOREIGN KEY (siret_organisme_formation_id) REFERENCES siret_organisme_formation (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE organisme_formateur ADD CONSTRAINT FK_A41FD0083E7A70EB FOREIGN KEY (potentiel_id) REFERENCES potentiel (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE users ADD confirmation_password VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE users ADD siret VARCHAR(255) NOT NULL');
        $this->addSql('ALTER INDEX uniq_8d93d649e7927c74 RENAME TO UNIQ_1483A5E9E7927C74');
    }

    /**
     * @param Schema $schema
     * @throws \Doctrine\DBAL\DBALException
     */
    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE domaine_formation_code_nsf DROP CONSTRAINT FK_4932F1F4C585B9C9');
        $this->addSql('ALTER TABLE domaine_formation_code_rome DROP CONSTRAINT FK_B9441556D3C44F80');
        $this->addSql('ALTER TABLE domaine_formation_code_formacode DROP CONSTRAINT FK_2AC896784DD92D06');
        $this->addSql('ALTER TABLE resume_offre DROP CONSTRAINT FK_337146076427DB9');
        $this->addSql('ALTER TABLE action DROP CONSTRAINT FK_47CC8C926427DB9');
        $this->addSql('ALTER TABLE action DROP CONSTRAINT FK_47CC8C9229EE71C7');
        $this->addSql('ALTER TABLE certification DROP CONSTRAINT FK_6C3C6D754EE018BA');
        $this->addSql('ALTER TABLE certification DROP CONSTRAINT FK_6C3C6D75C06F85E9');
        $this->addSql('ALTER TABLE departement DROP CONSTRAINT FK_C1765B6398260155');
        $this->addSql('ALTER TABLE commune DROP CONSTRAINT FK_E2E2D1EECCF9E01E');
        $this->addSql('ALTER TABLE region DROP CONSTRAINT FK_F62F176F92F3E70');
        $this->addSql('ALTER TABLE adresse DROP CONSTRAINT FK_C35F0816A73F0036');
        $this->addSql('ALTER TABLE action DROP CONSTRAINT FK_47CC8C9254A3B84D');
        $this->addSql('ALTER TABLE domaine_formation_code_formacode DROP CONSTRAINT FK_2AC89678E22A2443');
        $this->addSql('ALTER TABLE domaine_formation_code_nsf DROP CONSTRAINT FK_4932F1F4E22A2443');
        $this->addSql('ALTER TABLE domaine_formation_code_rome DROP CONSTRAINT FK_B9441556E22A2443');
        $this->addSql('ALTER TABLE resume_offre DROP CONSTRAINT FK_33714607E22A2443');
        $this->addSql('ALTER TABLE formation DROP CONSTRAINT FK_404021BFE22A2443');
        $this->addSql('ALTER TABLE formation DROP CONSTRAINT FK_404021BF7EB71A1A');
        $this->addSql('ALTER TABLE session DROP CONSTRAINT FK_D044D5D4DDD4B933');
        $this->addSql('ALTER TABLE organisme_formation_responsable DROP CONSTRAINT FK_B59C780BE69E56DF');
        $this->addSql('ALTER TABLE code_formacode DROP CONSTRAINT FK_51604A503E7A70EB');
        $this->addSql('ALTER TABLE organisme_formation_responsable DROP CONSTRAINT FK_B59C780B3E7A70EB');
        $this->addSql('ALTER TABLE organisme_formateur DROP CONSTRAINT FK_A41FD0083E7A70EB');
        $this->addSql('ALTER TABLE action DROP CONSTRAINT FK_47CC8C92934ABDF');
        $this->addSql('ALTER TABLE module_prerequis DROP CONSTRAINT FK_9082F4C15200282E');
        $this->addSql('ALTER TABLE adresse_inscription DROP CONSTRAINT FK_909E0F394DE7DC5C');
        $this->addSql('ALTER TABLE action DROP CONSTRAINT FK_47CC8C92AE88D1A1');
        $this->addSql('ALTER TABLE coordonnees_organisme DROP CONSTRAINT FK_6BE8BF85853DEDF');
        $this->addSql('ALTER TABLE lieu_de_formation DROP CONSTRAINT FK_1E260C665853DEDF');
        $this->addSql('ALTER TABLE contact_formation DROP CONSTRAINT FK_2EB102C45853DEDF');
        $this->addSql('ALTER TABLE session DROP CONSTRAINT FK_D044D5D445B7B167');
        $this->addSql('ALTER TABLE sous_module DROP CONSTRAINT FK_DC3BD4DF1B04F481');
        $this->addSql('ALTER TABLE action DROP CONSTRAINT FK_47CC8C9252D487EF');
        $this->addSql('ALTER TABLE formation DROP CONSTRAINT FK_404021BF2A5032B2');
        $this->addSql('ALTER TABLE resume_offre DROP CONSTRAINT FK_3371460716F928FB');
        $this->addSql('ALTER TABLE formation DROP CONSTRAINT FK_404021BF16F928FB');
        $this->addSql('ALTER TABLE formation DROP CONSTRAINT FK_404021BF75F028B8');
        $this->addSql('ALTER TABLE organisme_financeur DROP CONSTRAINT FK_FA5217B9963F95E9');
        $this->addSql('ALTER TABLE resume_offre DROP CONSTRAINT FK_33714607E5CB8311');
        $this->addSql('ALTER TABLE action DROP CONSTRAINT FK_47CC8C92E5CB8311');
        $this->addSql('ALTER TABLE action DROP CONSTRAINT FK_47CC8C9289FFC773');
        $this->addSql('ALTER TABLE formation DROP CONSTRAINT FK_404021BF67F1F406');
        $this->addSql('DROP SEQUENCE code_formacode_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE code_certifinfo_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE code_rncp_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE commune_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE coordonnees_organisme_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE lieu_de_formation_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE domaine_formation_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE contact_formation_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE session_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE contact_organisme_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE adresse_inscription_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE siret_organisme_formation_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE contact_formateur_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE url_formation_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE potentiel_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE organisme_financeur_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE certification_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE date_information_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE siret_formateur_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE url_action_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE resume_offre_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE module_prerequis_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE sous_module_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE resume_organisme_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE formation_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE contact_formation_resume_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE adresse_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE action_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE organisme_formation_responsable_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE organisme_formateur_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE coordonnees_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE etat_recrutement_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE type_module_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE modalite_entree_sortie_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE type_parcours_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE niveau_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE financeur_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE modalite_enseignement_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE perimetre_recrutement_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE objectif_general_formation_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE type_positionnement_id_seq CASCADE');
        $this->addSql('DROP TABLE code_nsf');
        $this->addSql('DROP TABLE code_rome');
        $this->addSql('DROP TABLE code_formacode');
        $this->addSql('DROP TABLE code_certifinfo');
        $this->addSql('DROP TABLE code_rncp');
        $this->addSql('DROP TABLE region');
        $this->addSql('DROP TABLE departement');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE commune');
        $this->addSql('DROP TABLE coordonnees_organisme');
        $this->addSql('DROP TABLE lieu_de_formation');
        $this->addSql('DROP TABLE domaine_formation');
        $this->addSql('DROP TABLE domaine_formation_code_formacode');
        $this->addSql('DROP TABLE domaine_formation_code_nsf');
        $this->addSql('DROP TABLE domaine_formation_code_rome');
        $this->addSql('DROP TABLE contact_formation');
        $this->addSql('DROP TABLE session');
        $this->addSql('DROP TABLE contact_organisme');
        $this->addSql('DROP TABLE adresse_inscription');
        $this->addSql('DROP TABLE siret_organisme_formation');
        $this->addSql('DROP TABLE contact_formateur');
        $this->addSql('DROP TABLE url_formation');
        $this->addSql('DROP TABLE potentiel');
        $this->addSql('DROP TABLE organisme_financeur');
        $this->addSql('DROP TABLE certification');
        $this->addSql('DROP TABLE date_information');
        $this->addSql('DROP TABLE siret_formateur');
        $this->addSql('DROP TABLE url_action');
        $this->addSql('DROP TABLE resume_offre');
        $this->addSql('DROP TABLE module_prerequis');
        $this->addSql('DROP TABLE sous_module');
        $this->addSql('DROP TABLE resume_organisme');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE contact_formation_resume');
        $this->addSql('DROP TABLE adresse');
        $this->addSql('DROP TABLE action');
        $this->addSql('DROP TABLE organisme_formation_responsable');
        $this->addSql('DROP TABLE organisme_formateur');
        $this->addSql('DROP TABLE coordonnees');
        $this->addSql('DROP TABLE etat_recrutement');
        $this->addSql('DROP TABLE type_module');
        $this->addSql('DROP TABLE modalite_entree_sortie');
        $this->addSql('DROP TABLE type_parcours');
        $this->addSql('DROP TABLE niveau');
        $this->addSql('DROP TABLE financeur');
        $this->addSql('DROP TABLE modalite_enseignement');
        $this->addSql('DROP TABLE perimetre_recrutement');
        $this->addSql('DROP TABLE objectif_general_formation');
        $this->addSql('DROP TABLE type_positionnement');
        $this->addSql('ALTER TABLE users DROP confirmation_password');
        $this->addSql('ALTER TABLE users DROP siret');
        $this->addSql('ALTER INDEX uniq_1483a5e9e7927c74 RENAME TO uniq_8d93d649e7927c74');
    }
}
