<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201123140723 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cataffilies MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE cataffilies DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE cataffilies DROP id');
        $this->addSql('ALTER TABLE cataffilies ADD PRIMARY KEY (cat_id)');
        $this->addSql('ALTER TABLE jobs DROP FOREIGN KEY jobs_ibfk_1');
        $this->addSql('DROP INDEX category_id ON jobs');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cataffilies ADD id INT AUTO_INCREMENT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE jobs ADD CONSTRAINT jobs_ibfk_1 FOREIGN KEY (category_id) REFERENCES categories (id)');
        $this->addSql('CREATE INDEX category_id ON jobs (category_id)');
    }
}
