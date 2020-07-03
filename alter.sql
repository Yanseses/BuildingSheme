ALTER TABLE `wp_shema`
	ALTER `room_number` DROP DEFAULT;
ALTER TABLE `wp_shema`
	CHANGE COLUMN `room_number` `room_number` VARCHAR(50) NOT NULL AFTER `room_id`,
	ADD COLUMN `photos` TEXT NOT NULL AFTER `room_size`,
	ADD UNIQUE INDEX `room_number` (`room_number`);


-- ALTER NUMBER 2

ALTER TABLE `wp_shema`
	ADD COLUMN `presentation_link` VARCHAR(50) NOT NULL AFTER `photos`;
