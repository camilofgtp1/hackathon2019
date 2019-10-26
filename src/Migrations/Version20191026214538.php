<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191026214538 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE node (id INT AUTO_INCREMENT NOT NULL, latitude DOUBLE PRECISION NOT NULL, longitude DOUBLE PRECISION NOT NULL, display_name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE way (id INT AUTO_INCREMENT NOT NULL, origin_id INT NOT NULL, destination_id INT NOT NULL, INDEX IDX_FBC034B956A273CC (origin_id), INDEX IDX_FBC034B9816C6140 (destination_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE way ADD CONSTRAINT FK_FBC034B956A273CC FOREIGN KEY (origin_id) REFERENCES node (id)');
        $this->addSql('ALTER TABLE way ADD CONSTRAINT FK_FBC034B9816C6140 FOREIGN KEY (destination_id) REFERENCES node (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE way DROP FOREIGN KEY FK_FBC034B956A273CC');
        $this->addSql('ALTER TABLE way DROP FOREIGN KEY FK_FBC034B9816C6140');
        $this->addSql('DROP TABLE node');
        $this->addSql('DROP TABLE way');
    }
}
