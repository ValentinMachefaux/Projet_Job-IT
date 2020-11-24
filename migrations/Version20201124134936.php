<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201124134936 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE affilies_categories (affilies_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_E84D655A144C5CF3 (affilies_id), INDEX IDX_E84D655AA21214B7 (categories_id), PRIMARY KEY(affilies_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE affilies_categories ADD CONSTRAINT FK_E84D655A144C5CF3 FOREIGN KEY (affilies_id) REFERENCES affilies (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE affilies_categories ADD CONSTRAINT FK_E84D655AA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE cataffilies');
        $this->addSql('ALTER TABLE jobs CHANGE category_id_id category_id_id INT DEFAULT NULL, CHANGE logo logo VARCHAR(100) DEFAULT NULL, CHANGE url url VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cataffilies (cat_id INT NOT NULL, affilies_id INT NOT NULL, PRIMARY KEY(cat_id, affilies_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE affilies_categories');
        $this->addSql('ALTER TABLE jobs CHANGE category_id_id category_id_id INT DEFAULT NULL, CHANGE logo logo VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE url url VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
