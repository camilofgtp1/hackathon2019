<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191026215042 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE path_way (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE way ADD connected_path_way_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE way ADD CONSTRAINT FK_FBC034B91E1F4D43 FOREIGN KEY (connected_path_way_id) REFERENCES path_way (id)');
        $this->addSql('CREATE INDEX IDX_FBC034B91E1F4D43 ON way (connected_path_way_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE way DROP FOREIGN KEY FK_FBC034B91E1F4D43');
        $this->addSql('DROP TABLE path_way');
        $this->addSql('DROP INDEX IDX_FBC034B91E1F4D43 ON way');
        $this->addSql('ALTER TABLE way DROP connected_path_way_id');
    }
}
