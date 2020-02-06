DROP TABLE IF EXISTS minichat;

CREATE TABLE minichat (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    message TEXT,
    user_id int(11),
    PRIMARY KEY (id),
    FOREIGN KEY(user_id)
        REFERENCES user(id)
        ON DELETE CASCADE
)
ENGINE=INNODB;


