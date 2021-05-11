<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210510132054 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emprunt DROP INDEX UNIQ_364071D737D925CB, ADD INDEX IDX_364071D737D925CB (livre_id)');
        $this->addSql('ALTER TABLE emprunt DROP INDEX UNIQ_364071D7A76ED395, ADD INDEX IDX_364071D7A76ED395 (user_id)');
        $this->addSql('ALTER TABLE emprunt CHANGE user_id user_id INT DEFAULT NULL, CHANGE livre_id livre_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emprunt DROP INDEX IDX_364071D7A76ED395, ADD UNIQUE INDEX UNIQ_364071D7A76ED395 (user_id)');
        $this->addSql('ALTER TABLE emprunt DROP INDEX IDX_364071D737D925CB, ADD UNIQUE INDEX UNIQ_364071D737D925CB (livre_id)');
        $this->addSql('ALTER TABLE emprunt CHANGE user_id user_id INT NOT NULL, CHANGE livre_id livre_id INT NOT NULL');
    }
}
