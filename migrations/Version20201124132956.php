<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201124132956 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX affilies_id ON cataffilies');
        $this->addSql('ALTER TABLE jobs ADD category_id_id INT DEFAULT NULL, DROP category_id, CHANGE logo logo VARCHAR(100) DEFAULT NULL, CHANGE url url VARCHAR(255) DEFAULT NULL, CHANGE expire expire DATETIME NOT NULL');
        $this->addSql('ALTER TABLE jobs ADD CONSTRAINT FK_A8936DC59777D11E FOREIGN KEY (category_id_id) REFERENCES categories (id)');
        $this->addSql('CREATE INDEX IDX_A8936DC59777D11E ON jobs (category_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE INDEX affilies_id ON cataffilies (affilies_id)');
        $this->addSql('ALTER TABLE jobs DROP FOREIGN KEY FK_A8936DC59777D11E');
        $this->addSql('DROP INDEX IDX_A8936DC59777D11E ON jobs');
        $this->addSql('ALTER TABLE jobs ADD category_id INT NOT NULL, DROP category_id_id, CHANGE logo logo VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE url url VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE expire expire DATETIME DEFAULT \'NULL\'');
    }
}
