<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190709051726 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE recruitment_perimeter_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE recruitment_perimeter (id INT NOT NULL, name VARCHAR(20) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE users ADD confirmation_password VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE users ADD siret VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE recruitment_perimeter_id_seq CASCADE');
        $this->addSql('DROP TABLE recruitment_perimeter');
        $this->addSql('ALTER TABLE users DROP confirmation_password');
        $this->addSql('ALTER TABLE users DROP siret');
    }
}
