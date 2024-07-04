<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240704094740 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT fk_6a95e9c4e946114a');
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT fk_6a95e9c4d0f97a8');
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT fk_6a95e9c49f7e4405');
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT fk_6a95e9c4e66695ce');
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT fk_6a95e9c45e0d5582');
        $this->addSql('DROP INDEX idx_6a95e9c45e0d5582');
        $this->addSql('DROP INDEX idx_6a95e9c4e66695ce');
        $this->addSql('DROP INDEX idx_6a95e9c49f7e4405');
        $this->addSql('DROP INDEX idx_6a95e9c4d0f97a8');
        $this->addSql('DROP INDEX idx_6a95e9c4e946114a');
        $this->addSql('ALTER TABLE identity ADD children_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity ADD address_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity ADD personal_info_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity ADD origin_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity ADD education_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity ADD professional_situation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity ADD guardian_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity ADD maternal_grandparent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity ADD paternal_grandparent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity ADD parent_information_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity DROP province_id');
        $this->addSql('ALTER TABLE identity DROP territoire_id');
        $this->addSql('ALTER TABLE identity DROP secteur_id');
        $this->addSql('ALTER TABLE identity DROP groupement_id');
        $this->addSql('ALTER TABLE identity DROP village_id');
        $this->addSql('ALTER TABLE identity DROP firstname');
        $this->addSql('ALTER TABLE identity DROP lastname');
        $this->addSql('ALTER TABLE identity DROP nickname');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT FK_6A95E9C43D3D2749 FOREIGN KEY (children_id) REFERENCES children (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT FK_6A95E9C4F5B7AF75 FOREIGN KEY (address_id) REFERENCES address (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT FK_6A95E9C4DEACC8D3 FOREIGN KEY (personal_info_id) REFERENCES personal_info (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT FK_6A95E9C456A273CC FOREIGN KEY (origin_id) REFERENCES origin (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT FK_6A95E9C42CA1BD71 FOREIGN KEY (education_id) REFERENCES education (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT FK_6A95E9C45FD1333D FOREIGN KEY (professional_situation_id) REFERENCES professional_situation (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT FK_6A95E9C411CC8B0A FOREIGN KEY (guardian_id) REFERENCES guardian (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT FK_6A95E9C4965212D FOREIGN KEY (maternal_grandparent_id) REFERENCES maternal_grandparent (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT FK_6A95E9C49381AF00 FOREIGN KEY (paternal_grandparent_id) REFERENCES paternal_grandparent (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT FK_6A95E9C4302D450A FOREIGN KEY (parent_information_id) REFERENCES parent_information (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6A95E9C43D3D2749 ON identity (children_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6A95E9C4F5B7AF75 ON identity (address_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6A95E9C4DEACC8D3 ON identity (personal_info_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6A95E9C456A273CC ON identity (origin_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6A95E9C42CA1BD71 ON identity (education_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6A95E9C45FD1333D ON identity (professional_situation_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6A95E9C411CC8B0A ON identity (guardian_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6A95E9C4965212D ON identity (maternal_grandparent_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6A95E9C49381AF00 ON identity (paternal_grandparent_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6A95E9C4302D450A ON identity (parent_information_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT FK_6A95E9C43D3D2749');
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT FK_6A95E9C4F5B7AF75');
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT FK_6A95E9C4DEACC8D3');
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT FK_6A95E9C456A273CC');
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT FK_6A95E9C42CA1BD71');
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT FK_6A95E9C45FD1333D');
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT FK_6A95E9C411CC8B0A');
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT FK_6A95E9C4965212D');
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT FK_6A95E9C49381AF00');
        $this->addSql('ALTER TABLE identity DROP CONSTRAINT FK_6A95E9C4302D450A');
        $this->addSql('DROP INDEX UNIQ_6A95E9C43D3D2749');
        $this->addSql('DROP INDEX UNIQ_6A95E9C4F5B7AF75');
        $this->addSql('DROP INDEX UNIQ_6A95E9C4DEACC8D3');
        $this->addSql('DROP INDEX UNIQ_6A95E9C456A273CC');
        $this->addSql('DROP INDEX UNIQ_6A95E9C42CA1BD71');
        $this->addSql('DROP INDEX UNIQ_6A95E9C45FD1333D');
        $this->addSql('DROP INDEX UNIQ_6A95E9C411CC8B0A');
        $this->addSql('DROP INDEX UNIQ_6A95E9C4965212D');
        $this->addSql('DROP INDEX UNIQ_6A95E9C49381AF00');
        $this->addSql('DROP INDEX UNIQ_6A95E9C4302D450A');
        $this->addSql('ALTER TABLE identity ADD province_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity ADD territoire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity ADD secteur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity ADD groupement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity ADD village_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE identity ADD firstname VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE identity ADD lastname VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE identity ADD nickname VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE identity DROP children_id');
        $this->addSql('ALTER TABLE identity DROP address_id');
        $this->addSql('ALTER TABLE identity DROP personal_info_id');
        $this->addSql('ALTER TABLE identity DROP origin_id');
        $this->addSql('ALTER TABLE identity DROP education_id');
        $this->addSql('ALTER TABLE identity DROP professional_situation_id');
        $this->addSql('ALTER TABLE identity DROP guardian_id');
        $this->addSql('ALTER TABLE identity DROP maternal_grandparent_id');
        $this->addSql('ALTER TABLE identity DROP paternal_grandparent_id');
        $this->addSql('ALTER TABLE identity DROP parent_information_id');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT fk_6a95e9c4e946114a FOREIGN KEY (province_id) REFERENCES province (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT fk_6a95e9c4d0f97a8 FOREIGN KEY (territoire_id) REFERENCES territoire (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT fk_6a95e9c49f7e4405 FOREIGN KEY (secteur_id) REFERENCES secteur (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT fk_6a95e9c4e66695ce FOREIGN KEY (groupement_id) REFERENCES groupement (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE identity ADD CONSTRAINT fk_6a95e9c45e0d5582 FOREIGN KEY (village_id) REFERENCES village (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_6a95e9c45e0d5582 ON identity (village_id)');
        $this->addSql('CREATE INDEX idx_6a95e9c4e66695ce ON identity (groupement_id)');
        $this->addSql('CREATE INDEX idx_6a95e9c49f7e4405 ON identity (secteur_id)');
        $this->addSql('CREATE INDEX idx_6a95e9c4d0f97a8 ON identity (territoire_id)');
        $this->addSql('CREATE INDEX idx_6a95e9c4e946114a ON identity (province_id)');
    }
}
