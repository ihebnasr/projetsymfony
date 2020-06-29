<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200607155154 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE recruteur ADD adresse VARCHAR(1000) NOT NULL, ADD lien_site VARCHAR(1000) NOT NULL, ADD lien_facebook VARCHAR(1000) NOT NULL, ADD lien_linkedin VARCHAR(1000) NOT NULL, ADD telephone VARCHAR(45) NOT NULL, ADD logo VARCHAR(6000) NOT NULL, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE recruteur ADD CONSTRAINT FK_2BD3678CBF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE recruteur DROP FOREIGN KEY FK_2BD3678CBF396750');
        $this->addSql('ALTER TABLE recruteur DROP adresse, DROP lien_site, DROP lien_facebook, DROP lien_linkedin, DROP telephone, DROP logo, CHANGE id id INT AUTO_INCREMENT NOT NULL');
    }
}
