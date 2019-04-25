<?php
namespace Snelson54\snap;
require_once(dirname(__DIR__) . "/vendor/autoload.php");
use Ramsey\Uuid\Uuid;

class User {
	use ValidateUuid;
	/**
	 * id for this User; this is the primary key
	 * @var Uuid $UserId
	 **/
	private $userId;

	public function __construct(?string $newUserId) {
		try {
			$this->userId;
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			echo "Oh, no";
		}
	}
	/**
	 * accessor method for userId
	 * @return Uuid value of userId (or null if new User)
	 */
	/**
	 * @return Uuid
	 */
	public function getAuthorId(): Uuid {
		return $this->userId;
	}
	/**
	 * mutator method for userId
	 *
	 * @param Uuid| string $newUserId value of new userId
	 * @throws \RangeException if $newUserId is not positive
	 * @throws \TypeError if the userId is not a string
	 */
	/**
	 * @param Uuid $userId
	 */
	public function setUserId($userId): void {
		try {
			$uuid = self::validateUuid($newUserId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception); {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		$this->userId = $uuid;
	}
	/**
	 * accessor method for authorId
	 * @return Uuid value of authorId (or null if new Author)
	 */
	/**
	 * @return Uuid
	 */
	public function getUserEmail(): string {
		return $this->userEmail;
	}
	/**
	 * mutator method for userrId
	 *
	 * @param Uuid| string $newUserId value of new userId
	 * @throws \RangeException if $newUserId is not positive
	 * @throws \TypeError if the userId is not a string
	 */
	/**
	 * @param Uuid $userId
	 */
	public function setUserEmail($userEmail): void {
		try {
			$newUserEmail = trim($newUserEmail);
			$newUserEmail = filter_var($newUserEmail, FILTER_VALIDATE_EMAIL);
			if(empty($newUserEmail) === true) {
				throw(new \InvalidArgumentException("author email is empty or insecure"));
			}
			//verify the email will fit in the datatbase
			if(strlen($newUserEmail) > 128) {
				throw(new \RangeException("author email is too large"));
			}
			$this->userEmail = $newUserEmail;
		}
	}
}
$UserId= new User("bd9be6bc-8ddd-4824-97f2-d5f2e18167f3";