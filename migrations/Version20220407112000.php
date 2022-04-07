<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220407112000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chaussure ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE chaussure ADD CONSTRAINT FK_43D47897A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_43D47897A76ED395 ON chaussure (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chaussure DROP FOREIGN KEY FK_43D47897A76ED395');
        $this->addSql('DROP INDEX IDX_43D47897A76ED395 ON chaussure');
        $this->addSql('ALTER TABLE chaussure DROP user_id');
    }
}
