<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221203110100 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638B171EB6C');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638DC26D3A4');
        $this->addSql('DROP INDEX IDX_4C62E638DC26D3A4 ON contact');
        $this->addSql('DROP INDEX UNIQ_4C62E638B171EB6C ON contact');
        $this->addSql('ALTER TABLE contact DROP host_id_id, DROP customer_id_id');
        $this->addSql('ALTER TABLE environment DROP FOREIGN KEY FK_4626DE226C1197C9');
        $this->addSql('DROP INDEX UNIQ_4626DE226C1197C9 ON environment');
        $this->addSql('ALTER TABLE environment DROP project_id_id');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEB171EB6C');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEDC26D3A4');
        $this->addSql('DROP INDEX UNIQ_2FB3D0EEB171EB6C ON project');
        $this->addSql('DROP INDEX UNIQ_2FB3D0EEDC26D3A4 ON project');
        $this->addSql('ALTER TABLE project DROP host_id_id, DROP customer_id_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact ADD host_id_id INT DEFAULT NULL, ADD customer_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638B171EB6C FOREIGN KEY (customer_id_id) REFERENCES customer (id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638DC26D3A4 FOREIGN KEY (host_id_id) REFERENCES host (id)');
        $this->addSql('CREATE INDEX IDX_4C62E638DC26D3A4 ON contact (host_id_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4C62E638B171EB6C ON contact (customer_id_id)');
        $this->addSql('ALTER TABLE environment ADD project_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE environment ADD CONSTRAINT FK_4626DE226C1197C9 FOREIGN KEY (project_id_id) REFERENCES project (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4626DE226C1197C9 ON environment (project_id_id)');
        $this->addSql('ALTER TABLE project ADD host_id_id INT DEFAULT NULL, ADD customer_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEB171EB6C FOREIGN KEY (customer_id_id) REFERENCES customer (id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEDC26D3A4 FOREIGN KEY (host_id_id) REFERENCES host (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2FB3D0EEB171EB6C ON project (customer_id_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2FB3D0EEDC26D3A4 ON project (host_id_id)');
    }
}
