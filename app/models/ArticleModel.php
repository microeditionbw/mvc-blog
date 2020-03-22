<?php
/**
 * Article Model
 */
class ArticleModel extends Model
{
	function getArticleById($id)
	{
		return $this->db->row("SELECT articles.* FROM articles WHERE articles.id = {$id}");
	}

	function getArticlesPage($page, $interval)
	{
		return $this->db->row("SELECT articles.* FROM articles LIMIT ".($page * $interval) .",". $interval);
	}

	function getSearchArticle($page, $interval, $s)
	{
		return $this->db->row("SELECT articles.* FROM articles WHERE articles.header LIKE '%".$s."%' OR articles.description LIKE '%".$s."%' LIMIT ".($page * $interval) .",". $interval);
	}
	
	/*

	SELECT tags.* FROM tags RIGHT JOIN articles_tag ON (articles_tag.article_id = 3 and articles_tag.tag_id = tags.id) получить теги с айди артиклем 3

	SELECT articles.* FROM articles RIGHT JOIN articles_tag ON (articles_tag.article_id = articles.id and articles_tag.tag_id = 7) получить все записи с айди тегом 7

	*/
}