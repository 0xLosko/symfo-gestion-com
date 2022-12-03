<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221203111132 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE host_customer (host_id INT NOT NULL, customer_id INT NOT NULL, INDEX IDX_D0D0721F1FB8D185 (host_id), INDEX IDX_D0D0721F9395C3F3 (customer_id), PRIMARY KEY(host_id, customer_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE host_customer ADD CONSTRAINT FK_D0D0721F1FB8D185 FOREIGN KEY (host_id) REFERENCES host (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE host_customer ADD CONSTRAINT FK_D0D0721F9395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contact ADD host_id INT DEFAULT NULL, ADD customer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E6381FB8D185 FOREIGN KEY (host_id) REFERENCES host (id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E6389395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4C62E6381FB8D185 ON contact (host_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4C62E6389395C3F3 ON contact (customer_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE host_customer DROP FOREIGN KEY FK_D0D0721F1FB8D185');
        $this->addSql('ALTER TABLE host_customer DROP FOREIGN KEY FK_D0D0721F9395C3F3');
        $this->addSql('DROP TABLE host_customer');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E6381FB8D185');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E6389395C3F3');
        $this->addSql('DROP INDEX UNIQ_4C62E6381FB8D185 ON contact');
        $this->addSql('DROP INDEX UNIQ_4C62E6389395C3F3 ON contact');
        $this->addSql('ALTER TABLE contact DROP host_id, DROP customer_id');
    }
}
