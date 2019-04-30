<?php

/**
 * gets the Tweet by tweetDate
 *
 * @param \PDO $pdo PDO connection object
 * @param Uuid|string $tweetDate tweet date to search for
 * @return Tweet|null Tweet found or null if not found
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError when a variable are not the correct data type
 **/

public static function getTweetByTweetDate(\Pdo $pdo, $tweetId) : ?Tweet {
	//sanitize date before searching
	try {
		$tweetDate = self.valitdateDate($tweetDate);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			throw(new \PDOException($exception->getMessage(), 0, $exception));
	}
	//create query template
	$query = "SELECT tweetContent FROM tweet WHERE tweetDate = :tweetDate";
	$statement = $pdo->prepare($query);

	//bind the tweet date to the place holder in the template
	$parameters = ["tweetDate" => $tweetDate->getBytes()];
	$statement->execute($parameters);

	//grab the tweets from MySQL
	try {
		$tweetDate = null;
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		$row = $statement->fetch();
		if($row !== false) {
			$tweet = new Tweet($row["tweetId", $row["tweetProfileId"], $row["tweetContent"], $row[$tweetDate]);
		}
	} catch(\Exception $exception) {
		//if the row couldn't be converted, rethrow it
		throw(new \PDOException($exception->getMessage(), 0, $exception));
	}
	return($tweet);
}
