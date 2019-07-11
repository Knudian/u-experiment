<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190711132201 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE code_formacode ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE code_certifinfo ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE code_rncp ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE coordonnees_organisme ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE lieu_de_formation ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE domaine_formation ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE contact_formation ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE session ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE contact_organisme ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE adresse_inscription ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE siret_organisme_formation ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE contact_formateur ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE url_formation ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE potentiel ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE organisme_financeur ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE certification ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE date_information ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE siret_formateur ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE url_action ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE resume_offre ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE module_prerequis ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE sous_module ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE resume_organisme ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE formation ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE contact_formation_resume ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE adresse ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE action ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE organisme_formation_responsable ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE organisme_formateur ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE coordonnees ADD name VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE contact_organisme DROP name');
        $this->addSql('ALTER TABLE contact_formateur DROP name');
        $this->addSql('ALTER TABLE url_formation DROP name');
        $this->addSql('ALTER TABLE date_information DROP name');
        $this->addSql('ALTER TABLE siret_formateur DROP name');
        $this->addSql('ALTER TABLE resume_organisme DROP name');
        $this->addSql('ALTER TABLE contact_formation_resume DROP name');
        $this->addSql('ALTER TABLE potentiel DROP name');
        $this->addSql('ALTER TABLE code_formacode DROP name');
        $this->addSql('ALTER TABLE coordonnees DROP name');
        $this->addSql('ALTER TABLE coordonnees_organisme DROP name');
        $this->addSql('ALTER TABLE lieu_de_formation DROP name');
        $this->addSql('ALTER TABLE domaine_formation DROP name');
        $this->addSql('ALTER TABLE contact_formation DROP name');
        $this->addSql('ALTER TABLE session DROP name');
        $this->addSql('ALTER TABLE adresse_inscription DROP name');
        $this->addSql('ALTER TABLE adresse DROP name');
        $this->addSql('ALTER TABLE organisme_financeur DROP name');
        $this->addSql('ALTER TABLE code_rncp DROP name');
        $this->addSql('ALTER TABLE certification DROP name');
        $this->addSql('ALTER TABLE code_certifinfo DROP name');
        $this->addSql('ALTER TABLE resume_offre DROP name');
        $this->addSql('ALTER TABLE formation DROP name');
        $this->addSql('ALTER TABLE module_prerequis DROP name');
        $this->addSql('ALTER TABLE sous_module DROP name');
        $this->addSql('ALTER TABLE action DROP name');
        $this->addSql('ALTER TABLE url_action DROP name');
        $this->addSql('ALTER TABLE organisme_formation_responsable DROP name');
        $this->addSql('ALTER TABLE siret_organisme_formation DROP name');
        $this->addSql('ALTER TABLE organisme_formateur DROP name');
    }
}
