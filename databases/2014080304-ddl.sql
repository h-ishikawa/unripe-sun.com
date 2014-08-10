DROP TABLE IF EXISTS users;

-- $B%f!<%6!<(B

CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTO_INCREMENT
  , email VARCHAR(128) NOT NULL
  , password VARCHAR(128) NOT NULL
  , last_name VARCHAR(128) NOT NULL
  , first_name VARCHAR(128) NOT NULL
  , role VARCHAR(32) NOT NULL
  , created_at TIMESTAMP NOT NULL DEFAULT 0
  , updated_at TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW()
) ENGINE = InnoDB
DEFAULT CHARACTER SET 'utf8';
ALTER TABLE users AUTO_INCREMENT = 1001;