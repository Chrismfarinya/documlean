<?php

namespace Documlean\Db\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20151127235333 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE documlean_DocumentText (id INT AUTO_INCREMENT NOT NULL, documentId INT NOT NULL, text LONGTEXT NOT NULL, datetimeRowCreated DATETIME NOT NULL, datetimeRowUpdated DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE documlean_Tagging (id INT AUTO_INCREMENT NOT NULL, tag_id INT DEFAULT NULL, resource_type VARCHAR(50) NOT NULL, resource_id VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_D6DFDB73BAD26311 (tag_id), UNIQUE INDEX tagging_idx (tag_id, resource_type, resource_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE documlean_Tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, slug VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_30929C55E237E06 (name), UNIQUE INDEX UNIQ_30929C5989D9B62 (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE documlean_Document (id INT AUTO_INCREMENT NOT NULL, publicId VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, mediaType VARCHAR(255) NOT NULL, datetimeDocument DATETIME NOT NULL, datetimeFiled DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE documlean_Tagging ADD CONSTRAINT FK_D6DFDB73BAD26311 FOREIGN KEY (tag_id) REFERENCES documlean_Tag (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE documlean_Tagging DROP FOREIGN KEY FK_D6DFDB73BAD26311');
        $this->addSql('DROP TABLE documlean_DocumentText');
        $this->addSql('DROP TABLE documlean_Tagging');
        $this->addSql('DROP TABLE documlean_Tag');
        $this->addSql('DROP TABLE documlean_Document');
    }
}
