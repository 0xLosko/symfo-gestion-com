<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221203110404 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE environment DROP FOREIGN KEY FK_4626DE226C1197C9');
        $this->addSql('DROP INDEX UNIQ_4626DE226C1197C9 ON environment');
        $this->addSql('ALTER TABLE environment CHANGE project_id_id project_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE environment ADD CONSTRAINT FK_4626DE22166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4626DE22166D1F9C ON environment (project_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE environment DROP FOREIGN KEY FK_4626DE22166D1F9C');
        $this->addSql('DROP INDEX UNIQ_4626DE22166D1F9C ON environment');
        $this->addSql('ALTER TABLE environment CHANGE project_id project_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE environment ADD CONSTRAINT FK_4626DE226C1197C9 FOREIGN KEY (project_id_id) REFERENCES project (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4626DE226C1197C9 ON environment (project_id_id)');
    }
}
