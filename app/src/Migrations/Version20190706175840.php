<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190706175840 extends AbstractMigration
{
    private $regions = [
        84 => "AUVERGNE-RHONE-ALPES",
        32 => "HAUTS-DE-FRANCE",
        93 => "PROVENCE-ALPES-COTE D'AZUR",
        6 => "MAYOTTE",
        2 => "MARTINIQUE",
        4 => "LA REUNION",
        1 => "GUADELOUPE",
        75 => "NOUVELLE-AQUITAINE",
        44 => "GRAND EST",
        28 => "NORMANDIE",
        11 => "ILE-DE-FRANCE",
        3 => "GUYANE",
        94 => "CORSE",
        24 => "CENTRE-VAL DE LOIRE",
        53 => "BRETAGNE",
        52 => "PAYS DE LA LOIRE",
        27 => "BOURGOGNE-FRANCHE-COMTE",
        76 => "OCCITANIE",
    ];

    public function getDescription() : string
    {
        return 'Administrative Dataset: country & regions';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');
        // Create FRANCE
        $this->addSql("INSERT INTO country(id, name) VALUES ('FR', 'FRANCE')");
        // Create REGIONS
        foreach ($this->regions as $id => $name) {
            $this->addSql(
                sprintf(
                    'INSERT INTO region(id, country_id, name) VALUES (%d, \'FR\', E\'%s\')',
                    $id, addslashes($name)
                )
            );
        }
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');
        $this->addSql("DELETE from region where country_id = 'FR'");
        $this->addSql("DELETE from country where id = 'FR'");
        $this->addSql('CREATE SCHEMA public');
    }
}
