<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190706175902 extends AbstractMigration
{
    private $departements = [
        [ "1", 84, "AIN"],
        [ "10", 44, "AUBE"],
        [ "11", 76, "AUDE"],
        [ "12", 76, "AVEYRON"],
        [ "13", 93, "BOUCHES-DU-RHONE"],
        [ "14", 28, "CALVADOS"],
        [ "15", 84, "CANTAL"],
        [ "16", 75, "CHARENTE"],
        [ "17", 75, "CHARENTE-MARITIME"],
        [ "18", 24, "CHER"],
        [ "19", 75, "CORREZE"],
        [ "2", 32, "AISNE"],
        [ "21", 27, "COTE-D'OR"],
        [ "22", 53, "COTES-D'ARMOR"],
        [ "23", 75, "CREUSE"],
        [ "24", 75, "DORDOGNE"],
        [ "25", 27, "DOUBS"],
        [ "26", 84, "DROME"],
        [ "27", 28, "EURE"],
        [ "28", 24, "EURE-ET-LOIR"],
        [ "29", 53, "FINISTERE"],
        [ "2A", 94, "CORSE-DU-SUD"],
        [ "2B", 94, "HAUTE-CORSE"],
        [ "3", 84, "ALLIER"],
        [ "30", 76, "GARD"],
        [ "31", 76, "HAUTE-GARONNE"],
        [ "32", 76, "GERS"],
        [ "33", 75, "GIRONDE"],
        [ "34", 76, "HERAULT"],
        [ "35", 53, "ILLE-ET-VILAINE"],
        [ "36", 24, "INDRE"],
        [ "37", 24, "INDRE-ET-LOIRE"],
        [ "38", 84, "ISERE"],
        [ "39", 27, "JURA"],
        [ "4", 93, "ALPES-DE-HAUTE-PROVENCE"],
        [ "40", 75, "LANDES"],
        [ "41", 24, "LOIR-ET-CHER"],
        [ "42", 84, "LOIRE"],
        [ "43", 84, "HAUTE-LOIRE"],
        [ "44", 52, "LOIRE-ATLANTIQUE"],
        [ "45", 24, "LOIRET"],
        [ "46", 76, "LOT"],
        [ "47", 75, "LOT-ET-GARONNE"],
        [ "48", 76, "LOZERE"],
        [ "49", 52, "MAINE-ET-LOIRE"],
        [ "5", 93, "HAUTES-ALPES"],
        [ "50", 28, "MANCHE"],
        [ "51", 44, "MARNE"],
        [ "52", 44, "HAUTE-MARNE"],
        [ "53", 52, "MAYENNE"],
        [ "54", 44, "MEURTHE-ET-MOSELLE"],
        [ "55", 44, "MEUSE"],
        [ "56", 53, "MORBIHAN"],
        [ "57", 44, "MOSELLE"],
        [ "58", 27, "NIEVRE"],
        [ "59", 32, "NORD"],
        [ "6", 93, "ALPES-MARITIMES"],
        [ "60", 32, "OISE"],
        [ "61", 28, "ORNE"],
        [ "62", 32, "PAS-DE-CALAIS"],
        [ "63", 84, "PUY-DE-DOME"],
        [ "64", 75, "PYRENEES-ATLANTIQUES"],
        [ "65", 76, "HAUTES-PYRENEES"],
        [ "66", 76, "PYRENEES-ORIENTALES"],
        [ "67", 44, "BAS-RHIN"],
        [ "68", 44, "HAUT-RHIN"],
        [ "69", 84, "RHONE"],
        [ "7", 84, "ARDECHE"],
        [ "70", 27, "HAUTE-SAONE"],
        [ "71", 27, "SAONE-ET-LOIRE"],
        [ "72", 52, "SARTHE"],
        [ "73", 84, "SAVOIE"],
        [ "74", 84, "HAUTE-SAVOIE"],
        [ "75", 11, "PARIS"],
        [ "76", 28, "SEINE-MARITIME"],
        [ "77", 11, "SEINE-ET-MARNE"],
        [ "78", 11, "YVELINES"],
        [ "79", 75, "DEUX-SEVRES"],
        [ "8", 44, "ARDENNES"],
        [ "80", 32, "SOMME"],
        [ "81", 76, "TARN"],
        [ "82", 76, "TARN-ET-GARONNE"],
        [ "83", 93, "VAR"],
        [ "84", 93, "VAUCLUSE"],
        [ "85", 52, "VENDEE"],
        [ "86", 75, "VIENNE"],
        [ "87", 75, "HAUTE-VIENNE"],
        [ "88", 44, "VOSGES"],
        [ "89", 27, "YONNE"],
        [ "9", 76, "ARIEGE"],
        [ "90", 27, "TERRITOIRE DE BELFORT"],
        [ "91", 11, "ESSONNE"],
        [ "92", 11, "HAUTS-DE-SEINE"],
        [ "93", 11, "SEINE-SAINT-DENIS"],
        [ "94", 11, "VAL-DE-MARNE"],
        [ "95", 11, "VAL-D'OISE"],
        [ "971", 1, "GUADELOUPE"],
        [ "972", 2, "MARTINIQUE"],
        [ "973", 3, "GUYANE"],
        [ "974", 4, "LA REUNION"],
    ];

    public function getDescription() : string
    {
        return 'Administrative dataset : departements';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');
        foreach ($this->departements as $departement) {
            $this->addSql(
                sprintf(
                    'INSERT INTO departement(id, region_id, name) VALUES (E\'%s\', %d, E\'%s\')',
                    $departement[0],
                    $departement[1],
                    addslashes($departement[2])
                )
            );
        }
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
    }
}