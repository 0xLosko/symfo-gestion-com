<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221203112123 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact ADD host_id INT DEFAULT NULL, ADD customer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E6381FB8D185 FOREIGN KEY (host_id) REFERENCES host (id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E6389395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (id)');
        $this->addSql('CREATE INDEX IDX_4C62E6381FB8D185 ON contact (host_id)');
        $this->addSql('CREATE INDEX IDX_4C62E6389395C3F3 ON contact (customer_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E6381FB8D185');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E6389395C3F3');
        $this->addSql('DROP INDEX IDX_4C62E6381FB8D185 ON contact');
        $this->addSql('DROP INDEX IDX_4C62E6389395C3F3 ON contact');
        $this->addSql('ALTER TABLE contact DROP host_id, DROP customer_id');
    }
}
