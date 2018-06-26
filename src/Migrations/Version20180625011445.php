<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180625011445 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sales CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE fi_lottery_user_summary_ecsrow CHANGE uid uid INT AUTO_INCREMENT NOT NULL COMMENT \'用户id\', CHANGE consume_count consume_count INT DEFAULT NULL COMMENT \'已抽次数\', CHANGE surplus_count surplus_count INT DEFAULT NULL COMMENT \'剩余次数\'');
        $this->addSql('ALTER TABLE fi_countmoney_record CHANGE money money NUMERIC(20, 0) DEFAULT NULL COMMENT \'数钱金额（分单位）\'');
        $this->addSql('ALTER TABLE shop CHANGE dealer dealer CHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE blog_comment DROP FOREIGN KEY blog_post_id');
        $this->addSql('ALTER TABLE blog_comment CHANGE post_id post_id BIGINT DEFAULT NULL');
        $this->addSql('ALTER TABLE blog_comment ADD CONSTRAINT FK_7882EFEF4B89032C FOREIGN KEY (post_id) REFERENCES blog_post (id)');
        $this->addSql('ALTER TABLE fi_lottery_award_escrow CHANGE award_name award_name VARCHAR(11) NOT NULL COMMENT \'获得奖品名称\'');
        $this->addSql('ALTER TABLE fi_user_score_summary CHANGE uid uid INT AUTO_INCREMENT NOT NULL COMMENT \'用户uid\', CHANGE total_obtain_score total_obtain_score INT DEFAULT NULL COMMENT \'用户累计获得积分总数\', CHANGE total_consume_score total_consume_score INT DEFAULT NULL COMMENT \'用户累计消耗积分总数\', CHANGE total_surplus_count total_surplus_count INT DEFAULT NULL COMMENT \'剩余积分总数(当前积分)\'');
        $this->addSql('ALTER TABLE activity ADD user_name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE t_maiev CHANGE id id INT UNSIGNED AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE fi_countmoney_user CHANGE count_num count_num INT DEFAULT NULL COMMENT \'数钱次数\', CHANGE total_money total_money NUMERIC(20, 0) DEFAULT NULL COMMENT \'数钱金额总数 (分单位)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE activity DROP user_name');
        $this->addSql('ALTER TABLE blog_comment DROP FOREIGN KEY FK_7882EFEF4B89032C');
        $this->addSql('ALTER TABLE blog_comment CHANGE post_id post_id BIGINT NOT NULL');
        $this->addSql('ALTER TABLE blog_comment ADD CONSTRAINT blog_post_id FOREIGN KEY (post_id) REFERENCES blog_post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fi_countmoney_record CHANGE money money NUMERIC(20, 0) DEFAULT \'0\' COMMENT \'数钱金额（分单位）\'');
        $this->addSql('ALTER TABLE fi_countmoney_user CHANGE count_num count_num INT DEFAULT 0 COMMENT \'数钱次数\', CHANGE total_money total_money NUMERIC(20, 0) DEFAULT \'0\' COMMENT \'数钱金额总数 (分单位)\'');
        $this->addSql('ALTER TABLE fi_lottery_award_escrow CHANGE award_name award_name VARCHAR(11) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci COMMENT \'获得奖品名称\'');
        $this->addSql('ALTER TABLE fi_lottery_user_summary_ecsrow CHANGE uid uid INT NOT NULL COMMENT \'用户id\', CHANGE consume_count consume_count INT DEFAULT 0 COMMENT \'已抽次数\', CHANGE surplus_count surplus_count INT DEFAULT 0 COMMENT \'剩余次数\'');
        $this->addSql('ALTER TABLE fi_user_score_summary CHANGE uid uid INT NOT NULL COMMENT \'用户uid\', CHANGE total_obtain_score total_obtain_score INT DEFAULT 0 COMMENT \'用户累计获得积分总数\', CHANGE total_consume_score total_consume_score INT DEFAULT 0 COMMENT \'用户累计消耗积分总数\', CHANGE total_surplus_count total_surplus_count INT DEFAULT 0 COMMENT \'剩余积分总数(当前积分)\'');
        $this->addSql('ALTER TABLE sales CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE shop CHANGE dealer dealer CHAR(20) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE t_maiev CHANGE id id INT UNSIGNED NOT NULL');
    }
}
