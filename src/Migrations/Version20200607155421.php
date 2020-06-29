<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200607155421 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE offre_emploi ADD recruteur_id INT NOT NULL, ADD detail_offre VARCHAR(6000) NOT NULL, ADD date_expiration VARCHAR(30) NOT NULL, ADD type_emploi VARCHAR(100) NOT NULL, ADD type_salaire VARCHAR(100) NOT NULL, ADD type_contrat VARCHAR(100) NOT NULL, ADD profil_recherche VARCHAR(5000) NOT NULL, DROP id_recruteur, DROP id_entretien');
        $this->addSql('ALTER TABLE offre_emploi ADD CONSTRAINT FK_132AD0D1BB0859F1 FOREIGN KEY (recruteur_id) REFERENCES recruteur (id)');
        $this->addSql('CREATE INDEX IDX_132AD0D1BB0859F1 ON offre_emploi (recruteur_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE offre_emploi DROP FOREIGN KEY FK_132AD0D1BB0859F1');
        $this->addSql('DROP INDEX IDX_132AD0D1BB0859F1 ON offre_emploi');
        $this->addSql('ALTER TABLE offre_emploi ADD id_entretien INT NOT NULL, DROP detail_offre, DROP date_expiration, DROP type_emploi, DROP type_salaire, DROP type_contrat, DROP profil_recherche, CHANGE recruteur_id id_recruteur INT NOT NULL');
    }
}
