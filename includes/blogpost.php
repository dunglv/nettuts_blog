<?php
/**
* undocumented class
*
* @package default
* @author
**/
class BlogPost
{
	public $id;
	public $title;
	public $alias;
	public $post;
	public $author;
	public $tags;
	public $datePosted;
	function __construct($inId =null, $inTitle =null, $inAlias= null, $inPost= null, $inAuthorId= null, $inDatePosted= null)
		{
			if (!empty($inId))
	    {
	        $this->id = $inId;
	    }
	    if (!empty($inTitle))
	    {
	        $this->title = $inTitle;
	    }
	     if (!empty($inAlias))
	    {
	        $this->alias = $inAlias;
	    }
	    if (!empty($inPost))
	    {
	        $this->post = $inPost;
	    }
	 
	    if (!empty($inDatePosted))
	    {
	        $splitDate = explode("-", $inDatePosted);
	        $this->datePosted = $splitDate[1] . "/" . $splitDate[2] . "/" . $splitDate[0];
	    }
	 
	    if (!empty($inAuthorId))
	    {
	        $query = mysql_query("SELECT first_name, last_name FROM people WHERE id = " . $inAuthorId);
	        $row = mysql_fetch_assoc($query);
	        $this->author = $row["first_name"] . " " . $row["last_name"];
	    }
		
		$postTags = "No Tags";
		// get tag
		if (!empty($inId))
	    {
	        $query = mysql_query("SELECT tags.* FROM blog_post_tags LEFT JOIN (tags) ON (blog_post_tags.tag_id = tags.id) WHERE blog_post_tags.blog_post_id = " . $inId);
	        $tagArray = array();
	        $tagIDArray = array();
	        while($row = mysql_fetch_assoc($query))
	        {
	            array_push($tagArray, $row["name"]);
	            array_push($tagIDArray, $row["id"]);
	        }
	        if (sizeof($tagArray) > 0)
	        {
	            foreach ($tagArray as $tag)
	            {
	                if ($postTags == "No Tags")
	                {
	                    $postTags = $tag;
	                }
	                else
	                {
	                    $postTags = $postTags . ", " . $tag;
	                }
	            }
	        }
	    }
	    $this->tags = $postTags;
	}

	public function getPosts($db, $inId= null, $inAuthorId =null, $inTagId = null)
	{
		if (!empty($inId)) {
			$query = mysqli_query($db, "SELECT * FROM blog_posts WHERE id = " . $inId . " ORDER BY id DESC");
		}else if(!empty($inAuthorId)){
			$query = mysqli_query($db, "SELECT * FROM blog_posts WHERE author = " . $inAuthorId . " ORDER BY id DESC");
		}else if(!empty($inTagId)){
			    $query = mysqli_query($db, "SELECT blog_posts.* FROM blog_post_tags LEFT JOIN (blog_posts) ON (blog_post_tags.postID = blog_posts.id) WHERE blog_post_tags.tagID =" . $tagID . " ORDER BY blog_posts.id DESC");

		}else{
			$query = mysqli_query($db, "SELECT * FROM blog_posts ORDER BY id DESC");
		}

		$postArray = array();
		while ($row = mysqli_fetch_assoc($query))
		{
		    $myPost = new BlogPost($row["id"], $row['title'], $row['post'], $row['postfull'], $row['first_name'] . " " . $row['last_name'], $row['dateposted']);
		    // array_push($postArray, $myPost);
		}
		return $postArray;
	}

} // END class