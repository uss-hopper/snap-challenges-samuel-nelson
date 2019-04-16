drop table if exists task;

create table task(
	taskId binary(20) not null,
	taskTitle varchar(255) not null,
	taskStartDate datetime null,
	taskDueDate datetime null,
	taskStatus varchar(64) not null,
	taskPriority varchar(64) not null,
	taskDescription varchar(256) null,
	primary key (taskId),
	index (taskId)
);

SELECT tweetContent.tweet, profileAtHandle.profile from tweet INNERJOIN profile WHERE tweetId = HEX("0536faef082b454e9d444cdbe7887d7");
