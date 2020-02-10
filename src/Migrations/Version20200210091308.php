<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200210091308 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE projects_wind_generator (projects_id INT NOT NULL, wind_generator_id INT NOT NULL, INDEX IDX_C6FCD8891EDE0F55 (projects_id), INDEX IDX_C6FCD889C9F53A2B (wind_generator_id), PRIMARY KEY(projects_id, wind_generator_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE projects_wind_generator ADD CONSTRAINT FK_C6FCD8891EDE0F55 FOREIGN KEY (projects_id) REFERENCES projects (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projects_wind_generator ADD CONSTRAINT FK_C6FCD889C9F53A2B FOREIGN KEY (wind_generator_id) REFERENCES wind_generator (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE d');
        $this->addSql('ALTER TABLE wind_generator DROP projects');
        $this->addSql('ALTER TABLE projects DROP FOREIGN KEY FK_5C93B3A4C9F53A2B');
        $this->addSql('DROP INDEX IDX_5C93B3A4C9F53A2B ON projects');
        $this->addSql('ALTER TABLE projects DROP wind_generator_id, CHANGE discription discript LONGTEXT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE d (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE projects_wind_generator');
        $this->addSql('ALTER TABLE projects ADD wind_generator_id INT NOT NULL, CHANGE discript discription LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE projects ADD CONSTRAINT FK_5C93B3A4C9F53A2B FOREIGN KEY (wind_generator_id) REFERENCES wind_generator (id)');
        $this->addSql('CREATE INDEX IDX_5C93B3A4C9F53A2B ON projects (wind_generator_id)');
        $this->addSql('ALTER TABLE wind_generator ADD projects VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
