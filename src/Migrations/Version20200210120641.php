<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200210120641 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE projects_wind_generator DROP FOREIGN KEY FK_C6FCD8891EDE0F55');
        $this->addSql('ALTER TABLE projects_wind_generator DROP FOREIGN KEY FK_C6FCD889C9F53A2B');
        $this->addSql('CREATE TABLE generator (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, power INT NOT NULL, voltage INT NOT NULL, type_generator VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE projects');
        $this->addSql('DROP TABLE projects_wind_generator');
        $this->addSql('DROP TABLE wind_generator');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE projects (id INT AUTO_INCREMENT NOT NULL, place VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date DATETIME NOT NULL, discript LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE projects_wind_generator (projects_id INT NOT NULL, wind_generator_id INT NOT NULL, INDEX IDX_C6FCD889C9F53A2B (wind_generator_id), INDEX IDX_C6FCD8891EDE0F55 (projects_id), PRIMARY KEY(projects_id, wind_generator_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE wind_generator (id INT AUTO_INCREMENT NOT NULL, power INT NOT NULL, voltage INT NOT NULL, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, discription LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, generator_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE projects_wind_generator ADD CONSTRAINT FK_C6FCD8891EDE0F55 FOREIGN KEY (projects_id) REFERENCES projects (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projects_wind_generator ADD CONSTRAINT FK_C6FCD889C9F53A2B FOREIGN KEY (wind_generator_id) REFERENCES wind_generator (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE generator');
    }
}
