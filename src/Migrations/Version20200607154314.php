<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200607154314 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE administrateur (id INT AUTO_INCREMENT NOT NULL, email_admin VARCHAR(255) NOT NULL, nom_admin VARCHAR(255) NOT NULL, prenom_admin VARCHAR(255) NOT NULL, mdp_admin VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', dtype VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidat (id INT NOT NULL, prenom_candidat VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, tel_candidat VARCHAR(255) NOT NULL, genre_candidat VARCHAR(255) NOT NULL, domaine_candidat VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, photo_candidat VARCHAR(255) NOT NULL, linkedin VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entretien (id INT AUTO_INCREMENT NOT NULL, nom_entretien VARCHAR(255) NOT NULL, description VARCHAR(2000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entretien_candidat (id INT AUTO_INCREMENT NOT NULL, date_entretien DATE NOT NULL, id_candidat INT NOT NULL, id_entretien INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE experience_profissionnelle (id INT AUTO_INCREMENT NOT NULL, candidat_id INT NOT NULL, nom_exp VARCHAR(1000) NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, entreprise VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_45D2C6288D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offre_candidat (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, etat VARCHAR(10) NOT NULL, id_candidat INT NOT NULL, id_offre INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offre_emploi (id INT AUTO_INCREMENT NOT NULL, nom_poste VARCHAR(255) NOT NULL, salaire INT NOT NULL, exigence VARCHAR(2000) NOT NULL, domaine VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, id_recruteur INT NOT NULL, id_entretien INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proposition (id INT AUTO_INCREMENT NOT NULL, nom_prop VARCHAR(1000) NOT NULL, etat_prop TINYINT(1) NOT NULL, id_question INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, contenu VARCHAR(255) NOT NULL, type VARCHAR(40) NOT NULL, description VARCHAR(1000) NOT NULL, reponse VARCHAR(255) NOT NULL, id_entretien INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recruteur (id INT AUTO_INCREMENT NOT NULL, cin_recruteur VARCHAR(12) NOT NULL, nom_recruteur VARCHAR(50) NOT NULL, prenom_recruteur VARCHAR(50) NOT NULL, email_recruteur VARCHAR(255) NOT NULL, mdp_recruteur VARCHAR(200) NOT NULL, nom_societe VARCHAR(255) NOT NULL, date DATE NOT NULL, domaine VARCHAR(255) NOT NULL, description VARCHAR(2000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse_candidat (id INT AUTO_INCREMENT NOT NULL, reponse VARCHAR(1000) NOT NULL, duree VARCHAR(55) NOT NULL, date DATE NOT NULL, id_candidat INT NOT NULL, id_question INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidat ADD CONSTRAINT FK_6AB5B471BF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE experience_profissionnelle ADD CONSTRAINT FK_45D2C6288D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE candidat DROP FOREIGN KEY FK_6AB5B471BF396750');
        $this->addSql('ALTER TABLE experience_profissionnelle DROP FOREIGN KEY FK_45D2C6288D0EB82');
        $this->addSql('DROP TABLE administrateur');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE candidat');
        $this->addSql('DROP TABLE entretien');
        $this->addSql('DROP TABLE entretien_candidat');
        $this->addSql('DROP TABLE experience_profissionnelle');
        $this->addSql('DROP TABLE offre_candidat');
        $this->addSql('DROP TABLE offre_emploi');
        $this->addSql('DROP TABLE proposition');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE recruteur');
        $this->addSql('DROP TABLE reponse_candidat');
    }
}
